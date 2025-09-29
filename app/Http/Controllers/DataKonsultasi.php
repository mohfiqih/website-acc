<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\Image;
use App\Models\ProvinsiModel;
use Barryvdh\DomPDF\Facade\Pdf;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class DataKonsultasi extends Controller
{
    protected $googleScriptUrl = "https://script.google.com/macros/s/AKfycbyCSsWEpYv0I9mWJvFbpNdr0hTF1LS-mGk8us4MZrmJdW2xjDAIU_qnkKCMFLPKHbEY5Q/exec";
    
    public function data_konsultasi()
    {
        $response = Http::get($this->googleScriptUrl);

        if (!$response->successful()) {
            return back()->with('error', 'Gagal ambil data dari Google Script');
        }

        $json = $response->json();

        if (!is_array($json)) {
            \Log::error('Google Script response bukan array', ['body' => $response->body()]);
            $json = [];
        }

        $data = $json;
        $cleanedData = [];

        // untuk statistik
        $perBulan = [];
        $perTahun = [];
        $perProvinsi = [];
        $perKabupaten = [];

        // daftar nama bulan
        $namaBulan = [
            1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April',
            5 => 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Agustus',
            9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'
        ];

        foreach ($data as $row) {
            $cleanedRow = [];
            foreach ($row as $key => $value) {
                if ($key === 'Timestamp') {
                    continue;
                }

                if ($key === 'Tanggal Konsultasi') {
                    $dateOnly = substr($value, 0, 10);
                    $cleanedRow[$key] = $dateOnly;

                    // parsing bulan & tahun
                    $time = strtotime($dateOnly);
                    $bulan = (int) date('m', $time); // angka bulan
                    $tahun = date('Y', $time);

                    $nama = $namaBulan[$bulan] . ' ' . $tahun; // contoh: Januari 2025

                    // Hitung per bulan (pakai nama bulan + tahun)
                    $perBulan[$nama] = ($perBulan[$nama] ?? 0) + 1;
                    // Hitung per tahun
                    $perTahun[$tahun] = ($perTahun[$tahun] ?? 0) + 1;
                } else {
                    $cleanedRow[$key] = $value;

                    if ($key === 'Provinsi') {
                        $perProvinsi[$value] = ($perProvinsi[$value] ?? 0) + 1;
                    }
                    if ($key === 'Kabupaten') {
                        $perKabupaten[$value] = ($perKabupaten[$value] ?? 0) + 1;
                    }
                }
            }
            $cleanedData[] = $cleanedRow;
        }

        return view('landing.data-konsultasi', [
            'cleanedData' => $cleanedData,
            'perBulan' => $perBulan,
            'perTahun' => $perTahun,
            'perProvinsi' => $perProvinsi,
            'perKabupaten' => $perKabupaten,
        ]);
    }

    public function refreshTablePendaftaran()
    {
        $response = Http::get($this->googleScriptUrl);
        $data     = array_reverse($response->json());

        $cleanedData = [];

        foreach ($data as $row) {
            $cleanedRow = [];
            foreach ($row as $key => $value) {
                if ($key === 'Timestamp') {
                    continue;
                }

                if ($key === 'Tanggal Konsultasi') {
                    $dateOnly = substr($value, 0, 10);
                    $cleanedRow[$key] = $dateOnly;
                } else {
                    $cleanedRow[$key] = $value;
                }
            }
            $cleanedData[] = $cleanedRow;
        }

        return view('partials.table_konsultasi', compact('cleanedData'));
    }

    public function exportPdf()
    {
        $response = Http::get($this->googleScriptUrl);

        if (!$response->successful()) {
            return back()->with('error', 'Gagal ambil data dari Google Script');
        }

        $json = $response->json();

        if (!is_array($json)) {
            \Log::error('Google Script response bukan array', ['body' => $response->body()]);
            $json = [];
        }

        $data = [];
        foreach ($json as $row) {
            $cleanedRow = [];
            foreach ($row as $key => $value) {
                if ($key === 'Timestamp') {
                    continue;
                }
                if ($key === 'Tanggal Konsultasi') {
                    $dateOnly = substr($value, 0, 10);
                    $cleanedRow[$key] = $dateOnly;
                } else {
                    $cleanedRow[$key] = $value;
                }
            }
            $data[] = $cleanedRow;
        }

        $pdf = Pdf::loadView('landing.export_konsultasi', ['data' => $data])
            ->setPaper('a4', 'landscape');

        $hariIndo = [
            'Sunday'    => 'Minggu',
            'Monday'    => 'Senin',
            'Tuesday'   => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday'  => 'Kamis',
            'Friday'    => 'Jumat',
            'Saturday'  => 'Sabtu'
        ];
        $bulanIndo = [
            'January'   => 'Januari',
            'February'  => 'Februari',
            'March'     => 'Maret',
            'April'     => 'April',
            'May'       => 'Mei',
            'June'      => 'Juni',
            'July'      => 'Juli',
            'August'    => 'Agustus',
            'September' => 'September',
            'October'   => 'Oktober',
            'November'  => 'November',
            'December'  => 'Desember'
        ];

        $day   = $hariIndo[date('l')];
        $date  = date('d');
        $month = $bulanIndo[date('F')];
        $year  = date('Y');
        $time  = date('H.i.s');

        $filename = "Data-Konsultasi-{$day}-{$date}-{$month}-{$year}-{$time}.pdf";

        return $pdf->download($filename);
    }
}

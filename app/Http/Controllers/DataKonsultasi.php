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
        $perHari     = [];
        $perBulan    = [];
        $perTahun    = [];
        $perProvinsi = [];
        $perKabupaten = [];
        $perUmur      = [];

        // daftar nama bulan
        $namaBulan = [
            1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April',
            5 => 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Agustus',
            9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'
        ];

        $tz = new \DateTimeZone('Asia/Jakarta');

        foreach ($data as $row) {
            $cleanedRow = [];
            foreach ($row as $key => $value) {
                if ($key === 'Timestamp') {
                    try {
                        $dt = new \DateTime($value, $tz); // parsing langsung
                    } catch (\Exception $e) {
                        continue;
                    }

                    $dateOnly = $dt->format('Y-m-d'); // hasil YYYY-MM-DD
                    $cleanedRow[$key] = $dateOnly;

                    // hitung per hari
                    $perHari[$dateOnly] = ($perHari[$dateOnly] ?? 0) + 1;

                    $bulan = (int) $dt->format('m');
                    $tahun = $dt->format('Y');

                    $nama = $namaBulan[$bulan] . ' ' . $tahun;
                    $perBulan[$nama] = ($perBulan[$nama] ?? 0) + 1;
                    $perTahun[$tahun] = ($perTahun[$tahun] ?? 0) + 1;
                } else {
                    $cleanedRow[$key] = $value;

                    if ($key === 'Provinsi') {
                        $perProvinsi[$value] = ($perProvinsi[$value] ?? 0) + 1;
                    }
                    if ($key === 'Kabupaten') {
                        $perKabupaten[$value] = ($perKabupaten[$value] ?? 0) + 1;
                    }
                    if ($key === 'Usia') {
                        $perUmur[$value] = ($perUmur[$value] ?? 0) + 1;
                    }
                }
            }
            $cleanedData[] = $cleanedRow;
        }

        // urutkan perHari biar rapi
        ksort($perHari);

        return view('landing.data-konsultasi', [
            'cleanedData'   => $cleanedData,
            'perHari'       => $perHari,
            'perBulan'      => $perBulan,
            'perTahun'      => $perTahun,
            'perProvinsi'   => $perProvinsi,
            'perKabupaten'  => $perKabupaten,
            'perUmur'       => $perUmur,
        ]);
    }

    public function refreshTablePendaftaran()
    {
        $response = Http::get($this->googleScriptUrl);
        $data     = array_reverse($response->json());

        $cleanedData = [];
        $tz = new \DateTimeZone('Asia/Jakarta');

        foreach ($data as $row) {
            $cleanedRow = [];
            foreach ($row as $key => $value) {
                // if ($key === 'Timestamp') {
                //     continue;
                // }

                if ($key === 'Timestamp') {
                    try {
                        $dt = new \DateTime($value, $tz);
                        $dateOnly = $dt->format('Y-m-d');
                        $cleanedRow[$key] = $dateOnly;
                    } catch (\Exception $e) {
                        $cleanedRow[$key] = $value; // fallback kalau parsing gagal
                    }
                } else {
                    $cleanedRow[$key] = $value;
                }
            }
            $cleanedData[] = $cleanedRow;
        }

        return view('partials.table_konsultasi', compact('cleanedData'));
    }

    public function exportPdf(Request $request)
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

        $startDate = $request->input('start_date');
        $endDate   = $request->input('end_date');

        $data = [];
        foreach ($json as $row) {
            $cleanedRow = [];
            foreach ($row as $key => $value) {
                if ($key === 'Timestamp') {
                    $dateOnly = substr($value, 0, 10);
                    $cleanedRow[$key] = $dateOnly;

                    if ($startDate && $endDate) {
                        if ($dateOnly < $startDate || $dateOnly > $endDate) {
                            continue 2;
                        }
                    }
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

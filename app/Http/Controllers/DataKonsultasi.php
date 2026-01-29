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
        // return view('landing.data-konsultasi');
        return view('landing.data_konsultasi.data_konsultasi_baru');
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
                if (in_array($key, ['Provinsi', 'Kabupaten', 'Kecamatan', 'Nama Lengkap'])) {
                    $value = ucwords(strtolower(trim($value)));
                }
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

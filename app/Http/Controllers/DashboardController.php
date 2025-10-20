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
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

class DashboardController extends Controller
{
    protected $googleScriptUrl = "https://script.google.com/macros/s/AKfycbw_gwZKaRIVUuKb0K-NYTtNRP6njudztlkWQwbDXLuuf1nFJ7mWZFffRo9pid818q6u/exec";
    public function index()
    {
        if (!Auth::check()) {
            return Redirect::route('login');
        }

        $user = Auth::user();

        $response = Http::get($this->googleScriptUrl);
        $data     = array_reverse($response->json());

        $cleanedData    = [];
        $perMentorAll = [];
        $perMentorPerMonth = [];
        $months = [];
        $allowedMentors = [
            'IBNU', 'HERA', 'FIQIH', 'HESTI', 'FAIZAL', 'HILMI', 'TRIO', 'REZA',
            'SELLY', 'ADITYA', 'FAHRUL', 'FADIL', 'FUJIAYU', 'FIRMAN', 'GAZI',
            'IPUT', 'NADIA', 'PHILLIP', 'PIPIT', 'AVILA', 'UMAY', 'SONY',
            'JAMAL', 'BANGKIT', 'DIAN', 'ALVAN', 'SELA', 'USWATUN', 'IZAH',
            'AKHMAD ARIFUDIN', 'NUR', 'FATONI', 'ERWIN', '-'
        ];

        foreach ($data as $row) {
            $cleanedRow = [];
            foreach ($row as $key => $value) {
                if ($key === 'Timestamp' || $key === 'TANGGAL LAHIR' || $key === 'JIKA YA, SEBUTKAN TGL/BLN/THN') {
                    $dateOnly = substr($value, 0, 10);
                    $cleanedRow[$key] = $dateOnly;
                    continue;
                }

                if (in_array($key, ['KEAHLIAN', 'MOTIVASI', 'HOBI', 'SETELAH PULANG JEPANG, APA YANG AKAN DILAKUKAN', 'SIFAT/KEPRIBADIAN', 'KELEBIHAN', 'KELEMAHAN'])) {
                    $cleanedRow[$key] = $this->convertJsonToText($value);
                    continue;
                }

                if (in_array($key, ['NAMA (KATAKANA)', 'NAMA (INDONESIA)', 
                        'TAHUN MASUK SEKOLAH (SD)', 'TAHUN KELUAR SEKOLAH (SD)', 
                        'TAHUN MASUK SEKOLAH (SMP)', 'TAHUN KELUAR SEKOLAH (SMP)',
                        'TAHUN MASUK SEKOLAH (SMA/SMK)', 'TAHUN KELUAR SEKOLAH (SMA/SMK)'])) 
                {
                    // $cleanedRow[$key] = $value;
                    if (stripos($key, 'EMAIL') !== false) {
                        $cleanedRow[$key] = $value;
                    } else {
                        $cleanedRow[$key] = strtoupper($value);
                    }
                } else {
                    $newKey = preg_replace('/\s*\(.*?\).*/', '', $key);
                    // $cleanedRow[$newKey] = $value;
                    if (stripos($newKey, 'EMAIL') !== false) {
                        $cleanedRow[$newKey] = $value;
                    } else {
                        $cleanedRow[$newKey] = strtoupper($value);
                    }
                }
            }

            // grafik per mentor
            if (!empty($cleanedRow['NAMA MENTOR']) && !empty($cleanedRow['Timestamp'])) {
                $mentor = strtoupper(trim(preg_replace('/[^A-Z ]/', '', $cleanedRow['NAMA MENTOR'])));
                $mentor = preg_replace('/\s+/', ' ', $mentor);
                $timestamp = $cleanedRow['Timestamp'];

                $monthKey = date('Y-m', strtotime($timestamp));
                $months[$monthKey] = date('F Y', strtotime($timestamp));

                if (in_array($mentor, $allowedMentors)) {
                    if (!isset($perMentorAll[$mentor])) $perMentorAll[$mentor] = 0;
                    $perMentorAll[$mentor]++;

                    if (!isset($perMentorPerMonth[$monthKey][$mentor])) $perMentorPerMonth[$monthKey][$mentor] = 0;
                    $perMentorPerMonth[$monthKey][$mentor]++;
                }
            }

            $cleanedData[] = $cleanedRow;
        }

        arsort($perMentorAll);

        # data konsultasi
        $response = Http::get("https://script.google.com/macros/s/AKfycbyCSsWEpYv0I9mWJvFbpNdr0hTF1LS-mGk8us4MZrmJdW2xjDAIU_qnkKCMFLPKHbEY5Q/exec");

        if (!$response->successful()) {
            return back()->with('error', 'Gagal ambil data dari Google Script');
        }

        $json = $response->json();

        if (!is_array($json)) {
            \Log::error('Google Script response bukan array', ['body' => $response->body()]);
            $json = [];
        }

        $data_konsultasi = $json;
        $cleanedData = [];

        $perHari      = [];
        $perBulan     = [];
        $perTahun     = [];
        $perProvinsi  = [];
        $perKabupaten = [];
        $perUmur      = [];
        $perGender    = [];

        $namaBulan = [
            1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April',
            5 => 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Agustus',
            9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'
        ];

        $tz = new \DateTimeZone('Asia/Jakarta');

        foreach ($data_konsultasi as $row) {
            $cleanedRow = [];
            foreach ($row as $key => $value) {
                if (in_array($key, ['Provinsi', 'Kabupaten', 'Kecamatan', 'Nama Lengkap', 'Alamat (Dukuh/Desa/RT RW)', 'Dapat informasi dari mana?'])) {
                    $value = ucwords(strtolower(trim($value)));
                }

                if ($key === 'Timestamp') {
                    try {
                        $dt = new \DateTime($value, $tz);
                    } catch (\Exception $e) {
                        continue;
                    }

                    $dateTimeFull = $dt->format('Y-m-d H:i:s');
                    $cleanedRow[$key] = $dateTimeFull;

                    $dateOnly = $dt->format('Y-m-d');
                    $perHari[$dateOnly] = ($perHari[$dateOnly] ?? 0) + 1;

                    $bulan = (int) $dt->format('m');
                    $tahun = $dt->format('Y');
                    $nama = $namaBulan[$bulan] . ' ' . $tahun;
                    $perBulan[$nama] = ($perBulan[$nama] ?? 0) + 1;
                    $perTahun[$tahun] = ($perTahun[$tahun] ?? 0) + 1;
                } 
                elseif ($key === 'Usia') {
                    $usiaAngka = (int) preg_replace('/\D+/', '', $value);
                    $cleanedRow[$key] = $usiaAngka;
                    $perUmur[$usiaAngka] = ($perUmur[$usiaAngka] ?? 0) + 1;
                } 
                elseif ($key === 'Jenis Kelamin') {
                    $gender = strtolower(trim($value));
                    if ($gender === 'laki-laki' || $gender === 'laki laki' || $gender === 'pria') {
                        $gender = 'Laki-Laki';
                    } elseif ($gender === 'perempuan' || $gender === 'wanita') {
                        $gender = 'Perempuan';
                    } else {
                        $gender = 'Tidak Diketahui';
                    }
                    $cleanedRow[$key] = $gender;
                    $perGender[$gender] = ($perGender[$gender] ?? 0) + 1;
                } 
                else {
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

        ksort($perHari);

        return view('dasbor.menu.dasbor', [
            'cleanedData'       => $cleanedData,
            'perMentor'         => $perMentorAll,
            'perMentorPerMonth' => $perMentorPerMonth,
            'months'            => $months,
            'user'              => $user,
            'perHari'           => $perHari,
            'perBulan'          => $perBulan,
            'perTahun'          => $perTahun,
            'perProvinsi'       => $perProvinsi,
            'perKabupaten'      => $perKabupaten,
            'perUmur'           => $perUmur,
            'perGender'         => $perGender,
        ]);
    }

    public function profil()
    {
        $user = Auth::user();
        return view('dasbor.menu.profil', compact('user'));
    }

    public function struktur_jepang()
    {
        $user = Auth::user();
        return view('dasbor.menu.struktur-jepang', compact('user'));
    }

    public function struktur_korea()
    {
        $user = Auth::user();
        return view('dasbor.menu.struktur-korea', compact('user'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function data_pendaftaran_online()
    {
        $user = Auth::user();
        $response = Http::get($this->googleScriptUrl);
        $data     = array_reverse($response->json());

        $cleanedData    = [];
        $perMentorAll = [];
        $perMentorPerMonth = [];
        $months = [];
        $allowedMentors = [
            'IBNU', 'HERA', 'FIQIH', 'HESTI', 'FAIZAL', 'HILMI', 'TRIO', 'REZA',
            'SELLY', 'ADITYA', 'FAHRUL', 'FADIL', 'FUJIAYU', 'FIRMAN', 'GAZI',
            'IPUT', 'NADIA', 'PHILLIP', 'PIPIT', 'AVILA', 'UMAY', 'SONY',
            'JAMAL', 'BANGKIT', 'DIAN', 'ALVAN', 'SELA', 'USWATUN', 'IZAH',
            'AKHMAD ARIFUDIN', 'NUR', 'FATONI', 'ERWIN', '-'
        ];

        foreach ($data as $row) {
            $cleanedRow = [];
            foreach ($row as $key => $value) {
                if ($key === 'Timestamp' || $key === 'TANGGAL LAHIR' || $key === 'JIKA YA, SEBUTKAN TGL/BLN/THN') {
                    $dateOnly = substr($value, 0, 10);
                    $cleanedRow[$key] = $dateOnly;
                    continue;
                }

                if (in_array($key, ['KEAHLIAN', 'MOTIVASI', 'HOBI', 'SETELAH PULANG JEPANG, APA YANG AKAN DILAKUKAN', 'SIFAT/KEPRIBADIAN', 'KELEBIHAN', 'KELEMAHAN'])) {
                    $cleanedRow[$key] = $this->convertJsonToText($value);
                    continue;
                }

                if (in_array($key, ['NAMA (KATAKANA)', 'NAMA (INDONESIA)', 
                        'TAHUN MASUK SEKOLAH (SD)', 'TAHUN KELUAR SEKOLAH (SD)', 
                        'TAHUN MASUK SEKOLAH (SMP)', 'TAHUN KELUAR SEKOLAH (SMP)',
                        'TAHUN MASUK SEKOLAH (SMA/SMK)', 'TAHUN KELUAR SEKOLAH (SMA/SMK)'])) 
                {
                    if (stripos($key, 'EMAIL') !== false) {
                        $cleanedRow[$key] = $value;
                    } else {
                        $cleanedRow[$key] = strtoupper($value);
                    }
                } else {
                    $newKey = preg_replace('/\s*\(.*?\).*/', '', $key);
                    if (stripos($newKey, 'EMAIL') !== false) {
                        $cleanedRow[$newKey] = $value;
                    } else {
                        $cleanedRow[$newKey] = strtoupper($value);
                    }
                }
            }

            // grafik per mentor
            if (!empty($cleanedRow['NAMA MENTOR']) && !empty($cleanedRow['Timestamp'])) {
                $mentor = strtoupper(trim(preg_replace('/[^A-Z ]/', '', $cleanedRow['NAMA MENTOR'])));
                $mentor = preg_replace('/\s+/', ' ', $mentor);
                $timestamp = $cleanedRow['Timestamp'];

                $monthKey = date('Y-m', strtotime($timestamp));
                $months[$monthKey] = date('F Y', strtotime($timestamp));

                if (in_array($mentor, $allowedMentors)) {
                    if (!isset($perMentorAll[$mentor])) $perMentorAll[$mentor] = 0;
                    $perMentorAll[$mentor]++;

                    if (!isset($perMentorPerMonth[$monthKey][$mentor])) $perMentorPerMonth[$monthKey][$mentor] = 0;
                    $perMentorPerMonth[$monthKey][$mentor]++;
                }
            }

            $cleanedData[] = $cleanedRow;
        }

        arsort($perMentorAll);

        return view('dasbor.menu.data-pendaftaran', [
            'cleanedData'       => $cleanedData,
            'perMentor'         => $perMentorAll,
            'perMentorPerMonth' => $perMentorPerMonth,
            'months'            => $months,
            'user'              => $user
        ]);
    }

    # convert sifat, kelebihan, kelemahan
    function convertJsonToText($arr) {
        if (is_string($arr)) {
            $arr = json_decode($arr, true);
        }
    
        if (!is_array($arr) || count($arr) === 0) return '';
    
        $values = array_map(function ($item) {
            $val = $item['value'] ?? $item['VALUE'] ?? null;
            return $val ? strtoupper($val) : null;
        }, $arr);
    
        $values = array_filter($values);
        return implode(', ', $values);
    }

    function escapeXml($value)
    {
        return htmlspecialchars($value ?? '', ENT_QUOTES | ENT_XML1, 'UTF-8');
    }

    # DATA SISWA
    public function data_siswa()
    {
        $user = Auth::user();
        $url = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vS51328pl_XG6xJYi9nCpDVaGO9tLaM10XWhNGN_7yakAu6EEnr-yUhlaySXgchjjbLbIVf9UDhfWuG/pub?output=csv';
        
        $csv = @file_get_contents($url);
        if (!$csv) {
            return "Gagal mengambil data. Pastikan spreadsheet sudah dipublish!";
        }

        $lines = array_filter(explode("\n", $csv));
        if (count($lines) < 2) return "Spreadsheet kosong atau format tidak valid.";

        $firstLine = $lines[0];
        $delimiter = substr_count($firstLine, ';') > substr_count($firstLine, ',') ? ';' : ',';

        $header = str_getcsv(array_shift($lines), $delimiter);
        $header = array_map('trim', $header);

        $data = [];
        $bulanList = [];
        $tahunList = [];
        $gelombangList = [];

        foreach ($lines as $line) {
            $row      = str_getcsv($line, $delimiter);
            $row      = array_map('trim', $row);
            $row      = array_pad($row, count($header), '');
            $rowAssoc = array_combine($header, $row);

            if (!empty($rowAssoc['Nama Lengkap'])) {

                if (empty($rowAssoc['Mentor'])) {
                    $rowAssoc['Mentor'] = '-';
                }

                $rowAssoc['Status'] = !empty($rowAssoc['NIS']) ? 'Siswa' : 'Cabut Berkas';

                $data[] = $rowAssoc;

                // kumpulkan dropdown list
                if(!empty($rowAssoc['Bulan'])) $bulanList[] = $rowAssoc['Bulan'];
                if(!empty($rowAssoc['Tahun'])) $tahunList[] = $rowAssoc['Tahun'];
                if(!empty($rowAssoc['Gelombang'])) $gelombangList[] = $rowAssoc['Gelombang'];
            }
        }

        // unique & sort
        $bulanList = array_unique($bulanList);
        sort($bulanList);

        $tahunList = array_unique($tahunList);
        sort($tahunList);

        $gelombangList = array_unique($gelombangList);
        sort($gelombangList);

        $visibleColumns = ['Nama Lengkap', 'NIS', 'Bulan', 'Tahun', 'Mentor', 'Status'];

        return view('dasbor.menu.data-siswa', compact(
            'data', 'visibleColumns', 'user', 'bulanList', 'tahunList', 'gelombangList'
        ));
    }

    # Export Excel
    public function export_excel(Request $request)
    {
        $bulan     = $request->get('bulan');
        $tahun     = $request->get('tahun');
        $gelombang = $request->get('gelombang');

        $data = $this->getDataSiswaFiltered($bulan, $tahun, $gelombang);

        $spreadsheet = new Spreadsheet();
        $sheet     = $spreadsheet->getActiveSheet();

        $headers = ['No', 'Nama Lengkap', 'NIS', 'Bulan', 'Tahun', 'Mentor', 'Status'];
        foreach ($headers as $col => $header) {
            $sheet->setCellValueByColumnAndRow($col + 1, 1, $header);
            $sheet->getStyleByColumnAndRow($col + 1, 1)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
            $sheet->getStyleByColumnAndRow($col + 1, 1)->getFont()->setBold(true);
        }

        $rowNumber = 2;
        $no = 1;
        foreach ($data as $row) {
            $sheet->setCellValue('A' . $rowNumber, $no);
            $sheet->setCellValue('B' . $rowNumber, $row['Nama Lengkap'] ?? '');
            $sheet->setCellValue('C' . $rowNumber, $row['NIS'] ?? '');
            $sheet->setCellValue('D' . $rowNumber, $row['Bulan'] ?? '');
            $sheet->setCellValue('E' . $rowNumber, $row['Tahun'] ?? '');
            $sheet->setCellValue('F' . $rowNumber, $row['Mentor'] ?? '');
            $sheet->setCellValue('G' . $rowNumber, $row['Status'] ?? '');

            $rowNumber++;
            $no++;
        }

        foreach (range('A', 'G') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }

        $filenameParts = ['Data-Siswa'];
        if ($bulan) $filenameParts[] = $bulan;
        if ($tahun) $filenameParts[] = $tahun;
        if ($gelombang) $filenameParts[] = 'Gelombang-' . $gelombang;
        $filename = implode('-', $filenameParts) . '.xlsx';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        exit;
    }

    // Filter data berdasarkan input
    private function getDataSiswaFiltered($bulan = null, $tahun = null, $gelombang = null)
    {
        $user = Auth::user();
        $url = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vS51328pl_XG6xJYi9nCpDVaGO9tLaM10XWhNGN_7yakAu6EEnr-yUhlaySXgchjjbLbIVf9UDhfWuG/pub?output=csv';
        
        $csv        = @file_get_contents($url);
        $lines      = array_filter(explode("\n", $csv));
        $delimiter  = substr_count($lines[0], ';') > substr_count($lines[0], ',') ? ';' : ',';
        $header     = str_getcsv(array_shift($lines), $delimiter);
        $header     = array_map('trim', $header);

        $filtered = [];
        foreach ($lines as $line) {
            $row = str_getcsv($line, $delimiter);
            $row = array_map('trim', $row);
            $row = array_pad($row, count($header), '');
            $rowAssoc = array_combine($header, $row);

            if (!empty($rowAssoc['Nama Lengkap'])) {
                if($bulan && $rowAssoc['Bulan'] != $bulan) continue;
                if($tahun && $rowAssoc['Tahun'] != $tahun) continue;
                if($gelombang && $rowAssoc['Gelombang'] != $gelombang) continue;

                $rowAssoc['Status'] = !empty($rowAssoc['NIS']) ? 'Siswa' : 'Cabut Berkas';
                $rowAssoc['Mentor'] = $rowAssoc['Mentor'] ?? '-';
                $filtered[] = $rowAssoc;
            }
        }
        return $filtered;
    }
}
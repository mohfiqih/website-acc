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

class PendaftaranController extends Controller
{
    // Data Karyawan
    // public function pendaftaran()
    // {
    //     $user = Auth::user();
    //     return view('dasbor.menu.pendaftaran', compact('user'));
    // }

    public function index()
    {
        $images_db = Image::orderBy('created_at', 'desc')->paginate(12);
        $provinsi  = ProvinsiModel::all();
        return view('landing.pendaftaran2', ['images_db' => $images_db, 'provinsi' => $provinsi]);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'email'                 => 'required|email',
                'nama_lengkap'          => 'required|string',
                'nomor_hp'              => 'required|string',
                'tempat_lahir'          => 'required|string',
                'tanggal_lahir'         => 'required|date',
                'jenis_kelamin'         => 'required|string',
                'alamat'                => 'required|string',
                'asal_provinsi'         => 'required|string',
                'tempat_tinggal'        => 'required|string',
                'tinggi_badan'          => 'required|numeric',
                'berat_badan'           => 'required|numeric',
                'agama'                 => 'required|string',
                'pendidikan_terakhir'   => 'required|string',
                'status_pernikahan'     => 'required|string',
                'pengalaman_kerja'      => 'required|string',
                'bahasa_asing'          => 'required|array',
                'bahasa_asing.*'        => 'required|string',
                'program_diambil'       => 'required|string',
                'fasilitas'             => 'required|string',
                'nama_mentor'           => 'required|string',
                'tanggal_pendaftaran'   => 'required|date',
            ]);

            $data                 = $request->all();
            $bahasa_asing         = implode(', ', $data['bahasa_asing']);
            $data['bahasa_asing'] = $bahasa_asing;
            $googleScriptUrl      = "https://script.google.com/macros/s/AKfycbwF3L65UYA-fQWjoGySmpK0E65LJnv1-4FExs0rQvpcJ6TVDa4BXJ7ZUBdggP8Ylb-d/exec";

            $response = Http::withHeaders([
                'Content-Type' => 'application/json'
            ])->post($googleScriptUrl, $data);       
            
            if ($response->successful()) {
                return response()->json(['success' => true]);
            }
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }

    public function data_pendaftaran_old() {
        $url = 'https://script.google.com/macros/s/AKfycbwF3L65UYA-fQWjoGySmpK0E65LJnv1-4FExs0rQvpcJ6TVDa4BXJ7ZUBdggP8Ylb-d/exec';
        $response = Http::get($url);
        $data = array_reverse($response->json());
        
        return view('landing/data-pendaftaran', ['data' => $data]);
    }

    public function data_pendaftaran_new()
    {
        $url = 'https://script.google.com/macros/s/AKfycbyiO50M8wtacyaZVUpmWSyqU_qvORZzLizrIJ01anKJKtDel_EizmrAedeeUpsAQZAf/exec';
        $response = Http::get($url);
        $data = array_reverse($response->json());

        $cleanedData = [];
        foreach ($data as $key => $value) {
            if (in_array($key, ['NAMA (KATAKANA)', 'NAMA (INDONESIA)'])) {
                $cleanedData[$key] = $value;
            } else {
                $newKey = preg_replace('/\s*\(.*?\).*/', '', $key);
                $cleanedData[$newKey] = $value;
            }
        }

        return view('landing.data-pendaftaran-new', compact('cleanedData'));
    }

    // public function export_cv_pdf($id)
    // {
    //     $url      = 'https://script.google.com/macros/s/AKfycbyiO50M8wtacyaZVUpmWSyqU_qvORZzLizrIJ01anKJKtDel_EizmrAedeeUpsAQZAf/exec';
    //     $response = Http::get($url);
    //     $data     = array_reverse($response->json());

    //     $rowData  = collect($data)->firstWhere('ID', $id);

    //     if (!$rowData) {
    //         abort(404, 'Data tidak ditemukan');
    //     }

    //     $cleanedData = [];
    //     foreach ($rowData as $key => $value) {
    //         if (in_array($key, ['NAMA (KATAKANA)', 'NAMA (INDONESIA)'])) {
    //             $cleanedData[$key] = $value;
    //         } else {
    //             $newKey = preg_replace('/\s*\(.*?\).*/', '', $key);
    //             $cleanedData[$newKey] = $value;
    //         }
    //     }

    //     $nama_katakana = mb_convert_encoding($rowData['NAMA (KATAKANA)'], 'UTF-8', 'auto');
    //     $nama = $cleanedData['NAMA'] ?? 'Unknown';

    //     $pdf = Pdf::loadView('landing.export-cv-pdf', compact('rowData', 'nama_katakana'));
    //     return $pdf->stream('CV_' . str_replace(' ', '_', $nama) . '.pdf');
    // }

    public function export_cv_word($id)
    {
        $url      = 'https://script.google.com/macros/s/AKfycbyiO50M8wtacyaZVUpmWSyqU_qvORZzLizrIJ01anKJKtDel_EizmrAedeeUpsAQZAf/exec';
        $response = Http::get($url);
        $data     = array_reverse($response->json());

        $rowData  = collect($data)->firstWhere('ID', $id);

        $cleanedData = [];
        foreach ($rowData as $key => $value) {
            if (in_array($key, ['NAMA (KATAKANA)', 'NAMA (INDONESIA)', 
                    'TAHUN MASUK SEKOLAH (SD)', 'TAHUN KELUAR SEKOLAH (SD)', 
                    'TAHUN MASUK SEKOLAH (SMP)', 'TAHUN KELUAR SEKOLAH (SMP)',
                    'TAHUN MASUK SEKOLAH (SMA/SMK)', 'TAHUN KELUAR SEKOLAH (SMA/SMK)'])) {
                $cleanedData[$key] = $value;
            } else {
                $newKey = preg_replace('/\s*\(.*?\).*/', '', $key);
                $cleanedData[$newKey] = $value;
            }
        }

        // dd($cleanedData);

        if (!$cleanedData) {
            abort(404, 'Data tidak ditemukan');
        }

        $templatePath = storage_path('app/templates/template_cv.docx');
        if (!file_exists($templatePath)) {
            abort(404, 'Template Word tidak ditemukan.');
        }

        $templateProcessor = new TemplateProcessor($templatePath);

        $tanggal = date('d-m-Y', strtotime($cleanedData['Timestamp'] ?? '0000-00-00'));
        $templateProcessor->setValue('TANGGAL', $tanggal);
        $templateProcessor->setValue('EMAIL', $cleanedData['EMAIL'] ?? '-');
        $templateProcessor->setValue('NAMA_KATAKANA', $cleanedData['NAMA (KATAKANA)'] ?? '-');
        $templateProcessor->setValue('NAMA_INDONESIA', $cleanedData['NAMA (INDONESIA)'] ?? '-');
        $templateProcessor->setValue('ALAMAT', $cleanedData['ALAMAT'] ?? '-');
        $tanggal_lahir = date('d-m-Y', strtotime($cleanedData['TANGGAL LAHIR'] ?? '0000-00-00'));
        $templateProcessor->setValue('TANGGAL_LAHIR', $tanggal_lahir);
        $templateProcessor->setValue('USIA', $cleanedData['USIA'] ?? '-');
        $templateProcessor->setValue('KELAMIN', $cleanedData['KELAMIN'] ?? '-');
        $templateProcessor->setValue('NO_HP_AKTIF', $cleanedData['NO HP AKTIF'] ?? '-');
        $templateProcessor->setValue('AGAMA', $cleanedData['AGAMA'] ?? '-');
        $templateProcessor->setValue('TINGGI', $cleanedData['TINGGI (cm)'] ?? '-');
        $templateProcessor->setValue('BERAT', $cleanedData['BERAT (kg)'] ?? '-');
        $templateProcessor->setValue('GOL_DARAH', $cleanedData['GOL DARAH'] ?? '-');
        $templateProcessor->setValue('BUTA_WARNA', $cleanedData['BUTA WARNA'] ?? '-');
        $templateProcessor->setValue('MATA_KIRI', $cleanedData['MATA KIRI'] ?? '-');
        $templateProcessor->setValue('MATA_KANAN', $cleanedData['MATA KANAN'] ?? '-');
        $templateProcessor->setValue('PERNAH_OPERASI', $cleanedData['PERNAH OPERASI'] ?? '-');
        $templateProcessor->setValue('APAKAH_SEDANG_MINUM', $cleanedData['APAKAH SEDANG MINUM'] ?? '-');
        $templateProcessor->setValue('TANGAN', $cleanedData['TANGAN'] ?? '-');
        $templateProcessor->setValue('KEAHLIAN', $cleanedData['KEAHLIAN'] ?? '-');
        $templateProcessor->setValue('SIFAT_KEPRIBADIAN', $cleanedData['SIFAT/KEPRIBADIAN'] ?? '-');
        $templateProcessor->setValue('KELEBIHAN', $cleanedData['KELEBIHAN'] ?? '-');
        $templateProcessor->setValue('KELEMAHAN', $cleanedData['KELEMAHAN'] ?? '-');
        $templateProcessor->setValue('STATUS', $cleanedData['STATUS'] ?? '-');
        $templateProcessor->setValue('MEROKOK', $cleanedData['MEROKOK'] ?? '-');
        $templateProcessor->setValue('PENYAKIT_DALAM', $cleanedData['PENYAKIT DALAM'] ?? '-');
        $templateProcessor->setValue('HOBI', $cleanedData['HOBI'] ?? '-');
        $templateProcessor->setValue('MOTIVASI', $cleanedData['MOTIVASI'] ?? '-');
        $templateProcessor->setValue('NABUNG', $cleanedData['SELAMA 3 TAHUN DI JEPANG MAU NABUNG BERAPA'] ?? '-');
        $templateProcessor->setValue('PLANNING_PULANG', $cleanedData['SETELAH PULANG JEPANG, APA YANG AKAN DILAKUKAN'] ?? '-');
        $templateProcessor->setValue('PERNAH_TINGGAL', $cleanedData['APAKAH ANDA PERNAH TINGGAL/BEKERJA DI JEPANG'] ?? '-');
        $templateProcessor->setValue('KUALIFIKASI_LAMAR', $cleanedData['JIKA YA, KUALIFIKASI APA YANG ANDA LAMAR'] ?? '-');
        $templateProcessor->setValue('SEKOLAH_DASAR', $cleanedData['SEKOLAH DASAR'] ?? '-');
        $templateProcessor->setValue('TAHUN_MASUK_SD', $cleanedData['TAHUN MASUK SEKOLAH (SD)'] ?? '-');
        $templateProcessor->setValue('TAHUN_KELUAR_SD', $cleanedData['TAHUN KELUAR SEKOLAH (SD)'] ?? '-');
        $templateProcessor->setValue('TAHUN_MASUK_SMP', $cleanedData['TAHUN MASUK SEKOLAH (SMP)'] ?? '-');
        $templateProcessor->setValue('TAHUN_KELUAR_SMP', $cleanedData['TAHUN KELUAR SEKOLAH (SMP)'] ?? '-');
        $templateProcessor->setValue('TAHUN_MASUK_SMAK', $cleanedData['TAHUN MASUK SEKOLAH (SMA/SMK)'] ?? '-');
        $templateProcessor->setValue('TAHUN_KELUAR_SMAK', $cleanedData['TAHUN KELUAR SEKOLAH (SMA/SMK)'] ?? '-');
        $templateProcessor->setValue('JURUSAN', $cleanedData['JURUSAN'] ?? '-');
        $templateProcessor->setValue('PERGURUAN_TINGGI', $cleanedData['PERGURUAN TINGGI'] ?? '-');
        $templateProcessor->setValue('PENGALAMAN_KERJA', $cleanedData['PENGALAMAN KERJA'] ?? '-');
        $templateProcessor->setValue('BAHASA_ASING', $cleanedData['BAHASA ASING YANG DIKUASAI'] ?? '-');
        $templateProcessor->setValue('PERNAH_KELUAR_NEGERI', $cleanedData['PERNAH KE JEPANG ATAU LUAR NEGERI LAINNYA'] ?? '-');
        $templateProcessor->setValue('JIKA_YA', $cleanedData['JIKA YA, SEBUTKAN TGL/BLN/THN'] ?? '-');
        $templateProcessor->setValue('KERABAT_DIJEPANG', $cleanedData['APAKAH ADA KERABAT DI JEPANG'] ?? '-');
        $templateProcessor->setValue('BELAJAR_BAHASA', $cleanedData['BELAJAR BAHASA'] ?? '-');
        $templateProcessor->setValue('BUKU_YANG_DIPAKAI', $cleanedData['BUKU YANG DI PAKAI'] ?? '-');
        $templateProcessor->setValue('BAB_YANG_DIPELAJARI', $cleanedData['BAB YANG DI PELAJARI'] ?? '-');
        $templateProcessor->setValue('NAMA_AYAH', $cleanedData['NAMA AYAH'] ?? '-');
        $templateProcessor->setValue('HUBUNGAN_AYAH', $cleanedData['HUBUNGAN AYAH'] ?? '-');
        $templateProcessor->setValue('USIA_AYAH', $cleanedData['USIA AYAH'] ?? '-');
        $templateProcessor->setValue('NAMA_IBU', $cleanedData['NAMA IBU'] ?? '-');
        $templateProcessor->setValue('HUBUNGAN_IBU', $cleanedData['HUBUNGAN IBU'] ?? '-');
        $templateProcessor->setValue('USIA_IBU', $cleanedData['USIA IBU'] ?? '-');
        $templateProcessor->setValue('PEKERJAAN_IBU', $cleanedData['PEKERJAAN IBU'] ?? '-');
        $templateProcessor->setValue('NAMA_SAUDARA', $cleanedData['NAMA SAUDARA'] ?? '-');
        $templateProcessor->setValue('PENDAPAT_KELUARA', $cleanedData['PENDAPAT KELUARA'] ?? '-');
        $templateProcessor->setValue('NO_HP_KELUARGA', $cleanedData['NO HP KELUARGA'] ?? '-');
        $templateProcessor->setValue('NAMA_MENTOR', $cleanedData['NAMA MENTOR'] ?? '-');
        $templateProcessor->setValue('UKURAN_BAJU', $cleanedData['UKURAN BAJU'] ?? '-');
        $templateProcessor->setValue('NOMOR_SEPATU', $cleanedData['NOMOR SEPATU'] ?? '-');

        $fileName   = 'CV_' . str_replace(' ', '_', $cleanedData['NAMA (INDONESIA)'] ?? 'Unknown') . '.docx';
        $outputPath = storage_path("app/public/{$fileName}");

        $templateProcessor->saveAs($outputPath);

        return response()->download($outputPath)->deleteFileAfterSend(true);
    }
}
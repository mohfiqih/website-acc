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

class PendaftaranController extends Controller
{
    protected $googleScriptUrl = "https://script.google.com/macros/s/AKfycbyD5ZXIfgbgye-VPdNKWlsDHAVnPEamLAowRtaOiRAidPsoYWVxwt_SWNdUpqS2ulaB/exec";

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

    # pendaftaran baru
    public function pendaftaran_baru()
    {
        $images_db = Image::orderBy('created_at', 'desc')->paginate(12);
        $provinsi  = ProvinsiModel::all();
        return view('landing.pendaftaran_siswa_baru', ['images_db' => $images_db, 'provinsi' => $provinsi]);
    }

    public function store_pendaftaran_baru(Request $request)
    {
        try {
            $request->validate([
                'email'                      => 'nullable|string',
                'nama_katakana'              => 'nullable|string',
                'nama_indonesia'             => 'nullable|string',
                'alamat'                     => 'nullable|string',
                'tanggal_lahir'              => 'nullable|string',
                'usia'                       => 'nullable|string',
                'jenis_kelamin'              => 'nullable|string',
                'no_hp_aktif'                => 'nullable|string',
                'agama'                      => 'nullable|string',
                'tinggi_badan'               => 'nullable|string',
                'berat_badan'                => 'nullable|string',
                'golongan_darah'             => 'nullable|string',
                'buta_warna'                 => 'nullable|string',
                'mata_kanan'                 => 'nullable|string',
                'mata_kiri'                  => 'nullable|string',
                'pernah_operasi'             => 'nullable|string',
                'apakah_sedang_minum'        => 'nullable|string',
                'tangan'                     => 'nullable|string',
                'merokok'                    => 'nullable|string',
                'penyakit_dalam'             => 'nullable|string',
                'keahlian'                   => 'nullable|string',
                'sifat_kepribadian'          => 'nullable|string',
                'kelebihan'                  => 'nullable|string',
                'kelemahan'                  => 'nullable|string',
                'status'                     => 'nullable|string',
                'hobi'                       => 'nullable|string',
                'motivasi'                   => 'nullable|string',
                'nabung_berapa'              => 'nullable|string',
                'apa_yang_akan_dilakukan'    => 'nullable|string',
                'pernah_tinggal_dijepang'    => 'nullable|string',
                'kualifikasi'                => 'nullable|string',
                'sekolah_dasar'              => 'nullable|string',
                'tahun_masuk_sd'             => 'nullable|string',
                'tahun_keluar_sd'            => 'nullable|string',
                'sekolah_menengah_pertama'   => 'nullable|string',
                'tahun_masuk_smp'            => 'nullable|string',
                'tahun_keluar_smp'           => 'nullable|string',
                'sekolah_menengah_atas'      => 'nullable|string',
                'tahun_masuk_smak'           => 'nullable|string',
                'tahun_keluar_smak'          => 'nullable|string',
                'jurusan'                    => 'nullable|string',
                'perguruan_tinggi'           => 'nullable|string',
                'pengalaman_kerja'           => 'nullable|string',
                'bahasa_asing'               => 'nullable|string',
                'pernah_keluar_negeri'       => 'nullable|string',
                'tanggal_keluar_negeri'      => 'nullable|string',
                'pernah_keluar_negeri_lain'  => 'nullable|string',
                'negara'                     => 'nullable|string',
                'kerabat_dijepang'           => 'nullable|string',
                'hubungan_kerabat_dijepang'  => 'nullable|string',
                'belajar_bahasa'             => 'nullable|string',
                'buku_yang_dipakai'          => 'nullable|string',
                'bab_yang_dipelajari'        => 'nullable|string',
                'nama_ayah'                  => 'nullable|string',
                'hubungan_ayah'              => 'nullable|string',
                'usia_ayah'                  => 'nullable|string',
                'pekerjaan_ayah'             => 'nullable|string',
                'nama_ibu'                   => 'nullable|string',
                'hubungan_ibu'               => 'nullable|string',
                'usia_ibu'                   => 'nullable|string',
                'pekerjaan_ibu'              => 'nullable|string',
                'nama_saudara'               => 'nullable|string',
                'pendapat_keluarga'          => 'nullable|string',
                'no_hp_keluarga'             => 'nullable|string',
                'nama_mentor'                => 'nullable|string',
                'ukuran_baju'                => 'nullable|string',
                'ukuran_sepatu'              => 'nullable|string',
                'id'                         => 'nullable|string'
            ]);

            $data = $request->all();

            if (!empty($data['hubungan_ayah'])) {
                $data['hubungan_ayah'] = 'AYAH';
            }
            if (!empty($data['hubungan_ibu'])) {
                $data['hubungan_ibu'] = 'IBU';
            }

            $data['id'] = mt_rand(10000000, 99999999);

            $response = Http::withHeaders([
                'Content-Type' => 'application/json'
            ])->post($this->googleScriptUrl, $data);

            if ($response->successful()) {
                return response()->json(['success' => true]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Gagal mengirim ke Google Script.',
                    'debug_response' => $response->body()
                ]);
            }
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal',
                'errors' => $e->errors(),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function data_pendaftaran_new()
    {
        $response = Http::get($this->googleScriptUrl);
        $data = array_reverse($response->json());

        $cleanedData = [];
        foreach ($data as $key => $value) {
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

        return view('landing.data-pendaftaran-new', compact('cleanedData'));
    }

    public function export_cv_word($id)
    {
        $response = Http::get($this->googleScriptUrl);
        $data     = array_reverse($response->json());

        $rowData  = collect($data)->firstWhere('ID', $id);

        $cleanedData = [];
        foreach ($rowData as $key => $value) {
            if (in_array($key, ['NAMA (KATAKANA)', 'NAMA (INDONESIA)', 
                    'TAHUN MASUK SEKOLAH (SD)', 'TAHUN KELUAR SEKOLAH (SD)', 
                    'TAHUN MASUK SEKOLAH (SMP)', 'TAHUN KELUAR SEKOLAH (SMP)',
                    'TAHUN MASUK SEKOLAH (SMA/SMK)', 'TAHUN KELUAR SEKOLAH (SMA/SMK)', 'MATA KANAN'])) {
                $cleanedData[$key] = $value;
            } else {
                $newKey = preg_replace('/\s*\(.*?\).*/', '', $key);
                $cleanedData[$newKey] = $value;
            }
        }

        if (!$cleanedData) {
            abort(404, 'Data tidak ditemukan');
        }

        $templatePath = storage_path('app/templates/template_cv.docx');
        if (!file_exists($templatePath)) {
            abort(404, 'Template Word tidak ditemukan.');
        }

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor($templatePath);

        $tanggal = date('d-m-Y', strtotime($cleanedData['Timestamp'] ?? '0000-00-00'));
        $templateProcessor->setValue('TANGGAL', $tanggal);
        $templateProcessor->setValue('EMAIL', $cleanedData['EMAIL'] ?? '-');
        $templateProcessor->setValue('NAMA_KATAKANA', $cleanedData['NAMA (KATAKANA)'] ?? '-');
        $templateProcessor->setValue('NAMA_INDONESIA', $cleanedData['NAMA (INDONESIA)'] ?? '-');
        $templateProcessor->setValue('ALAMAT', $cleanedData['ALAMAT'] ?? '-');
        $tanggal_lahir = date('d-m-Y', strtotime($cleanedData['TANGGAL LAHIR'] ?? '0000-00-00'));
        $templateProcessor->setValue('TGL_LAHIR', $tanggal_lahir);
        $templateProcessor->setValue('USIA', $cleanedData['USIA'] ?? '-');

        $jenisKelamin = $cleanedData['JENIS KELAMIN'] ?? '';
        if($jenisKelamin == 'LAKI-LAKI') {
            $templateProcessor->setValue("JK", "LK" ?? '');
        } else {
            $templateProcessor->setValue("JK", "PR" ?? '');
        }

        $templateProcessor->setValue('NO_HP_AKTIF', $cleanedData['NO HP AKTIF'] ?? '-');
        $templateProcessor->setValue('AGAMA', $cleanedData['AGAMA'] ?? '-');
        $templateProcessor->setValue('TG', $cleanedData['TINGGI'] ?? '-');
        $templateProcessor->setValue('BRT', $cleanedData['BERAT'] ?? '-');
        $templateProcessor->setValue('GOL', $cleanedData['GOL DARAH'] ?? '-');
        $templateProcessor->setValue('BT_WRN', $cleanedData['BUTA WARNA'] ?? '-');
        $templateProcessor->setValue('MT_KR', $cleanedData['MATA KIRI'] ?? '-');
        $templateProcessor->setValue('MT_KNN', $cleanedData['MATA KANAN'] ?? '-');
        $templateProcessor->setValue('OP', $cleanedData['PERNAH OPERASI'] ?? '-');
        $templateProcessor->setValue('MINUM', $cleanedData['APAKAH SEDANG MINUM'] ?? '-');
        $templateProcessor->setValue('TANGAN', $cleanedData['TANGAN'] ?? '-');
        $templateProcessor->setValue('KEAHLIAN', $cleanedData['KEAHLIAN'] ?? '-');
        $templateProcessor->setValue('SIFAT', $cleanedData['SIFAT/KEPRIBADIAN'] ?? '-');
        $templateProcessor->setValue('KELEBIHAN', $cleanedData['KELEBIHAN'] ?? '-');
        $templateProcessor->setValue('KELEMAHAN', $cleanedData['KELEMAHAN'] ?? '-');
        $templateProcessor->setValue('STATUS', $cleanedData['STATUS'] ?? '-');
        $templateProcessor->setValue('MEROKOK', $cleanedData['MEROKOK'] ?? '-');
        $templateProcessor->setValue('P_DALAM', $cleanedData['PENYAKIT DALAM'] ?? '-');
        $templateProcessor->setValue('HOBI', $cleanedData['HOBI'] ?? '-');
        $templateProcessor->setValue('MOTIVASI', $cleanedData['MOTIVASI'] ?? '-');
        $templateProcessor->setValue('NABUNG', $cleanedData['SELAMA 3 TAHUN DI JEPANG MAU NABUNG BERAPA'] ?? '-');
        $templateProcessor->setValue('PLANNING', $cleanedData['SETELAH PULANG JEPANG, APA YANG AKAN DILAKUKAN'] ?? '-');
        $templateProcessor->setValue('PRNH_TGL', $cleanedData['APAKAH ANDA PERNAH TINGGAL/BEKERJA DI JEPANG'] ?? '-');
        $templateProcessor->setValue('KUALIFIKASI', $cleanedData['JIKA YA, KUALIFIKASI APA YANG ANDA LAMAR'] ?? '-');
        $templateProcessor->setValue('SD', $cleanedData['SEKOLAH DASAR'] ?? '-');
        $templateProcessor->setValue('MSK_SD', $cleanedData['TAHUN MASUK SEKOLAH (SD)'] ?? '-');
        $templateProcessor->setValue('KLR_SD', $cleanedData['TAHUN KELUAR SEKOLAH (SD)'] ?? '-');
        $templateProcessor->setValue('SMP', $cleanedData['SEKOLAH MENENGAH PERTAMA'] ?? '-');
        $templateProcessor->setValue('MSK_SMP', $cleanedData['TAHUN MASUK SEKOLAH (SMP)'] ?? '-');
        $templateProcessor->setValue('KLR_SMP', $cleanedData['TAHUN KELUAR SEKOLAH (SMP)'] ?? '-');
        $templateProcessor->setValue('SMA', $cleanedData['SEKOLAH MENENGAH ATAS/KEJURUAN'] ?? '-');
        $templateProcessor->setValue('MSK_SMAK', $cleanedData['TAHUN MASUK SEKOLAH (SMA/SMK)'] ?? '-');
        $templateProcessor->setValue('KLR_SMAK', $cleanedData['TAHUN KELUAR SEKOLAH (SMA/SMK)'] ?? '-');
        $templateProcessor->setValue('JURUSAN', $cleanedData['JURUSAN'] ?? '-');

        # PENGALAMAN KERJA
        $pengalamanKerja = $cleanedData['PENGALAMAN KERJA'] ?? '';
        $pengalamanList = array_filter(array_map('trim', explode(',', $pengalamanKerja)));

        for ($i = 0; $i < 3; $i++) {
            $idx = $i + 1;
            if (isset($pengalamanList[$i])) {
                $parts = array_map('trim', explode(' - ', $pengalamanList[$i]));
                $templateProcessor->setValue("MASUK_$idx", $parts[0] ?? '');
                $templateProcessor->setValue("KELUAR_$idx", $parts[1] ?? '');
                $templateProcessor->setValue("PT_$idx", $parts[2] ?? '');
                $templateProcessor->setValue("BAG_$idx", $parts[3] ?? '');
            } else {
                $templateProcessor->setValue("MASUK_$idx", '');
                $templateProcessor->setValue("KELUAR_$idx", '');
                $templateProcessor->setValue("PT_$idx", '');
                $templateProcessor->setValue("BAG_$idx", '');
            }
        }

        $templateProcessor->setValue('BHS_ASING', $cleanedData['BAHASA ASING YANG DIKUASAI'] ?? '-');
        $templateProcessor->setValue('JEPANG', $cleanedData['PERNAH KE JEPANG'] ?? '-');

        $templateProcessor->setValue('LUAR_LAIN', $cleanedData['PERNAH LUAR NEGERI LAINNYA'] ?? '-');
        $templateProcessor->setValue('NEGARA', $cleanedData['JIKA YA, NEGARA APA'] ?? '-');

        $tgl = date('d-m-Y', strtotime($cleanedData['JIKA YA, SEBUTKAN TGL/BLN/THN'] ?? '0000-00-00'));
        if(!empty($tgl)) {
            $templateProcessor->setValue("JIKA_YA", $tgl ?? '');
        } else {
            $templateProcessor->setValue("JIKA_YA", "-" ?? '');
        }

        $templateProcessor->setValue('KERABAT', $cleanedData['APAKAH ADA KERABAT DI JEPANG'] ?? '-');
        $templateProcessor->setValue('HUB', $cleanedData['APA HUBUNGAN KERABAT YANG DI JEPANG'] ?? '-');
        $templateProcessor->setValue('BLJR', $cleanedData['BELAJAR BAHASA'] ?? '-');
        $templateProcessor->setValue('BUKU', $cleanedData['BUKU YANG DI PAKAI'] ?? '-');
        $templateProcessor->setValue('BAB', $cleanedData['BAB YANG DI PELAJARI'] ?? '-');
        $templateProcessor->setValue('AYAH', $cleanedData['NAMA AYAH'] ?? '-');
        $templateProcessor->setValue('HUB_A', $cleanedData['HUBUNGAN AYAH'] ?? '-');
        $templateProcessor->setValue('USIA_A', $cleanedData['USIA AYAH'] ?? '-');
        $templateProcessor->setValue('KERJA_A', $cleanedData['PEKERJAAN AYAH'] ?? '-');
        $templateProcessor->setValue('IBU', $cleanedData['NAMA IBU'] ?? '-');
        $templateProcessor->setValue('HUB_I', $cleanedData['HUBUNGAN IBU'] ?? '-');
        $templateProcessor->setValue('USIA_I', $cleanedData['USIA IBU'] ?? '-');
        $templateProcessor->setValue('KERJA_I', $cleanedData['PEKERJAAN IBU'] ?? '-');

        # NAMA SAUDARA
        $saudaraString = $cleanedData['NAMA SAUDARA'] ?? '';
        $saudaraList = array_filter(array_map('trim', explode(',', $saudaraString)));

        for ($i = 0; $i < 6; $i++) {
            $idx = $i + 1;
            if (isset($saudaraList[$i])) {
                $parts = array_map('trim', explode(' - ', $saudaraList[$i]));
                $templateProcessor->setValue("HUB_$idx", $parts[0] ?? '');
                $templateProcessor->setValue("NAMA_SDR_$idx", $parts[1] ?? '');
                $templateProcessor->setValue("USIA_$idx", $parts[2] ?? '');
                $templateProcessor->setValue("PKRJ_SDR_$idx", $parts[3] ?? '');
            } else {
                $templateProcessor->setValue("HUB_$idx", '');
                $templateProcessor->setValue("NAMA_SDR_$idx", '');
                $templateProcessor->setValue("USIA_$idx", '');
                $templateProcessor->setValue("PKRJ_SDR_$idx", '');
            }
        }

        $templateProcessor->setValue('PENDAPAT', $cleanedData['PENDAPAT KELUARGA'] ?? '-');
        $templateProcessor->setValue('NO_HP_KEL', $cleanedData['NO HP KELUARGA'] ?? '-');
        $templateProcessor->setValue('MENTOR', $cleanedData['NAMA MENTOR'] ?? '-');
        $templateProcessor->setValue('BAJU', $cleanedData['UKURAN BAJU'] ?? '-');
        $templateProcessor->setValue('SEPATU', $cleanedData['NOMOR SEPATU'] ?? '-');

        $fileName   = 'CV_' . str_replace(' ', '_', $cleanedData['NAMA (INDONESIA)'] ?? 'Unknown') . '.docx';
        $outputPath = storage_path("app/public/{$fileName}");

        $templateProcessor->saveAs($outputPath);

        return response()->file($outputPath, [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
        ])->deleteFileAfterSend(true);
    }

    # translate kanji
    function loadKanjiData()
    {
        $jsonPath = storage_path('app/templates/kanji_data.json');
        if (!file_exists($jsonPath)) {
            return [];
        }

        $json = file_get_contents($jsonPath);
        return json_decode($json, true);
    }

    function getKanjiInfoLocal($char, $kanjiData)
    {
        return $kanjiData[$char] ?? null;
    }

    function translateToKanji($text, $kanjiData)
    {
        $translated = '';
        $details = [];

        $chars = preg_split('//u', $text, null, PREG_SPLIT_NO_EMPTY);

        foreach ($chars as $char) {
            $info = $this->getKanjiInfoLocal($char, $kanjiData);
            if ($info) {
                $translated .= $info['kanji'] ?? $char;
                $details[] = [
                    'char'      => $char,
                    'kanji'     => $info['kanji'] ?? '',
                    'meanings'  => $info['meanings'] ?? [],
                    'onyomi'    => $info['onyomi'] ?? [],
                    'kunyomi'   => $info['kunyomi'] ?? [],
                ];
            } else {
                $translated .= $char;
            }
        }

        return [
            'translated_text' => $translated,
            'details' => $details,
        ];
    }

    // Data Karyawan
    // public function pendaftaran()
    // {
    //     $user = Auth::user();
    //     return view('dasbor.menu.pendaftaran', compact('user'));
    // }
}
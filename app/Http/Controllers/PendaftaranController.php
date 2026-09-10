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
use App\Models\DataPendaftaranSiswa;

class PendaftaranController extends Controller
{
    protected $googleScriptUrl = "https://script.google.com/macros/s/AKfycbyK-RPpoWJcxR5BQmHNSitFaoRmNM8L7P_NmL-FFsh7jS3F4sfLkAX9KVnp2FsSYKMe/exec";

    # pendaftaran baru
    public function pendaftaran_baru($mentor = null)
    {
        $images_db = Image::orderBy('created_at', 'desc')->paginate(12);
        $provinsi  = ProvinsiModel::all();
        $mentor    = $mentor ? strtoupper(str_replace('-', ' ', $mentor)) : null;

        return view('landing.data_pendaftaran.formulir_pendaftaran', [
            'images_db' => $images_db,
            'provinsi'  => $provinsi,
            'mentor'    => $mentor
        ]);
    }

    public function store_pendaftaran_baru(Request $request)
    {
        try {
            $request->validate([
                'email' => 'nullable|email|max:255',
                'nama_indonesia' => 'required|string|max:255',
            ], [
                'nama_indonesia.required' => 'Nama Indonesia wajib diisi.',
                'email.email' => 'Format email tidak valid.',
            ]);


            $email = trim((string) $request->input('email'));
            $namaIndonesia = trim((string) $request->input('nama_indonesia'));

            $duplicate = DataPendaftaranSiswa::where(function ($query) use (
                $email,
                $namaIndonesia
            ) {

                if (!empty($email)) {
                    $query->where('email', $email);
                }

                if (!empty($namaIndonesia)) {
                    if (!empty($email)) {
                        $query->orWhere('nama_indonesia', $namaIndonesia);
                    } else {
                        $query->where('nama_indonesia', $namaIndonesia);
                    }
                }
            })->exists();

            if ($duplicate) {
                return response()->json([
                    'success' => false,
                    'duplicate' => true,
                    'message' => 'Data anda sudah terdaftar di LPK ACC Japan Centre!'
                ], 422);
            }

            $namaPerusahaan = $request->input('nama_perusahaan', []);
            $bagian = $request->input('bagian', []);
            $tahunAwal = $request->input('tahun_awal', []);
            $tahunAkhir = $request->input('tahun_akhir', []);

            $pengalamanKerja = [];

            if (is_array($namaPerusahaan)) {

                foreach ($namaPerusahaan as $index => $nama) {

                    $nama = trim((string) $nama);

                    $bagianValue = is_array($bagian)
                        ? trim((string) ($bagian[$index] ?? ''))
                        : '';

                    $tahunAwalValue = is_array($tahunAwal)
                        ? trim((string) ($tahunAwal[$index] ?? ''))
                        : '';

                    $tahunAkhirValue = is_array($tahunAkhir)
                        ? trim((string) ($tahunAkhir[$index] ?? ''))
                        : '';

                    if (
                        empty($nama) &&
                        empty($bagianValue) &&
                        empty($tahunAwalValue) &&
                        empty($tahunAkhirValue)
                    ) {
                        continue;
                    }

                    $pengalamanKerja[] = [
                        'nama_perusahaan' => $nama,
                        'bagian' => $bagianValue,
                        'tahun_awal' => $tahunAwalValue,
                        'tahun_akhir' => $tahunAkhirValue,
                    ];
                }
            }

            $namaPerguruan = $request->input('nama_perguruan', []);
            $programStudi = $request->input('program_studi', []);

            $perguruanTinggi = [];

            if (is_array($namaPerguruan)) {

                foreach ($namaPerguruan as $index => $nama) {

                    $nama = trim((string) $nama);

                    $program = is_array($programStudi)
                        ? trim((string) ($programStudi[$index] ?? ''))
                        : '';

                    if (
                        empty($nama) &&
                        empty($program)
                    ) {
                        continue;
                    }

                    $perguruanTinggi[] = [
                        'nama_perguruan' => $nama,
                        'program_studi' => $program,
                    ];
                }
            }

            $bahasaAsing = $request->input('bahasa_asing', []);

            if (is_array($bahasaAsing)) {

                $bahasaAsing = collect($bahasaAsing)
                    ->map(function ($value) {

                        if (is_string($value)) {

                            $decoded = json_decode($value, true);

                            if (json_last_error() === JSON_ERROR_NONE) {
                                $value = $decoded;
                            }
                        }

                        if (is_array($value)) {

                            $values = [];

                            array_walk_recursive(
                                $value,
                                function ($item) use (&$values) {

                                    if (
                                        is_string($item) ||
                                        is_numeric($item)
                                    ) {
                                        $item = trim((string) $item);

                                        if ($item !== '') {
                                            $values[] = $item;
                                        }
                                    }
                                }
                            );

                            return implode(', ', $values);
                        }

                        return trim((string) $value);
                    })
                    ->filter(function ($value) {
                        return trim((string) $value) !== '';
                    })
                    ->implode(', ');
            } else {
                $bahasaAsing = trim((string) $bahasaAsing);
            }

            $namaKeluarga = $request->input('nama_keluarga', []);

            if (is_array($namaKeluarga)) {

                $namaKeluarga = collect($namaKeluarga)
                    ->map(function ($value) {

                        if (is_array($value)) {

                            $values = [];

                            array_walk_recursive(
                                $value,
                                function ($item) use (&$values) {

                                    if (
                                        is_string($item) ||
                                        is_numeric($item)
                                    ) {
                                        $item = trim((string) $item);

                                        if ($item !== '') {
                                            $values[] = $item;
                                        }
                                    }
                                }
                            );

                            return implode(', ', $values);
                        }

                        return trim((string) $value);
                    })
                    ->filter(function ($value) {
                        return trim((string) $value) !== '';
                    })
                    ->implode(', ');

            } else {

                $namaKeluarga = trim((string) $namaKeluarga);
            }

            $namaSaudara = $request->input('nama_saudara', []);

            if (is_array($namaSaudara)) {

                $namaSaudara = collect($namaSaudara)
                    ->map(function ($value) {

                        if (is_array($value)) {

                            $values = [];

                            array_walk_recursive(
                                $value,
                                function ($item) use (&$values) {

                                    if (
                                        is_string($item) ||
                                        is_numeric($item)
                                    ) {
                                        $item = trim((string) $item);

                                        if ($item !== '') {
                                            $values[] = $item;
                                        }
                                    }
                                }
                            );

                            return implode(', ', $values);
                        }

                        return trim((string) $value);
                    })
                    ->filter(function ($value) {
                        return trim((string) $value) !== '';
                    })
                    ->implode(', ');

            } else {

                $namaSaudara = trim((string) $namaSaudara);
            }

            $semuaNamaSaudara = collect([
                $namaSaudara,
                $namaKeluarga,
            ])
                ->map(function ($value) {
                    return trim((string) $value);
                })
                ->filter(function ($value) {
                    return $value !== '';
                })
                ->implode(', ');

            $data = $request->except([
                '_token',
                'tahun_awal',
                'tahun_akhir',
                'nama_perusahaan',
                'bagian',
                'nama_perguruan',
                'program_studi',
                'nama_keluarga',
                'nama_saudara',
                'bahasa_asing',
                'pengalaman_kerja',
                'perguruan_tinggi',
            ]);

            $data['pengalaman_kerja'] = json_encode(
                $pengalamanKerja,
                JSON_UNESCAPED_UNICODE
            );

            $data['perguruan_tinggi'] = json_encode(
                $perguruanTinggi,
                JSON_UNESCAPED_UNICODE
            );

            $data['bahasa_asing'] = $bahasaAsing;
            $data['nama_saudara'] = $semuaNamaSaudara;
            $data['hubungan_ayah'] = 'AYAH';
            $data['hubungan_ibu'] = 'IBU';

            foreach ($data as $key => $value) {
                if (
                    $key === 'email' ||
                    $key === 'pengalaman_kerja' ||
                    $key === 'perguruan_tinggi'
                ) {
                    continue;
                }

                if (is_string($value)) {
                    $data[$key] = mb_strtoupper(
                        trim($value),
                        'UTF-8'
                    );
                }
            }

            if (!empty($email)) {
                $data['email'] = strtolower($email);
            }

            do {
                $randomId = str_pad(
                    (string) random_int(0, 99999999),
                    8,
                    '0',
                    STR_PAD_LEFT
                );

            } while (
                DataPendaftaranSiswa::where(
                    'randomId',
                    $randomId
                )->exists()
            );

            $data['randomId'] = $randomId;

            $siswa = DataPendaftaranSiswa::create($data);

            return response()->json([
                'success' => true,
                'message' => 'Data pendaftaran berhasil disimpan.',
                'id' => $siswa->id,
                'randomId' => $siswa->randomId,
            ], 200);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal.',
                'errors' => $e->errors(),
            ], 422);
        } catch (\Throwable $e) {
            \Log::error(
                'Gagal menyimpan data pendaftaran siswa',
                [
                    'message' => $e->getMessage(),
                    'file' => $e->getFile(),
                    'line' => $e->getLine(),
                ]
            );

            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat menyimpan data ke database.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function data_pendaftaran_new()
    {
        return view('landing.data_pendaftaran.data_pendaftaran_cv_online');
    }

    // public function data_pendaftaran_json()
    // {
    //     $data = DataPendaftaranSiswa::orderByDesc('id')
    //         ->get()
    //         ->map(function ($row) {
    //             return [
    //                 'ID' => $row->id,
    //                 'EMAIL' => $row->email,
    //                 'NAMA (KATAKANA)' => $row->nama_katakana,
    //                 'NAMA (INDONESIA)' => $row->nama_indonesia,
    //                 'ALAMAT' => $row->alamat,
    //                 'TANGGAL LAHIR' => $row->tanggal_lahir,
    //                 'USIA' => $row->usia,
    //                 'KELAMIN' => $row->jenis_kelamin,
    //                 'NO HP AKTIF' => $row->no_hp_aktif,
    //                 'AGAMA' => $row->agama,
    //                 'TINGGI' => $row->tinggi_badan,
    //                 'BERAT' => $row->berat_badan,
    //                 'GOL DARAH' => $row->golongan_darah,
    //                 'BUTA WARNA' => $row->buta_warna,
    //                 'MATA KIRI' => $row->mata_kiri,
    //                 'MATA KANAN' => $row->mata_kanan,
    //                 'PERNAH OPERASI' => $row->pernah_operasi,
    //                 'APAKAH SEDANG MINUM' => $row->apakah_sedang_minum,
    //                 'TANGAN' => $row->tangan,
    //                 'MEROKOK' => $row->merokok,
    //                 'PENYAKIT DALAM' => $row->penyakit_dalam,
    //                 'KEAHLIAN' => $row->keahlian,
    //                 'SIFAT/KEPRIBADIAN' => $row->sifat_kepribadian,
    //                 'KELEBIHAN' => $row->kelebihan,
    //                 'KELEMAHAN' => $row->kelemahan,
    //                 'STATUS' => $row->status,
    //                 'HOBI' => $row->hobi,
    //                 'MOTIVASI' => $row->motivasi,

    //                 'SELAMA 3 TAHUN DI JEPANG MAU NABUNG BERAPA'
    //                     => $row->nabung_berapa,

    //                 'SETELAH PULANG JEPANG, APA YANG AKAN DILAKUKAN'
    //                     => $row->apa_yang_akan_dilakukan,

    //                 'APAKAH ANDA PERNAH TINGGAL/BEKERJA DI JEPANG'
    //                     => $row->pernah_tinggal_dijepang,

    //                 'JIKA YA, KUALIFIKASI APA YANG ANDA LAMAR'
    //                     => $row->kualifikasi,

    //                 'SEKOLAH DASAR (SD)' => $row->sekolah_dasar,
    //                 'TAHUN MASUK SEKOLAH (SD)' => $row->tahun_masuk_sd,
    //                 'TAHUN KELUAR SEKOLAH (SD)' => $row->tahun_keluar_sd,

    //                 'SEKOLAH MENENGAH PERTAMA (SMP)'
    //                     => $row->sekolah_menengah_pertama,

    //                 'TAHUN MASUK SEKOLAH (SMP)' => $row->tahun_masuk_smp,
    //                 'TAHUN KELUAR SEKOLAH (SMP)' => $row->tahun_keluar_smp,

    //                 'SEKOLAH MENENGAH ATAS/KEJURUAN (SMA/SMK)'
    //                     => $row->sekolah_menengah_atas,

    //                 'TAHUN MASUK SEKOLAH (SMA/SMK)' => $row->tahun_masuk_smak,
    //                 'TAHUN KELUAR SEKOLAH (SMA/SMK)' => $row->tahun_keluar_smak,
    //                 'JURUSAN (SMA/SMK)' => $row->jurusan,
    //                 'PERGURUAN TINGGI' => $row->perguruan_tinggi,
    //                 'PENGALAMAN KERJA' => $row->pengalaman_kerja,
    //                 'BAHASA ASING YANG DIKUASAI' => $row->bahasa_asing,

    //                 'PERNAH KE JEPANG' => $row->pernah_keluar_negeri,
    //                 'JIKA YA, SEBUTKAN TGL/BLN/THN' => $row->tanggal_keluar_negeri,
    //                 'PERNAH LUAR NEGERI LAINNYA' => $row->pernah_keluar_negeri_lain,
    //                 'JIKA YA, NEGARA APA' => $row->negara,

    //                 'APAKAH ADA KERABAT DI JEPANG'
    //                     => $row->kerabat_dijepang,

    //                 'APA HUBUNGAN KERABAT YANG DI JEPANG'
    //                     => $row->hubungan_kerabat_dijepang,

    //                 'BELAJAR BAHASA' => $row->belajar_bahasa,
    //                 'BUKU YANG DI PAKAI' => $row->buku_yang_dipakai,
    //                 'BAB YANG DI PELAJARI' => $row->bab_yang_dipelajari,

    //                 'NAMA AYAH' => $row->nama_ayah,
    //                 'HUBUNGAN AYAH' => $row->hubungan_ayah,
    //                 'USIA AYAH' => $row->usia_ayah,
    //                 'PEKERJAAN AYAH' => $row->pekerjaan_ayah,

    //                 'NAMA IBU' => $row->nama_ibu,
    //                 'HUBUNGAN IBU' => $row->hubungan_ibu,
    //                 'USIA IBU' => $row->usia_ibu,
    //                 'PEKERJAAN IBU' => $row->pekerjaan_ibu,

    //                 'NAMA SAUDARA' => $row->nama_saudara,
    //                 'PENDAPAT KELUARGA' => $row->pendapat_keluarga,
    //                 'NO HP KELUARGA' => $row->no_hp_keluarga,

    //                 'NAMA MENTOR' => $row->nama_mentor,
    //                 'UKURAN BAJU' => $row->ukuran_baju,
    //                 'NOMOR SEPATU' => $row->ukuran_sepatu,
    //                 'PILIH KELAS' => $row->pilih_kelas,
    //                 'PILIH PROGRAM' => $row->pilih_program,

    //                 'Timestamp' => $row->created_at ?? '',
    //             ];
    //         });

    //     return response()->json($data);
    // }

    public function data_pendaftaran_json()
{
    $data = DataPendaftaranSiswa::orderByDesc('id')
        ->get()
        ->map(function ($row) {
            return [
                'ID' => $row->id,
                'EMAIL' => $row->email,
                'NAMA (KATAKANA)' => $row->nama_katakana,
                'NAMA (INDONESIA)' => $row->nama_indonesia,
                'ALAMAT' => $row->alamat,
                'TANGGAL LAHIR' => $row->tanggal_lahir,
                'USIA' => $row->usia,
                'KELAMIN' => $row->jenis_kelamin,
                'NO HP AKTIF' => $row->no_hp_aktif,
                'AGAMA' => $row->agama,
                'TINGGI' => $row->tinggi_badan,
                'BERAT' => $row->berat_badan,
                'GOL DARAH' => $row->golongan_darah,
                'BUTA WARNA' => $row->buta_warna,
                'MATA KIRI' => $row->mata_kiri,
                'MATA KANAN' => $row->mata_kanan,
                'PERNAH OPERASI' => $row->pernah_operasi,
                'APAKAH SEDANG MINUM' => $row->apakah_sedang_minum,
                'TANGAN' => $row->tangan,
                'MEROKOK' => $row->merokok,
                'PENYAKIT DALAM' => $row->penyakit_dalam,
                'KEAHLIAN' => $row->keahlian,
                'SIFAT/KEPRIBADIAN' => $row->sifat_kepribadian,
                'KELEBIHAN' => $row->kelebihan,
                'KELEMAHAN' => $row->kelemahan,
                'STATUS' => $row->status,
                'HOBI' => $row->hobi,
                'MOTIVASI' => $row->motivasi,

                'SELAMA 3 TAHUN DI JEPANG MAU NABUNG BERAPA'
                    => $row->nabung_berapa,

                'SETELAH PULANG JEPANG, APA YANG AKAN DILAKUKAN'
                    => $row->apa_yang_akan_dilakukan,

                'APAKAH ANDA PERNAH TINGGAL/BEKERJA DI JEPANG'
                    => $row->pernah_tinggal_dijepang,

                'JIKA YA, KUALIFIKASI APA YANG ANDA LAMAR'
                    => $row->kualifikasi,

                'SEKOLAH DASAR (SD)' => $row->sekolah_dasar,
                'TAHUN MASUK SEKOLAH (SD)' => $row->tahun_masuk_sd,
                'TAHUN KELUAR SEKOLAH (SD)' => $row->tahun_keluar_sd,

                'SEKOLAH MENENGAH PERTAMA (SMP)'
                    => $row->sekolah_menengah_pertama,

                'TAHUN MASUK SEKOLAH (SMP)' => $row->tahun_masuk_smp,
                'TAHUN KELUAR SEKOLAH (SMP)' => $row->tahun_keluar_smp,

                'SEKOLAH MENENGAH ATAS/KEJURUAN (SMA/SMK)'
                    => $row->sekolah_menengah_atas,

                'TAHUN MASUK SEKOLAH (SMA/SMK)' => $row->tahun_masuk_smak,
                'TAHUN KELUAR SEKOLAH (SMA/SMK)' => $row->tahun_keluar_smak,
                'JURUSAN (SMA/SMK)' => $row->jurusan,
                'PERGURUAN TINGGI' => $row->perguruan_tinggi,
                'PENGALAMAN KERJA' => $row->pengalaman_kerja,
                'BAHASA ASING YANG DIKUASAI' => $row->bahasa_asing,

                'PERNAH KE JEPANG' => $row->pernah_keluar_negeri,
                'JIKA YA, SEBUTKAN TGL/BLN/THN' => $row->tanggal_keluar_negeri,
                'PERNAH LUAR NEGERI LAINNYA' => $row->pernah_keluar_negeri_lain,
                'JIKA YA, NEGARA APA' => $row->negara,

                'APAKAH ADA KERABAT DI JEPANG'
                    => $row->kerabat_dijepang,

                'APA HUBUNGAN KERABAT YANG DI JEPANG'
                    => $row->hubungan_kerabat_dijepang,

                'BELAJAR BAHASA' => $row->belajar_bahasa,
                'BUKU YANG DI PAKAI' => $row->buku_yang_dipakai,
                'BAB YANG DI PELAJARI' => $row->bab_yang_dipelajari,

                'NAMA AYAH' => $row->nama_ayah,
                'HUBUNGAN AYAH' => $row->hubungan_ayah,
                'USIA AYAH' => $row->usia_ayah,
                'PEKERJAAN AYAH' => $row->pekerjaan_ayah,

                'NAMA IBU' => $row->nama_ibu,
                'HUBUNGAN IBU' => $row->hubungan_ibu,
                'USIA IBU' => $row->usia_ibu,
                'PEKERJAAN IBU' => $row->pekerjaan_ibu,

                'NAMA SAUDARA' => $row->nama_saudara,
                'PENDAPAT KELUARGA' => $row->pendapat_keluarga,
                'NO HP KELUARGA' => $row->no_hp_keluarga,

                'NAMA MENTOR' => $row->nama_mentor,
                'UKURAN BAJU' => $row->ukuran_baju,
                'NOMOR SEPATU' => $row->ukuran_sepatu,
                'PILIH KELAS' => $row->pilih_kelas,
                'PILIH PROGRAM' => $row->pilih_program,

                // PENTING: gunakan key yang sama dengan JavaScript
                'Timestamp' => $row->created_at
                    ? $row->created_at->toDateTimeString()
                    : '',
            ];
        });

    return response()->json($data);
}

    public function export_cv_word(Request $request)
    {
        $rowData = json_decode($request->input('data'), true);

        $cleanedData = [];
        foreach ($rowData as $key => $value) {
            if (in_array($key, ['NAMA (KATAKANA)', 'NAMA (INDONESIA)', 
                    'TAHUN MASUK SEKOLAH (SD)', 'TAHUN KELUAR SEKOLAH (SD)', 
                    'TAHUN MASUK SEKOLAH (SMP)', 'TAHUN KELUAR SEKOLAH (SMP)',
                    'TAHUN MASUK SEKOLAH (SMA/SMK)', 'TAHUN KELUAR SEKOLAH (SMA/SMK)', 
                    'MATA KANAN', 'SIFAT/KEPRIBADIAN'])) 
            {
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

        $jenisKelamin = $cleanedData['KELAMIN'] ?? '';
        if($jenisKelamin == 'LAKI-LAKI') {
            $templateProcessor->setValue("JK", "LK" ?? '');
        } else if($jenisKelamin == 'PEREMPUAN') {
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
        $templateProcessor->setValue('KEAHLIAN', $this->convertJsonToText($cleanedData['KEAHLIAN']) ?? '[]');
        $templateProcessor->setValue('SIFAT', $this->convertJsonToText($cleanedData['SIFAT/KEPRIBADIAN'] ?? '[]'));
        $templateProcessor->setValue('KELEBIHAN', $this->convertJsonToText($cleanedData['KELEBIHAN'] ?? '[]'));
        $templateProcessor->setValue('KELEMAHAN', $this->convertJsonToText($cleanedData['KELEMAHAN'] ?? '[]'));        
        $templateProcessor->setValue('STATUS', $cleanedData['STATUS'] ?? '-');
        $templateProcessor->setValue('MEROKOK', $cleanedData['MEROKOK'] ?? '-');
        $templateProcessor->setValue('P_DALAM', $cleanedData['PENYAKIT DALAM'] ?? '-');
        $templateProcessor->setValue('HOBI', $this->convertJsonToText($cleanedData['HOBI']) ?? '[]');
        $templateProcessor->setValue('MOTIVASI', $this->convertJsonToText($cleanedData['MOTIVASI']) ?? '[]');
        $templateProcessor->setValue('NABUNG', $cleanedData['SELAMA 3 TAHUN DI JEPANG MAU NABUNG BERAPA'] ?? '-');
        $templateProcessor->setValue('PLANNING', $this->convertJsonToText($cleanedData['SETELAH PULANG JEPANG, APA YANG AKAN DILAKUKAN']) ?? '[]');
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
        $pengalamanKerja = $this->escapeXml($pengalamanKerja);
        $pengalamanList  = array_filter(array_map('trim', explode(',', $pengalamanKerja)));

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

        $templateProcessor->setValue('LUAR_LAIN', $cleanedData['PERNAH LUAR NEGERI LAINNYA'] ?? '');
        $templateProcessor->setValue('NEGARA', $cleanedData['JIKA YA, NEGARA APA'] ?? '');

        $tgl = date('d-m-Y', strtotime($cleanedData['JIKA YA, SEBUTKAN TGL/BLN/THN'] ?? '0000-00-00'));
        $pernah_kejepang = $cleanedData['PERNAH KE JEPANG'];
        if($pernah_kejepang == 'YA') {
            $templateProcessor->setValue("JIKA_YA", $tgl ?? '');
        } else {
            $templateProcessor->setValue("JIKA_YA", "" ?? '');
        }

        $templateProcessor->setValue('KERABAT', $cleanedData['APAKAH ADA KERABAT DI JEPANG'] ?? '-');
        $templateProcessor->setValue('HUB', $cleanedData['APA HUBUNGAN KERABAT YANG DI JEPANG'] ?? '-');
        $templateProcessor->setValue('BLJR', $cleanedData['BELAJAR BAHASA'] ?? '-');
        $templateProcessor->setValue('BUKU', $cleanedData['BUKU YANG DI PAKAI'] ?? '-');
        $templateProcessor->setValue('BAB', $cleanedData['BAB YANG DI PELAJARI'] ?? '-');
        $templateProcessor->setValue('AYAH', $cleanedData['NAMA AYAH'] ?? '-');
        $templateProcessor->setValue('USIA_A', $cleanedData['USIA AYAH'] ?? '-');
        $templateProcessor->setValue('KERJA_A', $cleanedData['PEKERJAAN AYAH'] ?? '-');
        $templateProcessor->setValue('IBU', $cleanedData['NAMA IBU'] ?? '-');
        $templateProcessor->setValue('USIA_I', $cleanedData['USIA IBU'] ?? '-');
        $templateProcessor->setValue('KERJA_I', $cleanedData['PEKERJAAN IBU'] ?? '-');

        # KELUARGA
        $keluargaList = [];

        $ayah = $cleanedData['NAMA AYAH'] ?? '';
        if (!empty($ayah)) {
            $keluargaList[] = [
                'hubungan'  => 'AYAH',
                'nama'      => $ayah,
                'usia'      => $cleanedData['USIA AYAH'] ?? '-',
                'pekerjaan' => $cleanedData['PEKERJAAN AYAH'] ?? '-',
            ];
        }

        $ibu = $cleanedData['NAMA IBU'] ?? '';
        if (!empty($ibu)) {
            $keluargaList[] = [
                'hubungan'  => 'IBU',
                'nama'      => $ibu,
                'usia'      => $cleanedData['USIA IBU'] ?? '-',
                'pekerjaan' => $cleanedData['PEKERJAAN IBU'] ?? '-',
            ];
        }

        $saudaraString = $cleanedData['NAMA SAUDARA'] ?? '';
        $saudaraList = array_filter(array_map('trim', explode(',', $saudaraString)));

        foreach ($saudaraList as $sdr) {
            $parts = array_map('trim', explode(' - ', $sdr));
            $keluargaList[] = [
                'hubungan'  => $parts[0] ?? '',
                'nama'      => $parts[1] ?? '',
                'usia'      => $parts[2] ?? '',
                'pekerjaan' => $parts[3] ?? '',
            ];
        }

        for ($i = 0; $i < 6; $i++) {
            $idx = $i + 1;
            $templateProcessor->setValue("HUB_$idx", $keluargaList[$i]['hubungan'] ?? '');
            $templateProcessor->setValue("NAMA_SDR_$idx", $keluargaList[$i]['nama'] ?? '');
            $templateProcessor->setValue("USIA_$idx", $keluargaList[$i]['usia'] ?? '');
            $templateProcessor->setValue("PKRJ_SDR_$idx", $keluargaList[$i]['pekerjaan'] ?? '');
        }

        $templateProcessor->setValue('PENDAPAT', $cleanedData['PENDAPAT KELUARGA'] ?? '-');
        $templateProcessor->setValue('NO_HP_KEL', $cleanedData['NO HP KELUARGA'] ?? '-');
        $templateProcessor->setValue('MENTOR', $cleanedData['NAMA MENTOR'] ?? '-');
        $templateProcessor->setValue('BAJU', $cleanedData['UKURAN BAJU'] ?? '-');
        $templateProcessor->setValue('SEPATU', $cleanedData['NOMOR SEPATU'] ?? '-');
        $templateProcessor->setValue('KELAS', $cleanedData['PILIH KELAS'] ?? '');
        $templateProcessor->setValue('PROGRAM', $cleanedData['PILIH PROGRAM'] ?? '');

        $fileName   = 'CV_' . str_replace(' ', '_', $cleanedData['NAMA (INDONESIA)'] ?? 'Unknown') . '.docx';
        $outputPath = storage_path("app/public/{$fileName}");

        $templateProcessor->saveAs($outputPath);

        return response()->file($outputPath, [
            'Content-Type'          => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'Content-Disposition'   => 'attachment; filename="' . $fileName . '"',
        ])->deleteFileAfterSend(true);
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
                    $formattedDate = date('d-m-y', strtotime($dateOnly));
                    $cleanedRow[$key] = $formattedDate;

                    if ($startDate && $endDate) {
                        if ($dateOnly < $startDate || $dateOnly > $endDate) {
                            continue 2;
                        }
                    }
                    continue;
                }

                if (stripos($key, 'TANGGAL LAHIR') !== false) {
                    $formattedBirth = '';
                    if (!empty($value) && strtotime($value)) {
                        $formattedBirth = date('d-m-y', strtotime($value));
                    }
                    $cleanedRow[$key] = $formattedBirth;
                    continue;
                }

                if (in_array($key, [
                    'NAMA (KATAKANA)', 'NAMA (INDONESIA)',
                    'TAHUN MASUK SEKOLAH (SD)', 'TAHUN KELUAR SEKOLAH (SD)',
                    'TAHUN MASUK SEKOLAH (SMP)', 'TAHUN KELUAR SEKOLAH (SMP)',
                    'TAHUN MASUK SEKOLAH (SMA/SMK)', 'TAHUN KELUAR SEKOLAH (SMA/SMK)'
                ])) {
                    $cleanedRow[$key] = strtoupper($value);
                } else {
                    $newKey = preg_replace('/\s*\(.*?\).*/', '', $key);
                    if (stripos($newKey, 'EMAIL') !== false) {
                        $cleanedRow[$newKey] = $value;
                    } else {
                        $cleanedRow[$newKey] = strtoupper($value);
                    }
                }

                if (in_array($key, [
                    'KEAHLIAN', 'MOTIVASI', 'HOBI',
                    'SETELAH PULANG JEPANG, APA YANG AKAN DILAKUKAN',
                    'SIFAT/KEPRIBADIAN', 'KELEBIHAN', 'KELEMAHAN'
                ])) {
                    $cleanedRow[$key] = $this->convertJsonToText($value);
                }
            }

            $data[] = $cleanedRow;
        }

        $pdf = Pdf::loadView('landing.data_pendaftaran.export_pendaftaran', ['data' => $data])
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

        $filename = "Data-Pendaftaran-{$day}-{$date}-{$month}-{$year}-{$time}.pdf";

        return $pdf->download($filename);
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

    function link_pendaftaran_mentor() {
        return view('landing.data_pendaftaran.link-pendaftaran-online-mentor');
    }
}
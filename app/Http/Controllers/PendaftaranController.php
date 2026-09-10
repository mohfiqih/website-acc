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

    // public function store_pendaftaran_baru(Request $request)
    // {
    //     $response  = Http::get($this->googleScriptUrl);
    //     $data_list = array_reverse($response->json());

    //     try {
    //         $input = $request->all();

    //         $email_input = strtolower(trim($input['email'] ?? ''));
    //         $nama_input  = strtoupper(trim($input['nama_indonesia'] ?? ''));

    //         foreach ($data_list as $row) {
    //             $email_lama = strtolower(trim($row['EMAIL'] ?? ''));
    //             $nama_lama  = strtoupper(trim($row['NAMA (INDONESIA)'] ?? ''));

    //             if ($email_lama === $email_input || $nama_lama === $nama_input) {
    //                 return response()->json([
    //                     'success'   => false,
    //                     'duplicate' => true,
    //                     'message'   => 'Data anda sudah terdaftar di LPK ACC Japan Centre!'
    //                 ]);
    //             }
    //         }

    //         $pengalamanList = [];
    //         $perguruanList  = [];

    //         # pengalaman
    //         if ($request->has('tahun_awal')) {
    //             foreach ($request->tahun_awal as $i => $tahunAwal) {
    //                 $tahunAkhir     = $request->tahun_akhir[$i] ?? '-';
    //                 $perusahaan     = $request->nama_perusahaan[$i] ?? '-';
    //                 $bagian         = $request->bagian[$i] ?? '-';

    //                 $pengalamanList[] = "{$tahunAwal} - {$tahunAkhir} - {$perusahaan} - {$bagian}";
    //             }
    //         }

    //         $input['pengalaman_kerja'] = implode(', ', $pengalamanList);

    //         # perguruan tinggi
    //         if ($request->has('nama_perguruan')) {
    //             foreach ($request->nama_perguruan as $i => $nama_perguruan) {
    //                 $prodi = $request->program_studi[$i] ?? '-';
    //                 $perguruanList[] = "{$nama_perguruan} - {$prodi}";
    //             }
    //         }
    //         $input['perguruan_tinggi'] = implode(', ', $perguruanList);


    //         $fieldJsonFields = ['nama_keluarga', 'bahasa_asing'];
    //         foreach ($fieldJsonFields as $field) {
    //             if (isset($input[$field])) {
    //                 $input[$field] = $this->convertJsonToText($input[$field]);
    //             }
    //         }

    //         $request->merge($input);

    //         $request->validate([
    //             'email'                      => 'nullable|string',
    //             'nama_katakana'              => 'nullable|string',
    //             'nama_indonesia'             => 'nullable|string',
    //             'alamat'                     => 'nullable|string',
    //             'tanggal_lahir'              => 'nullable|string',
    //             'usia'                       => 'nullable|string',
    //             'jenis_kelamin'              => 'nullable|string',
    //             'no_hp_aktif'                => 'nullable|string',
    //             'agama'                      => 'nullable|string',
    //             'tinggi_badan'               => 'nullable|string',
    //             'berat_badan'                => 'nullable|string',
    //             'golongan_darah'             => 'nullable|string',
    //             'buta_warna'                 => 'nullable|string',
    //             'mata_kanan'                 => 'nullable|string',
    //             'mata_kiri'                  => 'nullable|string',
    //             'pernah_operasi'             => 'nullable|string',
    //             'apakah_sedang_minum'        => 'nullable|string',
    //             'tangan'                     => 'nullable|string',
    //             'merokok'                    => 'nullable|string',
    //             'penyakit_dalam'             => 'nullable|string',
    //             'keahlian'                   => 'nullable|string',
    //             'sifat_kepribadian'          => 'nullable|string',
    //             'kelebihan'                  => 'nullable|string',
    //             'kelemahan'                  => 'nullable|string',
    //             'status'                     => 'nullable|string',
    //             'hobi'                       => 'nullable|string',
    //             'motivasi'                   => 'nullable|string',
    //             'nabung_berapa'              => 'nullable|string',
    //             'apa_yang_akan_dilakukan'    => 'nullable|string',
    //             'pernah_tinggal_dijepang'    => 'nullable|string',
    //             'kualifikasi'                => 'nullable|string',
    //             'sekolah_dasar'              => 'nullable|string',
    //             'tahun_masuk_sd'             => 'nullable|string',
    //             'tahun_keluar_sd'            => 'nullable|string',
    //             'sekolah_menengah_pertama'   => 'nullable|string',
    //             'tahun_masuk_smp'            => 'nullable|string',
    //             'tahun_keluar_smp'           => 'nullable|string',
    //             'sekolah_menengah_atas'      => 'nullable|string',
    //             'tahun_masuk_smak'           => 'nullable|string',
    //             'tahun_keluar_smak'          => 'nullable|string',
    //             'jurusan'                    => 'nullable|string',
    //             'perguruan_tinggi'           => 'nullable|string',
    //             'pengalaman_kerja'           => 'nullable|string',
    //             'bahasa_asing'               => 'nullable|string',
    //             'pernah_keluar_negeri'       => 'nullable|string',
    //             'tanggal_keluar_negeri'      => 'nullable|string',
    //             'pernah_keluar_negeri_lain'  => 'nullable|string',
    //             'negara'                     => 'nullable|string',
    //             'kerabat_dijepang'           => 'nullable|string',
    //             'hubungan_kerabat_dijepang'  => 'nullable|string',
    //             'belajar_bahasa'             => 'nullable|string',
    //             'buku_yang_dipakai'          => 'nullable|string',
    //             'bab_yang_dipelajari'        => 'nullable|string',
    //             'nama_ayah'                  => 'nullable|string',
    //             'hubungan_ayah'              => 'nullable|string',
    //             'usia_ayah'                  => 'nullable|string',
    //             'pekerjaan_ayah'             => 'nullable|string',
    //             'nama_ibu'                   => 'nullable|string',
    //             'hubungan_ibu'               => 'nullable|string',
    //             'usia_ibu'                   => 'nullable|string',
    //             'pekerjaan_ibu'              => 'nullable|string',
    //             'nama_saudara'               => 'nullable|string',
    //             'pendapat_keluarga'          => 'nullable|string',
    //             'no_hp_keluarga'             => 'nullable|string',
    //             'nama_mentor'                => 'nullable|string',
    //             'ukuran_baju'                => 'nullable|string',
    //             'ukuran_sepatu'              => 'nullable|string',
    //             'pilih_kelas'                => 'nullable|string',
    //             'pilih_program'              => 'nullable|string',
    //             'id'                         => 'nullable|string'
    //         ]);

    //         $data = $request->all();

    //         foreach ($data as $key => $value) {
    //             if ($key === 'email') continue;
    //             if (is_string($value)) {
    //                 $data[$key] = strtoupper($value);
    //             }
    //         }

    //         if (!empty($data['hubungan_ayah'])) {
    //             $data['hubungan_ayah'] = 'AYAH';
    //         }
    //         if (!empty($data['hubungan_ibu'])) {
    //             $data['hubungan_ibu'] = 'IBU';
    //         }

    //         $data['id']             = mt_rand(10000000, 99999999);
    //         $data['no_hp_aktif']    = "'" . $data['no_hp_aktif'];
    //         $data['no_hp_keluarga'] = "'" . $data['no_hp_keluarga'];    

    //         # nama saudara
    //         if (!empty($data['nama_saudara'])) {
    //             $saudaraList   = explode(';', $data['nama_saudara']);
    //             $formattedList = [];

    //             foreach ($saudaraList as $saudara) {
    //                 $parts = array_map('trim', explode(',', $saudara));

    //                 $hubungan  = isset($parts[0]) && $parts[0] !== '' ? strtoupper($parts[0]) : '';
    //                 $nama      = isset($parts[1]) && $parts[1] !== '' ? strtoupper($parts[1]) : '';
    //                 $usia      = isset($parts[2]) && $parts[2] !== '' ? $parts[2] : '';
    //                 $pekerjaan = isset($parts[3]) && $parts[3] !== '' ? strtoupper($parts[3]) : '';

    //                 $filteredParts = array_filter([$hubungan, $nama, $usia, $pekerjaan], function ($value) {
    //                     return $value !== '';
    //                 });

    //                 $formattedList[] = implode(' - ', $filteredParts);
    //             }

    //             $data['nama_saudara'] = implode(', ', $formattedList);
    //         }

    //         $response = Http::withHeaders([
    //             'Content-Type' => 'application/json'
    //         ])->post($this->googleScriptUrl, $data);

    //         if ($response->successful()) {
    //             return response()->json(['success' => true]);
    //         } else {
    //             return response()->json([
    //                 'success' => false,
    //                 'message' => 'Gagal mengirim ke Google Script.',
    //                 'debug_response' => $response->body()
    //             ]);
    //         }
    //     } catch (ValidationException $e) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Validasi gagal',
    //             'errors' => $e->errors(),
    //         ]);
    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => $e->getMessage(),
    //         ]);
    //     }
    // }

    public function store_pendaftaran_baru(Request $request)
    {
        try {

            // =========================================================
            // 1. VALIDASI
            // =========================================================

            $request->validate([
                'email' => 'nullable|email|max:255',
                'nama_indonesia' => 'required|string|max:255',
            ], [
                'nama_indonesia.required' => 'Nama Indonesia wajib diisi.',
                'email.email' => 'Format email tidak valid.',
            ]);


            // =========================================================
            // 2. DATA UTAMA
            // =========================================================

            $email = trim((string) $request->input('email'));
            $namaIndonesia = trim((string) $request->input('nama_indonesia'));


            // =========================================================
            // 3. CEK DUPLIKAT DATABASE
            // =========================================================

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


            // =========================================================
            // 4. PENGALAMAN KERJA
            // =========================================================

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


            // =========================================================
            // 5. PERGURUAN TINGGI
            // =========================================================

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


            // =========================================================
            // 6. BAHASA ASING
            // =========================================================

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


            // =========================================================
            // 7. NAMA KELUARGA
            // =========================================================
            // nama_keluarga TIDAK ADA sebagai kolom database.
            // Jadi semua nama digabung menjadi satu string.
            // =========================================================

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


            // =========================================================
            // 8. NAMA SAUDARA
            // =========================================================

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


            // =========================================================
            // 9. GABUNG NAMA SAUDARA + NAMA KELUARGA
            // =========================================================

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


            // =========================================================
            // 10. AMBIL DATA REQUEST
            // =========================================================

            $data = $request->except([
                '_token',

                // Dynamic pengalaman kerja
                'tahun_awal',
                'tahun_akhir',
                'nama_perusahaan',
                'bagian',

                // Dynamic perguruan tinggi
                'nama_perguruan',
                'program_studi',

                // BUKAN KOLOM DATABASE
                'nama_keluarga',

                // Akan diisi manual
                'nama_saudara',
                'bahasa_asing',
                'pengalaman_kerja',
                'perguruan_tinggi',
            ]);


            // =========================================================
            // 11. DATA HASIL FORMAT
            // =========================================================

            $data['pengalaman_kerja'] = json_encode(
                $pengalamanKerja,
                JSON_UNESCAPED_UNICODE
            );

            $data['perguruan_tinggi'] = json_encode(
                $perguruanTinggi,
                JSON_UNESCAPED_UNICODE
            );

            $data['bahasa_asing'] = $bahasaAsing;

            // HANYA masuk ke kolom nama_saudara
            $data['nama_saudara'] = $semuaNamaSaudara;


            // =========================================================
            // 12. HUBUNGAN AYAH & IBU
            // =========================================================

            $data['hubungan_ayah'] = 'AYAH';
            $data['hubungan_ibu'] = 'IBU';


            // =========================================================
            // 13. UPPERCASE
            // =========================================================

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


            // =========================================================
            // 14. EMAIL
            // =========================================================

            if (!empty($email)) {
                $data['email'] = strtolower($email);
            }


            // =========================================================
            // 15. RANDOM ID 8 DIGIT
            // =========================================================

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


            // =========================================================
            // 16. SIMPAN DATABASE
            // =========================================================

            $siswa = DataPendaftaranSiswa::create($data);


            // =========================================================
            // 17. RESPONSE
            // =========================================================

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
        return view('landing.data_pendaftaran.template-data-pendaftaran-baru');
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
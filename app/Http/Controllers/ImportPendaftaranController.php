<?php

namespace App\Http\Controllers;

use App\Models\DataPendaftaranSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Throwable;

class ImportPendaftaranController extends Controller
{
    public function import()
    {
        $file = storage_path('app/pendaftaran.xlsx');

        if (!file_exists($file)) {
            return response()->json([
                'success' => false,
                'message' => 'File Excel tidak ditemukan.',
                'file' => $file,
            ], 404);
        }

        try {

            // =========================================================
            // 1. BACA EXCEL
            // =========================================================

            $spreadsheet = Excel::toArray([], $file);

            if (
                empty($spreadsheet) ||
                empty($spreadsheet[0])
            ) {
                return response()->json([
                    'success' => false,
                    'message' => 'File Excel kosong.',
                ], 400);
            }

            $rows = $spreadsheet[0];


            // =========================================================
            // 2. HEADER
            // =========================================================

            $headers = array_map(function ($header) {
                return trim((string) $header);
            }, $rows[0]);

            unset($rows[0]);


            // =========================================================
            // 3. COUNTER
            // =========================================================

            $inserted = 0;
            $skipped = 0;
            $duplicate = 0;
            $failed = 0;

            $batch = [];

            // Jumlah data per INSERT
            $batchSize = 200;


            // =========================================================
            // 4. PROSES SETIAP BARIS
            // =========================================================

            foreach ($rows as $row) {

                // Pastikan jumlah kolom sama
                $row = array_pad(
                    $row,
                    count($headers),
                    null
                );

                $row = array_slice(
                    $row,
                    0,
                    count($headers)
                );

                $data = array_combine(
                    $headers,
                    $row
                );


                // =====================================================
                // SKIP BARIS KOSONG
                // =====================================================

                if (
                    empty(trim((string) (
                        $data['EMAIL'] ?? ''
                    ))) &&
                    empty(trim((string) (
                        $data['NAMA (INDONESIA)'] ?? ''
                    )))
                ) {
                    $skipped++;
                    continue;
                }


                // =====================================================
                // TIMESTAMP
                // =====================================================

                $timestamp = $this->parseDateTime(
                    $data['Timestamp'] ?? null
                );


                // =====================================================
                // RANDOM ID
                // =====================================================

                $excelRandomId = $this->value(
                    $data,
                    'ID'
                );

                /*
                * Kalau Excel punya ID:
                * gunakan ID tersebut.
                *
                * Kalau kosong:
                * buat random ID 8 digit.
                */

                if (!empty($excelRandomId)) {

                    $randomId = trim(
                        (string) $excelRandomId
                    );

                } else {

                    do {

                        $randomId = str_pad(
                            (string) random_int(
                                0,
                                99999999
                            ),
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
                }


                // =====================================================
                // CEK DUPLIKAT DATABASE
                // =====================================================

                $email = $this->value(
                    $data,
                    'EMAIL'
                );

                $namaIndonesia = $this->value(
                    $data,
                    'NAMA (INDONESIA)'
                );


                $isDuplicate = false;


                // Cek randomId
                if (
                    !empty($randomId) &&
                    DataPendaftaranSiswa::where(
                        'randomId',
                        $randomId
                    )->exists()
                ) {
                    $isDuplicate = true;
                }


                // Cek email
                if (
                    !$isDuplicate &&
                    !empty($email) &&
                    DataPendaftaranSiswa::where(
                        'email',
                        $email
                    )->exists()
                ) {
                    $isDuplicate = true;
                }


                // Cek nama
                if (
                    !$isDuplicate &&
                    !empty($namaIndonesia) &&
                    DataPendaftaranSiswa::where(
                        'nama_indonesia',
                        $namaIndonesia
                    )->exists()
                ) {
                    $isDuplicate = true;
                }


                if ($isDuplicate) {

                    $duplicate++;

                    continue;
                }


                // =====================================================
                // DATA INSERT
                // =====================================================

                $insertData = [

                    'email' => $email,

                    'nama_katakana' => $this->value(
                        $data,
                        'NAMA (KATAKANA)'
                    ),

                    'nama_indonesia' => $namaIndonesia,

                    'alamat' => $this->value(
                        $data,
                        'ALAMAT'
                    ),


                    // -----------------------------------------------
                    // DATA PRIBADI
                    // -----------------------------------------------

                    'tanggal_lahir' => $this->parseDate(
                        $data['TANGGAL LAHIR'] ?? null
                    ),

                    'usia' => $this->toInteger(
                        $data['USIA'] ?? null
                    ),

                    'jenis_kelamin' => $this->value(
                        $data,
                        'KELAMIN'
                    ),

                    'no_hp_aktif' => $this->value(
                        $data,
                        'NO HP AKTIF'
                    ),

                    'agama' => $this->value(
                        $data,
                        'AGAMA'
                    ),

                    'tinggi_badan' => $this->toDecimal(
                        $data['TINGGI (cm)'] ?? null
                    ),

                    'berat_badan' => $this->toDecimal(
                        $data['BERAT (kg)'] ?? null
                    ),

                    'golongan_darah' => $this->value(
                        $data,
                        'GOL DARAH'
                    ),

                    'buta_warna' => $this->value(
                        $data,
                        'BUTA WARNA'
                    ),

                    'mata_kiri' => $this->value(
                        $data,
                        'MATA KIRI'
                    ),

                    'mata_kanan' => $this->value(
                        $data,
                        'MATA KANAN'
                    ),


                    // -----------------------------------------------
                    // KESEHATAN
                    // -----------------------------------------------

                    'pernah_operasi' => $this->value(
                        $data,
                        'PERNAH OPERASI'
                    ),

                    'apakah_sedang_minum' => $this->value(
                        $data,
                        'APAKAH SEDANG MINUM'
                    ),

                    'tangan' => $this->value(
                        $data,
                        'TANGAN'
                    ),

                    'merokok' => $this->value(
                        $data,
                        'MEROKOK'
                    ),

                    'penyakit_dalam' => $this->value(
                        $data,
                        'PENYAKIT DALAM'
                    ),


                    // -----------------------------------------------
                    // KEPRIBADIAN
                    // -----------------------------------------------

                    'keahlian' => $this->value(
                        $data,
                        'KEAHLIAN'
                    ),

                    'sifat_kepribadian' => $this->value(
                        $data,
                        'SIFAT/KEPRIBADIAN'
                    ),

                    'kelebihan' => $this->value(
                        $data,
                        'KELEBIHAN'
                    ),

                    'kelemahan' => $this->value(
                        $data,
                        'KELEMAHAN'
                    ),

                    'status' => $this->value(
                        $data,
                        'STATUS'
                    ),

                    'hobi' => $this->value(
                        $data,
                        'HOBI'
                    ),

                    'motivasi' => $this->value(
                        $data,
                        'MOTIVASI'
                    ),


                    // -----------------------------------------------
                    // RENCANA JEPANG
                    // -----------------------------------------------

                    'nabung_berapa' => $this->value(
                        $data,
                        'SELAMA 3 TAHUN DI JEPANG MAU NABUNG BERAPA'
                    ),

                    'apa_yang_akan_dilakukan' => $this->value(
                        $data,
                        'SETELAH PULANG JEPANG, APA YANG AKAN DILAKUKAN'
                    ),

                    'pernah_tinggal_dijepang' => $this->value(
                        $data,
                        'APAKAH ANDA PERNAH TINGGAL/BEKERJA DI JEPANG'
                    ),

                    'kualifikasi' => $this->value(
                        $data,
                        'JIKA YA, KUALIFIKASI APA YANG ANDA LAMAR'
                    ),


                    // -----------------------------------------------
                    // PENDIDIKAN SD
                    // -----------------------------------------------

                    'sekolah_dasar' => $this->value(
                        $data,
                        'SEKOLAH DASAR (SD)'
                    ),

                    'tahun_masuk_sd' => $this->value(
                        $data,
                        'TAHUN MASUK SEKOLAH (SD)'
                    ),

                    'tahun_keluar_sd' => $this->value(
                        $data,
                        'TAHUN KELUAR SEKOLAH (SD)'
                    ),


                    // -----------------------------------------------
                    // PENDIDIKAN SMP
                    // -----------------------------------------------

                    'sekolah_menengah_pertama' => $this->value(
                        $data,
                        'SEKOLAH MENENGAH PERTAMA (SMP)'
                    ),

                    'tahun_masuk_smp' => $this->value(
                        $data,
                        'TAHUN MASUK SEKOLAH (SMP)'
                    ),

                    'tahun_keluar_smp' => $this->value(
                        $data,
                        'TAHUN KELUAR SEKOLAH (SMP)'
                    ),


                    // -----------------------------------------------
                    // PENDIDIKAN SMA / SMK
                    // -----------------------------------------------

                    'sekolah_menengah_atas' => $this->value(
                        $data,
                        'SEKOLAH MENENGAH ATAS/KEJURUAN (SMA/SMK)'
                    ),

                    'tahun_masuk_smak' => $this->value(
                        $data,
                        'TAHUN MASUK SEKOLAH (SMA/SMK)'
                    ),

                    'tahun_keluar_smak' => $this->value(
                        $data,
                        'TAHUN KELUAR SEKOLAH (SMA/SMK)'
                    ),

                    'jurusan' => $this->value(
                        $data,
                        'JURUSAN (SMA/SMK)'
                    ),


                    // -----------------------------------------------
                    // PERGURUAN TINGGI
                    // -----------------------------------------------

                    'perguruan_tinggi' => $this->value(
                        $data,
                        'PERGURUAN TINGGI (JIKA ADA) - PROGRAM STUDI'
                    ),


                    // -----------------------------------------------
                    // PENGALAMAN KERJA
                    // -----------------------------------------------

                    'pengalaman_kerja' => $this->value(
                        $data,
                        'PENGALAMAN KERJA (Tahun Masuk - Keluar - Nama Perusahaan - Bagian)'
                    ),


                    // -----------------------------------------------
                    // BAHASA
                    // -----------------------------------------------

                    'bahasa_asing' => $this->value(
                        $data,
                        'BAHASA ASING YANG DIKUASAI'
                    ),


                    // -----------------------------------------------
                    // LUAR NEGERI
                    // -----------------------------------------------

                    'pernah_keluar_negeri' => $this->value(
                        $data,
                        'PERNAH KE JEPANG'
                    ),

                    'tanggal_keluar_negeri' => $this->parseDate(
                        $data['JIKA YA, SEBUTKAN TGL/BLN/THN'] ?? null
                    ),

                    'pernah_keluar_negeri_lain' => $this->value(
                        $data,
                        'PERNAH LUAR NEGERI LAINNYA'
                    ),

                    'negara' => $this->value(
                        $data,
                        'JIKA YA, NEGARA APA'
                    ),


                    // -----------------------------------------------
                    // KERABAT JEPANG
                    // -----------------------------------------------

                    'kerabat_dijepang' => $this->value(
                        $data,
                        'APAKAH ADA KERABAT DI JEPANG'
                    ),

                    'hubungan_kerabat_dijepang' => $this->value(
                        $data,
                        'APA HUBUNGAN KERABAT YANG DI JEPANG'
                    ),


                    // -----------------------------------------------
                    // BELAJAR BAHASA
                    // -----------------------------------------------

                    'belajar_bahasa' => $this->value(
                        $data,
                        'BELAJAR BAHASA'
                    ),

                    'buku_yang_dipakai' => $this->value(
                        $data,
                        'BUKU YANG DI PAKAI'
                    ),

                    'bab_yang_dipelajari' => $this->value(
                        $data,
                        'BAB YANG DI PELAJARI'
                    ),


                    // -----------------------------------------------
                    // AYAH
                    // -----------------------------------------------

                    'nama_ayah' => $this->value(
                        $data,
                        'NAMA AYAH'
                    ),

                    'hubungan_ayah' => $this->value(
                        $data,
                        'HUBUNGAN AYAH'
                    ),

                    'usia_ayah' => $this->toInteger(
                        $data['USIA AYAH'] ?? null
                    ),

                    'pekerjaan_ayah' => $this->value(
                        $data,
                        'PEKERJAAN AYAH'
                    ),


                    // -----------------------------------------------
                    // IBU
                    // -----------------------------------------------

                    'nama_ibu' => $this->value(
                        $data,
                        'NAMA IBU'
                    ),

                    'hubungan_ibu' => $this->value(
                        $data,
                        'HUBUNGAN IBU'
                    ),

                    'usia_ibu' => $this->toInteger(
                        $data['USIA IBU'] ?? null
                    ),

                    'pekerjaan_ibu' => $this->value(
                        $data,
                        'PEKERJAAN IBU'
                    ),


                    // -----------------------------------------------
                    // SAUDARA
                    // -----------------------------------------------

                    'nama_saudara' => $this->value(
                        $data,
                        'NAMA SAUDARA (HUBUNGAN - NAMA - USIA - PEKERJAAN)'
                    ),

                    'pendapat_keluarga' => $this->value(
                        $data,
                        'PENDAPAT KELUARGA'
                    ),

                    'no_hp_keluarga' => $this->value(
                        $data,
                        'NO HP KELUARGA'
                    ),


                    // -----------------------------------------------
                    // LAINNYA
                    // -----------------------------------------------

                    'nama_mentor' => $this->value(
                        $data,
                        'NAMA MENTOR'
                    ),

                    'ukuran_baju' => $this->value(
                        $data,
                        'UKURAN BAJU'
                    ),

                    'ukuran_sepatu' => $this->value(
                        $data,
                        'NOMOR SEPATU'
                    ),

                    'pilih_kelas' => $this->value(
                        $data,
                        'Pilih Kelas'
                    ),

                    'pilih_program' => $this->value(
                        $data,
                        'Pilih Program'
                    ),


                    // -----------------------------------------------
                    // RANDOM ID
                    // -----------------------------------------------

                    'randomId' => $randomId,


                    // -----------------------------------------------
                    // TIMESTAMP
                    // -----------------------------------------------

                    'created_at' => $timestamp,
                    'updated_at' => $timestamp,
                ];


                // =====================================================
                // TAMBAHKAN KE BATCH
                // =====================================================

                $batch[] = $insertData;


                // =====================================================
                // INSERT SETIAP 200 DATA
                // =====================================================

                if (count($batch) >= $batchSize) {

                    try {

                        DataPendaftaranSiswa::insert(
                            $batch
                        );

                        $inserted += count($batch);

                    } catch (Throwable $e) {

                        /*
                        * Kalau satu batch gagal,
                        * kita coba insert satu per satu supaya
                        * data yang valid tetap masuk.
                        */

                        foreach ($batch as $singleData) {

                            try {

                                DataPendaftaranSiswa::insert(
                                    $singleData
                                );

                                $inserted++;

                            } catch (Throwable $singleError) {

                                $failed++;

                            }
                        }
                    }

                    // Kosongkan batch
                    $batch = [];
                }
            }


            // =========================================================
            // 5. INSERT SISA DATA
            // =========================================================

            if (!empty($batch)) {

                try {

                    DataPendaftaranSiswa::insert(
                        $batch
                    );

                    $inserted += count($batch);

                } catch (Throwable $e) {

                    foreach ($batch as $singleData) {

                        try {

                            DataPendaftaranSiswa::insert(
                                $singleData
                            );

                            $inserted++;

                        } catch (Throwable $singleError) {

                            $failed++;

                        }
                    }
                }
            }


            // =========================================================
            // 6. RESPONSE
            // =========================================================

            return response()->json([
                'success' => true,
                'message' => 'Import Excel berhasil diproses.',

                'inserted' => $inserted,

                'skipped' => $skipped,

                'duplicate' => $duplicate,

                'failed' => $failed,

                'total_diproses' => $inserted +
                    $skipped +
                    $duplicate +
                    $failed,
            ]);


        } catch (Throwable $e) {

            return response()->json([
                'success' => false,
                'message' => 'Import gagal.',
                'error' => $e->getMessage(),
                'line' => $e->getLine(),
                'file' => $e->getFile(),
            ], 500);
        }
    }

    private function value(array $data, string $key)
    {
        if (!array_key_exists($key, $data)) {
            return null;
        }

        $value = $data[$key];

        if ($value === null) {
            return null;
        }

        $value = trim((string) $value);

        return $value === '' ? null : $value;
    }

    private function toInteger($value)
    {
        if ($value === null || $value === '') {
            return null;
        }

        if (is_numeric($value)) {
            return (int) $value;
        }

        preg_match('/\d+/', (string) $value, $matches);

        return isset($matches[0])
            ? (int) $matches[0]
            : null;
    }

    private function toDecimal($value)
    {
        if ($value === null || $value === '') {
            return null;
        }

        $value = str_replace(',', '.', (string) $value);

        return is_numeric($value)
            ? (float) $value
            : null;
    }

    private function parseDate($value)
    {
        if ($value === null || $value === '') {
            return null;
        }

        try {
            if (is_numeric($value)) {
                return Date::excelToDateTimeObject($value)
                    ->format('Y-m-d');
            }

            $timestamp = strtotime((string) $value);

            return $timestamp
                ? date('Y-m-d', $timestamp)
                : null;

        } catch (Throwable $e) {
            return null;
        }
    }

    private function parseDateTime($value)
    {
        if ($value === null || $value === '') {
            return now();
        }

        try {
            if (is_numeric($value)) {
                return Date::excelToDateTimeObject($value)
                    ->format('Y-m-d H:i:s');
            }

            $timestamp = strtotime((string) $value);

            return $timestamp
                ? date('Y-m-d H:i:s', $timestamp)
                : now();

        } catch (Throwable $e) {
            return now();
        }
    }
}
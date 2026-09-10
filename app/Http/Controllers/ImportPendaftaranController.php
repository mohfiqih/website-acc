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
            $spreadsheet = Excel::toArray([], $file);

            if (empty($spreadsheet) || empty($spreadsheet[0])) {
                return response()->json([
                    'success' => false,
                    'message' => 'File Excel kosong.',
                ], 400);
            }

            $rows = $spreadsheet[0];

            // Baris pertama = header
            $headers = array_map(function ($header) {
                return trim((string) $header);
            }, $rows[0]);

            unset($rows[0]);

            $inserted = 0;
            $skipped = 0;

            DB::beginTransaction();

            foreach ($rows as $row) {

                // Pastikan jumlah kolom sama dengan header
                $row = array_pad($row, count($headers), null);

                $data = array_combine($headers, array_slice($row, 0, count($headers)));

                // Skip baris benar-benar kosong
                if (
                    empty(trim((string) ($data['EMAIL'] ?? ''))) &&
                    empty(trim((string) ($data['NAMA (INDONESIA)'] ?? '')))
                ) {
                    $skipped++;
                    continue;
                }

                $timestamp = $this->parseDateTime($data['Timestamp'] ?? null);

                $insertData = [
                    'email'             => $this->value($data, 'EMAIL'),

                    'nama_katakana'     => $this->value($data, 'NAMA (KATAKANA)'),
                    'nama_indonesia'    => $this->value($data, 'NAMA (INDONESIA)'),
                    'alamat'            => $this->value($data, 'ALAMAT'),

                    'tanggal_lahir'     => $this->parseDate($data['TANGGAL LAHIR'] ?? null),
                    'usia'              => $this->toInteger($data['USIA'] ?? null),

                    'jenis_kelamin'     => $this->value($data, 'KELAMIN'),
                    'no_hp_aktif'       => $this->value($data, 'NO HP AKTIF'),
                    'agama'             => $this->value($data, 'AGAMA'),

                    'tinggi_badan'      => $this->toDecimal($data['TINGGI (cm)'] ?? null),
                    'berat_badan'       => $this->toDecimal($data['BERAT (kg)'] ?? null),

                    'golongan_darah'    => $this->value($data, 'GOL DARAH'),
                    'buta_warna'        => $this->value($data, 'BUTA WARNA'),

                    'mata_kiri'         => $this->value($data, 'MATA KIRI'),
                    'mata_kanan'        => $this->value($data, 'MATA KANAN'),

                    'pernah_operasi'        => $this->value($data, 'PERNAH OPERASI'),
                    'apakah_sedang_minum'   => $this->value($data, 'APAKAH SEDANG MINUM'),
                    'tangan'                => $this->value($data, 'TANGAN'),
                    'merokok'               => $this->value($data, 'MEROKOK'),
                    'penyakit_dalam'        => $this->value($data, 'PENYAKIT DALAM'),

                    'keahlian'              => $this->value($data, 'KEAHLIAN'),
                    'sifat_kepribadian'     => $this->value($data, 'SIFAT/KEPRIBADIAN'),
                    'kelebihan'             => $this->value($data, 'KELEBIHAN'),
                    'kelemahan'             => $this->value($data, 'KELEMAHAN'),
                    'status'                => $this->value($data, 'STATUS'),
                    'hobi'                  => $this->value($data, 'HOBI'),
                    'motivasi'              => $this->value($data, 'MOTIVASI'),

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

                    'perguruan_tinggi' => $this->value(
                        $data,
                        'PERGURUAN TINGGI (JIKA ADA) - PROGRAM STUDI'
                    ),

                    'pengalaman_kerja' => $this->value(
                        $data,
                        'PENGALAMAN KERJA (Tahun Masuk - Keluar - Nama Perusahaan - Bagian)'
                    ),

                    'bahasa_asing' => $this->value(
                        $data,
                        'BAHASA ASING YANG DIKUASAI'
                    ),

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

                    'kerabat_dijepang' => $this->value(
                        $data,
                        'APAKAH ADA KERABAT DI JEPANG'
                    ),

                    'hubungan_kerabat_dijepang' => $this->value(
                        $data,
                        'APA HUBUNGAN KERABAT YANG DI JEPANG'
                    ),

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

                    'nama_ayah' => $this->value($data, 'NAMA AYAH'),
                    'hubungan_ayah' => $this->value($data, 'HUBUNGAN AYAH'),
                    'usia_ayah' => $this->toInteger(
                        $data['USIA AYAH'] ?? null
                    ),
                    'pekerjaan_ayah' => $this->value($data, 'PEKERJAAN AYAH'),

                    'nama_ibu' => $this->value($data, 'NAMA IBU'),
                    'hubungan_ibu' => $this->value($data, 'HUBUNGAN IBU'),
                    'usia_ibu' => $this->toInteger(
                        $data['USIA IBU'] ?? null
                    ),
                    'pekerjaan_ibu' => $this->value($data, 'PEKERJAAN IBU'),

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

                    // ID dari Excel masuk ke randomId
                    'randomId' => $this->value(
                        $data,
                        'ID'
                    ),

                    // Timestamp Excel → created_at & updated_at
                    'created_at' => $timestamp,
                    'updated_at' => $timestamp,
                ];

                DataPendaftaranSiswa::create($insertData);

                $inserted++;
            }

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Import berhasil.',
                'inserted' => $inserted,
                'skipped' => $skipped,
            ]);

        } catch (Throwable $e) {

            DB::rollBack();

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
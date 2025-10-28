<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class AbsensiController extends Controller
{
    protected $link_spreedsheet = "https://script.google.com/macros/s/AKfycbzcXEhB1_m4pS2oXks6ewEkcwWigi3v7-2coXlhPHNvuv6LkPPeVjnC09g0-fRdfKpA_A/exec";
    // protected $data_siswa       = "https://script.google.com/macros/s/AKfycbxfZzhEFjTK76mXtLrqZRkEQFXisobiEKKkr6AAEMHiBtBcNCY5UaBQBrkVt14RCVNiCQ/exec";
    
    // public function index()
    // {
    //     $response   = Http::get($this->data_siswa);
    //     $allData    = $response->json();
    //     $firstSheet = array_key_first($allData);
    //     $namaSiswa  = array_column($allData[$firstSheet] ?? [], 'NAMA');

    //     $bulan      = array_keys($allData);
    //     $gelombang  = [];

    //     foreach ($bulan as $b) {
    //         if (preg_match('/^(\d+)/', $b, $matches)) {
    //             $angka = $matches[1];
    //             $gelombang[$angka][] = $b;
    //         } else {
    //             $gelombang['lainnya'][] = $b;
    //         }
    //     }

    //     return view('absensi.index', compact('namaSiswa', 'gelombang', 'allData'));
    // }

    public function index()
    {
        return view('absensi.index');
    }

    public function fetchData()
    {
        $allData = [];

        try {
            $response = Http::timeout(10)->get($this->link_spreedsheet);
            $appsList = $response->json()['Data'] ?? [];

            foreach ($appsList as $item) {
                $linkApp = trim($item['Link App Script'] ?? '');
                if(!$linkApp) continue;

                $resp = Http::timeout(120)->get($linkApp);
                if ($resp->successful()) {
                    $raw = preg_replace('/^\)\]\}\'?\n?/', '', trim($resp->body()));
                    $data = json_decode($raw, true);
                    if (is_array($data)) {
                        foreach($data as $sheetName => $rows){
                            $allData[$sheetName] = array_merge($allData[$sheetName] ?? [], $rows);
                        }
                    }
                }
            }

            if(empty($allData)) return response()->json(['error'=>'Data kosong'],400);

            $firstSheet = array_key_first($allData);
            $namaSiswa = array_column($allData[$firstSheet] ?? [], 'NAMA');

            $bulan = array_keys($allData);
            $gelombang = [];
            foreach($bulan as $b){
                if(preg_match('/^(\d+)/', $b,$matches)){
                    $gelombang[$matches[1]][] = $b;
                }else{
                    $gelombang['lainnya'][] = $b;
                }
            }

            return response()->json([
                'allData'=>$allData,
                'gelombang'=>$gelombang,
                'namaSiswa'=>$namaSiswa
            ]);

        } catch (\Exception $e){
            return response()->json(['error'=>$e->getMessage()],500);
        }
    }

    // public function index()
    // {
    //     try {
    //         $response = Http::timeout(10)->get($this->link_spreedsheet);
    //         if (!$response->successful()) {
    //             return back()->with('error', 'Gagal mengambil daftar spreadsheet.');
    //         }

    //         $listApps = $response->json();
    //         $appsList = $listApps['Data'] ?? [];
    //         if (empty($appsList)) {
    //             return back()->with('error', 'Tidak ada daftar App Script ditemukan.');
    //         }

    //         $allData = [];

    //         foreach ($appsList as $item) {
    //             $keys = array_change_key_case($item, CASE_LOWER);
    //             $linkApp = $keys['link app script'] 
    //                 ?? $keys['link_app_script'] 
    //                 ?? $item['Link App Script'] 
    //                 ?? null;

    //             if (!empty($linkApp)) {
    //                 $linkApp = trim(preg_replace('/\x{00A0}/u', ' ', $linkApp));

    //                 try {
    //                     $resp = Http::timeout(15)->get($linkApp);
    //                     if ($resp->successful()) {
    //                         $raw = trim($resp->body());
    //                         $raw = preg_replace('/^\)\]\}\'?\n?/', '', $raw);
    //                         $data = json_decode($raw, true);

    //                         if (json_last_error() === JSON_ERROR_NONE && is_array($data)) {
    //                             foreach ($data as $sheetName => $rows) {
    //                                 if (!isset($allData[$sheetName])) {
    //                                     $allData[$sheetName] = [];
    //                                 }
    //                                 $allData[$sheetName] = array_merge($allData[$sheetName], $rows);
    //                             }
    //                         }
    //                     }
    //                 } catch (\Exception $e) {
    //                     continue;
    //                 }
    //             }
    //         }

    //         if (empty($allData)) {
    //             return back()->with('error', 'Data kosong atau tidak dapat diambil.');
    //         }

    //         $firstSheet = array_key_first($allData);
    //         $namaSiswa  = array_column($allData[$firstSheet] ?? [], 'NAMA');
    //         $bulan = array_keys($allData);
    //         $gelombang = [];

    //         foreach ($bulan as $b) {
    //             if (preg_match('/^(\d+)/', $b, $matches)) {
    //                 $angka = $matches[1];
    //                 $gelombang[$angka][] = $b;
    //             } else {
    //                 $gelombang['lainnya'][] = $b;
    //             }
    //         }

    //         return view('absensi.index', compact('namaSiswa', 'gelombang', 'allData'));
    //     } catch (\Exception $e) {
    //         return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    //     }
    // }

    public function store(Request $request)
    {
        $request->validate([
            'nama'          => 'required|string',
            'gelombang'     => 'required|string',
            'hari'          => 'required|string',
            'keterangan'    => 'required|string'
        ]);

        $response = Http::asForm()->post($this->data_siswa, [
            'sheet'      => $request->gelombang,
            'nama'       => $request->nama,
            'hari'       => $request->hari,
            'keterangan' => $request->keterangan
        ]);

        $status = $response->json()['status'] ?? 'error';

        if($status === 'exists'){
            return response()->json([
                'status'  => 'exists',
                'message' => 'Kamu sudah mengisi absensi untuk tanggal ini!'
            ]);
        }


        return response()->json([
            'status'  => $status,
            'message' => $status === 'success' ? 'Absensi berhasil disubmit, thank you!' : 'Gagal mengirim data'
        ]);
    }
}

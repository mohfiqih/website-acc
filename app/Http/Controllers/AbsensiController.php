<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class AbsensiController extends Controller
{
    protected $link_spreedsheet = "https://script.google.com/macros/s/AKfycbzcXEhB1_m4pS2oXks6ewEkcwWigi3v7-2coXlhPHNvuv6LkPPeVjnC09g0-fRdfKpA_A/exec";

    public function index()
    {
        // return view('absensi.index');
        return view('absensi.index', [
            'link_spreedsheet' => $this->link_spreedsheet
        ]);
    }

    // public function fetchData()
    // {
    //     $allData = [];
    //     $gelombang = [];
    //     $links = [];

    //     try {
    //         $link = public_path('json/absensi.json');
    //         $response = Http::timeout(60)->get($link);
    //         $appsList = $response->json()['Data'] ?? [];

    //         foreach ($appsList as $item) {
    //             $linkApp = trim($item['Link App Script'] ?? '');
    //             if(!$linkApp) continue;

    //             $resp = Http::timeout(120)->get($linkApp);
    //             if ($resp->successful()) {
    //                 $raw = preg_replace('/^\)\]\}\'?\n?/', '', trim($resp->body()));
    //                 $data = json_decode($raw, true);
    //                 if (is_array($data)) {
    //                     foreach($data as $sheetName => $rows){
    //                         $allData[$sheetName] = array_merge($allData[$sheetName] ?? [], $rows);
    //                         $links[$sheetName] = $linkApp;
    //                     }
    //                 }
    //             }
    //         }

    //         foreach($allData as $sheetName => $rows){
    //             if(preg_match('/^(?:KM)?(\d+)/i', $sheetName, $matches)){
    //                 $gelombang[$matches[0]][] = $sheetName;
    //             }
    //         }

    //         return response()->json([
    //             'allData'   => $allData,
    //             'gelombang' => $gelombang,
    //             'links'     => $links
    //         ]);

    //     } catch (\Exception $e){
    //         return response()->json(['error'=>$e->getMessage()],500);
    //     }
    // }

    public function fetchData()
    {
        $allData = [];
        $gelombang = [];
        $links = [];

        try {
            // $path = public_path('json/absensi.json');
            $path = base_path('public/json/absensi.json');

            if (!file_exists($path)) {
                throw new \Exception('File JSON tidak ditemukan di: ' . $path);
            }

            $jsonData = json_decode(file_get_contents($path), true);
            $appsList = $jsonData['Data'] ?? [];

            foreach ($appsList as $item) {
                $linkApp = trim($item['Link App Script'] ?? '');
                if (!$linkApp) continue;

                try {
                    $resp = Http::timeout(120)->withoutVerifying()->get($linkApp);

                    if ($resp->successful()) {
                        $raw = preg_replace('/^\)\]\}\'?\n?/', '', trim($resp->body()));
                        $data = json_decode($raw, true);

                        if (is_array($data)) {
                            foreach ($data as $sheetName => $rows) {
                                $allData[$sheetName] = array_merge($allData[$sheetName] ?? [], $rows);
                                $links[$sheetName] = $linkApp;
                            }
                        }
                    }
                } catch (\Exception $e) {
                    \Log::warning("Gagal ambil dari $linkApp : " . $e->getMessage());
                }
            }

            foreach ($allData as $sheetName => $rows) {
                if (preg_match('/^(?:KM)?(\d+)/i', $sheetName, $matches)) {
                    $gelombang[$matches[0]][] = $sheetName;
                }
            }

            return response()->json([
                'allData'   => $allData,
                'gelombang' => $gelombang,
                'links'     => $links
            ]);

        } catch (\Exception $e) {
            return response()->json(['error' => 'Gagal load data: ' . $e->getMessage()], 500);
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'        => 'required|string',
            'gelombang'   => 'required|string',
            'tanggal'     => 'required|string',
            'keterangan'  => 'required|string',
            'link_script' => 'required|url'
        ]);

        try {
            $response = Http::asForm()->post($request->link_script, [
                'sheet'      => $request->gelombang,
                'nama'       => $request->nama,
                'hari'       => $request->tanggal,
                'keterangan' => $request->keterangan
            ]);

            $status = $response->json()['status'] ?? 'error';

            if($status === 'exists'){
                return response()->json(['status'=>'exists','message'=>'Kamu sudah mengisi absensi untuk tanggal ini!']);
            }

            return response()->json(['status'=>$status,'message'=>$status==='success' ? 'Absensi berhasil disubmit!' : 'Gagal mengirim data']);

        } catch (\Exception $e){
            return response()->json(['status'=>'error','message'=>'Terjadi kesalahan: '.$e->getMessage()]);
        }
    }
}

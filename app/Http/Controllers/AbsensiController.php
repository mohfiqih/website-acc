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
    //         $response = Http::timeout(60)->get($this->link_spreedsheet);
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

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'nama'        => 'required|string',
    //         'gelombang'   => 'required|string',
    //         'tanggal'     => 'required|string',
    //         'keterangan'  => 'required|string',
    //         'link_script' => 'required|url'
    //     ]);

    //     try {
    //         $response = Http::asForm()->post($request->link_script, [
    //             'sheet'      => $request->gelombang,
    //             'nama'       => $request->nama,
    //             'hari'       => $request->tanggal,
    //             'keterangan' => $request->keterangan
    //         ]);

    //         $status = $response->json()['status'] ?? 'error';

    //         if($status === 'exists'){
    //             return response()->json(['status'=>'exists','message'=>'Kamu sudah mengisi absensi untuk tanggal ini!']);
    //         }

    //         return response()->json(['status'=>$status,'message'=>$status==='success' ? 'Absensi berhasil disubmit!' : 'Gagal mengirim data']);

    //     } catch (\Exception $e){
    //         return response()->json(['status'=>'error','message'=>'Terjadi kesalahan: '.$e->getMessage()]);
    //     }
    // }
}

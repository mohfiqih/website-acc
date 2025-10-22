<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AbsensiController extends Controller
{
    protected $link_spreedsheet = "https://script.google.com/macros/s/AKfycbzcXEhB1_m4pS2oXks6ewEkcwWigi3v7-2coXlhPHNvuv6LkPPeVjnC09g0-fRdfKpA_A/exec";
    protected $data_siswa       = "https://script.google.com/macros/s/AKfycbxfZzhEFjTK76mXtLrqZRkEQFXisobiEKKkr6AAEMHiBtBcNCY5UaBQBrkVt14RCVNiCQ/exec";
    
    public function index()
    {
        $response   = Http::get($this->data_siswa);
        $allData    = $response->json();
        $firstSheet = array_key_first($allData);
        $namaSiswa  = array_column($allData[$firstSheet] ?? [], 'NAMA');

        $bulan      = array_keys($allData);
        $gelombang  = [];

        foreach ($bulan as $b) {
            if (preg_match('/^(\d+)/', $b, $matches)) {
                $angka = $matches[1];
                $gelombang[$angka][] = $b;
            } else {
                $gelombang['lainnya'][] = $b;
            }
        }

        return view('absensi.index', compact('namaSiswa', 'gelombang', 'allData'));
    }

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

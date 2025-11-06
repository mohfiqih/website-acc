<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DataCOE extends Controller
{
    protected $data_coe = "https://script.google.com/macros/s/AKfycbxde8fDH3JsU4sbuu_yeio83XUYaM7LC9LZAeVcgdg2EETtOVbzl9Ga_NlLn5gfLy1iSw/exec";
    // public function index()
    // {
    //     $response   = Http::get($this->data_coe);
    //     $allData    = $response->json();
    //     $firstSheet = array_key_first($allData);
    //     $nama_so    = array_keys($allData);
        
    //     return view('landing.coe.index', compact('nama_so', 'allData'));
    // }

    public function index()
    {
        return view('landing.coe.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_so'               => 'required|string',
            'nama_siswa'            => 'required|string',
            'tanggal_penerbangan'   => 'nullable|string',
            'keterangan'            => 'nullable|string'
        ]);

        $response = Http::asForm()->post($this->data_coe, [
            'nama_so'               => $request->nama_so,
            'nama_siswa'            => $request->nama_siswa,
            'tanggal_penerbangan'   => $request->tanggal_penerbangan ?? '-',
            'keterangan'            => $request->keterangan ?? '-'
        ]);

        $status = $response->json()['status'] ?? 'error';

        return response()->json([
            'status'  => $status,
            'message' => $status === 'success' ? 'Data sudah disubmit, thank you!' : 'Gagal mengirim data'
        ]);
    }
}

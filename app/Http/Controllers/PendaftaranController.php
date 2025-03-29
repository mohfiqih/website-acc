<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\Image;
use App\Models\ProvinsiModel;
// use Barryvdh\DomPDF\DomPDF;
use Barryvdh\DomPDF\Facade\Pdf;

class PendaftaranController extends Controller
{
    // Data Karyawan
    // public function pendaftaran()
    // {
    //     $user = Auth::user();
    //     return view('dasbor.menu.pendaftaran', compact('user'));
    // }

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

    public function data_pendaftaran_new()
    {
        $url = 'https://script.google.com/macros/s/AKfycbyDa-VNO4T0qKMuFj3qpirCb5oUnO2p6d3cJ1Tlk9ANYzCLlomw8yWCgfUWrSsNCbK6/exec';
        $response = Http::get($url);
        $data = array_reverse($response->json());

        $cleanedData = [];
        foreach ($data as $key => $value) {
            if (in_array($key, ['NAMA (KATAKANA)', 'NAMA (INDONESIA)'])) {
                $cleanedData[$key] = $value;
            } else {
                $newKey = preg_replace('/\s*\(.*?\).*/', '', $key);
                $cleanedData[$newKey] = $value;
            }
        }

        return view('landing.data-pendaftaran-new', compact('cleanedData'));
    }

    public function export_cv_pdf($id)
    {
        $url      = 'https://script.google.com/macros/s/AKfycbyDa-VNO4T0qKMuFj3qpirCb5oUnO2p6d3cJ1Tlk9ANYzCLlomw8yWCgfUWrSsNCbK6/exec';
        $response = Http::get($url);
        $data     = array_reverse($response->json());

        $rowData  = collect($data)->firstWhere('ID', $id);

        if (!$rowData) {
            abort(404, 'Data tidak ditemukan');
        }

        $cleanedData = [];
        foreach ($rowData as $key => $value) {
            if (in_array($key, ['NAMA (KATAKANA)', 'NAMA (INDONESIA)'])) {
                $cleanedData[$key] = $value;
            } else {
                $newKey = preg_replace('/\s*\(.*?\).*/', '', $key);
                $cleanedData[$newKey] = $value;
            }
        }

        $nama_katakana = mb_convert_encoding($rowData['NAMA (KATAKANA)'], 'UTF-8', 'auto');
        $nama = $cleanedData['NAMA'] ?? 'Unknown';

        $pdf = Pdf::loadView('landing.export-cv-pdf', compact('rowData', 'nama_katakana'));
        return $pdf->stream('CV_' . str_replace(' ', '_', $nama) . '.pdf');
    }
}
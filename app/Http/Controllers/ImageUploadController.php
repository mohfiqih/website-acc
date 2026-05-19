<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    public function index()
    {
        $images_db = Image::orderBy('created_at', 'desc')->paginate(12);
        return view('landing.upload.upload_dokumentasi_baru', ['images_db' => $images_db]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,png|max:10240'
        ]);

        foreach ($request->file('images') as $image) {

            $path = $image->store('images', 'public');

            Image::create([
                'filepath' => $path
            ]);
        }

        return response()->json([
            'success' => true
        ]);
    }

    public function delete($id)
    {
        $image = Image::find($id);

        if (!$image) {
            return response()->json(['success' => false, 'message' => 'Gambar tidak ditemukan.']);
        }

        $image->delete();

        return response()->json(['success' => true, 'message' => 'Gambar berhasil dihapus.']);
    }
}

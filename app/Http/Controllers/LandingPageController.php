<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class LandingPageController extends Controller
{
    public function index()
    {
        $images_db = Image::orderBy('created_at', 'desc')->get();
        return view('landing.index', ['images_db' => $images_db]);
    }

    public function program_jepang()
    {
        $images = [
            '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg',
            '6.jpg', '7.jpg', '8.jpg', '9.jpg', '10.jpg',
            '11.jpg', '12.jpg', '13.jpg', '14.jpg', '15.jpg',
            '16.jpg', '17.jpg', '18.jpg'
        ];
        $images_db = Image::orderBy('created_at', 'desc')->get();
        return view('landing.japan', [
            'images'    => $images,
            'images_db' => $images_db
        ]);
    }
}

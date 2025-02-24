<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Http;

// Landing Page
Route::get('/', [LandingPageController::class, 'index'])->name('landing.index');
Route::get('/program-jepang', [LandingPageController::class, 'program_jepang'])->name('landing.program_jepang');

Route::get('/program-korea', function () {
    $images = [
        '1.jpg','2.jpg','3.jpg','4.jpg','5.jpg','6.jpg','7.jpg','8.jpg',
        '9.jpg','10.jpg','11.jpg'
    ];

    return view('landing/korea', ['images' => $images]);
});

Route::get('/galeri', function () {
    $images = [
        '1.jpg','2.jpg','3.jpg','4.jpg','5.jpg','6.jpg','7.jpg','8.jpg',
        '9.jpg','10.jpg','11.jpg'
    ];

    return view('landing/galeri', ['images' => $images]);
});

Route::get('/daftar-online', function () {
    return view('landing/daftar');
});

// Login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

// Register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('actionregister', [RegisterController::class, 'register'])->name('register');

// Dashboard
Route::get('/dasbor', [DashboardController::class, 'index'])->name('index')->middleware('auth');
Route::post('/logout', [DashboardController::class, 'logout'])->name('logout')->middleware('web');

// Profil Admin
Route::get('/profil', [DashboardController::class, 'profil'])->name('profil')->middleware('auth');

// Struktur Organisasi
Route::get('/struktur-jepang', [DashboardController::class, 'struktur_jepang'])->name('struktur_jepang')->middleware('auth');
Route::get('/struktur-korea', [DashboardController::class, 'struktur_korea'])->name('struktur_korea')->middleware('auth');

# Data User
Route::get('/data-user', [UserController::class, 'data_user'])->name('data_user')->middleware('auth');
Route::delete('/user/{id}', [UserController::class, 'delete_user'])->name('delete_user');

# upload galeri
Route::get('/upload', [ImageUploadController::class, 'index'])->name('images.index');
Route::post('/upload', [ImageUploadController::class, 'store'])->name('images.store');

# pendaftaran
Route::get('/pendaftaran-online', [PendaftaranController::class, 'index']);
Route::post('/pendaftaran-online', [PendaftaranController::class, 'store']);

// # get data
Route::get('/data-pendaftaran-online', function () {
    $url = 'https://script.google.com/macros/s/AKfycbwF3L65UYA-fQWjoGySmpK0E65LJnv1-4FExs0rQvpcJ6TVDa4BXJ7ZUBdggP8Ylb-d/exec';
    $response = Http::get($url);
    $data = array_reverse($response->json());
    return view('landing/data-pendaftaran', ['data' => $data]);
});

Route::delete('/images/{id}', [ImageUploadController::class, 'delete'])->name('images.delete');
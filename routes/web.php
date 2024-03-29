<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Landing Page
Route::get('/', function () {
    return view('landing/index');
});

Route::get('/program-jepang', function () {
    $images = [
        '1.jpg','2.jpg','3.jpg','4.jpg','5.jpg','6.jpg','7.jpg','8.jpg',
        '9.jpg','10.jpg','11.jpg','12.jpg','13.jpg','14.jpg','15.jpg','16.jpg','17.jpg','18.jpg'
    ];

    return view('landing/japan', ['images' => $images]);
});

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

// Data User
Route::get('/data-user', [UserController::class, 'data_user'])->name('data_user')->middleware('auth');
Route::delete('/user/{id}', [UserController::class, 'delete_user'])->name('delete_user');
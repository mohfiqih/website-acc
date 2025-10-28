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
use App\Http\Controllers\DataKonsultasi;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\DataCOE;

// Landing Page
Route::get('/', [LandingPageController::class, 'index'])->name('landing.index');

# manual book
Route::get('/manual-book', [LandingPageController::class, 'manual_book'])->name('landing.manual_book');

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

# Login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
# Register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('actionregister', [RegisterController::class, 'register'])->name('register');
# Dashboard
Route::get('/dasbor', [DashboardController::class, 'index'])->name('index')->middleware('auth');
Route::post('/logout', [DashboardController::class, 'logout'])->name('logout')->middleware('web');
Route::get('/data-pendaftaran-siswa-baru', [DashboardController::class, 'data_pendaftaran_online'])->name('data-pendaftaran-siswa-baru');
Route::get('/data-pendaftaran-siswa-baru/json', [DashboardController::class, 'data_pendaftaran_online_json'])->name('data-pendaftaran-siswa-baru.json');
# Profil Admin
Route::get('/profil', [DashboardController::class, 'profil'])->name('profil')->middleware('auth');
# Struktur Organisasi
Route::get('/struktur-jepang', [DashboardController::class, 'struktur_jepang'])->name('struktur_jepang')->middleware('auth');
Route::get('/struktur-korea', [DashboardController::class, 'struktur_korea'])->name('struktur_korea')->middleware('auth');
# Data Siswa
Route::get('/data-siswa', [DashboardController::class, 'data_siswa'])->name('data-siswa');
Route::get('data-siswa/export-pdf', [DashboardController::class, 'export_pdf'])->name('data-siswa.export-pdf');
Route::get('data-siswa/export-excel', [DashboardController::class, 'export_excel'])->name('data-siswa.export-excel');
# Data User
Route::get('/data-user', [UserController::class, 'data_user'])->name('data_user')->middleware('auth');
Route::delete('/user/{id}', [UserController::class, 'delete_user'])->name('delete_user');
# upload galeri
Route::get('/upload', [ImageUploadController::class, 'index'])->name('images.index');
Route::post('/upload', [ImageUploadController::class, 'store'])->name('images.store');
# pendaftaran
Route::get('/pendaftaran-online', [PendaftaranController::class, 'index']);
Route::post('/pendaftaran-online', [PendaftaranController::class, 'store']);
# get data pendaftaran old
Route::get('/data-pendaftaran-online', [PendaftaranController::class, 'data_pendaftaran_old']);
# pendaftaran umum
Route::get('/pendaftaran-siswa-baru', [PendaftaranController::class, 'pendaftaran_baru']);
# for mentor
Route::get('/pendaftaran-siswa-baru/{mentor}', [PendaftaranController::class, 'pendaftaran_baru']);
Route::post('/pendaftaran-siswa-baru', [PendaftaranController::class, 'store_pendaftaran_baru']);
# get data pendaftaran baru
Route::get('/data-pendaftaran', [PendaftaranController::class, 'data_pendaftaran_new']);
Route::get('/data-pendaftaran/export-pdf', [PendaftaranController::class, 'exportPdf'])->name('data-pendaftaran.export-pdf');
# refresh
Route::get('/refresh-table-pendaftaran', [PendaftaranController::class, 'refreshTablePendaftaran'])->name('refresh.pendaftaran');
Route::get('/export-cv-pdf/{id}', [PendaftaranController::class, 'export_cv_pdf'])->name('export.pdf');
Route::get('/export-cv-word/{id}', [PendaftaranController::class, 'export_cv_word'])->name('export.cv.word');
Route::delete('/images/{id}', [ImageUploadController::class, 'delete'])->name('images.delete');
# data konsultasi
Route::get('/data-konsultasi', [DataKonsultasi::class, 'data_konsultasi']);
Route::get('/data-konsultasi/export-pdf', [DataKonsultasi::class, 'exportPdf'])->name('data-konsultasi.export-pdf');
# absensi siswa
Route::get('/absensi', [AbsensiController::class, 'index'])->name('absensi.form');
Route::post('/absensi/store', [AbsensiController::class, 'store'])->name('absensi.store');
Route::get('/absensi/data', [AbsensiController::class, 'fetchData'])->name('absensi.data');

# data coe turun (manager)
Route::get('/data-coe', [DataCOE::class, 'index']);
Route::post('/coe/store', [DataCOE::class, 'store'])->name('coe.store');
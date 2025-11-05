<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Formulir Pendaftaran Siswa Baru</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link
        href="https://www.amanahcitracemerlang.id/storage/images/1738849208_WhatsApp_Image_2025-02-06_at_20.04.03-removebg-preview.png"
        rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link href="{{ asset('templates/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/assets/css/main.css?v=1.0') }}" rel="stylesheet">
    <link href="{{ asset('templates/assets/css/floating.css?v=1.0') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- Tagify CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css">

    <!-- Lity CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.css">

    {{-- Year Picker --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <style>
        .text-label {
            padding-bottom: 10px;
        }

        .form-group {
            padding-top: 15px;
        }

        .pagination-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            padding: 10px 15px;
        }

        .pagination {
            display: flex;
            list-style: none;
            padding: 0;
            gap: 5px;
            flex-wrap: wrap;
        }

        .pagination li {
            display: inline-block;
        }

        .pagination li a,
        .pagination li span {
            display: inline-block;
            padding: 8px 12px;
            border-radius: 5px;
            text-decoration: none;
            border: 1px solid #046392;
            background-color: white;
            color: #046392;
            font-weight: bold;
        }

        .pagination li a:hover {
            background-color: #046392;
            color: white;
        }

        .pagination li.active span {
            background-color: #046392;
            color: white;
        }

        .pagination li.disabled span {
            opacity: 0.5;
            cursor: not-allowed;
        }

        @media (max-width: 768px) {
            .pagination-container {
                padding: 10px;
                width: 100%;
                justify-content: center;
            }

            .pagination {
                flex-wrap: wrap;
                justify-content: center;
            }

            .pagination li a,
            .pagination li span {
                padding: 6px 10px;
                font-size: 14px;
            }
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("https://www.amanahcitracemerlang.id/storage/images/1738420242_IMG-20250131-WA0006.jpg") center center/cover no-repeat;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            opacity: 0.1;
            z-index: -1;
            pointer-events: none;
        }

        body::after {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.5);
            z-index: -2;
        }

        .banner-img {
            background-image: url('https://amanahcitracemerlang.id/templates/assets/img/acc.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
            height: 300px;
            border-radius: 5px;
        }

        .banner-video {
            width: 90%;
            height: 300px;
            overflow: hidden;
            border-radius: 5px;
            position: relative;
        }

        .banner-video video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .banner-img {
                height: 200px;
            }

            #hero h2 {
                font-size: 1.3rem;
            }

            #hero p {
                font-size: 0.95rem;
            }
        }

        ::placeholder {
            font-size: 13px;
            color: #999;
            opacity: 0.8;
        }

        input::-webkit-input-placeholder {
            font-size: 13px;
            color: #999;
        }

        input::-moz-placeholder {
            font-size: 13px;
            color: #999;
        }

        input:-ms-input-placeholder {
            font-size: 13px;
            color: #999;
        }

        input::-ms-input-placeholder {
            font-size: 13px;
            color: #999;
        }

        .step {
            transition: all 0.3s ease;
        }

        .is-invalid {
            border-color: red;
        }

        .nav-link.active-step {
            background-color: #046392 !important;
            color: white !important;
            font-weight: bold;
        }

        #stepNav {
            flex-wrap: wrap;
            justify-content: left;
        }

        @media (max-width: 768px) {
            #stepNav .nav-item {
                flex: 0 0 100%;
                text-align: left;
            }
        }

        #stepNav .nav-link {
            color: black;
            border: 1px solid #dee2e6;
            border-radius: 5px;
        }

        #stepNav .active-step {
            background-color: #007bff;
            color: white !important;
        }

        select[multiple] {
            width: 100% !important;
            min-height: 120px;
        }

        .select2-container--default .select2-selection--single {
            height: 45px;
            padding: 8px 12px;
            font-size: 15px;
            border-radius: 6px;
            border: 1px solid #ced4da;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 28px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 100%;
        }

        .select2-container {
            width: 100% !important;
        }

        .nav-link.disabled {
            pointer-events: none;
            opacity: 0.6;
        }

        .btn-kecil {
            padding: 4px 8px;
            font-size: 12px;
            background-color: #28a745;
            /* warna hijau */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-kecil:hover {
            background-color: #218838;
        }

        .text-white {
            color: white;
            text-decoration: none;
        }
    </style>
</head>

<body>
    @include('landing.header')

    <section id="hero" class="hero" style="padding: 10px;">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in" style="">
                <center>
                    {{-- <div class="banner-img"></div> --}}
                    <div class="banner-video">
                        <video autoplay muted loop playsinline>
                            <source src="https://amanahcitracemerlang.id/bg-video.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <h2 class="text-justify mt-4"></span>FORMULIR PENDAFTARAN SISWA BARU (CV) <br /> LPK ACC JAPAN
                        CENTRE TEGAL</h2>
                    <p class="text-white"><b>Lokasi LPK ACC Japan Centre : </b> Dk. Gitung, Desa Harjosari Lor,
                        Kecamatan Adiwerna, Kabupaten Tegal, Jawa Tengah 52194</p>
                    {{-- <p class="text-white">
                        Klik disini untuk download CV siswa yang sudah terdaftar:
                        <a class="text-white" href="/data-pendaftaran">
                            <button class="btn-kecil">Lihat CV</button>
                        </a>
                    </p> --}}
                </center>
            </div>
        </div>
    </section>

    <div class="container mt-4 mb-4">
        <div class="card" style="padding: 30px;border-radius: 10px;" id="stepFirst">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pendaftaran</li>
                </ol>
            </nav>
            <div class="signup-content">
                <div class="alert alert-warning" role="alert">
                    Jika saat mengisi form tidak bisa klik <b>Next</b> maka terdapat kolom yang belum terisi, silahkan bisa di cek kembali formulir yang telah anda isi!
                </div>
                {{-- nav pill --}}
                <ul class="nav nav-pills mb-3 flex-wrap" id="stepNav" style="gap: 10px;">
                    <li class="nav-item">
                        <a class="nav-link active-step" id="nav-step-1" href="javascript:void(0)">1. Data
                            Diri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" id="nav-step-2" href="javascript:void(0)">2.
                            Kesehatan
                            <br>
                            <p class="text-danger warning-text" style="font-size: 11px;">*) Mohon isi tab yang active
                                terlebih dahulu.</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" id="nav-step-3" href="javascript:void(0)">3.
                            Motivasi
                            <br>
                            <p class="text-danger warning-text" style="font-size: 11px;">*) Mohon isi tab yang active
                                terlebih dahulu.</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" id="nav-step-4" href="javascript:void(0)">4.
                            Pendidikan
                            <br>
                            <p class="text-danger warning-text" style="font-size: 11px;">*) Mohon isi tab yang active
                                terlebih dahulu.</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" id="nav-step-5" href="javascript:void(0)">5. Pengalaman
                            &
                            Lain-lain
                            <br>
                            <p class="text-danger warning-text" style="font-size: 11px;">*) Mohon isi tab yang active
                                terlebih dahulu.</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" id="nav-step-6" href="javascript:void(0)">6. Data
                            Keluarga &
                            Ukuran
                            <br>
                            <p class="text-danger warning-text" style="font-size: 11px;">*) Mohon isi tab yang active
                                terlebih dahulu.</p>
                        </a>
                    </li>
                </ul>

                {{-- <form action="{{ url('/pendaftaran-siswa-baru') }}" method="POST" class="signup-form"> --}}
                <form class="signup-form">
                    @csrf

                    @if (session('success'))
                        <p style="color: green;">{{ session('success') }}</p>
                    @endif

                    @if (session('error'))
                        <p style="color: red;">{{ session('error') }}</p>
                    @endif

                    {{-- Step 1 --}}
                    <div class="step" id="step-1"><br />
                        <h5 class="mb-1" style="font-weight: bold">Page 1: Data Diri Siswa</h5>
                        <hr>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">EMAIL:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan email isian wajib.</p>
                            <input type="email" class="form-control" name="email"
                                placeholder="Masukan email aktif anda" required>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">NAMA (KATAKANA):</label>
                            <p class="text-danger" style="font-size: 11px;">*) Jika tidak tau kosongkan saja.</p>
                            <input type="text" class="form-control" name="nama_katakana"
                                placeholder="Masukan nama (katakana) anda">
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">NAMA (INDONESIA):</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon gunakan huruf KAPITAL, isian
                                wajib.</p>
                            <input type="text" class="form-control" name="nama_indonesia"
                                placeholder="Masukan nama (indonesia) anda" required>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">ALAMAT LENGKAP:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon gunakan huruf KAPITAL, isian
                                wajib. <br /> *) (e.g: JL. BAWAL GITUNG RT 01/RW 02, DESA HARJOSARI LOR, KECAMATAN
                                ADIWERNA, KABUPATEN TEGAL, JAWA TENGAH, INDONESIA)</p>
                            <input type="text" class="form-control" name="alamat"
                                placeholder="Masukan alamat anda" required>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">TANGGAL LAHIR:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih tanggal lahir isian wajib.
                            </p>
                            <input type="date" class="form-control" name="tanggal_lahir"
                                placeholder="Pilih tanggal lahir anda" required>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">USIA:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan usia anda, isian wajib.
                            </p>
                            <input type="number" class="form-control" name="usia"
                                placeholder="Masukan usia anda" required>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">JENIS KELAMIN:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih jenis kelamin, isian wajib.
                            </p>
                            <select name="jenis_kelamin" class="form-control" required>
                                <option value="" disabled selected>Pilih jenis kelamin</option>
                                <option value="LAKI-LAKI">LAKI-LAKI</option>
                                <option value="PEREMPUAN">PEREMPUAN</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">NO HP AKTIF:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan nomor hp aktif, isian
                                wajib.</p>
                            <input type="number" class="form-control" name="no_hp_aktif"
                                placeholder="Masukan nomor HP aktif anda" required>
                        </div>
                        <div class="form-group">
                            <label class="text-label" for="agama" style="font-weight: bold">AGAMA:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih agama, isian wajib.</p>
                            <select name="agama" class="form-control" required>
                                <option value="" disabled selected>Pilih Agama</option>
                                <option value="ISLAM">ISLAM</option>
                                <option value="PROTESTAN">PROTESTAN</option>
                                <option value="KATOLIK">KATOLIK</option>
                                <option value="HINDU">HINDU</option>
                                <option value="BUDHA">BUDHA</option>
                                <option value="KONGHUCU">KONGHUCU</option>
                            </select>
                        </div>

                        <button type="button" class="btn btn-primary mt-3"
                            style="cursor: pointer;background-color: #046392;font-weight: bold;"
                            onclick="nextStep()">Next</button>
                    </div>

                    {{-- Step 2 --}}
                    <div class="step d-none" id="step-2"><br />
                        <h5 class="mb-1" style="font-weight: bold">Page 2: Kesehatan dan Fisik</h5>
                        <hr>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">TINGGI (cm):</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan tinggi badan, isian
                                wajib.</p>
                            <input type="number" class="form-control" name="tinggi_badan"
                                placeholder="Masukan tinggi badan anda" required>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">BERAT (kg):</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan berat badan, isian wajib.
                            </p>
                            <input type="number" class="form-control" name="berat_badan"
                                placeholder="Masukan berat badan anda" required>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">GOL. DARAH:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih golongan darah.</p>
                            <select name="golongan_darah" class="form-control">
                                <option value="" disabled selected>Pilih golongan darah</option>
                                <option value="Belum Mengetahui">Belum Mengetahui</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="O">O</option>
                                <option value="AB">AB</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">BUTA WARNA:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih buta warna atau tidak,
                                isian wajib.</p>
                            <select name="buta_warna" class="form-control" required>
                                <option value="" disabled selected>Pilih opsi buta warna atau tidak</option>
                                <option value="YA">YA</option>
                                <option value="TIDAK">TIDAK</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">MATA KANAN:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan minus mata kanan, jika
                                belum tau kosongkan saja.</p>
                            <input type="text" class="form-control" name="mata_kanan"
                                placeholder="Masukan minus mata kanan anda. ex: 0,5">
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">MATA KIRI:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan minus mata kiri, jika
                                belum tau kosongkan saja.</p>
                            <input type="text" class="form-control" name="mata_kiri"
                                placeholder="Masukan minus mata kiri anda. ex: 1,5">
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">PERNAH OPERASI:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih pernah operasi atau tidak,
                                isian wajib.</p>
                            <select name="pernah_operasi" class="form-control" required>
                                <option value="" disabled selected>Pilih opsi pernah operasi atau tidak</option>
                                <option value="YA">YA</option>
                                <option value="TIDAK">TIDAK</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">APAKAH SEDANG MINUM:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih pernah minum atau tidak,
                                isian wajib.</p>
                            <select name="apakah_sedang_minum" class="form-control" required>
                                <option value="" disabled selected>Pilih opsi sedang minum atau tidak</option>
                                <option value="YA">YA</option>
                                <option value="TIDAK">TIDAK</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">TANGAN:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih penggunaan tangan, isian
                                wajib.</p>
                            <select name="tangan" class="form-control" required>
                                <option value="" disabled selected>Pilih opsi tangan</option>
                                <option value="KANAN">KANAN</option>
                                <option value="KIRI">KIRI</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">MEROKOK:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih opsi merokok atau tidak, isian wajib.</p>
                            <select name="merokok" class="form-control" required>
                                <option value="" disabled selected>Pilih opsi merokok</option>
                                <option value="YA">YA</option>
                                <option value="TIDAK">TIDAK</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">PENYAKIT DALAM:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih memliki riwayat penyakit dalam atau tidak, isian wajib.
                            </p>
                            <select name="penyakit_dalam" class="form-control" required>
                                <option value="" disabled selected>Pilih opsi penyakit dalam</option>
                                <option value="YA">YA</option>
                                <option value="TIDAK">TIDAK</option>
                            </select>
                        </div>
                        <button type="button" class="btn btn-secondary mt-3"
                            style="cursor: pointer;font-weight: bold;" onclick="prevStep()">Previous</button>
                        <button type="button" class="btn btn-primary mt-3"
                            style="cursor: pointer;background-color: #046392;font-weight: bold;"
                            onclick="nextStep()">Next</button>
                    </div>

                    {{-- Step 3 --}}
                    <div class="step d-none" id="step-3"><br />
                        <h5 class="mb-1" style="font-weight: bold">Page 3: Motivasi dan Lainnya</h5>
                        <hr>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">KEAHLIAN:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan keahlian, maksimal 1
                                pilihan.</p>
                            <input type="text" class="form-control tagify-keahlian" name="keahlian"
                                placeholder="Contoh: peternakan, pertanian" required>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">SIFAT/KEPRIBADIAN:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan sifat/kepribadian,
                                maksimal 1 pilihan.</p>
                            <input name="sifat_kepribadian" id="sifat_kepribadian" class="form-control tagify-sifat"
                                placeholder="Contoh: disiplin, jujur">
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">KELEBIHAN:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan kelebihan, maksimal 1
                                pilihan.</p>
                            <input name="kelebihan" id="kelebihan" class="form-control tagify-kelebihan"
                                placeholder="Contoh: kerja tim, cepat belajar">
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">KELEMAHAN:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan kelemahan, maksimal 1
                                pilihan.</p>
                            <input name="kelemahan" id="kelemahan" class="form-control tagify-kelemahan"
                                placeholder="Contoh: mudah panik, kurang percaya diri" required>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">STATUS:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih status, isian wajib.</p>
                            <select name="status" class="form-control" required>
                                <option value="" disabled selected>Pilih opsi status</option>
                                <option value="SUDAH MENIKAH">SUDAH MENIKAH</option>
                                <option value="BELUM MENIKAH">BELUM MENIKAH</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">HOBI:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan hobi, maksimal 1 pilihan.
                            </p>
                            <input type="text" class="form-control tagify-hobi" id="hobi" name="hobi"
                                placeholder="Contoh: sepak bola, pemrograman" required>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">MOTIVASI:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan motivasi, maksimal 1
                                pilihan.</p>
                            <input type="text" class="form-control tagify-motivasi" id="motivasi"
                                name="motivasi" placeholder="Contoh: Ingin mendapat uang banyak" required>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">SELAMA 3 TAHUN DI JEPANG, MAU NABUNG
                                BERAPA:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan planning, isian wajib.
                            </p>
                            <select class="form-control" name="nabung_berapa" required>
                                <option value="" disabled selected>Pilih planning nabung</option>
                                <option value="150 JT / 3 TAHUN">150 JT / 3 TAHUN</option>
                                <option value="200 JT / 3 TAHUN">200 JT / 3 TAHUN</option>
                                <option value="250 JT / 3 TAHUN">250 JT / 3 TAHUN</option>
                                <option value="300 JT / 3 TAHUN">300 JT / 3 TAHUN</option>
                                <option value="BELUM ADA PLANNING MENABUNG">BELUM ADA PLANNING MENABUNG</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">SETELAH PULANG JEPANG, APA YANG AKAN
                                DILAKUKAN:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan planning, maksimal
                                pilihan 2.</p>
                            <input type="text" class="form-control tagify-planning" id="planning"
                                name="apa_yang_akan_dilakukan" placeholder="Masukan planning anda setelah pulang"
                                required>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">APAKAH ANDA PERNAH TINGGAL/BEKERJA DI
                                JEPANG:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih opsi isian wajib.</p>
                            <select name="pernah_tinggal_dijepang" class="form-control" required>
                                <option value="" disabled selected>Pilih opsi pertanyaan</option>
                                <option value="YA">YA</option>
                                <option value="TIDAK">TIDAK</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">JIKA YA, KUALIFIKASI APA YANG ANDA
                                LAMAR:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Jika tidak ada kosongkan saja</p>
                            <textarea type="text" class="form-control" name="kualifikasi" placeholder="Masukan kualifikasi apa yang dilamar"></textarea>
                        </div>
                        <button type="button" class="btn btn-secondary mt-3"
                            style="cursor: pointer;font-weight: bold;" onclick="prevStep()">Previous</button>
                        <button type="button" class="btn btn-success mt-3"
                            style="cursor: pointer;background-color: #046392;font-weight: bold;"
                            onclick="nextStep()">Next</button>
                    </div>

                    {{-- Step 4 --}}
                    <div class="step d-none" id="step-4"><br />
                        <h5 class="mb-1" style="font-weight: bold">Page 4: Pendidikan</h5>
                        <hr>

                        {{-- SD --}}
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">SEKOLAH DASAR (SD):</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan sekolah dasar dengan
                                huruf KAPITAL, isian wajib.</p>
                            <input type="text" class="form-control" name="sekolah_dasar"
                                placeholder="Masukan nama SD, gunakan huruf KAPITAL" required>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">TAHUN MASUK (SD):</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan tahun masuk, isian wajib.
                            </p>
                            <input type="number" class="form-control yearpicker" name="tahun_masuk_sd"
                                placeholder="Masukan tahun masuk SD" required>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">TAHUN KELUAR (SD):</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan tahun keluar, isian
                                wajib.
                            </p>
                            <input type="number" class="form-control yearpicker" name="tahun_keluar_sd"
                                placeholder="Masukan tahun keluar SD" required>
                        </div>

                        {{-- SMP --}}
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">SEKOLAH MENENGAH PERTAMA
                                (SMP):</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan SMP dengan huruf Kapital
                                isian wajib.
                            </p>
                            <input type="text" class="form-control" name="sekolah_menengah_pertama"
                                placeholder="Masukan nama SMP, gunakan huruf KAPITAL" required>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">TAHUN MASUK (SMP):</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan tahun masuk, isian wajib.
                            </p>
                            <input type="number" class="form-control yearpicker" name="tahun_masuk_smp"
                                placeholder="Masukan tahun masuk SMP" required>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">TAHUN KELUAR (SMP):</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan tahun keluar, isian
                                wajib.
                            </p>
                            <input type="number" class="form-control yearpicker" name="tahun_keluar_smp"
                                placeholder="Masukan tahun keluar SMP" required>
                        </div>

                        {{-- SMA / SMK --}}
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">SEKOLAH MENENGAH ATAS/KEJURUAN
                                (SMA/SMK):</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan SMA/SMK dengan huruf
                                Kapital, isian wajib.</p>
                            <input type="text" class="form-control" name="sekolah_menengah_atas"
                                placeholder="Masukan nama SMA/SMK, gunakan huruf KAPITAL" required>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">TAHUN MASUK (SMA/SMK):</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan tahun masuk isian
                                wajib.
                            </p>
                            <input type="number" class="form-control yearpicker" name="tahun_masuk_smak"
                                placeholder="Masukan tahun masuk SMA/SMK" required>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">TAHUN KELUAR (SMA/SMK):</label>
                            <p class="text-danger" style="font-size: 11px;">
                                *) Mohon masukan tahun keluar isian wajib.
                            </p>
                            <input type="number" class="form-control yearpicker" name="tahun_keluar_smak"
                                placeholder="Masukan tahun keluar SMA/SMK" required>
                        </div>

                        {{-- JURUSAN --}}
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">JURUSAN (SMA/SMK):</label>
                            <p class="text-danger" style="font-size: 11px;">
                                *) Gunakan Huruf Kapital, jika tidak ada kosongkan saja.
                            </p>
                            <input type="text" class="form-control" name="jurusan"
                                placeholder="Masukan jurusan (SMA/SMK), gunakan huruf KAPITAL">
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">PERGURUAN TINGGI (JIKA ADA) - PROGRAM
                                STUDI:</label>
                            <p class="text-danger" style="font-size: 11px;">
                                *) Maksimal 2 Perguruan Tinggi<br />
                                *) Gunakan huruf kapital
                            </p>
                            <div id="perguruan-wrapper"></div>

                            <button type="button" class="btn btn-primary mt-2"
                                style="cursor: pointer;background-color: #046392;font-weight: bold;"
                                id="addPerguruanBtn">
                                + Tambah Perguruan Tinggi
                            </button>
                        </div>

                        <button type="button" class="btn btn-secondary mt-3"
                            style="cursor: pointer;font-weight: bold;" onclick="prevStep()">Previous</button>
                        <button type="button" class="btn btn-success mt-3"
                            style="cursor: pointer;background-color: #046392;font-weight: bold;"
                            onclick="nextStep()">Next</button>
                    </div>

                    {{-- Step 5 --}}
                    <div class="step d-none" id="step-5"><br />
                        <h5 class="mb-1" style="font-weight: bold">Page 5: Pengalaman & Lain-Lain</h5>
                        <hr>

                        {{-- Pengalaman Kerja --}}
                        <div class="form-group">
                            <label class="text-label font-weight-bold">PENGALAMAN KERJA:</label>
                            <p class="text-danger" style="font-size: 11px;">
                                *) Maksimal 3 pengalaman kerja<br />
                                *) Gunakan huruf kapital
                            </p>
                            <div id="pengalaman-wrapper"></div>
                            <button type="button" class="btn btn-primary mt-2"
                                style="cursor: pointer;background-color: #046392;font-weight: bold;"
                                id="addPengalamanBtn">
                                + Tambah Pengalaman
                            </button>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">BAHASA ASING YANG DIKUASAI
                                (KAPITAL):</label>
                            <p class="text-danger" style="font-size: 11px;">*) Silahkan ketik bahasa asing yang ingin
                                anda cari, jika tidak ada kosongkan saja.</p>
                            <select name="bahasa_asing[]" class="form-control" multiple="multiple"
                                id="bahasa_asing"></select>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">PERNAH KE JEPANG:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih opsi jika tidak pernah klik
                                Tidak, jika pernah ke negara lain ketik nama negara dikolom, isian wajib.</p>
                            <select name="pernah_keluar_negeri" class="form-control" id="pernah_keluar_negeri"
                                required>
                                <option value="" disabled selected>Pilih opsi pertanyaan</option>
                                <option value="YA">YA</option>
                                <option value="TIDAK">TIDAK</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">JIKA YA, SEBUTKAN
                                TANGGAL/BULAN/TAHUN:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Jika tidak ada kosongkan saja.</p>
                            <input type="date" class="form-control" name="tanggal_keluar_negeri"
                                placeholder="Pilih tanggal anda pernah ke luar negeri">
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">PERNAH KE LUAR NEGERI LAINNYA:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih opsi jika tidak pernah klik
                                <b>Tidak</b>, isian wajib.
                            </p>
                            <select name="pernah_keluar_negeri_lain" class="form-control"
                                id="pernah_keluar_negeri_lain" required>
                                <option value="" disabled selected>Pilih opsi pertanyaan</option>
                                <option value="YA">YA</option>
                                <option value="TIDAK">TIDAK</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">JIKA YA, NEGARA APA:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Jika tidak pernah kosongkan saja.</p>
                            <input type="text" class="form-control" name="negara"
                                placeholder="Jika tidak pernah kosongkan saja">
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">APAKAH ADA KERABAT DI JEPANG:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih opsi jika tidak pernah klik
                                <b>Tidak</b>, isian wajib.
                            </p>
                            <select name="kerabat_dijepang" class="form-control" id="kerabat_dijepang">
                                <option value="" disabled selected>Pilih opsi pertanyaan</option>
                                <option value="YA">YA</option>
                                <option value="TIDAK">TIDAK</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">JIKA ADA, APA HUBUNGAN KERABAT YANG DI
                                JEPANG:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih jika ada, jika tidak ada kosongkan saja.</p>
                            <select name="hubungan_kerabat_dijepang" class="form-control">
                                <option value="" disabled selected>Pilih Hubungan Kerabat</option>
                                <option value="TEMAN">TEMAN</option>
                                <option value="KELUARGA">KELUARGA</option>
                                <option value="TETANGGA">TETANGGA</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">BELAJAR BAHASA:</label>
                            <p class="text-danger" style="font-size: 11px;">
                                *) Mohon pilih belajar bahasa, pilih YA jika ingin belajar bahasa di LPK ACC Japan Centre (untuk matching job opsional).
                            </p>
                            <select name="kerabat_dijepang" class="form-control" id="kerabat_dijepang">
                                <option value="" disabled selected>Pilih opsi pertanyaan</option>
                                <option value="YA">YA</option>
                                <option value="TIDAK">TIDAK</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">BUKU YANG DIPAKAI:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih buku yang pernah digunakan, jika belum kosongkan.</p>
                            <select name="buku_yang_dipakai" class="form-control">
                                <option value="" disabled selected>Pilih Buku yang digunakan</option>
                                <option value="NIHONGO">NIHONGO</option>
                                <option value="LAINNYA">LAINNYA</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">BAB YANG DIPELAJARI:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon isi bab berapa yang telah anda
                                pelajari, jika belum kosongkan saja.</p>
                            <input type="number" class="form-control" name="bab_yang_dipelajari"
                                placeholder="Masukan bab berapa yang di pelajari">
                        </div>

                        <button type="button" class="btn btn-secondary mt-3"
                            style="cursor: pointer;font-weight: bold;" onclick="prevStep()">Previous</button>
                        <button type="button" class="btn btn-success mt-3"
                            style="cursor: pointer;background-color: #046392;font-weight: bold;"
                            onclick="nextStep()">Next</button>
                    </div>

                    {{-- Step 6 --}}
                    <div class="step d-none" id="step-6"><br />
                        <h5 class="mb-1" style="font-weight: bold">Page 6: Data Keluarga & Ukuran</h5>
                        <hr>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">NAMA AYAH:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon isi nama ayah gunakan huruf
                                kapital, jika tidak ada kosongkan saja.</p>
                            <input type="text" class="form-control" name="nama_ayah"
                                placeholder="Masukan nama lengkap ayah">
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">USIA AYAH:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon isi usia ayah, jika tidak ada kosongkan saja.</p>
                            <input type="number" class="form-control" name="usia_ayah"
                                placeholder="Masukan usia ayah">
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">PEKERJAAN AYAH:</label>
                            <p class="text-danger" style="font-size: 11px;">
                                *) Mohon isi pekerjaan ayah, jika tidak ada kosongkan saja.
                            </p>
                            <input type="text" class="form-control" name="pekerjaan_ayah"
                                placeholder="Masukan pekerjaan ayah">
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">NAMA IBU:</label>
                            <p class="text-danger" style="font-size: 11px;">
                                *) Mohon isi nama ibu gunakan huruf kapital, jika tidak ada kosongkan saja.
                            </p>
                            <input type="text" class="form-control" name="nama_ibu"
                                placeholder="Masukan nama lengkap ibu">
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">USIA IBU:</label>
                            <p class="text-danger" style="font-size: 11px;">
                                *) Mohon isi usia ibu, jika tidak ada kosongkan saja.
                            </p>
                            <input type="number" class="form-control" name="usia_ibu"
                                placeholder="Masukan usia ibu">
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">PEKERJAAN IBU:</label>
                            <p class="text-danger" style="font-size: 11px;">
                                *) Mohon isi pekerjaan ibu, jika tidak ada kosongkan saja
                            </p>
                            <input type="text" class="form-control" name="pekerjaan_ibu"
                                placeholder="Masukan pekerjaan ibu">
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">
                                NAMA SAUDARA (maks. 6 data)
                            </label>
                            <p class="text-danger" style="font-size: 11px;">
                                *) Maksimal 6 nama saudara<br />
                                *) Gunakan huruf kapital
                            </p>
                            <div id="saudara-wrapper">
                            </div>
                            <button type="button" class="btn btn-primary mt-2"
                                style="cursor: pointer;background-color: #046392;font-weight: bold;"
                                id="add-saudara-btn">+ Tambah Saudara</button>
                        </div>

                        <input type="hidden" name="nama_saudara" id="nama_saudara_hidden">

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">PENDAPAT KELUARGA:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih opsi jika tidak setuju klik
                                Tidak, isian wajib.</p>
                            <select name="pendapat_keluarga" class="form-control" id="pendapat_keluarga">
                                <option value="" disabled selected>Pilih opsi pertanyaan</option>
                                <option value="SETUJU">SETUJU</option>
                                <option value="TIDAK SETUJU">TIDAK SETUJU</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">NOMOR HP KELUARGA (AKTIF):</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon nomor HP Keluarga, isian wajib.
                            </p>
                            <input type="text" class="form-control" name="no_hp_keluarga"
                                placeholder="Masukan nomor hp keluarga" required>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">NAMA MENTOR:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Jika sudah terisi gunakan yang sudah ada, jika belum beri tanda (-)</p>
                            <input type="text" class="form-control" name="nama_mentor"
                                value="{{ $mentor }}" placeholder="Masukan nama mentor">
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">UKURAN BAJU:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih ukuran baju, isian wajib.
                            </p>
                            <select name="ukuran_baju" class="form-control" id="ukuran_baju" required>
                                <option value="" disabled selected>Pilih opsi ukuran baju</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">NOMOR SEPATU:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon isi ukuran sepatu, isian wajib.
                            </p>
                            <input type="number" class="form-control" name="ukuran_sepatu"
                                placeholder="Masukan ukuran sepatu" required>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">PILIH KELAS:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih kelas, isian wajib.
                            </p>
                            <select name="pilih_kelas" class="form-control" id="pilih_kelas" required>
                                <option value="" disabled selected>Pilih opsi kelas</option>
                                <option value="Kelas Pagi">Kelas Pagi</option>
                                <option value="Kelas Malam">Kelas Malam</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">PILIH PROGRAM:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih program, isian wajib.
                            </p>
                            <select name="pilih_program" class="form-control" id="pilih_program" required>
                                <option value="" disabled selected>Pilih opsi program</option>
                                <option value="Program Magang">Program Magang</option>
                                <option value="Program TG Nol">Program TG Nol</option>
                                <option value="Program Matching Job Magang">Program Matching Job Magang</option>
                                <option value="Program Matching Job TG">Program Matching Job TG</option>
                            </select>
                        </div>

                        <button type="button" class="btn btn-secondary mt-3"
                            style="cursor: pointer;font-weight: bold;" onclick="prevStep()">Previous</button>
                        <button type="submit" class="btn btn-success mt-3"
                            style="cursor: pointer;background-color: #046392;font-weight: bold;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- <div id="preloader"></div> --}}

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <!-- Tagify JS -->
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>

    {{-- JS Pendaftaran --}}
    <script src="{{ asset('js/scroll_up_next_previous.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            if (window.location.hash === "#galeri") {
                document.getElementById("galeri").scrollIntoView({
                    behavior: "smooth"
                });
            }
        });

        $(window).on('load', function() {
            $('#preloader').fadeOut('slow');
        });

        $('#bahasa_asing').select2({
            tags: true,
            placeholder: 'Silahkan ketik bahasa asing yang ingin anda cari...',
            width: '100%',
            language: {
                noResults: function() {
                    return "Klik pilih atau tekan enter untuk menambahkan..";
                }
            }
        });

        $('#pernah_keluar_negeri').select2({
            tags: true,
            placeholder: "Pilih atau ketik jawaban...",
            allowClear: true,
            width: '100%',
            language: {
                noResults: function() {
                    return "Tidak ditemukan, tekan Enter untuk menambahkan";
                }
            }
        });

        // $(document).ready(function() {
        //     $('.signup-form').on('submit', function(e) {
        //         e.preventDefault();

        //         let bahasaAsing = $('#bahasa_asing').val();
        //         if (bahasaAsing) {
        //             let bahasaAsingString = Array.isArray(bahasaAsing) ? bahasaAsing.join(', ') :
        //                 bahasaAsing;
        //             $('<input>').attr({
        //                 type: 'hidden',
        //                 name: 'bahasa_asing',
        //                 value: bahasaAsingString
        //             }).appendTo('.signup-form');
        //         }

        //         let sifat = $('#sifat_kepribadian').val();
        //         if (sifat) {
        //             let sifatString = Array.isArray(sifat) ? sifat.join(', ') : sifat;
        //             $('<input>').attr({
        //                 type: 'hidden',
        //                 name: 'sifat_kepribadian',
        //                 value: sifatString
        //             }).appendTo('.signup-form');
        //         }

        //         let kelebihan = $('#kelebihan').val();
        //         if (kelebihan) {
        //             let kelebihanString = Array.isArray(kelebihan) ? kelebihan.join(', ') : kelebihan;
        //             $('<input>').attr({
        //                 type: 'hidden',
        //                 name: 'kelebihan',
        //                 value: kelebihanString
        //             }).appendTo('.signup-form');
        //         }

        //         let kelemahan = $('#kelemahan').val();
        //         if (kelemahan) {
        //             let kelemahanString = Array.isArray(kelemahan) ? kelemahan.join(', ') : kelemahan;
        //             $('<input>').attr({
        //                 type: 'hidden',
        //                 name: 'kelemahan',
        //                 value: kelemahanString
        //             }).appendTo('.signup-form');
        //         }

        //         Swal.fire({
        //             title: 'Apakah Anda yakin ingin mendaftarkan diri?',
        //             text: 'Pastikan data yang anda masukan sesuai dan benar, jika ada kesalahan hubungi bagian administrasi untuk mengubahnya!',
        //             icon: 'warning',
        //             showCancelButton: true,
        //             confirmButtonText: 'OK',
        //             cancelButtonText: 'Batal',
        //             confirmButtonColor: '#046392'
        //         }).then((result) => {
        //             if (result.isConfirmed) {
        //                 var form = $('.signup-form');
        //                 var formData = form.serialize();

        //                 Swal.fire({
        //                     text: 'Mohon tunggu sedang memproses pendaftaran...',
        //                     icon: 'warning',
        //                     showConfirmButton: false,
        //                     allowOutsideClick: false,
        //                     didOpen: () => {
        //                         Swal.showLoading();
        //                     }
        //                 });

        //                 $.ajax({
        //                     url: form.attr('action'),
        //                     type: 'POST',
        //                     data: formData,
        //                     success: function(response) {
        //                         Swal.close();
        //                         if (response.success) {
        //                             Swal.fire({
        //                                 title: 'Berhasil!',
        //                                 text: 'Berhasil daftar di LPK ACC Japan Centre!',
        //                                 icon: 'success',
        //                                 timer: 3000,
        //                                 showConfirmButton: false,
        //                             }).then(() => {
        //                                 location.reload();
        //                             });
        //                         } else if (response.duplicate) {
        //                             Swal.fire({
        //                                 title: 'Warning!',
        //                                 text: response.message,
        //                                 icon: 'warning',
        //                                 timer: 3000,
        //                                 showConfirmButton: false,
        //                             });
        //                         } else {
        //                             Swal.fire({
        //                                 icon: 'error',
        //                                 title: 'Gagal!',
        //                                 text: 'Terjadi kesalahan saat menyimpan data.'
        //                             });
        //                         }
        //                     },
        //                     error: function(xhr) {
        //                         Swal.close();
        //                         let errorMessage = 'Terjadi kesalahan sistem.';
        //                         if (xhr.responseJSON?.errors) {
        //                             errorMessage = Object.values(xhr.responseJSON
        //                                 .errors).flat().join('\n');
        //                         } else if (xhr.responseJSON?.message) {
        //                             errorMessage = xhr.responseJSON.message;
        //                         }
        //                         Swal.fire({
        //                             title: 'Error!',
        //                             text: errorMessage,
        //                             icon: 'error',
        //                             confirmButtonText: 'Tutup'
        //                         });
        //                     }
        //                 });
        //             }
        //         });
        //     });
        // });

        $(document).ready(function() {
            const linkScript = "https://script.google.com/macros/s/AKfycbw_gwZKaRIVUuKb0K-NYTtNRP6njudztlkWQwbDXLuuf1nFJ7mWZFffRo9pid818q6u/exec";

            $('.signup-form').on('submit', function(e) {
                e.preventDefault();

                const form = this;
                const formData = new FormData(form);

                Swal.fire({
                    title: 'Mengirim data...',
                    didOpen: () => Swal.showLoading(),
                    allowOutsideClick: false
                });

                fetch(linkScript, {
                    method: 'POST',
                    body: formData,
                })
                .then(res => res.json())
                .then(res => {
                    Swal.close();
                    if (res.status === 'success' || res.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: 'Data berhasil dikirim ke Apps Script!'
                        });
                        form.reset();
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: res.message || 'Gagal menyimpan data.'
                        });
                    }
                })
                .catch(err => {
                    Swal.close();
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Tidak bisa terhubung ke Apps Script.'
                    });
                    console.error(err);
                });
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            const keahlianInput = document.querySelector('.tagify-keahlian');
            const sifatInput = document.querySelector('.tagify-sifat');
            const kelebihanInput = document.querySelector('.tagify-kelebihan');
            const kelemahanInput = document.querySelector('.tagify-kelemahan');
            const hobiInput = document.querySelector('.tagify-hobi');
            const motivasiInput = document.querySelector('.tagify-motivasi');
            const planningInput = document.querySelector('.tagify-planning');

            const keahlianTagify = new Tagify(keahlianInput, {
                whitelist: [
                    "PERTANIAN", "PETERNAKAN", "PERIKANAN", "PERKEBUNAN", "PERDAGANGAN",
                    "KONSTRUKSI", "TEKNIK LISTRIK", "TEKNIK MESIN", "TEKNIK SIPIL", "TEKNIK KOMPUTER",
                    "IT SUPPORT", "PEMROGRAMAN", "DESAIN GRAFIS", "MULTIMEDIA", "FOTOGRAFI",
                    "VIDEOGRAFI", "ADMINISTRASI", "KEUANGAN", "AKUNTANSI", "PERPAJAKAN",
                    "PENDIDIKAN", "KESEHATAN", "PERAWATAN", "BIDAN", "FARMASI",
                    "PARIWISATA", "PERHOTELAN", "TATA BOGA", "TATA BUSANA", "TATA RIAS",
                    "JURNALISTIK", "HUMAS", "PELAYANAN PUBLIK", "MARKETING", "SALES",
                    "LOGISTIK", "TRANSPORTASI", "KEAMANAN", "KETRAMPILAN TANGAN",
                    "PENGELASAN", "PENGOLAHAN MAKANAN", "SERVICE ELEKTRONIK", "MONTIR",
                    "BARISTA", "KASIR", "PRAMUNIAGA", "CALL CENTER", "DATA ENTRY"
                ],
                maxTags: 1,
                dropdown: {
                    enabled: 0,
                    maxItems: 20
                },
                transformTag: tagData => {
                    tagData.value = tagData.value.toUpperCase();
                }
            });

            const sifatTagify = new Tagify(sifatInput, {
                whitelist: [
                    "JUJUR", "DISIPLIN", "SABAR", "RAJIN", "PERCAYA DIRI", "TEPAT WAKTU", "INISIATIF",
                    "TELITI",
                    "MANDIRI", "PEKERJA KERAS", "MUDAH BERGAUL", "FLEKSIBEL", "BERPIKIR POSITIF",
                    "BERSAHABAT",
                    "KREATIF", "MOTIVASI TINGGI", "ADAPTIF", "CERDAS EMOSIONAL"
                ],
                maxTags: 1,
                dropdown: {
                    enabled: 0,
                    maxItems: 20
                },
                transformTag: tagData => {
                    tagData.value = tagData.value.toUpperCase();
                }
            });

            const kelebihanTagify = new Tagify(kelebihanInput, {
                whitelist: [
                    "KOMUNIKATIF", "CEPAT BELAJAR", "KERJA TIM", "BERPIKIR KRITIS", "KEPEMIMPINAN",
                    "PROBLEM SOLVING",
                    "MULTITASKING", "MANAJEMEN WAKTU", "KERJA DI BAWAH TEKANAN", "PEMAHAMAN CEPAT",
                    "BERORIENTASI TARGET",
                    "INOVATIF", "RESPONSIF", "PEKA TERHADAP SEKITAR", "ANALITIS"
                ],
                maxTags: 1,
                dropdown: {
                    enabled: 0,
                    maxItems: 20
                },
                transformTag: tagData => {
                    tagData.value = tagData.value.toUpperCase();
                }
            });

            const kelemahanTagify = new Tagify(kelemahanInput, {
                whitelist: [
                    "KURANG PERCAYA DIRI", "MUDAH PANIK", "TIDAK SABARAN", "SULIT FOKUS",
                    "KURANG PENGALAMAN",
                    "TERLALU PERFEKSIONIS", "MUDAH TERPENGARUH", "KURANG KOMUNIKATIF", "MUDAH BOSAN",
                    "SUKA MENUNDA", "KURANG BERANI", "TERLALU KRITIS", "SULIT MENOLAK", "TERLALU JUJUR"
                ],
                maxTags: 1,
                dropdown: {
                    enabled: 0,
                    maxItems: 20
                },
                transformTag: tagData => {
                    tagData.value = tagData.value.toUpperCase();
                }
            });

            const hobiTagify = new Tagify(hobiInput, {
                whitelist: [
                    "MEMBACA", "MENULIS", "OLAHRAGA", "SEPAK BOLA", "BULU TANGKIS",
                    "BERSEPEDA", "MEMASAK", "BERKEBUN", "FOTOGRAFI", "VIDEOGRAFI",
                    "GAMING", "MEMANCING", "MUSIK", "MENYANYI", "MENGGAMBAR",
                    "MELUKIS", "TRAVELING", "NONTON FILM", "DESAIN", "KERJINAN TANGAN"
                ],
                maxTags: 1,
                dropdown: {
                    enabled: 0,
                    maxItems: 15
                },
                transformTag: tagData => {
                    tagData.value = tagData.value.toUpperCase();
                }
            });

            const motivasiTagify = new Tagify(motivasiInput, {
                whitelist: [
                    "INGIN MANDIRI", "MEMBANTU ORANG TUA", "MENGEMBANGKAN DIRI", "BELAJAR HAL BARU",
                    "MENINGKATKAN KETERAMPILAN", "MENDAPAT PEKERJAAN", "MEMPERBAIKI EKONOMI KELUARGA",
                    "MENCAPAI CITA-CITA", "INGIN SUKSES", "MEMILIKI PENGHASILAN", "MENGISI WAKTU LUANG",
                    "MENGABDI PADA MASYARAKAT", "INGIN PUNYA KARIR", "BELAJAR DISIPLIN",
                    "MENGIKUTI PROGRAM PEMERINTAH"
                ],
                maxTags: 1,
                dropdown: {
                    enabled: 0,
                    maxItems: 15
                },
                transformTag: tagData => {
                    tagData.value = tagData.value.toUpperCase();
                }
            });

            const planningTagify = new Tagify(planningInput, {
                whitelist: [
                    "BERWIRAUSAHA",
                    "MELANJUTKAN KULIAH",
                    "MENCARI PEKERJAAN",
                    "MEMBUKA USAHA KELUARGA",
                    "KURSUS / PELATIHAN",
                    "MENABUNG UNTUK INVESTASI",
                    "MENIKAH",
                    "MEMBANTU ORANG TUA",
                    "BANGUN RUMAH",
                    "MELANJUTKAN BISNIS",
                    "FREELANCE",
                    "KERJA KE JEPANG LAGI",
                    "BELUM ADA RENCANA"
                ],
                maxTags: 1,
                dropdown: {
                    enabled: 0,
                    maxItems: 20
                },
                transformTag: tagData => {
                    tagData.value = tagData.value.toUpperCase();
                }
            });
        });
    </script>

    <script src='https://widgets.sociablekit.com/google-business-profile/widget.js' async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{ asset('templates/assets/js/kc.fab.min.js') }}"></script>
    <script src="{{ asset('templates/assets/js/kc.fab.js') }}"></script>
    <script src='https://widgets.sociablekit.com/google-reviews/widget.js' async defer></script>
    <script src="{{ asset('templates/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('templates/assets/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.yearpicker').datepicker({
                format: "yyyy",
                viewMode: "years",
                minViewMode: "years",
                autoclose: true
            });
        });
    </script>

    <script>
        let pengalamanCount = 0;
        const maxPengalaman = 3;

        document.getElementById('addPengalamanBtn').addEventListener('click', function() {
            if (pengalamanCount >= maxPengalaman) return alert('Maksimal 3 pengalaman kerja.');

            const wrapper = document.getElementById('pengalaman-wrapper');
            const div = document.createElement('div');
            div.classList.add('row', 'mb-2', 'pengalaman-row');
            div.innerHTML = `
                <div class="col-md-2">
                    <input type="text" name="tahun_awal[]" class="form-control yearpciker" placeholder="TAHUN AWAL" required>
                </div>
                <div class="col-md-2">
                    <input type="text" name="tahun_akhir[]" class="form-control yearpciker" placeholder="TAHUN AKHIR" required>
                </div>
                <div class="col-md-4">
                    <input type="text" name="nama_perusahaan[]" class="form-control" placeholder="NAMA PERUSAHAAN" required>
                </div>
                <div class="col-md-3">
                    <input type="text" name="bagian[]" class="form-control" placeholder="BAGIAN" required>
                </div>
                <div class="col-md-1 d-flex align-items-center">
                    <button type="button" class="btn btn-danger btn-sm remove-row">&times;</button>
                </div>
            `;
            wrapper.appendChild(div);
            pengalamanCount++;

            div.querySelector('.remove-row').addEventListener('click', function() {
                div.remove();
                pengalamanCount--;
            });
        });
    </script>

    <script>
        let saudaraCount = 0;
        const maxSaudara = 6;

        function renderSaudaraRow(index) {
            return `
            <div class="row align-items-center mb-2 saudara-row" data-index="${index}">
                <div class="col-md-2">
                    <select class="form-control hubungan">
                        <option value="">HUBUNGAN</option>
                        <option value="KAKAK">KAKAK</option>
                        <option value="ADIK">ADIK</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control nama" placeholder="NAMA LENGKAP (KAPITAL)">
                </div>
                <div class="col-md-2">
                    <input type="number" class="form-control usia" placeholder="USIA">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control pekerjaan" placeholder="PEKERJAAN (KAPITAL)">
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-danger btn-sm remove-saudara">&times;</button>
                </div>
            </div>`;
        }

        document.getElementById('add-saudara-btn').addEventListener('click', function() {
            if (saudaraCount >= maxSaudara) {
                alert('Maksimal 6 saudara.');
                return;
            }
            const wrapper = document.getElementById('saudara-wrapper');
            wrapper.insertAdjacentHTML('beforeend', renderSaudaraRow(saudaraCount));
            saudaraCount++;
        });

        document.getElementById('saudara-wrapper').addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-saudara')) {
                e.target.closest('.saudara-row').remove();
                saudaraCount--;
            }
        });

        function generateNamaSaudaraString() {
            const rows = document.querySelectorAll('.saudara-row');
            const data = [];

            rows.forEach(row => {
                const hubungan = row.querySelector('.hubungan').value.trim().toUpperCase();
                const nama = row.querySelector('.nama').value.trim().toUpperCase();
                const usia = row.querySelector('.usia').value.trim();
                const pekerjaan = row.querySelector('.pekerjaan').value.trim().toUpperCase();

                if (hubungan && nama && usia && pekerjaan) {
                    data.push(`${hubungan} - ${nama} - ${usia} - ${pekerjaan}`);
                }
            });

            document.getElementById('nama_saudara_hidden').value = data.join(', ');
        }

        document.querySelector('form').addEventListener('submit', function(e) {
            generateNamaSaudaraString();
        });
    </script>

    <script>
        let perguruanCount = 0;
        const maxPerguruan = 2;

        document.getElementById('addPerguruanBtn').addEventListener('click', function() {
            if (perguruanCount >= maxPerguruan) {
                alert('Maksimal 2 perguruan tinggi.');
                return;
            }

            const wrapper = document.getElementById('perguruan-wrapper');

            const div = document.createElement('div');
            div.classList.add('row', 'mb-2', 'perguruan-row');
            div.innerHTML = `
            <div class="col-md-6">
                <input type="text" name="nama_perguruan[]" class="form-control" placeholder="NAMA PERGURUAN TINGGI" required>
            </div>
            <div class="col-md-5">
                <input type="text" name="program_studi[]" class="form-control" placeholder="PROGRAM STUDI" required>
            </div>
            <div class="col-md-1 d-flex align-items-center">
                <button type="button" class="btn btn-danger btn-sm remove-perguruan">&times;</button>
            </div>
          `;

            wrapper.appendChild(div);
            perguruanCount++;

            div.querySelector('.remove-perguruan').addEventListener('click', function() {
                div.remove();
                perguruanCount--;
            });
        });
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Data Pendaftaran Siswa Baru</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://www.amanahcitracemerlang.id/storage/images/1738849208_WhatsApp_Image_2025-02-06_at_20.04.03-removebg-preview.png" rel="icon">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap4.css">
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
            padding: 0px 0px;
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

        .container {
            overflow-x: auto;
        }

        .card-body {
            padding: 30px;
            border-radius: 10px;
            overflow-x: auto;
        }

        table {
            width: 100%;
            min-width: 1200px;
            border-collapse: collapse;
            white-space: nowrap;
        }

        th, td {
            text-align: left;
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f8f9fa;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .table-responsive {
            max-width: 100%;
            overflow-x: auto;
        }

        .dataTables_paginate {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }

        @media (max-width: 576px) {
            #refreshIndicator {
                margin-bottom: 10px;
            }
        }

        .fixed-header-table {
            width: 100%;
            border-collapse: collapse;
        }

        .fixed-header-table thead th {
            position: sticky;
            top: 0;
            background: white;
            z-index: 10;
        }

        .table-scroll-wrapper {
            overflow-x: auto;
        }

        .fixed-header-table th, 
        .fixed-header-table td {
            white-space: nowrap;
        }
        #mentorChart {
            width: 100% !important;
            height: 400px !important;
        }

        @media (max-width: 576px) {
            #mentorChart {
                height: 320px !important;
            }
        }

        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
    </style>
</head>

<body>
    <section id="hero" class="hero" style="padding: 10px;padding-top: 50px;">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in" style="">
                <div class="col-lg-6 order-1  d-flex flex-column justify-content-center text-center text-lg-start">
                    <div id="carouselExampleCaptions" class="carousel slide" style="width: 100%;">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner" style="border-radius: 20px;">
                            <div class="carousel-item active">
                                <video class="d-block w-100" id="video-background" autoplay muted loop>
                                    <source src="{{ asset('bg-video.mp4') }}" type="video/mp4">
                                </video>
                                <div class="carousel-caption d-none d-md-block"></div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.amanahcitracemerlang.id/storage/images/1738420242_IMG-20250131-WA0006.jpg" class="d-block w-100"
                                    alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.amanahcitracemerlang.id/templates/assets/img/acc.jpg" class="d-block w-100"
                                    alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 order-2 order-lg-2 justify-content-center">
                    <h2 style="text-align: center"></span>DATA PENDAFTARAN SISWA BARU (CV ONLINE)</h2>
                    <h2 style="text-align: center">LPK ACC JAPAN CENTRE</h2>
                    <p style="text-align: center">LPK ACC Japan Centre berlokasi di Dukuh. Gitung, Desa Harjosari Lor, Kecamatan Adiwerna, Kabupaten Tegal, Jawa Tengah 52194.</p>
                    <div class="d-flex justify-content-center justify-content-lg-start text-center" style="padding-bottom: 30px;">
                        <a href="{{ url('/') }}" class="btn-get-started" style="width: 100%;">
                            <i class="bi bi-book"></i>
                            Website LPK ACC Japan Centre
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Chart --}}
    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header text-dark d-flex justify-content-between align-items-center flex-wrap">
                <div>
                    <strong>Daftar Online Berdasarkan Nama Mentor</strong>
                </div>
                <div class="d-flex align-items-center gap-2 flex-wrap">
                    <select id="monthFilter" class="form-select form-select-sm" style="width: 200px;">
                        <option value="">All Month</option>
                    </select>

                    <button class="btn btn-success btn-sm px-4 text-nowrap" onclick="exportJPG()">
                        Export JPG
                    </button>
                    <button class="btn btn-danger btn-sm px-4 text-nowrap" onclick="exportPDFLandscape()">
                        Export PDF
                    </button>
                </div>
            </div>
            <div class="card-body text-center">
                <div>
                    <canvas id="mentorChart" style="min-height: 300px; width: 100%;"></canvas>
                </div>
                {{-- <div id="mentorSummary"></div> --}}
                <div class="mt-3">
                    <h6>Jumlah Pendaftaran per Mentor</h6>
                    <table class="table table-sm table-bordered" id="mentorTable">
                        <thead>
                            <tr>
                                <th>Mentor</th>
                                <th>Jumlah Pendaftar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td colspan="2" class="text-center">Sedang proses menampilkan data...</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    {{-- Data Pendaftaran --}}
    {{-- <div class="container mt-4">
        <div class="card">
            <div class="card-body" style="padding: 20px; border-radius: 10px;">
                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <label>
                            Show 
                            <select id="entriesSelect" class="form-control d-inline-block w-auto">
                                <option value="5">5</option>
                                <option value="10" selected>10</option>
                                <option value="20">20</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                            </select>
                        </label>
                    </div>
                    <div>
                        <input type="text" id="tableSearch" class="form-control" placeholder="Search...">
                    </div>
                </div>
    
                <form action="{{ route('data-pendaftaran.export-pdf') }}" method="GET"
                        class="d-flex align-items-center mb-3">
                        <div class="row">
                            <div class="col-md-12">
                                <label><b>Dari Tanggal</b></label>
                                <input type="date" name="start_date" class="form-control me-2 mb-2" required>
                                <label><b>Sampai Tanggal</b></label>
                                <input type="date" name="end_date" class="form-control me-2 mb-2" required>
                            </div>
                            <div class="col md-12">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-download"></i> Export PDF
                                </button>
                            </div>
                        </div>
                </form>
                <div class="table-responsive">
                    <div id="refreshIndicator" style="display: none; font-size: 15px; color: #888; margin-right: 10px;">
                        🔄 Refreshing data...
                    </div>
                    <br/>
                    <div class="table-responsive">
                        <table id="mentorDataTable" class="table table-striped table-bordered fixed-header-table">
                            @if (!empty($cleanedData))
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Download CV</th>
                                        <th>Tanggal</th>
                                        <th>Email</th>
                                        <th>Nama (Katakana)</th>
                                        <th>Nama (Indonesia)</th>
                                        <th>Alamat</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Usia</th>
                                        <th>Kelamin</th>
                                        <th>No HP Aktif</th>
                                        <th>Agama</th>
                                        <th>Tinggi (cm)</th>
                                        <th>Berat (kg)</th>
                                        <th>Gol Darah</th>
                                        <th>Buta Warna</th>
                                        <th>Mata Kiri</th>
                                        <th>Mata Kanan</th>
                                        <th>Pernah Operasi</th>
                                        <th>Apakah Sedang Minum</th>
                                        <th>Tangan</th>
                                        <th>Merokok</th>
                                        <th>Penyakit Dalam</th>
                                        <th>Keahlian</th>
                                        <th>Sifat/Kepribadian</th>
                                        <th>Kelebihan</th>
                                        <th>Kelemahan</th>
                                        <th>Status</th>
                                        <th>Hobi</th>
                                        <th>Motivasi</th>
                                        <th>Rencana Menabung</th>
                                        <th>Rencana Setelah Jepang</th>
                                        <th>Pernah Tinggal/Bekerja di Jepang</th>
                                        <th>Kualifikasi Lamaran</th>
                                        <th>Nama SD</th>
                                        <th>Tahun Masuk SD</th>
                                        <th>Tahun Keluar SD</th>
                                        <th>Nama SMP</th>
                                        <th>Tahun Masuk SMP</th>
                                        <th>Tahun Keluar SMP</th>
                                        <th>Nama SMA/SMK</th>
                                        <th>Tahun Masuk SMA/SMK</th>
                                        <th>Tahun Keluar SMA/SMK</th>
                                        <th>Jurusan SMA/SMK</th>
                                        <th>Perguruan Tinggi</th>
                                        <th>Pengalaman Kerja</th>
                                        <th>Bahasa Asing</th>
                                        <th>Pernah ke Jepang</th>
                                        <th>Tanggal ke Jepang</th>
                                        <th>Luar Negeri Lainnya</th>
                                        <th>Negara</th>
                                        <th>Kerabat di Jepang</th>
                                        <th>Hubungan Kerabat</th>
                                        <th>Belajar Bahasa</th>
                                        <th>Buku yang Dipakai</th>
                                        <th>Bab yang Dipelajari</th>
                                        <th>Nama Ayah</th>
                                        <th>Hubungan</th>
                                        <th>Usia Ayah</th>
                                        <th>Pekerjaan Ayah</th>
                                        <th>Nama Ibu</th>
                                        <th>Hubungan</th>
                                        <th>Usia Ibu</th>
                                        <th>Pekerjaan Ibu</th>
                                        <th>Nama Saudara</th>
                                        <th>Pendapat Keluarga</th>
                                        <th>No HP Keluarga</th>
                                        <th>Nama Mentor</th>
                                        <th>Ukuran Baju</th>
                                        <th>Nomor Sepatu</th>
                                        <th>Pilihan Kelas</th>
                                        <th>Pilihan Program</th>
                                    </tr>
                                </thead>
                                <tbody id="tableBody">
                                    <tr><td colspan="72" class="text-center">Sedang proses menampilkan data...</td></tr>
                                </tbody>
                            @else
                                <tr>
                                    <td colspan="100%" class="text-center">Tidak ada data</td>
                                </tr>
                            @endif
                        </table>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <span id="tableInfo"></span>
                    
                    <div class="d-flex align-items-center ms-auto">
                        <ul class="pagination pagination-sm mb-0" id="paginationControls"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- Data Pendaftaran --}}
    <div class="container mt-4">
        <div class="card">
            <div class="card-body" style="padding: 20px; border-radius: 10px;">
                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <label>
                            Show 
                            <select id="entriesSelect" class="form-control d-inline-block w-auto">
                                <option value="5">5</option>
                                <option value="10" selected>10</option>
                                <option value="20">20</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                            </select>
                        </label>
                    </div>
                    <div>
                        <input type="text" id="tableSearch" class="form-control" placeholder="Search...">
                    </div>
                </div>

                <form action="{{ route('data-pendaftaran.export-pdf') }}" method="GET"
                        class="d-flex align-items-center mb-3">
                        <div class="row">
                            <div class="col-md-12">
                                <label><b>Dari Tanggal</b></label>
                                <input type="date" name="start_date" class="form-control me-2 mb-2" required>
                                <label><b>Sampai Tanggal</b></label>
                                <input type="date" name="end_date" class="form-control me-2 mb-2" required>
                            </div>
                            <div class="col md-12">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-download"></i> Export PDF
                                </button>
                            </div>
                        </div>
                </form>

                <div class="table-responsive">
                    <div id="refreshIndicator" style="display: none; font-size: 15px; color: #888; margin-right: 10px;">
                        🔄 Refreshing data...
                    </div>
                    <br/>
                    <table id="mentorDataTable" class="table table-striped table-bordered fixed-header-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Download CV</th>
                                <th>Tanggal</th>
                                <th>Email</th>
                                <th>Nama (Katakana)</th>
                                <th>Nama (Indonesia)</th>
                                <th>Alamat</th>
                                <th>Tanggal Lahir</th>
                                <th>Usia</th>
                                <th>Kelamin</th>
                                <th>No HP Aktif</th>
                                <th>Agama</th>
                                <th>Tinggi (cm)</th>
                                <th>Berat (kg)</th>
                                <th>Gol Darah</th>
                                <th>Buta Warna</th>
                                <th>Mata Kiri</th>
                                <th>Mata Kanan</th>
                                <th>Pernah Operasi</th>
                                <th>Apakah Sedang Minum</th>
                                <th>Tangan</th>
                                <th>Merokok</th>
                                <th>Penyakit Dalam</th>
                                <th>Keahlian</th>
                                <th>Sifat/Kepribadian</th>
                                <th>Kelebihan</th>
                                <th>Kelemahan</th>
                                <th>Status</th>
                                <th>Hobi</th>
                                <th>Motivasi</th>
                                <th>Rencana Menabung</th>
                                <th>Rencana Setelah Jepang</th>
                                <th>Pernah Tinggal/Bekerja di Jepang</th>
                                <th>Kualifikasi Lamaran</th>
                                <th>Nama SD</th>
                                <th>Tahun Masuk SD</th>
                                <th>Tahun Keluar SD</th>
                                <th>Nama SMP</th>
                                <th>Tahun Masuk SMP</th>
                                <th>Tahun Keluar SMP</th>
                                <th>Nama SMA/SMK</th>
                                <th>Tahun Masuk SMA/SMK</th>
                                <th>Tahun Keluar SMA/SMK</th>
                                <th>Jurusan SMA/SMK</th>
                                <th>Perguruan Tinggi</th>
                                <th>Pengalaman Kerja</th>
                                <th>Bahasa Asing</th>
                                <th>Pernah ke Jepang</th>
                                <th>Tanggal ke Jepang</th>
                                <th>Luar Negeri Lainnya</th>
                                <th>Negara</th>
                                <th>Kerabat di Jepang</th>
                                <th>Hubungan Kerabat</th>
                                <th>Belajar Bahasa</th>
                                <th>Buku yang Dipakai</th>
                                <th>Bab yang Dipelajari</th>
                                <th>Nama Ayah</th>
                                <th>Hubungan Ayah</th>
                                <th>Usia Ayah</th>
                                <th>Pekerjaan Ayah</th>
                                <th>Nama Ibu</th>
                                <th>Hubungan Ibu</th>
                                <th>Usia Ibu</th>
                                <th>Pekerjaan Ibu</th>
                                <th>Nama Saudara</th>
                                <th>Pendapat Keluarga</th>
                                <th>No HP Keluarga</th>
                                <th>Nama Mentor</th>
                                <th>Ukuran Baju</th>
                                <th>Nomor Sepatu</th>
                                <th>Pilihan Kelas</th>
                                <th>Pilihan Program</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td colspan="72" class="text-center">Sedang proses menampilkan data...</td></tr>
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-between align-items-center mt-2">
                    <span id="tableInfo"></span>
                    <div class="d-flex align-items-center ms-auto">
                        <ul class="pagination pagination-sm mb-0" id="paginationControls"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <br/>    

    {{-- <div id="preloader"></div> --}}

    @include('landing.footer')

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    {{-- data tabel --}}
    <script>
        const googleScriptUrl = 'https://script.google.com/macros/s/AKfycbw_gwZKaRIVUuKb0K-NYTtNRP6njudztlkWQwbDXLuuf1nFJ7mWZFffRo9pid818q6u/exec';

        const allowedMentors = [
            'IBNU', 'HERA', 'FIQIH', 'HESTI', 'FAIZAL', 'HILMI', 'TRIO', 'REZA',
            'SELLY', 'ADITYA', 'FAHRUL', 'FADIL', 'FUJIAYU', 'FIRMAN', 'GAZI',
            'IPUT', 'NADIA', 'PHILLIP', 'PIPIT', 'AVILA', 'UMAY', 'SONY',
            'JAMAL', 'BANGKIT', 'DIAN', 'ALVAN', 'SELA', 'USWATUN', 'IZAH',
            'AKHMAD ARIFUDIN', 'NUR', 'FATONI', 'ERWIN', '-'
        ];

        let allData = [];
        let perMentorAll = {};
        let perMentorPerMonth = {};
        let months = {};

        function fetchData() {
            Swal.fire({
                icon: 'warning',
                title: 'Sedang load data, mohon tunggu sebentar..',
                toast: true,
                position: 'top',
                showConfirmButton: false,
                allowOutsideClick: false,
                didOpen: () => { Swal.showLoading(); }
            });

            fetch(googleScriptUrl, { method:'GET', mode:'cors', cache:'no-cache' })
                .then(res => res.text())
                .then(text => {
                    let data;
                    try { data = JSON.parse(text); } 
                    catch(e) { throw new Error('Response bukan JSON valid'); }
                    return data;
                })
                .then(data => {
                    allData = data.map(row => {
                        row.Timestamp = row.Timestamp ? row.Timestamp.substring(0,10) : '';
                        if (row['NAMA MENTOR']) {
                            const mentor = row['NAMA MENTOR'].toUpperCase().trim().replace(/[^A-Z ]/g,'').replace(/\s+/g,' ');
                            const monthKey = row.Timestamp ? row.Timestamp.substring(0,7) : '';
                            if (mentor && allowedMentors.includes(mentor)) {
                                perMentorAll[mentor] = (perMentorAll[mentor] || 0) + 1;
                                if (monthKey) {
                                    if (!perMentorPerMonth[monthKey]) perMentorPerMonth[monthKey] = {};
                                    perMentorPerMonth[monthKey][mentor] = (perMentorPerMonth[monthKey][mentor] || 0) + 1;
                                    months[monthKey] = new Date(monthKey+'-01')
                                        .toLocaleString('default', { month: 'long', year: 'numeric' });
                                }
                            }
                        }
                        return row;
                    });

                    Swal.fire({ icon:'success', title:'Data Successfully!', toast:true, position:'top', timer:2500, showConfirmButton:false });
                    renderChart();
                    renderTable();
                    populateMonthFilter();
                })
                .catch(err => {
                    console.error(err);
                    Swal.fire('Error', 'Gagal mengambil data dari Google Spreadsheet: ' + err.message, 'error');
                })
                .finally(() => Swal.close());
        }

        let mentorChart;
        function renderChart(selectedMonth = '') {
            let labels = Object.keys(perMentorAll);
            let data = labels.map(mentor => {
                if (selectedMonth && perMentorPerMonth[selectedMonth]) {
                    return perMentorPerMonth[selectedMonth][mentor] || 0;
                }
                return perMentorAll[mentor];
            });

            const combined = labels.map((label, i) => ({ mentor: label, count: data[i] }));
            combined.sort((a,b) => b.count - a.count);

            labels = combined.map(c => c.mentor);
            data = combined.map(c => c.count);

            const ctx = document.getElementById('mentorChart').getContext('2d');
            if (mentorChart) mentorChart.destroy();
            mentorChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Jumlah Pendaftaran',
                        data: data,
                        backgroundColor: '#046392'
                    }]
                },
                options: {
                    responsive: true,
                    plugins: { legend: { display: false } },
                    scales: { y: { beginAtZero: true } }
                }
            });

            const tbody = document.querySelector('#mentorTable tbody');
            tbody.innerHTML = '';
            labels.forEach((mentor, i) => {
                const tr = document.createElement('tr');
                tr.innerHTML = `<td>${mentor}</td><td>${data[i]}</td>`;
                tbody.appendChild(tr);
            });
        }

        function populateMonthFilter() {
            const select = document.getElementById('monthFilter');
            select.innerHTML = `<option value="">All Month</option>`;
            Object.keys(months).sort().forEach(key => {
                select.innerHTML += `<option value="${key}">${months[key]}</option>`;
            });

            select.addEventListener('change', () => {
                const month = select.value;
                renderChart(month);
            });
        }

        let dataTable;

        function renderTable() {
            if ($.fn.DataTable.isDataTable('#mentorDataTable')) {
                $('#mentorDataTable').DataTable().destroy();
                $('#mentorDataTable tbody').empty();
            }

            allData.forEach((row, idx) => {
                let tr = `<tr>`;
                tr += `<td>${idx + 1}</td>`;
                tr += `<td>
                    <button class="btn btn-sm btn-success btn-download-cv" data-id="${row['ID'] || idx}" data-nama="${row['NAMA (INDONESIA)'] || ''}">
                        <i class="fa fa-download"></i> Download CV
                    </button>
                </td>`;

                Object.keys(row).forEach(key => {
                    if(key !== 'ID') tr += `<td>${row[key] || ''}</td>`;
                });

                tr += `</tr>`;
                $('#mentorDataTable tbody').append(tr);
            });

            dataTable = $('#mentorDataTable').DataTable({
                pageLength: parseInt($('#entriesSelect').val()) || 10,
                lengthMenu: [5,10,25,50,100],
                ordering: true,
                order: [[2,'desc']],
                responsive: true,
                autoWidth: false
            });

            $('#entriesSelect').on('change', function() {
                const val = parseInt($(this).val());
                dataTable.page.len(val).draw();
            });
        }

        fetchData();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- download cv --}}
    <script>
        $(document).on('click', '.btn-download-cv', function(e) {
            e.preventDefault();

            const id = $(this).data('id');
            const nama = $(this).data('nama');

            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to download this CV?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'OK',
                confirmButtonColor: '#046392'
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch(`/export-cv-word/${id}`, {
                        method: 'GET',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Download failed');
                        }
                        return response.blob();
                    })
                    .then(blob => {
                        const url = window.URL.createObjectURL(blob);
                        const a = document.createElement('a');
                        a.href = url;
                        a.download = `CV_${nama.replace(/\s+/g, '_')}.docx`;
                        document.body.appendChild(a);
                        a.click();
                        a.remove();
                        window.URL.revokeObjectURL(url);

                        Swal.fire({
                            title: 'Success!',
                            text: 'File has been downloaded.',
                            icon: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    })
                    .catch(error => {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Failed to download file.',
                            icon: 'error'
                        });
                    });
                }
            });
        });
    </script>

    {{-- Chart --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.8.2/jspdf.plugin.autotable.min.js"></script>
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
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap4.js"></script>
</body>

</html>

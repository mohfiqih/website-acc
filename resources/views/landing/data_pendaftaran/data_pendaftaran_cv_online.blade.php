<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Data Pendaftaran</title>
    <link rel="shortcut icon" type="image/png"
        href="https://www.amanahcitracemerlang.id/storage/images/1738849208_WhatsApp_Image_2025-02-06_at_20.04.03-removebg-preview.png" />
    <link rel="stylesheet" href="{{ asset('template_baru/assets/css/styles.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('templates/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" />
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
            font-size: 13px;
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
            font-size: 13px;
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

        th,
        td {
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

        .mentor-table-compact {
            font-size: 13px;
            table-layout: fixed;
            /* penting */
            width: 100%;
        }

        .mentor-col {
            width: 70%;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .jumlah-col {
            width: 30%;
            font-weight: bold;
        }

        :root {
            --dashboard-ink: #172b4d;
            --dashboard-muted: #718096;
            --dashboard-primary: #1769aa;
            --dashboard-primary-dark: #0d4f82;
            --dashboard-border: #e6edf5;
            --dashboard-page: #f4f7fb;
        }

        body {
            background: var(--dashboard-page);
            color: var(--dashboard-ink);
            font-family: var(--bs-body-font-family);
        }

        body::before,
        body::after {
            display: none;
        }

        .body-wrapper {
            background: var(--dashboard-page);
        }

        .app-header {
            background: rgba(255, 255, 255, .92) !important;
            border-bottom: 1px solid var(--dashboard-border);
            box-shadow: 0 4px 18px rgba(35, 61, 90, .05);
            backdrop-filter: blur(12px);
        }

        .app-header .navbar {
            min-height: 70px;
            padding: 0 28px;
        }

        .app-header .nav-link {
            color: var(--dashboard-ink) !important;
        }

        .app-header .nav-icon-hover:hover {
            background: #edf6fc;
            color: var(--dashboard-primary) !important;
        }

        .left-sidebar {
            background: #102b46;
            box-shadow: 12px 0 32px rgba(16, 43, 70, .1);
        }

        .left-sidebar .brand-logo {
            min-height: 70px;
            padding: 0 22px;
            border-bottom: 1px solid rgba(255, 255, 255, .1);
        }

        .left-sidebar .brand-logo h5 {
            margin: 0;
            color: #fff;
            font-size: 15px;
            font-weight: 800;
            letter-spacing: .01em;
        }

        .left-sidebar .sidebar-nav {
            padding: 14px 12px;
        }

        .left-sidebar .nav-small-cap {
            color: #8da6bd;
            letter-spacing: .12em;
        }

        .left-sidebar .sidebar-link {
            min-height: 44px;
            margin-bottom: 4px;
            border-radius: 10px;
            color: #c7d5e2;
            transition: background .2s ease, color .2s ease, transform .2s ease;
        }

        .left-sidebar .sidebar-link:hover,
        .left-sidebar .sidebar-link[aria-expanded="true"] {
            background: rgba(255, 255, 255, .09);
            color: #fff;
            transform: translateX(2px);
        }

        .left-sidebar .sidebar-link iconify-icon {
            color: #8db9d9;
        }

        .page-wrapper .container-fluid {
            padding: 28px;
        }

        .dashboard-card {
            border: 1px solid var(--dashboard-border) !important;
            border-radius: 16px !important;
            background: #fff;
            box-shadow: 0 10px 30px rgba(43, 70, 99, .06) !important;
            overflow: hidden;
        }

        .dashboard-card .card-body {
            padding: 24px;
        }

        .dashboard-card .card-title {
            color: var(--dashboard-ink);
            font-size: 1.05rem;
            font-weight: 400;
        }

        .dashboard-card .card-title::before {
            content: "";
            display: inline-block;
            width: 4px;
            height: 20px;
            margin-right: 10px;
            vertical-align: -4px;
            border-radius: 99px;
            background: var(--dashboard-primary);
        }

        .dashboard-card .form-select,
        .dashboard-card input[type="date"] {
            min-height: 40px;
            border: 1px solid #dce6f0;
            border-radius: 9px;
            color: #526579;
            box-shadow: none;
        }

        .dashboard-card .form-select:focus,
        .dashboard-card input[type="date"]:focus {
            border-color: var(--dashboard-primary);
            box-shadow: 0 0 0 3px rgba(23, 105, 170, .1);
        }

        .dashboard-card .btn {
            min-height: 40px;
            border: 0;
            border-radius: 9px;
            font-size: .76rem;
            font-weight: 400;
            transition: transform .2s ease, box-shadow .2s ease;
        }

        .dashboard-card .btn-primary {
            background: var(--dashboard-primary);
        }

        .dashboard-card .btn-primary:hover {
            background: var(--dashboard-primary-dark);
            box-shadow: 0 7px 16px rgba(23, 105, 170, .2);
            transform: translateY(-1px);
        }

        .mentor-overview-card canvas {
            margin: 18px 0 12px;
            padding: 12px;
            border: 1px solid #edf2f7;
            border-radius: 12px;
            background: #fbfdff;
        }

        .mentor-overview-card p {
            color: var(--dashboard-muted);
            font-size: .78rem;
            line-height: 1.6;
        }

        #mentorProgressBar>div {
            padding: 11px 0;
            border-bottom: 1px solid #edf1f6;
        }

        #mentorProgressBar .progress {
            overflow: hidden;
            height: 8px !important;
            border-radius: 99px;
            background: #edf3f8;
        }

        #mentorProgressBar .progress-bar {
            border-radius: inherit;
            background: linear-gradient(90deg, #1769aa, #48a3d5) !important;
        }

        .data-table-card .card-body {
            padding: 0;
        }

        .data-export-panel {
            display: flex;
            align-items: end;
            flex-wrap: wrap;
            gap: 12px;
            padding: 22px 24px;
            border-bottom: 1px solid var(--dashboard-border);
        }

        .data-export-panel .form-group {
            margin: 0;
        }

        .data-export-panel label {
            display: block;
            margin-bottom: 6px;
            color: var(--dashboard-muted);
            font-size: .74rem;
            font-weight: 400;
        }

        .data-table-scroll {
            padding: 22px 24px 0;
            -webkit-overflow-scrolling: touch;
        }

        .data-table-scroll table {
            min-width: 1600px;
            border-collapse: separate;
            border-spacing: 0;
            font-size: 13px;
        }

        .data-table-scroll thead th {
            padding: 10px;
            background: #f8f9fa;
            border: 1px solid #ddd;
            color: #30465e;
            font-size: 13px;
            font-weight: 400;
            letter-spacing: normal;
            text-transform: none;
        }

        .data-table-scroll tbody td {
            padding: 10px;
            border: 1px solid #ddd;
            color: #30465e;
            font-size: 13px;
            font-weight: 400;
            vertical-align: middle;
        }

        .data-table-scroll tbody tr:hover {
            background: #f8fbfe;
        }

        .data-table-scroll .btn-download-cv {
            white-space: nowrap;
        }

        .data-table-card .dataTables_wrapper {
            color: var(--dashboard-muted);
            font-size: 13px;
            font-weight: 400;
        }

        .data-table-card .dataTables_info,
        .data-table-card .dataTables_paginate {
            margin: 18px 24px;
        }

        .data-table-card .paginate_button {
            margin: 0 2px;
            border: 1px solid #dce6f0 !important;
            border-radius: 7px !important;
            background: #fff !important;
            color: var(--dashboard-primary) !important;
        }

        .data-table-card .paginate_button.current,
        .data-table-card .paginate_button.current:hover {
            border-color: var(--dashboard-primary) !important;
            background: var(--dashboard-primary) !important;
            color: #fff !important;
        }

        .data-table-scroll .btn-download-cv {
            font-size: 12px;
            font-weight: 400;
        }

        .dashboard-footer {
            color: var(--dashboard-muted);
            font-size: .75rem;
        }

        @media (max-width: 767px) {
            .app-header .navbar {
                min-height: 62px;
                padding: 0 12px;
            }

            .page-wrapper .container-fluid {
                padding: 14px 12px 24px;
            }

            .dashboard-card .card-body {
                padding: 17px;
            }

            .dashboard-card .d-flex.align-items-center.gap-2 {
                align-items: stretch !important;
                flex-direction: column;
            }

            .dashboard-card .d-flex.align-items-center.gap-2 .form-select,
            .dashboard-card .d-flex.align-items-center.gap-2 .btn {
                width: 100% !important;
            }

            .data-export-panel {
                align-items: stretch;
                flex-direction: column;
                padding: 17px;
            }

            .data-export-panel .form-group,
            .data-export-panel input,
            .data-export-panel button {
                width: 100%;
            }

            .data-table-scroll {
                padding: 16px 12px 0;
            }

            .data-table-card .dataTables_info,
            .data-table-card .dataTables_paginate {
                margin-right: 12px;
                margin-left: 12px;
            }

            #mentorChart {
                height: 300px !important;
            }
        }

        /* Final dashboard theme overrides. */
        .left-sidebar {
            background: #0b2239 !important;
        }

        .left-sidebar .sidebar-link,
        .left-sidebar .sidebar-link .hide-menu,
        .left-sidebar .sidebar-link span,
        .left-sidebar .sidebar-link i,
        .left-sidebar .sidebar-link iconify-icon {
            color: #f7fbff !important;
        }

        .left-sidebar .nav-small-cap,
        .left-sidebar .nav-small-cap .hide-menu,
        .left-sidebar .nav-small-cap i {
            color: #9db4c8 !important;
        }

        .left-sidebar .sidebar-link {
            background: transparent !important;
        }

        .left-sidebar .sidebar-link:hover,
        .left-sidebar .sidebar-item.active>.sidebar-link {
            background: linear-gradient(135deg, #1769aa, #0e4d7c) !important;
            color: #fff !important;
            box-shadow: 0 8px 18px rgba(3, 20, 36, .24);
        }

        .left-sidebar .sidebar-link:hover *,
        .left-sidebar .sidebar-item.active>.sidebar-link * {
            color: #fff !important;
        }

        .left-sidebar .close-btn,
        .left-sidebar .close-btn i {
            color: #fff !important;
        }

        .app-header {
            background: #fff !important;
        }

        .app-header .nav-link,
        .app-header .nav-link i {
            color: #172b4d !important;
        }

        .dashboard-card {
            background: #fff !important;
            border-color: #dfe8f1 !important;
        }

        .dashboard-card .card-title,
        .dashboard-card h5,
        .dashboard-card h6 {
            color: #172b4d !important;
        }

        .data-table-scroll thead th {
            background: #fff !important;
            color: #30465e !important;
            border: 1px solid #ddd !important;
            font-weight: 400 !important;
            letter-spacing: normal !important;
            text-transform: none !important;
        }

        .data-table-scroll tbody td {
            color: #30465e !important;
        }

        .dashboard-footer,
        .dashboard-footer p {
            color: #718096 !important;
        }

        body,
        .left-sidebar .sidebar-link,
        .data-table-scroll tbody td,
        .data-table-card .dataTables_wrapper {
            font-weight: 400;
        }

        .left-sidebar .sidebar-link .hide-menu,
        .left-sidebar .nav-small-cap,
        .data-table-scroll thead th,
        .data-export-panel label {
            font-weight: 600 !important;
        }

        .dashboard-card .card-title {
            font-weight: 600;
        }

        .dashboard-card .btn,
        .data-table-scroll .btn-download-cv {
            font-weight: 500;
        }
    </style>
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a class="text-nowrap logo-img">
                        <h5>LPK ACC Japan Centre</h5>
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                @include('landing.sidebar.nav')
            </div>
        </aside>
        <div class="body-wrapper">
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="/">
                                <i class="ti ti-home"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="/">
                                <i class="ti ti-book"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="/" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="https://www.amanahcitracemerlang.id/storage/images/1738849208_WhatsApp_Image_2025-02-06_at_20.04.03-removebg-preview.png"
                                        alt="" width="35" height="35" class="rounded-circle">
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                <div class="col-lg-12">
                    <div class="card dashboard-card data-table-card">
                        <div class="card-body">
                            {{-- <form action="{{ route('data-pendaftaran.export-pdf') }}" method="GET"
                                class="data-export-panel">
                                <div class="form-group">
                                    <label for="startDate">Dari Tanggal</label>
                                    <input id="startDate" type="date" name="start_date" class="form-control"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="endDate">Sampai Tanggal</label>
                                    <input id="endDate" type="date" name="end_date" class="form-control"
                                        required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm px-4 text-nowrap">
                                    <i class="fa fa-download mr-1"></i> Export PDF
                                </button>
                            </form> --}}

                            <div class="table-responsive data-table-scroll">
                                <div id="refreshIndicator"
                                    style="display: none; font-size: 15px; color: #888; margin-right: 10px;">
                                    🔄 Refreshing data...
                                </div>
                                <br />
                                <table id="mentorDataTable"
                                    class="table table-striped table-bordered fixed-header-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Download CV</th>
                                            <th>Timestamp</th>
                                            <th>EMAIL</th>
                                            <th>NAMA (KATAKANA)</th>
                                            <th>NAMA (INDONESIA)</th>
                                            <th>ALAMAT</th>
                                            <th>TANGGAL LAHIR</th>
                                            <th>USIA</th>
                                            <th>KELAMIN</th>
                                            <th>NO HP AKTIF</th>
                                            <th>AGAMA</th>
                                            <th>TINGGI</th>
                                            <th>BERAT</th>
                                            <th>GOL DARAH</th>
                                            <th>BUTA WARNA</th>
                                            <th>MATA KIRI</th>
                                            <th>MATA KANAN</th>
                                            <th>PERNAH OPERASI</th>
                                            <th>APAKAH SEDANG MINUM</th>
                                            <th>TANGAN</th>
                                            <th>MEROKOK</th>
                                            <th>PENYAKIT DALAM</th>
                                            <th>KEAHLIAN</th>
                                            <th>SIFAT/KEPRIBADIAN</th>
                                            <th>KELEBIHAN</th>
                                            <th>KELEMAHAN</th>
                                            <th>STATUS</th>
                                            <th>HOBI</th>
                                            <th>MOTIVASI</th>
                                            <th>SELAMA 3 TAHUN DI JEPANG MAU NABUNG BERAPA</th>
                                            <th>SETELAH PULANG JEPANG, APA YANG AKAN DILAKUKAN</th>
                                            <th>APAKAH ANDA PERNAH TINGGAL/BEKERJA DI JEPANG</th>
                                            <th>JIKA YA, KUALIFIKASI APA YANG ANDA LAMAR</th>
                                            <th>SEKOLAH DASAR (SD)</th>
                                            <th>TAHUN MASUK SEKOLAH (SD)</th>
                                            <th>TAHUN KELUAR SEKOLAH (SD)</th>
                                            <th>SEKOLAH MENENGAH PERTAMA (SMP)</th>
                                            <th>TAHUN MASUK SEKOLAH (SMP)</th>
                                            <th>TAHUN KELUAR SEKOLAH (SMP)</th>
                                            <th>SEKOLAH MENENGAH ATAS/KEJURUAN (SMA/SMK)</th>
                                            <th>TAHUN MASUK SEKOLAH (SMA/SMK)</th>
                                            <th>TAHUN KELUAR SEKOLAH (SMA/SMK)</th>
                                            <th>JURUSAN (SMA/SMK)</th>
                                            <th>PERGURUAN TINGGI</th>
                                            <th>PENGALAMAN KERJA</th>
                                            <th>BAHASA ASING YANG DIKUASAI</th>
                                            <th>PERNAH KE JEPANG</th>
                                            <th>JIKA YA, SEBUTKAN TGL/BLN/THN</th>
                                            <th>PERNAH LUAR NEGERI LAINNYA</th>
                                            <th>JIKA YA, NEGARA APA</th>
                                            <th>APAKAH ADA KERABAT DI JEPANG</th>
                                            <th>APA HUBUNGAN KERABAT YANG DI JEPANG</th>
                                            <th>BELAJAR BAHASA</th>
                                            <th>BUKU YANG DI PAKAI</th>
                                            <th>BAB YANG DI PELAJARI</th>
                                            <th>NAMA AYAH</th>
                                            <th>HUBUNGAN AYAH</th>
                                            <th>USIA AYAH</th>
                                            <th>PEKERJAAN AYAH</th>
                                            <th>NAMA IBU</th>
                                            <th>HUBUNGAN IBU</th>
                                            <th>USIA IBU</th>
                                            <th>PEKERJAAN IBU</th>
                                            <th>NAMA SAUDARA</th>
                                            <th>PENDAPAT KELUARGA</th>
                                            <th>NO HP KELUARGA</th>
                                            <th>NAMA MENTOR</th>
                                            <th>UKURAN BAJU</th>
                                            <th>NOMOR SEPATU</th>
                                            <th>PILIH KELAS</th>
                                            <th>PILIH PROGRAM</th>
                                            <th>ID</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="74" class="text-center">Sedang proses menampilkan data...
                                            </td>
                                        </tr>
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card dashboard-card mentor-overview-card">
                            <div class="card-body">
                                <h5 class="card-title d-flex align-items-center gap-2 mb-4">
                                    Grafik Pendaftaran Online Berdasarkan Nama Mentor
                                </h5>
                                {{-- <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <select id="monthFilter" class="form-select form-select-sm" style="width: 200px;">
                                        <option value="">All Month</option>
                                    </select>

                                    <button class="btn btn-primary btn-sm px-4 text-nowrap" onclick="exportJPG()">
                                        Export JPG
                                    </button>
                                    <button class="btn btn-primary btn-sm px-4 text-nowrap"
                                        onclick="exportPDFLandscape()">
                                        Export PDF
                                    </button>
                                </div> --}}
                                <canvas id="mentorChart" style="min-height: 300px; width: 100%;"></canvas>
                                <p>Jumlah Keseluruhan Pendaftaran Online Setiap Mentor <b>(Jumlah Data ini hanya Data
                                        kotor yang terecord secara online melalui formulir pendaftaran online setiap
                                        mentor)</b></p>
                                <div class="vstack gap-2 mt-2 pt-2" id="mentorProgressBar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12" style="display:none;">
                    <div class="card">
                        <div class="card-body">
                            <div class="mt-3">
                                <h6>Data Keseluruhan Pendaftaran Online</h6>
                                <table class="table table-sm table-bordered" id="mentorTable">
                                    <thead>
                                        <tr>
                                            <th>Mentor</th>
                                            <th>Jumlah Pendaftar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="2" class="text-center">Sedang proses menampilkan data...
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-6 px-6 text-center dashboard-footer">
                    <p class="mb-0 fs-1">Design and Developed by IT LPK ACC Japan Centre <br />
                        @include('version.index')
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('template_baru/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('template_baru/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template_baru/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('template_baru/assets/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('template_baru/assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('template_baru/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('template_baru/assets/js/dashboard.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    <script src="{{ asset('js/allowed-mentors.js') }}"></script>

    {{-- data tabel --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // =========================================================
        // GLOBAL VARIABLE
        // =========================================================

        let allData = [];

        let perMentorAll = {};

        let perMentorPerMonth = {};

        let months = {};

        let mentorChart = null;

        let dataTable = null;


        // =========================================================
        // ESCAPE HTML
        // =========================================================

        function escapeHtml(value) {

            if (
                value === null ||
                value === undefined
            ) {
                return '';
            }

            return String(value)
                .replace(/&/g, '&amp;')
                .replace(/</g, '&lt;')
                .replace(/>/g, '&gt;')
                .replace(/"/g, '&quot;')
                .replace(/'/g, '&#039;');
        }


        // =========================================================
        // FORMAT DATE
        // =========================================================

        function formatDate(dateString) {

            if (
                dateString === null ||
                dateString === undefined ||
                dateString === ''
            ) {
                return '';
            }


            const d = new Date(dateString);


            if (isNaN(d.getTime())) {

                return escapeHtml(
                    dateString
                );
            }


            return d.toLocaleDateString(
                'id-ID', {
                    day: '2-digit',
                    month: '2-digit',
                    year: 'numeric'
                }
            );
        }


        // =========================================================
        // FETCH DATA
        // =========================================================

        async function fetchData() {

            Swal.fire({

                icon: 'info',

                title: 'Sedang memuat data...',

                toast: true,

                position: 'top',

                showConfirmButton: false,

                allowOutsideClick: false,

                didOpen: () => {

                    Swal.showLoading();
                }
            });


            try {

                console.log(
                    '======================================'
                );

                console.log(
                    'FETCH DATA DIMULAI'
                );


                // -------------------------------------------------
                // REQUEST
                // -------------------------------------------------

                const response = await fetch(

                    "{{ route('data-pendaftaran.json') }}",

                    {
                        method: 'GET',

                        headers: {

                            'Accept': 'application/json',

                            'X-Requested-With': 'XMLHttpRequest'
                        },

                        cache: 'no-cache'
                    }
                );


                console.log(
                    'HTTP STATUS:',
                    response.status
                );


                if (!response.ok) {

                    throw new Error(
                        `Gagal mengambil data dari server. HTTP ${response.status}`
                    );
                }


                // -------------------------------------------------
                // PARSE JSON
                // -------------------------------------------------

                const data =
                    await response.json();


                console.log(
                    'DATA DARI SERVER:',
                    data
                );


                console.log(
                    'JUMLAH DATA SERVER:',
                    Array.isArray(data) ?
                    data.length :
                    'BUKAN ARRAY'
                );


                if (!Array.isArray(data)) {

                    throw new Error(
                        'Response server bukan array JSON.'
                    );
                }


                // -------------------------------------------------
                // RESET
                // -------------------------------------------------

                allData = [];

                perMentorAll = {};

                perMentorPerMonth = {};

                months = {};


                // -------------------------------------------------
                // PROSES DATA
                // -------------------------------------------------

                allData = data.map(
                    function(row) {


                        // =========================================
                        // TIMESTAMP
                        // =========================================

                        const timestamp =

                            row['Timestamp'] ??

                            row['timestamp'] ??

                            row['created_at'] ??

                            '';


                        row['Timestamp'] =

                            timestamp ?
                            String(timestamp) :
                            '';


                        // =========================================
                        // MENTOR
                        // =========================================

                        if (
                            row['NAMA MENTOR']
                        ) {

                            const mentor =

                                String(
                                    row['NAMA MENTOR']
                                )
                                .toUpperCase()
                                .trim()
                                .replace(
                                    /[^A-Z ]/g,
                                    ''
                                )
                                .replace(
                                    /\s+/g,
                                    ' '
                                );


                            const monthKey =

                                row['Timestamp']

                                ?
                                row[
                                    'Timestamp'
                                ].substring(
                                    0,
                                    7
                                )

                                :
                                '';


                            if (

                                mentor &&

                                typeof allowedMentors !==
                                'undefined' &&

                                allowedMentors.includes(
                                    mentor
                                )
                            ) {


                                // ---------------------------------
                                // TOTAL MENTOR
                                // ---------------------------------

                                perMentorAll[
                                        mentor
                                    ] =

                                    (
                                        perMentorAll[
                                            mentor
                                        ] || 0
                                    ) + 1;


                                // ---------------------------------
                                // PER BULAN
                                // ---------------------------------

                                if (monthKey) {


                                    if (
                                        !perMentorPerMonth[
                                            monthKey
                                        ]
                                    ) {

                                        perMentorPerMonth[
                                            monthKey
                                        ] = {};
                                    }


                                    perMentorPerMonth[
                                            monthKey
                                        ][mentor] =

                                        (
                                            perMentorPerMonth[
                                                monthKey
                                            ][mentor] || 0
                                        ) + 1;


                                    // -----------------------------
                                    // NAMA BULAN
                                    // -----------------------------

                                    const date =
                                        new Date(
                                            monthKey +
                                            '-01'
                                        );


                                    months[
                                            monthKey
                                        ] =

                                        date.toLocaleString(
                                            'id-ID', {
                                                month: 'long',

                                                year: 'numeric'
                                            }
                                        );
                                }
                            }
                        }


                        return row;
                    }
                );


                console.log(
                    'ALL DATA:',
                    allData.length
                );


                console.log(
                    'DATA PERTAMA:',
                    allData[0]
                );


                // -------------------------------------------------
                // RENDER CHART
                // -------------------------------------------------

                renderChart();


                // -------------------------------------------------
                // RENDER TABLE
                // -------------------------------------------------

                await renderTable();


                // -------------------------------------------------
                // MONTH FILTER
                // -------------------------------------------------

                populateMonthFilter();


                // -------------------------------------------------
                // PROGRESS BAR
                // -------------------------------------------------

                renderMentorProgressBar();


                // -------------------------------------------------
                // SUCCESS
                // -------------------------------------------------

                Swal.fire({

                    icon: 'success',

                    title: `Data berhasil dimuat (${allData.length})`,

                    toast: true,

                    position: 'top',

                    timer: 2000,

                    showConfirmButton: false
                });


                console.log(
                    'FETCH DATA SELESAI'
                );


            } catch (error) {


                console.error(
                    '======================================'
                );

                console.error(
                    'ERROR FETCH DATA:',
                    error
                );

                console.error(
                    '======================================'
                );


                Swal.fire({

                    icon: 'error',

                    title: 'Gagal',

                    text: error.message
                });


            } finally {

                Swal.close();
            }
        }


        // =========================================================
        // RENDER CHART
        // =========================================================

        function renderChart(
            selectedMonth = ''
        ) {


            if (
                typeof allowedMentors ===
                'undefined'
            ) {

                console.warn(
                    'allowedMentors belum tersedia.'
                );

                return;
            }


            let combined =

                allowedMentors.map(
                    function(mentor) {

                        let count = 0;


                        if (
                            selectedMonth &&
                            perMentorPerMonth[
                                selectedMonth
                            ]
                        ) {

                            count =

                                perMentorPerMonth[
                                    selectedMonth
                                ][mentor] || 0;

                        } else {

                            count =

                                perMentorAll[
                                    mentor
                                ] || 0;
                        }


                        return {

                            mentor: mentor,

                            count: count
                        };
                    }
                );


            // -----------------------------------------------------
            // SORT
            // -----------------------------------------------------

            combined.sort(
                function(a, b) {

                    return b.count -
                        a.count;
                }
            );


            const labels =

                combined.map(
                    function(x) {

                        return x.mentor;
                    }
                );


            const chartData =

                combined.map(
                    function(x) {

                        return x.count;
                    }
                );


            const canvas =

                document.getElementById(
                    'mentorChart'
                );


            if (!canvas) {

                console.warn(
                    '#mentorChart tidak ditemukan.'
                );

                return;
            }


            const ctx =
                canvas.getContext('2d');


            if (mentorChart) {

                mentorChart.destroy();

                mentorChart = null;
            }


            mentorChart =

                new Chart(
                    ctx, {

                        type: 'bar',


                        data: {

                            labels: labels,

                            datasets: [

                                {

                                    label: 'Jumlah Pendaftaran',

                                    data: chartData,

                                    backgroundColor: '#046392'
                                }
                            ]
                        },


                        options: {

                            responsive: true,

                            maintainAspectRatio: false,


                            plugins: {

                                legend: {

                                    display: false
                                }
                            },


                            scales: {

                                y: {

                                    beginAtZero: true,

                                    ticks: {

                                        precision: 0
                                    }
                                }
                            }
                        }
                    }
                );


            // -----------------------------------------------------
            // OPTIONAL MENTOR TABLE
            // -----------------------------------------------------

            const mentorTableBody =

                document.querySelector(
                    '#mentorTable tbody'
                );


            if (
                mentorTableBody
            ) {

                mentorTableBody.innerHTML =
                    '';


                labels.forEach(
                    function(
                        mentor,
                        index
                    ) {

                        const tr =
                            document.createElement(
                                'tr'
                            );


                        tr.innerHTML = `

                        <td>
                            ${escapeHtml(mentor)}
                        </td>

                        <td>
                            ${chartData[index]}
                        </td>

                    `;


                        mentorTableBody.appendChild(
                            tr
                        );
                    }
                );
            }
        }


        // =========================================================
        // POPULATE MONTH FILTER
        // =========================================================

        function populateMonthFilter() {


            const select =

                document.getElementById(
                    'monthFilter'
                );


            if (!select) {

                console.warn(
                    '#monthFilter tidak ditemukan.'
                );

                return;
            }


            select.innerHTML =

                `
                <option value="">
                    All Month
                </option>
            `;


            Object.keys(months)

                .sort()
                .reverse()

                .forEach(
                    function(key) {

                        select.innerHTML += `

                        <option value="${escapeHtml(key)}">

                            ${escapeHtml(
                                months[key]
                            )}

                        </option>

                    `;
                    }
                );


            // -----------------------------------------------------
            // EVENT
            // -----------------------------------------------------

            select.onchange =

                function() {

                    const month =
                        this.value;


                    renderChart(
                        month
                    );


                    renderMentorProgressBar(
                        month
                    );
                };
        }


        // =========================================================
        // RENDER DATATABLE
        // =========================================================

        async function renderTable() {


            const tableElement =
                $('#mentorDataTable');


            const refreshIndicator =
                $('#refreshIndicator');


            try {


                // -------------------------------------------------
                // INDICATOR
                // -------------------------------------------------

                refreshIndicator
                    .text(
                        'Menyiapkan data...'
                    )
                    .show();


                // -------------------------------------------------
                // DESTROY DATATABLE LAMA
                // -------------------------------------------------

                if (
                    $.fn.DataTable.isDataTable(
                        '#mentorDataTable'
                    )
                ) {

                    tableElement
                        .DataTable()
                        .clear()
                        .destroy();
                }


                // -------------------------------------------------
                // CLEAN DATA
                // -------------------------------------------------

                const cleanData =

                    allData.filter(
                        function(row) {

                            return (

                                row &&

                                row['EMAIL'] !==
                                null &&

                                row['EMAIL'] !==
                                undefined &&

                                String(
                                    row['EMAIL']
                                ).trim() !== ''
                            );
                        }
                    );


                console.log(
                    '======================================'
                );

                console.log(
                    'RENDER DATATABLE'
                );

                console.log(
                    'allData:',
                    allData.length
                );

                console.log(
                    'cleanData:',
                    cleanData.length
                );

                console.log(
                    'Data pertama:',
                    cleanData[0]
                );

                console.log(
                    '======================================'
                );


                // -------------------------------------------------
                // SORT
                // -------------------------------------------------

                cleanData.sort(
                    function(a, b) {

                        const dateA =

                            a['Timestamp']

                            ?
                            new Date(
                                a['Timestamp']
                            ).getTime()

                            :
                            0;


                        const dateB =

                            b['Timestamp']

                            ?
                            new Date(
                                b['Timestamp']
                            ).getTime()

                            :
                            0;


                        return dateB -
                            dateA;
                    }
                );


                refreshIndicator
                    .text(
                        `Menyiapkan ${cleanData.length} data...`
                    );


                // -------------------------------------------------
                // BACA HEADER OTOMATIS
                // -------------------------------------------------

                const headers = [];


                $('#mentorDataTable thead th')
                    .each(
                        function() {

                            headers.push(
                                $(this)
                                .text()
                                .trim()
                            );
                        }
                    );


                console.log(
                    'JUMLAH HEADER:',
                    headers.length
                );


                console.log(
                    'HEADERS:',
                    headers
                );


                // -------------------------------------------------
                // VALIDASI JUMLAH HEADER
                // -------------------------------------------------

                if (
                    headers.length !== 73
                ) {

                    console.warn(
                        `Jumlah header ${headers.length}, seharusnya 73.`
                    );
                }


                // -------------------------------------------------
                // COLUMN CONFIG
                // -------------------------------------------------

                const columns =

                    headers.map(
                        function(
                            header,
                            index
                        ) {


                            // =====================================
                            // NO
                            // =====================================

                            if (
                                index === 0
                            ) {

                                return {

                                    data: null,

                                    defaultContent: '',

                                    searchable: false,

                                    orderable: false,

                                    render: function(
                                        data,
                                        type,
                                        row,
                                        meta
                                    ) {

                                        return (
                                            meta.row +
                                            1
                                        );
                                    }
                                };
                            }


                            // =====================================
                            // DOWNLOAD CV
                            // =====================================

                            if (
                                index === 1
                            ) {

                                return {

                                    data: null,

                                    defaultContent: '',

                                    searchable: false,

                                    orderable: false,

                                    render: function(
                                        data,
                                        type,
                                        row
                                    ) {


                                        if (
                                            type !==
                                            'display'
                                        ) {

                                            return '';
                                        }


                                        const id =

                                            row[
                                                'ID'
                                            ] || '';


                                        const name =

                                            escapeHtml(
                                                row[
                                                    'NAMA (INDONESIA)'
                                                ] || ''
                                            );


                                        if (
                                            !id
                                        ) {

                                            return `

                                                <button
                                                    type="button"
                                                    class="btn btn-sm btn-secondary"
                                                    disabled
                                                >

                                                    <i class="fa fa-download"></i>

                                                    CV Tidak Ada

                                                </button>

                                            `;
                                        }


                                        return `

                                            <button
                                                type="button"
                                                class="btn btn-sm btn-primary btn-download-cv"
                                                data-id="${escapeHtml(id)}"
                                                data-nama="${name}"
                                            >

                                                <i class="fa fa-download"></i>

                                                Download CV

                                            </button>

                                        `;
                                    }
                                };
                            }


                            // =====================================
                            // DATA BIASA
                            // =====================================

                            return {

                                data: header,

                                defaultContent: '',

                                render: function(
                                    data,
                                    type,
                                    row
                                ) {


                                    if (
                                        data ===
                                        null ||
                                        data ===
                                        undefined
                                    ) {

                                        return '';
                                    }


                                    // -------------------------
                                    // TIMESTAMP
                                    // -------------------------

                                    if (
                                        header ===
                                        'Timestamp'
                                    ) {

                                        return formatDate(
                                            data
                                        );
                                    }


                                    // -------------------------
                                    // TANGGAL LAHIR
                                    // -------------------------

                                    if (
                                        header ===
                                        'TANGGAL LAHIR'
                                    ) {

                                        return formatDate(
                                            data
                                        );
                                    }


                                    return escapeHtml(
                                        data
                                    );
                                }
                            };
                        }
                    );


                console.log(
                    'JUMLAH COLUMN CONFIG:',
                    columns.length
                );


                // -------------------------------------------------
                // BUAT DATATABLE
                // -------------------------------------------------

                console.log(
                    'Membuat DataTable...'
                );


                dataTable =

                    tableElement.DataTable({

                        data: cleanData,

                        columns: columns,


                        // -------------------------------
                        // PAGINATION
                        // -------------------------------

                        pageLength:

                            parseInt(
                                $('#entriesSelect')
                                .val()
                            ) || 10,


                        lengthMenu: [

                            [
                                5,
                                10,
                                25,
                                50,
                                100
                            ],

                            [
                                5,
                                10,
                                25,
                                50,
                                100
                            ]
                        ],


                        // -------------------------------
                        // OPTIONS
                        // -------------------------------

                        ordering: false,

                        searching: true,

                        responsive: false,

                        deferRender: true,

                        autoWidth: false,

                        processing: true,

                        searchDelay: 250,


                        // -------------------------------
                        // LANGUAGE
                        // -------------------------------

                        language: {

                            processing: 'Sedang memproses...',

                            search: 'Cari:',

                            lengthMenu: 'Tampilkan _MENU_ data',

                            info: 'Menampilkan _START_ sampai _END_ dari _TOTAL_ data',

                            infoEmpty: 'Tidak ada data',

                            zeroRecords: 'Data tidak ditemukan',

                            emptyTable: 'Belum ada data',

                            paginate: {

                                first: 'Pertama',

                                last: 'Terakhir',

                                next: 'Berikutnya',

                                previous: 'Sebelumnya'
                            }
                        }
                    });


                // -------------------------------------------------
                // ENTRIES SELECT
                // -------------------------------------------------

                $('#entriesSelect')

                    .off(
                        'change.dataTable'
                    )

                    .on(
                        'change.dataTable',
                        function() {

                            if (
                                dataTable
                            ) {

                                dataTable
                                    .page
                                    .len(
                                        parseInt(
                                            this.value
                                        )
                                    )
                                    .draw();
                            }
                        }
                    );


                // -------------------------------------------------
                // SELESAI
                // -------------------------------------------------

                refreshIndicator
                    .hide();


                console.log(
                    '======================================'
                );

                console.log(
                    'DATATABLE BERHASIL DIBUAT'
                );

                console.log(
                    'Jumlah row:',
                    dataTable
                    .rows()
                    .count()
                );

                console.log(
                    'Jumlah column:',
                    dataTable
                    .columns()
                    .count()
                );

                console.log(
                    '======================================'
                );


            } catch (error) {


                console.error(
                    '======================================'
                );

                console.error(
                    'ERROR DATATABLE:',
                    error
                );

                console.error(
                    '======================================'
                );


                refreshIndicator
                    .text(
                        'Gagal menampilkan data. Silakan cek Console.'
                    )
                    .show();


                Swal.fire({

                    icon: 'error',

                    title: 'DataTable Error',

                    text: error.message
                });
            }
        }


        // =========================================================
        // PROGRESS BAR
        // =========================================================

        function renderMentorProgressBar(
            selectedMonth = ''
        ) {


            if (
                typeof allowedMentors ===
                'undefined'
            ) {

                return;
            }


            let combined =

                allowedMentors.map(
                    function(mentor) {

                        let count = 0;


                        if (
                            selectedMonth &&
                            perMentorPerMonth[
                                selectedMonth
                            ]
                        ) {

                            count =

                                perMentorPerMonth[
                                    selectedMonth
                                ][mentor] || 0;

                        } else {

                            count =

                                perMentorAll[
                                    mentor
                                ] || 0;
                        }


                        return {

                            mentor: mentor,

                            count: count
                        };
                    }
                );


            combined.sort(
                function(a, b) {

                    return b.count -
                        a.count;
                }
            );


            const maxValue =

                combined[0]
                ?.count || 1;


            const container =

                document.getElementById(
                    'mentorProgressBar'
                );


            if (!container) {

                return;
            }


            container.innerHTML = '';


            combined.forEach(
                function(item) {


                    const percent =

                        (
                            item.count /
                            maxValue *
                            100
                        ).toFixed(1);


                    container.innerHTML += `

                    <div class="mb-3">

                        <div
                            class="hstack justify-content-between"
                        >

                            <span
                                class="fs-3 fw-medium"
                            >
                                ${escapeHtml(
                                    item.mentor
                                )}
                            </span>


                            <h6
                                class="fs-3 fw-medium text-dark mb-0"
                            >
                                ${item.count}
                                siswa
                            </h6>

                        </div>


                        <div
                            class="progress mt-2"
                            style="height: 10px;"
                        >

                            <div
                                class="progress-bar bg-primary"
                                style="width: ${percent}%"
                            ></div>

                        </div>

                    </div>

                `;
                }
            );
        }


        // =========================================================
        // DOWNLOAD CV
        // =========================================================

        $(document).on(
            'click',
            '.btn-download-cv',
            function() {


                const id =
                    $(this).data('id');


                if (!id) {

                    Swal.fire({

                        icon: 'warning',

                        title: 'ID tidak ditemukan'
                    });

                    return;
                }


                console.log(
                    'Download CV ID:',
                    id
                );


                // =================================================
                // SESUAIKAN DENGAN ROUTE CV KAKAK
                // =================================================
            }
        );


        // =========================================================
        // DOCUMENT READY
        // =========================================================

        $(document).ready(
            function() {

                console.log(
                    '======================================'
                );

                console.log(
                    'HALAMAN SIAP'
                );

                console.log(
                    '======================================'
                );


                fetchData();
            }
        );
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- download cv --}}
    {{-- <script>
        $(document).on('click', '.btn-download-cv', async function(e) {
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
            }).then(async (result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        icon: 'info',
                        title: 'Sedang download CV, mohon tunggu sebentar...',
                        toast: true,
                        position: 'top',
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        didOpen: () => Swal.showLoading()
                    });

                    try {
                        // Ambil data dari Google Apps Script
                        const res = await fetch(
                            "https://script.google.com/macros/s/AKfycbw_gwZKaRIVUuKb0K-NYTtNRP6njudztlkWQwbDXLuuf1nFJ7mWZFffRo9pid818q6u/exec"
                        );
                        const data = await res.json();
                        const rowData = data.reverse().find(d => d.ID == id);

                        if (!rowData) throw new Error('Data tidak ditemukan');

                        // Kirim data ke Laravel
                        const formData = new FormData();
                        formData.append('data', JSON.stringify(rowData));

                        const response = await fetch('/export-cv-word', {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            body: formData
                        });

                        if (!response.ok) throw new Error('Download gagal');

                        const blob = await response.blob();
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

                    } catch (err) {
                        console.error(err);
                        Swal.fire({
                            title: 'Error!',
                            text: err.message,
                            icon: 'error'
                        });
                    }
                }
            });
        });
    </script> --}}

    {{-- =========================================================
     DOWNLOAD CV
========================================================= --}}

    <script>
        $(document).on('click', '.btn-download-cv', async function(e) {

            e.preventDefault();

            // =====================================================
            // BUTTON DATA
            // =====================================================

            const button = $(this);

            const id = String(
                button.attr('data-id') || ''
            ).trim();

            const nama = String(
                button.attr('data-nama') || ''
            ).trim();


            console.log('======================================');
            console.log('DOWNLOAD CV DIMULAI');
            console.log('ID   :', id);
            console.log('NAMA :', nama);
            console.log('======================================');


            // =====================================================
            // VALIDASI ID
            // =====================================================

            if (!id) {

                Swal.fire({

                    icon: 'warning',

                    title: 'ID tidak ditemukan',

                    text: 'Data siswa tidak memiliki ID CV.'
                });

                return;
            }


            // =====================================================
            // CARI DATA DARI JSON TERBARU
            // allData berasal dari data-pendaftaran.json
            // =====================================================

            if (
                typeof allData === 'undefined' ||
                !Array.isArray(allData)
            ) {

                Swal.fire({

                    icon: 'error',

                    title: 'Data belum tersedia',

                    text: 'Data JSON belum selesai dimuat. Silakan coba lagi.'
                });

                return;
            }


            console.log(
                'Total data JSON:',
                allData.length
            );


            // =====================================================
            // CARI BERDASARKAN ID
            // =====================================================

            const rowData = allData.find(function(row) {

                if (!row) {
                    return false;
                }

                return String(
                    row['ID'] ?? ''
                ).trim() === id;
            });


            // =====================================================
            // DATA TIDAK DITEMUKAN
            // =====================================================

            if (!rowData) {

                console.error(
                    'DATA DENGAN ID TIDAK DITEMUKAN:',
                    id
                );


                Swal.fire({

                    icon: 'error',

                    title: 'Data tidak ditemukan',

                    text: `Data dengan ID ${id} tidak ditemukan pada JSON terbaru.`
                });

                return;
            }


            // =====================================================
            // DEBUG DATA
            // =====================================================

            console.log(
                'DATA JSON TERBARU UNTUK CV:',
                rowData
            );


            // =====================================================
            // KONFIRMASI DOWNLOAD
            // =====================================================

            const result = await Swal.fire({

                title: 'Are you sure?',

                text: 'Do you want to download this CV?',

                icon: 'question',

                showCancelButton: true,

                confirmButtonText: 'OK',

                cancelButtonText: 'Cancel',

                confirmButtonColor: '#046392'
            });


            // =====================================================
            // USER CANCEL
            // =====================================================

            if (!result.isConfirmed) {

                return;
            }


            // =====================================================
            // LOADING
            // =====================================================

            Swal.fire({

                icon: 'info',

                title: 'Sedang download CV...',

                text: 'Mohon tunggu sebentar.',

                toast: true,

                position: 'top',

                showConfirmButton: false,

                allowOutsideClick: false,

                didOpen: function() {

                    Swal.showLoading();
                }
            });


            try {

                // =================================================
                // FORM DATA
                // =================================================

                const formData = new FormData();


                // Kirim SELURUH data row dari JSON terbaru
                formData.append(
                    'data',
                    JSON.stringify(rowData)
                );


                console.log(
                    'DATA YANG DIKIRIM KE LARAVEL:',
                    rowData
                );


                // =================================================
                // REQUEST KE LARAVEL
                // =================================================

                const response = await fetch(
                    '/export-cv-word', {

                        method: 'POST',

                        headers: {

                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),

                            'Accept': 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
                        },

                        body: formData
                    }
                );


                console.log(
                    'STATUS EXPORT CV:',
                    response.status
                );


                // =================================================
                // VALIDASI RESPONSE
                // =================================================

                if (!response.ok) {

                    let errorMessage =
                        `Download gagal. HTTP ${response.status}`;


                    try {

                        const errorData =
                            await response.json();


                        if (
                            errorData &&
                            errorData.message
                        ) {

                            errorMessage =
                                errorData.message;
                        }

                    } catch (error) {

                        console.warn(
                            'Response bukan JSON.'
                        );
                    }


                    throw new Error(
                        errorMessage
                    );
                }


                // =================================================
                // AMBIL BLOB FILE
                // =================================================

                const blob =
                    await response.blob();


                console.log(
                    'UKURAN FILE:',
                    blob.size
                );


                if (
                    !blob ||
                    blob.size === 0
                ) {

                    throw new Error(
                        'File CV kosong atau tidak berhasil dibuat.'
                    );
                }


                // =================================================
                // BUAT FILE URL
                // =================================================

                const url =
                    window.URL.createObjectURL(
                        blob
                    );


                // =================================================
                // NAMA FILE
                // =================================================

                let safeNama =
                    nama
                    .replace(
                        /[^\w\s-]/g,
                        ''
                    )
                    .replace(
                        /\s+/g,
                        '_'
                    )
                    .trim();


                if (!safeNama) {

                    safeNama = id;
                }


                const fileName =
                    `CV_${safeNama}.docx`;


                // =================================================
                // DOWNLOAD
                // =================================================

                const a =
                    document.createElement('a');


                a.href = url;

                a.download = fileName;

                a.style.display = 'none';


                document.body.appendChild(a);

                a.click();

                a.remove();


                // =================================================
                // HAPUS OBJECT URL
                // =================================================

                setTimeout(function() {

                    window.URL.revokeObjectURL(
                        url
                    );

                }, 1000);


                // =================================================
                // SUCCESS
                // =================================================

                Swal.fire({

                    icon: 'success',

                    title: 'Success!',

                    text: `CV ${nama || id} berhasil didownload.`,

                    timer: 2000,

                    showConfirmButton: false
                });


                console.log(
                    '======================================'
                );

                console.log(
                    'DOWNLOAD CV BERHASIL'
                );

                console.log(
                    'FILE:',
                    fileName
                );

                console.log(
                    '======================================'
                );


            } catch (error) {

                // =================================================
                // ERROR
                // =================================================

                console.error(
                    '======================================'
                );

                console.error(
                    'ERROR DOWNLOAD CV:',
                    error
                );

                console.error(
                    '======================================'
                );


                Swal.fire({

                    icon: 'error',

                    title: 'Download Gagal',

                    text: error.message ||
                        'Terjadi kesalahan saat membuat CV.'
                });
            }

        });
    </script>

    {{-- Chart --}}
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

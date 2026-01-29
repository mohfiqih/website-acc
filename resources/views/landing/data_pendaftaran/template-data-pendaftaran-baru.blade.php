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
                                <a class="nav-link nav-icon-hover" href="/" id="drop2" data-bs-toggle="dropdown"
                                    aria-expanded="false">
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
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="https://www.amanahcitracemerlang.id/storage/images/1738849208_WhatsApp_Image_2025-02-06_at_20.04.03-removebg-preview.png"
                                    alt="image" class="img-fluid" width="205">
                                <h4 class="mt-7">DATA PENDAFTARAN SISWA BARU (CV ONLINE)</h4>
                                <p class="card-subtitle mt-2 mb-3">
                                    LPK ACC Japan Centre berlokasi di Dukuh. Gitung, Desa Harjosari Lor, Kecamatan
                                    Adiwerna, Kabupaten Tegal, Jawa Tengah 52194.
                                </p>
                                <button class="btn btn-primary mb-3">Home</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title d-flex align-items-center gap-2 mb-4">
                                    Grafir Pendaftaran Online Berdasarkan Nama Mentor
                                </h5>
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <select id="monthFilter" class="form-select form-select-sm" style="width: 200px;">
                                        <option value="">All Month</option>
                                    </select>

                                    <button class="btn btn-success btn-sm px-4 text-nowrap" onclick="exportJPG()">
                                        Export JPG
                                    </button>
                                    <button class="btn btn-danger btn-sm px-4 text-nowrap"
                                        onclick="exportPDFLandscape()">
                                        Export PDF
                                    </button>
                                </div>
                                <canvas id="mentorChart" style="min-height: 300px; width: 100%;"></canvas>
                                <p>Jumlah Keseluruhan Pendaftaran Online Setiap Mentor</p>
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
                                            <td colspan="2" class="text-center">Sedang proses menampilkan data...</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
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
                                            <td colspan="74" class="text-center">Sedang proses menampilkan data...</td>
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
                <div class="py-6 px-6 text-center">
                    <p class="mb-0 fs-1">Design and Developed by IT LPK ACC Japan Centre
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

    {{-- data tabel --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const googleScriptUrl = 'https://script.google.com/macros/s/AKfycbw_gwZKaRIVUuKb0K-NYTtNRP6njudztlkWQwbDXLuuf1nFJ7mWZFffRo9pid818q6u/exec';

        const allowedMentors = [
            'IBNU', 'HERA', 'FIQIH', 'HESTI', 'FAIZAL', 'HILMI', 'TRIO', 'REZA',
            'SELLY', 'ADITYA', 'FAHRUL', 'FUJIAYU', 'FIRMAN', 'GAZI',
            'IPUT', 'NADIA', 'PHILLIP', 'PIPIT', 'AVILA', 'UMAY', 'SONY',
            'JAMAL', 'BANGKIT', 'DIAN', 'ALVAN', 'SELA', 'USWATUN', 'IZAH',
            'AKHMAD ARIFUDIN', 'NUR', 'FATONI', 'ERWIN', 'TYA', 'NUROHMAN'
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
                    renderMentorProgressBar();
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
                renderMentorProgressBar(month);
            });
        }

        function formatDate(dateString) {
            if (!dateString) return '';
            const d = new Date(dateString);
            if (isNaN(d)) return dateString;
            return d.toLocaleDateString('id-ID', {
                day: '2-digit',
                month: '2-digit',
                year: 'numeric'
            });
        }

        let dataTable;
        function renderTable() {
            $('#mentorDataTable tbody').empty();

            if ($.fn.DataTable.isDataTable('#mentorDataTable')) {
                $('#mentorDataTable').DataTable().destroy();
            }

            const cleanData = allData.filter(row =>
                row['EMAIL'] && row['EMAIL'].trim() !== '' &&
                row['Timestamp'] && row['Timestamp'].trim() !== ''
            );

            cleanData.sort((a, b) => new Date(b.Timestamp) - new Date(a.Timestamp));

            const tbody = $('#mentorDataTable tbody');
            cleanData.forEach((row, idx) => {
                const columns = [
                    idx + 1,
                    `<button class="btn btn-sm btn-success btn-download-cv" data-id="${row['ID'] || idx}" data-nama="${row['NAMA (INDONESIA)'] || ''}">
                        <i class="fa fa-download"></i> Download CV
                    </button>`,
                    formatDate(row['Timestamp']) || '',
                    row['EMAIL'] || '',
                    row['NAMA (KATAKANA)'] || '',
                    row['NAMA (INDONESIA)'] || '',
                    row['ALAMAT'] || '',
                    formatDate(row['TANGGAL LAHIR']) || '',
                    row['USIA'] || '',
                    row['KELAMIN'] || '',
                    row['NO HP AKTIF'] || '',
                    row['AGAMA'] || '',
                    row['TINGGI'] || '',
                    row['BERAT'] || '',
                    row['GOL DARAH'] || '',
                    row['BUTA WARNA'] || '',
                    row['MATA KIRI'] || '',
                    row['MATA KANAN'] || '',
                    row['PERNAH OPERASI'] || '',
                    row['APAKAH SEDANG MINUM'] || '',
                    row['TANGAN'] || '',
                    row['MEROKOK'] || '',
                    row['PENYAKIT DALAM'] || '',
                    row['KEAHLIAN'] || '',
                    row['SIFAT/KEPRIBADIAN'] || '',
                    row['KELEBIHAN'] || '',
                    row['KELEMAHAN'] || '',
                    row['STATUS'] || '',
                    row['HOBI'] || '',
                    row['MOTIVASI'] || '',
                    row['SELAMA 3 TAHUN DI JEPANG MAU NABUNG BERAPA'] || '',
                    row['SETELAH PULANG JEPANG, APA YANG AKAN DILAKUKAN'] || '',
                    row['APAKAH ANDA PERNAH TINGGAL/BEKERJA DI JEPANG'] || '',
                    row['JIKA YA, KUALIFIKASI APA YANG ANDA LAMAR'] || '',
                    row['SEKOLAH DASAR (SD)'] || '',
                    row['TAHUN MASUK SEKOLAH (SD)'] || '',
                    row['TAHUN KELUAR SEKOLAH (SD)'] || '',
                    row['SEKOLAH MENENGAH PERTAMA (SMP)'] || '',
                    row['TAHUN MASUK SEKOLAH (SMP)'] || '',
                    row['TAHUN KELUAR SEKOLAH (SMP)'] || '',
                    row['SEKOLAH MENENGAH ATAS/KEJURUAN (SMA/SMK)'] || '',
                    row['TAHUN MASUK SEKOLAH (SMA/SMK)'] || '',
                    row['TAHUN KELUAR SEKOLAH (SMA/SMK)'] || '',
                    row['JURUSAN (SMA/SMK)'] || '',
                    row['PERGURUAN TINGGI'] || '',
                    row['PENGALAMAN KERJA'] || '',
                    row['BAHASA ASING YANG DIKUASAI'] || '',
                    row['PERNAH KE JEPANG'] || '',
                    row['JIKA YA, SEBUTKAN TGL/BLN/THN'] || '',
                    row['PERNAH LUAR NEGERI LAINNYA'] || '',
                    row['JIKA YA, NEGARA APA'] || '',
                    row['APAKAH ADA KERABAT DI JEPANG'] || '',
                    row['APA HUBUNGAN KERABAT YANG DI JEPANG'] || '',
                    row['BELAJAR BAHASA'] || '',
                    row['BUKU YANG DI PAKAI'] || '',
                    row['BAB YANG DI PELAJARI'] || '',
                    row['NAMA AYAH'] || '',
                    row['HUBUNGAN AYAH'] || '',
                    row['USIA AYAH'] || '',
                    row['PEKERJAAN AYAH'] || '',
                    row['NAMA IBU'] || '',
                    row['HUBUNGAN IBU'] || '',
                    row['USIA IBU'] || '',
                    row['PEKERJAAN IBU'] || '',
                    row['NAMA SAUDARA'] || '',
                    row['PENDAPAT KELUARGA'] || '',
                    row['NO HP KELUARGA'] || '',
                    row['NAMA MENTOR'] || '',
                    row['UKURAN BAJU'] || '',
                    row['NOMOR SEPATU'] || '',
                    row['PILIH KELAS'] || '',
                    row['PILIH PROGRAM'] || '',
                    row['ID'] || ''
                ];

                tbody.append(`<tr>${columns.map(c => `<td>${c}</td>`).join('')}</tr>`);
            });

            const dataTable = $('#mentorDataTable').DataTable({
                pageLength: parseInt($('#entriesSelect').val()) || 10,
                lengthMenu: [5, 10, 25, 50, 100],
                ordering: false,
                responsive: true,
                autoWidth: false
            });

            $('#entriesSelect').on('change', function() {
                const val = parseInt($(this).val());
                dataTable.page.len(val).draw();
            });
        }

        fetchData();

        function renderMentorProgressBar(selectedMonth = '') {
            let labels = Object.keys(perMentorAll);
            let data = labels.map(mentor => {
                if (selectedMonth && perMentorPerMonth[selectedMonth]) {
                    return perMentorPerMonth[selectedMonth][mentor] || 0;
                }
                return perMentorAll[mentor];
            });

            const combined = labels.map((m, i) => ({
                mentor: m,
                count: data[i]
            })).sort((a, b) => b.count - a.count);

            const maxValue = combined[0]?.count || 1;
            const container = document.getElementById("mentorProgressBar");
            container.innerHTML = "";

            const colors = ['bg-primary','bg-success','bg-warning','bg-danger','bg-info','bg-secondary'];

            combined.forEach((item, i) => {
                const percent = ((item.count / maxValue) * 100).toFixed(1);
                const color = colors[i % colors.length];

                container.innerHTML += `
                <div>
                    <div class="hstack justify-content-between">
                        <span class="fs-3 fw-medium">${item.mentor}</span>
                        <h6 class="fs-3 fw-medium text-dark mb-0">${item.count} siswa</h6>
                    </div>
                    <div class="progress mt-2" style="height: 10px;">
                        <div class="progress-bar ${color}" style="width: ${percent}%"></div>
                    </div>
                </div>`;
            });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- download cv --}}
    <script>
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
                        const res = await fetch("https://script.google.com/macros/s/AKfycbw_gwZKaRIVUuKb0K-NYTtNRP6njudztlkWQwbDXLuuf1nFJ7mWZFffRo9pid818q6u/exec");
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
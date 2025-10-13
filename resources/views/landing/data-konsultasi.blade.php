<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Data Tamu Konsultasi</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <meta name="csrf-token" content="{{ csrf_token() }}">

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
            border: 1px solid #046291;
            background-color: white;
            color: #046291;
            font-weight: bold;
        }

        .pagination li a:hover {
            background-color: #046291;
            color: white;
        }

        .pagination li.active span {
            background-color: #046291;
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
                                <img src="https://www.amanahcitracemerlang.id/storage/images/1738420242_IMG-20250131-WA0006.jpg"
                                    class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.amanahcitracemerlang.id/templates/assets/img/acc.jpg"
                                    class="d-block w-100" alt="...">
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
                    <h2 style="text-align: center"></span>DATA TAMU KONSULTASI LPK ACC JAPAN CENTRE</h2>
                    <p style="text-align: center">LPK ACC Japan Centre berlokasi di Dukuh. Gitung, Desa Harjosari Lor,
                        Kecamatan Adiwerna, Kabupaten Tegal, Jawa Tengah 52194.</p>
                    <div class="d-flex justify-content-center justify-content-lg-start text-center"
                        style="padding-bottom: 30px;">
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
    {{-- <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header text-dark">
                        Statistik Per Hari <br />
                        <button class="btn btn-sm btn-success"
                            onclick="downloadPNG('chartHari','statistik_per_hari')">Export PNG</button>
                        <button class="btn btn-sm btn-danger"
                            onclick="downloadPDF('chartHari','Statistik Per Hari')">Export PDF</button>
                    </div>
                    <div class="card-body">
                        <canvas id="chartHari"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header text-dark">
                        Statistik Per Kabupaten <br />
                        <button class="btn btn-sm btn-success"
                            onclick="downloadPNG('chartUsia','statistik_per_usia')">Export PNG</button>
                        <button class="btn btn-sm btn-danger"
                            onclick="downloadPDF('chartUsia','Statistik Per Usia')">Export PDF</button>
                    </div>
                    <div class="card-body">
                        <canvas id="chartUsia"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header text-dark">
                        Statistik Per Bulan <br />
                        <button class="btn btn-sm btn-success"
                            onclick="downloadPNG('chartBulan','statistik_per_bulan')">Export PNG</button>
                        <button class="btn btn-sm btn-danger"
                            onclick="downloadPDF('chartBulan','Statistik Per Bulan')">Export PDF</button>
                    </div>
                    <div class="card-body">
                        <canvas id="chartBulan"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header text-dark">
                        Statistik Per Tahun <br />
                        <button class="btn btn-sm btn-success"
                            onclick="downloadPNG('chartTahun','statistik_per_tahun')">Export PNG</button>
                        <button class="btn btn-sm btn-danger"
                            onclick="downloadPDF('chartTahun','Statistik Per Tahun')">Export PDF</button>
                    </div>
                    <div class="card-body">
                        <canvas id="chartTahun"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header text-dark">
                        Statistik Per Provinsi <br />
                        <button class="btn btn-sm btn-success"
                            onclick="downloadPNG('chartProvinsi','statistik_per_provinsi')">Export PNG</button>
                        <button class="btn btn-sm btn-danger"
                            onclick="downloadPDF('chartProvinsi','Statistik Per Provinsi')">Export PDF</button>
                    </div>
                    <div class="card-body">
                        <canvas id="chartProvinsi"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header text-dark">
                        Statistik Per Kabupaten <br />
                        <button class="btn btn-sm btn-success"
                            onclick="downloadPNG('chartKabupaten','statistik_per_kabupaten')">Export PNG</button>
                        <button class="btn btn-sm btn-danger"
                            onclick="downloadPDF('chartKabupaten','Statistik Per Kabupaten')">Export PDF</button>
                    </div>
                    <div class="card-body">
                        <canvas id="chartKabupaten"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- Chart All --}}
    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header text-dark d-flex justify-content-between align-items-center flex-wrap">
                <div>
                    <strong id="chartTitle">Statistik Per Hari</strong>
                </div>
                <div class="d-flex align-items-center gap-2 flex-wrap">
                    <select id="chartFilter" class="form-select form-select-sm">
                        <option value="perHari">Per Hari</option>
                        <option value="perBulan">Per Bulan</option>
                        <option value="perTahun">Per Tahun</option>
                        <option value="perProvinsi">Per Provinsi</option>
                        <option value="perKabupaten">Per Kabupaten</option>
                        <option value="perUmur">Per Umur</option>
                    </select>

                    <button class="btn btn-success btn-sm px-4 text-nowrap" onclick="downloadPNG('mainChart','statistik_dinamis')">
                        Export PNG
                    </button>
                    <button class="btn btn-danger btn-sm px-4 text-nowrap" onclick="downloadPDF('mainChart','Statistik Dinamis')">
                        Export PDF
                    </button>
                </div>
            </div>
            <div class="card-body text-center">
                <div>
                    <canvas id="mainChart" style="min-height: 300px; width: 100%;"></canvas>
                </div>
            </div>
        </div>
    </div>

    {{-- Data --}}
    <div class="container mt-2">
        <div class="card">
            <div class="card-body" style="padding: 20px; border-radius: 10px;">
                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <label>
                            Show
                            <select id="entriesSelect" class="form-control d-inline-block w-auto">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="20" selected>20</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                            </select>
                        </label>
                    </div>
                    <div>
                        <input type="text" id="tableSearch" class="form-control" placeholder="Search...">
                    </div>
                </div>

                <div class="table-responsive">
                    <form action="{{ route('data-konsultasi.export-pdf') }}" method="GET"
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
                    <div id="refreshIndicator"
                        style="display: none; font-size: 15px; color: #888; margin-right: 10px;">
                        🔄 Refreshing data...
                    </div>
                    <br />
                    <div class="table-responsive">
                        <table id="spreadsheetTable" class="table table-striped table-bordered fixed-header-table">
                            @if (!empty($cleanedData))
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>WhatsApp</th>
                                        <th>Tanggal Konsultasi</th>
                                        <th>Email</th>
                                        <th>Nama Lengkap</th>
                                        <th>Usia</th>
                                        <th>Pendidikan Terakhir</th>
                                        <th>Alamat Lengkap</th>
                                        <th>Kecamatan</th>
                                        <th>Kabupaten</th>
                                        <th>Provinsi</th>
                                        <th>Nomor Aktif (WA)</th>
                                        <th>Informasi dari mana?</th>
                                    </tr>
                                </thead>
                                <tbody id="tableBody">
                                    @include('partials.table_konsultasi')
                                </tbody>
                            @else
                                <tr>
                                    <td colspan="100%" class="text-center">Tidak ada data</td>
                                </tr>
                            @endif
                        </table>
                    </div>
                </div>

                <!-- Pagination di luar DataTables -->
                <div class="d-flex justify-content-between align-items-center">
                    <span id="tableInfo"></span>

                    <div class="d-flex align-items-center ms-auto">
                        <ul class="pagination pagination-sm mb-0" id="paginationControls"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />

    {{-- <div id="preloader"></div> --}}

    @include('landing.footer')

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    <script>
        // Refresh tabel
        function refreshTable() {
            const indicator = document.getElementById('refreshIndicator');
            indicator.style.display = 'inline';

            fetch('{{ route('refresh.pendaftaran') }}')
                .then(response => response.text())
                .then(html => {
                    document.getElementById('tableBody').innerHTML = html;
                    indicator.style.display = 'none';
                })
                .catch(error => {
                    console.error('Gagal refresh tabel', error);
                    indicator.innerText = '❌ Gagal memuat data';
                    setTimeout(() => {
                        indicator.style.display = 'none';
                        indicator.innerText = '🔄 Refreshing data...';
                    }, 6000000);
                });
        }

        setInterval(refreshTable, 6000000);

        $(document).ready(function() {
            let table = $('#spreadsheetTable').DataTable({
                "paging": true,
                "pageLength": 20,
                "searching": true,
                "info": false,
                "lengthChange": false,
                "scrollY": false,
                "scrollCollapse": false,
                "dom": 'rtp'
            });

            // **Sembunyikan pagination bawaan DataTables**
            $('.dataTables_paginate').hide();

            // Custom Search
            $('#tableSearch').on('keyup', function() {
                table.search(this.value).draw();
            });

            // Custom Entries Dropdown
            $('#entriesSelect').on('change', function() {
                table.page.len(this.value).draw();
            });

            $(document).on('click', '#paginationControls .page-link', function(e) {
                e.preventDefault();
                let page = parseInt($(this).data('page'));
                if (!isNaN(page)) {
                    table.page(page).draw('page');
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                confirmButtonColor: '#046291'
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

    {{-- Grafik Old --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script>
        let labels = {!! json_encode(array_keys($perUmur)) !!};
        let data = {!! json_encode(array_values($perUmur)) !!};

        let combined = labels.map((label, i) => ({
            label: parseInt(label),
            value: data[i]
        }));

        combined.sort((a, b) => a.label - b.label);
        labels = combined.map(item => item.label);
        data = combined.map(item => item.value);

        const chartUsia = new Chart(document.getElementById('chartUsia'), {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Jumlah Konsultasi per Usia',
                    data: data,
                    backgroundColor: '#046291',
                    borderColor: 'rgba(4, 98, 145, 0.5)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            precision: 0,
                            stepSize: 1,
                            callback: function(value) {
                                return value;
                            }
                        }
                    }
                }
            }
        });

        const chartHari = new Chart(document.getElementById('chartHari'), {
            type: 'line',
            data: {
                labels: {!! json_encode(array_keys($perHari)) !!},
                datasets: [{
                    label: 'Jumlah Konsultasi per Hari',
                    data: {!! json_encode(array_values($perHari)) !!},
                    borderColor: '#046291',
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    fill: true,
                    tension: 0.3
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Tanggal'
                        }
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Jumlah Konsultasi'
                        }
                    }
                }
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            precision: 0,
                            stepSize: 1,
                            callback: function(value) {
                                return value;
                            }
                        }
                    }
                }
            }
        });

        const chartBulan = new Chart(document.getElementById('chartBulan'), {
            type: 'bar',
            data: {
                labels: {!! json_encode(array_keys($perBulan)) !!},
                datasets: [{
                    label: 'Jumlah Konsultasi per Bulan',
                    data: {!! json_encode(array_values($perBulan)) !!},
                    backgroundColor: '#046291'
                }]
            }
        });

        const chartTahun = new Chart(document.getElementById('chartTahun'), {
            type: 'bar',
            data: {
                labels: {!! json_encode(array_keys($perTahun)) !!},
                datasets: [{
                    label: 'Jumlah Konsultasi per Tahun',
                    data: {!! json_encode(array_values($perTahun)) !!},
                    backgroundColor: '#046291'
                }]
            }
        });

        const chartProvinsi = new Chart(document.getElementById('chartProvinsi'), {
            type: 'bar',
            data: {
                labels: {!! json_encode(array_keys($perProvinsi)) !!},
                datasets: [{
                    label: 'Jumlah Konsultasi per Provinsi',
                    data: {!! json_encode(array_values($perProvinsi)) !!},
                    backgroundColor: '#046291'
                }]
            }
        });

        const chartKabupaten = new Chart(document.getElementById('chartKabupaten'), {
            type: 'bar',
            data: {
                labels: {!! json_encode(array_keys($perKabupaten)) !!},
                datasets: [{
                    label: 'Jumlah Konsultasi per Kabupaten',
                    data: {!! json_encode(array_values($perKabupaten)) !!},
                    backgroundColor: '#046291'
                }]
            }
        });

        // export chart
        function downloadPNG(chartId, filename) {
            const canvas = document.getElementById(chartId);
            const url = canvas.toDataURL("image/png");
            const link = document.createElement("a");
            link.href = url;
            link.download = filename + ".png";
            link.click();
        }

        function downloadPDF(chartId, title) {
            const canvas = document.getElementById(chartId);
            const imgData = canvas.toDataURL("image/png");

            const {
                jsPDF
            } = window.jspdf;
            const doc = new jsPDF();

            // Judul di PDF
            doc.setFontSize(16);
            doc.text(title, 15, 20);

            // Chart masuk PDF
            doc.addImage(imgData, "PNG", 15, 30, 180, 100);

            doc.save(title.replace(/\s+/g, '_').toLowerCase() + ".pdf");
        }
    </script> --}}

    {{-- Grafik All --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

    <script>
        const datasets = {
            perHari: {
                labels: {!! json_encode(array_keys($perHari)) !!},
                data: {!! json_encode(array_values($perHari)) !!},
                type: 'line',
                title: 'Statistik Per Hari'
            },
            perBulan: {
                labels: {!! json_encode(array_keys($perBulan)) !!},
                data: {!! json_encode(array_values($perBulan)) !!},
                type: 'bar',
                title: 'Statistik Per Bulan'
            },
            perTahun: {
                labels: {!! json_encode(array_keys($perTahun)) !!},
                data: {!! json_encode(array_values($perTahun)) !!},
                type: 'bar',
                title: 'Statistik Per Tahun'
            },
            perProvinsi: {
                labels: {!! json_encode(array_keys($perProvinsi)) !!},
                data: {!! json_encode(array_values($perProvinsi)) !!},
                type: 'bar',
                title: 'Statistik Per Provinsi'
            },
            perKabupaten: {
                labels: {!! json_encode(array_keys($perKabupaten)) !!},
                data: {!! json_encode(array_values($perKabupaten)) !!},
                type: 'bar',
                title: 'Statistik Per Kabupaten'
            },
            perUmur: {
                labels: {!! json_encode(array_keys($perUmur)) !!},
                data: {!! json_encode(array_values($perUmur)) !!},
                type: 'bar',
                title: 'Statistik Per Umur'
            }
        };

        datasets.perUmur.labels = datasets.perUmur.labels
            .map((v, i) => ({ label: parseInt(v), value: datasets.perUmur.data[i] }))
            .sort((a, b) => a.label - b.label)
            .map(item => item.label);

        datasets.perUmur.data = datasets.perUmur.labels.map(label => {
            const idx = datasets.perUmur.labels.indexOf(label);
            return Object.values({!! json_encode($perUmur) !!})[idx];
        });

        const ctx = document.getElementById('mainChart');
        let chartInstance = null;
        let currentFilter = 'perHari';

        function renderChart(filterKey) {
            const selected = datasets[filterKey];
            if (!selected) return;

            if (chartInstance) chartInstance.destroy();

            chartInstance = new Chart(ctx, {
                type: selected.type,
                data: {
                    labels: selected.labels,
                    datasets: [{
                        label: selected.title,
                        data: selected.data,
                        backgroundColor: 'rgba(4, 98, 145, 0.8)',
                        borderColor: '#046291',
                        borderWidth: 1.2,
                        fill: selected.type === 'line',
                        tension: 0.3
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        x: {
                            ticks: { color: '#333', maxRotation: 45, minRotation: 0 }
                        },
                        y: {
                            beginAtZero: true,
                            ticks: { precision: 0, stepSize: 1, color: '#333' }
                        }
                    },
                    plugins: {
                        legend: { display: false },
                        title: {
                            display: true,
                            text: selected.title,
                            color: '#046291',
                            font: { size: 15, weight: 'bold' },
                            padding: { top: 10, bottom: 20 }
                        }
                    },
                    layout: {
                        padding: 15
                    }
                }
            });

            document.getElementById('chartTitle').innerText = selected.title;
            currentFilter = filterKey;
        }

        renderChart('perHari');

        document.getElementById('chartFilter').addEventListener('change', function() {
            renderChart(this.value);
        });

        function downloadPNG(chartId) {
            const canvas = document.getElementById(chartId);
            const url = canvas.toDataURL("image/png");
            const link = document.createElement("a");

            const fileName = datasets[currentFilter].title
                .replace(/\s+/g, '_')
                .toLowerCase();

            link.href = url;
            link.download = fileName + ".png";
            link.click();
        }

        function downloadPDF(chartId) {
            const canvas = document.getElementById(chartId);
            const imgData = canvas.toDataURL("image/png");

            const { jsPDF } = window.jspdf;
            const doc = new jsPDF({ orientation: 'landscape' });

            const title = datasets[currentFilter].title;

            doc.setFontSize(16);
            doc.text(title, 15, 20);

            doc.addImage(imgData, "PNG", 15, 30, 250, 110);

            const fileName = title.replace(/\s+/g, '_').toLowerCase() + ".pdf";
            doc.save(fileName);
        }

        ctx.style.height = '360px';
        ctx.style.width = '100%';
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
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap4.js"></script>
</body>

</html>

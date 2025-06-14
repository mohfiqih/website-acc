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
                    <p class="justify-content-center;"><i class="fa fa-map-pin" style="padding-right: 10px;"></i>Welcome LPK ACC Japan Centre 👋</p>
                    <h2></span>DATA PENDAFTARAN SISWA BARU (CV) LPK ACC JAPAN CENTRE TEGAL</h2>
                    <ul>
                        <li class="text-white">LPK ACC Japan Centre berlokasi di Dukuh. Gitung, Desa Harjosari Lor, Kecamatan Adiwerna, Kabupaten Tegal, Jawa Tengah 52194.</li>
                        <li class="text-white">LPK ACC Japan Centre lembaga Resmi, Amanah dan Legal.</li>
                    </ul>
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

    <div class="container mt-4">
        <div class="card">
            <div class="card-body" style="padding: 30px; border-radius: 10px;">
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
                    <div id="refreshIndicator" style="display: none; font-size: 15px; color: #888; margin-right: 10px;">
                        🔄 Refreshing data...
                    </div>
                    <br/>
                    <div class="table-responsive">
                        <table id="spreadsheetTable" class="table table-striped table-bordered fixed-header-table">
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
                                    @include('partials.table_body')
                                    {{-- @foreach($cleanedData as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <a href="{{ route('export.cv.word', ['id' => $row['ID']]) }}" class="btn btn-sm btn-success">
                                                    <i class="fa fa-download"></i> Download CV
                                                </a>                                                
                                            </td>
                                            @foreach($row as $key => $cell)
                                                @if ($key !== 'ID')
                                                    <td>{{ $cell }}</td>
                                                @endif
                                            @endforeach                                                                       
                                        </tr>
                                    @endforeach --}}
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
    
    <br/>    

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

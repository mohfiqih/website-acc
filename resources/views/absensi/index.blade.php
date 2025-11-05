<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Data Absensi Siswa</title>
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
                    <h2 style="text-align: center"></span>ABSENSI SISWA LPK ACC JAPAN CENTRE</h2>
                    <p style="text-align: center">Silahkan isi absensi siswa sesuai kelas yang diajar masing-masing sensei, mohon isi semua kehadiran siswa baik yang hadir ataupun tidak hadir atau keterangan lainnya. Absensi digunakan sebagai track record siswa LPK ACC Japan Centre selama masa pendidikan.</p>
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

    <div class="container mt-4 mb-4">
        <div class="card" style="padding: 30px;border-radius: 10px;" id="stepFirst">
            {{-- <div class="alert alert-warning" role="alert">
                <i class="bi bi-exclamation-triangle-fill"></i>
                Absensi hanya bisa diisi 1 kali dan harus berada radius lingkungan kantor LPK ACC Japan centre!
            </div> --}}
            {{-- <form id="absensiForm">
                @csrf
                <div class="mb-3">
                    <label class="fw-bold">Gelombang</label>
                    <select name="gelombang" id="gelombang" class="form-select" required>
                        <option value="">Pilih Gelombang - Bulan - Tahun</option>
                        @foreach($gelombang as $key => $bulanList)
                            <optgroup label="Gelombang {{ $key }}">
                                @foreach($bulanList as $b)
                                    <option value="{{ $b }}">{{ $b }}</option>
                                @endforeach
                            </optgroup>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="fw-bold">Spreedsheet</label>
                    <select name="spreedsheet" id="spreedsheet" class="form-select" required>
                        <option value="">Pilih Spreedsheet</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="fw-bold">Gelombang</label>
                    <select name="gelombang" id="gelombang" class="form-select" required>
                        <option value="">Pilih Gelombang</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="fw-bold">Tanggal</label>
                    <select name="tanggal" id="tanggal" class="form-select" required>
                        <option value="">Pilih Tanggal</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="fw-bold">Nama Siswa</label>
                    <select name="nama" id="nama" class="form-select" required>
                        <option value="">Pilih Nama Siswa</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="fw-bold">Keterangan</label>
                    <select name="keterangan" class="form-select" required>
                        <option value="">Pilih Keterangan</option>
                        <option value="Hadir">Hadir</option>
                        <option value="Izin">Izin</option>
                        <option value="Sakit">Sakit</option>
                        <option value="Alpa">Alpa</option>
                        <option value="Mensetsu">Mensetsu</option>
                        <option value="Pemantapan">Pemantapan</option>
                        <option value="Cuti">Cuti</option>
                        <option value="MD">MD</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success mt-3">Submit</button>
            </form> --}}

            <div class="alert alert-warning" role="alert">
                <i class="bi bi-exclamation-triangle-fill"></i>
                Silahkan refresh halaman jika terjadi error, mohon koneksi internet diaktifkan jika tidak bisa menggunakan Wi-Fi gunakan jaringan data seluler dan tunggu load data hingga selesai kemudian lakukan isi formulir.
            </div>
            <form id="absensiForm">
                @csrf
                <div class="mb-3">
                    <label class="fw-bold">Spreedsheet</label>
                    <select name="spreedsheet" id="spreedsheet" class="form-select" required>
                        <option value="">Pilih Spreedsheet</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="fw-bold">Gelombang</label>
                    <select name="gelombang" id="gelombang" class="form-select" required>
                        <option value="">Pilih Gelombang</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="fw-bold">Tanggal</label>
                    <select name="tanggal" id="tanggal" class="form-select" required>
                        <option value="">Pilih Tanggal</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="fw-bold">Nama Siswa</label>
                    <select name="nama" id="nama" class="form-select" required>
                        <option value="">Pilih Nama Siswa</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="fw-bold">Keterangan</label>
                    <select name="keterangan" class="form-select" required>
                        <option value="">Pilih Keterangan</option>
                        <option value="Hadir">Hadir</option>
                        <option value="Izin">Izin</option>
                        <option value="Sakit">Sakit</option>
                        <option value="Alpa">Alpa</option>
                        <option value="Mensetsu">Mensetsu</option>
                        <option value="Pemantapan">Pemantapan</option>
                        <option value="Cuti">Cuti</option>
                        <option value="MD">Mengundurkan Diri</option>
                        <option value="Naik Gelombang">Naik Gelombang</option>
                        <option value="Turun Gelombang">Turun Gelombang</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success mt-3">Submit</button>
            </form>
        </div>
    </div>

    @include('landing.footer')

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
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
    {{-- <script>
        let allData = {};
        let gelombangMap = {};
        let links = {};

        $(document).ready(function(){
            Swal.fire({
                icon: 'warning',
                title: 'Sedang load data, mohon tunggu sebentar..',
                toast: true,
                position: 'top',
                timer: 25000,
                showConfirmButton: false
            });

            // Fetch data dari server
            $.ajax({
                url: "{{ route('absensi.data') }}",
                type: 'GET',
                success: function(res){
                    allData = res.allData || {};
                    gelombangMap = res.gelombang || {};
                    links = res.links || {};

                    // Populate spreadsheet
                    let html = '<option value="">Pilih Spreedsheet</option>';
                    Object.keys(gelombangMap).forEach(spread => {
                        html += `<option value="${spread}">Spreedsheet Gelombang ${spread}</option>`;
                    });
                    $('#spreedsheet').html(html);

                    Swal.fire({
                        icon: 'success',
                        title: 'Data berhasil di-load!',
                        toast: true,
                        position: 'top',
                        timer: 2000,
                        showConfirmButton: false
                    });
                },
                error:function(){
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal load data',
                        text: 'Cek koneksi atau Apps Script'
                    });
                }
            });

            // Pilih Spreadsheet → populate Gelombang
            $('#spreedsheet').on('change', function(){
                const spreedsheet = $(this).val();
                $('#gelombang').html('<option value="">Pilih Gelombang</option>');
                $('#tanggal').html('<option value="">Pilih Tanggal</option>');
                $('#nama').html('<option value="">Pilih Nama Siswa</option>');

                if(!spreedsheet) return;

                const gels = gelombangMap[spreedsheet] || [];
                gels.forEach(g => {
                    const link = links[g] || '';
                    $('#gelombang').append(`<option value="${g}" data-link="${link}">${g}</option>`);
                });
            });

            // Pilih Gelombang → populate Tanggal & Nama
            $('#gelombang').on('change', function(){
                const gelombang = $(this).val();
                $('#tanggal').html('<option value="">Pilih Tanggal</option>');
                $('#nama').html('<option value="">Pilih Nama Siswa</option>');

                if(!gelombang) return;

                const sheetData = allData[gelombang] || [];
                let namaSet = new Set();

                sheetData.forEach(row => {
                    if(row.NAMA) namaSet.add(row.NAMA);
                });

                namaSet.forEach(n => $('#nama').append(new Option(n, n)));

                // Tanggal bisa 1–31
                for(let i=1; i<=31; i++){
                    $('#tanggal').append(new Option(i, i));
                }
            });

            // Submit form
            $('#absensiForm').submit(function(e){
                e.preventDefault();

                let gelombangOption = $('#gelombang option:selected');
                let linkScript = gelombangOption.data('link');

                if(!linkScript){
                    Swal.fire({icon:'error', title:'Error', text:'Link Apps Script tidak ditemukan'});
                    return;
                }

                let formData = {
                    link_script: linkScript,
                    gelombang: gelombangOption.val(),
                    tanggal: $('#tanggal').val(),
                    nama: $('#nama').val(),
                    keterangan: $('select[name="keterangan"]').val()
                };

                Swal.fire({title:'Mengirim data...', didOpen:()=>Swal.showLoading(), allowOutsideClick:false});

                $.ajax({
                    url: "{{ route('absensi.store') }}",
                    type: 'POST',
                    data: formData,
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    success: function(res){
                        Swal.close();
                        if(res.status === 'success'){
                            Swal.fire({icon:'success', title:'Berhasil', text:res.message});
                            $('#nama').val('').trigger('change');
                            $('select[name="keterangan"]').val('').trigger('change');
                        } else if(res.status === 'exists'){
                            Swal.fire({icon:'warning', title:'Warning', text:res.message});
                        } else {
                            Swal.fire({icon:'error', title:'Gagal', text:res.message});
                        }
                    },
                    error: function(xhr){
                        Swal.close();
                        let msg = xhr.responseJSON?.message || 'Terjadi kesalahan';
                        Swal.fire({icon:'error', title:'Error', text:msg});
                    }
                });
            });
        });
    </script> --}}

    <script>
        let allData = {};
        let gelombangMap = {};
        let links = {};
        let link_spreedsheet = "https://script.google.com/macros/s/AKfycbzcXEhB1_m4pS2oXks6ewEkcwWigi3v7-2coXlhPHNvuv6LkPPeVjnC09g0-fRdfKpA_A/exec";

        $(document).ready(function() {
            // Swal.fire({
            //     icon: 'info',
            //     title: 'Sedang memuat data...',
            //     text: 'Mohon tunggu sebentar.',
            //     allowOutsideClick: false,
            //     didOpen: () => Swal.showLoading()
            // });

            Swal.fire({
                icon: 'warning',
                title: 'Sedang load data, mohon tunggu sebentar..',
                toast: true,
                position: 'top',
                timer: 25000,
                showConfirmButton: false
            });
            
            fetch(link_spreedsheet)
                .then(response => response.json())
                .then(res => {
                    Swal.close();
                    allData = {};
                    gelombangMap = {};
                    links = {};

                    let appsList = res.Data || [];

                    let promises = appsList.map(item => {
                        let linkApp = item['Link App Script']?.trim();
                        if (!linkApp) return Promise.resolve();

                        return fetch(linkApp)
                            .then(r => r.text())
                            .then(raw => {
                                raw = raw.replace(/^\)\]\}\'?\n?/, '');
                                let data = JSON.parse(raw);
                                Object.entries(data).forEach(([sheetName, rows]) => {
                                    allData[sheetName] = [...(allData[sheetName] || []), ...rows];
                                    links[sheetName] = linkApp;

                                    if (/(?:KM)?(\d+)/i.test(sheetName)) {
                                        let g = sheetName.match(/^(?:KM)?(\d+)/i)[0];
                                        if (!gelombangMap[g]) gelombangMap[g] = [];
                                        gelombangMap[g].push(sheetName);
                                    }
                                });
                            })
                            .catch(err => console.warn('Gagal ambil', linkApp, err));
                    });

                    Promise.all(promises).then(() => {
                        Swal.fire({
                            icon: 'success',
                            title: 'Data berhasil dimuat!',
                            toast: true,
                            position: 'top',
                            timer: 2500,
                            showConfirmButton: false
                        });

                        // Populate spreadsheet dropdown
                        let html = '<option value="">Pilih Spreedsheet</option>';
                        Object.keys(gelombangMap).forEach(spread => {
                            html += `<option value="${spread}">Spreedsheet Gelombang ${spread}</option>`;
                        });
                        $('#spreedsheet').html(html);
                    });
                })
                .catch(err => {
                    Swal.close();
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal load data',
                        text: 'Pastikan koneksi aktif dan Apps Script bisa diakses.'
                    });
                    console.error(err);
                });

            // Pilih Spreedsheet → populate Gelombang
            $('#spreedsheet').on('change', function() {
                const spreedsheet = $(this).val();
                $('#gelombang').html('<option value="">Pilih Gelombang</option>');
                $('#tanggal').html('<option value="">Pilih Tanggal</option>');
                $('#nama').html('<option value="">Pilih Nama Siswa</option>');
                if (!spreedsheet) return;

                const gels = gelombangMap[spreedsheet] || [];
                gels.forEach(g => {
                    const link = links[g] || '';
                    $('#gelombang').append(`<option value="${g}" data-link="${link}">${g}</option>`);
                });
            });

            // Pilih Gelombang → populate Nama & Tanggal
            $('#gelombang').on('change', function() {
                const gelombang = $(this).val();
                $('#tanggal').html('<option value="">Pilih Tanggal</option>');
                $('#nama').html('<option value="">Pilih Nama Siswa</option>');

                if (!gelombang) return;
                const sheetData = allData[gelombang] || [];
                let namaSet = new Set();

                sheetData.forEach(row => {
                    if (row.NAMA) namaSet.add(row.NAMA);
                });

                namaSet.forEach(n => $('#nama').append(new Option(n, n)));
                for (let i = 1; i <= 31; i++) {
                    $('#tanggal').append(new Option(i, i));
                }
            });

            // Submit Form → kirim ke Apps Script via Laravel
            $('#absensiForm').submit(function(e) {
                e.preventDefault();

                let gelombangOption = $('#gelombang option:selected');
                let linkScript = gelombangOption.data('link');
                if (!linkScript) {
                    Swal.fire({ icon: 'error', title: 'Error', text: 'Link Apps Script tidak ditemukan' });
                    return;
                }

                let formData = {
                    link_script: linkScript,
                    gelombang: gelombangOption.val(),
                    tanggal: $('#tanggal').val(),
                    nama: $('#nama').val(),
                    keterangan: $('select[name="keterangan"]').val()
                };

                Swal.fire({ title: 'Mengirim data...', didOpen: () => Swal.showLoading(), allowOutsideClick: false });

                $.ajax({
                    url: "{{ route('absensi.store') }}",
                    type: 'POST',
                    data: formData,
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    success: function(res) {
                        Swal.close();
                        if (res.status === 'success') {
                            Swal.fire({ icon: 'success', title: 'Berhasil', text: res.message });
                        } else if (res.status === 'exists') {
                            Swal.fire({ icon: 'warning', title: 'Sudah Pernah Isi', text: res.message });
                        } else {
                            Swal.fire({ icon: 'error', title: 'Gagal', text: res.message });
                        }
                    },
                    error: function(xhr) {
                        Swal.close();
                        let msg = xhr.responseJSON?.message || 'Terjadi kesalahan';
                        Swal.fire({ icon: 'error', title: 'Error', text: msg });
                    }
                });
            });
        });
    </script>
</body>

</html>
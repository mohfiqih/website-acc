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
                    <h2 style="text-align: center"></span>FORMULIR ABSENSI SISWA LPK ACC JAPAN CENTRE</h2>
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

    <div class="container mt-4 mb-4">
        <div class="card" style="padding: 30px;border-radius: 10px;" id="stepFirst">
          {{-- <div class="alert alert-warning" role="alert">
              <i class="bi bi-exclamation-triangle-fill"></i>
              Absensi hanya bisa diisi 1 kali dan harus berada radius lingkungan kantor LPK ACC Japan centre!
          </div> --}}
          <form id="absensiForm">
            @csrf
            {{-- <div class="mb-3">
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
            </div> --}}
            <div class="mb-3">
                <label class="fw-bold">Gelombang</label>
                <select name="gelombang" id="gelombang" class="form-select" required>
                    <option value="">Pilih Gelombang</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="fw-bold">Tanggal</label>
                <select name="hari" id="tanggal" class="form-select" required>
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
        let allData = @json($allData);

        const gelombangSelect = document.getElementById('gelombang');
        const namaSelect      = document.getElementById('nama');
        const tanggalSelect   = document.getElementById('tanggal');
        const absensiForm     = document.getElementById('absensiForm');

        // =====================================
        // Radius office (sementara di-hide)
        // const officeLat       = -6.9472685;
        // const officeLng       = 109.1105625;
        // const allowedRadius   = 150;
        // function getDistanceFromLatLonInMeters(lat1, lon1, lat2, lon2) {
        //     const R = 6371000;
        //     const dLat = (lat2 - lat1) * Math.PI / 180;
        //     const dLon = (lon2 - lon1) * Math.PI / 180;
        //     const a = 
        //         Math.sin(dLat/2) * Math.sin(dLat/2) +
        //         Math.cos(lat1 * Math.PI / 180) * Math.cos(lat2 * Math.PI / 180) *
        //         Math.sin(dLon/2) * Math.sin(dLon/2);
        //     const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
        //     return R * c;
        // }

        // function disableForm(disable) {
        //     const elements = absensiForm.querySelectorAll('input, select, textarea, button');
        //     elements.forEach(el => el.disabled = disable);
        // }

        // function checkRadius() {
        //     if(navigator.geolocation){
        //         navigator.geolocation.getCurrentPosition(function(position){
        //             const distance = getDistanceFromLatLonInMeters(
        //                 officeLat, officeLng,
        //                 position.coords.latitude, position.coords.longitude
        //             );

        //             if(distance <= allowedRadius){
        //                 disableForm(false);
        //             } else {
        //                 disableForm(true);
        //                 Swal.fire({
        //                     icon: 'warning',
        //                     title: 'Anda di Luar Area',
        //                     text: 'Form absensi ini hanya bisa diisi di lingkungan kantor, radius 100 meter dari gedung LPK ACC Japan Centre!'
        //                 });
        //             }
        //         }, function(error){
        //             disableForm(true);
        //             Swal.fire({
        //                 icon: 'error',
        //                 title: 'Gagal Mendapatkan Lokasi',
        //                 text: 'Izinkan lokasi untuk bisa mengisi absensi'
        //             });
        //         }, { enableHighAccuracy: true });
        //     } else {
        //         disableForm(true);
        //         Swal.fire({
        //             icon: 'error',
        //             title: 'Browser Tidak Mendukung Geolocation',
        //             text: 'Form absensi tidak dapat digunakan'
        //         });
        //     }
        // }

        // checkRadius();
        // setInterval(checkRadius, 5000);
        // =====================================

        gelombangSelect.addEventListener('change', function() {
            let sheet = this.value;
            namaSelect.innerHTML = '<option value="">-- Pilih Nama --</option>';
            tanggalSelect.innerHTML = '<option value="">-- Pilih Tanggal --</option>';

            if(allData[sheet]){
                allData[sheet].forEach(item => {
                    if(item.NAMA){
                        let opt = document.createElement('option');
                        opt.value = item.NAMA;
                        opt.text = item.NAMA;
                        namaSelect.appendChild(opt);
                    }
                });

                let headers = Object.keys(allData[sheet][0]).filter(h => h !== "NAMA");
                headers.forEach(h => {
                    let opt = document.createElement('option');
                    opt.value = h;
                    opt.text = h;
                    tanggalSelect.appendChild(opt);
                });
            }
        });

        $('#absensiForm').submit(function(e){
            e.preventDefault();

            let formData = {};
            $(this).serializeArray().forEach(item => formData[item.name] = item.value);

            Swal.fire({
                title: 'Mengirim data...',
                text: 'Mohon Tunggu sebentar',
                didOpen: () => Swal.showLoading(),
                allowOutsideClick: false
            });

            $.ajax({
                url: "{{ route('absensi.store') }}",
                type: 'POST',
                data: formData,
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                success: function(res){
                    Swal.close();
                    if(res.status === 'success'){
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: res.message
                        });
                        $('#absensiForm')[0].reset();
                        namaSelect.innerHTML = '<option value="">Pilih Nama Siswa</option>';
                        tanggalSelect.innerHTML = '<option value="">Pilih Tanggal</option>';
                    } else if(res.status === 'exists'){
                        Swal.fire({
                            icon: 'warning',
                            title: 'Warning',
                            text: res.message
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal!',
                            text: res.message
                        });
                    }
                },
                error: function(xhr){
                    Swal.close();
                    let msg = xhr.responseJSON?.message || 'Terjadi kesalahan, coba lagi.';
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: msg
                    });
                }
            });
        });
    </script> --}}
    
    <script>
        let allData = {};

        $(document).ready(function(){
            Swal.fire({
                title: 'Sedang load data...',
                text: 'Mohon tunggu sebentar',
                didOpen: () => Swal.showLoading(),
                allowOutsideClick: false
            });
            $.ajax({
                url: "{{ route('absensi.data') }}",
                type: 'GET',
                success: function(res){
                    allData = res.allData || {};

                    let html = '<option value="">Pilih Gelombang</option>';
                    for(let g in res.gelombang){
                        html += `<optgroup label="Gelombang ${g}">`;
                        res.gelombang[g].forEach(b => html += `<option value="${b}">${b}</option>`);
                        html += `</optgroup>`;
                    }
                    $('#gelombang').html(html);
                        Swal.fire({
                        icon: 'success',
                        title: 'Data berhasil di-load!',
                        toast: true,
                        position: 'top',
                        timer: 3000,
                        showConfirmButton: false
                    });
                },
                error:function(){
                    alert('Gagal load data');
                }
            });

            $('#gelombang').on('change', function(){
                let sheet = $(this).val();
                $('#nama').html('<option>-- Pilih Nama --</option>');
                $('#tanggal').html('<option>-- Pilih Tanggal --</option>');

                if(allData[sheet]){
                    allData[sheet].forEach(item=>{
                        if(item.NAMA) $('#nama').append(`<option value="${item.NAMA}">${item.NAMA}</option>`);
                    });
                    let headers = Object.keys(allData[sheet][0]).filter(h=>'NAMA'!==h);
                    headers.forEach(h=>$('#tanggal').append(`<option value="${h}">${h}</option>`));
                }
            });

        });
    </script>
</body>

</html>
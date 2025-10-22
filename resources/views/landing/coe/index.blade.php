<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Data COE Siswa</title>
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
                    <h2 style="text-align: center"></span>DATA COE SISWA LPK ACC JAPAN CENTRE</h2>
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

    {{-- Formulir --}}
    <div class="container mt-4 mb-4">
        <div class="card" style="padding: 30px;border-radius: 10px;" id="stepFirst">
          <div class="alert alert-primary" role="alert">
              Formulir Data COE Turun LPK ACC Japan Centre
          </div>
          <form id="coeForm">
            @csrf
            <div class="mb-3">
                <label class="fw-bold">Nama SO</label>
                <select name="nama_so" id="nama_so" class="form-select" required>
                    <option value="">Pilih Nama SO</option>
                    @foreach($nama_so as $so)
                        <option value="{{ $so }}">{{ $so }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="fw-bold">Nama Siswa</label>
                <input type="text" class="form-control" name="nama_siswa" placeholder="Masukan nama lengkap siswa.." required>
            </div>
            <div class="mb-3">
                <label class="fw-bold">Tanggal</label>
                <input type="date" class="form-control" name="tanggal_penerbangan" required>
            </div>
            <button type="submit" class="btn btn-success mt-3">Submit Data</button>
        </form>
        </div>
    </div>

    {{-- Data COE --}}
    <div class="container">
        <div class="card p-3" style="border-radius: 10px;">
            <div class="d-flex justify-content-between align-items-center mb-3 mt-2">
                <h5 class="fw-bold mb-0">Data COE SISWA</h5>
                <a href="https://docs.google.com/spreadsheets/d/1DHKx-TLLpP7PXwDo5ps9Snzk9XMi8Md3nk6Zgvl0UQ4/edit?gid=1983605501#gid=1983605501"
                target="_blank"
                class="btn btn-success btn-sm d-flex align-items-center gap-2 px-3 py-2"
                style="border-radius: 8px;">
                    <i class="fa fa-file"></i>
                    <span>Lihat Spreadsheet</span>
                </a>
            </div>
            <ul class="nav nav-tabs" id="coeTabs" role="tablist">
                @php $first = true; @endphp
                @foreach($allData as $so => $items)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $first ? 'active' : '' }}" id="tab-{{ Str::slug($so) }}-tab"
                            data-bs-toggle="tab" data-bs-target="#tab-{{ Str::slug($so) }}" type="button"
                            role="tab" aria-controls="tab-{{ Str::slug($so) }}"
                            aria-selected="{{ $first ? 'true' : 'false' }}">
                            {{ $so }}
                        </button>
                    </li>
                    @php $first = false; @endphp
                @endforeach
            </ul>

            <div class="tab-content mt-3" id="coeTabsContent">
                @php $first = true; @endphp
                @foreach($allData as $so => $items)
                    <div class="tab-pane fade {{ $first ? 'show active' : '' }}" id="tab-{{ Str::slug($so) }}"
                        role="tabpanel" aria-labelledby="tab-{{ Str::slug($so) }}-tab">
                        <div class="table-responsive mt-4 mb-4">
                            <table class="table table-striped table-bordered align-middle coeTable" id="coeTable-{{ Str::slug($so) }}">
                                <thead class="table-primary">
                                    <tr class="text-center">
                                        <th width="10">No</th>
                                        <th>Nama SO</th>
                                        <th>Nama Siswa</th>
                                        <th>Tanggal Penerbangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($items as $row)
                                        @php
                                            $tanggal = $row['TANGGAL PENERBANGAN'] ?? '-';
                                            if ($tanggal && $tanggal !== '-') {
                                                try {
                                                    $dateObj = \Carbon\Carbon::parse($tanggal);
                                                    $tanggal = $dateObj->format('d/m/Y');
                                                } catch (\Exception $e) {
                                                    $tanggal = $tanggal;
                                                }
                                            }
                                        @endphp
                                        <tr>
                                            <td class="text-center">{{ $no++ }}</td>
                                            <td>{{ $so }}</td>
                                            <td>{{ $row['NAMA LENGKAP SISWA'] ?? '-' }}</td>
                                            <td>{{ $tanggal }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @php $first = false; @endphp
                @endforeach
            </div>
        </div>
    </div>
    <br/>

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
    <script>
        // pagination
        $(document).ready(function(){
            $('.coeTable').each(function(){
                $(this).DataTable({
                    pageLength: 10,
                    lengthMenu: [5, 10, 20, 50],
                    language: {
                        search: "Cari:",
                        lengthMenu: "Show _MENU_ data",
                        info: "Menampilkan _START_ - _END_ dari _TOTAL_ data",
                        paginate: {
                            previous: "Prev",
                            next: "Next"
                        },
                        emptyTable: "Belum ada data siswa"
                    },
                    initComplete: function() {
                        const wrapper = $(this).closest('.dataTables_wrapper');
                        
                        // jarak antara search & tabel
                        wrapper.find('.dataTables_filter').css({
                            'margin-bottom': '20px',
                            'text-align': 'right'
                        });

                        // jarak antara tabel & pagination
                        wrapper.find('.dataTables_info').css({
                            'margin-top': '20px',
                            'text-align': 'center',
                            'width': '100%'
                        });
                        
                        wrapper.find('.dataTables_paginate').css({
                            'margin-top': '10px',
                            'display': 'flex',
                            'justify-content': 'center'
                        });

                        wrapper.find('.dataTables_length').css({
                            'margin-bottom': '10px'
                        });

                        // Biar tabel gak nempel ke pagination di bawah
                        wrapper.find('table').css({
                            'margin-bottom': '25px'
                        });
                    }
                });
            });
        });

        let allData = @json($allData);

        const nama_so              = document.getElementById('nama_so');
        const nama_siswa           = document.getElementById('nama_siswa');
        const tanggal_penerbangan  = document.getElementById('tanggal_penerbangan');

        $('#coeForm').submit(function(e){
            e.preventDefault();

            let formData = {};
            $(this).serializeArray().forEach(item => formData[item.name] = item.value);

            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: 'Pastikan data yang Anda isi sudah benar.',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'OK',
                cancelButtonText: 'Batal',
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Mengirim data...',
                        text: 'Mohon tunggu sebentar',
                        didOpen: () => Swal.showLoading(),
                        allowOutsideClick: false
                    });

                    $.ajax({
                        url: "{{ route('coe.store') }}",
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
                                $('#coeForm')[0].reset();
                                nama_so.innerHTML             = '<option value="">Pilih Nama SO</option>';
                                nama_siswa.innerHTML          = '';
                                tanggal_penerbangan.innerHTML = '<option value="">Pilih Tanggal</option>';
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
                }
            });
        });
    </script>
</body>

</html>
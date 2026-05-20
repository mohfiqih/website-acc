<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pendaftaran Online LPK ACC Japan Centre</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

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
    <!-- Lity CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.css">
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
    </style>
</head>

<body>
    @include('landing.header')

    <section id="hero" class="hero" style="padding: 10px;">
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
                                    alt="..." data-lity>
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.amanahcitracemerlang.id/templates/assets/img/acc.jpg" class="d-block w-100"
                                    alt="..." dtaa-lity>
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
                    <h2 class="text-justify"></span>FORMULIR PENDAFTARAN ONLINE LPK ACC JAPAN CENTRE</h2>
                    <p style="text-align: justify;" class="justify-content-center">
                        LPK ACC Japan Centre menerima Program Magang, Tokutei Ginou (TG) dan Matching Job. Silahkan Daftarkan diri anda di LPK ACC Japan Centre.
                    </p>
                    <ul>
                        <li class="text-white">LPK ACC Japan Centre berlokasi di Dukuh. Gitung, Desa Harjosari Lor, Kecamatan Adiwerna, Kabupaten Tegal, Jawa Tengah 52194.</li>
                        <li class="text-white">LPK ACC Japan Centre lembaga Resmi, Amanah dan Legal.</li>
                        <li class="text-white">Gratis Biaya Pendaftaran!!!</li>
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
        <div class="card" style="padding: 30px;border-radius: 10px;">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pendaftaran Online</li>
                </ol>
            </nav>
            <div class="signup-content">
                <form action="{{ url('/pendaftaran-online') }}" method="POST" class="signup-form">
                    @csrf            
                    @if(session('success'))
                        <p style="color: green;">{{ session('success') }}</p>
                    @endif

                    @if(session('error'))
                        <p style="color: red;">{{ session('error') }}</p>
                    @endif
                    <div class="form-group">
                        <label class="text-label" for="email" style="font-weight: bold">Email Aktif:</label>
                        <input type="email" class="form-control" name="email" placeholder="Masukan email aktif anda.." required>
                    </div>
                    <div class="form-group">
                        <label class="text-label" for="nama_lengkap" style="font-weight: bold">Nama Lengkap:</label>
                        <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukan lama lengkap anda.." required>
                    </div>
                    <div class="form-group">
                        <label class="text-label" for="nomor_hp" style="font-weight: bold">WhatsApp:</label>
                        <input type="text" class="form-control" name="nomor_hp" placeholder="Masukan nomor hp/whatsapp anda.." required>
                    </div>
                    <div class="form-group">
                        <label class="text-label" for="tempat_lahir" style="font-weight: bold">Tempat Lahir:</label>
                        <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukan tempat lahir anda.." required>
                    </div>
                    <div class="form-group">
                        <label class="text-label" for="tanggal_lahir" style="font-weight: bold">Tanggal Lahir:</label>
                        <input type="date" class="form-control" name="tanggal_lahir" placeholder="Pilih tanggal lahir anda.." required>
                    </div>
                    <div class="form-group">
                        <label class="text-label" for="jenis_kelamin" style="font-weight: bold">Jenis Kelamin:</label>
                        <select name="jenis_kelamin" class="form-control" required>
                            <option value="" disabled selected>Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-label" for="alamat" style="font-weight: bold">Alamat Lengkap:</label>
                        <textarea rows="5" name="alamat" class="form-control" placeholder="Masukan alamat lengkap anda.." required></textarea>
                    </div>
                    <div class="form-group">
                        <label class="text-label" for="asal_provinsi" style="font-weight: bold">Asal Provinsi:</label>
                        <select class="form-control" name="asal_provinsi" id="asal_provinsi" required>
                            <option value="" disabled selected>Pilih Asal Provinsi</option>
                            @foreach($provinsi as $p)
                                <option value="{{ $p->name }}">{{ $p->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-label" for="tempat_tinggal" style="font-weight: bold">Tempat Tinggal Sekarang:</label>
                        <input type="text" class="form-control" name="tempat_tinggal" placeholder="Masukan tempat tinggal sekarang.." required>
                    </div>
                    <div class="form-group">
                        <label class="text-label" for="tinggi_badan" style="font-weight: bold">Tinggi Badan (cm):</label>
                        <input type="number" class="form-control" name="tinggi_badan" placeholder="Masukan tinggi badan anda.." required>
                    </div>
                    <div class="form-group">
                        <label class="text-label" for="berat_badan" style="font-weight: bold">Berat Badan (kg):</label>
                        <input type="number" class="form-control" name="berat_badan" placeholder="Masukan berat badan anda.." required>
                    </div>
                    <div class="form-group">
                        <label class="text-label" for="agama" style="font-weight: bold">Agama:</label>
                        <select name="agama" class="form-control" required>
                            <option value="" disabled selected>Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen Protestan">Kristen Protestan</option>
                            <option value="Kristen Katolik">Kristen Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-label" for="pendidikan_terakhir" style="font-weight: bold">Pendidikan Terakhir:</label>
                        <select name="pendidikan_terakhir" class="form-control" required>
                            <option value="" disabled selected>Pilih Pendidikan Terakhir</option>
                            <option value="SMA/SMK">SMA/SMK</option>
                            <option value="Diploma III (D-III)">Diploma III (D-III)</option>
                            <option value="Sarjana/Diploma IV (D-IV)">Sarjana/Diploma IV (D-IV)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-label" for="status_pernikahan" style="font-weight: bold">Status:</label>
                        <select name="status_pernikahan" class="form-control" required>
                            <option value="" disabled selected>Pilih Status</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Sudah Menikah">Sudah Menikah</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-label" for="pengalaman_kerja" style="font-weight: bold">Pengalaman Kerja:</label>
                        <textarea type="text" rows="5" class="form-control" name="pengalaman_kerja" placeholder="Masukan pengalaman kerja anda.." required></textarea>
                    </div>
                    <div class="form-group">
                        <label class="text-label" for="bahasa_asing" style="font-weight: bold">Bahasa Asing Yang dikuasai:</label>
                        <select name="bahasa_asing[]" class="form-control" multiple="multiple" id="bahasa_asing" required>
                            <option value="Inggris">Inggris</option>
                            <option value="Jepang">Jepang</option>
                            <option value="Korea">Korea</option>
                            <option value="Mandarin">Mandarin</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>                 
                    <div class="form-group">
                        <label class="text-label" for="program_diambil" style="font-weight: bold">Program Pendidikan:</label>
                        <select name="program_diambil" class="form-control" required>
                            <option value="" disabled selected>Pilih Program Yang diambil</option>
                            <option value="Magang Jepang (Jisshusei)">Magang Jepang (Jisshusei)</option>
                            <option value="Tokutei Ginou (TG)">Tokutei Ginou (TG)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-label" for="fasilitas" style="font-weight: bold">Biaya Pendidikan:</label>
                        <select name="fasilitas" class="form-control" required>
                            <option value="" disabled selected>Pilih Biaya (Sesuaikan dengan Program Yang diambil)</option>
                            <option value="Pendidikan Bahasa Jepang Rp.600.000,- / Bulan (Kelas Pagi Jam 08.30 -15.00 WIB)">Pendidikan Bahasa Jepang Rp.600.000,- / Bulan (Kelas Pagi Jam 08.30 -15.00 WIB)</option>
                            <option value="Pendidikan Bahasa Jepang Rp.800.000,- / Bulan (Kelas Malam Jam 18.30 - 22.00 WIB)">Pendidikan Bahasa Jepang Rp.800.000,- / Bulan (Kelas Malam Jam 18.30 - 22.00 WIB)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-label" for="nama_mentor" style="font-weight: bold">Nama Mentor:</label>
                        <input type="text" class="form-control" name="nama_mentor" placeholder="(Jika belum tau konfirmasikan melalui chat whatsapp)" required>
                    </div>
                    <div class="form-group">
                        <label class="text-label" for="tanggal_pendaftaran" style="font-weight: bold">Tanggal Pendaftaran:</label>
                        <input type="date" class="form-control" name="tanggal_pendaftaran" required>
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary" style="cursor: pointer;width: 100%;background-color: #046392;">DAFTAR</button>
                    </div>                        
                </form>
            </div>
        </div>
    </div>

    <section class="testimonials" id="galeri">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Galeri LPK ACC Japan Centre</h2>
            </div>
            <div class="row">
                @foreach ($images_db as $image)
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('storage/' . $image->filepath) }}" class="card-img-top lazyload" alt="Image" data-lity style="height: 100%; object-fit: cover;height: 300px;">
                            </div>
                            <div class="card-footer text-body-secondary">
                                <b>Date:</b> {{ $image->created_at }}<br/>
                                {{ \Carbon\Carbon::parse($image->created_at)->diffForHumans() }}
                            </div>
                        </div><br/>
                    </div>
                @endforeach
            </div>
    
            <!-- Custom Pagination -->
            <div class="pagination-container" style="padding: 0px;">
                <ul class="pagination">
                    @if ($images_db->onFirstPage())
                        <li class="disabled"><span>&lt;</span></li>
                    @else
                        <li><a class="text-white" style="background-color: #046392" href="{{ $images_db->previousPageUrl() }}#galeri" rel="prev">&lt;</a></li>
                    @endif
            
                    @foreach ($images_db->links()->elements[0] as $page => $url)
                        @if ($page == $images_db->currentPage())
                            <li class="active"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}#galeri">{{ $page }}</a></li>
                        @endif
                    @endforeach
            
                    @if ($images_db->hasMorePages())
                        <li><a class="text-white" style="background-color: #046392" href="{{ $images_db->nextPageUrl() }}#galeri" rel="next">&gt;</a></li>
                    @else
                        <li class="disabled"><span>&gt;</span></li>
                    @endif
                </ul>
            </div>            
        </div>
    </section>    

    <div id="preloader"></div>

    @include('landing.footer')

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            if (window.location.hash === "#galeri") {
                document.getElementById("galeri").scrollIntoView({ behavior: "smooth" });
            }
        });

        $(window).on('load', function() {
            $('#preloader').fadeOut('slow');
        });

        $("#bahasa_asing").select2({
            placeholder: {
                id: "",
                text: "Pilih Bahasa Asing yang dikuasai",
                selected: "Pilih Bahasa Asing yang dikuasai",
            },
        });

        // insert data
        $(document).ready(function() {
            $('.signup-form').on('submit', function(e) {
                e.preventDefault();

                let bahasaAsing = $('#bahasa_asing').val();
                if (bahasaAsing) {
                    let bahasaAsingString = bahasaAsing.join(',');
                    $('<input>').attr({
                        type: 'hidden',
                        name: 'bahasa_asing_hidden',
                        value: bahasaAsingString
                    }).appendTo('.signup-form');
                }
    
                Swal.fire({
                    title: 'Apakah Anda yakin ingin mendaftarkan diri?',
                    text: 'Pastikan data yang sudah anda masukan sesuai dan benar!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'OK',
                    cancelButtonText: 'Batal',
                    confirmButtonColor: '#046392'
                }).then((result) => {
                    if (result.isConfirmed) {
                        var form = $(this);
                        var formData = form.serialize();
    
                        Swal.fire({
                            text: 'Mohon tunggu sedang memproses pendaftaran..',
                            icon: 'warning',
                            showConfirmButton: false,
                            willOpen: () => {
                                Swal.showLoading();
                            }
                        });
    
                        $.ajax({
                            url: form.attr('action'),
                            type: 'POST',
                            data: formData,
                            success: function(response) {
                                if (response.success) {
                                    Swal.fire({
                                        title: 'Berhasil!',
                                        text: 'Berhasil daftar di LPK ACC Japan Centre!',
                                        icon: 'success',
                                        timer: 3000,
                                        showConfirmButton: false,
                                    }).then(() => {
                                        location.reload();
                                    });
                                } else {
                                    Swal.fire({
                                        title: 'Gagal!',
                                        text: 'Terjadi kesalahan saat mengirim data.',
                                        icon: 'error',
                                        confirmButtonText: 'Tutup'
                                    });
                                }
                            },
                        });
                    }
                });
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
    <!-- Lity JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.js"></script>
</body>

</html>

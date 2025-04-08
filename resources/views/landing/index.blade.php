<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>LPK Amanah Citra Cemerlang</title>
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
    <link href="{{ asset('template_pendaftaran/css/profile.css?v=1.0') }}" rel="stylesheet">
    <!-- Lity CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.css">
    <style>
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
    </style>
</head>

<body>
    @include('landing.header')

    <section id="hero" class="hero" style="padding-top: 20px;">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in" style="">
                <div class="col-lg-6 order-2  d-flex flex-column justify-content-center text-center text-lg-start">
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
                                    alt="..." data-lity>
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
                <div class="col-lg-6 order-1 order-lg-2 justify-content-center" style="padding: 0px 30px 0 20px;">
                    <p class="justify-content-center;">
                        Welcome to LPK ACC Japan Centre 👋
                    </p>
                    <h2>LPK Amanah Citra Cemerlang (ACC Japan Centre)</span></h2>
                    <p class="justify-content-center;">
                        <i class="fa fa-map-pin" style="padding-right: 10px;"></i>
                        Adiwerna, Kabupaten Tegal,
                        Central Java</p>
                    <p style="text-align: justify;" class="justify-content-center">LPK ACC telah
                        membimbing dan
                        membina banyak anak hingga berangkat bekerja di Luar Negeri khususnya Negara Jepang. LPK ACC Japan Centre memiliki program diantaranya
                        Program Magang, Program Tokutei Ginou dan Matching Job. ACC Japan Centre memiliki banyak Job dari berbagai sektor kerja di Jepang.
                    </p>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <marquee scrollamount="10"><b>Announcement!</b> LPK Amanah Citra Cemerlang tidak membuka
                            cabang diwilayah
                            <b>Kota Tegal/sekitarnya!</b> apabila ada lembaga atau perorangan mengatasnamakan kami mohon
                            diklarifikasikan terlebih dahulu kepada kami, dan kami tidak bertanggung jawab apabila ada
                            oknum yang mengaku cabang kami! Terimakasih
                        </marquee>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>

                    <div class="d-flex justify-content-center justify-content-lg-start text-center">
                        <a href="{{ url('/pendaftaran-siswa-baru') }}" class="btn-get-started" style="width: 100%;">
                            <i class="bi bi-book"></i>
                            Daftar
                        </a>
                        <a href="https://www.youtube.com/@AmanahCitraCemerlang" class="btn-get-started" style="width: 100%;">
                            <i class="bi bi-play-circle"></i>
                            YouTube
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="row gy-4 mt-2">
                    <div class="col-xl-4 col-md-12" style="border-color: azure">
                        <div class="icon-box">
                            <p class="title" style="margin-top: 10px;">
                                <a href="#" class="stretched-link"><i class="bi bi-book"
                                        style="padding-right: 10px;"></i>
                                    Program Magang
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12">
                        <div class="icon-box">
                            <p class="title" style="margin-top: 10px;">
                                <a href="#" class="stretched-link"><i class="bi bi-book"
                                        style="padding-right: 10px;"></i>
                                    Program Tokutei Ginou
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12">
                        <div class="icon-box">
                            <p class="title" style="margin-top: 10px;">
                                <a href="#" class="stretched-link"><i class="bi bi-book"
                                        style="padding-right: 10px;"></i>
                                    Program Matching Job</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main id="main" style="padding: 10px;">
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="col-md-12">
                    <div class="panel">
                        {{-- <button class="btn btn-warning pull-right" style="border-radius: 0px;">Profil</button> --}}
                        <footer class="panel-footer">
                            <ul class="nav nav-pills">
                                <li>
                                    <a href="#"></a>
                                </li>
                                <li>
                                    <a href="#"></a>
                                </li>
                                <li>
                                    <a href="#"></a>
                                </li>
                                <li>
                                    <a href="#"></a>
                                </li>
                            </ul>
                        </footer>
                    </div>
                    <div class="panel">
                        <div class="bio-graph-heading">
                            <p style="font-weight: bold;">Profil LPK Amanah Citra Cemerlang (ACC)</p>
                        </div>
                        <div class="card" style="padding: 30px;">
                            <div class="panel-body bio-graph-info">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <th>Nama Lembaga</th>
                                                        <td>:</td>
                                                        <td>LPK ACC JAPAN CENTRE</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nama Pimpinan</th>
                                                        <td>:</td>
                                                        <td>A. FAUZAN AMRULLOH</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nomor VIN</th>
                                                        <td>:</td>
                                                        <td>2502332801</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tipe Lembaga</th>
                                                        <td>:</td>
                                                        <td>LPK SWASTA</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Kondisi</th>
                                                        <td>:</td>
                                                        <td>Beroprasi</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tahun Berdiri</th>
                                                        <td>:</td>
                                                        <td>2021</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Luas Area</th>
                                                        <td>:</td>
                                                        <td>1042</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Telepon</th>
                                                        <td>:</td>
                                                        <td>085526223070</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nomor Fax.</th>
                                                        <td>:</td>
                                                        <td>085640110822</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email</th>
                                                        <td>:</td>
                                                        <td>amanahcitracemerlang1@gmail.com</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Website</th>
                                                        <td>:</td>
                                                        <td>www.amanahcitracemerlang.id</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Kode Pos</th>
                                                        <td>:</td>
                                                        <td>52194</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Alamat</th>
                                                        <td>:</td>
                                                        <td>LPK ACC Japan Center, Unnamed Road, Gitung, Harjosari Lor, Kec. Adiwerna, Kabupaten Tegal, Jawa Tengah 52194</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Latitude</th>
                                                        <td>:</td>
                                                        <td>-6.9472685</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Longitude</th>
                                                        <td>:</td>
                                                        <td>109.1131374</td>
                                                    </tr>
                                                    <tr>
                                                        <th>NIB</th>
                                                        <td>:</td>
                                                        <td>1280001492217</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>                                    
                                    <div class="col-md-6">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <th>Deskripsi</th>
                                                        <td>:</td>
                                                        <td style="text-align: justify;">LPK ACC JAPAN CENTRE merupakan suatu lembaga pendidikan dan pelatihan bahasa wilayah Jawa Tengah, khususnya Kabupaten/Kota Tegal yang independen berdasarkan Akte Notaris No.19 Tanggal 19 April 2021. Program LPK ACC Japan Centre yaitu Pelatihan Bahasa Jepang, Pelatihan Mental dan Fisik, Program Magang dan TG (Tokutei Ginou) ke Jepang, dan Pelatihan kerja sesuai Job.
                                                            Kami membantu anda menentukan sebuah pilihan, banyak dari kita yang ingin bekerja ke Luar Negeri tetapi tidak tau mau kemana/tujuannya tidak jelas, sehingga beberapa di antara kita asal pilih LPKPT/Meaning Agency dan ujung-ujungnya pekerjaan atau tujuan tidak sesuai dengan apa yang kita harapkan, di LPK kami dalam meningkatkan kualitas dan kuantitas CPMI dengan melalui edukasi masyarakat yang ingin bekerja di Luar Negeri dan banyak diantaranya yang telah kami tolong serta kami bantu karena sebelumnya salah atau kurang tepat memilih tujuan Negara dimana dia mau bekerja
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Maps</th>
                                                        <td>:</td>
                                                        <td style="text-align: justify;">
                                                            <div class="row gx-lg-0 gy-4">
                                                                <div class="col-lg-12">
                                                                    <iframe class="mb-4 mb-lg-0"
                                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.524644510538!2d109.1131374!3d-6.9472685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb913ec72ac99%3A0x15c1e344784a1ea2!2sACC%20Japan%20Centre!5e0!3m2!1sid!2sid!4v1707996435480!5m2!1sid!2sid"
                                                                        frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="alert alert-primary" role="alert">
                            <marquee>Bahasa Adalah Jendela Untuk Melihat Dunia Lebih Luas</marquee>
                        </div>
                        <p style="text-align: justify;padding-right: 10px;"><b>Visi</b><br />Terwujudnya lembaga
                            pelatihan yang
                            kompetitif
                            dan berkualitas dalam usaha, membangun generasi muda yang lebih produktif, kompetitif dan
                            berkualitas di kancah internasional.</p>
                        <p style="text-align: justify;padding-right: 10px;"><b>Misi</b><br />
                            Meningkatkan kualitas dan produktifitas dengan
                            mengembangkan sumber daya manusia (SDM) pelatihan, program dan
                            manajemen pelatihan, melaksanakan program pelatihan dan
                            memperluas jejaring dengan lembaga/instansi lain yang korelasinya
                            ikut mendukung program pemerintah dalam rangka mengurangi
                            pengangguran dan meningkatkan strata ekonomi masyarakat
                            nasional.
                        </p>
                        <div class="position-relative mt-4">
                            <img src="{{ asset('templates/assets/img/acc.jpg') }}" class="img-fluid rounded-4"
                                alt="" data-lity>
                            <a href="{{ url('/galeri') }}" class="play-btn"></a>
                        </div>

                        <div class="position-relative mt-4">
                            <img src="https://lh3.googleusercontent.com/p/AF1QipPBj7J-RI4unahwIDe4sRie09PYD2lKpjSRvM8C=s1360-w1360-h1020"
                                class="img-fluid rounded-4" alt="" data-lity>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative mt-2">
                            <img src="https://www.amanahcitracemerlang.id/storage/images/1738848428_WhatsApp%20Image%202025-02-06%20at%2020.26.16.jpeg"
                                class="img-fluid rounded-4 mb-4" alt="" data-lity>
                        </div>
                        <div class="content ps-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <p style="text-align: justify;">
                                                LPK ACC telah membimbing dan membina banyak anak hingga berangkat bekerja di Luar Negeri khususnya Negara Jepang. LPK ACC Japan Centre memiliki program diantaranya Program Magang, Program Tokutei Ginou (TG) dan Matching Job. ACC Japan Centre memiliki banyak Job dari berbagai sektor kerja di Jepang.<br /><br />
                                                <b>Prosedur LPK ACC Japan Centre</b>
                                            </p>
                                            <ul>
                                                <li><i class="bi bi-check-circle-fill"></i> Pendaftaran</li>
                                                <li><i class="bi bi-check-circle-fill"></i> Pendidikan dan Pelatihan
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> Interview</li>
                                                <li><i class="bi bi-check-circle-fill"></i> Pengajuan Job</li>
                                                <li><i class="bi bi-check-circle-fill"></i> Kontrak Turun</li>
                                                <li><i class="bi bi-check-circle-fill"></i> Pemantapan</li>
                                                <li><i class="bi bi-check-circle-fill"></i> Apply Visa</li>
                                                <li><i class="bi bi-check-circle-fill"></i> Medical Full</li>
                                                <li><i class="bi bi-check-circle-fill"></i> Terbang</li>
                                                <li><i class="bi bi-check-circle-fill"></i> Kerja</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative mt-2">
                                        <img src="https://www.amanahcitracemerlang.id/storage/images/1738420242_IMG-20250131-WA0006.jpg"
                                            class="img-fluid rounded-4" alt="" data-lity>
                                    </div>
                                    <div class="position-relative mt-2">
                                        <img src="https://www.amanahcitracemerlang.id/storage/images/1727241978_Screenshot_2024-09-10-09-08-08-217_com.whatsapp-edit.jpg"
                                            class="img-fluid rounded-4 mb-4" alt="" data-lity>
                                    </div>
                                    <div class="position-relative mt-2">
                                        <img src="https://www.amanahcitracemerlang.id/storage/images/1726219639_Screenshot_2024-09-11-16-41-34-961_com.whatsapp-edit.jpg"
                                            class="img-fluid rounded-4 mb-4" alt="" data-lity>
                                    </div>
                                    <div class="position-relative mt-2">
                                        <img src="{{ asset('templates/assets/img/poster.jpg') }}"
                                            class="img-fluid rounded-4 mb-4" alt="" data-lity>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

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
                                    <img src="{{ asset('storage/' . $image->filepath) }}" class="card-img-top lazyload" data-lity alt="Image" style="height: 100%; object-fit: cover;height: 300px;">
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

        <section id="stats-counter" class="stats-counter sections-bg">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-4">
                        <img src="https://www.amanahcitracemerlang.id/storage/images/1738848428_WhatsApp%20Image%202025-02-06%20at%2020.24.39.jpeg" data-lity alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('templates/assets/img/japan/logojepang.png') }}" alt=""
                            class="img-fluid" data-lity>
                    </div>
                    <div class="col-lg-4">
                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="10000"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>+ Happy Clients</strong> LPK Amanah Citra Cemerlang</p>
                        </div>

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="2500" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>+ Penerbangan</strong> LPK Amanah Citra Cemerlang</p>
                        </div>

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="1000" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>+ Student / Tahun</strong> LPK Amanah Citra Cemerlang</p>
                        </div>

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>+ Karyawan</strong> LPK Amanah Citra Cemerlang</p>
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <section id="call-to-action" class="call-to-action">
            <div class="container text-center" data-aos="zoom-out">
                <a href="https://www.youtube.com/watch?v=QAfLrOR26CY" class="glightbox play-btn"></a>
                <h3>YouTube ACC Asia Jaya</h3>
                <p> Kami membantu anda menentukan sebuah pilihan,
                    Banyak Dari kita yang Ingin ke Luar negri tetapi tidak tau mau kemana / Tujuan nya tidak jelas,
                    sehingga beberapa di antara Kita Asal pilih Lpk / PT / meaning Agentcy dan ujung2 nya pekerjaan atau
                    Tujuan Tidak sesuai dengan Apa yang kita Harapkan.</p>
                <a class="cta-btn" href="https://www.youtube.com/@AmanahCitraCemerlang/videos" target="_blank">
                    YouTube
                    Channel</a>
            </div>
        </section>

        <section id="services" class="services sections-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Program ACC Centre</h2>
                </div>

                <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-6 col-md-12">
                        <div class="service-item  position-relative">
                            <img src="https://www.amanahcitracemerlang.id/storage/images/1738774200_Screenshot_2025_0204_193622.jpg" data-lity class="img-fluid rounded-4 mb-4"
                                alt="">
                            <h3>Program Magang</h3>
                            <p>
                                Program Magang adalah program pelatihan kerja untuk warga negara asing yang dikenal dengan nama Kenshusei<br/>
                                (Visa Magang,
                                Kontrak Kerja 1-3 Tahun,
                                Pendidikan 25 BAB,
                                Proses lebih cepat dibanding TG).
                            </p>
                            {{-- <a href="{{ url('/program-jepang') }}" class="readmore stretched-link">Read more <i
                                    class="bi bi-arrow-right"></i></a><br /> --}}
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="service-item position-relative">
                            <img src="https://www.amanahcitracemerlang.id/storage/images/1727241978_Screenshot_2024-09-10-09-07-58-609_com.whatsapp-edit.jpg"
                                class="img-fluid rounded-4 mb-4" alt="" data-lity>
                            <h3>Program Tokutei Ginou (TG)</h3>
                            <p>
                                Tokutei Ginou (TG) adalah program kerja untuk warga negara asing yang memiliki keahlian khusus.
                                (Visa Kerja,
                                Pendidikan 50 BAB,
                                Memiliki Sertifikat Bahasa (JFT) dan SSW)
                            </p>
                            {{-- <a href="{{ url('program-korea') }}" class="readmore stretched-link">Read more <i
                                    class="bi bi-arrow-right"></i></a><br /> --}}
                        </div>
                    </div>

                </div>

            </div>
        </section>

        {{-- Maps Utama Center --}}
        {{-- <section class="contact sections-bg">
            <div class="container" data-aos="fade-up">
                <h5><b>1. Kantor Utama Yayasan Amanah Citra Cemerlang</b></h5>
                <div class="row gx-lg-0 gy-4">
                    <div class="col-lg-12">
                        <iframe class="mb-4 mb-lg-0"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.558236060304!2d109.1208579!3d-6.9336119!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb922f774f609%3A0xbf2bea14e0cdf740!2sAmanah%20Citra%20Cemerlang!5e0!3m2!1sid!2sid!4v1708186829998!5m2!1sid!2sid"
                            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section> --}}

        {{-- Maps Korean Center --}}
        {{-- <section class="contact sections-bg">
            <div class="container" data-aos="fade-up">
                <h5><b>3. Lokasi Pendidikan ACC Korean Center</b></h5>
                <div class="row gx-lg-0 gy-4">
                    <div class="col-lg-12">
                        <iframe class="mb-4 mb-lg-0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.644972716883!2d109.11854047484533!3d-6.932967867863948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb9401f4c5c9b%3A0xae67cf08f521bb7f!2sACC%20Korean%20Center!5e0!3m2!1sid!2sid!4v1707996932165!5m2!1sid!2sid"
                            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section> --}}

        {{-- Maps Japan Center --}}
        <section class="contact">
            <div class="container" data-aos="fade-up">
                <h5><b>Lokasi Kantor & Pendidikan ACC Japan Center</b></h5>
                <div class="row gx-lg-0 gy-4">
                    <div class="col-lg-12">
                        <iframe class="mb-4 mb-lg-0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.524644510538!2d109.1131374!3d-6.9472685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb913ec72ac99%3A0x15c1e344784a1ea2!2sACC%20Japan%20Centre!5e0!3m2!1sid!2sid!4v1707996435480!5m2!1sid!2sid"
                            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

        {{-- Testimoni Japan Center --}}
        <div id="reviews" style="padding-top: 20px;padding-bottom: 20px;">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Reviews ACC Japan</h2>
                </div>
                <div class='sk-ww-google-reviews' data-embed-id='25365701'></div>
            </div>
        </div>

        <section id="review" class="contact ">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Review</h2>
                </div>

                <div class="row gx-lg-0 gy-4">
                    <div class="col-lg-6">

                        <div class="info-container d-flex flex-column align-items-center justify-content-center">
                            <div class="info-item d-flex">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h4>Location:</h4>
                                    <p>Tegal, Central Java</p>
                                </div>
                            </div>

                            <div class="info-item d-flex">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4>Email:</h4>
                                    <p>amanahcitracemerlang1@gmail.com</p>
                                    <p>accjapanmanagement@gmail.com</p>
                                    {{-- <p>lpkacckorea@gmail.com</p> --}}
                                </div>
                            </div>

                            <div class="info-item d-flex">
                                <i class="bi bi-clock flex-shrink-0"></i>
                                <div>
                                    <h4>Open:</h4>
                                    <p>09.00 - 16.00 WIB</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" disabled>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" disabled>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" disabled>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="7" placeholder="Message" required disabled></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center">
                                <a href="https://wa.me/6285640110822"><button type="submit">Send Whatsapp</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>

    {{-- <div id="preloader"></div> --}}

    <!-- Modal WhatsApp -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">WhatsApp</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6" style="padding: 10px;">
                            <div class="card" style="width: 100%;">
                                <img src="{{ asset('templates/assets/img/acc.jpg') }}" class="card-img-top"
                                    alt="ACC Japan" data-lity>
                                <div class="card-body">
                                    <a href="" target="_blank" class="btn btn-success"
                                        style="width: 100%;"><i class="bi bi-whatsapp"
                                            style="padding-right: 10px;"></i>
                                        Japan Center</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="kc_fab_wrapper"></div>

    @include('landing.footer')

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            if (window.location.hash === "#galeri") {
                document.getElementById("galeri").scrollIntoView({ behavior: "smooth" });
            }
        });
    </script>
    <script src='https://widgets.sociablekit.com/google-business-profile/widget.js' async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{ asset('templates/assets/js/kc.fab.min.js') }}"></script>
    <script src="{{ asset('templates/assets/js/kc.fab.js') }}"></script>
    <script>
        $(document).ready(function() {
            var links = [{
                    "bgcolor": "#128c7e",
                    "icon": "<i class='fa fa-whatsapp'></i>"
                },
                {
                    "url": "https://wa.me/6285640110822",
                    "title": "WhatsApp",
                    "bgcolor": "#128c7e",
                    "color": "#fffff",
                    "icon": "<i class='fa fa-whatsapp'></i>",
                    "target": "_blank"
                },
                {
                    "url": "https://www.facebook.com/amanahcitracemerlangjapan?mibextid=ZbWKwL",
                    "title": "Facebook",
                    "bgcolor": "#4267B2",
                    "color": "white",
                    "icon": "<i class='fa fa-facebook'></i>",
                    "target": "_blank"
                },
                {
                    "url": "https://www.instagram.com/accjapancentre_?igsh=enI4bWxjZnJueGJw",
                    "title": "Instagram",
                    "bgcolor": "#F56040",
                    "color": "white",
                    "icon": "<i class='fa fa-instagram'></i>",
                    "target": "_blank"
                },
                {
                    "url": "https://www.youtube.com/@AmanahCitraCemerlang",
                    "title": "YouTube",
                    "bgcolor": "red",
                    "color": "white",
                    "icon": "<i class='fa fa-youtube'></i>",
                    "target": "_blank"
                }
            ]
            $('.kc_fab_wrapper').kc_fab(links);
        })
    </script>

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

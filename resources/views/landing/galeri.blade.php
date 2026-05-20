<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galeri LPK ACC Japan Centre</title>
    <script type="text/javascript">
        (function() {
            var css = document.createElement('link');
            css.href = 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css';
            css.rel = 'stylesheet';
            css.type = 'text/css';
            document.getElementsByTagName('head')[0].appendChild(css);
        })();
    </script>
    <link rel="stylesheet" href="{{ asset('template_galeri/assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('template_galeri/assets/css/theme.css') }}">

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
    <link href="{{ asset('templates/assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/assets/css/galeri.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/assets/css/floating.css') }}" rel="stylesheet">
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
                                <img src="https://www.amanahcitracemerlang.id/storage/images/1738420242_IMG-20250131-WA0006.jpg"
                                    class="d-block w-100" alt="..." data-lity>
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.amanahcitracemerlang.id/templates/assets/img/acc.jpg"
                                    class="d-block w-100" alt="..." data-lity>
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
                        Welcome to LPK ACC JAPAN CENTRE 👋
                    </p>
                    <h2>LPK ACC JAPAN CENTRE (Yayasan Amanah Citra Cemerlang)</span></h2>
                    <p class="justify-content-center;">
                        <i class="fa fa-map-pin" style="padding-right: 10px;"></i>
                        Kecamatan Adiwerna, Kabupaten Tegal,
                        Central Java
                    </p>
                    <p style="text-align: justify;" class="justify-content-center">LPK ACC telah
                        membimbing dan
                        membina banyak anak hingga berangkat bekerja di Luar Negeri khususnya Negara Jepang. LPK ACC
                        Japan Centre memiliki program diantaranya
                        Program Magang, Program Tokutei Ginou dan Matching Job. ACC Japan Centre memiliki banyak Job
                        dari berbagai sektor kerja di Jepang.
                    </p>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <marquee scrollamount="10"><b>Announcement!</b> Yayasan Amanah Citra Cemerlang tidak membuka LPK
                            dicabang wilayah
                            <b>Kota Tegal/sekitarnya!</b> apabila ada lembaga atau perorangan mengatasnamakan kami mohon
                            diklarifikasikan terlebih dahulu kepada kami, dan kami tidak bertanggung jawab apabila ada
                            oknum yang mengaku cabang kami! Terimakasih
                        </marquee>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <div class="d-flex justify-content-center justify-content-lg-start text-center">
                        <a href="{{ url('/pendaftaran-siswa-baru') }}" class="btn-get-started" style="width: 100%;">
                            <i class="bi bi-book"></i>
                            Daftar
                        </a>
                        <a href="#lokasi-acc" class="btn-get-started"
                            style="width: 100%;"><i class="bi bi-maps"></i> LOKASI
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

    <section class="testimonials" id="galeri">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Galeri LPK ACC Japan Centre</h2>
                </div>
                <div class="row">
                    @foreach ($images_db as $image)
                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                        <div class="card h-100">
                            <div class="card-body p-0">
                                <img src="{{ asset('storage/' . $image->filepath) }}"
                                    class="card-img-top lazyload img-fluid" data-lity alt="Image"
                                    style="width: 100%; aspect-ratio: 1 / 1; object-fit: cover; border-radius: 10px;">
                            </div>
                            <div class="card-footer text-body-secondary">
                                <b>Date:</b> {{ $image->created_at }}<br />
                                {{ \Carbon\Carbon::parse($image->created_at)->diffForHumans() }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Custom Pagination -->
                <div class="pagination-container" style="padding: 0px;">
                    <ul class="pagination">
                        @if ($images_db->onFirstPage())
                        <li class="disabled"><span>&lt;</span></li>
                        @else
                        <li><a class="text-white" style="background-color: #046392"
                                href="{{ $images_db->previousPageUrl() }}#galeri" rel="prev">&lt;</a></li>
                        @endif

                        @foreach ($images_db->links()->elements[0] as $page => $url)
                        @if ($page == $images_db->currentPage())
                        <li class="active"><span>{{ $page }}</span></li>
                        @else
                        <li><a href="{{ $url }}#galeri">{{ $page }}</a></li>
                        @endif
                        @endforeach

                        @if ($images_db->hasMorePages())
                        <li><a class="text-white" style="background-color: #046392"
                                href="{{ $images_db->nextPageUrl() }}#galeri" rel="next">&gt;</a></li>
                        @else
                        <li class="disabled"><span>&gt;</span></li>
                        @endif
                    </ul>
                </div>
            </div>
    </section>

    @include('landing.footer')

    <script src="{{ asset('templates/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('templates/assets/js/main.js') }}"></script>

    <script src="{{ asset('template_galeri/assets/js/app.js') }}"></script>
    <script src="{{ asset('template_galeri/assets/js/theme.js') }}"></script>
</body>

</html>

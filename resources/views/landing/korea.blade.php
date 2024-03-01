<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ACC - Program Korea</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="{{ asset('templates/assets/img/logo.jpg') }}" rel="icon">
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
</head>

<body>
    <div id="preloader"></div>
    <section id="topbar" class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:contact@example.com">lpkacckorea@gmail.com</a></i>
                <a target="_blank" href="https://www.instagram.com/amanahcitracemerlang?igsh=MWM2NGVvZm95ajBudg"
                    class="instagram" style="padding-left: 10px;"><i class="bi bi-instagram"></i></a>
                <a target="_blank" href="https://www.tiktok.com/@amanahcitracemerlang?_t=8kFrsqGlsbh&_r=1"
                    class="tiktok" style="padding-left: 10px;"><i class="bi bi-tiktok"></i></a>
                <a target="_blank" href="https://www.facebook.com/lpkacckorea1" class="facebook"
                    style="padding-left: 10px;"><i class="bi bi-facebook"></i></a>
                <a target="_blank" href="https://www.youtube.com/@AmanahCitraCemerlang" class="instagram"
                    style="padding-left: 10px;"><i class="bi bi-youtube"></i></a>
                <a target="_blank" href="https://wa.me/6285158270107" class="whatsapp" style="padding-left: 10px;"><i
                        class="bi bi-whatsapp"></i></i></a>
            </div>
        </div>
    </section>

    <header id="header" class="header d-flex align-items-center" style="padding: 10px;">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="#" class="logo d-flex align-items-center">
                <h1><img src="{{ asset('templates/assets/img/logo.jpg') }}" alt="" class="img-fluid"
                        width="40px"> Korean Center<span>.</span></h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="#lokasi">Lokasi</a></li>
                    <li><a href="#reviews">Reviews</a></li>
                    <li><a href="#galeri">Galeri Korea</a></li>
                </ul>
            </nav>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        </div>
    </header>

    <div class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in" style="">
                <div class="col-lg-6 order-2  d-flex flex-column justify-content-center text-center text-lg-start"
                    style="padding-bottom: 50px;">

                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" style="border-radius: 20px;">
                            <div class="carousel-item active">
                                <img src="{{ asset('templates/assets/img/korea/lokasi-korea.png') }}"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 justify-content-center" style="padding: 0px 30px 0 20px;">
                    <p class="justify-content-center;"><i class="fa fa-map-pin" style="padding-right: 10px;"></i>
                        Adiwerna, Tegal,
                        Central Java</p>
                    <h2>ACC Korean Centre</span></h2>
                    <p style="text-align: justify;" class="justify-content-center">ACC Korean Centre merupakan program
                        Lowongan Kerja Fishing Korea Lokal Selatan dengan program P To P Visa E.10. LPK Amanah Citra
                        Cemerlang juga ikut serta
                        mendukung program Pemerintah untuk
                        pengembangan sumber daya manusia Indonesia
                        dalam menghadapi persaingan global dan
                        pengembangan sistem standarisasi yang
                        mengacu pada standar Nasional dan
                        Internasional.
                    </p>
                    <div class="d-flex justify-content-center justify-content-lg-start text-center">
                        <a href="#lokasi" class="btn-get-started" style="width: 80%;"><i class="fa fa-map-pin"
                                style="padding-right: 10px;"></i>
                            Location</a>
                        <a target="_blank" href="https://www.youtube.com/@AmanahCitraCemerlang"
                            class="btn-watch-video d-flex align-items-center" style="margin-left: 15px;">
                            <i class="bi bi-play-circle"></i><span> YouTube</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="breadcrumbs">
        <nav>
            <div class="container">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Korean Center</li>
                </ol>
            </div>
        </nav>
    </div>

    <main id="main" style="padding-left: 10px;padding-right: 10px;">
        <section id="info" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <p style="text-align: justify;"><b>About Us</b><br /> ACC Korean Centre merupakan program
                            Lowongan Kerja Fishing Korea Lokal Selatan dengan
                            program P To P Visa E.10
                        </p>
                        <div class="position-relative mt-4">
                            <img src="{{ asset('templates/assets/img/korea/visi_acckorea.png') }}"
                                class="img-fluid rounded-4" alt="">
                        </div><br />

                        <div class="card">
                            <div class='sk-ww-google-business-profile' data-embed-id='25374433'></div>
                        </div><br />
                        <div class="row" style="padding-bottom: 10px;">
                            <div class="col-md-4" style="padding-bottom: 10px;">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalProsedur"><button
                                        type="button" class="btn text-white"
                                        style="background-color: #1E6C93;width: 100%;text-align: left;height: 50px;"><b><i
                                                class="bi bi-book" style="padding-right: 10px;"></i>
                                            Prosedur</b></button></a>
                            </div>
                            <div class="col-md-4" style="padding-bottom: 10px;">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalDokumentasi"><button
                                        type="button" class="btn text-white"
                                        style="background-color: #1E6C93;width: 100%;text-align: left;height: 50px;"><b><i
                                                class="bi bi-building" style="padding-right: 10px;"></i>
                                            Dokumentasi</b></button></a>
                            </div>
                            <div class="col-md-4" style="padding-bottom: 10px;">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><button
                                        type="button" class="btn text-white"
                                        style="background-color: #1E6C93;width: 100%;text-align: left;height: 50px;"><b><i
                                                class="fa fa-sitemap" style="padding-right: 10px;"></i>
                                            Struktur</b></button></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="content ps-0 ps-lg-5">
                            <div class="row">
                                <div class="section-header">
                                    <b>Info Lowongan Kerja<br />Fishing Korea Selatan Lokal Program P to P Visa E.10</b>
                                </div>
                                <div class="col-md-6" style="padding-top: 20px;">
                                    <div class="card">
                                        <div class="card-body">
                                            <p>
                                                <b>Persyaratan</b>
                                            </p>
                                            <ul>
                                                <li><i class="bi bi-check-circle-fill"></i> Laki-Laki Usia 20-38 Tahun
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> E-KTP

                                                </li>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i> KK (Kartu Keluarga)
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> Ijazah
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> Akta Kelahiran
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> Pass Foto CD
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> SKCK Aktif
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> Passport
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> BST Reguler
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> Buku Pelaut
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="position-relative mt-4">
                                        <img src="{{ asset('templates/assets/img/korea/daftar2.png') }}"
                                            class="img-fluid rounded-4" alt="">
                                    </div>

                                    <div class="position-relative mt-4">
                                        <img src="{{ asset('templates/assets/img/acc/3.jpg') }}"
                                            class="img-fluid rounded-4" alt="">
                                    </div>


                                </div>

                                <div class="col-md-6" style="padding-top: 20px;">
                                    <div class="card">
                                        <div class="card-body">
                                            <p>
                                                <b>Fasilitas</b>
                                            </p>
                                            <ul>
                                                <li><i class="bi bi-check-circle-fill"></i> Jaminan Kesehatan
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> Mess/Motte
                                                </li>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i> Wifi & Makan
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> Asuransi
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> Cuti Pertahun
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> Bonus Finis
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> Kontrak 4 Tahun 10 Bulan
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="position-relative mt-4">
                                        <img src="{{ asset('templates/assets/img/korea/daftar.png') }}"
                                            class="img-fluid rounded-4" alt="">
                                    </div>

                                    <div class="position-relative mt-4">
                                        <img src="{{ asset('templates/assets/img/acc/1.jpg') }}"
                                            class="img-fluid rounded-4" alt="">
                                    </div>

                                    <div class="position-relative mt-4">
                                        <img src="{{ asset('templates/assets/img/acc/6.jpg') }}"
                                            class="img-fluid rounded-4" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>

    {{-- Maps Korean Center --}}
    <section class="contact sections-bg" id="lokasi">
        <div class="container" data-aos="fade-up">
            <h5><b>Lokasi ACC Korean Center</b></h5>
            <div class="row gx-lg-0 gy-4">
                <div class="col-lg-12">
                    <iframe class="mb-4 mb-lg-0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.644972716883!2d109.11854047484533!3d-6.932967867863948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb9401f4c5c9b%3A0xae67cf08f521bb7f!2sACC%20Korean%20Center!5e0!3m2!1sid!2sid!4v1707996932165!5m2!1sid!2sid"
                        frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimoni Korean Center --}}

    <div id="reviews" style="padding-top: 20px;padding-bottom: 20px;">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Reviews ACC Korea</h2>
            </div>
            <div class='sk-ww-google-reviews' data-embed-id='25365852'></div>
        </div>
    </div>

    <section class="testimonials" id="galeri">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Galeri ACC Korea</h2>
            </div>
            <div class="row">
                @foreach ($images as $index => $image)
                    <div class="col-md-3 mb-4">
                        <div class="card"
                            style="background-image: url('{{ asset('templates/assets/img/acc/' . ($index + 1) . '.jpg') }}'); background-size: cover; border-radius: 10px; height: 250px;">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Prosedur --}}
    <div class="modal fade" id="modalProsedur" tabindex="-1" aria-labelledby="modalProsedur" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalProsedur">Prosedur Program P to P</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="templates/assets/img/korea/prosedur.png" class="img-fluid rounded-4"
                                alt=""><br /><br />
                            <img src="templates/assets/img/korea/prosedur1.png" class="img-fluid rounded-4"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Struktur --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModal">Struktur Korea</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="templates/assets/img/korea/struktur.png" class="img-fluid rounded-4"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Dokumentasi --}}
    <div class="modal fade" id="modalDokumentasi" tabindex="-1" aria-labelledby="modalDokumentasi"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalDokumentasi">Dokumentasi Korea</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="templates/assets/img/korea/dokumentasi1.png" class="img-fluid rounded-4"
                                alt="">
                            <img src="templates/assets/img/korea/dokumentasi2.png" class="img-fluid rounded-4"
                                alt="">
                            <img src="templates/assets/img/korea/dokumentasi3.png" class="img-fluid rounded-4"
                                alt="">
                            <img src="templates/assets/img/korea/daftar.png" class="img-fluid rounded-4"
                                alt="">
                            <img src="templates/assets/img/korea/daftar2.png" class="img-fluid rounded-4"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    @include('landing.footer')

    {{-- <a href="https://wa.me/6285727202491" target="_blank"
        class="scroll-top d-flex align-items-center justify-content-center"
        style="background-color: green;margin: 10px;"><i class="bi bi-whatsapp"></i></a> --}}

    <div class="kc_fab_wrapper"></div>

    <script src='https://widgets.sociablekit.com/google-reviews/widget.js' async defer></script>
    <script src='https://widgets.sociablekit.com/google-business-photos/widget.js' async defer></script>
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
                    "url": "https://wa.me/6285158270107",
                    "title": "WhatsApp Korea",
                    "bgcolor": "#128c7e",
                    "color": "#fffff",
                    "icon": "<i class='fa fa-whatsapp'></i>",
                    "target": "_blank"
                },
                {
                    "url": "https://www.facebook.com/lpkacckorea1?mibextid=ZbWKwL",
                    "title": "Facebook Korea",
                    "bgcolor": "#4267B2",
                    "color": "#ffffff",
                    "icon": "<i class='fa fa-facebook'></i>",
                    "target": "_blank"
                },
                {
                    "url": "https://www.tiktok.com/@amanahcitracemerlang?_t=8kFrsqGlsbh&_r=1",
                    "title": "Tiktok Korea",
                    "bgcolor": "#000000",
                    "color": "#ffffff",
                    "icon": "<i class='fa fa-music'></i>",
                    "target": "_blank"
                },
                {
                    "url": "https://www.instagram.com/amanahcitracemerlang?igsh=MWM2NGVvZm95ajBudg",
                    "title": "Instagram",
                    "bgcolor": "#F56040",
                    "color": "#ffffff",
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

    <script src='https://widgets.sociablekit.com/google-business-profile/widget.js' async defer></script>
    <script src="{{ asset('templates/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('templates/assets/js/main.js') }}"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galeri - ACC Asia Jaya</title>
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
    <link href="{{ asset('templates/assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/assets/css/galeri.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/assets/css/floating.css') }}" rel="stylesheet">
</head>

<body>
    <header id="header" class="header d-flex align-items-center" style="padding: 10px;">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="#" class="logo d-flex align-items-center">
                <h1><img src="{{ asset('templates/assets/img/logo.jpg') }}" alt="" class="img-fluid"
                        width="40px"> Galeri ACC<span>.</span></h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
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
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('templates/assets/img/japan/9.jpg') }}" class="d-block w-100"
                                    alt="..." style="border-radius: 10px;width: 370px;">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('templates/assets/img/acc/4.jpg') }}" class="d-block w-100"
                                    alt="..." style="border-radius: 10px;width: 370px;">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('templates/assets/img/acc/3.jpg') }}" class="d-block w-100"
                                    alt="..." style="border-radius: 10px;width: 370px;">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 justify-content-center" style="padding: 0px 30px 0 20px;">
                    <p class="justify-content-center;"><i class="fa fa-map-pin" style="padding-right: 10px;"></i>
                        Tegal,
                        Central Java</p>
                    <h1 style="color: white">Galeri ACC Asia Jaya</h1>
                    <p>Foto kegiatan LPK ACC (Amanah Citra Cemerlang), Pembelajaran dan Tempat ACC Japan & ACC
                        Korean. </p>
                    <div class="d-flex justify-content-center justify-content-lg-start text-center">
                        <a href="#lokasi" class="btn-get-started" style="width: 80%;"><i class="fa fa-home"
                                style="padding-right: 10px;"></i>
                            Home</a>
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
                    <li>Galeri ACC Asia Jaya</li>
                </ol>
            </div>
        </nav>
    </div>

    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">
            <div class="row">
                @foreach ($images as $index => $image)
                    <div class="col-md-3 mb-4">
                        <div class="card"
                            style="background-image: url('{{ asset('templates/assets/img/japan/' . ($index + 1) . '.jpg') }}'); background-size: cover; border-radius: 10px; height: 250px;">
                        </div>
                    </div>
                @endforeach
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

    {{-- <section class="mt-2 mb-2">
        <div class="container-fluid">
            <div class="row">
                <div class="card-columns">
                    <div id="image-container">
                        @foreach ($images as $index => $image)
                            <div class="card card-pin">
                                <img class="card-img"
                                    src="{{ asset('templates/assets/img/acc/' . ($index + 1) . '.jpg') }}"
                                    alt="Card image">
                                <div class="overlay">
                                    <h2 class="card-title title">ACC Asia Jaya</h2>
                                    <div class="more">
                                        <a href="#" class="more-link">
                                            <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>


                </div>
            </div>
        </div>
    </section> --}}

    {{-- <div class="container">
        <section id="blog" class="blog">
            <div class='sk-ww-google-business-photo' data-embed-id='25372651'></div>
            <script src='https://widgets.sociablekit.com/google-business-photos/widget.js' async defer></script>
        </section>
    </div> --}}

    <div class="kc_fab_wrapper"></div>

    @include('landing.footer')


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
                    "icon": "<i class='fa fa-play'></i>",
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

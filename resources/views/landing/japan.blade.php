<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ACC Japan Centre</title>
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

    <div>
        <section id="topbar" class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center"><a
                            href="mailto:contact@example.com">accjapanmanagement@gmail.com</a></i>
                    <a target="_blank" href="https://www.facebook.com/amanahcitracemerlangjapan?mibextid=ZbWKwL"
                        class="facebook" style="padding-left: 10px;"><i class="bi bi-facebook"></i></a>
                    <a target="_blank" href="https://www.instagram.com/accjapancentre_?igsh=MTZsZDE2N2hmZnljdg=="
                        class="instagram" style="padding-left: 10px;"><i class="bi bi-instagram"></i></a>
                    <a target="_blank" href="https://wa.me/6285640110822" class="whatsapp"
                        style="padding-left: 10px;"><i class="bi bi-whatsapp"></i></i></a>
                </div>
            </div>
        </section>

        <header id="header" class="header d-flex align-items-center" style="padding: 10px;">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
                <a href="#" class="logo d-flex align-items-center">
                    <h1><img src="{{ asset('templates/assets/img/japan/logo-japan.png') }}" alt=""
                            class="img-fluid" width="60px"> Japan Center<span>.</span></h1>
                </a>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="#lokasi">Lokasi</a></li>
                        <li><a href="#reviews">Reviews</a></li>
                        <li><a href="#galeri">Galeri Japan</a></li>
                    </ul>
                </nav>
                <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            </div>
        </header>
    </div>

    <div class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in" style="">
                <div class="col-lg-6 order-2  d-flex flex-column justify-content-center text-center text-lg-start"
                    style="padding-bottom: 50px;">

                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" style="border-radius: 20px;">
                            <div class="carousel-item active">
                                <img src="{{ asset('templates/assets/img/home1.jpg') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 justify-content-center" style="padding: 30px 30px 0 20px;">
                    <p class="justify-content-center;"><i class="fa fa-map-pin" style="padding-right: 10px;"></i>
                        Adiwerna, Tegal,
                        Central Java</p>
                    <h2>ACC Japan Centre</span></h2>
                    <p style="text-align: justify;" class="justify-content-center">LPK ACC Japan Centre merupakan bagian
                        dari
                        perusahaan ACC untuk Program Jepang dibuka pada Tahun 2022 memulai untuk kelas pelatihan Bahasa
                        Jepang untuk Program Magang dan TG.
                        Khususnya di
                        Kabupaten/Kota Tegal
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
                    <li>Japan Center</li>
                </ol>
            </div>
        </nav>
    </div>

    <main id="main" style="padding-left: 10px;padding-right: 10px;">
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <p style="text-align: justify;"><b>About Us</b><br /> ACC Japan Centre
                            merupakan bagian dari perusahaan ACC untuk Program Jepang dibuka pada Tahun 2022 memulai
                            untuk
                            kelas pelatihan
                            Bahasa Jepang untuk Program Magang dan TG.
                        </p>

                        <div class="card">
                            <div class='sk-ww-google-business-profile' data-embed-id='25372661'></div>
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
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalSarpras"><button
                                        type="button" class="btn text-white"
                                        style="background-color: #1E6C93;width: 100%;text-align: left;height: 50px;"><b><i
                                                class="bi bi-building" style="padding-right: 10px;"></i>
                                            Sarpras</b></button></a>
                            </div>
                            <div class="col-md-4" style="padding-bottom: 10px;">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><button
                                        type="button" class="btn text-white"
                                        style="background-color: #1E6C93;width: 100%;text-align: left;height: 50px;"><b><i
                                                class="fa fa-sitemap" style="padding-right: 10px;"></i>
                                            Struktur</b></button></a>
                            </div>
                        </div>

                        <p style="text-align: justify;">
                            Kami membantu anda menentukan sebuah pilihan, banyak dari kita yang ingin ke Luar Negeri
                            tetapi
                            tidak tau mau kemana/tujuannya tidak jelas, sehingga beberapa di antara kita asal pilih
                            LPKPT/Meaning
                            Agency dan ujung-ujungnya pekerjaan atau tujuan tidak sesuai dengan apa yang kta harapkan di
                            LPK
                            kami dalam meningkatkan kualitas dan kuantitas CPMI dengan melalui edukasi masyarakat yang
                            ingin
                            bekerja di Luar Negeri dan banyak diantaranya yang telah kami tolong serta kamibantu karena
                            sebelumnya
                            salah atau kurang tepat memilih tujuan negara dimana dia mau bekerja.
                        </p>
                        <div class="position-relative mt-4">
                            <img src="{{ asset('templates/assets/img/home3.jpg') }}" class="img-fluid rounded-4"
                                alt="">
                            <a href="https://www.youtube.com/watch?v=QAfLrOR26CY" class="glightbox play-btn"></a>
                        </div>

                        <br /><br />
                    </div>
                    <div class="col-lg-6">
                        <div class="content ps-0 ps-lg-5">
                            <div class="row">
                                <div class="section-header">

                                    <h2>Program ACC Japan</h2>
                                </div>
                                <div class="col-md-12" style="padding-top: 20px;">
                                    <div class="card">
                                        <div class="card-body">
                                            <p>
                                                <b>Program LPK Japan Centre</b>
                                            </p>
                                            <ul>
                                                <li><i class="bi bi-check-circle-fill"></i> Pelatihan Bahasa Jepang
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> Pelatihan Mental dan Fisik

                                                </li>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i> Program Magang dan TG ke
                                                    Jepang
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> Pelatihan Kerja sesuai Job
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12" style="padding-top: 20px;">
                                    <div class="card">
                                        <div class="card-body">
                                            <p>
                                                <b>Proses Magang Jepang</b>
                                            </p>
                                            <ul>
                                                <li><i class="bi bi-check-circle-fill"></i> Pendaftaran <br />(Tiap
                                                    Bulan
                                                    Ada Kuota Pendaftaran)
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> Pendidikan 3-4 Bulan
                                                    <br />(Siswa
                                                    wajib mengikuti pndidikan tiap hari senin-sampai jum'at Jam
                                                    09:00 - 15:00 WIB)
                                                </li>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i> Interview Job
                                                    <br />(Mensetsu JO
                                                    -Job Order- (Interview Dengan Pihak Jepang))
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> Pemberkasan <br />(Kontrak
                                                    kerja
                                                    dan COE (Certificate of Eligibility))
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> Pemberangkatan
                                                    <br />(Setelah
                                                    melalui proses diatas akan ada proses pemantapan bahasa (7 hari - 1
                                                    Bulan) Dilanjut Penerbangan ke Jepang dan siap kerja dijepang)
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12" style="padding-top: 20px;">
                                    <div class="card">
                                        <div class="card-body">
                                            <p>
                                                <b>Sektor Kerja</b>
                                            </p>
                                            <ul>
                                                <li><i class="bi bi-check-circle-fill"></i> 介護 業 / Keperawatan
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> ビルクリーニング 業 / Pembersihan
                                                    Gedung

                                                </li>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i> 素形材産業 / Material Casting
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> 産業機械製造業 / Manufaktur Mesin
                                                    Industri
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> 電気・電子情報関連産業 / Industri
                                                    terkait informasi, listrik dan elektronik
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> 建設業 / Konstruksi
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> 造船・舶用工業 / Pembuatan Kapal
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> 自動車整備業 / Perawatan Mobil
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> 航空業 / Aviasi
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> 宿泊業 / Bisnis Akomodasi
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> 農業 / Pertanian
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> 漁業 / Perikanan
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> 飲食料品製造業 / Pengolahan
                                                    Makanan dan Minuman
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> 外食業 / Jasa Makanan
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="stats-counter" class="stats-counter">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4 align-items-center">

                    <div class="col-lg-6">
                        <img src="{{ asset('templates/assets/img/japan/logojepang.png') }}" alt=""
                            class="img-fluid">
                    </div>

                    <div class="col-lg-6">
                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="1000"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Happy Clients</strong> LPK Amanah Citra Cemerlang</p>
                        </div>

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Penerbangan</strong> LPK Amanah Citra Cemerlang</p>
                        </div>

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="200" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Student</strong> LPK Amanah Citra Cemerlang</p>
                        </div>

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Karyawan</strong> LPK Amanah Citra Cemerlang</p>
                        </div>

                    </div>

                </div>

            </div>
        </section>
    </main>

    <section class="contact sections-bg" id="lokasi">
        <div class="container" data-aos="fade-up">
            <h5><b>Lokasi ACC Japan Center</b></h5>
            <div class="row gx-lg-0 gy-4">
                <div class="col-lg-12">
                    <iframe class="mb-4 mb-lg-0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.524644510538!2d109.1131374!3d-6.9472685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb913ec72ac99%3A0x15c1e344784a1ea2!2sACC%20Japan%20Centre!5e0!3m2!1sid!2sid!4v1707996435480!5m2!1sid!2sid"
                        frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <div id="reviews" style="padding-top: 20px;padding-bottom: 20px;">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Reviews ACC Japan</h2>
            </div>
            <div class='sk-ww-google-reviews' data-embed-id='25365701'></div>
        </div>
    </div>

    {{-- <main class="sections-bg">
        <div class="container" id="galeri" data-aos="fade-up">
            <section id="blog" class="blog">
                <div class="section-header">
                    <h2>Galeri ACC Japan</h2>
                </div>
                <div class='sk-ww-google-business-photo' data-embed-id='25372651'></div>
            </section>
        </div>
    </main> --}}

    <section class="testimonials" id="galeri">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Galeri ACC Japan</h2>
            </div>
            <div class="row">
                @foreach ($images as $index => $image)
                    <div class="col-md-3 mb-4">
                        <div class="card"
                            style="background-image: url('{{ asset('templates/assets/img/japan/' . ($index + 1) . '.jpg') }}'); background-size: cover; border-radius: 10px; height: 250px;">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Struktur Organisasi -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Struktur Organisasi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('templates/assets/img/japan/struktur-organisasi.png') }}"
                        class="img-fluid rounded-4" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Sarana & Prasarana --}}
    <div class="modal fade" id="modalSarpras" tabindex="-1" aria-labelledby="modalSarpras" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalSarpras">Sarana & Prasarana</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ asset('templates/assets/img/japan/sarpras1.png') }}"
                                class="img-fluid rounded-4" alt="">
                            <img src="{{ asset('templates/assets/img/japan/sarpras2.png') }}"
                                class="img-fluid rounded-4" alt="">
                            <img src="{{ asset('templates/assets/img/japan/sarpras3.png') }}"
                                class="img-fluid rounded-4" alt="">
                            <img src="{{ asset('templates/assets/img/japan/sarpras4.png') }}"
                                class="img-fluid rounded-4" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Prosedur --}}
    <div class="modal fade" id="modalProsedur" tabindex="-1" aria-labelledby="modalProsedur" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalProsedur">Prosedur</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ asset('templates/assets/img/japan/jepangdarat.png') }}"
                                class="img-fluid rounded-4" alt=""><br /><br />
                            <img src="{{ asset('templates/assets/img/japan/prosedur1.png') }}"
                                class="img-fluid rounded-4" alt=""><br /><br />
                            <img src="{{ asset('templates/assets/img/japan/prosedur2.png') }}"
                                class="img-fluid rounded-4" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="kc_fab_wrapper"></div>

    @include('landing.footer')

    {{-- <a href="https://wa.me/6282136697895" target="_blank"
        class="scroll-top d-flex align-items-center justify-content-center"
        style="background-color: green;margin: 10px;"><i class="bi bi-whatsapp"></i></a> --}}

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
                    "title": "WhatsApp Japan",
                    "bgcolor": "#128c7e",
                    "color": "#fffff",
                    "icon": "<i class='fa fa-whatsapp'></i>",
                    "target": "_blank"
                },
                {
                    "url": "https://www.facebook.com/amanahcitracemerlangjapan?mibextid=ZbWKwL",
                    "title": "Facebook Japan",
                    "bgcolor": "#4267B2",
                    "color": "white",
                    "icon": "<i class='fa fa-facebook'></i>",
                    "target": "_blank"
                },
                {
                    "url": "https://www.instagram.com/accjapancentre_?igsh=enI4bWxjZnJueGJw",
                    "title": "Instagram Japan",
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
    {{-- API Ulasan & Galerry --}}
    <script src='https://widgets.sociablekit.com/google-business-profile/widget.js' async defer></script>

    <script src='https://widgets.sociablekit.com/google-reviews/widget.js' async defer></script>
    <script src='https://widgets.sociablekit.com/google-business-photos/widget.js' async defer></script>

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

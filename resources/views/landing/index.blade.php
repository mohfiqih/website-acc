<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>LPK Amanah Citra Cemerlang</title>
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
                                <img src="{{ asset('templates/assets/img/home1.jpg') }}" class="d-block w-100"
                                    alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="{{ asset('templates/assets/img/home2.jpg') }}" class="d-block w-100"
                                    alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('templates/assets/img/home3.jpg') }}" class="d-block w-100"
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
                <div class="col-lg-6 order-1 order-lg-2 justify-content-center" style="padding: 0px 30px 0 20px;">
                    <p class="justify-content-center;"><i class="fa fa-map-pin" style="padding-right: 10px;"></i>
                        Adiwerna, Kabupaten Tegal,
                        Central Java</p>
                    <h2>LPK Amanah Citra Cemerlang Asia Jaya</span></h2>
                    <p style="text-align: justify;" class="justify-content-center">LPK ACC (Amanah Citra Cemerlang) Asia
                        Jaya telah
                        membimbing dan
                        membina banyak anak hingga berangkat baik dari sektor ABK dan Job Darat Manufaktur. LPK ACC Ada
                        Dua <a href="{{ url('program-jepang') }}" style="color: white;" target="_blank"><b>Program
                                Jepang</b></a> dan
                        <a href="{{ url('program-korea') }}" style="color: white;" target="_blank"><b>Program
                                Korea</b></a>. Klik Page
                        Jika
                        ingin tahu Info
                        selengkapnya.
                    </p>
                    <div class="alert alert-danger" role="alert">
                        <marquee><b>Announcement!</b> Kami LPK Amanah Citra Cemerlang tidak membuka cabang diwilayah
                            <b>Kota Tegal/sekitarnya!</b> apabila ada lembaga atau perorangan mengatasnamakan kami mohon
                            diklarifikasikan terlebih dahulu kepada kami, dan kami tidak bertanggung jawab apabila ada
                            oknum yang mengaku cabang kami! Terimakasih</marquee>
                    </div>
                    <div class="d-flex justify-content-center justify-content-lg-start text-center">
                        <a href="#services" class="btn-get-started" style="width: 100%;"><i class="bi bi-book"></i>
                            Let's
                            Join</a>
                        <a target="_blank" href="https://www.youtube.com/@AmanahCitraCemerlang"
                            class="btn-watch-video d-flex align-items-center" style="margin-left: 15px;">
                            <i class="bi bi-play-circle"></i><span> YouTube</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="row gy-4 mt-2">
                    <div class="col-xl-6 col-md-12" style="border-color: azure">
                        <div class="icon-box">
                            <p class="title" style="margin-top: 10px;">
                                <a href="{{ url('program-jepang') }}" class="stretched-link"><i class="bi bi-book"
                                        style="padding-right: 10px;"></i>
                                    Program
                                    ACC
                                    Jepang</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-12">
                        <div class="icon-box">
                            <p class="title" style="margin-top: 10px;">
                                <a href="{{ url('program-korea') }}" class="stretched-link"><i class="bi bi-book"
                                        style="padding-right: 10px;"></i>
                                    Program ACC Korea</a>
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
                            mengembangkan sumber daya manusia (sdm) pelatihan, program dan
                            manajemen pelatihan, melaksanakan program pelatihan dan
                            memperluas jejaring dengan lembaga/instansi lain yang korelasinya
                            ikut mendukung program pemerintah dalam rangka mengurangi
                            pengangguran dan meningkatkan strata ekonomi masyarakat
                            nasional.
                        </p>
                        <div class="position-relative mt-4">
                            <img src="{{ asset('templates/assets/img/acc.jpg') }}" class="img-fluid rounded-4"
                                alt="">
                            <a href="{{ url('/galeri') }}" class="play-btn"></a>
                        </div>

                        <div class="position-relative mt-4">
                            <img src="https://lh3.googleusercontent.com/p/AF1QipPBj7J-RI4unahwIDe4sRie09PYD2lKpjSRvM8C=s1360-w1360-h1020"
                                class="img-fluid rounded-4" alt="">
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <!--<div class="card">-->
                        <!--    <div class='sk-ww-google-business-profile' data-embed-id='25372658'></div>-->
                        <!--</div><br />-->
                        <div class="position-relative mt-2">
                            <img src="https://amanahcitracemerlang.id/templates/assets/img/korea/lokasi-korea.png"
                                class="img-fluid rounded-4 mb-4" alt="">
                        </div>
                        <div class="content ps-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <p style="text-align: justify;">
                                                <b>ACC Asia Jaya</b> merupakan LPK yang telah mengirimkan banyak tenaga
                                                kerja (ABK) ke
                                                Korea Selatan sejak Tahun 2021 dan pada Tahun 2022 memulai membuka untuk
                                                kelas pelatihan Bahasa
                                                Jepang untuk Program Magang dan TG.<br /><br />
                                                <b>Prosedur LPK ACC Asia Jaya</b>
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
                                        <img src="https://lh3.googleusercontent.com/p/AF1QipOoTJRgdqUf_rS7xKKVteWxiG2ERjb2i8V-_KXy=s1360-w1360-h1020-rw"
                                            class="img-fluid rounded-4" alt="">
                                    </div>


                                    <div class="position-relative mt-2">
                                        <img src="https://lh3.googleusercontent.com/p/AF1QipOvxPq5kXO1rP1Ozl0qJ5_xKB3gSCbfIqyPLEeu=s1360-w1360-h1020"
                                            class="img-fluid rounded-4 mb-4" alt="">
                                    </div>

                                    <div class="position-relative mt-2">
                                        <img src="{{ asset('templates/assets/img/poster.jpg') }}"
                                            class="img-fluid rounded-4 mb-4" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="stats-counter" class="stats-counter sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4 align-items-center">

                    <div class="col-lg-4">
                        <img src="{{ asset('templates/assets/img/logo.jpg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('templates/assets/img/japan/logojepang.png') }}" alt=""
                            class="img-fluid">
                    </div>

                    <div class="col-lg-4">
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
                            <span data-purecounter-start="0" data-purecounter-end="400" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Student</strong> LPK Amanah Citra Cemerlang</p>
                        </div>

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Karyawan</strong> LPK Amanah Citra Cemerlang</p>
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
                            <img src="{{ asset('templates/assets/img/acc.jpg') }}" class="img-fluid rounded-4 mb-4"
                                alt="">
                            <h3>Lihat Program Jepang</h3>
                            <p>Kami membantu anda menentukan sebuah pilihan, banyak dari kita yang ingin ke Luar Negeri
                                tetapi
                                tidak tau mau kemana/tujuannya tidak jelas, sehingga beberapa di antara kita asal pilih
                                LPKPT/Meaning
                                Agency dan ujung-ujungnya pekerjaan atau tujuan tidak sesuai dengan apa yang kta
                                harapkan</p>
                            <a href="{{ url('/program-jepang') }}" class="readmore stretched-link">Read more <i
                                    class="bi bi-arrow-right"></i></a><br />
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="service-item position-relative">
                            <img src="{{ asset('templates/assets/img/korea1.jpg') }}"
                                class="img-fluid rounded-4 mb-4" alt="">
                            <h3>Lihat Program Korea</h3>
                            <p>Kami membantu anda menentukan sebuah pilihan, banyak dari kita yang ingin ke Luar Negeri
                                tetapi
                                tidak tau mau kemana/tujuannya tidak jelas, sehingga beberapa di antara kita asal pilih
                                LPKPT/Meaning
                                Agency dan ujung-ujungnya pekerjaan atau tujuan tidak sesuai dengan apa yang kta
                                harapkan</p>
                            <a href="{{ url('program-korea') }}" class="readmore stretched-link">Read more <i
                                    class="bi bi-arrow-right"></i></a><br />
                        </div>
                    </div>

                </div>

            </div>
        </section>

        {{-- Maps Utama Center --}}
        <section class="contact sections-bg">
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
        </section>

        {{-- Maps Japan Center --}}
        <section class="contact">
            <div class="container" data-aos="fade-up">
                <h5><b>2. Lokasi Kantor & Pendidikan ACC Japan Center</b></h5>
                <div class="row gx-lg-0 gy-4">
                    <div class="col-lg-12">
                        <iframe class="mb-4 mb-lg-0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.524644510538!2d109.1131374!3d-6.9472685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb913ec72ac99%3A0x15c1e344784a1ea2!2sACC%20Japan%20Centre!5e0!3m2!1sid!2sid!4v1707996435480!5m2!1sid!2sid"
                            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

        {{-- Maps Korean Center --}}
        <section class="contact sections-bg">
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
                                    <p>lpkacckorea@gmail.com</p>
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
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <div id="preloader"></div>


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
                                    alt="ACC Japan">
                                <div class="card-body">
                                    <a href="" target="_blank" class="btn btn-success"
                                        style="width: 100%;"><i class="bi bi-whatsapp"
                                            style="padding-right: 10px;"></i>
                                        Japan Center</a>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6" style="padding: 10px;">
                            <div class="card" style="width: 100%;">
                                <img src="{{ asset('templates/assets/img/korea1.jpg') }}" class="card-img-top"
                                    alt="ACC Japan">
                                <div class="card-body">
                                    <a href="" target="_blank" class="btn btn-success" style="width: 100%;">
                                        <i class="bi bi-whatsapp" style="padding-right: 10px;"></i>
                                        Korean Center</a>
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
                    "icon": "<i class='fa fa-whatsapp'></i><br/><p style='font-size: 10px;'>Japan</p>",
                    "target": "_blank"
                },
                {
                    "url": "https://wa.me/6285842517350",
                    "title": "WhatsApp",
                    "bgcolor": "#128c7e",
                    "color": "#fffff",
                    "icon": "<i class='fa fa-whatsapp'></i><br/><p style='font-size: 10px;'>Korea</p>",
                    "target": "_blank"
                },
                {
                    "url": "https://www.facebook.com/amanahcitracemerlangjapan?mibextid=ZbWKwL",
                    "title": "Facebook Japan",
                    "bgcolor": "#4267B2",
                    "color": "white",
                    "icon": "<i class='fa fa-facebook'></i><br/><p style='font-size: 10px;'>Japan</p>",
                    "target": "_blank"
                },
                {
                    "url": "https://www.instagram.com/accjapancentre_?igsh=enI4bWxjZnJueGJw",
                    "title": "Instagram Japan",
                    "bgcolor": "#F56040",
                    "color": "white",
                    "icon": "<i class='fa fa-instagram'></i><br/><p style='font-size: 10px;'>Japan</p>",
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

    <script>
        const themeToggle = document.getElementById("theme-toggle");
        const prefersDarkMode = window.matchMedia("(prefers-color-scheme: dark)");

        // Set default theme based on user's preference
        if (prefersDarkMode.matches) {
            document.body.classList.add("dark-mode");
        }

        themeToggle.addEventListener("click", () => {
            document.body.classList.toggle("dark-mode");
        });
    </script>

</body>

</html>

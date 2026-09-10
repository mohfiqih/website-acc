<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Pendaftaran Online LPK ACC Japan Centre</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
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
    <!-- Tagify CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css">

    <!-- Lity CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.css">

    {{-- Year Picker --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
        }

        .video-container::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(15, 23, 42, 0.6), rgba(15, 23, 42, 0.85));
        }

        body.registration-page {
            background: #f5f9fc;
            color: #163247;
            font-family: 'Open Sans', sans-serif;
        }

        body.registration-page::before,
        body.registration-page::after {
            display: none;
        }

        .registration-page .header {
            position: sticky;
            top: 0;
            height: 70px;
            padding: 0 12px !important;
            background: rgba(255, 255, 255, 0.96) !important;
            border-bottom: 1px solid #e4eef4;
            box-shadow: 0 6px 22px rgba(4, 99, 146, 0.08);
            backdrop-filter: blur(14px);
        }

        .registration-page .header .logo h1 {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #046392;
            font-size: 16px;
        }

        .registration-page .header .logo img {
            max-height: 38px;
            width: auto;
        }

        .registration-page .navbar a,
        .registration-page .navbar a:focus {
            color: #163247;
        }

        .registration-page .navbar a:hover,
        .registration-page .navbar li:hover>a,
        .registration-page .mobile-nav-show {
            color: #046392;
        }

        .registration-page .min-h-screen {
            min-height: 0;
            padding-bottom: 0;
        }

        .registration-page .registration-hero {
            position: relative;
            isolation: isolate;
            overflow: hidden;
            height: 360px;
            background:
                radial-gradient(circle at 88% 18%, rgba(129, 211, 238, 0.5) 0, rgba(129, 211, 238, 0.08) 22%, transparent 43%),
                radial-gradient(circle at 8% 100%, rgba(31, 126, 168, 0.7) 0, rgba(31, 126, 168, 0.12) 27%, transparent 48%),
                linear-gradient(118deg, #023b5a 0%, #046392 54%, #167ba4 100%);
        }

        .registration-page .registration-hero::before {
            content: "";
            position: absolute;
            z-index: -1;
            width: 420px;
            height: 420px;
            top: -250px;
            right: 12%;
            border: 1px solid rgba(255, 255, 255, 0.24);
            border-radius: 50%;
            box-shadow: 0 0 0 32px rgba(255, 255, 255, 0.035), 0 0 0 64px rgba(255, 255, 255, 0.025);
        }

        .registration-page .registration-hero::after {
            content: "";
            position: absolute;
            inset: 0;
            z-index: -1;
            background: linear-gradient(110deg, rgba(2, 45, 70, 0.7), rgba(4, 99, 146, 0.22));
            pointer-events: none;
        }

        .registration-page .registration-hero video {
            z-index: -2;
            opacity: 0.16;
            mix-blend-mode: screen;
        }

        .registration-page .registration-hero-content {
            text-align: left;
        }

        .registration-page .registration-hero-content>span {
            border: 1px solid rgba(147, 225, 246, 0.3);
            background: rgba(255, 255, 255, 0.1);
        }

        .registration-page .registration-hero h2 {
            max-width: 720px;
            margin: 0 0 14px;
            font-size: clamp(2rem, 4vw, 3.6rem);
            line-height: 1.06;
            letter-spacing: -0.02em;
        }

        .registration-page .registration-hero p {
            max-width: 620px;
            margin: 0;
            line-height: 1.6;
        }

        .registration-page .registration-hero-steps {
            display: flex;
            gap: 10px;
            margin-top: 24px;
            margin-bottom: 24px;
        }

        .registration-page .registration-hero-step {
            display: flex;
            align-items: center;
            gap: 9px;
            min-width: 145px;
            padding: 10px 13px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.8);
            font-size: 11px;
            backdrop-filter: blur(8px);
        }

        .registration-page .registration-hero-step strong {
            color: #a3e5f7;
            font-size: 13px;
        }

        .registration-page .registration-form-shell {
            max-width: 1080px;
            margin-top: -54px;
            padding-bottom: 64px;
        }

        .registration-page .registration-card {
            padding: 42px !important;
            border: 1px solid #e2edf3;
            border-radius: 24px;
            box-shadow: 0 22px 55px rgba(4, 99, 146, 0.13);
        }

        .registration-page #pendaftaranForm>div {
            padding: 6px 0 30px;
            border-bottom: 1px solid #e5eef3;
        }

        .registration-page #pendaftaranForm>div+div {
            margin-top: 30px;
        }

        .registration-page #pendaftaranForm h3 {
            margin-bottom: 22px;
            padding-bottom: 12px;
            color: #163247;
            border-color: #dcebf3;
            font-size: 17px;
        }

        .registration-page #pendaftaranForm h3 span {
            width: 4px;
            height: 22px;
            border-radius: 99px;
            background: #046392 !important;
        }

        .registration-page #pendaftaranForm label {
            color: #294453;
        }

        .registration-page #pendaftaranForm input,
        .registration-page #pendaftaranForm select,
        .registration-page #pendaftaranForm textarea,
        .registration-page #pendaftaranForm .tagify {
            min-height: 44px;
            border-color: #d7e6ee;
            border-radius: 10px;
            background: #fbfdfe;
            box-shadow: none;
        }

        .registration-page #pendaftaranForm input:focus,
        .registration-page #pendaftaranForm select:focus,
        .registration-page #pendaftaranForm textarea:focus,
        .registration-page #pendaftaranForm .tagify--focus {
            border-color: #046392;
            box-shadow: 0 0 0 3px rgba(4, 99, 146, 0.1);
            outline: none;
        }

        .registration-page #button-container {
            padding-top: 26px !important;
            border-bottom: 0 !important;
        }

        .registration-page #button-container button {
            min-height: 48px;
            border-radius: 10px;
        }

        .registration-page #submitBtn {
            background: #046392 !important;
        }

        .registration-page #submitBtn:hover {
            background: #03527a !important;
        }

        .registration-page .footer.modern-footer {
            position: relative;
            overflow: hidden;
            padding-top: 56px;
            background: #fff;
            color: #1b2b36;
            border-top: 1px solid #dcebf3;
        }

        .registration-page .footer.modern-footer::before {
            content: "";
            position: absolute;
            width: 260px;
            height: 260px;
            top: -170px;
            right: 8%;
            border: 22px solid rgba(4, 99, 146, 0.05);
            border-radius: 50%;
        }

        .registration-page .footer.modern-footer .footer-info .logo span,
        .registration-page .footer.modern-footer h4 {
            color: #046392;
        }

        .registration-page .footer.modern-footer .footer-info p,
        .registration-page .footer.modern-footer .footer-links ul a,
        .registration-page .footer.modern-footer .credits,
        .registration-page .footer.modern-footer .copyright {
            color: #53636d;
        }

        .registration-page .footer.modern-footer .footer-links ul a:hover {
            color: #046392;
        }

        .registration-page .footer.modern-footer .copyright {
            border-top: 1px solid #e3edf2;
            padding-top: 18px;
        }

        @media (max-width: 1279px) {
            .registration-page .header {
                z-index: 10000;
            }

            .registration-page .navbar {
                z-index: 10001;
            }

            .registration-page .navbar ul {
                z-index: 10003;
                background: #fff;
                border-left: 1px solid #dcebf3;
                box-shadow: -12px 0 30px rgba(4, 99, 146, 0.12);
            }

            .registration-page .navbar::before {
                z-index: -1;
            }

            .registration-page .navbar a,
            .registration-page .navbar a:focus {
                color: #163247;
            }

            .registration-page .mobile-nav-hide {
                color: #046392;
                z-index: 10004;
            }
        }

        .registration-page .registration-hero {
            align-items: flex-start !important;
        }

        .registration-page .registration-hero-content {
            padding-top: 48px;
        }

        @media (max-width: 767px) {
            .registration-page .header {
                height: 60px;
            }

            .registration-page .header .logo h1 {
                max-width: 210px;
                gap: 5px;
                font-size: 12px;
            }

            .registration-page .header .logo img {
                max-height: 30px;
            }

            .registration-page .registration-hero {
                height: 350px;
            }

            .registration-page .registration-hero h2 {
                padding: 0 12px;
                font-size: 1.9rem;
            }

            .registration-page .registration-hero p {
                padding: 0 22px;
                font-size: 12px;
            }

            .registration-page .registration-hero-content {
                text-align: center;
                padding-top: 26px;
            }

            .registration-page .registration-hero-content>span {
                margin-bottom: 12px;
            }

            .registration-page .registration-hero-steps {
                justify-content: center;
                gap: 6px;
                margin: 18px auto 0;
                padding: 0 8px;
            }

            .registration-page .registration-hero-step {
                min-width: 0;
                flex: 1;
                flex-direction: column;
                gap: 3px;
                padding: 8px 5px;
                font-size: 9px;
                text-align: center;
            }

            .registration-page .registration-form-shell {
                margin-top: -28px;
                padding: 0 12px 36px;
            }

            .registration-page .registration-card {
                padding: 20px 16px !important;
                border-radius: 18px;
            }

            .registration-page #pendaftaranForm>div {
                padding-bottom: 22px;
            }

            .registration-page #pendaftaranForm>div+div {
                margin-top: 22px;
            }

            .registration-page #pendaftaranForm h3 {
                margin-bottom: 16px;
                font-size: 15px;
                line-height: 1.35;
            }

            .registration-page #pendaftaranForm .grid {
                gap: 14px;
            }

            .registration-page #pendaftaranForm input,
            .registration-page #pendaftaranForm select,
            .registration-page #pendaftaranForm textarea {
                min-height: 46px;
                font-size: 13px;
            }

            .registration-page #pendaftaranForm p.text-danger {
                font-size: 10px;
                line-height: 1.45;
            }

            .registration-page .footer.modern-footer {
                padding-top: 42px;
            }
        }

        @media (min-width: 768px) {
            .registration-page .registration-hero {
                height: 460px;
            }

            .registration-page .registration-form-shell {
                margin-top: -44px;
            }

            .registration-page .registration-hero-steps {
                position: relative;
                z-index: 2;
            }
        }
    </style>
</head>

<body class="registration-page">
    <div class="min-h-screen pb-12">
        <section id="hero"
            class="registration-hero relative video-container h-[340px] md:h-[400px] flex items-center justify-center overflow-hidden w-full">
            <video autoplay muted loop playsinline preload="metadata"
                class="absolute z-0 w-auto min-w-full min-h-full max-w-none object-cover">
                <source src="https://amanahcitracemerlang.id/bg-video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <div class="registration-hero-content container relative z-10 mx-auto px-4 text-white">
                <span
                    class="inline-block bg-teal-500/20 text-teal-300 text-xs font-semibold tracking-wider uppercase px-3 py-1 rounded-full mb-3 backdrop-blur-sm">
                    Pendaftaran Online
                </span>
                <h2 class="text-2xl md:text-4xl font-bold tracking-tight mb-3 uppercase drop-shadow-md justify-center">
                    Formulir Pendaftaran Siswa Baru LPK ACC JAPAN CENTRE
                </h2>
                <div class="">
                    <p>Dukuh Gitung, Desa Harjosari Lor, Kec. Adiwerna, Kabupaten Tegal, Jawa Tengah, 52194</p>
                </div>
                <div class="registration-hero-steps" aria-label="Tahapan pendaftaran">
                    <div class="registration-hero-step">
                        <strong>01</strong>
                        <span>Isi data diri</span>
                    </div>
                    <div class="registration-hero-step">
                        <strong>02</strong>
                        <span>Kirim formulir</span>
                    </div>
                    <div class="registration-hero-step">
                        <strong>03</strong>
                        <span>Konfirmasi staff</span>
                    </div>
                </div>
            </div>
        </section>
        <br /><br />
        <div class="registration-form-shell container mx-auto px-4 -mt-10 relative z-20 max-w-4xl">
            <div class="registration-card bg-white rounded-2xl shadow-xl border border-gray-100 p-6 md:p-10">
                <form class="signup-form space-y-8" id="pendaftaranForm">
                    @csrf

                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-5 flex items-center">
                            <span class="w-2 h-6 bg-blue-600 rounded mr-2"></span> Data Pribadi & Kontak
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">EMAIL <span
                                        class="text-red-500">*</span></label>
                                <input type="email"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-800"
                                    name="email" placeholder="Masukan email aktif anda" required>
                                <p class="text-xs text-gray-400 mt-1">Mohon masukkan email aktif.</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">NAMA (KATAKANA)</label>
                                <input type="text"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-800"
                                    name="nama_katakana" placeholder="Nama dalam katakana (opsional)">
                                <p class="text-xs text-gray-400 mt-1">Jika tidak tahu, silakan kosongkan.</p>
                            </div>

                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 mb-1">NAMA LENGKAP (INDONESIA)
                                    <span class="text-red-500">*</span></label>
                                <input type="text"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-800 uppercase"
                                    name="nama_indonesia" placeholder="Masukan nama sesuai KTP" required>
                                <p class="text-xs text-amber-600 font-medium mt-1">Wajib menggunakan huruf KAPITAL.</p>
                            </div>

                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 mb-1">ALAMAT LENGKAP <span
                                        class="text-red-500">*</span></label>
                                <input type="text"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-800 uppercase"
                                    name="alamat" placeholder="Nama Jalan, RT/RW, Desa, Kecamatan, Kabupaten..."
                                    required>
                                <p class="text-xs text-amber-600 font-medium mt-1">Gunakan huruf KAPITAL. Contoh: JL.
                                    BAWAL
                                    GITUNG RT 01/RW 02, DESA HARJOSARI LOR, KECAMATAN ADIWERNA.</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">TANGGAL LAHIR <span
                                        class="text-red-500">*</span></label>
                                <input type="date"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-800"
                                    name="tanggal_lahir" required>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">USIA <span
                                        class="text-red-500">*</span></label>
                                <input type="number"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-800"
                                    name="usia" placeholder="Contoh: 20" required>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">JENIS KELAMIN <span
                                        class="text-red-500">*</span></label>
                                <select name="jenis_kelamin"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-700"
                                    required>
                                    <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                    <option value="LAKI-LAKI">LAKI-LAKI</option>
                                    <option value="PEREMPUAN">PEREMPUAN</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">NO HP AKTif <span
                                        class="text-red-500">*</span></label>
                                <input type="number"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-800"
                                    name="no_hp_aktif" placeholder="Contoh: 0856xxxx" required>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">AGAMA <span
                                        class="text-red-500">*</span></label>
                                <select name="agama"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-700"
                                    required>
                                    <option value="" disabled selected>Pilih Agama</option>
                                    <option value="ISLAM">ISLAM</option>
                                    <option value="PROTESTAN">PROTESTAN</option>
                                    <option value="KATOLIK">KATOLIK</option>
                                    <option value="HINDU">HINDU</option>
                                    <option value="BUDHA">BUDHA</option>
                                    <option value="KONGHUCU">KONGHUCU</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">STATUS PERNIKAHAN <span
                                        class="text-red-500">*</span></label>
                                <select name="status"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-700"
                                    required>
                                    <option value="" disabled selected>Pilih Status</option>
                                    <option value="BELUM MENIKAH">BELUM MENIKAH</option>
                                    <option value="SUDAH MENIKAH">SUDAH MENIKAH</option>
                                    <option value="CERAI HIDUP">CERAI HIDUP</option>
                                    <option value="CERAI MATI">CERAI MATI</option>
                                    <option value="JANDA">JANDA</option>
                                    <option value="DUDA">DUDA</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-5 flex items-center">
                            <span class="w-2 h-6 bg-teal-500 rounded mr-2"></span> Kondisi Fisik & Kesehatan
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">TINGGI BADAN (cm) <span
                                        class="text-red-500">*</span></label>
                                <input type="number"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-800"
                                    name="tinggi_badan" placeholder="Tinggi badan (cm)" required>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">BERAT BADAN (kg) <span
                                        class="text-red-500">*</span></label>
                                <input type="number"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-800"
                                    name="berat_badan" placeholder="Berat badan (kg)" required>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">GOLONGAN DARAH</label>
                                <select name="golongan_darah"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-700">
                                    <option value="" disabled selected>Pilih Golongan Darah</option>
                                    <option value="Belum Mengetahui">Belum Mengetahui</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="O">O</option>
                                    <option value="AB">AB</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">BUTA WARNA <span
                                        class="text-red-500">*</span></label>
                                <select name="buta_warna"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-700"
                                    required>
                                    <option value="" disabled selected>Pilih Opsi</option>
                                    <option value="YA">YA</option>
                                    <option value="TIDAK">TIDAK</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">MINUS MATA KANAN</label>
                                <input type="text"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-800"
                                    name="mata_kanan" placeholder="Contoh: 0,5 (Kosongkan jika normal)">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">MINUS MATA KIRI</label>
                                <input type="text"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-800"
                                    name="mata_kiri" placeholder="Contoh: 1,5 (Kosongkan jika normal)">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-5">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">DOMINAN TANGAN <span
                                        class="text-red-500">*</span></label>
                                <select name="tangan"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-700"
                                    required>
                                    <option value="" disabled selected>Pilih Opsi</option>
                                    <option value="KANAN">KANAN (Normal)</option>
                                    <option value="KIRI">KIRI (Kidal)</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">PERNAH OPERASI <span
                                        class="text-red-500">*</span></label>
                                <select name="pernah_operasi"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-700"
                                    required>
                                    <option value="" disabled selected>Pilih Opsi</option>
                                    <option value="YA">YA</option>
                                    <option value="TIDAK">TIDAK</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">KONSUMSI ALKOHOL <span
                                        class="text-red-500">*</span></label>
                                <select name="apakah_sedang_minum"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-700"
                                    required>
                                    <option value="" disabled selected>Pilih Opsi</option>
                                    <option value="YA">YA</option>
                                    <option value="TIDAK">TIDAK</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">MEROKOK <span
                                        class="text-red-500">*</span></label>
                                <select name="merokok"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-700"
                                    required>
                                    <option value="" disabled selected>Pilih Opsi</option>
                                    <option value="YA">YA</option>
                                    <option value="TIDAK">TIDAK</option>
                                </select>
                            </div>

                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 mb-1">RIWAYAT PENYAKIT DALAM
                                    <span class="text-red-500">*</span></label>
                                <select name="penyakit_dalam"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-700"
                                    required>
                                    <option value="" disabled selected>Pilih Opsi</option>
                                    <option value="YA">YA</option>
                                    <option value="TIDAK">TIDAK</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-5 flex items-center">
                            <span class="w-2 h-6 bg-purple-500 rounded mr-2"></span> Kompetensi & Sifat Pribadi
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">KEAHLIAN <span
                                        class="text-red-500">*</span></label>
                                <input type="text"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-800 tagify-keahlian"
                                    name="keahlian" placeholder="Contoh: peternakan, pertanian" required>
                                <p class="text-xs text-gray-400 mt-1">Maksimal 1 pilihan keahlian utama.</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">SIFAT / KEPRIBADIAN</label>
                                <input type="text"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-800 tagify-sifat"
                                    name="sifat_kepribadian" id="sifat_kepribadian"
                                    placeholder="Contoh: disiplin, jujur">
                                <p class="text-xs text-gray-400 mt-1">Maksimal 1 karakteristik utama.</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">KELEBIHAN UTAMA</label>
                                <input type="text"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-800 tagify-kelebihan"
                                    name="kelebihan" id="kelebihan" placeholder="Contoh: kerja tim, cepat belajar">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">KELEMAHAN UTAMA <span
                                        class="text-red-500">*</span></label>
                                <input type="text"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-800 tagify-kelemahan"
                                    name="kelemahan" id="kelemahan"
                                    placeholder="Contoh: mudah panik, kurang percaya diri" required>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">HOBI <span
                                        class="text-red-500">*</span></label>
                                <input type="text"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-800 tagify-hobi"
                                    name="hobi" id="hobi" placeholder="Contoh: sepak bola, catur" required>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">MOTIVASI UTAMA <span
                                        class="text-red-500">*</span></label>
                                <input type="text"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-800 tagify-motivasi"
                                    name="motivasi" id="motivasi" placeholder="Contoh: Membantu ekonomi orang tua"
                                    required>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-5 flex items-center">
                            <span class="w-2 h-6 bg-amber-500 rounded mr-2"></span> Rencana & Komitmen Kerja di Jepang
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">TARGET MENABUNG SELAMA 3
                                    TAHUN
                                    <span class="text-red-500">*</span></label>
                                <select
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-700"
                                    name="nabung_berapa" required>
                                    <option value="" disabled selected>Pilih target tabungan</option>
                                    <option value="150 JT / 3 TAHUN">150 JT / 3 TAHUN</option>
                                    <option value="200 JT / 3 TAHUN">200 JT / 3 TAHUN</option>
                                    <option value="250 JT / 3 TAHUN">250 JT / 3 TAHUN</option>
                                    <option value="300 JT / 3 TAHUN">300 JT / 3 TAHUN</option>
                                    <option value="BELUM ADA PLANNING MENABUNG">BELUM ADA PLANNING MENABUNG</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">RENCANA SETELAH KEMBALI KE
                                    INDONESIA <span class="text-red-500">*</span></label>
                                <input type="text"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-800 tagify-planning"
                                    name="apa_yang_akan_dilakukan" id="planning"
                                    placeholder="Contoh: Membuka usaha toko kelontong" required>
                                <p class="text-xs text-gray-400 mt-1">Maksimal 2 rencana.</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">PERNAH TINGGAL/BEKERJA DI
                                    JEPANG SEBELUMNYA? <span class="text-red-500">*</span></label>
                                <select name="pernah_tinggal_dijepang"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-700"
                                    required>
                                    <option value="" disabled selected>Pilih Opsi</option>
                                    <option value="YA">YA</option>
                                    <option value="TIDAK">TIDAK</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">JIKA YA, APA KUALIFIKASI
                                    YANG
                                    DILAMAR?</label>
                                <textarea
                                    class="w-full px-4 py-2 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-800 h-[43px] resize-none"
                                    name="kualifikasi" placeholder="Tulis kualifikasi lama anda..."></textarea>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-5 flex items-center">
                            <span class="w-2 h-6 bg-indigo-500 rounded mr-2"></span> Riwayat Pendidikan Utama
                        </h3>

                        <div class="space-y-6 bg-gray-50/50 p-4 md:p-6 rounded-xl border border-gray-100">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="md:col-span-1">
                                    <label class="block text-xs font-semibold text-gray-600 uppercase mb-1">Nama SD
                                        <span class="text-red-500">*</span></label>
                                    <input type="text"
                                        class="w-full px-3 py-2 bg-white border border-gray-200 rounded-lg text-sm uppercase"
                                        name="sekolah_dasar" placeholder="NAMA SD (KAPITAL)" required>
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-gray-600 uppercase mb-1">Tahun Masuk
                                        <span class="text-red-500">*</span></label>
                                    <input type="number"
                                        class="w-full px-3 py-2 bg-white border border-gray-200 rounded-lg text-sm yearpicker"
                                        name="tahun_masuk_sd" placeholder="Contoh: 2008" required>
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-gray-600 uppercase mb-1">Tahun Lulus
                                        <span class="text-red-500">*</span></label>
                                    <input type="number"
                                        class="w-full px-3 py-2 bg-white border border-gray-200 rounded-lg text-sm yearpicker"
                                        name="tahun_keluar_sd" placeholder="Contoh: 2014" required>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 border-t pt-4">
                                <div class="md:col-span-1">
                                    <label class="block text-xs font-semibold text-gray-600 uppercase mb-1">Nama SMP
                                        <span class="text-red-500">*</span></label>
                                    <input type="text"
                                        class="w-full px-3 py-2 bg-white border border-gray-200 rounded-lg text-sm uppercase"
                                        name="sekolah_menengah_pertama" placeholder="NAMA SMP (KAPITAL)" required>
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-gray-600 uppercase mb-1">Tahun Masuk
                                        <span class="text-red-500">*</span></label>
                                    <input type="number"
                                        class="w-full px-3 py-2 bg-white border border-gray-200 rounded-lg text-sm yearpicker"
                                        name="tahun_masuk_smp" placeholder="Contoh: 2014" required>
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-gray-600 uppercase mb-1">Tahun Lulus
                                        <span class="text-red-500">*</span></label>
                                    <input type="number"
                                        class="w-full px-3 py-2 bg-white border border-gray-200 rounded-lg text-sm yearpicker"
                                        name="tahun_keluar_smp" placeholder="Contoh: 2017" required>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 border-t pt-4">
                                <div class="md:col-span-1">
                                    <label class="block text-xs font-semibold text-gray-600 uppercase mb-1">Nama
                                        SMA/SMK
                                        <span class="text-red-500">*</span></label>
                                    <input type="text"
                                        class="w-full px-3 py-2 bg-white border border-gray-200 rounded-lg text-sm uppercase"
                                        name="sekolah_menengah_atas" placeholder="NAMA SEKOLAH" required>
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-gray-600 uppercase mb-1">Tahun Masuk
                                        <span class="text-red-500">*</span></label>
                                    <input type="number"
                                        class="w-full px-3 py-2 bg-white border border-gray-200 rounded-lg text-sm yearpicker"
                                        name="tahun_masuk_smak" placeholder="Mulai" required>
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-gray-600 uppercase mb-1">Tahun Lulus
                                        <span class="text-red-500">*</span></label>
                                    <input type="number"
                                        class="w-full px-3 py-2 bg-white border border-gray-200 rounded-lg text-sm yearpicker"
                                        name="tahun_keluar_smak" placeholder="Lulus" required>
                                </div>
                                <div>
                                    <label
                                        class="block text-xs font-semibold text-gray-600 uppercase mb-1">Jurusan</label>
                                    <input type="text"
                                        class="w-full px-3 py-2 bg-white border border-gray-200 rounded-lg text-sm uppercase"
                                        name="jurusan" placeholder="Contoh: TKJ / IPA">
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                            <div class="bg-blue-50/40 p-4 rounded-xl border border-blue-100/50">
                                <label class="block text-sm font-semibold text-blue-900 mb-1">Perguruan Tinggi (Jika
                                    Ada)</label>
                                <p class="text-xs text-blue-700/70 mb-3">Maksimal 2 data, gunakan huruf kapital.</p>
                                <div id="perguruan-wrapper" class="space-y-2"></div>
                                <button type="button"
                                    class="mt-2 inline-flex items-center text-xs font-bold text-white bg-blue-600 hover:bg-blue-700 px-3 py-2 rounded-lg transition-all"
                                    id="addPerguruanBtn">
                                    + Tambah Perguruan Tinggi
                                </button>
                            </div>

                            <div class="bg-teal-50/40 p-4 rounded-xl border border-teal-100/50">
                                <label class="block text-sm font-semibold text-teal-900 mb-1">Riwayat Pengalaman
                                    Kerja</label>
                                <p class="text-xs text-teal-700/70 mb-3">Maksimal 3 pengalaman, gunakan huruf kapital.
                                </p>
                                <div id="pengalaman-wrapper" class="space-y-2"></div>
                                <button type="button"
                                    class="mt-2 inline-flex items-center text-xs font-bold text-white bg-teal-600 hover:bg-teal-700 px-3 py-2 rounded-lg transition-all"
                                    id="addPengalamanBtn">
                                    + Tambah Pengalaman Kerja
                                </button>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-5 flex items-center">
                            <span class="w-2 h-6 bg-emerald-500 rounded mr-2"></span> Kompetensi Bahasa & Pengalaman
                            Internasional
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">BAHASA ASING YANG DIKUASAI
                                    <span class="text-red-500">*</span></label>
                                <select name="bahasa_asing"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-700"
                                    id="bahasa_asing" required>
                                    <option value="" disabled selected>Pilih Opsi</option>
                                    <option value="INGGRIS">INGGRIS</option>
                                    <option value="JEPANG">JEPANG</option>
                                    <option value="JERMAN">JERMAN</option>
                                    <option value="KOREA">KOREA</option>
                                    <option value="MALAYSIA">MALAYSIA</option>
                                    <option value="THAILAND">THAILAND</option>
                                    <option value="ITALIA">ITALIA</option>
                                    <option value="BELANDA">BELANDA</option>
                                    <option value="MANDARIN">MANDARIN</option>
                                    <option value="ARAB">ARAB</option>
                                    <option value="PERANCIS">PERANCIS</option>
                                    <option value="SPANYOL">SPANYOL</option>
                                    <option value="RUSIA">RUSIA</option>
                                    <option value="PORTUGIS">PORTUGIS</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">PERNAH KE JEPANG
                                    SEBELUMNYA?
                                    <span class="text-red-500">*</span></label>
                                <select name="pernah_keluar_negeri"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-700"
                                    id="pernah_keluar_negeri" required>
                                    <option value="" disabled selected>Pilih Opsi</option>
                                    <option value="YA">YA</option>
                                    <option value="TIDAK">TIDAK</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">JIKA PERNAH, SEBUTKAN
                                    TANGGAL
                                    KEBERANGKATAN</label>
                                <input type="date"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-800"
                                    name="tanggal_keluar_negeri">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">PERNAH KE LUAR NEGERI
                                    (NEGARA
                                    LAIN)? <span class="text-red-500">*</span></label>
                                <select name="pernah_keluar_negeri_lain"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-700"
                                    id="pernah_keluar_negeri_lain" required>
                                    <option value="" disabled selected>Pilih Opsi</option>
                                    <option value="YA">YA</option>
                                    <option value="TIDAK">TIDAK</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">JIKA NEGARA LAIN, SEBUTKAN
                                    NAMA
                                    NEGARA</label>
                                <input type="text"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-800"
                                    name="negara" placeholder="Tulis nama negara jika pernah">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">APAKAH ADA KERABAT DI
                                    JEPANG?
                                    <span class="text-red-500">*</span></label>
                                <select name="kerabat_dijepang"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-700"
                                    id="kerabat_dijepang">
                                    <option value="" disabled selected>Pilih Opsi</option>
                                    <option value="YA">YA</option>
                                    <option value="TIDAK">TIDAK</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">JIKA ADA, APA HUBUNGAN
                                    KERABAT
                                    TERSEBUT?</label>
                                <select name="hubungan_kerabat_dijepang"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-700">
                                    <option value="" disabled selected>Pilih Hubungan Kerabat</option>
                                    <option value="TEMAN">TEMAN</option>
                                    <option value="KELUARGA">KELUARGA</option>
                                    <option value="TETANGGA">TETANGGA</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">BERSEDIA BELAJAR BAHASA DI
                                    LPK
                                    ACC? <span class="text-red-500">*</span></label>
                                <select name="belajar_bahasa"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-700"
                                    id="belajar_bahasa">
                                    <option value="" disabled selected>Pilih Opsi</option>
                                    <option value="YA">YA</option>
                                    <option value="TIDAK">TIDAK</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">BUKU BAHASA JEPANG YANG
                                    PERNAH
                                    DIPAKAI</label>
                                <select name="buku_yang_dipakai"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-700">
                                    <option value="" disabled selected>Pilih Buku yang digunakan</option>
                                    <option value="NIHONGO">MINNA NO NIHONGO</option>
                                    <option value="LAINNYA">LAINNYA</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">TOTAL BAB YANG TELAH
                                    DIPELAJARI</label>
                                <input type="number"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-800"
                                    name="bab_yang_dipelajari" placeholder="Contoh: 25 (Kosongkan jika belum pernah)">
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-5 flex items-center">
                            <span class="w-2 h-6 bg-rose-500 rounded mr-2"></span> Data Latar Belakang Keluarga
                        </h3>

                        <div
                            class="grid grid-cols-1 md:grid-cols-3 gap-4 bg-gray-50/50 p-4 rounded-xl border border-gray-100 mb-6">
                            <div class="md:col-span-3">
                                <p class="text-xs font-bold text-gray-500 uppercase tracking-wider">Informasi Ayah</p>
                            </div>
                            <div>
                                <input type="text"
                                    class="w-full px-3 py-2 bg-white border border-gray-200 rounded-lg text-sm uppercase"
                                    name="nama_ayah" placeholder="NAMA LENGKAP AYAH">
                            </div>
                            <div>
                                <input type="number"
                                    class="w-full px-3 py-2 bg-white border border-gray-200 rounded-lg text-sm"
                                    name="usia_ayah" placeholder="USIA AYAH">
                            </div>
                            <div>
                                <input type="text"
                                    class="w-full px-3 py-2 bg-white border border-gray-200 rounded-lg text-sm"
                                    name="pekerjaan_ayah" placeholder="PEKERJAAN AYAH">
                            </div>
                        </div>

                        <div
                            class="grid grid-cols-1 md:grid-cols-3 gap-4 bg-gray-50/50 p-4 rounded-xl border border-gray-100 mb-6">
                            <div class="md:col-span-3">
                                <p class="text-xs font-bold text-gray-500 uppercase tracking-wider">Informasi Ibu</p>
                            </div>
                            <div>
                                <input type="text"
                                    class="w-full px-3 py-2 bg-white border border-gray-200 rounded-lg text-sm uppercase"
                                    name="nama_ibu" placeholder="NAMA LENGKAP IBU">
                            </div>
                            <div>
                                <input type="number"
                                    class="w-full px-3 py-2 bg-white border border-gray-200 rounded-lg text-sm"
                                    name="usia_ibu" placeholder="USIA IBU">
                            </div>
                            <div>
                                <input type="text"
                                    class="w-full px-3 py-2 bg-white border border-gray-200 rounded-lg text-sm"
                                    name="pekerjaan_ibu" placeholder="PEKERJAAN IBU">
                            </div>
                        </div>

                        <div class="bg-rose-50/40 p-4 rounded-xl border border-rose-100/50 mb-6">
                            <label class="block text-sm font-semibold text-rose-900 mb-1">Data Saudara Kandung</label>
                            <p class="text-xs text-rose-700/70 mb-3">Maksimal 6 data, gunakan huruf kapital.</p>
                            <div id="saudara-wrapper" class="space-y-2"></div>
                            <button type="button"
                                class="mt-2 inline-flex items-center text-xs font-bold text-white bg-rose-600 hover:bg-rose-700 px-3 py-2 rounded-lg transition-all"
                                id="add-saudara-btn">
                                + Tambah Saudara
                            </button>
                        </div>
                        <input type="hidden" name="nama_saudara" id="nama_saudara_hidden">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">APAKAH KELUARGA MENYETUJUI
                                    RENCANA ANDA? <span class="text-red-500">*</span></label>
                                <select name="pendapat_keluarga"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-700"
                                    id="pendapat_keluarga" required>
                                    <option value="" disabled selected>Pilih Opsi</option>
                                    <option value="SETUJU">SETUJU</option>
                                    <option value="TIDAK SETUJU">TIDAK SETUJU</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">NOMOR HP KELUARGA YANG
                                    DAPAT
                                    DIHUBUNGI <span class="text-red-500">*</span></label>
                                <input type="number"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-800"
                                    name="no_hp_keluarga" placeholder="Contoh: 0812xxxx" required>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 border-b pb-2 mb-5 flex items-center">
                            <span class="w-2 h-6 bg-cyan-500 rounded mr-2"></span> Kelas, Atribut & Mentor Pilihan
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">NAMA MENTOR
                                    KONSULTASI</label>
                                <input type="text"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-800"
                                    name="nama_mentor" value="{{ $mentor }}"
                                    placeholder="Nama staff/mentor terkait">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">UKURAN BAJU <span
                                        class="text-red-500">*</span></label>
                                <select name="ukuran_baju"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-700"
                                    id="ukuran_baju" required>
                                    <option value="" disabled selected>Pilih ukuran baju</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">NOMOR SEPATU (UKURAN) <span
                                        class="text-red-500">*</span></label>
                                <input type="number"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-800"
                                    name="ukuran_sepatu" placeholder="Contoh: 41" required>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">PILIHAN SESI KELAS <span
                                        class="text-red-500">*</span></label>
                                <select name="pilih_kelas"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-700"
                                    id="pilih_kelas" required>
                                    <option value="" disabled selected>Pilih Opsi Kelas</option>
                                    <option value="Kelas Pagi">Kelas Pagi (09.00 - 16.00 WIB)</option>
                                    <option value="Kelas Malam">Kelas Malam (16.00 - 22.00 WIB)</option>
                                </select>
                            </div>

                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 mb-1">PILIHAN PROGRAM UTAMA <span
                                        class="text-red-500">*</span></label>
                                <select name="pilih_program"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all text-sm text-gray-700"
                                    id="pilih_program" required>
                                    <option value="" disabled selected>Pilih Opsi Program</option>
                                    <option value="Program Magang">Program Magang</option>
                                    <option value="Program Tokutei Ginou (TG)">Program Tokutei Ginou (TG)</option>
                                    <option value="Program Matching Job Magang">Program Matching Job Magang</option>
                                    <option value="Program Matching Job TG">Program Matching Job TG</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="pt-2 border-t flex flex-col md:flex-row justify-end gap-2" id="button-container">
                        <button type="button" id="resetBtn"
                            class="w-full md:w-auto px-3 py-3 bg-red-600 hover:bg-red-700 text-white font-bold text-sm tracking-wide uppercase rounded-xl shadow-lg shadow-red-900/10 transition-all transform hover:-translate-y-0.5 active:translate-y-0 duration-150 cursor-pointer order-1 md:order-1">
                            Reset Formulir
                        </button>

                        <button type="submit" id="submitBtn"
                            class="w-full md:w-auto px-3 py-3 bg-[#046392] hover:bg-[#03527a] text-white font-bold text-sm tracking-wide uppercase rounded-xl shadow-lg shadow-blue-900/20 transition-all transform hover:-translate-y-0.5 active:translate-y-0 duration-150 cursor-pointer order-2 md:order-2">
                            Daftar Sekarang
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('landing.footer')

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Tagify JS -->
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>

    {{-- JS Pendaftaran --}}
    {{-- <script src="{{ asset('js/scroll_up_next_previous.js') }}"></script> --}}
    <script src='https://widgets.sociablekit.com/google-business-profile/widget.js' async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            if (window.location.hash === "#galeri") {
                document.getElementById("galeri").scrollIntoView({
                    behavior: "smooth"
                });
            }
        });

        $(window).on('load', function() {
            $('#preloader').fadeOut('slow');
        });

        $('#bahasa_asing').select2({
            tags: true,
            placeholder: 'Silahkan ketik bahasa asing yang ingin anda cari...',
            width: '100%',
            language: {
                noResults: function() {
                    return "Klik pilih atau tekan enter untuk menambahkan..";
                }
            }
        });

        // submit
        document.getElementById('pendaftaranForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            const result = await Swal.fire({
                title: 'Yakin ingin kirim data?',
                text: 'Pastikan semua data sudah benar sebelum dikirim.',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Daftar',
                cancelButtonText: 'Batal',
                reverseButtons: true
            });

            if (!result.isConfirmed) return;

            Swal.fire({
                title: 'Mengirim data pendaftaran...',
                text: 'Mohon tunggu sebentar.',
                didOpen: () => Swal.showLoading(),
                allowOutsideClick: false
            });

            const form = e.target;

            try {

                // ==================================================
                // 1. KIRIM KE LARAVEL
                // ==================================================

                console.log('Mengirim ke Laravel...');

                const laravelResponse = await fetch(
                    "{{ route('store_pendaftaran_baru') }}", {
                        method: "POST",
                        body: new FormData(form),
                        headers: {
                            "X-CSRF-TOKEN": document
                                .querySelector('meta[name="csrf-token"]')
                                .getAttribute('content'),

                            "Accept": "application/json"
                        }
                    }
                );

                console.log(
                    'Response Laravel:',
                    laravelResponse.status
                );

                let laravelResult;

                try {
                    laravelResult = await laravelResponse.json();
                } catch (error) {
                    throw new Error(
                        'Response dari server Laravel tidak valid.'
                    );
                }

                console.log(
                    'Data Laravel:',
                    laravelResult
                );


                // ==================================================
                // 2. CEK HASIL LARAVEL
                // ==================================================

                if (
                    !laravelResponse.ok ||
                    !laravelResult.success
                ) {

                    // ----------------------------------------------
                    // DUPLICATE
                    // ----------------------------------------------

                    if (laravelResult.duplicate) {

                        Swal.close();

                        await Swal.fire({
                            icon: 'warning',
                            title: 'Data sudah terdaftar!',
                            text: laravelResult.message ||
                                'Data anda sudah terdaftar di LPK ACC Japan Centre!'
                        });

                        return;
                    }


                    // ----------------------------------------------
                    // VALIDATION ERROR
                    // ----------------------------------------------

                    if (laravelResult.errors) {

                        let errorMessage = '';

                        Object.values(
                            laravelResult.errors
                        ).forEach(errors => {

                            errors.forEach(message => {
                                errorMessage +=
                                    message + '<br>';
                            });

                        });

                        Swal.close();

                        await Swal.fire({
                            icon: 'error',
                            title: 'Validasi gagal',
                            html: errorMessage
                        });

                        return;
                    }


                    throw new Error(
                        laravelResult.message ||
                        'Gagal menyimpan data ke database.'
                    );
                }


                // ==================================================
                // 3. LARAVEL BERHASIL
                // ==================================================

                console.log(
                    'Database berhasil disimpan.'
                );

                console.log(
                    'Random ID:',
                    laravelResult.randomId
                );


                // ==================================================
                // 4. KIRIM KE GOOGLE APPS SCRIPT
                // ==================================================
                //
                // PENTING:
                // Tidak menggunakan await.
                //
                // Jadi browser TIDAK menunggu Google selesai.
                // ==================================================

                console.log(
                    'Mengirim ke Google Apps Script...'
                );

                const formDataGoogle = new FormData(form);

                fetch(
                        "https://script.google.com/macros/s/AKfycbyK-RPpoWJcxR5BQmHNSitFaoRmNM8L7P_NmL-FFsh7jS3F4sfLkAX9KVnp2FsSYKMe/exec", {
                            method: "POST",
                            body: formDataGoogle,
                            mode: "no-cors",
                            keepalive: true
                        }
                    )
                    .then(() => {

                        console.log(
                            'Google Apps Script request selesai.'
                        );

                    })
                    .catch((googleError) => {

                        console.error(
                            'Google Apps Script error:',
                            googleError
                        );

                    });


                // ==================================================
                // 5. LANGSUNG SUCCESS
                // ==================================================

                Swal.close();

                await Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: 'Data pendaftaran telah dikirim dan disimpan. Silakan konfirmasi ke staff yang sudah anda chat. Terimakasih.'
                });


                // ==================================================
                // 6. RESET FORM
                // ==================================================

                form.reset();


            } catch (error) {

                console.error(
                    'Error:',
                    error
                );

                Swal.close();

                await Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: error.message ||
                        'Terjadi kesalahan saat mengirim data. Silakan coba lagi.'
                });
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
            const keahlianInput = document.querySelector('.tagify-keahlian');
            const sifatInput = document.querySelector('.tagify-sifat');
            const kelebihanInput = document.querySelector('.tagify-kelebihan');
            const kelemahanInput = document.querySelector('.tagify-kelemahan');
            const hobiInput = document.querySelector('.tagify-hobi');
            const motivasiInput = document.querySelector('.tagify-motivasi');
            const planningInput = document.querySelector('.tagify-planning');

            const keahlianTagify = new Tagify(keahlianInput, {
                whitelist: [
                    "PERTANIAN", "PETERNAKAN", "PERIKANAN", "PERKEBUNAN", "PERDAGANGAN",
                    "KONSTRUKSI", "TEKNIK LISTRIK", "TEKNIK MESIN", "TEKNIK SIPIL", "TEKNIK KOMPUTER",
                    "IT SUPPORT", "PEMROGRAMAN", "DESAIN GRAFIS", "MULTIMEDIA", "FOTOGRAFI",
                    "VIDEOGRAFI", "ADMINISTRASI", "KEUANGAN", "AKUNTANSI", "PERPAJAKAN",
                    "PENDIDIKAN", "KESEHATAN", "PERAWATAN", "BIDAN", "FARMASI",
                    "PARIWISATA", "PERHOTELAN", "TATA BOGA", "TATA BUSANA", "TATA RIAS",
                    "JURNALISTIK", "HUMAS", "PELAYANAN PUBLIK", "MARKETING", "SALES",
                    "LOGISTIK", "TRANSPORTASI", "KEAMANAN", "KETRAMPILAN TANGAN",
                    "PENGELASAN", "PENGOLAHAN MAKANAN", "SERVICE ELEKTRONIK", "MONTIR",
                    "BARISTA", "KASIR", "PRAMUNIAGA", "CALL CENTER", "DATA ENTRY"
                ],
                maxTags: 1,
                dropdown: {
                    enabled: 0,
                    maxItems: 20
                },
                transformTag: tagData => {
                    tagData.value = tagData.value.toUpperCase();
                }
            });

            const sifatTagify = new Tagify(sifatInput, {
                whitelist: [
                    "JUJUR", "DISIPLIN", "SABAR", "RAJIN", "PERCAYA DIRI", "TEPAT WAKTU", "INISIATIF",
                    "TELITI",
                    "MANDIRI", "PEKERJA KERAS", "MUDAH BERGAUL", "FLEKSIBEL", "BERPIKIR POSITIF",
                    "BERSAHABAT",
                    "KREATIF", "MOTIVASI TINGGI", "ADAPTIF", "CERDAS EMOSIONAL"
                ],
                maxTags: 1,
                dropdown: {
                    enabled: 0,
                    maxItems: 20
                },
                transformTag: tagData => {
                    tagData.value = tagData.value.toUpperCase();
                }
            });

            const kelebihanTagify = new Tagify(kelebihanInput, {
                whitelist: [
                    "KOMUNIKATIF", "CEPAT BELAJAR", "KERJA TIM", "BERPIKIR KRITIS", "KEPEMIMPINAN",
                    "PROBLEM SOLVING",
                    "MULTITASKING", "MANAJEMEN WAKTU", "KERJA DI BAWAH TEKANAN", "PEMAHAMAN CEPAT",
                    "BERORIENTASI TARGET",
                    "INOVATIF", "RESPONSIF", "PEKA TERHADAP SEKITAR", "ANALITIS"
                ],
                maxTags: 1,
                dropdown: {
                    enabled: 0,
                    maxItems: 20
                },
                transformTag: tagData => {
                    tagData.value = tagData.value.toUpperCase();
                }
            });

            const kelemahanTagify = new Tagify(kelemahanInput, {
                whitelist: [
                    "KURANG PERCAYA DIRI", "MUDAH PANIK", "TIDAK SABARAN", "SULIT FOKUS",
                    "KURANG PENGALAMAN",
                    "TERLALU PERFEKSIONIS", "MUDAH TERPENGARUH", "KURANG KOMUNIKATIF", "MUDAH BOSAN",
                    "SUKA MENUNDA", "KURANG BERANI", "TERLALU KRITIS", "SULIT MENOLAK", "TERLALU JUJUR"
                ],
                maxTags: 1,
                dropdown: {
                    enabled: 0,
                    maxItems: 20
                },
                transformTag: tagData => {
                    tagData.value = tagData.value.toUpperCase();
                }
            });

            const hobiTagify = new Tagify(hobiInput, {
                whitelist: [
                    "MEMBACA", "MENULIS", "OLAHRAGA", "SEPAK BOLA", "BULU TANGKIS",
                    "BERSEPEDA", "MEMASAK", "BERKEBUN", "FOTOGRAFI", "VIDEOGRAFI",
                    "GAMING", "MEMANCING", "MUSIK", "MENYANYI", "MENGGAMBAR",
                    "MELUKIS", "TRAVELING", "NONTON FILM", "DESAIN", "KERJINAN TANGAN"
                ],
                maxTags: 1,
                dropdown: {
                    enabled: 0,
                    maxItems: 15
                },
                transformTag: tagData => {
                    tagData.value = tagData.value.toUpperCase();
                }
            });

            const motivasiTagify = new Tagify(motivasiInput, {
                whitelist: [
                    "INGIN MANDIRI", "MEMBANTU ORANG TUA", "MENGEMBANGKAN DIRI", "BELAJAR HAL BARU",
                    "MENINGKATKAN KETERAMPILAN", "MENDAPAT PEKERJAAN", "MEMPERBAIKI EKONOMI KELUARGA",
                    "MENCAPAI CITA-CITA", "INGIN SUKSES", "MEMILIKI PENGHASILAN", "MENGISI WAKTU LUANG",
                    "MENGABDI PADA MASYARAKAT", "INGIN PUNYA KARIR", "BELAJAR DISIPLIN",
                    "MENGIKUTI PROGRAM PEMERINTAH"
                ],
                maxTags: 1,
                dropdown: {
                    enabled: 0,
                    maxItems: 15
                },
                transformTag: tagData => {
                    tagData.value = tagData.value.toUpperCase();
                }
            });

            const planningTagify = new Tagify(planningInput, {
                whitelist: [
                    "BERWIRAUSAHA",
                    "MELANJUTKAN KULIAH",
                    "MENCARI PEKERJAAN",
                    "MEMBUKA USAHA KELUARGA",
                    "KURSUS / PELATIHAN",
                    "MENABUNG UNTUK INVESTASI",
                    "MENIKAH",
                    "MEMBANTU ORANG TUA",
                    "BANGUN RUMAH",
                    "MELANJUTKAN BISNIS",
                    "FREELANCE",
                    "KERJA KE JEPANG LAGI",
                    "BELUM ADA RENCANA"
                ],
                maxTags: 1,
                dropdown: {
                    enabled: 0,
                    maxItems: 20
                },
                transformTag: tagData => {
                    tagData.value = tagData.value.toUpperCase();
                }
            });
        });

        // save session form
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('pendaftaranForm');
            const formInputs = form.querySelectorAll('input, select, textarea');
            const storageKey = 'pendaftaranFormData';

            function saveFormData() {
                const data = {};
                formInputs.forEach(input => {
                    if (input.type === 'checkbox' || input.type === 'radio') {
                        data[input.name] = input.checked;
                    } else {
                        data[input.name] = input.value;
                    }
                });
                localStorage.setItem(storageKey, JSON.stringify(data));
            }

            function loadFormData() {
                const savedData = localStorage.getItem(storageKey);
                if (!savedData) return;
                const data = JSON.parse(savedData);

                formInputs.forEach(input => {
                    if (data.hasOwnProperty(input.name)) {
                        if (input.type === 'checkbox' || input.type === 'radio') {
                            input.checked = data[input.name];
                        } else {
                            input.value = data[input.name];
                        }
                    }
                });
            }

            formInputs.forEach(input => {
                input.addEventListener('input', saveFormData);
                input.addEventListener('change', saveFormData);
            });

            loadFormData();
            const resetBtn = document.getElementById('resetBtn');

            if (resetBtn) {
                resetBtn.onclick = function() {
                    Swal.fire({
                        title: 'Yakin ingin menghapus semua data?',
                        text: 'Semua isian akan dikosongkan permanen dari penyimpanan browser!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Ya, hapus semua',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            localStorage.removeItem(storageKey);
                            form.reset();
                            document.querySelectorAll('.tags-look').forEach(el => el.value = '');
                            Swal.fire('Berhasil!', 'Semua data berhasil dihapus.', 'success');
                        }
                    });
                };
            }
        });
    </script>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.yearpicker').datepicker({
                format: "yyyy",
                viewMode: "years",
                minViewMode: "years",
                autoclose: true
            });
        });

        let pengalamanCount = 0;
        const maxPengalaman = 3;

        document.getElementById('addPengalamanBtn').addEventListener('click', function() {
            if (pengalamanCount >= maxPengalaman) return alert('Maksimal 3 pengalaman kerja.');

            const wrapper = document.getElementById('pengalaman-wrapper');
            const div = document.createElement('div');
            div.classList.add('row', 'mb-2', 'pengalaman-row');
            div.innerHTML = `
                <div class="col-md-2">
                    <input type="text" name="tahun_awal[]" class="form-control yearpciker" placeholder="TAHUN AWAL" required>
                </div>
                <div class="col-md-2">
                    <input type="text" name="tahun_akhir[]" class="form-control yearpciker" placeholder="TAHUN AKHIR" required>
                </div>
                <div class="col-md-4">
                    <input type="text" name="nama_perusahaan[]" class="form-control" placeholder="NAMA PERUSAHAAN" required>
                </div>
                <div class="col-md-3">
                    <input type="text" name="bagian[]" class="form-control" placeholder="BAGIAN" required>
                </div>
                <div class="col-md-1 d-flex align-items-center">
                    <button type="button" class="btn btn-danger btn-sm remove-row">&times;</button>
                </div>
            `;
            wrapper.appendChild(div);
            pengalamanCount++;

            div.querySelector('.remove-row').addEventListener('click', function() {
                div.remove();
                pengalamanCount--;
            });
        });

        let saudaraCount = 0;
        const maxSaudara = 6;

        function renderSaudaraRow(index) {
            return `
            <div class="row align-items-center mb-2 saudara-row" data-index="${index}">
                <div class="col-md-2">
                    <select class="form-control hubungan">
                        <option value="">HUBUNGAN</option>
                        <option value="KAKAK">KAKAK</option>
                        <option value="ADIK">ADIK</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control nama" placeholder="NAMA LENGKAP (KAPITAL)">
                </div>
                <div class="col-md-2">
                    <input type="number" class="form-control usia" placeholder="USIA">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control pekerjaan" placeholder="PEKERJAAN (KAPITAL)">
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-danger btn-sm remove-saudara">&times;</button>
                </div>
            </div>`;
        }

        document.getElementById('add-saudara-btn').addEventListener('click', function() {
            if (saudaraCount >= maxSaudara) {
                alert('Maksimal 6 saudara.');
                return;
            }
            const wrapper = document.getElementById('saudara-wrapper');
            wrapper.insertAdjacentHTML('beforeend', renderSaudaraRow(saudaraCount));
            saudaraCount++;
        });

        document.getElementById('saudara-wrapper').addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-saudara')) {
                e.target.closest('.saudara-row').remove();
                saudaraCount--;
            }
        });

        function generateNamaSaudaraString() {
            const rows = document.querySelectorAll('.saudara-row');
            const data = [];

            rows.forEach(row => {
                const hubungan = row.querySelector('.hubungan').value.trim().toUpperCase();
                const nama = row.querySelector('.nama').value.trim().toUpperCase();
                const usia = row.querySelector('.usia').value.trim();
                const pekerjaan = row.querySelector('.pekerjaan').value.trim().toUpperCase();

                if (hubungan && nama && usia && pekerjaan) {
                    data.push(`${hubungan} - ${nama} - ${usia} - ${pekerjaan}`);
                }
            });

            document.getElementById('nama_saudara_hidden').value = data.join(', ');
        }

        document.querySelector('form').addEventListener('submit', function(e) {
            generateNamaSaudaraString();
        });

        let perguruanCount = 0;
        const maxPerguruan = 2;

        document.getElementById('addPerguruanBtn').addEventListener('click', function() {
            if (perguruanCount >= maxPerguruan) {
                alert('Maksimal 2 perguruan tinggi.');
                return;
            }

            const wrapper = document.getElementById('perguruan-wrapper');

            const div = document.createElement('div');
            div.classList.add('row', 'mb-2', 'perguruan-row');
            div.innerHTML = `
            <div class="col-md-6">
                <input type="text" name="nama_perguruan[]" class="form-control" placeholder="NAMA PERGURUAN TINGGI" required>
            </div>
            <div class="col-md-5">
                <input type="text" name="program_studi[]" class="form-control" placeholder="PROGRAM STUDI" required>
            </div>
            <div class="col-md-1 d-flex align-items-center">
                <button type="button" class="btn btn-danger btn-sm remove-perguruan">&times;</button>
            </div>
          `;

            wrapper.appendChild(div);
            perguruanCount++;

            div.querySelector('.remove-perguruan').addEventListener('click', function() {
                div.remove();
                perguruanCount--;
            });
        });
    </script>
</body>

</html>

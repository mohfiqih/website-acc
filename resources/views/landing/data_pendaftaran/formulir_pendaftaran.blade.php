<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Pendaftaran Online LPK ACC Japan Centre</title>
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
    </style>
</head>

<body>
    <header id="header" class="header d-flex align-items-center" style="padding: 10px;">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center">
                <h1>
                    <img src="https://www.amanahcitracemerlang.id/storage/images/1738849208_WhatsApp_Image_2025-02-06_at_20.04.03-removebg-preview.png"
                        class="img-fluid">
                </h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/">About</a></li>
                    <li class="dropdown"><a href="#"><span>Program LPK ACC</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="/">Program Magang</a></li>
                            <li><a href="/">Program Tokutei Ginou</a></li>
                            <li><a href="/">Program Matching Job</a></li>
                        </ul>
                    </li>
                    <li><a href="https://maps.app.goo.gl/Vy6Jjeq3v7Y3tMkAA">Lokasi</a></li>
                </ul>
            </nav>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        </div>
    </header>

    <div class="min-h-screen pb-12">
        <section id="hero"
            class="relative video-container h-[340px] md:h-[400px] flex items-center justify-center overflow-hidden w-full">
            <video autoplay muted loop playsinline
                class="absolute z-0 w-auto min-w-full min-h-full max-w-none object-cover">
                <source src="https://amanahcitracemerlang.id/bg-video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <div class="container relative z-10 mx-auto px-4 text-center text-white">
                <span
                    class="inline-block bg-teal-500/20 text-teal-300 text-xs font-semibold tracking-wider uppercase px-3 py-1 rounded-full mb-3 backdrop-blur-sm">
                    Pendaftaran Online
                </span>
                <h2 class="text-2xl md:text-4xl font-bold tracking-tight mb-3 uppercase drop-shadow-md">
                    Formulir Pendaftaran Siswa Baru LPK ACC JAPAN CENTRE
                </h2>
                <div
                    class="flex items-center justify-center text-gray-200 text-xs md:text-sm max-w-xl mx-auto space-x-2 drop-shadow">
                    <p>Dukuh Gitung, Desa Harjosari Lor, Kec. Adiwerna, Kabupaten Tegal, Jawa Tengah, 52194</p>
                </div>
            </div>
        </section>

        <div class="container mx-auto px-4 -mt-10 relative z-20 max-w-4xl">
            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-6 md:p-10">
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
                                <select name="pernav_operasi"
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

        //submit
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
                didOpen: () => Swal.showLoading(),
                allowOutsideClick: false
            });

            const form = e.target;
            const formData = new FormData(form);
            console.log("formData :", formData);

            try {
                await fetch(
                    "https://script.google.com/macros/s/AKfycbyK-RPpoWJcxR5BQmHNSitFaoRmNM8L7P_NmL-FFsh7jS3F4sfLkAX9KVnp2FsSYKMe/exec", {
                        method: "POST",
                        body: formData,
                        mode: "no-cors"
                    });

                Swal.close();
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: 'Data pendaftaran telah dikirim! Silakan konfirmasi ke staff yang sudah anda chat. Terimakasih.'
                });

                form.reset();

            } catch (error) {
                Swal.close();
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: 'Terjadi kesalahan saat mengirim data. Silakan coba lagi.'
                });
                console.error('Error:', error);
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

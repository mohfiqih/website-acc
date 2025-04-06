<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Formulir Pendaftaran Siswa Baru</title>
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

        .banner-img {
            background-image: url('https://amanahcitracemerlang.id/templates/assets/img/acc.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
            height: 300px;
            border-radius: 5px;
        }

        @media (max-width: 768px) {
            .banner-img {
                height: 200px;
            }

            #hero h2 {
                font-size: 1.3rem;
            }

            #hero p {
                font-size: 0.95rem;
            }
        }

        ::placeholder {
            font-size: 13px;
            color: #999;
            opacity: 0.8;
        }

        input::-webkit-input-placeholder {
            font-size: 13px;
            color: #999;
        }
        input::-moz-placeholder {
            font-size: 13px;
            color: #999;
        }
        input:-ms-input-placeholder {
            font-size: 13px;
            color: #999;
        }
        input::-ms-input-placeholder {
            font-size: 13px;
            color: #999;
        }

        .step {
            transition: all 0.3s ease;
        }

        .is-invalid {
            border-color: red;
        }

        .nav-link.active-step {
            background-color: #046392 !important;
            color: white !important;
            font-weight: bold;
        }

        #stepNav {
            flex-wrap: wrap;
            justify-content: left;
        }

        @media (max-width: 768px) {
            #stepNav .nav-item {
                flex: 0 0 100%;
                text-align: left;
            }
        }
        #stepNav .nav-link {
            color: black;
            border: 1px solid #dee2e6;
            border-radius: 5px;
        }
        #stepNav .active-step {
            background-color: #007bff;
            color: white !important;
        }

        select[multiple] {
            width: 100% !important;
            min-height: 120px;
        }

        .select2-container--default .select2-selection--single {
            height: 45px;
            padding: 8px 12px;
            font-size: 15px;
            border-radius: 6px;
            border: 1px solid #ced4da;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 28px;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 100%;
        }
        .select2-container {
            width: 100% !important;
        }

        .nav-link.disabled {
            pointer-events: none;
            opacity: 0.6;
        }
    </style>
</head>

<body>
    @include('landing.header')

    <section id="hero" class="hero" style="padding: 10px;">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in" style="">
                <center>
                    <div class="banner-img"></div>
                    <h2 class="text-justify mt-4"></span>FORMULIR PENDAFTARAN SISWA BARU LPK ACC JAPAN CENTRE</h2>
                    <p class="text-white">Lokasi LPK ACC Japan Centre : Dukuh Gitung, Desa Harjosari Lor, Kecamatan Adiwerna, Kabupaten Tegal, Jawa Tengah 52194</p>
                </center>
            </div>
        </div>
    </section>

    <div class="container mt-4 mb-4">
        <div class="card" style="padding: 30px;border-radius: 10px;">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pendaftaran</li>
                </ol>
            </nav>
            <div class="signup-content">
                {{-- <form action="{{ url('/pendaftaran-siswa-baru') }}" method="POST" class="signup-form">
                    @csrf            
                    @if(session('success'))
                        <p style="color: green;">{{ session('success') }}</p>
                    @endif

                    @if(session('error'))
                        <p style="color: red;">{{ session('error') }}</p>
                    @endif
                    <div class="form-group">
                        <label class="text-label" style="font-weight: bold">EMAIL:</label>
                        <p class="text-danger" style="font-size: 11px;">*) Mohon masukan email isian wajib.</p>
                        <input type="email" class="form-control" name="email" placeholder="Masukan email aktif anda" required>
                    </div>
                    <div class="form-group">
                        <label class="text-label" style="font-weight: bold">NAMA (KATAKANA):</label>
                        <p class="text-danger" style="font-size: 11px;">*) Mohon gunakan huruf KAPITAL.</p>
                        <input type="text" class="form-control" name="nama_katakana" placeholder="Masukan nama (katakana) anda" required>
                    </div>
                    <div class="form-group">
                        <label class="text-label" style="font-weight: bold">NAMA (INDONESIA):</label>
                        <p class="text-danger" style="font-size: 11px;">*) Mohon gunakan huruf KAPITAL.</p>
                        <input type="text" class="form-control" name="nama_indonesia" placeholder="Masukan nama (indonesia) anda" required>
                    </div>
                    <div class="form-group">
                        <label class="text-label" style="font-weight: bold">ALAMAT LENGKAP:</label>
                        <p class="text-danger" style="font-size: 11px;">*) Mohon gunakan huruf KAPITAL.</p>
                        <input type="text" class="form-control" name="alamat" placeholder="Masukan alamat anda" required>
                    </div>
                    <div class="form-group">
                        <label class="text-label" style="font-weight: bold">TANGGAL LAHIR:</label>
                        <p class="text-danger" style="font-size: 11px;">*) Mohon pilih tanggal lahir isian wajib.</p>
                        <input type="date" class="form-control" name="tanggal_lahir" placeholder="Pilih tanggal lahir anda" required>
                    </div>
                    <div class="form-group">
                        <label class="text-label" style="font-weight: bold">USIA:</label>
                        <p class="text-danger" style="font-size: 11px;">*) Mohon masukan isian wajib.</p>
                        <input type="number" class="form-control" name="usia" placeholder="Masukan usia anda" required>
                    </div>
                    <div class="form-group">
                        <label class="text-label" style="font-weight: bold">JENIS KELAMIN:</label>
                        <p class="text-danger" style="font-size: 11px;">*) Mohon pilih jenis kelamin isian wajib.</p>
                        <select name="jenis_kelamin" class="form-control" required>
                            <option value="" disabled selected>Pilih jenis kelamin</option>
                            <option value="LAKI-LAKI">LAKI-LAKI</option>
                            <option value="PEREMPUAN">PEREMPUAN</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-label" style="font-weight: bold">NO HP AKTIF:</label>
                        <p class="text-danger" style="font-size: 11px;">*) Mohon masukan nomor hp aktif isian wajib.</p>
                        <input type="number" class="form-control" name="no_hp_aktif" placeholder="Masukan nomor HP aktif anda" required>
                    </div>
                    <div class="form-group">
                        <label class="text-label" for="agama" style="font-weight: bold">AGAMA:</label>
                        <p class="text-danger" style="font-size: 11px;">*) Mohon pilih agama isian wajib.</p>
                        <select name="agama" class="form-control" required>
                            <option value="" disabled selected>Pilih Agama</option>
                            <option value="ISLAM">ISLAM</option>
                            <option value="PROTESTAN">PROTESTAN</option>
                            <option value="KATOLIK">KATOLIK</option>
                            <option value="HINDU">HINDU</option>
                            <option value="BUDHA">BUDHA</option>
                            <option value="KONGHUCU">KONGHUCU</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-label" style="font-weight: bold">TINGGI (cm):</label>
                        <p class="text-danger" style="font-size: 11px;">*) Mohon masukan tinggi badan isian wajib.</p>
                        <input type="number" class="form-control" name="tinggi_badan" placeholder="Masukan tinggi badan anda" required>
                    </div>
                    <div class="form-group">
                        <label class="text-label" style="font-weight: bold">BERAT (kg):</label>
                        <p class="text-danger" style="font-size: 11px;">*) Mohon masukan berat badan isian wajib.</p>
                        <input type="number" class="form-control" name="berat_badan" placeholder="Masukan berat badan anda" required>
                    </div>
                    <div class="form-group">
                        <label class="text-label" style="font-weight: bold">GOL. DARAH:</label>
                        <p class="text-danger" style="font-size: 11px;">*) Mohon pilih golongan darah isian wajib.</p>
                        <select name="golongan_darah" class="form-control" required>
                            <option value="" disabled selected>Pilih golongan darah</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="O">O</option>
                            <option value="AB">AB</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-label" style="font-weight: bold">BUTA WARNA:</label>
                        <p class="text-danger" style="font-size: 11px;">*) Mohon pilih buta warna atau tidak isian wajib.</p>
                        <select name="buta_warna" class="form-control" required>
                            <option value="" disabled selected>Pilih opsi buta warna atau tidak</option>
                            <option value="YA">YA</option>
                            <option value="TIDAK">TIDAK</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-label" style="font-weight: bold">MATA KANAN:</label>
                        <p class="text-danger" style="font-size: 11px;">*) Mohon masukan minus mata kanan isian wajib.</p>
                        <input type="number" class="form-control" name="mata_kanan" placeholder="Masukan minus mata kanan anda. ex: 0.5" required>
                    </div>
                    <div class="form-group">
                        <label class="text-label" style="font-weight: bold">MATA KIRI:</label>
                        <p class="text-danger" style="font-size: 11px;">*) Mohon masukan minus mata kanan isian wajib.</p>
                        <input type="number" class="form-control" name="mata_kiri" placeholder="Masukan minus mata kiri anda. ex: 1.5" required>
                    </div>
                    <div class="form-group">
                        <label class="text-label" style="font-weight: bold">PERNAH OPERASI:</label>
                        <p class="text-danger" style="font-size: 11px;">*) Mohon pilih pernah operasi atau tidak isian wajib.</p>
                        <select name="pernah_operasi" class="form-control" required>
                            <option value="" disabled selected>Pilih opsi pernah operasi atau tidak</option>
                            <option value="YA">YA</option>
                            <option value="TIDAK">TIDAK</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-label" style="font-weight: bold">APAKAH SEDANG MINUM:</label>
                        <p class="text-danger" style="font-size: 11px;">*) Mohon pilih sedang minum atau tidak isian wajib.</p>
                        <select name="sedang_minum" class="form-control" required>
                            <option value="" disabled selected>Pilih opsi sedang minum atau tidak</option>
                            <option value="YA">YA</option>
                            <option value="TIDAK">TIDAK</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-label" style="font-weight: bold">TANGAN:</label>
                        <p class="text-danger" style="font-size: 11px;">*) Mohon pilih tangan isian wajib.</p>
                        <select name="tangan" class="form-control" required>
                            <option value="" disabled selected>Pilih opsi tangan</option>
                            <option value="KANAN">KANAN</option>
                            <option value="KIRI">KIRI</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-label" style="font-weight: bold">KEAHLIAN:</label>
                        <p class="text-danger" style="font-size: 11px;">*) Mohon masukan keahlian isian wajib.</p>
                        <textarea type="text" rows="3" class="form-control" name="keahlian" placeholder="Masukan keahlian anda" required></textarea>
                    </div>
                    <div class="form-group">
                        <label class="text-label" style="font-weight: bold">SIFAT/KEPRIBADIAN:</label>
                        <p class="text-danger" style="font-size: 11px;">*) Mohon masukan sifat isian wajib.</p>
                        <textarea type="text" rows="3" class="form-control" name="sifat_kepribadian" placeholder="Masukan sifat/kepribadian anda" required></textarea>
                    </div>
                    <div class="form-group">
                        <label class="text-label" style="font-weight: bold">KELEBIHAN:</label>
                        <p class="text-danger" style="font-size: 11px;">*) Mohon masukan kelebihan isian wajib.</p>
                        <textarea type="text" class="form-control" name="kelebihan" placeholder="Masukan kelebihan anda" required></textarea>
                    </div>
                    <div class="form-group">
                        <label class="text-label" style="font-weight: bold">KELEMAHAN:</label>
                        <p class="text-danger" style="font-size: 11px;">*) Mohon masukan kelemahan isian wajib.</p>
                        <textarea type="text" class="form-control" name="kelemahan" placeholder="Masukan kelemahan anda" required></textarea>
                    </div>
                    <div class="form-group">
                        <label class="text-label" style="font-weight: bold">STATUS:</label>
                        <p class="text-danger" style="font-size: 11px;">*) Mohon pilih status isian wajib.</p>
                        <select name="status" class="form-control" required>
                            <option value="" disabled selected>Pilih opsi status</option>
                            <option value="SUDAH MENIKAH">SUDAH MENIKAH</option>
                            <option value="BELUM MENIKAH">BELUM MENIKAH</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-label" style="font-weight: bold">MEROKOK:</label>
                        <p class="text-danger" style="font-size: 11px;">*) Mohon pilih merokok isian wajib.</p>
                        <select name="merokok" class="form-control" required>
                            <option value="" disabled selected>Pilih opsi merokok</option>
                            <option value="YA">YA</option>
                            <option value="TIDAK">TIDAK</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-label" style="font-weight: bold">PENYAKIT DALAM:</label>
                        <p class="text-danger" style="font-size: 11px;">*) Mohon pilih penyakit dalam isian wajib.</p>
                        <select name="penyakit_dalam" class="form-control" required>
                            <option value="" disabled selected>Pilih opsi penyakit dalam</option>
                            <option value="YA">YA</option>
                            <option value="TIDAK">TIDAK</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-label" style="font-weight: bold">HOBI:</label>
                        <p class="text-danger" style="font-size: 11px;">*) Mohon masukan hobi isian wajib.</p>
                        <textarea type="text" class="form-control" name="hobi" placeholder="Masukan hobi anda" required></textarea>
                    </div>
                    <div class="form-group">
                        <label class="text-label" style="font-weight: bold">MOTIVASI:</label>
                        <p class="text-danger" style="font-size: 11px;">*) Mohon masukan motivasi isian wajib.</p>
                        <textarea type="text" class="form-control" name="motivasi" placeholder="Masukan motivasi anda" required></textarea>
                    </div>
                    <div class="form-group">
                        <label class="text-label" style="font-weight: bold">SELAMA 3 TAHUN DI JEPANG, MAU NABUNG BERAPA:</label>
                        <p class="text-danger" style="font-size: 11px;">*) Mohon masukan planning, (Jika belum ada planning beri tanda (-) pada kolom isian)</p>
                        <textarea type="text" class="form-control" name="nabung_berapa" placeholder="Masukan planning anda" required></textarea>
                    </div>
                    <div class="form-group">
                        <label class="text-label" style="font-weight: bold">SETELAH PULANG JEPANG, APA YANG AKAN DILAKUKAN:</label>
                        <p class="text-danger" style="font-size: 11px;">*) Mohon masukan planning, (Jika belum ada planning beri tanda (-) pada kolom isian)</p>
                        <textarea type="text" class="form-control" name="apa_yang_akan_dilakukan" placeholder="Masukan planning anda" required></textarea>
                    </div>
                    <div class="form-group">
                        <label class="text-label" style="font-weight: bold">APAKAH ANDA PERNAH TINGGAL/BEKERJA DI JEPANG:</label>
                        <p class="text-danger" style="font-size: 11px;">*) Mohon pilih opsi isian wajib.</p>
                        <select name="pernah_tinggal_dijepang" class="form-control" required>
                            <option value="" disabled selected>Pilih opsi pertanyaan</option>
                            <option value="YA">YA</option>
                            <option value="TIDAK">TIDAK</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-label" style="font-weight: bold">JIKA YA, KUALIFIKASI APA YANG ANDA LAMAR:</label>
                        <p class="text-danger" style="font-size: 11px;">*) Jika tidak beri tanda (-) pada kolom isian</p>
                        <textarea type="text" class="form-control" name="kualifikasi" placeholder="Masukan kualifikasi apa yang dilamar" required></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary" style="cursor: pointer;width: 100%;background-color: #046392;font-weight: bold;">DAFTAR</button>
                    </div>         
                </form> --}}

                {{-- nav pill --}}
                <br/>
                
                <ul class="nav nav-pills mb-3 flex-wrap" id="stepNav" style="gap: 10px;">
                    <li class="nav-item">
                        <a class="nav-link active-step" id="nav-step-1" href="javascript:void(0)">1. Data Diri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" id="nav-step-2" href="javascript:void(0)">2. Kesehatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" id="nav-step-3" href="javascript:void(0)">3. Motivasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" id="nav-step-4" href="javascript:void(0)">4. Pendidikan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" id="nav-step-5" href="javascript:void(0)">5. Pengalaman & Lain-lain</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" id="nav-step-6" href="javascript:void(0)">6. Data Keluarga & Ukuran</a>
                    </li>
                </ul>
                
                <form action="{{ url('/pendaftaran-siswa-baru') }}" method="POST" class="signup-form">
                    @csrf

                    @if(session('success'))
                        <p style="color: green;">{{ session('success') }}</p>
                    @endif

                    @if(session('error'))
                        <p style="color: red;">{{ session('error') }}</p>
                    @endif
                
                    {{-- Step 1 --}}
                    <div class="step" id="step-1"><br/>
                        <h5 class="mb-1" style="font-weight: bold">Page 1: Data Diri Siswa</h5><hr>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">EMAIL:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan email isian wajib.</p>
                            <input type="email" class="form-control" name="email" placeholder="Masukan email aktif anda" required>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">NAMA (KATAKANA):</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon gunakan huruf KAPITAL.</p>
                            <input type="text" class="form-control" name="nama_katakana" placeholder="Masukan nama (katakana) anda" required>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">NAMA (INDONESIA):</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon gunakan huruf KAPITAL.</p>
                            <input type="text" class="form-control" name="nama_indonesia" placeholder="Masukan nama (indonesia) anda" required>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">ALAMAT LENGKAP:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon gunakan huruf KAPITAL. <br/> *) (e.g: JL. BAWAL GITUNG RT 01/RW 02, DESA HARJOSARI LOR, KECAMATAN ADIWERNA, KABUPATEN TEGAL, JAWA TENGAH, INDONESIA)</p>
                            <input type="text" class="form-control" name="alamat" placeholder="Masukan alamat anda" required>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">TANGGAL LAHIR:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih tanggal lahir isian wajib.</p>
                            <input type="date" class="form-control" name="tanggal_lahir" placeholder="Pilih tanggal lahir anda" required>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">USIA:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan usia anda isian wajib.</p>
                            <input type="number" class="form-control" name="usia" placeholder="Masukan usia anda" required>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">JENIS KELAMIN:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih jenis kelamin isian wajib.</p>
                            <select name="jenis_kelamin" class="form-control" required>
                                <option value="" disabled selected>Pilih jenis kelamin</option>
                                <option value="LAKI-LAKI">LAKI-LAKI</option>
                                <option value="PEREMPUAN">PEREMPUAN</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">NO HP AKTIF:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan nomor hp aktif isian wajib.</p>
                            <input type="number" class="form-control" name="no_hp_aktif" placeholder="Masukan nomor HP aktif anda" required>
                        </div>
                        <div class="form-group">
                            <label class="text-label" for="agama" style="font-weight: bold">AGAMA:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih agama isian wajib.</p>
                            <select name="agama" class="form-control" required>
                                <option value="" disabled selected>Pilih Agama</option>
                                <option value="ISLAM">ISLAM</option>
                                <option value="PROTESTAN">PROTESTAN</option>
                                <option value="KATOLIK">KATOLIK</option>
                                <option value="HINDU">HINDU</option>
                                <option value="BUDHA">BUDHA</option>
                                <option value="KONGHUCU">KONGHUCU</option>
                            </select>
                        </div>
                        <button type="button" class="btn btn-primary mt-3" style="cursor: pointer;background-color: #046392;font-weight: bold;" onclick="nextStep()">Next</button>
                    </div>
                
                    {{-- Step 2 --}}
                    <div class="step d-none" id="step-2"><br/>
                        <h5 class="mb-1" style="font-weight: bold">Page 2: Kesehatan dan Fisik</h5><hr>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">TINGGI (cm):</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan tinggi badan isian wajib.</p>
                            <input type="number" class="form-control" name="tinggi_badan" placeholder="Masukan tinggi badan anda" required>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">BERAT (kg):</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan berat badan isian wajib.</p>
                            <input type="number" class="form-control" name="berat_badan" placeholder="Masukan berat badan anda" required>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">GOL. DARAH:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih golongan darah isian wajib.</p>
                            <select name="golongan_darah" class="form-control" required>
                                <option value="" disabled selected>Pilih golongan darah</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="O">O</option>
                                <option value="AB">AB</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">BUTA WARNA:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih buta warna atau tidak isian wajib.</p>
                            <select name="buta_warna" class="form-control" required>
                                <option value="" disabled selected>Pilih opsi buta warna atau tidak</option>
                                <option value="YA">YA</option>
                                <option value="TIDAK">TIDAK</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">MATA KANAN:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan minus mata kanan isian wajib.</p>
                            <input type="text" class="form-control" name="mata_kanan" placeholder="Masukan minus mata kanan anda. ex: 0,5" required>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">MATA KIRI:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan minus mata kanan isian wajib.</p>
                            <input type="text" class="form-control" name="mata_kiri" placeholder="Masukan minus mata kiri anda. ex: 1,5" required>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">PERNAH OPERASI:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih pernah operasi atau tidak isian wajib.</p>
                            <select name="pernah_operasi" class="form-control" required>
                                <option value="" disabled selected>Pilih opsi pernah operasi atau tidak</option>
                                <option value="YA">YA</option>
                                <option value="TIDAK">TIDAK</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">APAKAH SEDANG MINUM:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih sedang minum atau tidak isian wajib.</p>
                            <select name="apakah_sedang_minum" class="form-control" required>
                                <option value="" disabled selected>Pilih opsi sedang minum atau tidak</option>
                                <option value="YA">YA</option>
                                <option value="TIDAK">TIDAK</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">TANGAN:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih tangan isian wajib.</p>
                            <select name="tangan" class="form-control" required>
                                <option value="" disabled selected>Pilih opsi tangan</option>
                                <option value="KANAN">KANAN</option>
                                <option value="KIRI">KIRI</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">MEROKOK:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih merokok isian wajib.</p>
                            <select name="merokok" class="form-control" required>
                                <option value="" disabled selected>Pilih opsi merokok</option>
                                <option value="YA">YA</option>
                                <option value="TIDAK">TIDAK</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">PENYAKIT DALAM:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih penyakit dalam isian wajib.</p>
                            <select name="penyakit_dalam" class="form-control" required>
                                <option value="" disabled selected>Pilih opsi penyakit dalam</option>
                                <option value="YA">YA</option>
                                <option value="TIDAK">TIDAK</option>
                            </select>
                        </div>
                        <button type="button" class="btn btn-secondary mt-3" style="cursor: pointer;font-weight: bold;" onclick="prevStep()">Previous</button>
                        <button type="button" class="btn btn-primary mt-3" style="cursor: pointer;background-color: #046392;font-weight: bold;" onclick="nextStep()">Next</button>
                    </div>
                
                    {{-- Step 3 --}}
                    <div class="step d-none" id="step-3"><br/>
                        <h5 class="mb-1" style="font-weight: bold">Page 3: Motivasi dan Lainnya</h5><hr>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">KEAHLIAN:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan keahlian isian wajib.</p>
                            <textarea type="text" rows="3" class="form-control" name="keahlian" placeholder="Masukan keahlian anda" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">SIFAT/KEPRIBADIAN:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan sifat isian wajib.</p>
                            <textarea type="text" rows="3" class="form-control" name="sifat_kepribadian" placeholder="Masukan sifat/kepribadian anda" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">KELEBIHAN:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan kelebihan isian wajib.</p>
                            <textarea type="text" class="form-control" name="kelebihan" placeholder="Masukan kelebihan anda" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">KELEMAHAN:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan kelemahan isian wajib.</p>
                            <textarea type="text" class="form-control" name="kelemahan" placeholder="Masukan kelemahan anda" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">STATUS:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih status isian wajib.</p>
                            <select name="status" class="form-control" required>
                                <option value="" disabled selected>Pilih opsi status</option>
                                <option value="SUDAH MENIKAH">SUDAH MENIKAH</option>
                                <option value="BELUM MENIKAH">BELUM MENIKAH</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">HOBI:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan hobi isian wajib.</p>
                            <textarea type="text" class="form-control" name="hobi" placeholder="Masukan hobi anda" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">MOTIVASI:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan motivasi isian wajib.</p>
                            <textarea type="text" class="form-control" name="motivasi" placeholder="Masukan motivasi anda" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">SELAMA 3 TAHUN DI JEPANG, MAU NABUNG BERAPA:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan planning, (Jika belum ada planning beri tanda (-) pada kolom isian)</p>
                            <textarea type="text" class="form-control" name="nabung_berapa" placeholder="Masukan planning anda" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">SETELAH PULANG JEPANG, APA YANG AKAN DILAKUKAN:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan planning, (Jika belum ada planning beri tanda (-) pada kolom isian)</p>
                            <textarea type="text" class="form-control" name="apa_yang_akan_dilakukan" placeholder="Masukan planning anda" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">APAKAH ANDA PERNAH TINGGAL/BEKERJA DI JEPANG:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih opsi isian wajib.</p>
                            <select name="pernah_tinggal_dijepang" class="form-control" required>
                                <option value="" disabled selected>Pilih opsi pertanyaan</option>
                                <option value="YA">YA</option>
                                <option value="TIDAK">TIDAK</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">JIKA YA, KUALIFIKASI APA YANG ANDA LAMAR:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Jika tidak beri tanda (-) pada kolom isian</p>
                            <textarea type="text" class="form-control" name="kualifikasi" placeholder="Masukan kualifikasi apa yang dilamar" required></textarea>
                        </div>
                        <button type="button" class="btn btn-secondary mt-3" style="cursor: pointer;font-weight: bold;" onclick="prevStep()">Previous</button>
                        <button type="button" class="btn btn-success mt-3" style="cursor: pointer;background-color: #046392;font-weight: bold;" onclick="nextStep()">Next</button>
                    </div>

                    {{-- Step 4 --}}
                    <div class="step d-none" id="step-4"><br/>
                        <h5 class="mb-1" style="font-weight: bold">Page 4: Pendidikan</h5><hr>

                        {{-- SD --}}
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">SEKOLAH DASAR (SD):</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan sekolah dasar dengan huruf KAPITAL isian wajib.</p>
                            <input type="text" class="form-control" name="sekolah_dasar" placeholder="Masukan nama SD (gunakan huruf KAPITAL)" required>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">TAHUN MASUK (SD):</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan tahun masuk KAPITAL isian wajib.</p>
                            <input type="number" class="form-control" name="tahun_masuk_sd" placeholder="Masukan tahun masuk SD" required>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">TAHUN KELUAR (SD):</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan tahun keluar isian wajib.</p>
                            <input type="number" class="form-control" name="tahun_keluar_sd" placeholder="Masukan tahun keluar SD" required>
                        </div>

                        {{-- SMP --}}
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">SEKOLAH MENENGAH PERTAMA (SMP):</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan SMP dengan huruf KAPITAL isian wajib.</p>
                            <input type="text" class="form-control" name="sekolah_menengah_pertama" placeholder="Masukan nama SMP (gunakan huruf KAPITAL)" required>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">TAHUN MASUK (SMP):</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan tahun masuk KAPITAL isian wajib.</p>
                            <input type="number" class="form-control" name="tahun_masuk_smp" placeholder="Masukan tahun masuk SMP" required>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">TAHUN KELUAR (SMP):</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan tahun keluar isian wajib.</p>
                            <input type="number" class="form-control" name="tahun_keluar_smp" placeholder="Masukan tahun keluar SMP" required>
                        </div>

                        {{-- SMA / SMK --}}
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">SEKOLAH MENENGAH ATAS/KEJURUAN (SMA/SMK):</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan SMA/SMK dengan huruf KAPITAL isian wajib.</p>
                            <input type="text" class="form-control" name="sekolah_menengah_atas" placeholder="Masukan nama SMA/SMK (gunakan huruf KAPITAL)" required>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">TAHUN MASUK (SMA/SMK):</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan tahun masuk KAPITAL isian wajib.</p>
                            <input type="number" class="form-control" name="tahun_masuk_smak" placeholder="Masukan tahun masuk SMA/SMK" required>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">TAHUN KELUAR (SMA/SMK):</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan tahun keluar isian wajib.</p>
                            <input type="number" class="form-control" name="tahun_keluar_smak" placeholder="Masukan tahun keluar SMA/SMK" required>
                        </div>

                        {{-- JURUSAN --}}
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">JURUSAN (SMA/SMK):</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan jurusan SMA/SMK dengan huruf KAPITAL, jika tidak ada beri tanda (-) isian wajib.</p>
                            <input type="text" class="form-control" name="jurusan" placeholder="Masukan jurusan (SMA/SMK)" required>
                        </div>

                        {{-- PERGURUAN TINGGI --}}
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">PERGURUAN TINGGI (JIKA ADA) - PROGRAM STUDI:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon masukan perguruan tinggi, jika tidak ada beri tanda (-).<br/> *) (e.g: POLITEKNIK - S1 TEKNIK INFORMATIKA)</p>
                            <input type="text" class="form-control" name="perguruan_tinggi" placeholder="Masukan nama perguruan tinggi - program studi, jika tidak ada beri tanda (-)" required>
                        </div>
                        
                        <button type="button" class="btn btn-secondary mt-3" style="cursor: pointer;font-weight: bold;" onclick="prevStep()">Previous</button>
                        <button type="button" class="btn btn-success mt-3" style="cursor: pointer;background-color: #046392;font-weight: bold;" onclick="nextStep()">Next</button>
                    </div>

                    {{-- Step 5 --}}
                    <div class="step d-none" id="step-5"><br/>
                        <h5 class="mb-1" style="font-weight: bold">Page 5: Pengalaman & Lain-Lain</h5><hr>
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">PENGALAMAN KERJA (Tahun Kerja - Nama Perusahaan - Bagian):</label>
                            <p class="text-danger" style="font-size: 11px;">
                                *) e.g: 2024 - 2025 - PT. ADIKARSA JAYA - Staff Administrasi, 
                                        2024 - 2025 - PT. ABC - Manager<br/>
                                *) Jika tidak ada beri tanda (-) pada kolom isian<br/>
                                *) Jika lebih dari satu tekan enter dan ketik kembali sesuai format pertama.</p>
                            <textarea type="text" class="form-control" rows="5" name="pengalaman_kerja" placeholder="Masukan pengalaman kerja anda dengan format (Tahun Masuk - Tahun Keluar - Nama Perusahaan - Bagian)" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">BAHASA ASING YANG DIKUASAI:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Silahkan ketik bahasa asing yang ingin anda cari.</p>
                            <select name="bahasa_asing[]" class="form-control" multiple="multiple" id="bahasa_asing"></select>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">PERNAH KE JEPANG ATAU LUAR NEGERI LAINNYA:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih opsi jika tidak pernah klik Tidak, jika pernah ke negara lain ketik nama negara dikolom, isian wajib.</p>
                            <select name="pernah_keluar_negeri" class="form-control" id="pernah_keluar_negeri" required>
                                <option value="" disabled selected>Pilih opsi pertanyaan</option>
                                <option value="YA">YA</option>
                                <option value="TIDAK">TIDAK</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">JIKA YA, SEBUTKAN TGL/BLN/THN:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Jika tidak kosongkan saja.</p>
                            <input type="date" class="form-control" name="tanggal_keluar_negeri" placeholder="Pilih tanggal anda pernah ke luar negeri">
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">APAKAH ADA KERABAT DI JEPANG:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih opsi jika tidak ada klik Tidak, isian wajib.</p>
                            <select name="kerabat_dijepang" class="form-control" id="kerabat_dijepang" required>
                                <option value="" disabled selected>Pilih opsi pertanyaan</option>
                                <option value="YA">YA</option>
                                <option value="TIDAK">TIDAK</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">JIKA ADA, APA HUBUNGAN KERABAT YANG DI JEPANG:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon isi jika ada, jika tidak ada beri tanda (-) isian wajib.</p>
                            <input type="text" class="form-control" name="hubungan_kerabat_dijepang" placeholder="Masukan apa hubungan kerabat anda di jepang" required>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">BELAJAR BAHASA:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon isi jika anda pernah belajar bahasa, jika tidak ada beri tanda (-) isian wajib.</p>
                            <input type="text" class="form-control" name="belajar_bahasa" placeholder="Masukan pernah belajar bahasa" required>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">BUKU YANG DIPAKAI:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon isi buku apa yang dipakai, jika tidak ada beri tanda (-) isian wajib.</p>
                            <input type="text" class="form-control" name="buku_yang_dipakai" placeholder="Masukan buku apa yang dipakai" required>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">BAB YANG DIPELAJARI:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon isi bab berapa yang telah anda pelajari, jika tidak ada beri tanda (-) isian wajib.</p>
                            <input type="text" class="form-control" name="bab_yang_dipelajari" placeholder="Masukan bab berapa yang di pelajari" required>
                        </div>
                        
                        <button type="button" class="btn btn-secondary mt-3" style="cursor: pointer;font-weight: bold;" onclick="prevStep()">Previous</button>
                        <button type="button" class="btn btn-success mt-3" style="cursor: pointer;background-color: #046392;font-weight: bold;" onclick="nextStep()">Next</button>
                    </div>

                    {{-- Step 6 --}}
                    <div class="step d-none" id="step-6"><br/>
                        <h5 class="mb-1" style="font-weight: bold">Page 6: Data Keluarga & Ukuran</h5><hr>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">NAMA AYAH:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon isi nama ayah, gunakan huruf KAPITAL isian wajib.</p>
                            <input type="text" class="form-control" name="nama_ayah" placeholder="Masukan nama ayah" required>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">HUBUNGAN AYAH:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon klik pilihan dibawah isian wajib.</p>
                            <input class="form-check-input" type="radio" name="hubungan_ayah">
                            <label class="form-check-label">
                                AYAH
                            </label>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">USIA AYAH:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon isi usia ibu, Jika sudah tidak ada beri tanda (-) pada kolom isian isian wajib.
                                                                       <br/>*) Jika sudah tidak ada beri tanda (-) pada kolom isian
                            </p>
                            <input type="number" class="form-control" name="usia_ayah" placeholder="Masukan usia ayah" required>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">PEKERJAAN AYAH:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon isi pekerjaan ayah, gunakan huruf KAPITAL isian wajib.
                                                                       <br/>*) Jika sudah tidak ada beri tanda (-) pada kolom isian
                            </p>
                            <input type="text" class="form-control" name="pekerjaan_ayah" placeholder="Masukan pekerjaan ayah" required>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">NAMA IBU:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon isi nama IBU, gunakan huruf KAPITAL isian wajib.</p>
                            <input type="text" class="form-control" name="nama_ibu" placeholder="Masukan nama lengkap ibu" required>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">HUBUNGAN IBU:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon klik pilihan dibawah isian wajib.</p>
                            <input class="form-check-input" type="radio" name="hubungan_ibu">
                            <label class="form-check-label">
                                IBU
                            </label>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">USIA IBU:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon isi usia ibu, Jika sudah tidak ada beri tanda (-) pada kolom isian.</p>
                            <input type="number" class="form-control" name="usia_ibu" placeholder="Masukan usia ibu" required>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">PEKERJAAN IBU:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon isi pekerjaan ibu, gunakan huruf KAPITAL isian wajib.
                                                                       <br/>*) Jika sudah tidak ada beri tanda (-) pada kolom isian
                            </p>
                            <input type="text" class="form-control" name="pekerjaan_ibu" placeholder="Masukan pekerjaan ibu" required>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">NAMA SAUDARA (HUBUNGAN - NAMA - USIA - PEKERJAAN):</label>
                            <p class="text-danger" style="font-size: 11px;">
                                *) e.g: ADIK - MARCELL - 20 - TIDAK BEKERJA, KAKAK - AHMAD - 30 - KARYAWAN SWASTA<br/>
                                *) Jika tidak ada beri tanda (-) pada kolom isian<br/>
                                *) Jika lebih dari satu tekan enter dan ketik kembali sesuai format pertama.
                            </p>
                            <textarea type="text" class="form-control" rows="5" name="nama_saudara" placeholder="Masukan nama saudara dengan format (Hubungan - Nama - Usia - Pekerjaan)" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">PENDAPAT KELUARGA:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih opsi jika tidak setuju klik Tidak, isian wajib.</p>
                            <select name="pendapat_keluarga" class="form-control" id="pendapat_keluarga" required>
                                <option value="" disabled selected>Pilih opsi pertanyaan</option>
                                <option value="SETUJU">SETUJU</option>
                                <option value="TIDAK SETUJU">TIDAK SETUJU</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">NOMOR HP KELUARGA (AKTIF):</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon isi pekerjaan ibu, gunakan huruf KAPITAL isian wajib.</p>
                            <input type="text" class="form-control" name="no_hp_keluarga" placeholder="Masukan nomor hp keluarga" required>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">NAMA MENTOR:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon isi nama  mentor, gunakan huruf KAPITAL isian wajib.</p>
                            <input type="text" class="form-control" name="nama_mentor" placeholder="Masukan nama mentor tidak perlu menggunakan PAK/BU/MAS/MBA" required>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">UKURAN BAJU:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon pilih ukuran baju, isian wajib.</p>
                            <select name="ukuran_baju" class="form-control" id="ukuran_baju" required>
                                <option value="" disabled selected>Pilih opsi ukuran baju</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="text-label" style="font-weight: bold">NOMOR SEPATU:</label>
                            <p class="text-danger" style="font-size: 11px;">*) Mohon isi ukuran septu, isian wajib.</p>
                            <input type="number" class="form-control" name="ukuran_sepatu" placeholder="Masukan ukuran sepatu" required>
                        </div>
                        
                        <button type="button" class="btn btn-secondary mt-3" style="cursor: pointer;font-weight: bold;" onclick="prevStep()">Previous</button>
                        <button type="submit" class="btn btn-success mt-3" style="cursor: pointer;background-color: #046392;font-weight: bold;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="preloader"></div>

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
        
        $('#bahasa_asing').select2({
            tags: true,
            placeholder: 'Silahkan ketik bahasa asing yang ingin anda cari...',
            width: '100%',
            language: {
                noResults: function () {
                    return "Klik pilih atau tekan enter untuk menambahkan..";
                }
            }
        });

        $.get('https://restcountries.com/v3.1/all', function (data) {
            const languagesSet = new Set();

            data.forEach(country => {
                if (country.languages) {
                    Object.values(country.languages).forEach(lang => {
                        languagesSet.add(lang);
                    });
                }
            });

            languagesSet.forEach(lang => {
                const option = new Option(lang, lang, false, false);
                $('#bahasa_asing').append(option).trigger('change');
            });
        });

        $('#pernah_keluar_negeri').select2({
            tags: true,
            placeholder: "Pilih atau ketik jawaban...",
            allowClear: true,
            width: '100%',
            language: {
                noResults: function () {
                    return "Tidak ditemukan, tekan Enter untuk menambahkan";
                }
            }
        });

        // insert data
        // $(document).ready(function() {
        //     $('.signup-form').on('submit', function(e) {
        //         e.preventDefault();

        //         let bahasaAsing = $('#bahasa_asing').val();
        //         if (bahasaAsing) {
        //             let bahasaAsingString = bahasaAsing.join(',');
        //             $('<input>').attr({
        //                 type: 'hidden',
        //                 name: 'bahasa_asing',
        //                 value: bahasaAsingString
        //             }).appendTo('.signup-form');
        //         }
    
        //         Swal.fire({
        //             title: 'Apakah Anda yakin ingin mendaftarkan diri?',
        //             text: 'Pastikan data yang sudah anda masukan sesuai dan benar, jika ada keslaahan data hanya bisa di edit melalui administrasi!',
        //             icon: 'warning',
        //             showCancelButton: true,
        //             confirmButtonText: 'OK',
        //             cancelButtonText: 'Batal',
        //             confirmButtonColor: '#046392'
        //         }).then((result) => {
        //             if (result.isConfirmed) {
        //                 var form = $(this);
        //                 var formData = form.serialize();
    
        //                 Swal.fire({
        //                     text: 'Mohon tunggu sedang memproses pendaftaran..',
        //                     icon: 'warning',
        //                     showConfirmButton: false,
        //                     willOpen: () => {
        //                         Swal.showLoading();
        //                     }
        //                 });
    
        //                 $.ajax({
        //                     url: form.attr('action'),
        //                     type: 'POST',
        //                     data: formData,
        //                     success: function(response) {
        //                         if (response.success) {
        //                             Swal.fire({
        //                                 title: 'Berhasil!',
        //                                 text: 'Berhasil daftar di LPK ACC Japan Centre!',
        //                                 icon: 'success',
        //                                 timer: 3000,
        //                                 showConfirmButton: false,
        //                             }).then(() => {
        //                                 location.reload();
        //                             });
        //                         } else {
        //                             Swal.fire({
        //                                 title: 'Gagal!',
        //                                 text: 'Terjadi kesalahan saat mengirim data.',
        //                                 icon: 'error',
        //                                 confirmButtonText: 'Tutup'
        //                             });
        //                         }
        //                     },
        //                 });
        //             }
        //         });
        //     });
        // });

        $(document).ready(function() {
            $('.signup-form').on('submit', function(e) {
                e.preventDefault();

                let bahasaAsing = $('#bahasa_asing').val();
                if (bahasaAsing) {
                    let bahasaAsingString = Array.isArray(bahasaAsing) ? bahasaAsing.join(', ') : bahasaAsing;
                    $('<input>').attr({
                        type: 'hidden',
                        name: 'bahasa_asing',
                        value: bahasaAsingString
                    }).appendTo('.signup-form');
                }

                Swal.fire({
                    title: 'Apakah Anda yakin ingin mendaftarkan diri?',
                    text: 'Pastikan data yang anda masukan sesuai dan benar, jika ada kesalahan hubungi bagian administrasi untuk mengubahnya!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'OK',
                    cancelButtonText: 'Batal',
                    confirmButtonColor: '#046392'
                }).then((result) => {
                    if (result.isConfirmed) {
                        var form = $('.signup-form');
                        var formData = form.serialize();

                        Swal.fire({
                            text: 'Mohon tunggu sedang memproses pendaftaran...',
                            icon: 'warning',
                            showConfirmButton: false,
                            allowOutsideClick: false,
                            didOpen: () => {
                                Swal.showLoading();
                            }
                        });

                        $.ajax({
                            url: form.attr('action'),
                            type: 'POST',
                            data: formData,
                            success: function(response) {
                                Swal.close();

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
                                    let message = response.message || 'Terjadi kesalahan saat mengirim data.';
                                    let errors = response.errors ? Object.values(response.errors).flat().join('\n') : '';

                                    Swal.fire({
                                        title: 'Gagal!',
                                        text: `${message}\n${errors}`,
                                        icon: 'error',
                                        confirmButtonText: 'Tutup'
                                    });
                                }
                            },
                            error: function(xhr) {
                                Swal.close();
                                let errorMessage = 'Terjadi kesalahan sistem.';
                                if (xhr.responseJSON?.errors) {
                                    errorMessage = Object.values(xhr.responseJSON.errors).flat().join('\n');
                                } else if (xhr.responseJSON?.message) {
                                    errorMessage = xhr.responseJSON.message;
                                }
                                Swal.fire({
                                    title: 'Error!',
                                    text: errorMessage,
                                    icon: 'error',
                                    confirmButtonText: 'Tutup'
                                });
                            }
                        });
                    }
                });
            });
        });
    </script>

    {{-- next previouse --}}
    <script>
        let currentStep = 1;
        let maxStepReached = 1;
        const totalSteps = document.querySelectorAll('.step').length;

        function showStep(step) {
            if (step <= maxStepReached) {
                document.querySelectorAll('.step').forEach(stepEl => stepEl.classList.add('d-none'));
                document.getElementById('step-' + step).classList.remove('d-none');

                document.querySelectorAll('#stepNav .nav-link').forEach(nav => nav.classList.remove('active-step'));
                document.getElementById('nav-step-' + step).classList.add('active-step');

                currentStep = step;
            }
        }

        function nextStep() {
            const currentForm = document.querySelector(`#step-${currentStep}`);
            const inputs = currentForm.querySelectorAll('input, select, textarea');
            let isValid = true;

            inputs.forEach(input => {
                if (!input.checkValidity()) {
                    isValid = false;
                    input.classList.add('is-invalid');
                } else {
                    input.classList.remove('is-invalid');
                }
            });

            if (isValid && currentStep < totalSteps) {
                currentStep++;
                maxStepReached = Math.max(maxStepReached, currentStep);
                enableStepNavLinks();
                showStep(currentStep);
            }
        }

        function prevStep() {
            if (currentStep > 1) {
                currentStep--;
                showStep(currentStep);
            }
        }

        function enableStepNavLinks() {
            for (let i = 1; i <= totalSteps; i++) {
                const navLink = document.getElementById(`nav-step-${i}`);
                if (i <= maxStepReached) {
                    navLink.classList.remove('disabled');
                } else {
                    navLink.classList.add('disabled');
                }
            }
        }

        // Tambahkan event listener dinamis
        for (let i = 1; i <= totalSteps; i++) {
            const nav = document.getElementById(`nav-step-${i}`);
            nav.addEventListener('click', () => {
                if (i <= maxStepReached) {
                    showStep(i);
                }
            });
        }

        document.getElementById('nav-step-1').addEventListener('click', () => showStep(1));
        document.getElementById('nav-step-2').addEventListener('click', () => showStep(2));
        document.getElementById('nav-step-3').addEventListener('click', () => showStep(3));
        document.getElementById('nav-step-4').addEventListener('click', () => showStep(4));
        document.getElementById('nav-step-5').addEventListener('click', () => showStep(5));
        document.getElementById('nav-step-6').addEventListener('click', () => showStep(6));

        showStep(currentStep);
        enableStepNavLinks();
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

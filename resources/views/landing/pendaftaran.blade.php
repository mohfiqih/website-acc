<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran LPK ACC Japan Centre</title>
    <link href="https://www.amanahcitracemerlang.id/storage/images/1738849208_WhatsApp_Image_2025-02-06_at_20.04.03-removebg-preview.png" rel="icon">
    <link rel="stylesheet" href="{{ asset('template_pendaftaran/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>
    <video id="video-background" autoplay muted loop>
        <source src="{{ asset('bg-video.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    
    <div class="main">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form action="{{ url('/pendaftaran') }}" method="POST" class="signup-form">
                        @csrf
                        <center>
                            <img src="https://www.amanahcitracemerlang.id/storage/images/1738849208_WhatsApp_Image_2025-02-06_at_20.04.03-removebg-preview.png" width="100px" hiight="100px" />
                            <div>
                                <h2 style="margin: 0;">Formulir Pendaftaran Online LPK ACC Japan Centre - Program Magang & Tokutei Ginou (TG)</h2>
                            </div>
                            <hr>                    
                            @if(session('success'))
                                <p style="color: green;">{{ session('success') }}</p>
                            @endif

                            @if(session('error'))
                                <p style="color: red;">{{ session('error') }}</p>
                            @endif
                        </center>
                        <div class="info-list">
                            <center>
                                <p style="margin-top: 5px; margin-bottom: 0;">Welcome LPK ACC Japan Centre 👋</p>
                            </center>
                            <ul>
                                <li>LPK ACC Japan Centre berlokasi di Dk. Gitung, Desa Harjosari Lor, Kecamatan Adiwerna, Kabupaten Tegal, Jawa Tengah 52194.</li>
                                <li>LPK ACC Japan Centre lembaga Resmi dan Legal.</li>
                                <li>Gratis Biaya Pendaftaran!!!</li>
                                <li>Website LPK ACC: <a href="https://amanahcitracemerlang.id/" target="_blank">https://amanahcitracemerlang.id/</a></li>
                            </ul>
                        </div>
                        <hr> 
                        <br/>  
                        <div class="form-group">
                            <label for="email" style="font-weight: bold">Email:</label>
                            <input type="email" class="form-input" name="email" placeholder="Masukan email aktif anda.." required>
                        </div>
                        <div class="form-group">
                            <label for="nama_lengkap" style="font-weight: bold">Nama Lengkap:</label>
                            <input type="text" class="form-input" name="nama_lengkap" placeholder="Masukan lama lengkap anda.." required>
                        </div>
                        <div class="form-group">
                            <label for="nomor_hp" style="font-weight: bold">Nomor HP/WhatsApp:</label>
                            <input type="text" class="form-input" name="nomor_hp" placeholder="Masukan nomor hp/whatsapp anda.." required>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir" style="font-weight: bold">Tempat Lahir:</label>
                            <input type="text" class="form-input" name="tempat_lahir" placeholder="Masukan tempat lahir anda.." required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir" style="font-weight: bold">Tanggal Lahir:</label>
                            <input type="date" class="form-input" name="tanggal_lahir" placeholder="Pilih tanggal lahir anda.." required>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin" style="font-weight: bold">Jenis Kelamin:</label>
                            <select name="jenis_kelamin" class="form-input" required>
                                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat" style="font-weight: bold">Alamat Lengkap:</label>
                            <textarea name="alamat" class="form-input" placeholder="Masukan alamat lengkap anda.." required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="asal_provinsi" style="font-weight: bold">Asal Provinsi:</label>
                            <input type="text" class="form-input" name="asal_provinsi" placeholder="Masukan provinsi anda.." required>
                        </div>
                        <div class="form-group">
                            <label for="tempat_tinggal" style="font-weight: bold">Tempat Tinggal Sekarang:</label>
                            <input type="text" class="form-input" name="tempat_tinggal" placeholder="Masukan tempat tinggal sekarang.." required>
                        </div>
                        <div class="form-group">
                            <label for="tinggi_badan" style="font-weight: bold">Tinggi Badan (cm):</label>
                            <input type="number" class="form-input" name="tinggi_badan" placeholder="Masukan tinggi badan anda.." required>
                        </div>
                        <div class="form-group">
                            <label for="berat_badan" style="font-weight: bold">Berat Badan (kg):</label>
                            <input type="number" class="form-input" name="berat_badan" placeholder="Masukan berat badan anda.." required>
                        </div>
                        <div class="form-group">
                            <label for="agama" style="font-weight: bold">Agama:</label>
                            <select name="agama" class="form-input" required>
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
                            <label for="pendidikan_terakhir" style="font-weight: bold">Pendidikan Terakhir:</label>
                            <select name="pendidikan_terakhir" class="form-input" required>
                                <option value="" disabled selected>Pilih Pendidikan Terakhir</option>
                                <option value="SMA/SMK">SMA/SMK</option>
                                <option value="Diploma III (D-III)">Diploma III (D-III)</option>
                                <option value="Sarjana/Diploma IV (D-IV)">Sarjana/Diploma IV (D-IV)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status_pernikahan" style="font-weight: bold">Status:</label>
                            <select name="status_pernikahan" class="form-input" required>
                                <option value="" disabled selected>Pilih Status</option>
                                <option value="Sudah Menikah">Sudah Menikah</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pengalaman_kerja" style="font-weight: bold">Pengalaman Kerja:</label>
                            <input type="text" rows="5" class="form-input" name="pengalaman_kerja" placeholder="Masukan pengalaman kerja anda.." required>
                        </div>
                        <div class="form-group">
                            <label for="bahasa_asing" style="font-weight: bold">Bahasa Asing:</label>
                            <select name="bahasa_asing[]" class="form-input" multiple="multiple" id="bahasa_asing" required>
                                <option value="Inggris">Inggris</option>
                                <option value="Jepang">Jepang</option>
                                <option value="Korea">Korea</option>
                                <option value="Mandarin">Mandarin</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>                                             
                        <div class="form-group">
                            <label for="program_diambil" style="font-weight: bold">Program yang Diambil:</label>
                            <select name="program_diambil" class="form-input" required>
                                <option value="" disabled selected>Pilih Program Yang diambil</option>
                                <option value="Magang Jepang (Jisshusei) Kelas Pagi">Magang Jepang (Jisshusei) Kelas Pagi</option>
                                <option value="Magang Jepang (Jisshusei) Kelas Malam">Magang Jepang (Jisshusei) Kelas Malam</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="fasilitas" style="font-weight: bold">Biaya yang akan diambil:</label>
                            <select name="fasilitas" class="form-input" required>
                                <option value="" disabled selected>Pilih Biaya yang akan diambil</option>
                                <option value="Pendidikan Bahasa Jepang Rp.600.000,- / Bulan (Kelas Pagi Jam 08.30 -15.00 WIB)">Pendidikan Bahasa Jepang Rp.600.000,- / Bulan (Kelas Pagi Jam 08.30 -15.00 WIB)</option>
                                <option value="Pendidikan Bahasa Jepang Rp.800.000,- / Bulan (Kelas Malam Jam 18.30 - 22.00 WIB)">Pendidikan Bahasa Jepang Rp.800.000,- / Bulan (Kelas Malam Jam 18.30 - 22.00 WIB)</option>
                                <option value="Dana Talangan (Biaya Pemrosesan setelah Siswa Lolos dengan Wawancara Perusahaan Jepang)">Dana Talangan (Biaya Pemrosesan setelah Siswa Lolos dengan Wawancara Perusahaan Jepang)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama_mentor" style="font-weight: bold">Nama Mentor:</label>
                            <input type="text" class="form-input" name="nama_mentor" placeholder="Masukan nama mentor (jika belum tau konfirmasi melalui chat whatsapp)" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_pendaftaran" style="font-weight: bold">Tanggal Pendaftaran:</label>
                            <input type="date" class="form-input" name="tanggal_pendaftaran" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-submit" style="cursor: pointer;">DAFTAR</button>
                        </div>                        
                    </form>
                </div>
            </div>
        </section>
    </div>

    <div id="preloader">
        <div id="loader"></div>
    </div>    

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    <script>
        $(window).on('load', function() {
            $('#preloader').fadeOut('slow');
        });

        $(document).ready(function() {
            $('#bahasa_asing').select2({
                placeholder: "Pilih Bahasa Asing Yang Dikuasai", // Pesan placeholder
                allowClear: true // Untuk memberikan opsi untuk menghapus pilihan
            });

            $('.signup-form').on('submit', function(e) {
                e.preventDefault();
    
                Swal.fire({
                    title: 'Apakah Anda yakin ingin mendaftarkan diri?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'OK',
                    cancelButtonText: 'Batal',
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
</body>
</html>

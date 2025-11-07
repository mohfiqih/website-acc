<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Data COE Siswa</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap4.css">
</head>

<body>
    <section id="hero" class="hero" style="padding: 10px;padding-top: 50px;">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in" style="">
                <div class="col-lg-6 order-1  d-flex flex-column justify-content-center text-center text-lg-start">
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
                                    class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.amanahcitracemerlang.id/templates/assets/img/acc.jpg"
                                    class="d-block w-100" alt="...">
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
                <div class="col-lg-6 order-2 order-lg-2 justify-content-center">
                    <h2 style="text-align: center"></span>DATA COE SISWA LPK ACC JAPAN CENTRE</h2>
                    <p style="text-align: center">LPK ACC Japan Centre berlokasi di Dukuh. Gitung, Desa Harjosari Lor,
                        Kecamatan Adiwerna, Kabupaten Tegal, Jawa Tengah 52194.</p>
                    <div class="d-flex justify-content-center justify-content-lg-start text-center"
                        style="padding-bottom: 30px;">
                        <a href="{{ url('/') }}" class="btn-get-started" style="width: 100%;">
                            <i class="bi bi-book"></i>
                            Website LPK ACC Japan Centre
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Formulir --}}
    {{-- <div class="container mt-4 mb-4">
        <div class="card" style="padding: 30px;border-radius: 10px;" id="stepFirst">
          <div class="alert alert-primary" role="alert">
              Formulir Data COE Turun LPK ACC Japan Centre
          </div>
          <form id="coeForm">
            @csrf
            <div class="mb-3">
                <label class="fw-bold">Nama SO</label>
                <select name="nama_so" id="nama_so" class="form-select" required>
                    <option value="">Pilih Nama SO</option>
                    @foreach($nama_so as $so)
                        <option value="{{ $so }}">{{ $so }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="fw-bold">Nama Siswa</label>
                <input type="text" class="form-control" name="nama_siswa" placeholder="Masukan nama lengkap siswa.." required>
            </div>
            <div class="mb-3">
                <label class="fw-bold">Tanggal (Opsional)</label>
                <input type="date" class="form-control" name="tanggal_penerbangan">
            </div>
            <button type="submit" class="btn btn-success mt-3">Submit Data</button>
        </form>
        </div>
    </div> --}}

    <div class="container mt-4 mb-4">
        <div class="card" style="padding: 30px; border-radius: 10px;" id="stepFirst">
            <div class="alert alert-primary" role="alert">
            Formulir Data COE Turun LPK ACC Japan Centre
            </div>
            <form id="coeForm">
            <div class="mb-3">
                <label class="fw-bold">Nama SO</label>
                <select name="nama_so" id="nama_so" class="form-select" required>
                <option value="">Pilih Nama SO</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="fw-bold">Nama Siswa</label>
                <input type="text" class="form-control" name="nama_siswa" placeholder="Masukkan nama lengkap siswa.." required>
            </div>
            <div class="mb-3">
                <label class="fw-bold">Keterangan</label>
                <input type="date" class="form-control" name="keterangan">
            </div>
            <button type="submit" class="btn btn-success mt-3">Submit Data</button>
            </form>
        </div>
    </div>

    <div class="container mt-4 mb-5">
        <div class="card p-3" style="border-radius: 10px;">
            <h5 class="fw-bold mb-3">Data COE SISWA</h5>

            <ul class="nav nav-tabs" id="coeTabs" role="tablist"></ul>
            <div class="tab-content mt-3" id="coeTabsContent"></div>
        </div>
    </div>
    <br/>

    {{-- Data COE --}}
    {{-- <div class="container">
        <div class="card p-3" style="border-radius: 10px;">
            <div class="mb-3 mt-2">
                <h5 class="fw-bold mb-3">Data COE SISWA</h5>
            </div>
            <ul class="nav nav-tabs" id="coeTabs" role="tablist">
                @php $first = true; @endphp
                @foreach($allData as $so => $items)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $first ? 'active' : '' }}" id="tab-{{ Str::slug($so) }}-tab"
                            data-bs-toggle="tab" data-bs-target="#tab-{{ Str::slug($so) }}" type="button"
                            role="tab" aria-controls="tab-{{ Str::slug($so) }}"
                            aria-selected="{{ $first ? 'true' : 'false' }}">
                            {{ $so }}
                        </button>
                    </li>
                    @php $first = false; @endphp
                @endforeach
            </ul>
            @php 
                $sheetLinks = [
                    'SO ABC'        => '0',
                    'SO YONAS'      => '65945211',
                    'SO ATC'        => '1983605501',
                    'SO ASTA KARYA' => '830965925',
                    'SO MEGUMI'     => '870361738',
                    'SO MJI'        => '321136165',
                    'SO KIRANA INDONESIA' => '1207560434'
                ];
                $spreadsheetId = '1DHKx-TLLpP7PXwDo5ps9Snzk9XMi8Md3nk6Zgvl0UQ4';
                $first = true;
            @endphp

            <div class="tab-content mt-3" id="coeTabsContent">
                @foreach($allData as $so => $items)
                    @php
                        $gid      = $sheetLinks[$so] ?? '';
                        $sheetUrl = $gid 
                            ? "https://docs.google.com/spreadsheets/d/{$spreadsheetId}/edit#gid={$gid}" 
                            : "#";
                    @endphp

                    <div class="tab-pane fade {{ $first ? 'show active' : '' }}" id="tab-{{ Str::slug($so) }}"
                        role="tabpanel" aria-labelledby="tab-{{ Str::slug($so) }}-tab">
                        <div class="d-flex mb-3">
                            <a href="{{ $gid !== '' ? 'https://docs.google.com/spreadsheets/d/'.$spreadsheetId.'/edit#gid='.$gid : '#' }}" 
                                target="_blank" class="btn btn-success btn-xs mr-2" style="border-radius: 8px;">
                                    <i class="fa fa-file"></i> Lihat Spreadsheet
                            </a>
                            <button class="btn btn-success exportPDF" data-so="{{ $so }}">
                                <i class="bi bi-file-earmark-pdf"></i> Export PDF
                            </button>
                        </div>
                        <div class="table-responsive mt-4 mb-4">
                            <table class="table table-striped table-bordered align-middle coeTable" id="coeTable-{{ Str::slug($so) }}">
                                <thead class="table-primary">
                                    <tr class="text-center">
                                        <th width="10"><center><input type="checkbox" class="selectAll ml-3"></center></th>
                                        <th width="10">No</th>
                                        <th>Nama SO</th>
                                        <th>Nama Siswa</th>
                                        <th>Tanggal</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($items as $row)
                                        @php
                                            $tanggal = $row['TANGGAL PENERBANGAN'] ?? '-';
                                            if ($tanggal && $tanggal !== '-') {
                                                try {
                                                    $dateObj = \Carbon\Carbon::parse($tanggal);
                                                    $tanggal = $dateObj->format('d/m/Y');
                                                } catch (\Exception $e) {}
                                            }
                                        @endphp
                                        <tr>
                                            <td><center><input type="checkbox" class="selectRow" value="{{ $row['NAMA LENGKAP SISWA'] ?? '-' }}"></center></td>
                                            <td class="text-center">{{ $no++ }}</td>
                                            <td>{{ $so }}</td>
                                            <td>{{ $row['NAMA LENGKAP SISWA'] ?? '-' }}</td>
                                            <td>{{ $tanggal }}</td>
                                            @php
                                                $keterangan = $row['KETERANGAN'] ?? '';
                                            @endphp
                                            <td class="text-center">
                                                @if(strtolower($keterangan) === 'sudah')
                                                    <span class="badge bg-success">Sudah</span>
                                                @else
                                                    <select class="form-select form-select-sm updateStatus" 
                                                            data-so="{{ $so }}" 
                                                            data-siswa="{{ $row['NAMA LENGKAP SISWA'] ?? '-' }}">
                                                        <option value="">Pilih Keterangan</option>
                                                        <option value="Sudah">Sudah</option>
                                                    </select>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @php $first = false; @endphp
                @endforeach
            </div>
        </div>
    </div> --}}

    @include('landing.footer')

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
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
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap4.js"></script>
    
    {{-- Submit --}}
    {{-- <script>
        // pagination
        $(document).ready(function(){
            $('.coeTable').each(function(){
                $(this).DataTable({
                    pageLength: 10,
                    lengthMenu: [5, 10, 20, 50],
                    language: {
                        search: "Cari:",
                        lengthMenu: "Show _MENU_ data",
                        info: "Menampilkan _START_ - _END_ dari _TOTAL_ data",
                        paginate: {
                            previous: "Prev",
                            next: "Next"
                        },
                        emptyTable: "Belum ada data siswa"
                    },
                    initComplete: function() {
                        const wrapper = $(this).closest('.dataTables_wrapper');
                        
                        // jarak antara search & tabel
                        wrapper.find('.dataTables_filter').css({
                            'margin-bottom': '20px',
                            'text-align': 'right'
                        });

                        // jarak antara tabel & pagination
                        wrapper.find('.dataTables_info').css({
                            'margin-top': '20px',
                            'text-align': 'center',
                            'width': '100%'
                        });
                        
                        wrapper.find('.dataTables_paginate').css({
                            'margin-top': '10px',
                            'display': 'flex',
                            'justify-content': 'center'
                        });

                        wrapper.find('.dataTables_length').css({
                            'margin-bottom': '10px'
                        });

                        // Biar tabel gak nempel ke pagination di bawah
                        wrapper.find('table').css({
                            'margin-bottom': '25px'
                        });
                    }
                });
            });
        });

        let allData = @json($allData);

        const nama_so              = document.getElementById('nama_so');
        const nama_siswa           = document.getElementById('nama_siswa');
        const tanggal_penerbangan  = document.getElementById('tanggal_penerbangan');

        // submit
        $('#coeForm').submit(function(e){
            e.preventDefault();

            let formData = {};
            $(this).serializeArray().forEach(item => formData[item.name] = item.value);

            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: 'Pastikan data yang Anda isi sudah benar.',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'OK',
                cancelButtonText: 'Batal',
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Mengirim data...',
                        text: 'Mohon tunggu sebentar',
                        didOpen: () => Swal.showLoading(),
                        allowOutsideClick: false
                    });

                    $.ajax({
                        url: "{{ route('coe.store') }}",
                        type: 'POST',
                        data: formData,
                        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                        success: function(res){
                            Swal.close();
                            if(res.status === 'success'){
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil!',
                                    text: res.message,
                                    confirmButtonText: 'OK'
                                }).then(() => {
                                    location.reload();
                                });
                                $('#coeForm')[0].reset();
                                nama_so.innerHTML             = '<option value="">Pilih Nama SO</option>';
                                nama_siswa.innerHTML          = '';
                                tanggal_penerbangan.innerHTML = '<option value="">Pilih Tanggal</option>';
                            } else if(res.status === 'exists'){
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Warning',
                                    text: res.message
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Gagal!',
                                    text: res.message
                                });
                            }
                        },
                        error: function(xhr){
                            Swal.close();
                            let msg = xhr.responseJSON?.message || 'Terjadi kesalahan, coba lagi.';
                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: msg
                            });
                        }
                    });
                }
            });
        });

        // update keterangan
        $(document).on('change', '.updateStatus', function() {
            let select = $(this);
            let nama_so = select.data('so');
            let nama_siswa = select.data('siswa');
            let keterangan = select.val();

            if (keterangan === '') return;

            Swal.fire({
                title: 'Update Data?',
                text: 'Keterangan akan disimpan ke spreadsheet.',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'OK',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Menyimpan...',
                        text: 'Mohon tunggu sebentar',
                        didOpen: () => Swal.showLoading(),
                        allowOutsideClick: false
                    });

                    $.ajax({
                        url: "{{ route('coe.store') }}",
                        method: "POST",
                        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                        data: {
                            nama_so: nama_so,
                            nama_siswa: nama_siswa,
                            tanggal_penerbangan: '-', // opsional
                            keterangan: keterangan
                        },
                        success: function(res){
                            Swal.close();
                            if(res.status === 'success'){
                                select.closest('td').html('<span class="badge bg-success">Sudah</span>');
                                Swal.fire('Berhasil!', 'Data keterangan telah diperbarui.', 'success');
                            } else {
                                Swal.fire('Gagal', res.message, 'error');
                            }
                        },
                        error: function(){
                            Swal.close();
                            Swal.fire('Error', 'Terjadi kesalahan saat menyimpan.', 'error');
                        }
                    });
                } else {
                    select.val('');
                }
            });
        });
    </script> --}}

    <script>
        const scriptUrl = "https://script.google.com/macros/s/AKfycbxde8fDH3JsU4sbuu_yeio83XUYaM7LC9LZAeVcgdg2EETtOVbzl9Ga_NlLn5gfLy1iSw/exec";
        const spreadsheetId = "1DHKx-TLLpP7PXwDo5ps9Snzk9XMi8Md3nk6Zgvl0UQ4";
        const sheetLinks = {
            "SO ABC": "0",
            "SO YONAS": "65945211",
            "SO ATC": "1983605501",
            "SO ASTA KARYA": "830965925",
            "SO MEGUMI": "870361738",
            "SO MJI": "321136165",
            "SO KIRANA INDONESIA": "1207560434"
        };

        async function loadAllData() {
            try {
                Swal.fire({
                    icon: 'warning',
                    title: 'Sedang load data...',
                    toast: true,
                    position: 'top',
                    showConfirmButton: false,
                    allowOutsideClick: false,
                    didOpen: () => Swal.showLoading()
                });

                const response = await fetch(`${scriptUrl}?action=getAllData`);
                const data = await response.json();

                const tabs = document.getElementById("coeTabs");
                const content = document.getElementById("coeTabsContent");
                tabs.innerHTML = "";
                content.innerHTML = "";

                let first = true;

                for (const [so, items] of Object.entries(data)) {
                    const soSlug = so.replace(/\s+/g, '-').toLowerCase();
                    tabs.innerHTML += `
                        <li class="nav-item">
                            <button class="nav-link ${first ? 'active' : ''}" data-bs-toggle="tab" data-bs-target="#tab-${soSlug}" type="button">
                                ${so}
                            </button>
                        </li>
                    `;

                    let rows = '';
                    let no = 1;
                    items.forEach(row => {
                        const namaSiswa  = row["NAMA LENGKAP SISWA"] || "-";
                        const terbang    = (row["TERBANG"] || "").trim();
                        const pelunasan  = (row["PELUNASAN"] || "").trim();
                        const keterangan = row["KETERANGAN"] || "-";

                        let formattedTanggal = keterangan;
                        if (keterangan && keterangan !== "-") {
                            const d = new Date(keterangan);
                            if (!isNaN(d)) {
                                const day = String(d.getDate()).padStart(2, '0');
                                const month = String(d.getMonth() + 1).padStart(2, '0');
                                const year = d.getFullYear();
                                formattedTanggal = `${day}-${month}-${year}`;
                            }
                        }

                        rows += `
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" class="selectRow" ${terbang || pelunasan || keterangan ? 'checked' : ''}>
                                </td>
                                <td class="text-center">${no++}</td>
                                <td>${so}</td>
                                <td>${namaSiswa}</td>
                                <td class="text-center">
                                    ${
                                        terbang.toLowerCase() === 'sudah'
                                        ? '<input type="checkbox" checked disabled>'
                                        : `<select class="form-select form-select-sm updateStatusTerbang" data-so="${so}" data-siswa="${namaSiswa}">
                                                <option value="">Pilih</option>
                                                <option value="Sudah">Sudah</option>
                                        </select>`
                                    }
                                </td>
                                <td class="text-center">
                                    ${
                                        pelunasan.toLowerCase() === 'sudah'
                                        ? '<input type="checkbox" checked disabled>'
                                        : `<select class="form-select form-select-sm updateStatusPelunasan" data-so="${so}" data-siswa="${namaSiswa}">
                                                <option value="">Pilih</option>
                                                <option value="Sudah">Sudah</option>
                                        </select>`
                                    }
                                </td>
                                <td class="text-center">
                                    ${
                                        (keterangan.trim() === '' || !isNaN(Date.parse(keterangan)))
                                        ? formattedTanggal
                                        : keterangan.trim() === '-' 
                                            ? `<input type="date" class="form-select form-select-sm updateStatusKeterangan" data-so="${so}" data-siswa="${namaSiswa}">`
                                            : keterangan
                                    }
                                </td>
                            </tr>
                        `;
                    });

                    content.innerHTML += `
                        <div class="tab-pane fade ${first ? 'show active' : ''}" id="tab-${soSlug}">
                            <div class="d-flex mb-3">
                                <a href="https://docs.google.com/spreadsheets/d/${spreadsheetId}/edit#gid=${sheetLinks[so] || '0'}"
                                target="_blank" class="btn btn-success btn-xs mr-4">
                                    <i class="fa fa-file"></i> Lihat Spreadsheet
                                </a>
                                <button class="btn btn-danger mr-1 btn-xs exportPDF" data-so="${so}">
                                    <i class="fa fa-file-pdf"></i> Export PDF
                                </button>
                            </div>
                            <div class="table-responsive mt-4 mb-4">
                                <table class="table table-striped table-bordered align-middle coeTable" id="coeTable-${soSlug}">
                                    <thead class="table-primary text-center">
                                        <tr>
                                            <th><center><input type="checkbox" class="selectAll"></center></th>
                                            <th>No</th>
                                            <th>Nama SO</th>
                                            <th>Nama Siswa</th>
                                            <th>Terbang</th>
                                            <th>Pelunasan</th>
                                            <th>Keterangan (Tanggal)</th>
                                        </tr>
                                    </thead>
                                    <tbody>${rows}</tbody>
                                </table>
                            </div>
                        </div>
                    `;
                    first = false;
                }

                Swal.close();

                $('.coeTable').DataTable({
                    pageLength: 10,
                    language: {
                        search: "Cari:",
                        lengthMenu: "Tampilkan _MENU_ data",
                        info: "Menampilkan _START_ - _END_ dari _TOTAL_ data",
                        emptyTable: "Belum ada data siswa",
                        paginate: { previous: "Prev", next: "Next" }
                    }
                });

            } catch (err) {
                Swal.close();
                Swal.fire("Error", "Gagal memuat data", "error");
            }
        }

        async function loadNamaSO() {
            try {
                const response = await fetch(scriptUrl + "?action=getSO");
                const data = await response.json();

                const selectSO = document.getElementById("nama_so");
                selectSO.innerHTML = `<option value="">Pilih Nama SO</option>`;

                Object.keys(data).forEach(so => {
                    const opt = document.createElement("option");
                    opt.value = so;
                    opt.textContent = so;
                    selectSO.appendChild(opt);
                });

            } catch (err) {
                console.error("Gagal load SO:", err);
                Swal.fire("Error", "Gagal memuat daftar SO", "error");
            }
        }

        async function loadDataBySO(soName) {
            if (!soName) return;
            try {
                const response = await fetch(`${scriptUrl}?action=getDataBySO&nama_so=${encodeURIComponent(soName)}`);
                const result = await response.json();

                const data = result[soName] || [];

                const tbody = document.querySelector("#coeData tbody");
                if (!tbody) return;
                tbody.innerHTML = "";

                if (data.length === 0) {
                    tbody.innerHTML = `<tr><td colspan="5" class="text-center text-muted">Belum ada data</td></tr>`;
                    return;
                }

                let no = 1;
                data.forEach(row => {
                    tbody.innerHTML += `
                        <tr>
                            <td>${no++}</td>
                            <td>${soName}</td>
                            <td>${row["NAMA LENGKAP SISWA"] || "-"}</td>
                            <td>${row["KETERANGAN"] || "-"}</td>
                        </tr>
                    `;
                });
                
                if ($.fn.DataTable.isDataTable('#coeData')) {
                    $('#coeData').DataTable().clear().destroy();
                }
                $('#coeData').DataTable({
                    pageLength: 10,
                    language: {
                        search: "Cari:",
                        lengthMenu: "Tampilkan _MENU_ data",
                        info: "Menampilkan _START_ - _END_ dari _TOTAL_ data",
                        emptyTable: "Belum ada data siswa",
                        paginate: { previous: "Prev", next: "Next" }
                    }
                });

            } catch (err) {
                console.error("Error loadDataBySO:", err);
                Swal.fire("Error", "Gagal memuat data siswa", "error");
            }
        }

        $('#coeForm').submit(function(e){
            e.preventDefault();

            const formData = {
                action: "addData",
                nama_so: $('#nama_so').val(),
                nama_siswa: $('input[name="nama_siswa"]').val(),
                keterangan: $('input[name="keterangan"]').val()
            };

            if (!formData.nama_so || !formData.nama_siswa) {
                Swal.fire("Peringatan", "Nama SO dan Nama Siswa wajib diisi", "warning");
                return;
            }

            Swal.fire({
                title: 'Kirim Data?',
                text: 'Pastikan data sudah benar.',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Kirim',
                cancelButtonText: 'Batal'
            }).then(result => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Mengirim...',
                        text: 'Mohon tunggu sebentar',
                        allowOutsideClick: false,
                        didOpen: () => Swal.showLoading()
                    });

                    $.ajax({
                        url: scriptUrl,
                        method: "POST",
                        data: formData,
                        success: function(res){
                            Swal.close();
                            Swal.fire("Berhasil!", "Data berhasil dikirim.", "success");
                            $('#coeForm')[0].reset();
                            loadDataBySO(formData.nama_so);
                        },
                        error: function(err){
                            console.error(err);
                            Swal.fire("Gagal", "Tidak dapat mengirim data ke server", "error");
                        }
                    });
                }
            });
        });

        $('#nama_so').on('change', function() {
            const selectedSO = $(this).val();
            loadDataBySO(selectedSO);
        });

        // update terbang
        $(document).on('change', '.updateStatusTerbang', function() {
            let select = $(this);
            let nama_so = select.data('so');
            let nama_siswa = select.data('siswa');
            let terbang = select.val();

            if (terbang === '') return;

            Swal.fire({
                title: 'Update Data?',
                text: 'data akan disimpan ke spreadsheet.',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'OK',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Menyimpan...',
                        text: 'Mohon tunggu sebentar',
                        didOpen: () => Swal.showLoading(),
                        allowOutsideClick: false
                    });

                    $.ajax({
                        url: scriptUrl,
                        method: "POST",
                        data: {
                            nama_so: nama_so,
                            nama_siswa: nama_siswa,
                            terbang: terbang
                        },
                        success: function(res){
                            Swal.close();
                            if(res.status === 'success'){
                                select.closest('td').html('<span class="badge bg-success">Sudah</span>');
                                Swal.fire('Berhasil!', 'Data telah diperbarui.', 'success');
                            } else {
                                Swal.fire('Gagal', res.message, 'error');
                            }
                        },
                        error: function(){
                            Swal.close();
                            Swal.fire('Error', 'Terjadi kesalahan saat menyimpan.', 'error');
                        }
                    });
                } else {
                    select.val('');
                }
            });
        });

        // update pelunasan
        $(document).on('change', '.updateStatusPelunasan', function() {
            let select = $(this);
            let nama_so = select.data('so');
            let nama_siswa = select.data('siswa');
            let pelunasan = select.val();

            if (pelunasan === '') return;

            Swal.fire({
                title: 'Update Data?',
                text: 'data akan disimpan ke spreadsheet.',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'OK',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Menyimpan...',
                        text: 'Mohon tunggu sebentar',
                        didOpen: () => Swal.showLoading(),
                        allowOutsideClick: false
                    });

                    $.ajax({
                        url: scriptUrl,
                        method: "POST",
                        data: {
                            nama_so: nama_so,
                            nama_siswa: nama_siswa,
                            pelunasan: pelunasan
                        },
                        success: function(res){
                            Swal.close();
                            if(res.status === 'success'){
                                select.closest('td').html('<span class="badge bg-success">Sudah</span>');
                                Swal.fire('Berhasil!', 'Data telah diperbarui.', 'success');
                            } else {
                                Swal.fire('Gagal', res.message, 'error');
                            }
                        },
                        error: function(){
                            Swal.close();
                            Swal.fire('Error', 'Terjadi kesalahan saat menyimpan.', 'error');
                        }
                    });
                } else {
                    select.val('');
                }
            });
        });

        // update keterangan
        $(document).on('change', '.updateStatusKeterangan', function() {
            let select = $(this);
            let nama_so = select.data('so');
            let nama_siswa = select.data('siswa');
            let keterangan = select.val(); // ini adalah tanggal dari input type="date"

            if (keterangan === '') return;

            Swal.fire({
                title: 'Update Data?',
                text: 'Data akan disimpan ke spreadsheet.',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'OK',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Menyimpan...',
                        text: 'Mohon tunggu sebentar',
                        didOpen: () => Swal.showLoading(),
                        allowOutsideClick: false
                    });

                    $.ajax({
                        url: scriptUrl,
                        method: "POST",
                        data: {
                            nama_so: nama_so,
                            nama_siswa: nama_siswa,
                            keterangan: keterangan
                        },
                        success: function(res){
                            Swal.close();
                            if(res.status === 'success'){
                                // Format tanggal dari input (YYYY-MM-DD → DD-MM-YYYY)
                                let d = new Date(keterangan);
                                let day = String(d.getDate()).padStart(2, '0');
                                let month = String(d.getMonth() + 1).padStart(2, '0');
                                let year = d.getFullYear();
                                let formattedDate = `${day}-${month}-${year}`;

                                // Tampilkan tanggal yang dipilih
                                select.closest('td').html(`<span>${formattedDate}</span>`);

                                Swal.fire('Berhasil!', 'Tanggal berhasil diperbarui.', 'success');
                            } else {
                                Swal.fire('Gagal', res.message, 'error');
                            }
                        },
                        error: function(){
                            Swal.close();
                            Swal.fire('Error', 'Terjadi kesalahan saat menyimpan.', 'error');
                        }
                    });
                } else {
                    select.val('');
                }
            });
        });

        $(document).ready(function(){
            loadNamaSO();
            loadAllData();
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.23/jspdf.plugin.autotable.min.js"></script>

    <!-- EXPORT PDF -->
    <script>
        $(document).on('click', '.exportPDF', function() {
            let soName = $(this).data('so');
            let tabId = '#tab-' + soName.toLowerCase().replace(/\s+/g, '-');
            let selectedRows = $(tabId).find('.selectRow:checked');

            if (selectedRows.length === 0) {
                Swal.fire('Pilih data!', 'Silakan pilih minimal satu siswa untuk dicetak.', 'warning');
                return;
            }

            // Buat dokumen PDF
            let doc = new jspdf.jsPDF({ orientation: "portrait", unit: "mm", format: "a4" });

            // Header
            doc.setFontSize(16);
            doc.text("LPK ACC JAPAN CENTRE", 105, 15, { align: "center" });
            doc.setFontSize(10);
            doc.text("Dukuh Gitung, RT 01/RW 02, Desa Harjosari Lor,", 105, 21, { align: "center" });
            doc.text("Kec. Adiwerna, Kabupaten Tegal, Jawa Tengah 52194", 105, 26, { align: "center" });

            // Garis pembatas
            doc.setLineWidth(0.5);
            doc.line(10, 30, 200, 30);

            // Judul
            doc.setFontSize(12);
            doc.text(`Daftar Siswa - ${soName}`, 105, 38, { align: "center" });

            // Ambil data baris
            let rows = [];
            let i = 1;
            selectedRows.each(function() {
                let tr = $(this).closest('tr');
                let nama = tr.find('td:eq(3)').text().trim();

                // ✅ ambil status checkbox dengan benar
                let terbang = tr.find('td:eq(4)').find('input[type="checkbox"]').is(':checked') ? 'Sudah' : '-';
                let pelunasan = tr.find('td:eq(5)').find('input[type="checkbox"]').is(':checked') ? 'Sudah' : '-';
                
                let keterangan = tr.find('td:eq(6)').text().trim();

                rows.push([i++, nama, terbang, pelunasan, keterangan]);
            });

            // Buat tabel PDF
            doc.autoTable({
                head: [['No', 'Nama Siswa', 'Terbang', 'Pelunasan', 'Keterangan']],
                body: rows,
                startY: 45,
                styles: {
                    halign: 'center',    // Semua kolom center
                    valign: 'middle',
                    fontSize: 10,
                    cellPadding: 3,
                    lineWidth: 0.1
                },
                headStyles: {
                    fillColor: [41, 128, 185],
                    textColor: 255,
                    halign: 'center',
                    valign: 'middle'
                },
                columnStyles: {
                    0: { cellWidth: 10, halign: 'center' },
                    1: { cellWidth: 70, halign: 'center' }, // Nama siswa juga center
                    2: { cellWidth: 25, halign: 'center' },
                    3: { cellWidth: 25, halign: 'center' },
                    4: { cellWidth: 50, halign: 'center' }
                },
                margin: { left: 10, right: 10 }
            });

            // Footer tanggal cetak
            let today = new Date();
            let tanggalCetak = today.toLocaleDateString('id-ID', {
                day: '2-digit', month: 'long', year: 'numeric'
            });

            doc.setFontSize(9);
            doc.text(`Dicetak pada: ${tanggalCetak}`, 200, 290, { align: 'right' });

            // Simpan PDF
            doc.save(`Data_Siswa_${soName.replace(/\s+/g, '_')}.pdf`);
        });
    </script>
</body>

</html>
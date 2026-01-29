<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Pendaftaran</title>
  <link rel="shortcut icon" type="image/png" href="https://www.amanahcitracemerlang.id/storage/images/1738849208_WhatsApp_Image_2025-02-06_at_20.04.03-removebg-preview.png" />
  <link rel="stylesheet" href="{{ asset('template_baru/assets/css/styles.min.css') }}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a class="text-nowrap logo-img">
            <h5>LPK ACC Japan Centre</h5>
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index.html" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Landing Page</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
              <span class="hide-menu">Menu</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-buttons.html" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:layers-minimalistic-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Pendaftaran Online</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/data-pendaftaran" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:bookmark-square-minimalistic-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Data Pendaftaran</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-forms.html" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:file-text-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Forms</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-typography.html" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:text-field-focus-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Typography</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="/" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="https://www.amanahcitracemerlang.id/storage/images/1738849208_WhatsApp_Image_2025-02-06_at_20.04.03-removebg-preview.png" alt="" width="35" height="35" class="rounded-circle">
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title d-flex align-items-center gap-2 mb-4">
                            Daftar Online Berdasarkan Nama Mentor
                            <span>
                                <iconify-icon icon="solar:question-circle-bold" class="fs-7 d-flex text-muted" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success" data-bs-title="Traffic Overview"></iconify-icon>
                            </span>
                        </h5>
                        <div id="traffic-overview" >
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-lg-4">
          <div class="card">
            <div class="card-body text-center">
                <img src="https://www.amanahcitracemerlang.id/storage/images/1738849208_WhatsApp_Image_2025-02-06_at_20.04.03-removebg-preview.png" alt="image" class="img-fluid" width="205">
                <h4 class="mt-7">DATA PENDAFTARAN SISWA BARU (CV ONLINE)</h4>
                <p class="card-subtitle mt-2 mb-3">
                    LPK ACC Japan Centre berlokasi di Dukuh. Gitung, Desa Harjosari Lor, Kecamatan Adiwerna, Kabupaten Tegal, Jawa Tengah 52194.
                </p>
                <button class="btn btn-primary mb-3">Home</button>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">View by page title and screen class</h5>
              <div class="table-responsive">
                <table class="table text-nowrap align-middle mb-0">
                  <thead>
                    <tr class="border-2 border-bottom border-primary border-0"> 
                      <th scope="col" class="ps-0">Page Title</th>
                      <th scope="col" >Link</th>
                      <th scope="col" class="text-center">Pageviews</th>
                      <th scope="col" class="text-center">Page Value</th>
                    </tr>
                  </thead>
                  <tbody class="table-group-divider">
                    <tr>
                      <th scope="row" class="ps-0 fw-medium">
                        <span class="table-link1 text-truncate d-block">Welcome to our
                          website</span>
                      </th>
                      <td>
                        <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/index.html</a>
                      </td>
                      <td class="text-center fw-medium">18,456</td>
                      <td class="text-center fw-medium">$2.40</td>
                    </tr>
                    <tr>
                      <th scope="row" class="ps-0 fw-medium">
                        <span class="table-link1 text-truncate d-block">Modern Admin
                          Dashboard Template</span>
                      </th>
                      <td>
                        <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/dashboard</a>
                      </td>
                      <td class="text-center fw-medium">17,452</td>
                      <td class="text-center fw-medium">$0.97</td>
                    </tr>
                    <tr>
                      <th scope="row" class="ps-0 fw-medium">
                        <span class="table-link1 text-truncate d-block">Explore our
                          product catalog</span>
                      </th>
                      <td>
                        <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/product-checkout</a>
                      </td>
                      <td class="text-center fw-medium">12,180</td>
                      <td class="text-center fw-medium">$7,50</td>
                    </tr>
                    <tr>
                      <th scope="row" class="ps-0 fw-medium">
                        <span class="table-link1 text-truncate d-block">Comprehensive
                          User Guide</span>
                      </th>
                      <td>
                        <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/docs</a>
                      </td>
                      <td class="text-center fw-medium">800</td>
                      <td class="text-center fw-medium">$5,50</td>
                    </tr>
                    <tr>
                      <th scope="row" class="ps-0 fw-medium border-0">
                        <span class="table-link1 text-truncate d-block">Check out our
                          services</span>
                      </th>
                      <td class="border-0">
                        <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/services</a>
                      </td>
                      <td class="text-center fw-medium border-0">1300</td>
                      <td class="text-center fw-medium border-0">$2,15</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title d-flex align-items-center gap-2 mb-5 pb-3">Sessions by
                device<span><iconify-icon icon="solar:question-circle-bold" class="fs-7 d-flex text-muted" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success" data-bs-title="Locations"></iconify-icon></span>
              </h5>
              <div class="row">
                <div class="col-4">
                  <iconify-icon icon="solar:laptop-minimalistic-line-duotone" class="fs-7 d-flex text-primary"></iconify-icon>
                  <span class="fs-11 mt-2 d-block text-nowrap">Computers</span>
                  <h4 class="mb-0 mt-1">87%</h4>
                </div>
                <div class="col-4">
                  <iconify-icon icon="solar:smartphone-line-duotone" class="fs-7 d-flex text-secondary"></iconify-icon>
                  <span class="fs-11 mt-2 d-block text-nowrap">Smartphone</span>
                  <h4 class="mb-0 mt-1">9.2%</h4>
                </div>
                <div class="col-4">
                  <iconify-icon icon="solar:tablet-line-duotone" class="fs-7 d-flex text-success"></iconify-icon>
                  <span class="fs-11 mt-2 d-block text-nowrap">Tablets</span>
                  <h4 class="mb-0 mt-1">3.1%</h4>
                </div>
              </div>

              <div class="vstack gap-4 mt-7 pt-2">
                <div>
                  <div class="hstack justify-content-between">
                    <span class="fs-3 fw-medium">Computers</span>
                    <h6 class="fs-3 fw-medium text-dark lh-base mb-0">87%</h6>
                  </div>
                  <div class="progress mt-6" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-primary" style="width: 100%"></div>
                  </div>
                </div>

                <div>
                  <div class="hstack justify-content-between">
                    <span class="fs-3 fw-medium">Smartphones</span>
                    <h6 class="fs-3 fw-medium text-dark lh-base mb-0">9.2%</h6>
                  </div>
                  <div class="progress mt-6" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-secondary" style="width: 50%"></div>
                  </div>
                </div>

                <div>
                  <div class="hstack justify-content-between">
                    <span class="fs-3 fw-medium">Tablets</span>
                    <h6 class="fs-3 fw-medium text-dark lh-base mb-0">3.1%</h6>
                  </div>
                  <div class="progress mt-6" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-success" style="width: 35%"></div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by IT LPK ACC
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('template_baru/assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('template_baru/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('template_baru/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
  <script src="{{ asset('template_baru/assets/libs/simplebar/dist/simplebar.js') }}"></script>
  <script src="{{ asset('template_baru/assets/js/sidebarmenu.js') }}"></script>
  <script src="{{ asset('template_baru/assets/js/app.min.js') }}"></script>
  <script src="{{ asset('template_baru/assets/js/dashboard.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  {{-- data tabel --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const googleScriptUrl = 'https://script.google.com/macros/s/AKfycbw_gwZKaRIVUuKb0K-NYTtNRP6njudztlkWQwbDXLuuf1nFJ7mWZFffRo9pid818q6u/exec';

        const allowedMentors = [
            'IBNU', 'HERA', 'FIQIH', 'HESTI', 'FAIZAL', 'HILMI', 'TRIO', 'REZA',
            'SELLY', 'ADITYA', 'FAHRUL', 'FUJIAYU', 'FIRMAN', 'GAZI',
            'IPUT', 'NADIA', 'PHILLIP', 'PIPIT', 'AVILA', 'UMAY', 'SONY',
            'JAMAL', 'BANGKIT', 'DIAN', 'ALVAN', 'SELA', 'USWATUN', 'IZAH',
            'AKHMAD ARIFUDIN', 'NUR', 'FATONI', 'ERWIN', 'TYA', 'NUROHMAN'
        ];

        let allData = [];
        let perMentorAll = {};
        let perMentorPerMonth = {};
        let months = {};

        function fetchData() {
            Swal.fire({
                icon: 'warning',
                title: 'Sedang load data, mohon tunggu sebentar..',
                toast: true,
                position: 'top',
                showConfirmButton: false,
                allowOutsideClick: false,
                didOpen: () => { Swal.showLoading(); }
            });

            fetch(googleScriptUrl, { method:'GET', mode:'cors', cache:'no-cache' })
                .then(res => res.text())
                .then(text => {
                    let data;
                    try { data = JSON.parse(text); } 
                    catch(e) { throw new Error('Response bukan JSON valid'); }
                    return data;
                })
                .then(data => {
                    allData = data.map(row => {
                        row.Timestamp = row.Timestamp ? row.Timestamp.substring(0,10) : '';
                        if (row['NAMA MENTOR']) {
                            const mentor = row['NAMA MENTOR'].toUpperCase().trim().replace(/[^A-Z ]/g,'').replace(/\s+/g,' ');
                            const monthKey = row.Timestamp ? row.Timestamp.substring(0,7) : '';
                            if (mentor && allowedMentors.includes(mentor)) {
                                perMentorAll[mentor] = (perMentorAll[mentor] || 0) + 1;
                                if (monthKey) {
                                    if (!perMentorPerMonth[monthKey]) perMentorPerMonth[monthKey] = {};
                                    perMentorPerMonth[monthKey][mentor] = (perMentorPerMonth[monthKey][mentor] || 0) + 1;
                                    months[monthKey] = new Date(monthKey+'-01')
                                        .toLocaleString('default', { month: 'long', year: 'numeric' });
                                }
                            }
                        }
                        return row;
                    });

                    Swal.fire({ icon:'success', title:'Data Successfully!', toast:true, position:'top', timer:2500, showConfirmButton:false });
                    renderChart();
                    renderTable();
                    populateMonthFilter();
                })
                .catch(err => {
                    console.error(err);
                    Swal.fire('Error', 'Gagal mengambil data dari Google Spreadsheet: ' + err.message, 'error');
                })
                .finally(() => Swal.close());
        }

        let mentorChart;
        function renderChart(selectedMonth = '') {
            let labels = Object.keys(perMentorAll);
            let data = labels.map(mentor => {
                if (selectedMonth && perMentorPerMonth[selectedMonth]) {
                    return perMentorPerMonth[selectedMonth][mentor] || 0;
                }
                return perMentorAll[mentor];
            });

            const combined = labels.map((label, i) => ({ mentor: label, count: data[i] }));
            combined.sort((a,b) => b.count - a.count);

            labels = combined.map(c => c.mentor);
            data = combined.map(c => c.count);

            const ctx = document.getElementById('mentorChart').getContext('2d');
            if (mentorChart) mentorChart.destroy();
            mentorChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Jumlah Pendaftaran',
                        data: data,
                        backgroundColor: '#046392'
                    }]
                },
                options: {
                    responsive: true,
                    plugins: { legend: { display: false } },
                    scales: { y: { beginAtZero: true } }
                }
            });

            const tbody = document.querySelector('#mentorTable tbody');
            tbody.innerHTML = '';
            labels.forEach((mentor, i) => {
                const tr = document.createElement('tr');
                tr.innerHTML = `<td>${mentor}</td><td>${data[i]}</td>`;
                tbody.appendChild(tr);
            });
        }

        function populateMonthFilter() {
            const select = document.getElementById('monthFilter');
            select.innerHTML = `<option value="">All Month</option>`;
            Object.keys(months).sort().forEach(key => {
                select.innerHTML += `<option value="${key}">${months[key]}</option>`;
            });

            select.addEventListener('change', () => {
                const month = select.value;
                renderChart(month);
            });
        }

        function formatDate(dateString) {
            if (!dateString) return '';
            const d = new Date(dateString);
            if (isNaN(d)) return dateString;
            return d.toLocaleDateString('id-ID', {
                day: '2-digit',
                month: '2-digit',
                year: 'numeric'
            });
        }

        let dataTable;
        function renderTable() {
            $('#mentorDataTable tbody').empty();

            if ($.fn.DataTable.isDataTable('#mentorDataTable')) {
                $('#mentorDataTable').DataTable().destroy();
            }

            const cleanData = allData.filter(row =>
                row['EMAIL'] && row['EMAIL'].trim() !== '' &&
                row['Timestamp'] && row['Timestamp'].trim() !== ''
            );

            cleanData.sort((a, b) => new Date(b.Timestamp) - new Date(a.Timestamp));

            const tbody = $('#mentorDataTable tbody');
            cleanData.forEach((row, idx) => {
                const columns = [
                    idx + 1,
                    `<button class="btn btn-sm btn-success btn-download-cv" data-id="${row['ID'] || idx}" data-nama="${row['NAMA (INDONESIA)'] || ''}">
                        <i class="fa fa-download"></i> Download CV
                    </button>`,
                    formatDate(row['Timestamp']) || '',
                    row['EMAIL'] || '',
                    row['NAMA (KATAKANA)'] || '',
                    row['NAMA (INDONESIA)'] || '',
                    row['ALAMAT'] || '',
                    formatDate(row['TANGGAL LAHIR']) || '',
                    row['USIA'] || '',
                    row['KELAMIN'] || '',
                    row['NO HP AKTIF'] || '',
                    row['AGAMA'] || '',
                    row['TINGGI'] || '',
                    row['BERAT'] || '',
                    row['GOL DARAH'] || '',
                    row['BUTA WARNA'] || '',
                    row['MATA KIRI'] || '',
                    row['MATA KANAN'] || '',
                    row['PERNAH OPERASI'] || '',
                    row['APAKAH SEDANG MINUM'] || '',
                    row['TANGAN'] || '',
                    row['MEROKOK'] || '',
                    row['PENYAKIT DALAM'] || '',
                    row['KEAHLIAN'] || '',
                    row['SIFAT/KEPRIBADIAN'] || '',
                    row['KELEBIHAN'] || '',
                    row['KELEMAHAN'] || '',
                    row['STATUS'] || '',
                    row['HOBI'] || '',
                    row['MOTIVASI'] || '',
                    row['SELAMA 3 TAHUN DI JEPANG MAU NABUNG BERAPA'] || '',
                    row['SETELAH PULANG JEPANG, APA YANG AKAN DILAKUKAN'] || '',
                    row['APAKAH ANDA PERNAH TINGGAL/BEKERJA DI JEPANG'] || '',
                    row['JIKA YA, KUALIFIKASI APA YANG ANDA LAMAR'] || '',
                    row['SEKOLAH DASAR (SD)'] || '',
                    row['TAHUN MASUK SEKOLAH (SD)'] || '',
                    row['TAHUN KELUAR SEKOLAH (SD)'] || '',
                    row['SEKOLAH MENENGAH PERTAMA (SMP)'] || '',
                    row['TAHUN MASUK SEKOLAH (SMP)'] || '',
                    row['TAHUN KELUAR SEKOLAH (SMP)'] || '',
                    row['SEKOLAH MENENGAH ATAS/KEJURUAN (SMA/SMK)'] || '',
                    row['TAHUN MASUK SEKOLAH (SMA/SMK)'] || '',
                    row['TAHUN KELUAR SEKOLAH (SMA/SMK)'] || '',
                    row['JURUSAN (SMA/SMK)'] || '',
                    row['PERGURUAN TINGGI'] || '',
                    row['PENGALAMAN KERJA'] || '',
                    row['BAHASA ASING YANG DIKUASAI'] || '',
                    row['PERNAH KE JEPANG'] || '',
                    row['JIKA YA, SEBUTKAN TGL/BLN/THN'] || '',
                    row['PERNAH LUAR NEGERI LAINNYA'] || '',
                    row['JIKA YA, NEGARA APA'] || '',
                    row['APAKAH ADA KERABAT DI JEPANG'] || '',
                    row['APA HUBUNGAN KERABAT YANG DI JEPANG'] || '',
                    row['BELAJAR BAHASA'] || '',
                    row['BUKU YANG DI PAKAI'] || '',
                    row['BAB YANG DI PELAJARI'] || '',
                    row['NAMA AYAH'] || '',
                    row['HUBUNGAN AYAH'] || '',
                    row['USIA AYAH'] || '',
                    row['PEKERJAAN AYAH'] || '',
                    row['NAMA IBU'] || '',
                    row['HUBUNGAN IBU'] || '',
                    row['USIA IBU'] || '',
                    row['PEKERJAAN IBU'] || '',
                    row['NAMA SAUDARA'] || '',
                    row['PENDAPAT KELUARGA'] || '',
                    row['NO HP KELUARGA'] || '',
                    row['NAMA MENTOR'] || '',
                    row['UKURAN BAJU'] || '',
                    row['NOMOR SEPATU'] || '',
                    row['PILIH KELAS'] || '',
                    row['PILIH PROGRAM'] || '',
                    row['ID'] || ''
                ];

                tbody.append(`<tr>${columns.map(c => `<td>${c}</td>`).join('')}</tr>`);
            });

            const dataTable = $('#mentorDataTable').DataTable({
                pageLength: parseInt($('#entriesSelect').val()) || 10,
                lengthMenu: [5, 10, 25, 50, 100],
                ordering: false,
                responsive: true,
                autoWidth: false
            });

            $('#entriesSelect').on('change', function() {
                const val = parseInt($(this).val());
                dataTable.page.len(val).draw();
            });
        }

        fetchData();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- download cv --}}
    <script>
        $(document).on('click', '.btn-download-cv', async function(e) {
            e.preventDefault();

            const id = $(this).data('id');
            const nama = $(this).data('nama');

            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to download this CV?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'OK',
                confirmButtonColor: '#046392'
            }).then(async (result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        icon: 'info',
                        title: 'Sedang download CV, mohon tunggu sebentar...',
                        toast: true,
                        position: 'top',
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        didOpen: () => Swal.showLoading()
                    });

                    try {
                        // Ambil data dari Google Apps Script
                        const res = await fetch("https://script.google.com/macros/s/AKfycbw_gwZKaRIVUuKb0K-NYTtNRP6njudztlkWQwbDXLuuf1nFJ7mWZFffRo9pid818q6u/exec");
                        const data = await res.json();
                        const rowData = data.reverse().find(d => d.ID == id);

                        if (!rowData) throw new Error('Data tidak ditemukan');

                        // Kirim data ke Laravel
                        const formData = new FormData();
                        formData.append('data', JSON.stringify(rowData));

                        const response = await fetch('/export-cv-word', {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            body: formData
                        });

                        if (!response.ok) throw new Error('Download gagal');

                        const blob = await response.blob();
                        const url = window.URL.createObjectURL(blob);
                        const a = document.createElement('a');
                        a.href = url;
                        a.download = `CV_${nama.replace(/\s+/g, '_')}.docx`;
                        document.body.appendChild(a);
                        a.click();
                        a.remove();
                        window.URL.revokeObjectURL(url);

                        Swal.fire({
                            title: 'Success!',
                            text: 'File has been downloaded.',
                            icon: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });

                    } catch (err) {
                        console.error(err);
                        Swal.fire({
                            title: 'Error!',
                            text: err.message,
                            icon: 'error'
                        });
                    }
                }
            });
        });
    </script>
</body>

</html>
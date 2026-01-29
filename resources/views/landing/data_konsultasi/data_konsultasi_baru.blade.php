<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Data Konsultasi</title>
    <link rel="shortcut icon" type="image/png"
        href="https://www.amanahcitracemerlang.id/storage/images/1738849208_WhatsApp_Image_2025-02-06_at_20.04.03-removebg-preview.png" />
    <link rel="stylesheet" href="{{ asset('template_baru/assets/css/styles.min.css') }}" />
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
            padding: 0px 0px;
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

        .container {
            overflow-x: auto;
        }

        .card-body {
            padding: 30px;
            border-radius: 10px;
            overflow-x: auto;
        }

        table {
            width: 100%;
            min-width: 1200px;
            border-collapse: collapse;
            white-space: nowrap;
        }

        th,
        td {
            text-align: left;
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f8f9fa;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .table-responsive {
            max-width: 100%;
            overflow-x: auto;
        }

        .dataTables_paginate {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }

        @media (max-width: 576px) {
            #refreshIndicator {
                margin-bottom: 10px;
            }
        }

        .fixed-header-table {
            width: 100%;
            border-collapse: collapse;
        }

        .fixed-header-table thead th {
            position: sticky;
            top: 0;
            background: white;
            z-index: 10;
        }

        .table-scroll-wrapper {
            overflow-x: auto;
        }

        .fixed-header-table th,
        .fixed-header-table td {
            white-space: nowrap;
        }

        #mentorChart {
            width: 100% !important;
            height: 400px !important;
        }

        @media (max-width: 576px) {
            #mentorChart {
                height: 320px !important;
            }
        }

        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .mentor-table-compact {
            font-size: 13px;
            table-layout: fixed;
            /* penting */
            width: 100%;
        }

        .mentor-col {
            width: 70%;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .jumlah-col {
            width: 30%;
            font-weight: bold;
        }

        .table-compact {
            table-layout: fixed;
            width: 100%;
            font-size: 13px;
        }

        .col-no {
            width: 50px;
            text-align: center;
        }

        .col-kategori {
            width: auto;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .col-jumlah {
            width: 50px;
            text-align: center;
            font-weight: bold;
        }
    </style>
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
                @include('landing.sidebar.nav')
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
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="/">
                                <i class="ti ti-home"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="/">
                                <i class="ti ti-book"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="/" id="drop2" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="https://www.amanahcitracemerlang.id/storage/images/1738849208_WhatsApp_Image_2025-02-06_at_20.04.03-removebg-preview.png"
                                        alt="" width="35" height="35" class="rounded-circle">
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="https://www.amanahcitracemerlang.id/storage/images/1738849208_WhatsApp_Image_2025-02-06_at_20.04.03-removebg-preview.png"
                                    alt="image" class="img-fluid" width="205">
                                <h4 class="mt-7">DATA TAMU KONSULTASI LPK ACC JAPAN CENTRE</h4>
                                <p class="card-subtitle mt-2 mb-3">
                                    LPK ACC Japan Centre berlokasi di Dukuh. Gitung, Desa Harjosari Lor, Kecamatan
                                    Adiwerna, Kabupaten Tegal, Jawa Tengah 52194.
                                </p>
                                <button class="btn btn-primary mb-3">Home</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div
                                class="card-header text-dark d-flex justify-content-between align-items-center flex-wrap">
                                <div>
                                    <strong id="chartTitle">Statistik Per Hari</strong>
                                </div>
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <select id="chartFilter" class="form-select form-select-sm">
                                        <option value="perHari">Grafik Berdasarkan Hari</option>
                                        <option value="perBulan">Grafik Berdasarkan Bulan</option>
                                        <option value="perTahun">Grafik Berdasarkan Tahun</option>
                                        <option value="perProvinsi">Grafik Berdasarkan Provinsi</option>
                                        <option value="perKabupaten">Grafik Berdasarkan Kabupaten</option>
                                        <option value="perUmur">Grafik Berdasarkan Usia</option>
                                        <option value="perGender">Grafik Berdasarkan Jenis Kelamin</option>
                                    </select>

                                    <button class="btn btn-success btn-sm px-4 text-nowrap"
                                        onclick="downloadPNG('mainChart')">
                                        Export PNG
                                    </button>
                                    <button class="btn btn-danger btn-sm px-4 text-nowrap"
                                        onclick="downloadPDF('mainChart')">
                                        Export PDF
                                    </button>
                                </div>
                                <div class="card-body text-center">
                                    <div>
                                        <canvas id="mainChart" style="min-height: 300px; width: 100%;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body text-center">
                            {{-- <div id="chartSummary"></div> --}}
                            <p>Jumlah Data Konsultasi Perhari</p>
                            <div id="chartSummary" style="max-height:300px; overflow:auto;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body" style="padding: 20px; border-radius: 10px;">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <label>
                                        Show
                                        <select id="entriesSelect" class="form-control d-inline-block w-auto">
                                            <option value="5">5</option>
                                            <option value="10" selected>10</option>
                                            <option value="20">20</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                        </select>
                                    </label>
                                </div>
                                <div>
                                    <input type="text" id="tableSearch" class="form-control" placeholder="Search...">
                                </div>
                            </div>

                            <div id="refreshIndicator" style="display:none; font-size:15px; color:#888;">
                                🔄 Memuat data...
                            </div>

                            <div class="table-responsive">
                                <form action="{{ route('data-konsultasi.export-pdf') }}" method="GET"
                                    class="d-flex align-items-center mb-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label><b>Dari Tanggal</b></label>
                                            <input type="date" name="start_date" class="form-control me-2 mb-2"
                                                required>
                                            <label><b>Sampai Tanggal</b></label>
                                            <input type="date" name="end_date" class="form-control me-2 mb-2" required>
                                        </div>
                                        <div class="col md-12">
                                            <button type="submit" class="btn btn-success">
                                                <i class="fa fa-download"></i> Export PDF
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <table id="spreadsheetTableKonsultasi"
                                    class="table table-striped table-bordered fixed-header-table">
                                    <thead></thead>
                                    <tbody id="tableBody">
                                        <tr>
                                            <td colspan="14" class="text-center">Sedang memuat data...</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Pagination -->
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span id="tableInfo"></span>
                                <ul class="pagination pagination-sm mb-0" id="paginationControls"></ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-6 px-6 text-center">
                    <p class="mb-0 fs-1">Design and Developed by IT LPK ACC Japan Centre
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

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script>
        const googleScriptUrl = 'https://script.google.com/macros/s/AKfycbyCSsWEpYv0I9mWJvFbpNdr0hTF1LS-mGk8us4MZrmJdW2xjDAIU_qnkKCMFLPKHbEY5Q/exec';
            let allData = [];
            let currentPage = 1;
            let entriesPerPage = parseInt(document.getElementById('entriesSelect').value);
            let chartInstance = null;
            let currentFilter = 'perHari';
            const ctx = document.getElementById('mainChart');
    
            function calculateStats(data) {
                const stats = { perHari:{}, perBulan:{}, perTahun:{}, perProvinsi:{}, perKabupaten:{}, perUmur:{}, perGender:{} };
                const namaBulan = ['','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
    
                data.forEach(row => {
                    const ts = new Date(row['Timestamp']);
                    const day = ts.toISOString().slice(0,10);
                    stats.perHari[day] = (stats.perHari[day]||0)+1;
    
                    const monthName = namaBulan[ts.getMonth()+1] + ' ' + ts.getFullYear();
                    stats.perBulan[monthName] = (stats.perBulan[monthName]||0)+1;
    
                    stats.perTahun[ts.getFullYear()] = (stats.perTahun[ts.getFullYear()]||0)+1;
    
                    const prov = row['Provinsi'] || 'Tidak Diketahui';
                    stats.perProvinsi[prov] = (stats.perProvinsi[prov]||0)+1;
    
                    const kab = row['Kabupaten'] || 'Tidak Diketahui';
                    stats.perKabupaten[kab] = (stats.perKabupaten[kab]||0)+1;
    
                    const umur = parseInt(row['Usia']) || 0;
                    stats.perUmur[umur] = (stats.perUmur[umur]||0)+1;
    
                    let gender = (row['Jenis Kelamin'] || '').toLowerCase();
                    if(['laki-laki','laki laki','pria'].includes(gender)) gender='Laki-Laki';
                    else if(['perempuan','wanita'].includes(gender)) gender='Perempuan';
                    else gender='Tidak Diketahui';
                    stats.perGender[gender] = (stats.perGender[gender]||0)+1;
                });
                return stats;
            }
    
            function renderChart(stats, filterKey) {
                const selected = stats[filterKey];
                const labels = Object.keys(selected);
                const data = Object.values(selected);
                
                if (chartInstance) chartInstance.destroy();
                
                chartInstance = new Chart(ctx, {
                type: filterKey === 'perHari' ? 'bar' : 'bar',
                data: {
                labels,
                datasets: [{
                label: filterKey,
                data,
                backgroundColor: 'rgba(4,98,145,0.8)',
                borderColor: '#046291',
                borderWidth: 1
                }]
                },
                options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                legend: { display: false },
                title: { display: true, text: filterKey }
                }
                }
                });
                
                renderBarSummary(labels, data);
                
                currentFilter = filterKey;
            }
    
            function renderTable() {
                const table = document.getElementById('spreadsheetTableKonsultasi');
                const tableBody = document.getElementById('tableBody');
                const tableInfo = document.getElementById('tableInfo');
                const paginationControls = document.getElementById('paginationControls');
                const searchValue = document.getElementById('tableSearch').value.toLowerCase();
    
                let filtered = allData.filter(r => Object.values(r).some(v => String(v).toLowerCase().includes(searchValue)));
                filtered.sort((a,b)=> new Date(a['Timestamp']) - new Date(b['Timestamp']));
    
                const totalEntries = filtered.length;
                const totalPages = Math.ceil(totalEntries / entriesPerPage);
                if(currentPage>totalPages) currentPage = totalPages||1;
                const start=(currentPage-1)*entriesPerPage;
                const end=start+entriesPerPage;
                const pageData=filtered.slice(start,end);
    
                const headers = ['No','Tanggal Konsultasi','Email','Nama Lengkap','Usia','Pendidikan Terakhir','Alamat Lengkap','Kecamatan','Kabupaten','Provinsi','WhatsApp','Informasi dari mana?','Jenis Kelamin'];
    
                table.querySelector('thead').innerHTML='<tr>'+headers.map(h=>`<th>${h}</th>`).join('')+'</tr>';
    
                tableBody.innerHTML = pageData.length
                    ? pageData.map((row,idx)=>{
                        const ts=new Date(row['Timestamp']);
                        const day=ts.getDate().toString().padStart(2,'0');
                        const month=(ts.getMonth()+1).toString().padStart(2,'0');
                        const year=ts.getFullYear();
                        const formattedDate = `${day}-${month}-${year}`;
    
                        return `<tr>
                            <td class="text-center">${start+idx+1}</td>
                            <td>${formattedDate}</td>
                            <td>${row['Email Address']||''}</td>
                            <td>${row['Nama Lengkap']||''}</td>
                            <td>${row['Usia']||''}</td>
                            <td>${row['Pendidikan Terakhir']||''}</td>
                            <td>${row['Alamat (Dukuh/Desa/RT RW)']||''}</td>
                            <td>${row['Kecamatan']||''}</td>
                            <td>${row['Kabupaten']||''}</td>
                            <td>${row['Provinsi']||''}</td>
                            <td>${row['WhatsApp']||''}</td>
                            <td>${row['Dapat informasi dari mana?']||''}</td>
                            <td>${row['Jenis Kelamin']||''}</td>
                        </tr>`;
                    }).join('')
                    : `<tr><td colspan="${headers.length}" class="text-center">Tidak ada data</td></tr>`;
    
                tableInfo.innerText=`Menampilkan ${start+1}-${Math.min(end,totalEntries)} dari ${totalEntries} data`;
    
                let pagesHtml='';
                for(let i=1;i<=totalPages;i++){
                    pagesHtml+=`<li class="page-item ${i===currentPage?'active':''}"><a href="#" class="page-link" data-page="${i}">${i}</a></li>`;
                }
                paginationControls.innerHTML=pagesHtml;
            }

            function renderBarSummary(labels, data) {
                const summaryContainer = document.getElementById('chartSummary');
                let html = '';
                
                if(labels.length === 0){
                summaryContainer.innerHTML = '<p class="text-muted">Tidak ada data</p>';
                return;
                }
                
                const maxValue = Math.max(...data);
                const colors = ['bg-primary','bg-success','bg-warning','bg-danger','bg-info','bg-secondary'];
                
                labels.forEach((label, i) => {
                const count = data[i];
                const percent = (count / maxValue) * 100;
                const color = colors[i % colors.length];
                
                html += `
                <div class="mb-2">
                    <div class="hstack justify-content-between">
                        <span class="fs-3 fw-medium">${label}</span>
                        <h6 class="fs-3 fw-medium text-dark mb-0">${count} siswa</h6>
                    </div>
                    <div class="progress mt-1" style="height: 10px;">
                        <div class="progress-bar ${color}" style="width:${percent}%"></div>
                    </div>
                </div>`;
                });
                
                summaryContainer.innerHTML = html;
            }
    
            function fetchData(){
                const indicator=document.getElementById('refreshIndicator');
                indicator.style.display='inline';
                Swal.fire({
                    icon: 'warning',
                    title: 'Sedang load data, mohon tunggu sebentar..',
                    toast: true,
                    position: 'top',
                    showConfirmButton: false,
                    allowOutsideClick: false,
                    didOpen: () => { Swal.showLoading(); }
                });
                fetch(googleScriptUrl)
                    .then(res=>res.json())
                    .then(data=>{
                        allData = data||[];
                        indicator.style.display='none';
                        currentPage=1;
                        Swal.fire({ icon:'success', title:'Data Successfully!', toast:true, position:'top', timer:2500, showConfirmButton:false });
                        renderTable();
                        const stats=calculateStats(allData);
                        renderChart(stats,currentFilter);
                    })
                    .catch(err=>{
                        console.error(err);
                        indicator.innerText='❌ Gagal memuat data';
                    });
            }
    
            document.getElementById('tableSearch').addEventListener('input',()=>{currentPage=1; renderTable();});
            document.getElementById('entriesSelect').addEventListener('change', e=>{entriesPerPage=parseInt(e.target.value); currentPage=1; renderTable();});
            document.getElementById('paginationControls').addEventListener('click', e=>{if(e.target.classList.contains('page-link')){e.preventDefault();currentPage=parseInt(e.target.dataset.page);renderTable();}});
    
            document.getElementById('chartFilter').addEventListener('change', function () {
                const selected = this.value;
                const stats = calculateStats(allData);
    
                renderChart(stats, selected);
    
                document.getElementById('chartTitle').innerText =
                    this.options[this.selectedIndex].text;
            });
    
            fetchData();
            setInterval(fetchData, 600000);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- Grafik All --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.8.2/jspdf.plugin.autotable.min.js"></script>

    {{-- Chart --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.8.2/jspdf.plugin.autotable.min.js"></script>
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
</body>

</html>
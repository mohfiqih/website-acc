<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Data Tamu Konsultasi</title>
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
            border: 1px solid #046291;
            background-color: white;
            color: #046291;
            font-weight: bold;
        }

        .pagination li a:hover {
            background-color: #046291;
            color: white;
        }

        .pagination li.active span {
            background-color: #046291;
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
    </style>
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
                    <h2 style="text-align: center"></span>DATA TAMU KONSULTASI LPK ACC JAPAN CENTRE</h2>
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

    {{-- Chart All --}}
    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header text-dark d-flex justify-content-between align-items-center flex-wrap">
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

                    <button class="btn btn-success btn-sm px-4 text-nowrap" onclick="downloadPNG('mainChart')">
                        Export PNG
                    </button>
                    <button class="btn btn-danger btn-sm px-4 text-nowrap" onclick="downloadPDF('mainChart')">
                        Export PDF
                    </button>
                </div>
            </div>
            <div class="card-body text-center">
                <div>
                    <canvas id="mainChart" style="min-height: 300px; width: 100%;"></canvas>
                </div>
                <div id="chartSummary"></div>
            </div>
        </div>
    </div>

    {{-- Data --}}
    {{-- <div class="container mt-2">
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

                <div class="table-responsive">
                    <form action="{{ route('data-konsultasi.export-pdf') }}" method="GET"
                        class="d-flex align-items-center mb-3">
                        <div class="row">
                            <div class="col-md-12">
                                <label><b>Dari Tanggal</b></label>
                                <input type="date" name="start_date" class="form-control me-2 mb-2" required>
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
                    <div id="refreshIndicator"
                        style="display: none; font-size: 15px; color: #888; margin-right: 10px;">
                        🔄 Refreshing data...
                    </div>
                    <br />
                    <div class="table-responsive">
                        <table id="spreadsheetTableKonsultasi" class="table table-striped table-bordered fixed-header-table">
                            <tbody id="tableBody">
                                <tr>
                                    <td colspan="14" class="text-center">Sedang memuat data...</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Pagination di luar DataTables -->
                <div class="d-flex justify-content-between align-items-center">
                    <span id="tableInfo"></span>

                    <div class="d-flex align-items-center ms-auto">
                        <ul class="pagination pagination-sm mb-0" id="paginationControls"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    
    <div class="container mt-2">
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
                                <input type="date" name="start_date" class="form-control me-2 mb-2" required>
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
                    <table id="spreadsheetTableKonsultasi" class="table table-striped table-bordered fixed-header-table">
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
    <br />

    {{-- <div id="preloader"></div> --}}

    @include('landing.footer')

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    {{-- <script>
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

            if(chartInstance) chartInstance.destroy();

            chartInstance = new Chart(ctx, {
                type: filterKey==='perHari' ? 'line' : 'bar',
                data: { labels, datasets:[{label: filterKey, data, backgroundColor:'rgba(4,98,145,0.8)', borderColor:'#046291', borderWidth:1}]},
                options: { responsive:true, maintainAspectRatio:false, plugins:{legend:{display:false}, title:{display:true,text:filterKey}}}
            });

            // Tabel summary
            const summaryContainer = document.getElementById('chartSummary');
            let tableHTML = `<table class="table table-bordered table-sm mt-2 text-nowrap"><thead><tr><th>No</th><th>Kategori</th><th>Jumlah</th></tr></thead><tbody>`;
            labels.forEach((lbl,i)=> tableHTML+=`<tr><td>${i+1}</td><td>${lbl}</td><td>${data[i]}</td></tr>`);
            tableHTML+='</tbody></table>';
            summaryContainer.innerHTML = tableHTML;
            currentFilter = filterKey;
        }

        function renderTable() {
            const table = document.getElementById('spreadsheetTableKonsultasi');
            const tableBody = document.getElementById('tableBody');
            const tableInfo = document.getElementById('tableInfo');
            const paginationControls = document.getElementById('paginationControls');
            const searchValue = document.getElementById('tableSearch').value.toLowerCase();

            let filtered = allData.filter(r => Object.values(r).some(v => String(v).toLowerCase().includes(searchValue)));
            filtered.sort((a, b) => new Date(a['Timestamp']) - new Date(b['Timestamp']));

            const totalEntries = filtered.length;
            const totalPages = Math.ceil(totalEntries / entriesPerPage);
            if (currentPage > totalPages) currentPage = totalPages || 1;
            const start = (currentPage-1)*entriesPerPage;
            const end = start+entriesPerPage;
            const pageData = filtered.slice(start,end);

            const headers = [
                {text:'No', width:'40px'}, 'Tanggal Konsultasi','Email','Nama Lengkap','Usia','Pendidikan Terakhir','Alamat Lengkap',
                'Kecamatan','Kabupaten','Provinsi','WhatsApp','Informasi dari mana?','Jenis Kelamin'
            ];

            let theadHTML = '<tr>';
            headers.forEach(h => theadHTML += `<th${typeof h==='object'&&h.width?` style="width:${h.width}"`:''}>${typeof h==='object'?h.text:h}</th>`);
            theadHTML+='</tr>';
            table.querySelector('thead').innerHTML = theadHTML;

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

            tableInfo.innerText = `Menampilkan ${start+1}-${Math.min(end,totalEntries)} dari ${totalEntries} data`;

            // Pagination
            let pagesHtml='';
            for(let i=1;i<=totalPages;i++){
                pagesHtml+=`<li class="page-item ${i===currentPage?'active':''}"><a href="#" class="page-link" data-page="${i}">${i}</a></li>`;
            }
            paginationControls.innerHTML=pagesHtml;
        }

        // Fetch data dari Google Script (client-side)
        function fetchData(){
            const indicator=document.getElementById('refreshIndicator');
            indicator.style.display='inline';
            fetch(googleScriptUrl)
                .then(res=>res.json())
                .then(data=>{
                    allData=data||[];
                    indicator.style.display='none';
                    currentPage=1;
                    renderTable();
                    const stats=calculateStats(allData);
                    renderChart(stats,currentFilter);
                })
                .catch(err=>{
                    console.error(err);
                    indicator.innerText='❌ Gagal memuat data';
                });
        }

        // Event listener
        document.getElementById('tableSearch').addEventListener('input',()=>{currentPage=1; renderTable();});
        document.getElementById('entriesSelect').addEventListener('change', e=>{entriesPerPage=parseInt(e.target.value); currentPage=1; renderTable();});
        document.getElementById('paginationControls').addEventListener('click', e=>{if(e.target.classList.contains('page-link')){e.preventDefault(); currentPage=parseInt(e.target.dataset.page); renderTable();}});

        // Download PDF
        function downloadPDF(chartId){
            const canvas=document.getElementById(chartId);
            const imgData=canvas.toDataURL("image/png");
            const { jsPDF } = window.jspdf;
            const doc=new jsPDF({orientation:'landscape',unit:'px',format:'a4'});
            doc.setFontSize(16); 
            doc.text(currentFilter,doc.internal.pageSize.getWidth()/2,20,{align:'center'});
            const pageWidth=doc.internal.pageSize.getWidth();
            const imgWidth=pageWidth*0.8; 
            const imgHeight=(canvas.height/canvas.width)*imgWidth;
            const x=(pageWidth-imgWidth)/2;
            doc.addImage(imgData,"PNG",x,40,imgWidth,imgHeight);
            doc.save(currentFilter+".pdf");
        }

        // Download PNG
        function downloadPNG(chartId){
            const canvas=document.getElementById(chartId);
            const url=canvas.toDataURL("image/png");
            const link=document.createElement("a");
            link.href=url; 
            link.download=currentFilter+".png"; 
            link.click();
        }

        // Inisialisasi
        fetchData();
        setInterval(fetchData, 600000); // refresh setiap 10 menit
    </script> --}}

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

            if(chartInstance) chartInstance.destroy();

            chartInstance = new Chart(ctx, {
                type: filterKey==='perHari' ? 'line' : 'bar',
                data: { labels, datasets:[{label: filterKey, data, backgroundColor:'rgba(4,98,145,0.8)', borderColor:'#046291', borderWidth:1}]},
                options: { responsive:true, maintainAspectRatio:false, plugins:{legend:{display:false}, title:{display:true,text:filterKey}}}
            });

            // Tabel summary
            const summaryContainer = document.getElementById('chartSummary');
            let tableHTML = `<table class="table table-bordered table-sm mt-2 text-nowrap"><thead><tr><th>No</th><th>Kategori</th><th>Jumlah</th></tr></thead><tbody>`;
            labels.forEach((lbl,i)=> tableHTML+=`<tr><td>${i+1}</td><td>${lbl}</td><td>${data[i]}</td></tr>`);
            tableHTML+='</tbody></table>';
            summaryContainer.innerHTML = tableHTML;
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

        fetchData();
        setInterval(fetchData, 600000);
    </script>

    {{-- <script>
        // Refresh tabel
        function refreshTable() {
            const indicator = document.getElementById('refreshIndicator');
            indicator.style.display = 'inline';

            fetch('{{ route('refresh.pendaftaran') }}')
                .then(response => response.text())
                .then(html => {
                    document.getElementById('tableBody').innerHTML = html;
                    indicator.style.display = 'none';
                })
                .catch(error => {
                    console.error('Gagal refresh tabel', error);
                    indicator.innerText = '❌ Gagal memuat data';
                    setTimeout(() => {
                        indicator.style.display = 'none';
                        indicator.innerText = '🔄 Refreshing data...';
                    }, 6000000);
                });
        }

        setInterval(refreshTable, 6000000);

        $(document).ready(function() {
            let table = $('#spreadsheetTableKonsultasi').DataTable({
                "paging": true,
                "pageLength": 10,
                "searching": true,
                "info": false,
                "lengthChange": false,
                "scrollY": false,
                "scrollCollapse": false,
                "dom": 'rtp' 
            });

            // **Sembunyikan pagination bawaan DataTables**
            $('.dataTables_paginate').hide();

            // Custom Search
            $('#tableSearch').on('keyup', function() {
                table.search(this.value).draw();
            });

            // Custom Entries Dropdown
            $('#entriesSelect').on('change', function() {
                table.page.len(this.value).draw();
            });

            $(document).on('click', '#paginationControls .page-link', function(e) {
                e.preventDefault();
                let page = parseInt($(this).data('page'));
                if (!isNaN(page)) {
                    table.page(page).draw('page');
                }
            });
        });

        $(document).ready(function() {
            let table = $('#spreadsheetTable').DataTable({
                "paging": true,
                "pageLength": 10,
                "searching": true,
                "info": false,
                "lengthChange": false,
                "scrollY": false,
                "scrollCollapse": false,
                "dom": 'rtp' 
            });

            // **Sembunyikan pagination bawaan DataTables**
            $('.dataTables_paginate').hide();

            // Custom Search
            $('#tableSearch').on('keyup', function() {
                table.search(this.value).draw();
            });

            // Custom Entries Dropdown
            $('#entriesSelect').on('change', function() {
                table.page.len(this.value).draw();
            });

            $(document).on('click', '#paginationControls .page-link', function(e) {
                e.preventDefault();
                let page = parseInt($(this).data('page'));
                if (!isNaN(page)) {
                    table.page(page).draw('page');
                }
            });
        });
    </script> --}}

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- Grafik All --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.8.2/jspdf.plugin.autotable.min.js"></script>
    {{-- <script>
        const datasets = {
            perHari: {
                labels: {!! json_encode(array_keys($perHari)) !!},
                data: {!! json_encode(array_values($perHari)) !!},
                type: 'line',
                title: 'Statistik Berdasarkan Hari'
            },
            perBulan: {
                labels: {!! json_encode(array_keys($perBulan)) !!},
                data: {!! json_encode(array_values($perBulan)) !!},
                type: 'bar',
                title: 'Statistik Berdasarkan Bulan'
            },
            perTahun: {
                labels: {!! json_encode(array_keys($perTahun)) !!},
                data: {!! json_encode(array_values($perTahun)) !!},
                type: 'bar',
                title: 'Statistik Berdasarkan Tahun'
            },
            perProvinsi: {
                labels: {!! json_encode(array_keys($perProvinsi)) !!},
                data: {!! json_encode(array_values($perProvinsi)) !!},
                type: 'bar',
                title: 'Statistik Berdasarkan Provinsi'
            },
            perKabupaten: {
                labels: {!! json_encode(array_keys($perKabupaten)) !!},
                data: {!! json_encode(array_values($perKabupaten)) !!},
                type: 'bar',
                title: 'Statistik Berdasarkan Kabupaten'
            },
            perUmur: {
                labels: {!! json_encode(array_keys($perUmur)) !!},
                data: {!! json_encode(array_values($perUmur)) !!},
                type: 'bar',
                title: 'Statistik Berdasarkan Umur'
            },
            perGender: {
                labels: {!! json_encode(array_keys($perGender)) !!},
                data: {!! json_encode(array_values($perGender)) !!},
                type: 'bar',
                title: 'Statistik Berdasarkan Jenis Kelamin'
            }
        };

        // Urutkan per umur
        datasets.perUmur.labels = datasets.perUmur.labels
            .map((v, i) => ({ label: parseInt(v), value: datasets.perUmur.data[i] }))
            .sort((a, b) => a.label - b.label)
            .map(item => item.label);

        datasets.perUmur.data = datasets.perUmur.labels.map(label => {
            const idx = datasets.perUmur.labels.indexOf(label);
            return Object.values({!! json_encode($perUmur) !!})[idx];
        });

        const ctx = document.getElementById('mainChart');
        let chartInstance = null;
        let currentFilter = 'perHari';

        function renderChart(filterKey) {
            const selected = datasets[filterKey];
            if (!selected) return;

            if (chartInstance) chartInstance.destroy();

            chartInstance = new Chart(ctx, {
                type: selected.type,
                data: {
                    labels: selected.labels,
                    datasets: [{
                        label: selected.title,
                        data: selected.data,
                        backgroundColor: 'rgba(4, 98, 145, 0.8)',
                        borderColor: '#046291',
                        borderWidth: 1.2,
                        fill: selected.type === 'line',
                        tension: 0.3
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        x: { ticks: { color: '#333', maxRotation: 45, minRotation: 0 } },
                        y: { beginAtZero: true, ticks: { precision: 0, stepSize: 1, color: '#333' } }
                    },
                    plugins: {
                        legend: { display: false },
                        title: {
                            display: true,
                            text: selected.title,
                            color: '#046291',
                            font: { size: 15, weight: 'bold' },
                            padding: { top: 10, bottom: 20 }
                        }
                    },
                    layout: { padding: 15 }
                }
            });

            document.getElementById('chartTitle').innerText = selected.title;
            currentFilter = filterKey;

            // --- Update Tabel Keterangan di bawah chart ---
            const summaryContainer = document.getElementById('chartSummary');
            const entries = selected.labels.map((label, i) => [label, selected.data[i]]);
            let tableHTML = `
                <div class="mt-4">
                    <b style="display: block; text-align: left;">Keterangan ${selected.title}:</b>
                    <table id="spreadsheetTable" class="table table-bordered table-sm mt-2 text-nowrap" style="min-width: 300px;">
                        <thead class="table-light">
                            <tr>
                                <th width="10" class="text-center">No</th>
                                <th class="text-center">Kategori</th>
                                <th class="text-center">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            ${entries.map(([label, value], i) => `
                                <tr>
                                    <td class="text-center">${i + 1}</td>
                                    <td class="text-center">${label}</td>
                                    <td class="text-center">${value}</td>
                                </tr>
                            `).join('')}
                        </tbody>
                    </table>
                </div>
            `;
            summaryContainer.innerHTML = tableHTML;

            setTimeout(() => {
                let table = $('#spreadsheetTable').DataTable({
                    "paging": true,
                    "pageLength": 10,
                    "searching": true,
                    "info": false,
                    "lengthChange": false,
                    "scrollY": false,
                    "scrollCollapse": false,
                    "dom": 'rtp',
                    "destroy": true
                });

                $('.dataTables_paginate').hide();

                $('#tableSearch').off('keyup').on('keyup', function() {
                    table.search(this.value).draw();
                });

                $('#entriesSelect').off('change').on('change', function() {
                    table.page.len(this.value).draw();
                });

                $(document).off('click', '#paginationControls .page-link').on('click', '#paginationControls .page-link', function(e) {
                    e.preventDefault();
                    let page = parseInt($(this).data('page'));
                    if (!isNaN(page)) {
                        table.page(page).draw('page');
                    }
                });
            }, 100);
        }

        renderChart('perHari');

        document.getElementById('chartFilter').addEventListener('change', function() {
            renderChart(this.value);
        });

        // --- Download PNG ---
        function downloadPNG(chartId) {
            const canvas = document.getElementById(chartId);
            const url = canvas.toDataURL("image/png");
            const link = document.createElement("a");
            const fileName = datasets[currentFilter].title.replace(/\s+/g, '_').toLowerCase();
            link.href = url;
            link.download = fileName + ".png";
            link.click();
        }

        // --- Download PDF (Chart + Tabel) ---
        function downloadPDF(chartId) {
            const canvas = document.getElementById(chartId);
            const imgData = canvas.toDataURL("image/png");
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF({ orientation: 'landscape', unit: 'px', format: 'a4' });

            const title = datasets[currentFilter].title;
            doc.setFontSize(16);
            doc.text(title, doc.internal.pageSize.getWidth()/2, 20, { align: 'center' });

            // Chart
            const pageWidth = doc.internal.pageSize.getWidth();
            const imgWidth = pageWidth * 0.8;
            const imgHeight = (canvas.height / canvas.width) * imgWidth;
            const x = (pageWidth - imgWidth)/2;
            doc.addImage(imgData, "PNG", x, 40, imgWidth, imgHeight);

            // Tabel keterangan
            const entries = datasets[currentFilter].labels.map((label, i) => [label, datasets[currentFilter].data[i]]);
            doc.autoTable({
                startY: 50 + imgHeight,
                head: [['Kategori', 'Jumlah']],
                body: entries,
                styles: { fontSize: 10, cellPadding: 4 },
                headStyles: { fillColor: [4, 98, 145], textColor: 255, halign: 'center' },
                columnStyles: { 0: { cellWidth: 180 }, 1: { halign: 'center' } },
                margin: { left: 20, right: 20 }
            });

            doc.save(title.replace(/\s+/g, '_').toLowerCase() + ".pdf");
        }

        ctx.style.height = '360px';
        ctx.style.width = '100%';
    </script> --}}

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

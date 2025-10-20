@extends('dasbor.layout.app')
@section('title', 'LPK ACC Japan Centre - Dashboard')
@section('content')

<style>
    #mentorChart, #mainChart {
        width: 100% !important;
        height: 1000px !important;
    }

    @media (max-width: 576px) {
        #mentorChart, #mainChart {
            height: 500px !important;
        }
    }

    .table-responsive {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
</style>

<!-- Breadcrumb -->
<nav aria-label="breadcrumb" class="main-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </ol>
</nav>

<div class="alert alert-light" role="alert">
    Hi, welcome <b>{{ $user->name }}</b>
</div>

{{-- ===== CHART 1: Mentor ===== --}}
<div class="row mb-3 mx-0">
    <div class="container-fluid mt-2 px-0">
        <div class="card shadow-sm border-0 rounded-0">
            <div class="card-header d-flex justify-content-between align-items-center flex-wrap px-3 py-2">
                <strong>Daftar Online Berdasarkan Nama Mentor</strong>
                <div class="d-flex align-items-center flex-wrap" style="gap: 0.75rem;">
                    <select id="monthFilter" class="form-select form-select-sm" style="width: 200px;">
                        <option value="">All Month</option>
                        @foreach ($months as $key => $label)
                            <option value="{{ $key }}">{{ $label }}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-success btn-sm px-4 text-nowrap" onclick="exportMentorJPG()">Export JPG</button>
                    <button class="btn btn-danger btn-sm px-4 text-nowrap" onclick="exportMentorPDF()">Export PDF</button>
                </div>
            </div>

            <div class="card-body text-center p-3">
                <canvas id="mentorChart"></canvas>
                <div id="mentorSummary" class="px-3 pb-3 mt-3"></div>
            </div>
        </div>
    </div>
</div>

{{-- ===== CHART 2: Konsultasi ===== --}}
<div class="row mb-3 mx-0">
    <div class="container-fluid mt-2 px-0">
        <div class="card shadow-sm border-0 rounded-0">
            <div class="card-header d-flex justify-content-between align-items-center flex-wrap px-3 py-2">
                <strong id="chartTitle">Statistik Per Hari</strong>
                <div class="d-flex align-items-center flex-wrap" style="gap: 0.75rem;">
                    <select id="chartFilter" class="form-select form-select-sm">
                        <option value="perHari">Grafik Berdasarkan Hari</option>
                        <option value="perBulan">Grafik Berdasarkan Bulan</option>
                        <option value="perTahun">Grafik Berdasarkan Tahun</option>
                        <option value="perProvinsi">Grafik Berdasarkan Provinsi</option>
                        <option value="perKabupaten">Grafik Berdasarkan Kabupaten</option>
                        <option value="perUmur">Grafik Berdasarkan Umur</option>
                        <option value="perGender">Grafik Berdasarkan Jenis Kelamin</option>
                    </select>
                    <button class="btn btn-success btn-sm px-4 text-nowrap" onclick="downloadKonsultasiPNG()">Export PNG</button>
                    <button class="btn btn-danger btn-sm px-4 text-nowrap" onclick="downloadKonsultasiPDF()">Export PDF</button>
                </div>
            </div>

            <div class="card-body text-center p-3">
                <canvas id="mainChart"></canvas>
                <div id="chartSummary" class="px-3 pb-3 mt-3"></div>
            </div>
        </div>
    </div>
</div>

{{-- Libraries --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.8.2/jspdf.plugin.autotable.min.js"></script>

{{-- ========== SCRIPT CHART 1: Mentor ========== --}}
<script>
    const allData = @json($perMentor);
    const monthlyData = @json($perMentorPerMonth);

    const ctxMentor = document.getElementById('mentorChart').getContext('2d');
    let chartMentor;
    let currentMentorData = allData;

    function renderMentorChart(dataObj) {
        const labels = Object.keys(dataObj);
        const data = Object.values(dataObj);

        if (chartMentor) chartMentor.destroy();

        chartMentor = new Chart(ctxMentor, {
            type: 'bar',
            data: {
                labels,
                datasets: [{
                    label: 'Jumlah Pendaftar',
                    data,
                    borderWidth: 1,
                    backgroundColor: 'rgba(4, 98, 145, 0.8)',
                    borderColor: '#046291'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: {
                    y: { beginAtZero: true, ticks: { stepSize: 5, precision: 0 } },
                    x: { ticks: { autoSkip: false, maxRotation: 70 } }
                }
            }
        });

        updateMentorTable(dataObj);
    }

    function updateMentorTable(dataObj) {
        const entries = Object.entries(dataObj);
        let html = `
            <div class="table-responsive mt-3">
                <table id="tableMentor" class="table table-bordered table-sm text-nowrap">
                    <thead class="table-light">
                        <tr>
                            <th>No</th><th>Nama Mentor</th><th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        ${entries.map(([m,j],i)=>`<tr><td>${i+1}</td><td>${m}</td><td>${j}</td></tr>`).join('')}
                    </tbody>
                </table>
            </div>
        `;
        document.getElementById('mentorSummary').innerHTML = html;
    }

    document.getElementById('monthFilter').addEventListener('change', function() {
        const val = this.value;
        renderMentorChart(val && monthlyData[val] ? monthlyData[val] : allData);
    });

    function exportMentorPDF(){
        const { jsPDF } = window.jspdf;
        const pdf = new jsPDF({orientation:'landscape'});
        const canvas = document.getElementById('mentorChart');
        const imgData = canvas.toDataURL('image/png',1.0);
        pdf.text("Daftar Online Berdasarkan Mentor", 140, 15, {align:'center'});
        pdf.addImage(imgData, 'PNG', 10, 25, 270, 120);
        const data = Object.entries(currentMentorData).map(([m,j])=>[m,j]);
        pdf.autoTable({startY:150,head:[['Mentor','Jumlah']],body:data});
        pdf.save('daftar_online_per_mentor.pdf');
    }

    function exportMentorJPG(){
        const canvas=document.getElementById('mentorChart');
        const link=document.createElement('a');
        link.href=canvas.toDataURL('image/jpeg',1.0);
        link.download='daftar_online_per_mentor.jpg';
        link.click();
    }

    renderMentorChart(allData);
    </script>

    {{-- ========== SCRIPT CHART 2: Konsultasi ========== --}}
    <script>
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

    const ctxKonsultasi = document.getElementById('mainChart');
    let chartKonsultasi = null;
    let currentFilter = 'perHari';

    function renderKonsultasiChart(filter){
        const d = datasets[filter];
        if(!d) return;
        if(chartKonsultasi) chartKonsultasi.destroy();

        chartKonsultasi = new Chart(ctxKonsultasi, {
            type:d.type,
            data:{
                labels:d.labels,
                datasets:[{
                    label:d.title,
                    data:d.data,
                    backgroundColor:'rgba(4,98,145,0.8)',
                    borderColor:'#046291',
                    borderWidth:1.2,
                    fill:d.type==='line',
                    tension:0.3
                }]
            },
            options:{
                responsive:true,
                maintainAspectRatio:false,
                plugins:{legend:{display:false}},
                scales:{y:{beginAtZero:true}}
            }
        });

        document.getElementById('chartTitle').innerText = d.title;
        currentFilter = filter;
        updateKonsultasiTable(d);
    }

    function updateKonsultasiTable(d){
        const entries=d.labels.map((l,i)=>[l,d.data[i]]);
        const html=`
            <div class="table-responsive mt-3">
                <table id="tableKonsultasi" class="table table-bordered table-sm text-nowrap">
                    <thead class="table-light"><tr><th>No</th><th>Kategori</th><th>Jumlah</th></tr></thead>
                    <tbody>${entries.map(([l,v],i)=>`<tr><td>${i+1}</td><td>${l}</td><td>${v}</td></tr>`).join('')}</tbody>
                </table>
            </div>`;
        document.getElementById('chartSummary').innerHTML=html;
    }

    document.getElementById('chartFilter').addEventListener('change',function(){
        renderKonsultasiChart(this.value);
    });

    function downloadKonsultasiPNG(){
        const canvas=document.getElementById('mainChart');
        const link=document.createElement('a');
        link.href=canvas.toDataURL('image/png');
        link.download=datasets[currentFilter].title+'.png';
        link.click();
    }

    function downloadKonsultasiPDF(){
        const { jsPDF } = window.jspdf;
        const doc=new jsPDF({orientation:'landscape'});
        const canvas=document.getElementById('mainChart');
        const img=canvas.toDataURL('image/png');
        const d=datasets[currentFilter];
        doc.text(d.title,140,15,{align:'center'});
        doc.addImage(img,'PNG',10,25,270,120);
        const entries=d.labels.map((l,i)=>[l,d.data[i]]);
        doc.autoTable({startY:150,head:[['Kategori','Jumlah']],body:entries});
        doc.save(d.title+'.pdf');
    }

    renderKonsultasiChart('perHari');
</script>

@endsection
@extends('dasbor.layout.app')
@section('title', 'LPK ACC Japan Centre - Dashboard')
@section('content')

<!-- Breadcrumb -->
<nav aria-label="breadcrumb" class="main-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </ol>
</nav>

<div class="alert alert-light" role="alert">
    Hi, welcome <b>{{ $user->name }}</b>
</div>

{{-- Chart --}}
<div class="row mb-3 mx-0"> {{-- hilangkan margin horizontal --}}
    <div class="container-fluid mt-2 px-0"> {{-- full width tanpa padding --}}
        <div class="card shadow-sm rounded-0 border-0"> {{-- full width tanpa border radius --}}
            <div class="card-header text-dark d-flex justify-content-between align-items-center flex-wrap px-3 py-2">
                <div>
                    <strong>Daftar Online Berdasarkan Nama Mentor</strong>
                </div>
                <div class="d-flex align-items-center flex-wrap" style="gap: 0.75rem;">
                    <select id="monthFilter" class="form-select form-select-sm" style="width: 200px;">
                        <option value="">All Month</option>
                        @foreach ($months as $key => $label)
                            <option value="{{ $key }}">{{ $label }}</option>
                        @endforeach
                    </select>

                    <button class="btn btn-success btn-sm px-4 text-nowrap" onclick="exportJPG()">
                        Export JPG
                    </button>
                    <button class="btn btn-danger btn-sm px-4 text-nowrap" onclick="exportPDFLandscape()">
                        Export PDF
                    </button>
                </div>
            </div>

            <div class="card-body text-center p-3 m-0">
                <div>
                    <canvas id="mentorChart" style="min-height: 300px; width: 100%;"></canvas>
                </div>
                <div id="mentorSummary" class="px-3 pb-3"></div>
            </div>
        </div>
    </div>
</div>

{{-- Chart --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.8.2/jspdf.plugin.autotable.min.js"></script>

    <style>
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
    </style>

    <script>
        const allData = @json($perMentor);
        const monthlyData = @json($perMentorPerMonth);

        const ctx = document.getElementById('mentorChart').getContext('2d');
        let chart;
        let currentData = allData;

        function renderChart(dataObj) {
            const labels = Object.keys(dataObj);
            const data = Object.values(dataObj);

            if (chart) chart.destroy();

            chart = new Chart(ctx, {
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
                    scales: {
                        x: {
                            ticks: {
                                autoSkip: false,
                                maxRotation: 45,
                                minRotation: 45
                            }
                        },
                        y: {
                            beginAtZero: true,
                            ticks: { stepSize: 5, precision: 0 }
                        }
                    },
                    plugins: {
                        legend: { display: false },
                        tooltip: { enabled: true },
                        datalabels: {
                            color: '#000',
                            anchor: 'end',
                            align: 'top',
                            font: {
                                size: 9
                            }
                        }
                    },
                    layout: { padding: { bottom: 20 } }
                }
            });

            currentData = dataObj;
            updateSummaryTable(dataObj);
        }

        function updateSummaryTable(dataObj) {
            const summaryContainer = document.getElementById('mentorSummary');
            const entries = Object.entries(dataObj);

            let tableHTML = `
                <div class="mt-4">
                    <b>Keterangan Jumlah Pendaftaran Berdasarkan Mentor (Hanya data pendaftaran online):</b>
                    <div class="table-responsive mt-2">
                        <table id="spreadsheetTable" class="table table-bordered table-sm mb-0 text-nowrap" style="min-width: 300px;">
                            <thead class="table-light">
                                <tr>
                                    <th width="10" class="text-center">No</th>
                                    <th class="text-center">Nama Mentor</th>
                                    <th class="text-center">Jumlah Pendaftaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                ${entries.map(([mentor, jumlah], i) => `
                                    <tr>
                                        <td class="text-center">${i + 1}</td>
                                        <td class="text-center">${mentor}</td>
                                        <td class="text-center">${jumlah}</td>
                                    </tr>
                                `).join('')}
                            </tbody>
                        </table>
                    </div>
                </div>
            `;
            summaryContainer.innerHTML = tableHTML;
        }

        // Render default all data
        renderChart(allData);

        // Filter bulan
        document.getElementById('monthFilter').addEventListener('change', function() {
            const val = this.value;
            if (val && monthlyData[val]) {
                renderChart(monthlyData[val]);
            } else {
                renderChart(allData);
            }
        });

        // EXPORT PDF HD
        async function exportPDFLandscape() {
            const { jsPDF } = window.jspdf;
            const canvas = document.getElementById('mentorChart');

            // Buat canvas resolusi tinggi (HD export)
            const scale = 5; // perbesar 5x agar super tajam
            const tempCanvas = document.createElement('canvas');
            const rect = canvas.getBoundingClientRect();
            tempCanvas.width = rect.width * scale;
            tempCanvas.height = rect.height * scale;

            const ctx2 = tempCanvas.getContext('2d');
            ctx2.scale(scale, scale);

            // Render ulang chart di kanvas baru agar tidak pecah
            ctx2.drawImage(canvas, 0, 0, rect.width, rect.height);

            const imgData = tempCanvas.toDataURL('image/png', 1.0);

            // Siapkan PDF dengan A4 landscape
            const pdf = new jsPDF({ orientation: 'landscape', unit: 'mm', format: 'a4' });
            const pageWidth = pdf.internal.pageSize.getWidth();
            const pageHeight = pdf.internal.pageSize.getHeight();

            // Atur ukuran gambar agar proporsional di PDF
            const imgWidth = pageWidth - 20; // margin 10 kiri-kanan
            const imgHeight = (rect.height / rect.width) * imgWidth;
            const x = 10;
            let y = 20;

            // Tambahkan judul
            pdf.setFontSize(14);
            pdf.text("Daftar Online Berdasarkan Nama Mentor", pageWidth / 2, 10, { align: 'center' });

            // Tambahkan chart
            pdf.addImage(imgData, 'PNG', x, y, imgWidth, imgHeight, '', 'FAST');

            // Tabel
            const tableData = Object.entries(currentData).map(([mentor, jumlah]) => [mentor, jumlah]);
            pdf.autoTable({
                startY: y + imgHeight + 10,
                head: [['Nama Mentor', 'Jumlah Pendaftar']],
                body: tableData,
                styles: { fontSize: 9, cellPadding: 3 },
                headStyles: { fillColor: [4, 98, 145], textColor: 255, halign: 'center' },
                columnStyles: { 0: { cellWidth: 80 }, 1: { halign: 'center' } },
                margin: { left: 10, right: 10 }
            });

            pdf.save('daftar_online_per_mentor.pdf');
        }

        // EXPORT JPG (juga HD)
        function exportJPG() {
            const canvas = document.getElementById('mentorChart');
            const rect = canvas.getBoundingClientRect();
            const scale = 5;

            const tempCanvas = document.createElement('canvas');
            tempCanvas.width = rect.width * scale;
            tempCanvas.height = rect.height * scale;
            const ctx2 = tempCanvas.getContext('2d');
            ctx2.scale(scale, scale);
            ctx2.drawImage(canvas, 0, 0, rect.width, rect.height);

            const link = document.createElement('a');
            link.download = 'daftar_online_per_mentor.jpg';
            link.href = tempCanvas.toDataURL('image/jpeg', 1.0);
            link.click();
        }
    </script>
@endsection
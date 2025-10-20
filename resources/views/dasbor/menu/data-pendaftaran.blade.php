@extends('dasbor.layout.app')
@section('title', 'LPK ACC Japan Centre - Pendaftaran Online')
@section('content')
<style>
    .pagination-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }

    .pagination {
        display: flex;
        list-style: none;
        padding: 0;
        gap: 5px;
        flex-wrap: wrap;
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

    body::before {
        content: "";
        position: fixed; 
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url("https://www.amanahcitracemerlang.id/storage/images/1738420242_IMG-20250131-WA0006.jpg") center center/cover no-repeat;
        background-size: cover;
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

    .dataTables_wrapper .dataTables_paginate {
        display: flex;
        justify-content: center;
        margin-top: 15px;
    }

    table {
        width: 100%;
        min-width: 1200px;
        border-collapse: collapse;
        white-space: nowrap;
    }

    th {
        background-color: #f8f9fa;
        position: sticky;
        top: 0;
        z-index: 10;
    }
</style>

<!-- Breadcrumb -->
<nav aria-label="breadcrumb" class="main-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('dasbor') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Pendaftaran Online</li>
    </ol>
</nav>

<!-- Konten -->
<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between mt-2">
                <h5 class="m-0 font-weight-bold">Data Pendaftaran Online</h5>
            </div>
            <hr>
            <div class="d-flex justify-content-between mb-3" style="padding: 0 20px;">
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

            <form action="{{ route('data-pendaftaran.export-pdf') }}" method="GET" class="d-flex align-items-center mb-3" style="padding: 0 20px;">
                <div class="row">
                    <div class="col-md-12">
                        <label><b>Dari Tanggal</b></label>
                        <input type="date" name="start_date" class="form-control me-2 mb-2" required>
                        <label><b>Sampai Tanggal</b></label>
                        <input type="date" name="end_date" class="form-control me-2 mb-2" required>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-download"></i> Export PDF
                        </button>
                    </div>
                </div>
            </form>

            <div class="table-responsive" style="padding: 20px">
                <table id="spreadsheetTablePendaftaran" class="table table-bordered table-hover">
                    @if (!empty($cleanedData))
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Download CV</th>
                                <th>WhatsApp</th>
                                <th>Tanggal</th>
                                <th>Email</th>
                                <th>Nama (Katakana)</th>
                                <th>Nama (Indonesia)</th>
                                <th>Alamat</th>
                                <th>Tanggal Lahir</th>
                                <th>Usia</th>
                                <th>Kelamin</th>
                                <th>No HP Aktif</th>
                                <th>Agama</th>
                                <th>Tinggi (cm)</th>
                                <th>Berat (kg)</th>
                                <th>Gol Darah</th>
                                <th>Buta Warna</th>
                                <th>Mata Kiri</th>
                                <th>Mata Kanan</th>
                                <th>Pernah Operasi</th>
                                <th>Apakah Sedang Minum</th>
                                <th>Tangan</th>
                                <th>Merokok</th>
                                <th>Penyakit Dalam</th>
                                <th>Keahlian</th>
                                <th>Sifat/Kepribadian</th>
                                <th>Kelebihan</th>
                                <th>Kelemahan</th>
                                <th>Status</th>
                                <th>Hobi</th>
                                <th>Motivasi</th>
                                <th>Rencana Menabung</th>
                                <th>Rencana Setelah Jepang</th>
                                <th>Pernah Tinggal/Bekerja di Jepang</th>
                                <th>Kualifikasi Lamaran</th>
                                <th>Nama SD</th>
                                <th>Tahun Masuk SD</th>
                                <th>Tahun Keluar SD</th>
                                <th>Nama SMP</th>
                                <th>Tahun Masuk SMP</th>
                                <th>Tahun Keluar SMP</th>
                                <th>Nama SMA/SMK</th>
                                <th>Tahun Masuk SMA/SMK</th>
                                <th>Tahun Keluar SMA/SMK</th>
                                <th>Jurusan SMA/SMK</th>
                                <th>Perguruan Tinggi</th>
                                <th>Pengalaman Kerja</th>
                                <th>Bahasa Asing</th>
                                <th>Pernah ke Jepang</th>
                                <th>Tanggal ke Jepang</th>
                                <th>Luar Negeri Lainnya</th>
                                <th>Negara</th>
                                <th>Kerabat di Jepang</th>
                                <th>Hubungan Kerabat</th>
                                <th>Belajar Bahasa</th>
                                <th>Buku yang Dipakai</th>
                                <th>Bab yang Dipelajari</th>
                                <th>Nama Ayah</th>
                                <th>Hubungan</th>
                                <th>Usia Ayah</th>
                                <th>Pekerjaan Ayah</th>
                                <th>Nama Ibu</th>
                                <th>Hubungan</th>
                                <th>Usia Ibu</th>
                                <th>Pekerjaan Ibu</th>
                                <th>Nama Saudara</th>
                                <th>Pendapat Keluarga</th>
                                <th>No HP Keluarga</th>
                                <th>Nama Mentor</th>
                                <th>Ukuran Baju</th>
                                <th>Nomor Sepatu</th>
                                <th>Pilihan Kelas</th>
                                <th>Pilihan Program</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cleanedData as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-success btn-download-cv" data-id="{{ $row['ID'] }}" data-nama="{{ $row['NAMA (INDONESIA)'] }}">
                                            <i class="fa fa-download"></i> Download CV
                                        </button>
                                    </td>
                                    <td>
                                        @if (!empty($row['NO HP AKTIF']))
                                            @php
                                                $phone = preg_replace('/[^0-9]/', '', $row['NO HP AKTIF']);
                                                if (substr($phone, 0, 1) === '0') {
                                                    $phone = '62' . substr($phone, 1);
                                                }
                                            @endphp
                                            <a href="https://api.whatsapp.com/send?phone={{ $phone }}&text=Halo kak%20{{ urlencode($row['NAMA (INDONESIA)']) }},%20Data Pendaftaran Online%20sudah%20masuk%20ya."
                                                target="_blank"
                                                class="btn btn-sm btn-success btn-whatsapp"
                                                style="background-color:#25D366;border-color:#25D366;">WhatsApp
                                            </a>
                                        @endif
                                    </td>
                                    @foreach($row as $key => $cell)
                                        @if ($key !== 'ID')
                                            <td>{{ $cell }}</td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    @else
                        <tr>
                            <td colspan="100%" class="text-center">Tidak ada data</td>
                        </tr>
                    @endif
                </table>
                <div class="d-flex justify-content-between align-items-center">
                    <span id="tableInfo"></span>
                    
                    <div class="d-flex align-items-center ms-auto">
                        <ul class="pagination pagination-sm mb-0" id="paginationControls"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pastikan urutan JS benar -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>

<script>
$(document).ready(function () {
    // Inisialisasi DataTables
    let table = $('#spreadsheetTablePendaftaran').DataTable({
        paging: true,
        pageLength: 10,
        searching: true,
        info: true,
        lengthChange: false,
        scrollX: true, // <-- ini biar tabel bisa digeser horizontal
        scrollCollapse: true,
        autoWidth: false,
        ordering: false,
        dom: 'lrtip', // Hapus default search box DataTables
        language: {
            search: "Search:",
            lengthMenu: "Tampilkan _MENU_ data",
            info: "Show _START_ - _END_ from _TOTAL_ data",
            paginate: {
                previous: "Sebelumnya",
                next: "Berikutnya"
            }
        }
    });

    // Custom Search (input manual)
    $('#tableSearch').on('keyup', function () {
        table.search(this.value).draw();
    });

    // Custom Entries Dropdown (show 10, 25, dst)
    $('#entriesSelect').on('change', function () {
        table.page.len($(this).val()).draw();
    });
});
</script>

<script>
$(document).on('click', '.btn-download-cv', function (e) {
    e.preventDefault();

    const id = $(this).data('id');
    const nama = $(this).data('nama');

    Swal.fire({
        title: 'Download CV?',
        text: "Apakah kamu ingin mengunduh file CV ini?",
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Ya, unduh',
        cancelButtonText: 'Batal',
        confirmButtonColor: '#046392'
    }).then((result) => {
        if (result.isConfirmed) {
            fetch(`/export-cv-word/${id}`, {
                method: 'GET',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
            .then(response => {
                if (!response.ok) throw new Error('Gagal mengunduh');
                return response.blob();
            })
            .then(blob => {
                const url = window.URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = `CV_${nama.replace(/\s+/g, '_')}.docx`;
                document.body.appendChild(a);
                a.click();
                a.remove();
                window.URL.revokeObjectURL(url);

                Swal.fire({
                    title: 'Berhasil!',
                    text: 'File CV berhasil diunduh.',
                    icon: 'success',
                    timer: 2000,
                    showConfirmButton: false
                });
            })
            .catch(() => {
                Swal.fire({
                    title: 'Error!',
                    text: 'Gagal mengunduh file.',
                    icon: 'error'
                });
            });
        }
    });
});
</script>
@endsection
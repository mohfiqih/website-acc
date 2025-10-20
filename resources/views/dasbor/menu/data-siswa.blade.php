@extends('dasbor.layout.app')
@section('title', 'Data Siswa - LPK ACC Japan Centre')
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
        <li class="breadcrumb-item active" aria-current="page">Data Siswa</li>
    </ol>
</nav>

<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between mt-2">
                <h5 class="m-0 font-weight-bold">Data Keseluruhan Siswa</h5>
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

            {{-- export --}}
            <div class="row" style="padding-left: 20px;">
                <div class="col-md-6">
                    <form method="GET" class="mb-3">
                        {{-- Dropdown --}}
                        <div class="d-flex gap-3 mb-3">
                            <select name="bulan" class="form-control mr-2">
                                <option value="">--Pilih Bulan--</option>
                                @foreach($bulanList as $b)
                                    <option value="{{ $b }}">{{ $b }}</option>
                                @endforeach
                            </select>

                            <select name="tahun" class="form-control mr-2">
                                <option value="">--Pilih Tahun--</option>
                                @foreach($tahunList as $t)
                                    <option value="{{ $t }}">{{ $t }}</option>
                                @endforeach
                            </select>

                            <select name="gelombang" class="form-control">
                                <option value="">--Pilih Gelombang--</option>
                                @foreach($gelombangList as $g)
                                    <option value="{{ $g }}">{{ $g }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Button --}}
                        <div class="d-flex gap-3 mt-2">
                            <button type="submit" name="action" value="excel" formaction="{{ route('data-siswa.export-excel') }}" class="btn btn-success">
                                Export Excel
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="table-responsive" style="padding: 20px">
                <table class="table table-bordered table-hover" id="spreadsheetTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            @foreach($visibleColumns as $col)
                                <th>{{ $col }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                @foreach($visibleColumns as $col)
                                    <td>{{ $row[$col] ?? '' }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
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

{{-- DataTables --}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>

<script>
$(document).ready(function() {
    $('#spreadsheetTable').DataTable({
        paging: true,
        pageLength: 10,
        searching: true,
        info: true,
        scrollX: true,
        scrollCollapse: true,
        autoWidth: false,
        ordering: false,
        language: {
            search: "Search:",
            lengthMenu: "Tampilkan _MENU_ data",
            info: "Show _START_ - _END_ dari _TOTAL_ data",
            paginate: {
                previous: "Next",
                next: "Prev"
            }
        }
    });
});
</script>
@endsection
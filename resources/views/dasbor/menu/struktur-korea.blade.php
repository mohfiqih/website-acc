@extends('dasbor.layout.app')
@section('title', 'LPK ACC Japan Centre - Struktur Office')
@section('content')
    <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dasbor') }}">Home</a></li>
            <li class="breadcrumb-item">Struktur Korea</li>
        </ol>
    </nav>

    <div class="row" style="padding-bottom: 30px;">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <img width="1000px" src="{{ asset('templates/assets/img/korea/struktur.png') }}"
                        class="img-fluid rounded-4" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection

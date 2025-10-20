@extends('dasbor.layout.app')
@section('title', 'LPK ACC Japan Centre - Struktur Office')
@section('content')
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dasbor') }}">Home</a></li>
            <li class="breadcrumb-item">Struktur Jepang</li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <div class="row" style="padding-bottom: 30px;">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h3><b>LPK ACC Asia Jaya (Japan Centre)</b></h3>
                    <p style="text-align: justify;padding-right: 10px;"><b>Visi</b><br />Terwujudnya lembaga
                        pelatihan yang
                        kompetitif
                        dan berkualitas dalam usaha, membangun generasi muda yang lebih produktif, kompetitif dan
                        berkualitas di kancah internasional.</p>
                    <p style="text-align: justify;padding-right: 10px;"><b>Misi</b><br />
                        Meningkatkan kualitas dan produktifitas dengan
                        mengembangkan sumber daya manusia (sdm) pelatihan, program dan
                        manajemen pelatihan, melaksanakan program pelatihan dan
                        memperluas jejaring dengan lembaga/instansi lain yang korelasinya
                        ikut mendukung program pemerintah dalam rangka mengurangi
                        pengangguran dan meningkatkan strata ekonomi masyarakat
                        nasional.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <img width="500px" src="{{ asset('templates/assets/img/japan/struktur-organisasi.png') }}"
                        class="img-fluid rounded-4" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection

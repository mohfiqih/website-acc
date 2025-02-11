@if (Auth::check())
    @if (Auth::user()->user_level == 'Super Admin')
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="{{ asset('templates/assets/img/logo.jpg') }}">
                </div>
                <div class="sidebar-brand-text mx-3">ACC Japan</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('dasbor') }}">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Data
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm"
                    aria-expanded="true" aria-controls="collapseForm">
                    <i class="fab fa-fw fa-wpforms"></i>
                    <span>Pendaftaran</span>
                </a>
                <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Formulir</h6>
                        <a class="collapse-item" href="{{ url('pendaftaran') }}">Daftar Jepang</a>
                    </div>
                </div>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable"
                    aria-expanded="true" aria-controls="collapseTable">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Karyawan</span>
                </a>
                <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Karyawan</h6>
                        <a class="collapse-item" href="{{ url('data-karyawan') }}">Karyawan Jepang</a>
                        <a class="collapse-item" href="{{ url('data-karyawan') }}">Karyawan Korea</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('struktur-jepang') }}">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Struktur Jepang</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('struktur-korea') }}">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Struktur Korea</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('#') }}">
                    <i class="fas fa-fw fa-camera"></i>
                    <span>Update Kegiatan</span>
                </a>
            </li>

            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Master Data
            </div>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('data-user') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Data Users</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage"
                    aria-expanded="true" aria-controls="collapsePage">
                    <i class="fas fa-fw fa-columns"></i>
                    <span>Home ACC</span>
                </a>
                <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Landing Page</h6>
                        <a class="collapse-item" href="{{ url('/') }}" target="_blank">Halaman Utama</a>
                        <a class="collapse-item" href="{{ url('program-jepang') }}" target="_blank">Halaman ACC
                            Japan</a>
                        <a class="collapse-item" href="{{ url('program-korea') }}" target="_blank">Halaman ACC
                            Korea</a>
                    </div>
                </div>
            </li> --}}

            <hr class="sidebar-divider">
            <div class="version">LPK ACC v.1.2</div>
        </ul>
        {{-- @elseif (Auth::user()->user_level == 'Admin Jepang')
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="{{ asset('templates/assets/img/logo.jpg') }}">
                </div>
                <div class="sidebar-brand-text mx-3">ACC Japan</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('dasbor') }}">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Main Menu
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm"
                    aria-expanded="true" aria-controls="collapseForm">
                    <i class="fab fa-fw fa-wpforms"></i>
                    <span>Pendaftaran</span>
                </a>
                <div id="collapseForm" class="collapse" aria-labelledby="headingForm"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Formulir</h6>
                        <a class="collapse-item" href="{{ url('pendaftaran') }}">Daftar Online</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable"
                    aria-expanded="true" aria-controls="collapseTable">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Karyawan Jepang</span>
                </a>
                <div id="collapseTable" class="collapse" aria-labelledby="headingTable"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Karyawan</h6>
                        <a class="collapse-item" href="{{ url('data-karyawan') }}">Data Karyawan</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('struktur') }}">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Struktur Korea</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Master Data
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage"
                    aria-expanded="true" aria-controls="collapsePage">
                    <i class="fas fa-fw fa-columns"></i>
                    <span>Page ACC Japan</span>
                </a>
                <div id="collapsePage" class="collapse" aria-labelledby="headingPage"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Landing Page</h6>
                        <a class="collapse-item" href="{{ url('/') }}" target="_blank">Halaman Utama</a>
                        <a class="collapse-item" href="{{ url('program-jepang') }}" target="_blank">Halaman ACC
                            Japan</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
            <div class="version">Web ACC Version 1.0</div>
        </ul>
    @elseif(Auth::user()->user_level == 'Admin Korea')
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="{{ asset('templates/assets/img/logo.jpg') }}">
                </div>
                <div class="sidebar-brand-text mx-3">ACC Korea</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('dasbor') }}">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Main Menu
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable"
                    aria-expanded="true" aria-controls="collapseTable">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Karyawan Korea</span>
                </a>
                <div id="collapseTable" class="collapse" aria-labelledby="headingTable"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Karyawan</h6>
                        <a class="collapse-item" href="{{ url('data-karyawan') }}">Data Karyawan</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('#') }}">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Struktur Korea</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Master Data
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage"
                    aria-expanded="true" aria-controls="collapsePage">
                    <i class="fas fa-fw fa-columns"></i>
                    <span>Page ACC Korea</span>
                </a>
                <div id="collapsePage" class="collapse" aria-labelledby="headingPage"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Landing Page</h6>
                        <a class="collapse-item" href="{{ url('/') }}" target="_blank">Halaman Utama</a>
                        <a class="collapse-item" href="{{ url('program-korea') }}" target="_blank">Halaman ACC
                            Korea</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
            <div class="version">Web ACC Version 1.0</div>
        </ul>
        --}}
    @endif
@endif

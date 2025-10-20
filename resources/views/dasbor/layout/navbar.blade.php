<style>
    .nav-item.active > .nav-link {
        background-color: #e9f3ff !important;
        font-weight: bold;
        color: #0d6efd !important;
        border-left: 4px solid #0d6efd;
    }

    .collapse-item.active {
        font-weight: bold;
        color: #0d6efd !important;
    }
</style>

@if (Auth::check())
    @if (Auth::user()->user_level == 'Super Admin')
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar" style="font-size: 15px;">

            <!-- Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('dasbor') }}">
                <div class="sidebar-brand-icon">
                    <img src="https://www.amanahcitracemerlang.id/storage/images/1738849208_WhatsApp_Image_2025-02-06_at_20.04.03-removebg-preview.png" style="width: 45px;">
                </div>
                <div class="sidebar-brand-text mx-2 fw-bold">ACC Japan</div>
            </a>

            <hr class="sidebar-divider my-0">

            <!-- Home -->
            <div class="sidebar-heading mt-3">Home</div>
            <li class="nav-item {{ Request::is('dasbor') ? 'active' : '' }}" style="padding-left: 10px;">
                <a class="nav-link" href="{{ url('dasbor') }}">
                    <i class="fas fa-fw fa-tachometer-alt text-primary"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <hr class="sidebar-divider">

            <!-- Data Siswa -->
            <div class="sidebar-heading">ALL DATA</div>
            <li class="nav-item {{ Request::is('data-pendaftaran-siswa-baru') ? 'active' : '' }}" style="padding-left: 10px;">
                <a class="nav-link" href="{{ url('data-pendaftaran-siswa-baru') }}">
                    <i class="fas fa-fw fa-file-signature text-success"></i>
                    <span>Pendaftaran Online</span>
                </a>
            </li>

            <!-- Karyawan -->
            @php
                $isKaryawanActive = Request::is('data-karyawan*');
            @endphp
            <li class="nav-item {{ $isKaryawanActive ? 'active' : '' }}" style="padding-left: 10px;">
                <a class="nav-link {{ $isKaryawanActive ? '' : 'collapsed' }}" href="{{ url('data-karyawan/jepang') }}">
                    <i class="fas fa-fw fa-users text-warning"></i>
                    <span>Data Karyawan</span>
                </a>
            </li>

            <!-- Struktur -->
            <li class="nav-item {{ Request::is('struktur-jepang') ? 'active' : '' }}" style="padding-left: 10px;">
                <a class="nav-link" href="{{ url('struktur-jepang') }}">
                    <i class="fas fa-fw fa-sitemap text-danger"></i>
                    <span>Struktur Karyawan</span>
                </a>
            </li>

            <!-- Update -->
            <li class="nav-item {{ Request::is('update-kegiatan') ? 'active' : '' }}" style="padding-left: 10px;">
                <a class="nav-link" href="{{ url('update-kegiatan') }}">
                    <i class="fas fa-fw fa-camera-retro text-info"></i>
                    <span>Upload Galeri</span>
                </a>
            </li>

            <hr class="sidebar-divider">

            <!-- Master Data -->
            <div class="sidebar-heading">Master Data</div>
            <li class="nav-item {{ Request::is('data-user') ? 'active' : '' }}" style="padding-left: 10px;">
                <a class="nav-link" href="{{ url('data-user') }}">
                    <i class="fas fa-fw fa-user-cog text-dark"></i>
                    <span>Data Users</span>
                </a>
            </li>

            <!-- Landing Page -->
            @php
                $isLandingActive = Request::is('/') || Request::is('program-jepang') || Request::is('program-korea');
            @endphp
            <li class="nav-item {{ $isLandingActive ? 'active' : '' }}" style="padding-left: 10px;">
                <a class="nav-link {{ $isLandingActive ? '' : 'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapseLanding"
                    aria-expanded="{{ $isLandingActive ? 'true' : 'false' }}" aria-controls="collapseLanding">
                    <i class="fas fa-fw fa-globe text-primary"></i>
                    <span>Home ACC</span>
                </a>
                <div id="collapseLanding" class="collapse {{ $isLandingActive ? 'show' : '' }}" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Landing Page:</h6>
                        <a class="collapse-item" href="{{ url('/') }}" target="_blank">
                            <i class="fas fa-home me-1"></i> Halaman Utama
                        </a>
                        <a class="collapse-item" href="{{ url('/pendaftaran-siswa-baru') }}" target="_blank">
                            <i class="fas fa-home me-1"></i> Pendaftaran Online
                        </a>
                        <a class="collapse-item" href="{{ url('/data-pendaftaran') }}" target="_blank">
                            <i class="fas fa-home me-1"></i> Data Pendaftaran
                        </a>
                        <a class="collapse-item" href="{{ url('/data-konsultasi') }}" target="_blank">
                            <i class="fas fa-home me-1"></i> Data Konsultasi
                        </a>
                        <a class="collapse-item" href="{{ url('/manual-book') }}" target="_blank">
                            <i class="fas fa-home me-1"></i> Manual Book
                        </a>
                        <a class="collapse-item" href="{{ url('/upload') }}" target="_blank">
                            <i class="fas fa-home me-1"></i> Halaman Upload
                        </a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider">

            <div class="version text-center small mb-3 text-muted">
                <i class="fas fa-code-branch me-1"></i> Web Version v.1.3.2
            </div>
        </ul>
    @endif
@endif

<style>
    .left-sidebar {
        background: #0b2239 !important;
        box-shadow: 12px 0 32px rgba(16, 43, 70, .14);
    }

    .left-sidebar .sidebar-nav {
        padding: 14px 12px;
    }

    .left-sidebar .brand-logo {
        min-height: 70px;
        padding: 0 22px;
        border-bottom: 1px solid rgba(255, 255, 255, .1);
    }

    .left-sidebar .brand-logo h5 {
        margin: 0;
        color: #fff !important;
        font-size: 15px;
        letter-spacing: .01em;
    }

    .left-sidebar .close-btn,
    .left-sidebar .close-btn i {
        color: #fff !important;
    }

    .app-header {
        background: #fff !important;
        border-bottom: 1px solid #e6edf5;
        box-shadow: 0 4px 18px rgba(35, 61, 90, .05);
    }

    .app-header .navbar {
        min-height: 70px;
        padding: 0 28px;
    }

    .app-header .nav-link,
    .app-header .nav-link i {
        color: #172b4d !important;
    }

    .app-header .nav-icon-hover:hover {
        background: #edf6fc;
        color: #1769aa !important;
    }

    .left-sidebar .brand-logo h5,
    .left-sidebar .sidebar-nav * {
        font-weight: 400 !important;
    }

    .sidebar-nav .sidebar-link {
        display: flex;
        align-items: center;
        min-height: 44px;
        margin-bottom: 4px;
        border-radius: 10px;
        color: #f7fbff !important;
        font-size: 13px;
        transition: background .2s ease, color .2s ease, transform .2s ease;
    }

    .sidebar-nav .nav-small-cap {
        color: #9db4c8 !important;
        font-size: 12px;
        letter-spacing: .04em;
        text-transform: none !important;
    }

    .sidebar-nav .nav-small-cap i {
        color: #9db4c8 !important;
    }

    .sidebar-nav .sidebar-link span,
    .sidebar-nav .sidebar-link .hide-menu,
    .sidebar-nav .sidebar-link iconify-icon {
        color: #f7fbff !important;
    }

    .sidebar-nav .sidebar-link:hover,
    .sidebar-nav .sidebar-item.active>.sidebar-link {
        background: linear-gradient(135deg, #1769aa, #0e4d7c) !important;
        color: #fff !important;
        box-shadow: 0 8px 18px rgba(3, 20, 36, .24);
        transform: translateX(2px);
    }

    .sidebar-nav .sidebar-link:hover *,
    .sidebar-nav .sidebar-item.active>.sidebar-link * {
        color: #fff !important;
    }

    .sidebar-nav .sidebar-link .hide-menu {
        font-size: 13px;
        letter-spacing: .01em;
    }

    @media (max-width: 767px) {
        .app-header .navbar {
            min-height: 62px;
            padding: 0 12px;
        }
    }
</style>
<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
    <ul id="sidebarnav">
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
            <span class="hide-menu">Home</span>
        </li>
        <li class="sidebar-item {{ Request::is('/') ? 'active' : '' }}">
            <a class="sidebar-link" href="/" aria-expanded="false">
                <span>
                    <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Landing Page</span>
            </a>
        </li>
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
            <span class="hide-menu">Menu</span>
        </li>
        <li class="sidebar-item {{ Request::is('link-pendaftaran-mentor') ? 'active' : '' }}">
            <a class="sidebar-link" href="/link-pendaftaran-mentor" aria-expanded="false">
                <span>
                    <iconify-icon icon="solar:link-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Link Per Mentor</span>
            </a>
        </li>
        {{-- <li class="sidebar-item {{ Request::is('pendaftaran-siswa-baru') ? 'active' : '' }}">
            <a class="sidebar-link" href="/pendaftaran-siswa-baru" aria-expanded="false">
                <span>
                    <iconify-icon icon="solar:layers-minimalistic-bold-duotone" class="fs-6">
                    </iconify-icon>
                </span>
                <span class="hide-menu">Pendaftaran Online</span>
            </a>
        </li> --}}
        <li class="sidebar-item {{ Request::is('data-pendaftaran') ? 'active' : '' }}">
            <a class="sidebar-link" href="/data-pendaftaran" aria-expanded="false">
                <span>
                    <iconify-icon icon="solar:bookmark-square-minimalistic-bold-duotone" class="fs-6">
                    </iconify-icon>
                </span>
                <span class="hide-menu">Data Pendaftaran</span>
            </a>
        </li>
        <li class="sidebar-item {{ Request::is('data-konsultasi') ? 'active' : '' }}">
            <a class="sidebar-link" href="/data-konsultasi" aria-expanded="false">
                <span>
                    <iconify-icon icon="solar:letter-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Data Konsultasi</span>
            </a>
        </li>
        <li class="sidebar-item {{ Request::is('upload') ? 'active' : '' }}">
            <a class="sidebar-link" href="/upload" aria-expanded="false">
                <span>
                    <iconify-icon icon="solar:upload-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Upload Dokumentasi</span>
            </a>
        </li>
        <li class="sidebar-item {{ Request::is('manual-book') ? 'active' : '' }}">
            <a class="sidebar-link" href="/manual-book" aria-expanded="false">
                <span>
                    <iconify-icon icon="solar:book-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Manual Book</span>
            </a>
        </li>
        {{-- <li class="sidebar-item {{ Request::is('data-coe') ? 'active' : '' }}">
            <a class="sidebar-link" href="/data-coe" aria-expanded="false">
                <span>
                    <iconify-icon icon="solar:file-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Data COE</span>
            </a>
        </li> --}}
    </ul>
</nav>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link
        href="https://www.amanahcitracemerlang.id/storage/images/1738849208_WhatsApp_Image_2025-02-06_at_20.04.03-removebg-preview.png"
        rel="icon">
    <title>@yield('title')</title>
    <link href="{{ asset('template_home/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('template_home/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('template_home/css/ruang-admin.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template_home/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <style>
        :root {
            --admin-ink: #172b4d;
            --admin-muted: #718096;
            --admin-primary: #1769aa;
            --admin-primary-dark: #0d4f82;
            --admin-surface: #ffffff;
            --admin-page: #f4f7fb;
            --admin-border: #e7edf5;
            --admin-sidebar: #102b46;
        }

        body {
            background: var(--admin-page);
            color: var(--admin-ink);
            font-family: "Nunito", "Segoe UI", sans-serif;
        }

        #wrapper {
            min-height: 100vh;
            background: var(--admin-page);
        }

        /* Fixed desktop sidebar with a compact mobile drawer. */
        .sidebar {
            position: fixed !important;
            top: 0;
            left: 0;
            height: 100vh;
            width: 250px !important;
            padding: 18px 12px;
            background: var(--admin-sidebar) !important;
            box-shadow: 12px 0 32px rgba(16, 43, 70, .08);
            overflow-y: auto;
            z-index: 1030;
            transition: transform .25s ease, box-shadow .25s ease;
        }

        .sidebar .sidebar-brand {
            height: 64px;
            margin-bottom: 18px;
            border-radius: 14px;
            background: rgba(255, 255, 255, .08);
            color: #fff !important;
        }

        .sidebar .sidebar-brand-text {
            color: #fff;
            font-size: 1rem;
            letter-spacing: .01em;
        }

        .sidebar .sidebar-divider {
            border-top-color: rgba(255, 255, 255, .12);
        }

        .sidebar .sidebar-heading {
            padding: 16px 14px 7px;
            color: #8da6bd;
            font-size: .64rem;
            font-weight: 800;
            letter-spacing: .14em;
        }

        .sidebar .nav-item {
            padding-left: 0 !important;
            margin-bottom: 4px;
        }

        .sidebar .nav-link {
            display: flex;
            align-items: center;
            min-height: 44px;
            padding: 10px 14px !important;
            border-radius: 10px;
            color: #c7d5e2 !important;
            transition: background .2s ease, color .2s ease, transform .2s ease;
        }

        .sidebar .nav-link:hover {
            background: rgba(255, 255, 255, .08);
            color: #fff !important;
            transform: translateX(2px);
        }

        .sidebar .nav-link i {
            width: 24px;
            margin-right: 10px;
            color: #8db9d9 !important;
        }

        .sidebar .nav-item.active>.nav-link {
            background: linear-gradient(135deg, #1d76b7, #15548a) !important;
            color: #fff !important;
            box-shadow: 0 8px 18px rgba(6, 91, 147, .28);
        }

        .sidebar .nav-item.active>.nav-link i {
            color: #fff !important;
        }

        .sidebar .collapse-inner {
            margin: 5px 0 10px 20px;
            border-radius: 10px;
            background: #f6f9fc !important;
        }

        .sidebar .collapse-item {
            color: #526579;
            border-radius: 7px;
        }

        .sidebar .collapse-item:hover,
        .sidebar .collapse-item.active {
            background: #e6f2fb;
            color: var(--admin-primary) !important;
        }

        .sidebar .version {
            color: #8da6bd !important;
        }

        #content-wrapper {
            margin-left: 250px;
            min-height: 100vh;
        }

        #content {
            min-height: calc(100vh - 70px);
        }

        #container-wrapper {
            padding: 0 28px 28px;
        }

        .topbar {
            height: 70px;
            margin-bottom: 0 !important;
            padding: 0 28px;
            background: rgba(255, 255, 255, .92) !important;
            border-bottom: 1px solid var(--admin-border);
            box-shadow: 0 4px 18px rgba(35, 61, 90, .04);
            backdrop-filter: blur(12px);
        }

        .topbar #sidebarToggleTop {
            color: var(--admin-primary);
            background: #edf6fc;
        }

        .topbar .nav-link,
        .topbar .nav-link:hover {
            color: var(--admin-ink) !important;
        }

        .topbar .text-white {
            color: var(--admin-ink) !important;
        }

        .main-breadcrumb {
            margin: 24px 0 18px;
        }

        .breadcrumb {
            padding: 0;
            background: transparent;
            font-size: .78rem;
        }

        .breadcrumb-item a {
            color: var(--admin-primary);
        }

        .card {
            border: 1px solid var(--admin-border) !important;
            border-radius: 16px !important;
            box-shadow: 0 10px 30px rgba(43, 70, 99, .06) !important;
        }

        .card-header {
            padding: 20px 22px !important;
            background: var(--admin-surface);
            border-bottom: 1px solid var(--admin-border);
        }

        .table {
            color: #30465e;
        }

        .sticky-footer {
            background: transparent !important;
            color: var(--admin-muted);
        }

        .sticky-footer a {
            color: var(--admin-primary);
        }

        .sidebar::-webkit-scrollbar {
            width: 6px;
        }

        .sidebar::-webkit-scrollbar-thumb {
            background-color: rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        .sidebar::-webkit-scrollbar-thumb:hover {
            background-color: rgba(0, 0, 0, 0.4);
        }

        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-105%);
                box-shadow: none;
            }

            .sidebar.toggled {
                transform: translateX(0);
                box-shadow: 12px 0 32px rgba(16, 43, 70, .22);
            }

            #content-wrapper {
                margin-left: 0;
            }

            #container-wrapper {
                padding-right: 18px;
                padding-left: 18px;
            }

            .topbar {
                padding: 0 18px;
            }
        }

        @media (max-width: 576px) {
            #container-wrapper {
                padding: 0 12px 20px;
            }

            .topbar {
                height: 62px;
                padding: 0 12px;
            }

            .main-breadcrumb {
                margin: 18px 0 14px;
            }

            .card-header {
                padding: 16px !important;
            }
        }
    </style>
</head>

<body id="page-top">
    <div id="wrapper">
        @include('dasbor.layout.navbar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('dasbor.layout.header')
                <div class="container-fluid" id="container-wrapper">
                    @yield('content')

                    <!-- Modal Logout -->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabelLogout">Notifikasi!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah anda ingin logout?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary"
                                        data-dismiss="modal">Cancel</button>

                                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Logout</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Footer --}}
            @include('dasbor.layout.footer')

        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="{{ asset('template_home/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('template_home/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template_home/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('template_home/js/ruang-admin.min.js') }}"></script>
    <script src="{{ asset('template_home/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('template_home/js/demo/chart-area-demo.js') }}"></script>

    <script src="{{ asset('template_home/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template_home/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
            $('#dataTableHover').DataTable();
        });
    </script>
</body>

</html>

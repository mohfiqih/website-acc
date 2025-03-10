<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('templates/assets/img/logo.jpg') }}" rel="icon">
    <title>@yield('title')</title>
    <link href="{{ asset('template_home/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('template_home/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('template_home/css/ruang-admin.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template_home/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
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

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Data Pendaftaran</title>
    <link rel="shortcut icon" type="image/png"
        href="https://www.amanahcitracemerlang.id/storage/images/1738849208_WhatsApp_Image_2025-02-06_at_20.04.03-removebg-preview.png" />
    <link rel="stylesheet" href="{{ asset('template_baru/assets/css/styles.min.css') }}" />
    <style>
        .table-responsive{
          width:100%;
          overflow-x:auto;
          -webkit-overflow-scrolling:touch;
          }

          /* default desktop */
          #mentorDataTable{
          width:100%;
          font-size:12px;
          }

          /* cell tabel */
          #mentorDataTable th,
          #mentorDataTable td{
          padding:6px 8px;
          vertical-align:middle;
          }

          /* kolom */
          .col-no{ width:60px; }
          .col-copy{ width:90px; text-align:center; }
          .col-mentor{ min-width:180px; }
          .col-link{ min-width:420px; }

          /* link panjang */
          .link-text{
          white-space:nowrap;
          }

          /* tombol copy kecil */
          .copyLink{
          font-size:11px;
          padding:3px 8px;
          }

          /* mode HP */
          @media (max-width:768px){

          .table-responsive{
               overflow-x:auto;
          }

          #mentorDataTable{
               min-width:650px; /* supaya bisa geser */
          }

          }
    </style>
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a class="text-nowrap logo-img">
                        <h5>LPK ACC Japan Centre</h5>
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                @include('landing.sidebar.nav')
            </div>
        </aside>
        <div class="body-wrapper">
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="/">
                                <i class="ti ti-home"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="/">
                                <i class="ti ti-book"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="/" id="drop2" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="https://www.amanahcitracemerlang.id/storage/images/1738849208_WhatsApp_Image_2025-02-06_at_20.04.03-removebg-preview.png"
                                        alt="" width="35" height="35" class="rounded-circle">
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="mentorDataTable"
                                    class="table table-striped table-bordered fixed-header-table" style="table-layout:fixed;">
                                    <thead>
                                        <tr>
                                             <th style="width:5%">No</th>
                                             <th style="width:10%">Nama Mentor</th>
                                             <th style="width:5%">Copy Link</th>
                                             <th style="width:20%">Link Pendaftaran Online</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="3" class="text-center">Sedang proses menampilkan data...</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span id="tableInfo"></span>
                                <div class="d-flex align-items-center ms-auto">
                                    <ul class="pagination pagination-sm mb-0" id="paginationControls"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-6 px-6 text-center">
                    <p class="mb-0 fs-1">Design and Developed by IT LPK ACC Japan Centre <br />
                        @include('version.index')
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/allowed-mentors.js') }}"></script>
    <script src="{{ asset('template_baru/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('template_baru/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template_baru/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('template_baru/assets/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('template_baru/assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('template_baru/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('template_baru/assets/js/dashboard.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

    <script>
          $(document).ready(function () {
               const tbody = $("#mentorDataTable tbody");
               tbody.empty();
               allowedMentors.forEach((mentor, index) => {
                    const mentorSlug = mentor.toLowerCase().replace(/\s+/g, "-");
                    const link = `http://amanahcitracemerlang.id/pendaftaran-siswa-baru/${mentorSlug}`;
                    const row = `
                         <tr>
                              <td style="width:5%">${index + 1}</td>
                              <td style="width:10%">${mentor}</td>
                              <td style="width:5%">
                                   <button class="btn btn-xs btn-success copyLink" data-link="${link}">
                                        Copy
                                   </button>
                              </td>
                              <td style="width:20%">
                                   <a href="${link}" target="_blank">${link}</a>
                              </td>
                              
                         </tr>
                    `;
                    tbody.append(row);
               });
          });


          $(document).on("click", ".copyLink", function () {
               const link = $(this).data("link");
               navigator.clipboard.writeText(link).then(() => {
                    Swal.fire({
                         icon: "success",
                         title: "Link berhasil dicopy",
                         text: link,
                         timer: 1500,
                         showConfirmButton: false
                    });
               });
          });

          $(document).on("click", ".copyLink", function () {
               const link = $(this).data("link");
               navigator.clipboard.writeText(link).then(function(){
                    Swal.fire({
                         icon: "success",
                         title: "Success",
                         text: "Link berhasil dicopy",
                         timer: 1200,
                         showConfirmButton: false
                    });
               });
          });
    </script>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.8.2/jspdf.plugin.autotable.min.js"></script>
    <script src='https://widgets.sociablekit.com/google-business-profile/widget.js' async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{ asset('templates/assets/js/kc.fab.min.js') }}"></script>
    <script src="{{ asset('templates/assets/js/kc.fab.js') }}"></script>
    <script src='https://widgets.sociablekit.com/google-reviews/widget.js' async defer></script>
    <script src="{{ asset('templates/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('templates/assets/js/main.js') }}"></script>
</body>

</html>
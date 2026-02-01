<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Upload Dokumentasi</title>
    <link rel="shortcut icon" type="image/png"
        href="https://www.amanahcitracemerlang.id/storage/images/1738849208_WhatsApp_Image_2025-02-06_at_20.04.03-removebg-preview.png" />
    <link rel="stylesheet" href="{{ asset('template_baru/assets/css/styles.min.css') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- Lity CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.css">
    <style>
        .text-label {
            padding-bottom: 10px;
        }

        .form-group {
            padding-top: 15px;
        }

        .pagination-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            padding: 0px 0px;
        }

        .pagination {
            display: flex;
            list-style: none;
            padding: 0;
            gap: 5px;
            flex-wrap: wrap;
        }

        .pagination li {
            display: inline-block;
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

        .pagination li.disabled span {
            opacity: 0.5;
            cursor: not-allowed;
        }

        @media (max-width: 768px) {
            .pagination-container {
                padding: 10px;
                width: 100%;
                justify-content: center;
            }

            .pagination {
                flex-wrap: wrap;
                justify-content: center;
            }

            .pagination li a,
            .pagination li span {
                padding: 6px 10px;
                font-size: 14px;
            }
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
            background-position: center;
            background-repeat: no-repeat;
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

        .container {
            overflow-x: auto;
        }

        .card-body {
            padding: 30px;
            border-radius: 10px;
            overflow-x: auto;
        }

        table {
            width: 100%;
            min-width: 1200px;
            border-collapse: collapse;
            white-space: nowrap;
        }

        th,
        td {
            text-align: left;
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f8f9fa;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .table-responsive {
            max-width: 100%;
            overflow-x: auto;
        }

        .dataTables_paginate {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }

        @media (max-width: 576px) {
            #refreshIndicator {
                margin-bottom: 10px;
            }
        }

        .fixed-header-table {
            width: 100%;
            border-collapse: collapse;
        }

        .fixed-header-table thead th {
            position: sticky;
            top: 0;
            background: white;
            z-index: 10;
        }

        .table-scroll-wrapper {
            overflow-x: auto;
        }

        .fixed-header-table th,
        .fixed-header-table td {
            white-space: nowrap;
        }

        #mentorChart {
            width: 100% !important;
            height: 400px !important;
        }

        @media (max-width: 576px) {
            #mentorChart {
                height: 320px !important;
            }
        }

        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .mentor-table-compact {
            font-size: 13px;
            table-layout: fixed;
            /* penting */
            width: 100%;
        }

        .mentor-col {
            width: 70%;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .jumlah-col {
            width: 30%;
            font-weight: bold;
        }

        .table-compact {
            table-layout: fixed;
            width: 100%;
            font-size: 13px;
        }

        .col-no {
            width: 50px;
            text-align: center;
        }

        .col-kategori {
            width: auto;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .col-jumlah {
            width: 50px;
            text-align: center;
            font-weight: bold;
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
                <!-- Sidebar navigation-->
                @include('landing.sidebar.nav')
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
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
            <div class="container fluid" style="padding-top: 80px;">
                <div class="card">
                    <div class="card-body" style="margin-top: 10px;">
                        <h2 class="modal-title">Upload a file</h2>
                        <p class="modal-description">Attach the file below</p>
                        @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <form id="uploadForm" action="{{ route('images.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group"
                                style="border-color: black; border: 1px solid black;border-radius: 10px;">
                                <label for="images" class="upload-area" style="cursor: pointer;">
                                    <span class="upload-area-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="400" height="300"
                                            viewBox="0 0 340.531 419.116">
                                        </svg>
                                    </span>
                                    <span class="upload-area-description" id="fileCount">
                                        <label for="images" class="file-upload-label">Please Choose Image</label>
                                        <input type="file" name="images[]" id="images" class="d-none" multiple required>
                                        No file selected
                                    </span>
                                </label>
                            </div>

                            <div class="modal-footer" style="margin-top: 10px;">
                                <button type="submit" class="btn btn-primary"
                                    style="background-color: #046392;">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <section class="testimonials" id="galeri">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                        <h2>LPK ACC Japan Centre</h2>
                    </div>
                    <div class="row">
                        @foreach ($images_db as $image)
                        <div class="col-12 col-sm-6 col-lg-3 mb-4">
                            <div class="card h-100">
                                <div class="card-body p-0">
                                    <img src="{{ asset('storage/' . $image->filepath) }}"
                                        class="card-img-top lazyload img-fluid" data-lity alt="Image"
                                        style="width: 100%; aspect-ratio: 1 / 1; object-fit: cover; border-radius: 10px;">
                                </div>
                                <div class="card-footer text-body-secondary">
                                    <b>Date:</b> {{ $image->created_at }}<br />
                                    {{ \Carbon\Carbon::parse($image->created_at)->diffForHumans() }}
                                </div>
                                <button class="btn btn-danger delete-image" style="margin: 10px"
                                    data-id="{{ $image->id }}">
                                    <i class="fa fa-trash"></i> Delete
                                </button>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Custom Pagination -->
                    <div class="pagination-container" style="padding: 0px;">
                        <ul class="pagination">
                            @if ($images_db->onFirstPage())
                            <li class="disabled"><span>&lt;</span></li>
                            @else
                            <li>
                                <a class="text-white" style="background-color: #046392"
                                    href="{{ $images_db->previousPageUrl() }}#galeri" rel="prev">
                                    &lt;
                                </a>
                            </li>
                            @endif

                            @foreach ($images_db->links()->elements[0] as $page => $url)
                            @if ($page == $images_db->currentPage())
                            <li class="active"><span>{{ $page }}</span></li>
                            @else
                            <li><a href="{{ $url }}#galeri">{{ $page }}</a></li>
                            @endif
                            @endforeach

                            @if ($images_db->hasMorePages())
                            <li>
                                <a class="text-white" style="background-color: #046392"
                                    href="{{ $images_db->nextPageUrl() }}#galeri" rel="next">
                                    &gt;
                                </a>
                            </li>
                            @else
                            <li class="disabled"><span>&gt;</span></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script src="{{ asset('template_baru/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('template_baru/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template_baru/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('template_baru/assets/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('template_baru/assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('template_baru/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('template_baru/assets/js/dashboard.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
                $("#images").on("change", function() {
                    let fileCount = this.files.length;
                    
                    if (fileCount > 10) {
                        Swal.fire("Warning!", "Maksimal 10 file yang bisa diupload!", "warning");
                        this.value = "";
                        fileCount = 0;
                    }
    
                    let fileCountText = fileCount > 0 ? `${fileCount} file(s) selected` : "No file selected";
                    $("#fileCount").text(fileCountText);
                });
    
                // Upload
                $("#uploadForm").on("submit", function(e) {
                    e.preventDefault();
    
                    let formData = new FormData(this);
    
                    Swal.fire({
                        title: "Are you sure?",
                        text: "Do you want to upload these files?",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#046392",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Upload"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: "{{ route('images.store') }}",
                                type: "POST",
                                data: formData,
                                processData: false,
                                contentType: false,
                                success: function(response) {
                                    Swal.fire({
                                        title: "Success!",
                                        text: "Your files have been uploaded.",
                                        icon: "success",
                                        confirmButtonText: "OK"
                                    }).then(() => {
                                        location.reload();
                                    });
    
                                    $("#uploadForm")[0].reset();
                                    $("#fileCount").text("No file selected");
                                },
                                error: function(xhr) {
                                    Swal.fire({
                                        title: "Error!",
                                        text: "Failed to upload files. Please try again.",
                                        icon: "error",
                                        confirmButtonText: "OK"
                                    });
                                }
                            });
                        }
                    });
                });
    
                // Delete
                $(".delete-image").on("click", function () {
                    let imageId = $(this).data("id");
                    let token = $('meta[name="csrf-token"]').attr("content");
    
                    Swal.fire({
                        title: "Are you sure?",
                        text: "Hapus file tersebut! hanya terhapus di database.",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#d33",
                        cancelButtonColor: "#3085d6",
                        confirmButtonText: "OK",
                        cancelButtonText: "Batal",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: "/images/" + imageId,
                                type: "DELETE",
                                data: {
                                    _token: token
                                },
                                success: function (response) {
                                    if (response.success) {
                                        $(".image-card-" + imageId).fadeOut("slow", function () {
                                            $(this).remove();
                                        });
                                        Swal.fire("Dihapus!", "Gambar berhasil dihapus.", "success").then(() => {
                                            location.reload();
                                        });
                                    } else {
                                        Swal.fire("Gagal!", "Gagal menghapus gambar.", "error");
                                    }
                                },
                                error: function () {
                                    Swal.fire("Error!", "Terjadi kesalahan saat menghapus.", "error");
                                },
                            });
                        }
                    });
                });
            });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- Grafik All --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.8.2/jspdf.plugin.autotable.min.js"></script>

    {{-- Chart --}}
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap4.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js"></script>
    <!-- Lity JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.js"></script>
</body>

</html>
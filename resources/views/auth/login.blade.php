<!DOCTYPE html>

<html lang="en" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login - LPK Amanah Citra Cemerlang</title>

    <meta name="description" content="" />

    <link rel="icon" type="image/png" href="{{ asset('templates/assets/img/logo.jpg') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('tamplate_login/assets/dasbor/assets/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('tamplate_login/assets/dasbor/assets/vendor/css/core.css') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('tamplate_login/assets/dasbor/assets/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('tamplate_login/assets/dasbor/assets/css/demo.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('tamplate_login/assets/dasbor/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('tamplate_login/assets/dasbor/assets/vendor/css/pages/page-auth.css') }}" />
    <script src="{{ asset('tamplate_login/assets/dasbor/assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('tamplate_login/assets/dasbor/assets/js/config.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('tamplate_login/assets/css/preloader.css') }}" />

</head>

<body>
    <div class="preloader-container">
        <div class="preloader">
        </div>
    </div>

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <div class="card">
                    <div class="card-body">
                        <center>
                            <img src="{{ asset('templates/assets/img/logo.jpg') }}" width="60px" hiight="100px" />
                            <br /> <br />
                            <h4 class="mb-2">LPK Amanah Citra Cemerlang👋</h4>
                            <p class="mb-4">Welcome to Login Page!</p>
                        </center>
                        <form class="mb-3" action="{{ route('actionlogin') }}" method="POST">
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    <b>Opps!</b> {{ session('error') }}
                                </div>
                            @endif
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label"> Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter your email" required />
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" name="password" for="password"
                                        placeholder="Enter your password" required>Password</label>
                                    <a href="#">
                                        <small>Forgot Password?</small>
                                    </a>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="Enter your password" aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn d-grid w-100" type="submit"
                                    style="background-color: #1E6C93;color: white;">Sign
                                    in</button>
                            </div>
                            <center>
                                <p>Halaman Utama ACC <a href="{{ url('/') }}">Klik Link</a></p>
                            </center>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('tamplate_login/assets/dasbor/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('tamplate_login/assets/dasbor/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('tamplate_login/assets/dasbor/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('tamplate_login/assets/dasbor/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}">
    </script>
    <script src="{{ asset('tamplate_login/assets/dasbor/assets/vendor/js/menu.js') }}"></script>

    <script src="{{ asset('tamplate_login/assets/dasbor/assets/js/main.js') }}"></script>


    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>

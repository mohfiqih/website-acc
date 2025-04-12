<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
    <link
        href="https://www.amanahcitracemerlang.id/storage/images/1738849208_WhatsApp_Image_2025-02-06_at_20.04.03-removebg-preview.png"
        rel="icon">
    <link rel="stylesheet" href="{{ asset('templates/buku_tamu/fonts/icomoon/style.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('templates/buku_tamu/css/bootstrap.min.css') }}">
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('templates/buku_tamu/css/style.css') }}">

    <title>Buku Tamu LPK ACC Japan Centre</title>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <h3 class="heading mb-2">Let's talk about everything!</h3>
                            <p>
                                Selamat datang di Buku Tamu LPK ACC Japan Centre
                            </p>
                            <p>
                                <img src="{{ asset('templates/buku_tamu/images/undraw-contact.svg') }}" alt="Image"
                                    class="img-fluid" width="300">
                            </p>
                        </div>
                        <div class="col-md-6">
                            <form class="mb-5" method="post" id="contactForm" name="contactForm">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Nama Lengkap">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" name="alamat" id="alamat"
                                            placeholder="Alamat">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" name="whatsapp" id="whatsapp"
                                            placeholder="No WhatsApp">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="submit" value="Send Message"
                                            class="btn btn-primary rounded-0 py-2 px-4">
                                        <span class="submitting"></span>
                                    </div>
                                </div>
                            </form>

                            <div id="form-message-warning mt-4"></div>
                            <div id="form-message-success">
                                Data was sent, thank you!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('templates/buku_tamu/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('templates/buku_tamu/js/popper.min.js') }}"></script>
    <script src="{{ asset('templates/buku_tamu/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('templates/buku_tamu/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('templates/buku_tamu/js/main.j') }}s"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>LPK Amanah Citra Cemerlang</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link
        href="https://www.amanahcitracemerlang.id/storage/images/1738849208_WhatsApp_Image_2025-02-06_at_20.04.03-removebg-preview.png"
        rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link href="{{ asset('templates/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/assets/css/main.css?v=1.0') }}" rel="stylesheet">
    <link href="{{ asset('templates/assets/css/floating.css?v=1.0') }}" rel="stylesheet">
    <link href="{{ asset('template_pendaftaran/css/profile.css?v=1.0') }}" rel="stylesheet">
    <!-- Lity CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.css">
    <style>
        :root {
            --landing-primary: #046392;
            --landing-primary-soft: #1e6c93;
            --landing-accent: #f85a40;
            --landing-ink: #163247;
            --landing-muted: #607586;
            --landing-surface: #ffffff;
            --landing-soft: #f3f8fb;
            --landing-shadow: 0 18px 45px rgba(4, 99, 146, 0.12);
        }

        body {
            font-size: 14px;
            background: var(--landing-soft);
            color: var(--landing-ink);
        }

        .landing-page section {
            padding: 68px 0;
        }

        .landing-page .hero {
            padding: 78px 0 92px;
            background: linear-gradient(135deg, var(--landing-primary) 0%, var(--landing-primary-soft) 68%, #2d7ea7 100%);
        }

        .landing-page .hero .container {
            z-index: 1;
        }

        .landing-page .hero h2 {
            font-size: clamp(2rem, 3.4vw, 3.2rem);
            line-height: 1.12;
            letter-spacing: -0.02em;
            margin-bottom: 18px;
        }

        .landing-page .hero p {
            color: rgba(255, 255, 255, 0.78);
            line-height: 1.8;
        }

        .landing-page .hero>.container>.row {
            align-items: center;
        }

        .landing-page .topbar {
            background: #03577f;
        }

        .landing-page .header {
            height: 78px;
            padding: 0 10px !important;
            box-shadow: 0 8px 24px rgba(0, 42, 68, 0.12);
        }

        .landing-page .header .logo h1 {
            font-size: clamp(0.9rem, 1.7vw, 1.2rem);
            line-height: 1.2;
        }

        .landing-page .header .logo img {
            max-height: 44px;
        }

        .landing-page .carousel {
            overflow: hidden;
            border-radius: 24px;
            box-shadow: 0 24px 55px rgba(0, 30, 50, 0.24);
            background: #0f4e70;
        }

        .landing-page .carousel-item img,
        .landing-page .carousel-item video {
            aspect-ratio: 4 / 3;
            object-fit: cover;
        }

        .landing-page .carousel-indicators [data-bs-target] {
            width: 24px;
            height: 4px;
            border: 0;
            border-radius: 99px;
        }

        .landing-page .hero .btn-get-started {
            background: var(--landing-accent);
            border: 0;
            box-shadow: 0 10px 22px rgba(248, 90, 64, 0.24);
            margin: 4px 8px 0 0;
        }

        .landing-page .hero .btn-get-started:hover {
            background: #e94d35;
            transform: translateY(-2px);
        }

        .landing-page .announcement {
            display: flex;
            gap: 12px;
            align-items: flex-start;
            margin: 24px 0 22px;
            padding: 15px 18px;
            border: 1px solid rgba(255, 193, 7, 0.45);
            border-radius: 14px;
            background: rgba(255, 193, 7, 0.13);
            color: #fff;
            line-height: 1.65;
        }

        .landing-page .announcement i {
            color: #ffc107;
            font-size: 1.2rem;
            flex: 0 0 auto;
        }

        .landing-page .announcement strong {
            color: #ffd56a;
        }

        .landing-page .announcement .btn-close {
            filter: invert(1);
            margin-left: auto;
            flex: 0 0 auto;
        }

        .landing-page .hero .icon-boxes {
            padding-top: 52px;
            padding-bottom: 0;
        }

        .landing-page .hero .icon-boxes:before {
            display: none;
        }

        .landing-page .hero .icon-box {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 82px;
            padding: 18px;
            border: 1px solid rgba(255, 255, 255, 0.16);
            border-radius: 16px;
            background: rgba(255, 255, 255, 0.12);
            box-shadow: none;
            backdrop-filter: blur(8px);
        }

        .landing-page .hero .icon-box .title {
            margin: 0;
            font-size: 15px;
        }

        .landing-page .hero .icon-box:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-4px);
        }

        .landing-page .panel,
        .landing-page .card,
        .landing-page .service-item,
        .landing-page .info-container {
            border: 0;
            border-radius: 18px;
            box-shadow: var(--landing-shadow);
        }

        .landing-page .about,
        .landing-page .testimonials,
        .landing-page .contact,
        .landing-page #reviews {
            background: var(--landing-soft);
        }

        .landing-page .bio-graph-heading {
            border-radius: 18px 18px 0 0;
            background: var(--landing-primary);
        }

        .landing-page .section-header h2 {
            color: var(--landing-ink);
            font-size: clamp(1.8rem, 3vw, 2.35rem);
            letter-spacing: -0.02em;
        }

        .landing-page .table th {
            color: var(--landing-ink);
            white-space: nowrap;
        }

        .landing-page .table td,
        .landing-page .table th {
            padding-top: 10px;
            padding-bottom: 10px;
            vertical-align: top;
        }

        .landing-page .testimonials .card {
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .landing-page .testimonials .card:hover,
        .landing-page .service-item:hover {
            transform: translateY(-6px);
            box-shadow: 0 22px 48px rgba(4, 99, 146, 0.18);
        }

        .landing-page .services .service-item {
            padding: 20px;
        }

        .landing-page .services .service-item img {
            width: 100%;
            aspect-ratio: 16 / 9;
            object-fit: cover;
        }

        .landing-page .stats-counter,
        .landing-page .call-to-action {
            background: linear-gradient(135deg, #eaf4f8 0%, #ffffff 100%);
        }

        .landing-page .stats-counter img {
            max-height: 220px;
            object-fit: contain;
        }

        @media (max-width: 767px) {
            .landing-page section {
                padding: 46px 0;
            }

            .landing-page .hero {
                padding: 42px 0 60px;
            }

            .landing-page .header .logo h1 {
                max-width: 190px;
                font-size: 0.86rem;
            }

            .landing-page .header .logo img {
                max-height: 36px;
            }

            .landing-page .hero .row {
                gap: 28px;
            }

            .landing-page .hero .icon-boxes {
                padding-top: 30px;
            }

            .landing-page .hero .icon-box {
                min-height: 64px;
            }

            .landing-page .announcement {
                font-size: 12px;
            }
        }

        .pagination-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            padding: 10px 15px;
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

        /* Light visual direction for the landing page. */
        .landing-page {
            background: #fff;
        }

        .landing-page #main {
            padding: 0 !important;
            background: #fff;
        }

        .landing-page .topbar {
            background: #fff;
            border-bottom: 1px solid #e8f0f5;
            color: var(--landing-ink);
        }

        .landing-page .topbar .contact-info i a,
        .landing-page .topbar .contact-info i span,
        .landing-page .topbar .social-links a {
            color: var(--landing-ink);
        }

        .landing-page .topbar .social-links a:hover {
            color: var(--landing-primary);
        }

        .landing-page .header {
            background: #fff;
            border-bottom: 1px solid #edf3f7;
            box-shadow: 0 8px 25px rgba(4, 99, 146, 0.07);
        }

        .landing-page .header .logo h1 {
            color: var(--landing-primary);
        }

        .landing-page .navbar a,
        .landing-page .navbar a:focus {
            color: var(--landing-ink);
        }

        .landing-page .navbar a:hover,
        .landing-page .navbar .active,
        .landing-page .navbar .active:focus,
        .landing-page .navbar li:hover>a {
            color: var(--landing-primary);
        }

        .landing-page .mobile-nav-show {
            color: var(--landing-primary);
        }

        .landing-page .hero {
            isolation: isolate;
            overflow: hidden;
            padding: 88px 0 100px;
            background: #fff;
        }

        .landing-page .hero::before,
        .landing-page .hero::after {
            content: "";
            position: absolute;
            z-index: -1;
            border: 2px solid rgba(4, 99, 146, 0.1);
            border-radius: 50%;
            pointer-events: none;
        }

        .landing-page .hero::before {
            width: 410px;
            height: 410px;
            top: -190px;
            right: -120px;
        }

        .landing-page .hero::after {
            width: 270px;
            height: 270px;
            bottom: 110px;
            left: -160px;
            background: rgba(4, 99, 146, 0.035);
        }

        .landing-page .hero h2 {
            color: var(--landing-ink);
        }

        .landing-page .hero p {
            color: var(--landing-muted);
        }

        .landing-page .hero .carousel {
            border: 8px solid #fff;
            outline: 1px solid #dcebf3;
            box-shadow: 0 22px 55px rgba(4, 99, 146, 0.16);
        }

        .landing-page .hero .btn-get-started {
            background: var(--landing-primary);
            color: #fff;
            box-shadow: 0 10px 22px rgba(4, 99, 146, 0.2);
        }

        .landing-page .hero .btn-get-started:hover {
            background: var(--landing-primary-soft);
        }

        .landing-page .announcement {
            border-color: #cfe3ee;
            background: #f3f9fc;
            color: var(--landing-ink);
        }

        .landing-page .announcement i,
        .landing-page .announcement strong {
            color: var(--landing-primary);
        }

        .landing-page .announcement .btn-close {
            filter: none;
        }

        .landing-page .hero .icon-boxes {
            position: relative;
        }

        .landing-page .hero .icon-box {
            background: #fff;
            border: 1px solid #d7e9f2;
            box-shadow: 0 12px 30px rgba(4, 99, 146, 0.08);
        }

        .landing-page .hero .icon-box .title a {
            color: var(--landing-primary);
        }

        .landing-page .hero .icon-box:hover {
            background: #f5fbfe;
            border-color: var(--landing-primary);
        }

        .landing-page .about,
        .landing-page .testimonials,
        .landing-page .contact,
        .landing-page #reviews,
        .landing-page .sections-bg {
            background: #fff;
        }

        .landing-page .about::before,
        .landing-page .services::before,
        .landing-page .testimonials::before {
            content: "";
            display: block;
            width: 56px;
            height: 4px;
            margin: 0 auto 28px;
            border-radius: 99px;
            background: var(--landing-primary);
            opacity: 0.2;
        }

        .landing-page .section-header h2 {
            color: var(--landing-ink);
        }

        .landing-page .card,
        .landing-page .panel,
        .landing-page .service-item,
        .landing-page .info-container {
            background: #fff;
            border: 1px solid #e1edf3;
            box-shadow: 0 14px 34px rgba(4, 99, 146, 0.07);
        }

        .landing-page .bio-graph-heading {
            background: var(--landing-primary);
        }

        .landing-page .stats-counter,
        .landing-page .call-to-action {
            background: #fff;
        }

        .landing-page .call-to-action {
            position: relative;
            border-top: 1px solid #e2eef4;
            border-bottom: 1px solid #e2eef4;
        }

        .landing-page .footer.modern-footer {
            position: relative;
            overflow: hidden;
            background: #fff;
            color: #1b2b36;
            border-top: 1px solid #dcebf3;
            padding-top: 64px;
        }

        .landing-page .footer.modern-footer::before {
            content: "";
            position: absolute;
            width: 280px;
            height: 280px;
            top: -180px;
            right: 8%;
            border: 24px solid rgba(4, 99, 146, 0.05);
            border-radius: 50%;
        }

        .landing-page .footer.modern-footer .footer-info .logo span,
        .landing-page .footer.modern-footer h4 {
            color: var(--landing-primary);
        }

        .landing-page .footer.modern-footer .footer-info p,
        .landing-page .footer.modern-footer .footer-links ul a,
        .landing-page .footer.modern-footer .credits,
        .landing-page .footer.modern-footer .copyright {
            color: #53636d;
        }

        .landing-page .footer.modern-footer .footer-links ul a:hover,
        .landing-page .footer.modern-footer .credits a {
            color: var(--landing-primary);
        }

        .landing-page .footer.modern-footer .copyright {
            border-top: 1px solid #e3edf2;
            padding-top: 18px;
        }

        @media (max-width: 1279px) {
            .landing-page .navbar ul {
                background: #fff;
                border-left: 1px solid #dcebf3;
            }

            .landing-page .navbar a,
            .landing-page .navbar a:focus {
                color: var(--landing-ink);
            }

            .landing-page .navbar .dropdown ul,
            .landing-page .navbar .dropdown .dropdown ul {
                background: #f4f9fb;
                border-color: #dcebf3;
            }

            .landing-page .mobile-nav-hide {
                color: var(--landing-primary);
            }
        }

        @media (max-width: 767px) {
            .landing-page .hero {
                padding: 54px 0 70px;
            }

            .landing-page .hero::before {
                width: 260px;
                height: 260px;
                right: -140px;
            }
        }

        /* Modern landing layout */
        .landing-page .topbar {
            height: 10px;
            font-size: 11px;
        }

        .landing-page .topbar .social-links a {
            margin-left: 14px;
        }

        .landing-page .header {
            height: 68px;
        }

        .landing-page .header .logo h1 {
            display: flex;
            align-items: center;
            gap: 7px;
            font-size: 16px;
            letter-spacing: 0.3px;
        }

        .landing-page .header .logo img {
            max-height: 34px;
            margin-right: 0;
        }

        .landing-page section {
            position: relative;
            padding: 86px 0;
        }

        .landing-page .hero {
            padding: 96px 0 80px;
        }

        .landing-page .hero>.container>.row {
            min-height: 470px;
        }

        .landing-page .hero .col-lg-6:last-child {
            max-width: 560px;
        }

        .landing-page .hero h2 {
            max-width: 620px;
            font-size: clamp(2.3rem, 4.2vw, 4.2rem);
            line-height: 1.04;
        }

        .landing-page .hero .hero-title {
            max-width: 480px;
            margin-bottom: 8px;
            font-size: clamp(2rem, 3.1vw, 3rem);
            line-height: 1.08;
        }

        .landing-page .hero .hero-subtitle {
            margin-bottom: 16px;
            color: var(--landing-primary);
            font-family: var(--font-primary);
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .landing-page .hero .hero-description {
            max-width: 500px;
            margin-bottom: 16px;
            text-align: justify;
            line-height: 1.65;
        }

        .landing-page .hero h2::after {
            content: "";
            display: block;
            width: 58px;
            height: 5px;
            margin-top: 22px;
            border-radius: 99px;
            background: var(--landing-primary);
        }

        .landing-page .hero .carousel {
            transform: rotate(-1.5deg);
            transition: transform 0.35s ease;
        }

        .landing-page .hero .carousel:hover {
            transform: rotate(0deg) translateY(-4px);
        }

        .landing-page .hero .icon-boxes {
            padding-top: 28px;
        }

        .landing-page .hero .icon-boxes .row {
            margin-left: -8px;
            margin-right: -8px;
        }

        .landing-page .hero .icon-boxes .col-xl-4 {
            padding-left: 8px;
            padding-right: 8px;
        }

        .landing-page .hero .icon-box {
            min-height: 74px;
            justify-content: flex-start;
            padding: 16px 20px;
        }

        .landing-page .hero .icon-box .title {
            text-align: left;
        }

        .landing-page .panel {
            overflow: hidden;
        }

        .landing-page .panel>.card {
            border: 0;
            box-shadow: none;
        }

        .landing-page .bio-graph-heading {
            padding: 22px 30px;
        }

        .landing-page .bio-graph-heading p {
            margin: 0;
            font-size: 15px;
            letter-spacing: 0.04em;
        }

        .landing-page .about .table-responsive {
            scrollbar-width: thin;
        }

        .landing-page .about .table th {
            min-width: 120px;
            font-size: 12px;
            color: var(--landing-muted);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .landing-page .about .table td {
            font-size: 14px;
            color: var(--landing-ink);
        }

        .landing-page #story {
            background: #f7fbfd;
        }

        .landing-page #story .row {
            align-items: center;
        }

        .landing-page .story-highlight {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 26px;
            padding: 18px 20px;
            border-left: 4px solid var(--landing-primary);
            border-radius: 0 12px 12px 0;
            background: #fff;
            color: var(--landing-primary);
            font-family: var(--font-primary);
            font-size: 17px;
            font-weight: 600;
            box-shadow: 0 12px 28px rgba(4, 99, 146, 0.07);
        }

        .landing-page .story-highlight i {
            font-size: 26px;
        }

        .landing-page #story .card {
            height: 100%;
        }

        .landing-page #story .card-body {
            padding: 28px;
        }

        .landing-page #story .card ul {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 10px 14px;
            padding-left: 0;
            list-style: none;
        }

        .landing-page #story .card li {
            color: var(--landing-ink);
            font-size: 13px;
        }

        .landing-page #story .card li i {
            margin-right: 6px;
            color: var(--landing-primary);
        }

        .landing-page #story img,
        .landing-page #galeri img,
        .landing-page #services img {
            display: block;
            width: 100%;
            object-fit: cover;
        }

        .landing-page #story .position-relative img {
            max-height: 270px;
        }

        .landing-page #galeri .row {
            row-gap: 22px;
        }

        .landing-page #galeri .col-12 {
            margin-bottom: 0 !important;
        }

        .landing-page #galeri .card {
            height: 100%;
        }

        .landing-page #galeri .card-footer {
            border-top: 1px solid #edf3f6;
            background: #fff;
            font-size: 11px;
        }

        .landing-page #stats-counter .row {
            padding: 34px;
            border: 1px solid #e2edf3;
            border-radius: 24px;
            background: #fff;
            box-shadow: 0 16px 38px rgba(4, 99, 146, 0.07);
        }

        .landing-page #stats-counter .stats-item {
            padding: 10px 0;
        }

        .landing-page #stats-counter .stats-item span {
            min-width: 76px;
            color: var(--landing-primary);
            font-size: 34px;
            font-weight: 700;
        }

        .landing-page #services .row {
            align-items: stretch;
        }

        .landing-page #services .service-item {
            display: flex;
            flex-direction: column;
            padding: 22px;
        }

        .landing-page #services .service-item h3 {
            margin-top: 4px;
            font-size: 21px;
        }

        .landing-page #services .service-item p {
            margin-top: auto;
            padding-top: 10px;
        }

        .landing-page .contact iframe {
            display: block;
            border-radius: 18px !important;
            box-shadow: 0 14px 32px rgba(4, 99, 146, 0.1);
        }

        .landing-page #reviews,
        .landing-page #review {
            content-visibility: auto;
            contain-intrinsic-size: 420px;
        }

        @media (max-width: 767px) {
            .landing-page .topbar .contact-info a {
                font-size: 10px;
            }

            .landing-page .header .logo h1 {
                max-width: 210px;
                font-size: 13px;
            }

            .landing-page .hero {
                padding: 62px 0 68px;
            }

            .landing-page .hero>.container>.row {
                min-height: 0;
            }

            .landing-page .hero .carousel {
                transform: none;
            }

            .landing-page section {
                padding: 58px 0;
            }

            .landing-page #story .card ul {
                grid-template-columns: 1fr;
            }

            .landing-page #stats-counter .row {
                padding: 20px 16px;
            }
        }

        /* Compact header and denser mobile rhythm. */
        .landing-page .topbar {
            height: 10px;
            min-height: 10px;
            overflow: hidden;
        }

        .landing-page .topbar>.container {
            max-width: 1180px;
            min-height: 10px;
        }

        .landing-page .topbar .contact-info {
            min-width: 0;
            overflow: hidden;
        }

        .landing-page .topbar .contact-info i {
            font-size: 10px;
        }

        .landing-page .topbar .contact-info a {
            display: block;
            max-width: min(100%, 320px);
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .landing-page .topbar .social-links a {
            font-size: 11px;
            margin-left: 10px;
        }

        @media (max-width: 767px) {
            .landing-page .topbar>.container {
                justify-content: flex-start !important;
                padding-left: 16px;
                padding-right: 16px;
            }

            .landing-page .topbar .contact-info a {
                max-width: 235px;
                font-size: 9px;
            }

            .landing-page .header {
                height: 60px;
            }

            .landing-page .header .logo h1 {
                max-width: 200px;
                gap: 5px;
                font-size: 12px;
            }

            .landing-page .header .logo img {
                max-height: 30px;
            }

            .landing-page section {
                padding: 38px 0;
            }

            .landing-page .hero {
                padding: 34px 0 42px;
            }

            .landing-page .hero>.container>.row {
                gap: 16px;
            }

            .landing-page .hero h2 {
                margin-bottom: 12px;
                font-size: clamp(2rem, 10vw, 2.7rem);
            }

            .landing-page .hero .hero-title {
                margin-bottom: 6px;
                font-size: clamp(1.9rem, 9vw, 2.5rem);
            }

            .landing-page .hero .hero-subtitle {
                margin-bottom: 10px;
                font-size: 10px;
            }

            .landing-page .hero .hero-description {
                text-align: center;
                line-height: 1.5;
            }

            .landing-page .hero h2::after {
                width: 42px;
                height: 4px;
                margin-top: 14px;
            }

            .landing-page .hero p {
                margin-bottom: 10px;
                line-height: 1.55;
            }

            .landing-page .hero .carousel {
                border-width: 5px;
                border-radius: 18px;
            }

            .landing-page .hero .icon-boxes {
                padding-top: 18px;
            }

            .landing-page .hero .icon-boxes .row {
                row-gap: 10px;
            }

            .landing-page .hero .icon-box {
                min-height: 54px;
                padding: 10px 14px;
                border-radius: 12px;
            }

            .landing-page .hero .icon-box .title {
                font-size: 12px;
            }

            .landing-page .announcement {
                gap: 8px;
                margin: 14px 0;
                padding: 11px 12px;
                font-size: 11px;
                line-height: 1.45;
            }

            .landing-page .hero .d-flex.justify-content-center {
                gap: 6px;
            }

            .landing-page .hero .btn-get-started {
                min-height: 42px;
                padding: 10px 12px;
                margin-right: 0;
                font-size: 12px;
                letter-spacing: 0;
            }

            .landing-page .bio-graph-heading {
                padding: 16px 18px;
            }

            .landing-page .bio-graph-heading p {
                font-size: 12px;
                line-height: 1.4;
            }

            .landing-page .about .card {
                padding: 16px !important;
                border-radius: 14px;
            }

            .landing-page .about .table {
                margin-bottom: 0;
            }

            .landing-page .about .table th {
                min-width: 82px;
                font-size: 10px;
            }

            .landing-page .about .table td {
                font-size: 12px;
                line-height: 1.45;
            }

            .landing-page #story .story-highlight {
                margin-bottom: 16px;
                padding: 12px 14px;
                font-size: 14px;
            }

            .landing-page #story .card-body {
                padding: 18px;
            }

            .landing-page #story .card ul {
                gap: 7px;
                margin-bottom: 0;
            }

            .landing-page #story .position-relative img {
                max-height: 210px;
            }

            .landing-page .section-header h2 {
                margin-bottom: 14px;
                padding-bottom: 14px;
                font-size: 24px;
            }

            .landing-page #stats-counter .row {
                row-gap: 12px;
            }

            .landing-page #stats-counter .stats-item {
                padding: 5px 0;
            }

            .landing-page #stats-counter .stats-item span {
                min-width: 64px;
                font-size: 26px;
            }

            .landing-page #stats-counter .stats-item p {
                margin-bottom: 0;
                font-size: 12px;
            }

            .landing-page #services .service-item {
                padding: 14px;
                border-radius: 14px;
            }

            .landing-page #services .service-item img {
                margin-bottom: 12px !important;
            }

            .landing-page #services .service-item h3 {
                margin-bottom: 8px;
                font-size: 18px;
            }

            .landing-page #services .service-item p {
                font-size: 12px;
                line-height: 1.5;
            }

            .landing-page .contact h5 {
                font-size: 15px;
            }

            .landing-page .contact iframe {
                height: 250px !important;
            }

            .landing-page #reviews {
                padding-top: 30px !important;
                padding-bottom: 30px !important;
            }

            .landing-page #review .info-container {
                padding: 18px 12px;
            }
        }

        @media (max-width: 767px) {
            .landing-page #about .bio-graph-heading {
                padding: 15px 17px;
            }

            .landing-page #about .bio-graph-heading p {
                font-size: 11px;
                line-height: 1.45;
                letter-spacing: 0.02em;
            }

            .landing-page #about .table-responsive {
                overflow: visible;
            }

            .landing-page #about .table,
            .landing-page #about .table tbody,
            .landing-page #about .table tr {
                display: block;
                width: 100%;
            }

            .landing-page #about .table tr {
                padding: 10px 0;
                border-bottom: 1px solid #edf3f6;
            }

            .landing-page #about .table tr:last-child {
                border-bottom: 0;
            }

            .landing-page #about .table th,
            .landing-page #about .table td {
                display: block;
                width: 100%;
                min-width: 0;
                padding: 0;
                text-align: left !important;
                overflow-wrap: anywhere;
                word-break: normal;
            }

            .landing-page #about .table th {
                margin-bottom: 3px;
                color: var(--landing-primary);
                font-size: 10px;
                line-height: 1.3;
            }

            .landing-page #about .table td {
                color: var(--landing-ink);
                font-size: 12px;
                line-height: 1.5;
            }

            .landing-page #about .table td:nth-child(2) {
                display: none;
            }

            .landing-page #about .table td iframe {
                max-width: 100%;
            }
        }

        @media (max-width: 767px) {

            .landing-page section,
            .landing-page #story,
            .landing-page .contact-section,
            .landing-page .reviews-section {
                padding-top: 26px;
                padding-bottom: 26px;
            }

            .landing-page .hero {
                padding-top: 30px;
                padding-bottom: 32px;
            }

            .landing-page .hero .hero-description {
                max-width: 100%;
                margin-bottom: 12px;
                text-align: justify !important;
                line-height: 1.45;
            }

            .landing-page .hero .row,
            .landing-page .about .row,
            .landing-page #story .row,
            .landing-page #services .row,
            .landing-page .contact .row {
                row-gap: 14px;
            }

            .landing-page .section-header {
                margin-bottom: 14px;
            }

            .landing-page .section-header h2 {
                margin-bottom: 10px;
                padding-bottom: 10px;
            }

            .landing-page .about::before,
            .landing-page .services::before,
            .landing-page .testimonials::before {
                margin-bottom: 18px;
            }

            .landing-page .panel,
            .landing-page .card,
            .landing-page .service-item,
            .landing-page .info-container,
            .landing-page .contact-card {
                margin-bottom: 0;
            }

            .landing-page #story .story-highlight {
                margin-bottom: 12px;
            }

            .landing-page #story .position-relative {
                margin-top: 10px !important;
            }

            .landing-page #galeri .row {
                row-gap: 12px;
            }

            .landing-page #galeri .card-footer {
                padding: 8px 10px;
            }

            .landing-page #stats-counter .row {
                row-gap: 8px;
            }

            .landing-page #services .service-item {
                margin-bottom: 0;
            }

            .landing-page .contact h5 {
                margin-bottom: 10px;
            }
        }

        /* Desktop hero: calm, balanced, and fully visible without the tilt. */
        @media (min-width: 992px) {
            .landing-page .hero {
                padding: 56px 0 46px;
            }

            .landing-page .hero>.container>.row {
                min-height: 0;
                align-items: center;
            }

            .landing-page .hero .carousel {
                transform: none;
            }

            .landing-page .hero .carousel:hover {
                transform: translateY(-3px);
            }

            .landing-page .hero .col-lg-6:last-child {
                padding-left: 42px;
            }

            .landing-page .hero h2 {
                max-width: 560px;
                font-size: clamp(2.4rem, 3.4vw, 3.45rem);
            }

            .landing-page .hero .announcement {
                margin: 16px 0;
                padding: 12px 16px;
                font-size: 12px;
            }

            .landing-page .hero .icon-boxes {
                padding-top: 34px;
            }

            .landing-page .hero .icon-box {
                min-height: 66px;
                padding: 13px 16px;
            }

            .landing-page .hero .icon-box .title {
                font-size: 13px;
            }
        }

        @media (min-width: 992px) and (max-height: 850px) {
            .landing-page .hero {
                padding-top: 38px;
                padding-bottom: 32px;
            }

            .landing-page .hero h2 {
                font-size: 2.7rem;
                margin-bottom: 12px;
            }

            .landing-page .hero p {
                line-height: 1.5;
                margin-bottom: 10px;
            }

            .landing-page .hero .icon-boxes {
                padding-top: 22px;
            }
        }

        /* Keep the story card distinct from the supporting photo grid. */
        .landing-page section {
            padding-top: 52px;
            padding-bottom: 52px;
        }

        .landing-page #story {
            padding-top: 52px;
            padding-bottom: 52px;
        }

        .landing-page #story .content>.row {
            display: grid;
            grid-template-columns: 1fr;
            gap: 26px;
            margin-right: 0;
            margin-left: 0;
        }

        .landing-page #story .content>.row>.col-md-6 {
            width: 100%;
            padding-right: 0;
            padding-left: 0;
        }

        .landing-page #story .content>.row>.col-md-6:first-child {
            padding: 0;
        }

        .landing-page #story .content>.row>.col-md-6:first-child .card {
            border: 1px solid #dcebf3;
            box-shadow: 0 14px 32px rgba(4, 99, 146, 0.1);
        }

        .landing-page #story .content>.row>.col-md-6:nth-child(2) {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 14px;
        }

        .landing-page #story .content>.row>.col-md-6:nth-child(2) .position-relative {
            margin-top: 0 !important;
        }

        .landing-page #story .content>.row>.col-md-6:nth-child(2) img {
            height: 150px;
            max-height: none;
            border-radius: 12px !important;
        }

        @media (max-width: 767px) {

            .landing-page section,
            .landing-page #story {
                padding-top: 32px;
                padding-bottom: 32px;
            }

            .landing-page #story .content>.row {
                gap: 18px;
            }

            .landing-page #story .content>.row>.col-md-6:nth-child(2) {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 10px;
            }

            .landing-page #story .content>.row>.col-md-6:nth-child(2) img {
                height: 125px;
            }
        }

        .landing-page .reviews-section {
            padding-top: 48px;
            padding-bottom: 48px;
            background: #f7fbfd;
        }

        .landing-page .reviews-section .section-header p,
        .landing-page .contact-section .section-header p {
            max-width: 580px;
            margin: -4px auto 24px;
            color: var(--landing-muted);
        }

        .landing-page .reviews-panel {
            min-height: 180px;
            padding: 24px;
            border: 1px solid #dcebf3;
            border-radius: 20px;
            background: #fff;
            box-shadow: 0 14px 34px rgba(4, 99, 146, 0.08);
        }

        .landing-page .contact-section {
            padding-top: 54px;
            padding-bottom: 58px;
        }

        .landing-page .contact-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
            margin-top: 30px;
        }

        .landing-page .contact-card {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            min-height: 150px;
            padding: 22px;
            border: 1px solid #dcebf3;
            border-radius: 18px;
            background: #fff;
            color: var(--landing-ink);
            box-shadow: 0 12px 28px rgba(4, 99, 146, 0.07);
            transition: transform 0.25s ease, border-color 0.25s ease, box-shadow 0.25s ease;
        }

        .landing-page a.contact-card:hover {
            border-color: var(--landing-primary);
            color: var(--landing-ink);
            transform: translateY(-4px);
            box-shadow: 0 18px 34px rgba(4, 99, 146, 0.13);
        }

        .landing-page .contact-card-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex: 0 0 44px;
            width: 44px;
            height: 44px;
            border-radius: 14px;
            background: #eaf5fa;
            color: var(--landing-primary);
            font-size: 21px;
        }

        .landing-page .contact-card-content {
            display: flex;
            flex-direction: column;
            gap: 6px;
            min-width: 0;
        }

        .landing-page .contact-card-content small {
            color: var(--landing-primary);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        .landing-page .contact-card-content strong {
            color: var(--landing-ink);
            font-family: var(--font-primary);
            font-size: 17px;
            line-height: 1.35;
            overflow-wrap: anywhere;
        }

        .landing-page .contact-card-content>span {
            color: var(--landing-muted);
            font-size: 12px;
            line-height: 1.5;
        }

        .landing-page .contact-card-content>span i {
            color: var(--landing-primary);
        }

        @media (max-width: 767px) {
            .landing-page .reviews-section {
                padding-top: 34px;
                padding-bottom: 34px;
            }

            .landing-page .reviews-panel {
                padding: 14px;
                border-radius: 14px;
            }

            .landing-page .contact-section {
                padding-top: 38px;
                padding-bottom: 40px;
            }

            .landing-page .contact-grid {
                grid-template-columns: 1fr;
                gap: 10px;
                margin-top: 20px;
            }

            .landing-page .contact-card {
                min-height: 0;
                padding: 15px;
                gap: 12px;
                border-radius: 14px;
            }

            .landing-page .contact-card-icon {
                flex-basis: 38px;
                width: 38px;
                height: 38px;
                border-radius: 11px;
                font-size: 18px;
            }

            .landing-page .contact-card-content strong {
                font-size: 14px;
            }

            .landing-page .contact-card-content>span {
                font-size: 11px;
            }
        }
    </style>
</head>

<body class="landing-page">
    @include('landing.header')

    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in" style="">
                <div class="col-lg-6 order-2  d-flex flex-column justify-content-center text-center text-lg-start">
                    <div id="carouselExampleCaptions" class="carousel slide" style="width: 100%;">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner" style="border-radius: 20px;">
                            <div class="carousel-item active">
                                <video class="d-block w-100" id="video-background" autoplay muted loop
                                    preload="metadata" playsinline>
                                    <source src="{{ asset('bg-video.mp4') }}" type="video/mp4">
                                </video>
                                <div class="carousel-caption d-none d-md-block"></div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.amanahcitracemerlang.id/storage/images/1738420242_IMG-20250131-WA0006.jpg"
                                    class="d-block w-100" alt="Kegiatan LPK ACC Japan Centre" loading="lazy"
                                    decoding="async" data-lity>
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.amanahcitracemerlang.id/templates/assets/img/acc.jpg"
                                    class="d-block w-100" alt="Gedung LPK ACC Japan Centre" loading="lazy"
                                    decoding="async" data-lity>
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 justify-content-center" style="padding: 0px 30px 0 20px;">
                    <p class="justify-content-center;">
                        Welcome to LPK ACC JAPAN CENTRE 👋
                    </p>
                    <h2 class="hero-title">LPK ACC Japan Centre</h2>
                    <p class="hero-subtitle">Yayasan Amanah Citra Cemerlang</p>
                    <p class="justify-content-center;">
                        <i class="fa fa-map-pin" style="padding-right: 10px;"></i>
                        Kecamatan Adiwerna, Kabupaten Tegal,
                        Central Java
                    </p>
                    <p class="hero-description">LPK ACC Japan Centre menyediakan pelatihan bahasa, mental, dan
                        keterampilan kerja untuk mempersiapkan peserta mengikuti program kerja ke Jepang.
                    </p>
                    <div class="announcement" role="alert">
                        <i class="bi bi-megaphone-fill"></i>
                        <div><strong>Announcement:</strong> Yayasan Amanah Citra Cemerlang tidak membuka LPK di cabang
                            wilayah Kota Tegal dan sekitarnya. Mohon klarifikasi terlebih dahulu jika ada pihak yang
                            mengatasnamakan kami. Terima kasih.</div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>

                    <div class="d-flex justify-content-center justify-content-lg-start text-center">
                        <a href="{{ url('/pendaftaran-siswa-baru') }}" class="btn-get-started" style="width: 100%;">
                            <i class="bi bi-book"></i>
                            Daftar
                        </a>
                        <a href="#lokasi-acc" class="btn-get-started" style="width: 100%;"><i
                                class="bi bi-maps"></i> LOKASI
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="row gy-4 mt-2">
                    <div class="col-xl-4 col-md-12" style="border-color: azure">
                        <div class="icon-box">
                            <p class="title" style="margin-top: 10px;">
                                <a href="#" class="stretched-link"><i class="bi bi-book"
                                        style="padding-right: 10px;"></i>
                                    Program Magang
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12">
                        <div class="icon-box">
                            <p class="title" style="margin-top: 10px;">
                                <a href="#" class="stretched-link"><i class="bi bi-book"
                                        style="padding-right: 10px;"></i>
                                    Program Tokutei Ginou
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12">
                        <div class="icon-box">
                            <p class="title" style="margin-top: 10px;">
                                <a href="#" class="stretched-link"><i class="bi bi-book"
                                        style="padding-right: 10px;"></i>
                                    Program Matching Job</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main id="main" style="padding: 10px;">
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="bio-graph-heading">
                            <p style="font-weight: bold;">Profil LPK ACC JAPAN CENTRE (YAYASAN AMANAH CITRA CEMERLANG)
                            </p>
                        </div>
                        <div class="card" style="padding: 30px;">
                            <div class="panel-body bio-graph-info">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <th>Nama Lembaga</th>
                                                        <td>:</td>
                                                        <td>LPK ACC JAPAN CENTRE</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nama Pimpinan</th>
                                                        <td>:</td>
                                                        <td>A. FAUZAN AMRULLOH</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nomor VIN</th>
                                                        <td>:</td>
                                                        <td>2502332801</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tipe Lembaga</th>
                                                        <td>:</td>
                                                        <td>LPK SWASTA</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Kondisi</th>
                                                        <td>:</td>
                                                        <td>Beroprasi</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tahun Berdiri</th>
                                                        <td>:</td>
                                                        <td>2021</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Luas Area</th>
                                                        <td>:</td>
                                                        <td>1042</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Telepon</th>
                                                        <td>:</td>
                                                        <td>085526223070</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nomor Fax.</th>
                                                        <td>:</td>
                                                        <td>085640110822</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email</th>
                                                        <td>:</td>
                                                        <td>amanahcitracemerlang1@gmail.com</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Website</th>
                                                        <td>:</td>
                                                        <td>www.amanahcitracemerlang.id</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Kode Pos</th>
                                                        <td>:</td>
                                                        <td>52194</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Alamat</th>
                                                        <td>:</td>
                                                        <td>LPK ACC Japan Center, Unnamed Road, Gitung, Harjosari Lor,
                                                            Kec. Adiwerna, Kabupaten Tegal, Jawa Tengah 52194</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Latitude</th>
                                                        <td>:</td>
                                                        <td>-6.9472685</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Longitude</th>
                                                        <td>:</td>
                                                        <td>109.1131374</td>
                                                    </tr>
                                                    <tr>
                                                        <th>NIB</th>
                                                        <td>:</td>
                                                        <td>1280001492217</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <th>Deskripsi</th>
                                                        <td>:</td>
                                                        <td style="text-align: justify;">LPK ACC JAPAN CENTRE merupakan
                                                            suatu lembaga pendidikan dan pelatihan bahasa wilayah Jawa
                                                            Tengah, khususnya Kabupaten/Kota Tegal yang independen
                                                            berdasarkan Akte Notaris No.19 Tanggal 19 April 2021.
                                                            Program LPK ACC Japan Centre yaitu Pelatihan Bahasa Jepang,
                                                            Pelatihan Mental dan Fisik, Program Magang dan TG (Tokutei
                                                            Ginou) ke Jepang, dan Pelatihan kerja sesuai Job.
                                                            Kami membantu anda menentukan sebuah pilihan, banyak dari
                                                            kita yang ingin bekerja ke Luar Negeri tetapi tidak tau mau
                                                            kemana/tujuannya tidak jelas, sehingga beberapa di antara
                                                            kita asal pilih LPKPT/Meaning Agency dan ujung-ujungnya
                                                            pekerjaan atau tujuan tidak sesuai dengan apa yang kita
                                                            harapkan, di LPK kami dalam meningkatkan kualitas dan
                                                            kuantitas CPMI dengan melalui edukasi masyarakat yang ingin
                                                            bekerja di Luar Negeri dan banyak diantaranya yang telah
                                                            kami tolong serta kami bantu karena sebelumnya salah atau
                                                            kurang tepat memilih tujuan Negara dimana dia mau bekerja
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Maps</th>
                                                        <td>:</td>
                                                        <td style="text-align: justify;">
                                                            <div class="row gx-lg-0 gy-4">
                                                                <div class="col-lg-12">
                                                                    <iframe class="mb-4 mb-lg-0" loading="lazy"
                                                                        title="Lokasi LPK ACC Japan Centre"
                                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.524644510538!2d109.1131374!3d-6.9472685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb913ec72ac99%3A0x15c1e344784a1ea2!2sACC%20Japan%20Centre!5e0!3m2!1sid!2sid!4v1707996435480!5m2!1sid!2sid"
                                                                        frameborder="0"
                                                                        style="border:0; width: 100%; height: 384px;"
                                                                        allowfullscreen></iframe>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="story" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="story-highlight" role="note">
                            <i class="bi bi-quote"></i>
                            <span>Bahasa adalah jendela untuk melihat dunia lebih luas.</span>
                        </div>
                        <p style="text-align: justify;padding-right: 10px;"><b>Visi</b><br />Terwujudnya lembaga
                            pelatihan yang
                            kompetitif
                            dan berkualitas dalam usaha, membangun generasi muda yang lebih produktif, kompetitif dan
                            berkualitas di kancah internasional.</p>
                        <p style="text-align: justify;padding-right: 10px;"><b>Misi</b><br />
                            Meningkatkan kualitas dan produktifitas dengan
                            mengembangkan sumber daya manusia (SDM) pelatihan, program dan
                            manajemen pelatihan, melaksanakan program pelatihan dan
                            memperluas jejaring dengan lembaga/instansi lain yang korelasinya
                            ikut mendukung program pemerintah dalam rangka mengurangi
                            pengangguran dan meningkatkan strata ekonomi masyarakat
                            nasional.
                        </p>
                        <div class="position-relative mt-4">
                            <img src="{{ asset('templates/assets/img/acc.jpg') }}" class="img-fluid rounded-4"
                                alt="Gedung LPK ACC Japan Centre" loading="lazy" decoding="async" data-lity>
                            <a href="{{ url('/galeri') }}" class="play-btn"></a>
                        </div>

                        <div class="position-relative mt-4">
                            <img src="https://lh3.googleusercontent.com/p/AF1QipPBj7J-RI4unahwIDe4sRie09PYD2lKpjSRvM8C=s1360-w1360-h1020"
                                class="img-fluid rounded-4" alt="Aktivitas LPK ACC Japan Centre" loading="lazy"
                                decoding="async" data-lity>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative mt-2">
                            <img src="https://www.amanahcitracemerlang.id/storage/images/1738848428_WhatsApp%20Image%202025-02-06%20at%2020.26.16.jpeg"
                                class="img-fluid rounded-4 mb-4" alt="Kegiatan pelatihan LPK ACC" loading="lazy"
                                decoding="async" data-lity>
                        </div>
                        <div class="content ps-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <p style="text-align: justify;">
                                                LPK ACC telah membimbing dan membina banyak anak hingga berangkat
                                                bekerja di Luar Negeri khususnya Negara Jepang. LPK ACC Japan Centre
                                                memiliki program diantaranya Program Magang, Program Tokutei Ginou (TG)
                                                dan Matching Job. ACC Japan Centre memiliki banyak Job dari berbagai
                                                sektor kerja di Jepang.<br /><br />
                                                <b>Prosedur LPK ACC Japan Centre</b>
                                            </p>
                                            <ul>
                                                <li><i class="bi bi-check-circle-fill"></i> Pendaftaran</li>
                                                <li><i class="bi bi-check-circle-fill"></i> Pendidikan dan Pelatihan
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> Pengambilan Job</li>
                                                <li><i class="bi bi-check-circle-fill"></i> Interview Job</li>
                                                <li><i class="bi bi-check-circle-fill"></i> Kontrak Turun</li>
                                                <li><i class="bi bi-check-circle-fill"></i> Pemantapan</li>
                                                <li><i class="bi bi-check-circle-fill"></i> Pengurusan Visa & COE</li>
                                                <li><i class="bi bi-check-circle-fill"></i> Medical Checkup (MCU) Full
                                                </li>
                                                <li><i class="bi bi-check-circle-fill"></i> Penerbangan</li>
                                                <li><i class="bi bi-check-circle-fill"></i> Bekerja di Jepang</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative mt-2">
                                        <img src="https://www.amanahcitracemerlang.id/storage/images/1738420242_IMG-20250131-WA0006.jpg"
                                            class="img-fluid rounded-4" alt="Kegiatan peserta LPK ACC" loading="lazy"
                                            decoding="async" data-lity>
                                    </div>
                                    <div class="position-relative mt-2">
                                        <img src="https://www.amanahcitracemerlang.id/storage/images/1727241978_Screenshot_2024-09-10-09-08-08-217_com.whatsapp-edit.jpg"
                                            class="img-fluid rounded-4 mb-4" alt="Program kerja Jepang"
                                            loading="lazy" decoding="async" data-lity>
                                    </div>
                                    <div class="position-relative mt-2">
                                        <img src="https://www.amanahcitracemerlang.id/storage/images/1726219639_Screenshot_2024-09-11-16-41-34-961_com.whatsapp-edit.jpg"
                                            class="img-fluid rounded-4 mb-4" alt="Pelatihan bahasa Jepang"
                                            loading="lazy" decoding="async" data-lity>
                                    </div>
                                    <div class="position-relative mt-2">
                                        <img src="{{ asset('templates/assets/img/poster.jpg') }}"
                                            class="img-fluid rounded-4 mb-4" alt="Poster LPK ACC Japan Centre"
                                            loading="lazy" decoding="async" data-lity>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="testimonials" id="galeri">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Galeri LPK ACC Japan Centre</h2>
                </div>
                <div class="row" id="gallery-grid" data-gallery-endpoint="{{ route('gallery.data') }}">
                    @foreach ($images_db as $image)
                        <div class="col-12 col-sm-6 col-lg-3 mb-4">
                            <div class="card h-100">
                                <div class="card-body p-0">
                                    <img src="{{ asset('storage/' . $image->filepath) }}"
                                        class="card-img-top lazyload img-fluid" data-lity
                                        alt="Galeri LPK ACC Japan Centre" loading="lazy" decoding="async"
                                        style="width: 100%; aspect-ratio: 1 / 1; object-fit: cover; border-radius: 10px;">
                                </div>
                                <div class="card-footer text-body-secondary">
                                    <b>Date:</b> {{ $image->created_at }}<br />
                                    {{ \Carbon\Carbon::parse($image->created_at)->diffForHumans() }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Custom Pagination -->
                <div class="pagination-container" id="gallery-pagination" style="padding: 0px;">
                    <ul class="pagination">
                        @if ($images_db->onFirstPage())
                            <li class="disabled"><span>&lt;</span></li>
                        @else
                            <li><a class="text-white" style="background-color: #046392"
                                    href="{{ $images_db->previousPageUrl() }}#galeri" rel="prev">&lt;</a></li>
                        @endif

                        @foreach ($images_db->links()->elements[0] as $page => $url)
                            @if ($page == $images_db->currentPage())
                                <li class="active"><span>{{ $page }}</span></li>
                            @else
                                <li><a href="{{ $url }}#galeri">{{ $page }}</a></li>
                            @endif
                        @endforeach

                        @if ($images_db->hasMorePages())
                            <li><a class="text-white" style="background-color: #046392"
                                    href="{{ $images_db->nextPageUrl() }}#galeri" rel="next">&gt;</a></li>
                        @else
                            <li class="disabled"><span>&gt;</span></li>
                        @endif
                    </ul>
                </div>
            </div>
        </section>

        <section id="stats-counter" class="stats-counter sections-bg">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-4">
                        <img src="https://www.amanahcitracemerlang.id/storage/images/1738848428_WhatsApp%20Image%202025-02-06%20at%2020.24.39.jpeg"
                            data-lity alt="Aktivitas peserta LPK ACC" loading="lazy" decoding="async"
                            class="img-fluid">
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('templates/assets/img/japan/logojepang.png') }}" alt="Logo Jepang"
                            class="img-fluid" loading="lazy" decoding="async" data-lity>
                    </div>
                    <div class="col-lg-4">
                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="10000"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>+ Happy Clients</strong> LPK Amanah Citra Cemerlang</p>
                        </div>

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="2500"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>+ Penerbangan</strong> LPK Amanah Citra Cemerlang</p>
                        </div>

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="1000"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>+ Student / Tahun</strong> LPK Amanah Citra Cemerlang</p>
                        </div>

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>+ Karyawan</strong> LPK Amanah Citra Cemerlang</p>
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <section id="call-to-action" class="call-to-action">
            <div class="container text-center" data-aos="zoom-out">
                <a href="https://www.youtube.com/watch?v=QAfLrOR26CY" class="glightbox play-btn"></a>
                <h3>YouTube ACC Asia Jaya</h3>
                <p> Kami membantu anda menentukan sebuah pilihan,
                    Banyak Dari kita yang Ingin ke Luar negri tetapi tidak tau mau kemana / Tujuan nya tidak jelas,
                    sehingga beberapa di antara Kita Asal pilih Lpk / PT / meaning Agentcy dan ujung2 nya pekerjaan atau
                    Tujuan Tidak sesuai dengan Apa yang kita Harapkan.</p>
                <a class="cta-btn" href="https://www.youtube.com/@AmanahCitraCemerlang/videos" target="_blank">
                    YouTube
                    Channel</a>
            </div>
        </section>

        <section id="services" class="services sections-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Program ACC Centre</h2>
                </div>

                <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-6 col-md-12">
                        <div class="service-item  position-relative">
                            <img src="https://www.amanahcitracemerlang.id/storage/images/1738774200_Screenshot_2025_0204_193622.jpg"
                                data-lity class="img-fluid rounded-4 mb-4" alt="Program Magang Jepang" loading="lazy"
                                decoding="async">
                            <h3>Program Magang</h3>
                            <p>
                                Program Magang adalah program pelatihan kerja untuk warga negara asing yang dikenal
                                dengan nama Kenshusei<br />
                                (Visa Magang,
                                Kontrak Kerja 1-3 Tahun,
                                Pendidikan 25 BAB,
                                Proses lebih cepat dibanding TG).
                            </p>
                            {{-- <a href="{{ url('/program-jepang') }}" class="readmore stretched-link">Read more <i
                                    class="bi bi-arrow-right"></i></a><br /> --}}
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="service-item position-relative">
                            <img src="https://www.amanahcitracemerlang.id/storage/images/1727241978_Screenshot_2024-09-10-09-07-58-609_com.whatsapp-edit.jpg"
                                class="img-fluid rounded-4 mb-4" alt="Program Tokutei Ginou Jepang" loading="lazy"
                                decoding="async" data-lity>
                            <h3>Program Tokutei Ginou (TG)</h3>
                            <p>
                                Tokutei Ginou (TG) adalah program kerja untuk warga negara asing yang memiliki keahlian
                                khusus.
                                (Visa Kerja,
                                Pendidikan 50 BAB,
                                Memiliki Sertifikat Bahasa (JFT) dan SSW)
                            </p>
                            {{-- <a href="{{ url('program-korea') }}" class="readmore stretched-link">Read more <i
                                    class="bi bi-arrow-right"></i></a><br /> --}}
                        </div>
                    </div>

                </div>

            </div>
        </section>

        {{-- Maps Japan Center (Gedung 1) --}}
        <section class="contact" id="lokasi-acc">
            <div class="container" data-aos="fade-up">
                <h5><b>Lokasi Gedung 1 LPK ACC JAPAN CENTRE</b></h5>
                <div class="row gx-lg-0 gy-4">
                    <div class="col-lg-12">
                        <iframe class="mb-4 mb-lg-0" loading="lazy" title="Lokasi Gedung 1 LPK ACC Japan Centre"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.524644510538!2d109.1131374!3d-6.9472685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb913ec72ac99%3A0x15c1e344784a1ea2!2sACC%20Japan%20Centre!5e0!3m2!1sid!2sid!4v1707996435480!5m2!1sid!2sid"
                            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

        {{-- Maps Japan Center (Gedung 2) --}}
        <section class="contact">
            <div class="container" data-aos="fade-up">
                <h5><b>Lokasi GEDUNG 2 LPK ACC JAPAN CENTRE</b></h5>
                <div class="row gx-lg-0 gy-4">
                    <div class="col-lg-12">
                        <iframe class="mb-4 mb-lg-0" loading="lazy" title="Lokasi Gedung 2 LPK ACC Japan Centre"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5237300552067!2d109.10930867430935!3d-6.947377068011707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb960aa5701dd%3A0x47a423a3a5e544b6!2sGedung%202%20LPK%20ACC%20Japan%20Center%20(Gedung%20Baru)!5e0!3m2!1sid!2sid!4v1779252567317!5m2!1sid!2sid"
                            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

        {{-- Testimoni Japan Center --}}
        <div id="reviews" class="reviews-section">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Ulasan Google Maps</h2>
                    <p>Pengalaman dan penilaian dari peserta serta keluarga yang telah mengenal ACC Japan Centre.</p>
                </div>
                <div class="reviews-panel">
                    <div class='sk-ww-google-reviews' data-embed-id='25365701'></div>
                </div>
            </div>
        </div>

        <section id="review" class="contact contact-section">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Hubungi ACC Japan Centre</h2>
                    <p>Temukan informasi lokasi, email, dan jam layanan kami.</p>
                </div>

                <div class="contact-grid">
                    <a class="contact-card" href="#lokasi-acc">
                        <span class="contact-card-icon"><i class="bi bi-geo-alt"></i></span>
                        <span class="contact-card-content">
                            <small>Location</small>
                            <strong>Tegal, Central Java</strong>
                            <span>Lihat lokasi ACC Japan Centre <i class="bi bi-arrow-up-right"></i></span>
                        </span>
                    </a>

                    <a class="contact-card" href="mailto:amanahcitracemerlang1@gmail.com">
                        <span class="contact-card-icon"><i class="bi bi-envelope"></i></span>
                        <span class="contact-card-content">
                            <small>Email</small>
                            <strong>amanahcitracemerlang1@gmail.com</strong>
                            <span>Kirim pertanyaan melalui email <i class="bi bi-arrow-up-right"></i></span>
                        </span>
                    </a>

                    <div class="contact-card">
                        <span class="contact-card-icon"><i class="bi bi-clock"></i></span>
                        <span class="contact-card-content">
                            <small>Open</small>
                            <strong>09.00 - 22.00 WIB</strong>
                            <span>Pagi 09.00 - 16.00 · Malam 16.00 - 22.00</span>
                        </span>
                    </div>
                </div>
            </div>
        </section>

    </main>

    {{-- <div id="preloader"></div> --}}

    <!-- Modal WhatsApp -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">WhatsApp</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6" style="padding: 10px;">
                            <div class="card" style="width: 100%;">
                                <img src="{{ asset('templates/assets/img/acc.jpg') }}" class="card-img-top"
                                    alt="ACC Japan" loading="lazy" decoding="async" data-lity>
                                <div class="card-body">
                                    <a href="" target="_blank" class="btn btn-success"
                                        style="width: 100%;"><i class="bi bi-whatsapp"
                                            style="padding-right: 10px;"></i>
                                        Japan Center</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="kc_fab_wrapper"></div>

    @include('landing.footer')

    <script>
        (function() {
            const galleryGrid = document.getElementById('gallery-grid');
            const galleryPagination = document.getElementById('gallery-pagination');

            if (!galleryGrid || !galleryPagination) {
                return;
            }

            const cacheKey = 'acc-gallery-images-v1';
            const cacheLifetime = 10 * 60 * 1000;
            const pageSize = 12;
            let images = null;

            function escapeHtml(value) {
                return String(value ?? '').replace(/[&<>'"]/g, function(character) {
                    return {
                        '&': '&amp;',
                        '<': '&lt;',
                        '>': '&gt;',
                        "'": '&#039;',
                        '"': '&quot;'
                    } [character];
                });
            }

            function getCachedImages() {
                try {
                    const cached = JSON.parse(localStorage.getItem(cacheKey));

                    if (cached && Date.now() - cached.savedAt < cacheLifetime && Array.isArray(cached.images)) {
                        return cached.images;
                    }
                } catch (error) {
                    localStorage.removeItem(cacheKey);
                }

                return null;
            }

            async function loadImages() {
                if (images) {
                    return images;
                }

                images = getCachedImages();

                if (images) {
                    return images;
                }

                const response = await fetch(galleryGrid.dataset.galleryEndpoint, {
                    headers: {
                        'Accept': 'application/json'
                    }
                });

                if (!response.ok) {
                    throw new Error('Gallery data could not be loaded.');
                }

                images = await response.json();

                try {
                    localStorage.setItem(cacheKey, JSON.stringify({
                        savedAt: Date.now(),
                        images
                    }));
                } catch (error) {
                    // Keep the gallery usable when browser storage is unavailable.
                }

                return images;
            }

            function formatDate(value) {
                const date = new Date(value);

                return Number.isNaN(date.getTime()) ? value : date.toLocaleDateString('id-ID', {
                    day: '2-digit',
                    month: 'short',
                    year: 'numeric'
                });
            }

            function renderPage(page) {
                const totalPages = Math.max(1, Math.ceil(images.length / pageSize));
                const currentPage = Math.min(Math.max(page, 1), totalPages);
                const firstImage = (currentPage - 1) * pageSize;
                const storagePath = @json(asset('storage')) + '/';

                galleryGrid.innerHTML = images.slice(firstImage, firstImage + pageSize).map(function(image) {
                    return `
                        <div class="col-12 col-sm-6 col-lg-3 mb-4">
                            <div class="card h-100">
                                <div class="card-body p-0">
                                    <img src="${storagePath}${encodeURI(image.filepath)}"
                                        class="card-img-top lazyload img-fluid" data-lity
                                        alt="Galeri LPK ACC Japan Centre" loading="lazy" decoding="async"
                                        style="width: 100%; aspect-ratio: 1 / 1; object-fit: cover; border-radius: 10px;">
                                </div>
                                <div class="card-footer text-body-secondary">
                                    <b>Date:</b> ${escapeHtml(formatDate(image.created_at))}
                                </div>
                            </div>
                        </div>`;
                }).join('');

                const pageLinks = [];
                pageLinks.push(currentPage === 1 ?
                    '<li class="disabled"><span>&lt;</span></li>' :
                    `<li><a href="?page=${currentPage - 1}#galeri" data-gallery-page="${currentPage - 1}">&lt;</a></li>`
                );

                for (let pageNumber = 1; pageNumber <= totalPages; pageNumber += 1) {
                    pageLinks.push(pageNumber === currentPage ?
                        `<li class="active"><span>${pageNumber}</span></li>` :
                        `<li><a href="?page=${pageNumber}#galeri" data-gallery-page="${pageNumber}">${pageNumber}</a></li>`
                    );
                }

                pageLinks.push(currentPage === totalPages ?
                    '<li class="disabled"><span>&gt;</span></li>' :
                    `<li><a href="?page=${currentPage + 1}#galeri" data-gallery-page="${currentPage + 1}">&gt;</a></li>`
                );

                galleryPagination.querySelector('.pagination').innerHTML = pageLinks.join('');
                history.replaceState(null, '', `?page=${currentPage}#galeri`);
                galleryGrid.closest('#galeri').scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }

            galleryPagination.addEventListener('click', async function(event) {
                const link = event.target.closest('a');

                if (!link) {
                    return;
                }

                const targetUrl = new URL(link.href, window.location.href);
                const targetPage = Number(targetUrl.searchParams.get('page') || 1);

                event.preventDefault();

                try {
                    await loadImages();
                    renderPage(targetPage);
                } catch (error) {
                    window.location.href = link.href;
                }
            });
        })();
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            if (window.location.hash === "#galeri") {
                document.getElementById("galeri").scrollIntoView({
                    behavior: "smooth"
                });
            }
        });
    </script>
    <script src='https://widgets.sociablekit.com/google-business-profile/widget.js' async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{ asset('templates/assets/js/kc.fab.min.js') }}"></script>
    <script src="{{ asset('templates/assets/js/kc.fab.js') }}"></script>
    <script>
        $(document).ready(function() {
            var links = [{
                    "bgcolor": "#128c7e",
                    "icon": "<i class='fa fa-whatsapp'></i>"
                },
                {
                    "url": "https://wa.me/6285640110822",
                    "title": "WhatsApp",
                    "bgcolor": "#128c7e",
                    "color": "#fffff",
                    "icon": "<i class='fa fa-whatsapp'></i>",
                    "target": "_blank"
                },
                {
                    "url": "https://www.facebook.com/amanahcitracemerlangjapan?mibextid=ZbWKwL",
                    "title": "Facebook",
                    "bgcolor": "#4267B2",
                    "color": "white",
                    "icon": "<i class='fa fa-facebook'></i>",
                    "target": "_blank"
                },
                {
                    "url": "https://www.instagram.com/accjapancentre_?igsh=enI4bWxjZnJueGJw",
                    "title": "Instagram",
                    "bgcolor": "#F56040",
                    "color": "white",
                    "icon": "<i class='fa fa-instagram'></i>",
                    "target": "_blank"
                },
                {
                    "url": "https://www.youtube.com/@AmanahCitraCemerlang",
                    "title": "YouTube",
                    "bgcolor": "red",
                    "color": "white",
                    "icon": "<i class='fa fa-youtube'></i>",
                    "target": "_blank"
                }
            ]
            $('.kc_fab_wrapper').kc_fab(links);
        })
    </script>

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

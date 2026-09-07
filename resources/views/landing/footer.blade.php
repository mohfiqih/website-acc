<style>
    .modern-footer {
        background: #fff !important;
        color: #1b2b36 !important;
        border-top: 1px solid #dcebf3;
        padding-top: 56px !important;
        padding-bottom: 24px !important;
    }

    .modern-footer .footer-modern-grid {
        display: grid;
        grid-template-columns: minmax(260px, 1.8fr) repeat(2, minmax(140px, 1fr)) minmax(220px, 1.4fr);
        gap: 42px;
        padding-bottom: 42px;
    }

    .modern-footer .footer-brand-name {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        color: #046392;
        font-family: var(--font-primary, "Montserrat", sans-serif);
        font-size: 20px;
        font-weight: 700;
    }

    .modern-footer .footer-brand-name:hover {
        color: #046392;
    }

    .modern-footer .footer-brand-mark {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 38px;
        height: 38px;
        border-radius: 12px;
        background: #eaf5fa;
        color: #046392;
        font-size: 20px;
    }

    .modern-footer .footer-brand p {
        max-width: 390px;
        margin: 18px 0 22px;
        color: #53636d;
        font-size: 13px;
        line-height: 1.75;
    }

    .modern-footer .footer-socials {
        display: flex;
        gap: 8px;
    }

    .modern-footer .footer-socials a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 34px;
        height: 34px;
        border: 1px solid #dcebf3;
        border-radius: 10px;
        color: #046392;
        transition: 0.25s ease;
    }

    .modern-footer .footer-socials a:hover {
        border-color: #046392;
        background: #046392;
        color: #fff;
        transform: translateY(-2px);
    }

    .modern-footer .footer-link-group,
    .modern-footer .footer-contact-block {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 11px;
    }

    .modern-footer h4 {
        margin: 0 0 7px;
        color: #163247 !important;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.1em;
        text-transform: uppercase;
    }

    .modern-footer .footer-link-group a,
    .modern-footer .footer-contact-block a,
    .modern-footer .footer-contact-block span {
        display: flex;
        align-items: flex-start;
        gap: 8px;
        color: #607586 !important;
        font-size: 13px;
        line-height: 1.45;
        transition: color 0.2s ease;
    }

    .modern-footer .footer-link-group a:hover,
    .modern-footer .footer-contact-block a:hover {
        color: #046392 !important;
    }

    .modern-footer .footer-contact-block i {
        flex: 0 0 auto;
        color: #046392;
        font-size: 15px;
    }

    .modern-footer .footer-bottom {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        padding-top: 18px;
        border-top: 1px solid #e3edf2;
        color: #82909a;
        font-size: 12px;
    }

    .modern-footer .footer-bottom strong {
        color: #046392;
    }

    @media (max-width: 991px) {
        .modern-footer .footer-modern-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 30px 24px;
        }

        .modern-footer .footer-brand {
            grid-column: 1 / -1;
        }
    }

    @media (max-width: 575px) {
        .modern-footer {
            padding-top: 40px !important;
        }

        .modern-footer .footer-modern-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 28px 18px;
            padding-bottom: 28px;
        }

        .modern-footer .footer-brand-name {
            font-size: 17px;
        }

        .modern-footer .footer-brand p {
            margin: 14px 0 18px;
            font-size: 12px;
        }

        .modern-footer .footer-link-group a,
        .modern-footer .footer-contact-block a,
        .modern-footer .footer-contact-block span {
            font-size: 12px;
        }

        .modern-footer .footer-bottom {
            flex-direction: column;
            gap: 8px;
            font-size: 11px;
        }
    }
</style>

<footer id="footer" class="footer modern-footer" style="padding-left: 10px;padding-right: 10px;">
    <div class="container">
        <div class="footer-modern-grid">
            <div class="footer-brand">
                <a href="{{ url('/') }}" class="footer-brand-name">
                    <span class="footer-brand-mark"><i class="bi bi-compass"></i></span>
                    <span>LPK ACC Japan Centre</span>
                </a>
                <p>
                    Membimbing generasi muda Indonesia untuk mempersiapkan diri, belajar, dan membangun karier di
                    Jepang melalui pelatihan yang terarah.
                </p>
                <div class="footer-socials" aria-label="Media sosial ACC Japan Centre">
                    <a href="https://www.facebook.com/amanahcitracemerlangjapan?mibextid=ZbWKwL" target="_blank"
                        rel="noopener" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/accjapancentre_?igsh=enI4bWxjZnJueGJw" target="_blank"
                        rel="noopener" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.youtube.com/@AmanahCitraCemerlang" target="_blank" rel="noopener"
                        aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    <a href="https://wa.me/6285640110822" target="_blank" rel="noopener" aria-label="WhatsApp"><i
                            class="bi bi-whatsapp"></i></a>
                </div>
            </div>

            <div class="footer-link-group">
                <h4>Jelajahi</h4>
                <a href="{{ url('/') }}">Beranda</a>
                <a href="{{ url('/#about') }}">Tentang ACC</a>
                <a href="{{ url('/#galeri') }}">Galeri</a>
                <a href="{{ url('/#review') }}">Hubungi Kami</a>
            </div>

            <div class="footer-link-group">
                <h4>Program</h4>
                <a href="{{ url('/#services') }}">Program Magang</a>
                <a href="{{ url('/#services') }}">Tokutei Ginou</a>
                <a href="{{ url('/#services') }}">Matching Job</a>
                <a href="{{ url('/pendaftaran-siswa-baru') }}">Pendaftaran Online</a>
            </div>

            <div class="footer-contact-block">
                <h4>Kontak</h4>
                <a href="mailto:amanahcitracemerlang1@gmail.com"><i class="bi bi-envelope"></i>
                    amanahcitracemerlang1@gmail.com</a>
                <span><i class="bi bi-geo-alt"></i> Adiwerna, Kabupaten Tegal</span>
                <a href="https://wa.me/6285640110822" target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i>
                    0856 4011 0822</a>
            </div>
        </div>

        <div class="footer-bottom">
            <span>Copyright &copy; {{ date('Y') }} <strong>LPK ACC Japan Centre</strong></span>
            <span>Kecamatan Adiwerna, Kabupaten Tegal, Jawa Tengah</span>
        </div>
    </div>
</footer>

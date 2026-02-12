<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beastie Beasiswa - Asisten Cerdas Kampus Impian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        :root { --primary-blue: #083960; }
        .hero-section { padding: 100px 0; background: #fff; }
        .btn-gradient {
            background: linear-gradient(180deg, #1f93c6, #083960);
            border: none;
            color: #ffffff;
        }

        .btn-gradient:hover {
            background: linear-gradient(180deg, #083960, #1f93c6);
            color: #ffffff;
        }

       .feature-card {
            display: flex;
            gap: 16px;
            border-radius: 16px;
            background: linear-gradient(180deg, #f8f8f8, #d3f2ff 100%);
            border: 2px solid rgba(190, 233, 251, 0.4); /* outline */
            transition: all 0.3s ease;
            color: #083960;
            padding: 16px 18px;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
        }

        .faq-section { background-color: #f8f9fc; padding: 80px 0; }
        .footer {
            background: linear-gradient(180deg, #083960 0%, #1f93c6 100%);
            color: white;
            padding: 50px 0;
        }

        .hero-section {
        background: linear-gradient(180deg, #ffffff 0%, #f3faff 100%);
            }

        .icon-box {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, #1e88b8, #42a5f5);
            color: #ffffff;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            flex-shrink: 0;
        }
        .hero-section {
        background: linear-gradient(180deg, #ffffff 0%, #f3faff 100%);
        }

       .navbar .nav-link,
        .navbar .dropdown-item {
            background: linear-gradient(180deg, #1f93c6, #083960);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 500;
        }

        .dropdown-menu {
            border-radius: 12px;
        }

        .footer-link {
            color: #ffffff;
            text-decoration: none;
        }

        .footer-link:hover {
            color: #d9eeff;
        }

        .social-icon {
            width: 38px;
            height: 38px;
            background: rgba(255,255,255,0.15);
            color: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.3s;
        }

        .icon-box {
            width: 52px;
            height: 52px;
            background: linear-gradient(180deg, #1f93c6, #083960);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            box-shadow: 0 8px 20px rgba(31, 147, 198, 0.35);
        }


        .social-icon:hover {
            background: #ffffff;
            color: #083960;
        }

        .footer .social-icon {
            text-decoration: none !important;
        }

        .text-gradient {
            background: linear-gradient(180deg, #1f93c6, #083960);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 600;
        }

    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
        <div class="container">

            <!-- Logo -->
            <a class="navbar-brand d-flex align-items-center me-3" href="#">
                <img src="{{ asset('img/logo.png') }}" alt="logo" width="70">
            </a>

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">

                <!-- Menu kiri (dekat logo) -->
                <ul class="navbar-nav align-items-lg-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">
                            Fitur Kami
                        </a>
                        <ul class="dropdown-menu border-0 shadow mt-3">
                            <li><a class="dropdown-item" href="#">Screening Portofolio</a></li>
                            <li><a class="dropdown-item" href="#">Perbaikan CV</a></li>
                            <li><a class="dropdown-item" href="#">Perbaikan Esai</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Simulasi Wawancara</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="#">Kalender Beasiswa</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Partnership</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">FAQ</a></li>
                </ul>

                <!-- Tombol kanan (ujung) -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="btn btn-gradient btn-sm" href="#">
                            Mulai Sekarang
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


    <section class="hero-section py-5">
        <div class="container">
            <div class="row align-items-center gy-5">

                <!-- Text -->
                <div class="col-lg-6">
                    <h1 class="fw-bold text-gradient mb-4">
                        Asisten Cerdas<br>
                        <span class="text-gradient h2">Untuk Menembus Kampus Impian.</span>
                    </h1>

                    <p class="text-muted my-4">
                        Otomatisasi persiapanmu dengan AI. Review CV, esai,
                        dan latihan wawancara tersedia detik ini juga.
                        Cerdas, akurat, dan siap 24/7 tanpa ribet mencari mentor.
                    </p>

                    <!-- CTA -->
                    <div class="d-flex gap-3 mb-4">
                        <a href="#" class="btn btn-gradient px-4 shadow-sm">
                            Mulai Gratis
                            <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                        <a href="#" class="btn btn-outline-secondary px-4 shadow-sm">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>

                    <!-- Stats -->
                    <div class="d-flex gap-5 small">
                        <div>
                            <h5 class="fw-bold text-primary mb-0">1000+</h5>
                            <span class="text-muted">Pengguna Aktif</span>
                        </div>
                        <div>
                            <h5 class="fw-bold text-primary mb-0">95%</h5>
                            <span class="text-muted">Tingkat Kepuasan</span>
                        </div>
                        <div>
                            <h5 class="fw-bold text-primary mb-0">24/7</h5>
                            <span class="text-muted">Dukungan AI</span>
                        </div>
                    </div>
                </div>

                <!-- Image -->
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('img/g1.png') }}" alt="Hero Illustration" class="img-fluid">
                </div>

            </div>
        </div>
    </section>


    <section class="fitur-section py-5">
        <div class="container text-center">
            <h2 class="fw-bold mb-5 text-gradient">Fitur Unggulan Kami</h2>
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card feature-card h-100 p-4">
                        <div class="icon-box">
                            <i class="bi bi-check2-circle fa-2x"></i>  
                        </div>
                        <h5>Screening Portofolio</h5>
                        <p class="small">Analisis mendalam portofolio Anda untuk memberikan rekomendasi terbaik.</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card feature-card h-100 p-4">
                        <div class="icon-box"><i class="bi bi-file-earmark-text fa-2x"></i></div>
                        <h5>Perbaikan CV</h5>
                        <p class="small text-muted">Dapatkan feedback instan dari surat lamaran dan CV Anda.</p>
                    </div>
                </div>
                  <div class="col-md-3 mb-4">
                    <div class="card feature-card h-100 p-4">
                        <div class="icon-box"><i class="bi bi-pencil-square fa-2x"></i></div>
                        <h5>Perbaikan Esai</h5>
                        <p class="small text-muted">Perbaiki esai Anda dengan bantuan AI untuk meningkatkan kualitasnya.</p>
                    </div>
                </div>
                  <div class="col-md-3 mb-4">
                    <div class="card feature-card h-100 p-4">
                        <div class="icon-box"><i class="bi bi-chat-left fa-2x"></i></div>
                        <h5>Simulasi Wawancara</h5>
                        <p class="small text-muted">Latih diri Anda dengan simulasi wawancara yang disesuaikan dengan kebutuhan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero-section py-5">
        <div class="container">
            <!-- Title -->
            <div class="text-center mb-5">
                <h2 class="fw-bold text-gradient">
                    Mengapa Ribuan Pelamar Beralih ke Beastie Beasiswa?
                </h2>
            </div>

            <div class="row align-items-center gy-5">
                <!-- Left Illustration -->
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('img/g2.png') }}" alt="Beastie Beasiswa Illustration" class="img-fluid">
                </div>

                <!-- Right Content -->
                <div class="col-lg-6">
                    <p class="text-muted mb-4">
                        Persiapan manual seringkali subjektif dan lambat. Kami hadir dengan
                        presisi AI untuk memastikan setiap dokumen dan jawaban wawancara
                        Anda memenuhi standar seleksi global.
                    </p>

                    <!-- Feature 1 -->
                    <div class="feature-card mb-3">
                        <div class="icon-box">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <div>
                            <h6 class="fw-semibold mb-1">Analisis Objektif & Bebas Bias</h6>
                            <p class="small text-muted mb-0">
                                AI menilai berdasarkan data ribuan profil sukses, bukan sekadar opini
                                pribadi mentor yang subjektif.
                            </p>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="feature-card mb-3">
                        <div class="icon-box">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <div>
                            <h6 class="fw-semibold mb-1">Feedback Instan Tanpa Menunggu</h6>
                            <p class="small text-muted mb-0">
                                Dapatkan koreksi CV dan esai dalam hitungan detik.
                                Tidak perlu lagi menyesuaikan jadwal temu mentor.
                            </p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="feature-card mb-4">
                        <div class="icon-box">
                            <i class="fas fa-user-clock"></i>
                        </div>
                        <div>
                            <h6 class="fw-semibold mb-1">Asisten Personal 24/7</h6>
                            <p class="small text-muted mb-0">
                                Latihan wawancara dan konsultasi kapan saja, pagi atau malam,
                                AI kami siap melatih mental juara Anda.
                            </p>
                        </div>
                    </div>

                    <!-- CTA -->
                    <div class="d-flex justify-content-md-end">
                        <a href="#" class="btn btn-gradient px-4 shadow-sm">
                            Coba Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="faq-section py-5">
        <div class="container">
            <!-- Title -->
            <div class="text-center mb-5">
                <h2 class="fw-bold text-gradient">FAQ</h2>
                <p class="text-muted">
                    Temukan jawaban atas pertanyaan umum tentang Beastie Beasiswa
                </p>
            </div>

            <div class="row align-items-center">
                <!-- Left Illustration -->
                <div class="col-lg-6 mb-3 mb-lg-0 text-center">
                    <img src="{{ asset('img/g3.png') }}"
                        alt="FAQ Illustration"
                        class="img-fluid"
                        style="max-height: 400px;">
                </div>

                <!-- Right Accordion -->
                <div class="col-lg-6">
                    <div class="accordion shadow-sm" id="faqAccordion">

                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq1">
                                    Apa itu Beastie Beasiswa?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Beastie adalah platform bertenaga AI yang membantu
                                    persiapan beasiswa Anda secara otomatis.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq2">
                                    Bagaimana cara kerja AI screening portofolio?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    AI akan menganalisis CV, esai, dan portofolio Anda
                                    lalu mencocokkannya dengan kriteria beasiswa.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq3">
                                    Apakah Beastie Beasiswa gratis?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Beastie menyediakan fitur gratis dan fitur premium
                                    sesuai kebutuhan pengguna.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq4">
                                    Beasiswa apa saja yang bisa dibantu platform ini?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Beastie membantu beasiswa dalam dan luar negeri,
                                    termasuk S1, S2, dan S3.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faq5">
                                    Bagaimana cara memulai menggunakan Beastie Beasiswa?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Anda cukup mendaftar akun, melengkapi profil,
                                    dan mulai eksplorasi rekomendasi beasiswa.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


   <footer class="footer bg-gradient-primary text-white pt-5">
        <div class="container">
            <div class="row gy-4">

                <!-- Brand -->
                <div class="col-md-4">
                    <h5 class="fw-bold">Beastie Beasiswa</h5>
                    <p class="text-white">
                        Platform AI untuk mendampingi perjalanan beasiswa Anda menuju kampus impian.
                    </p>

                    <!-- Social Media -->
                    <div class="d-flex gap-3 mt-3">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <!-- Navigasi -->
                <div class="col-md-2">
                    <h6 class="fw-semibold">Navigasi</h6>
                    <ul class="list-unstyled small">
                        <li><a href="#" class="footer-link">Fitur</a></li>
                        <li><a href="#" class="footer-link">Tentang Kami</a></li>
                        <li><a href="#" class="footer-link">FAQ</a></li>
                        <li><a href="#" class="footer-link">Blog</a></li>
                    </ul>
                </div>

                <!-- Sumber Daya -->
                <div class="col-md-3">
                    <h6 class="fw-semibold">Sumber Daya</h6>
                    <ul class="list-unstyled small">
                        <li><a href="#" class="footer-link">Panduan Beasiswa</a></li>
                        <li><a href="#" class="footer-link">Tips & Trik</a></li>
                        <li><a href="#" class="footer-link">Testimoni</a></li>
                        <li><a href="#" class="footer-link">Kontak Support</a></li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div class="col-md-3">
                    <h6 class="fw-semibold">Hubungi Kami</h6>
                    <p class="small text-white mb-2">
                        <i class="fas fa-envelope me-2"></i> info@beastiebeasiswa.com
                    </p>
                    <p class="small text-white mb-2">
                        <i class="fas fa-phone me-2"></i> +62 812-3456-7890
                    </p>
                    <p class="small text-white">
                        <i class="fas fa-map-marker-alt me-2"></i> Pontianak, Indonesia
                    </p>
                </div>

            </div>

            <hr class="border-white-50 my-4">

            <!-- Bottom Footer -->
            <div class="d-flex flex-column flex-md-row justify-content-between small text-white">
                <span>© 2025 Beastie Beasiswa. All rights reserved.</span>
                <div class="d-flex gap-3">
                    <a href="#" class="footer-link">Kebijakan Privasi</a>
                    <a href="#" class="footer-link">Syarat & Ketentuan</a>
                    <a href="#" class="footer-link">Cookies</a>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="/js/sb-admin-2.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>NUSANTARA EXPRESS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset ('')}}assets/img/nusantara.svg" rel="icon">
    <link href="{{ asset ('')}}assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset ('')}}assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset ('')}}assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset ('')}}assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset ('')}}assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset ('')}}assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset ('')}}assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Jun 14 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="{{route('login')}}" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">NUSANTARA EXPRESS</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{route('dashboard')}}" class="active">Home</a></li>
                    </li>
                    <li><a href="https://github.com/Stelajuni">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="{{route('register')}}">Register</a>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
                        data-aos="zoom-out">
                        <h1>Express Is The Best Solution</h1>
                        <p>Ready to Send Anytime, Anywhere.</p>
                        <div class="d-flex">
                            <a class="btn-get-started" href="{{route('login')}}">Login</a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/truck.svg" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About Nusantara Express</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <p>
                            Misi:
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-circle"></i> <span>Menyediakan layanan pengiriman yang cepat, aman,
                                dan tepat waktu dengan standar kualitas tinggi.</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>Menggunakan teknologi terbaru untuk meningkatkan efisiensi
                                dan transparansi operasional logistik.</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>Menjaga standar keamanan tinggi
                                dan pengawasan ketat dalam setiap pengiriman.</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>Menyediakan layanan pelanggan yang responsif
                                dan solutif dengan fokus pada kepuasan pelanggan.</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>Terus berkembang dan berekspansi dengan menjaga integritas
                                dan kualitas layanan.</span>
                        </ul>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <p>Visi:</p>
                        <p>
                            Menjadi perusahaan pengiriman barang terdepan di Indonesia yang dikenal akan kehandalan, kecepatan, dan layanan pelanggan unggul.
                            Kami berkomitmen memperkuat konektivitas dan ekonomi nasional melalui solusi logistik inovatif dan berkelanjutan.
                            Dengan teknologi modern dan praktik ramah lingkungan, kami membangun infrastruktur logistik efisien di seluruh Nusantara.
                            Fokus kami juga pada pengembangan sumber daya manusia, kemitraan kokoh, dan menjaga integritas serta kualitas layanan.
                            Nusantara Express bercita-cita menjadi simbol kepercayaan dan keunggulan dalam industri pengiriman barang di Indonesia dan pasar global.
                        </p>
                </div>

            </div>

        </section><!-- /About Section -->\
    </main>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset ('')}}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset ('')}}assets/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset ('')}}assets/vendor/aos/aos.js"></script>
    <script src="{{ asset ('')}}assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset ('')}}assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset ('')}}assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="{{ asset ('')}}assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset ('')}}assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="{{ asset ('')}}assets/js/main.js"></script>

</body>

</html>

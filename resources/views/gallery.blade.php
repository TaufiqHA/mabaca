<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Home - Perpustakaan Mabaca Manneunungeng</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/logo mabaca.png') }}" rel="icon">
  <link href="{{ asset('assets3/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets3/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets3/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets3/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets3/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets3/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets3/css/main.css') }}" rel="stylesheet">

  {{-- @vite(['assets3/css/main.css']) --}}

  <!-- =======================================================
  * Template Name: Append
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="blog-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets3/img/logo.png" alt=""> -->
        <img src="{{ asset('assets/img/logo mabaca hitam.png') }}" style="max-height: 50px" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/append#hero" class="active">Beranda</a></li>
          <li><a href="/append#about">Tentang</a></li>
          <li><a href="/append#layanan">Layanan</a></li>
          <li><a href="/append#gallery">Gallery</a></li>
          <li><a href="/append#organisasi">Organisasi</a></li>
          <li><a href="/append#pustakawan">Pustakawan</a></li>
          <li><a href="/append#blog">Blog</a></li>
          <li><a href="/append#kontak">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="/admin"><i class="bi bi-person"></i></a>

    </div>
  </header>

  <main class="main">

    <!-- Blog Posts Section -->
    <section id="gallery" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="{{ asset('img/kegiatan/kegiatan  (1).jpeg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p>Duta baca perpustakaan Mabaca Manennungeng</p>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="{{ asset('img/kegiatan/kegiatan  (2).jpeg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p>Foto bersama tim asesor akreditasi perpustakaan</p>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="{{ asset('img/kegiatan/kegiatan  (3).jpeg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p>Survey kebutuhan pemustaka oleh pustakawan</p>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="{{ asset('img/kegiatan/kegiatan  (4).jpeg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p>Peningkatan pendamping Literasi perpustakaan sekolah/madrasah</p>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="{{ asset('img/kegiatan/kegiatan  (5).jpeg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p>Penyerahan sertifikat penghargaan oleh dinas perpustakaan kota Makassar</p>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="{{ asset('img/kegiatan/kegiatan  (6).jpeg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p>Workshop Akreditasi perpustakaan tahun 2024</p>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section>
    <!-- /Blog Posts Section -->

  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-6 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/logo mabaca hitam.png') }}" style="max-height: 50px" alt="">
          </a>
          <p>Kami menyediakan beragam informasi untuk warga UPT SPF SMPN 9 Makassar. Terus update kegiatan - kegiatan kami di media sosial. </p>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#hero" class="active">Beranda</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="#layanan">Layanan</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#organisasi">Organisasi</a></li>
            <li><a href="#pustakawan">Pustakawan</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#kontak">Kontak</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Hubungi Kami</h4>
          <p>Jl. Ir. Soetami No.26 Bulurokeng Makassar</p>
          <p><span class="fw-bold">Telepon: </span>0822-9272-4200</p>
          <p><span class="fw-bold">Email: </span>perpussmpn9mks@gmail.com</p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="sitename">Append</strong> <span>All Rights Reserved</span></p>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets3/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets3/vendor/php-email-form/validate.js"></script>
  <script src="assets3/vendor/aos/aos.js"></script>
  <script src="assets3/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets3/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets3/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets3/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets3/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets3/js/main.js"></script>

</body>

</html>
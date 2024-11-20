<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Blog - Perpustakaan Mabaca Mannennungeng</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/logo mabaca.png') }}" rel="icon">
  <link href="assets2/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets2/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets2/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets2/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets2/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets2/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets2/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Tempo
  * Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="blog-details-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets2/img/logo.png" alt=""> -->
        <img class="sitename" src="{{ asset('assets/img/logo mabaca putih.png') }}" style="max-height: 50px"></img>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/#hero">Beranda</a></li>
          <li><a href="/#about">Tentang</a></li>
          <li><a href="/#services">Layanan</a></li>
          <li><a href="/#pricing">Organisasi</a></li>
          <!-- <li><a href="#faq">FAQ</a></li> -->
          <li><a href="/#contact">Kontak</a></li>
          <li><a href="/blog" class="active">Blog</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url({{ asset('assets2/img/page-title-bg.webp') }});">
      <div class="container position-relative">
        <h1>{{ $blog->judul }}</h1>
      </div>
    </div><!-- End Page Title -->

    <div class="container">
      <div class="row">

        <div class="col-lg-8">

          <!-- Blog Details Section -->
          <section id="blog-details" class="blog-details section">
            <div class="container">

              <article class="article">

                <div class="post-img">
                  <img src="{{ asset("storage/".$blog->thumbnile) }}" alt="" class="img-fluid">
                </div>

                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01">{{ $blog->tanggal }}</time></a></li>
                  </ul>
                </div><!-- End meta top -->

                <div class="content">
                    {!! str($blog->isi)->sanitizeHtml() !!}
                </div>

              </article>

            </div>
          </section><!-- /Blog Details Section -->

        </div>

        <div class="col-lg-4 sidebar">

          <div class="widgets-container">

            <!-- Recent Posts Widget -->
            <div class="recent-posts-widget widget-item">

              <h3 class="widget-title">Recent Posts</h3>

              @foreach ($blogs as $blog)
                <div class="post-item">
                  <img src="{{ asset('storage/' . $blog->thumbnile) }}" alt="" class="flex-shrink-0">
                  <div>
                    <h4><a href="/blog-detail/{{ $blog->id }}">{{ $blog->judul }}</a></h4>
                    <time datetime="2020-01-01">{{ $blog->tanggal }}</time>
                  </div>
                </div><!-- End recent post item-->
              @endforeach

            </div><!--/Recent Posts Widget -->

          </div>

        </div>

      </div>
    </div>

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-6 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <img class="sitename" src="{{ asset('assets/img/logo mabaca putih.png') }}" style="max-height: 50px"></img>
          </a>
          <div class="footer-contact pt-3">
            <p>Kami menyediakan beragam informasi untuk warga UPT SPF SMPN 9 Makassar. Terus update kegiatan - kegiatan kami di media sosial.

            </p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="https://www.facebook.com/share/128qXA64cqp/?mibextid=LQQJ4d"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/mabacamanennungengsmp9mks?igsh=MTExN2tnbjEwODBtZw%3D%3D&utm_source=qr"><i class="bi bi-instagram"></i></a>
            <a href="https://www.tiktok.com/@perpussmpn9mks?_t=8rT4RwKhTDJ&_r=1"><i class="bi bi-tiktok"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 footer-links">
          <h4>Tautan Berguna</h4>
          <ul>
            <li><a href="#hero">Beranda</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="#services">Layanan</a></li>
            <li><a href="#pricing">Organisasi</a></li>
            <!-- <li><a href="#faq">FAQ</a></li> -->
            <li><a href="#contact">Kontak</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-3 footer-links">
          <h4>Hubungi Kami</h4>
          <p>Jl. Ir. Soetami No.26 Bulurokeng Makassar</p>
          <p><span class="fw-bold">Telepon: </span>0822-9272-4200</p>
          <p><span class="fw-bold">Email: </span>perpussmpn9mks@gmail.com</p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Tempo</strong> <span>All Rights Reserved</span></p>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets2/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets2/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets2/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets2/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets2/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets2/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets2/js/main.js') }}"></script>

</body>

</html>
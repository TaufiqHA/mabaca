<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Beranda - Perpustakaan Mabaca Manneunungeng</title>
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
  <style>
    #tree{
      width:100%;
      height:100%;
    }
  </style>

  {{-- js file --}}
  <script src="https://balkan.app/js/OrgChart.js"></script>

  @vite(['assets3/css/main.css'])

  <!-- =======================================================
  * Template Name: Append
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets3/img/logo.png" alt=""> -->
        <img src="{{ asset('assets/img/logo mabaca hitam.png') }}" style="max-height: 50px" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
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
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="/admin"><i class="bi bi-person"></i></a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="{{ asset('storage/'.$data->hero_image) }}" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-lg-10 mb-3">
            <h1 data-aos="fade-up" style="font-weight: 800" data-aos-delay="100">Selamat Datang</h1>
            <h3 data-aos="fade-up" style="font-weight: 700" data-aos-delay="200">Perpustakaan Mabaca Mannennungeng</h3>
            <h4 data-aos="fade-up" style="font-weight: 200" data-aos-delay="300">UPT SPF SMPN 9 MAKASSAR</h4>
          </div>
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="300">
            <a class="btn text-white p-3" style="background: var(--accent-color)" href="#about" role="button">Let's Go</a>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">

          <div class="col-xl-5 content">
            <h3>Tentang Kami</h3>
            <h2>Perpustakaan Mabaca Mannenungeng</h2>
            <p>{!! $data->about !!}</p>
          </div>

          <div class="col-xl-7">
            <div class="row gy-4 icon-boxes">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                  <img src="{{ asset('storage/'.$data->about_img_1) }}" class="img-fluid" alt="galery 1">
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <img src="{{ asset('storage/'.$data->about_img_2) }}" class="img-fluid" alt="galery 1">
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <img src="{{ asset('storage/'.$data->about_img_3) }}" class="img-fluid" alt="galery 1">
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <img src="{{ asset('storage/'.$data->about_img_4) }}" class="img-fluid" alt="galery 1">
                </div>
              </div> <!-- End Icon Box -->

            </div>
          </div>

        </div>
      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section dark-background">

      <img src="assets3/img/stats-bg.jpg" alt="" data-aos="fade-in">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="{{ $data->judul }}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Judul</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-6 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="{{ $data->eksempler }}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Eksemplar</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="layanan" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Layanan</h2>
        <p>Nikmati Layanan Perpustakaan Mabaca Mannennungeng</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-collection"></i></div>
              <div>
                <h4 class="title"><a href="https://smpn9makassar.perpustakaan.co.id/" class="stretched-link">Perpustakaan Digital</a></h4>
                <p class="description">Masuk ke laman Perpustakaan Digital UPT SPF SMPN 9 Makassar untuk melakukan pencarian koleksi - koleksi perpustakaan</p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-book"></i></div>
              <div>
                <h4 class="title"><a href="https://opac-smpn9makassar.site/" class="stretched-link">OPAC</a></h4>
                <p class="description">Layanan Peminjaman, Perpanjangan, dan Pengembalian koleksi bahan pustaka</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Portfolio Section -->
    <section id="gallery" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            @foreach ($galleries as $gallery)
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <img src="{{ asset('storage/'.$gallery->gambar) }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <p>{{ $gallery->deskripsi }}</p>
                </div>
              </div><!-- End Portfolio Item -->
            @endforeach


          </div><!-- End Portfolio Container -->

          <div class="d-grid gap-2 col-6 mx-auto">
            <a href="/gallery" type="button" class="btn btn-outline-primary mt-5" style="outline: var(--accent-color); --bs-btn-padding-x: 10px; ">Lainnya <i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Pricing Section -->
    <section id="organisasi" class="pricing section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Organisasi</h2>
        <p>Struktur Organisasi Perpustakaan Mabaca Mannennungeng UPT SPF SMPN 9 Makassar</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="zoom-in" data-aos-delay="100">

        <div id="tree" style="pointer-events: none;"></div>
        <script>
          function updateScale(chart) {
              // Deteksi apakah layar berukuran mobile
              if (window.matchMedia("(max-width: 768px)").matches) {
                  // Mobile
                  chart.config.scaleInitial = 0.45; // Scale lebih kecil
              } else {
                  // Desktop
                  chart.config.scaleInitial = 0.8; // Scale lebih besar
              }

              // Refresh chart untuk menerapkan perubahan
              chart.draw();
          }
          OrgChart.templates.ana.defs = "";

          OrgChart.templates.ana.size = [250, 120];

          OrgChart.templates.ana.linkAdjuster = {
              fromX: 0,
              fromY: 0,
              toX: 0,
              toY: 0
          };

          OrgChart.templates.ana.ripple = {
              radius: 0,
              color: "#e6e6e6",
              rect: null
          };

          OrgChart.templates.ana.svg = 
              `<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                  style="display:block;" width="{w}" height="{h}" viewBox="{viewBox}">{content}
              </svg>`;

          OrgChart.templates.ana.node = 
              `<rect x="0" y="0" height="{h}" width="{w}" fill="#039BE5" stroke-width="1" stroke="#aeaeae" rx="7" ry="7"></rect>`;

          OrgChart.templates.ana.link = 
              `<path stroke-linejoin="round" stroke="#aeaeae" stroke-width="1px" fill="none" d="{rounded}" />`;

          OrgChart.templates.ana.assistanseLink = 
              `<path stroke-linejoin="round" stroke="#aeaeae" stroke-width="2px" fill="none" 
              d="M{xa},{ya} {xb},{yb} {xc},{yc} {xd},{yd} L{xe},{ye}" />`;

          OrgChart.templates.ana.pointer = 
              `<g data-pointer="pointer" transform="matrix(0,0,0,0,100,100)">
                  <radialGradient id="pointerGradient">
                      <stop stop-color="#ffffff" offset="0" />
                      <stop stop-color="#C1C1C1" offset="1" />
                  </radialGradient>
                  <circle cx="16" cy="16" r="16" stroke-width="1" stroke="#acacac" fill="url(#pointerGradient)"></circle>
              </g>`;

          OrgChart.templates.ana.expandCollapseSize = 30;
          OrgChart.templates.ana.plus = 
              `<circle cx="15" cy="15" r="15" fill="#ffffff" stroke="#aeaeae" stroke-width="1"></circle>
              <line x1="4" y1="15" x2="26" y2="15" stroke-width="1" stroke="#aeaeae"></line>
              <line x1="15" y1="4" x2="15" y2="26" stroke-width="1" stroke="#aeaeae"></line>`; 
          OrgChart.templates.ana.minus = 
              `<circle cx="15" cy="15" r="15" fill="#ffffff" stroke="#aeaeae" stroke-width="1"></circle>
              <line x1="4" y1="15" x2="26" y2="15" stroke-width="1" stroke="#aeaeae"></line>`;

          OrgChart.templates.ana.nodeMenuButton = 
              `<g style="cursor:pointer;" transform="matrix(1,0,0,1,225,105)" data-ctrl-n-menu-id="{id}">
                  <rect x="-4" y="-10" fill="#000000" fill-opacity="0" width="22" height="22"></rect>
                  <circle cx="0" cy="0" r="2" fill="#ffffff"></circle>
                  <circle cx="7" cy="0" r="2" fill="#ffffff"></circle><circle cx="14" cy="0" r="2" fill="#ffffff"></circle>
              </g>`;

          OrgChart.templates.ana.menuButton = 
              `<div style="position:absolute;right:{p}px;top:{p}px; width:40px;height:50px;cursor:pointer;" data-ctrl-menu="">
                  <hr style="background-color: #7A7A7A; height: 3px; border: none;">
                  <hr style="background-color: #7A7A7A; height: 3px; border: none;">
                  <hr style="background-color: #7A7A7A; height: 3px; border: none;">
              </div>`;

          OrgChart.templates.ana.img_0 = 
              `<clipPath id="{randId}"><circle cx="50" cy="30" r="40"></circle></clipPath>
              <image preserveAspectRatio="xMidYMid slice" clip-path="url(#{randId})" xlink:href="{val}" x="10" y="-10" width="80" height="80">
              </image>`;

          OrgChart.templates.ana.field_0 = 
              `<text data-width="230" style="font-size: 13px;" fill="#ffffff" x="125" y="95" text-anchor="middle">{val}</text>`;
          OrgChart.templates.ana.field_1 = 
              `<text data-width="130" data-text-overflow="multiline" style="font-size: 14px;" fill="#ffffff" x="230" y="30" text-anchor="end">
                  {val}
              </text>`;

          OrgChart.templates.ana.link_field_0 = 
              `<text text-anchor="middle" fill="#aeaeae" data-width="290" x="0" y="0" style="font-size:10px;">{val}</text>`;

          OrgChart.templates.ana.padding = [50, 20, 35, 20];
          var chart = new OrgChart(document.getElementById("tree"), {
              mouseScrool: OrgChart.action.none,
              scaleInitial: OrgChart.match.width,
              template: "ana",
              scaleInitial: 0.7,
              enableSearch: false,
              enableDragDrop: false,
              editForm: {readOnly: true},
              nodeBinding: {
                  field_0: "name",
                  field_1: "title",
                  img_0: "img"
              },
              nodes: [
                @foreach ($organisasi as $bagan)
                  { id: "{{ $bagan->id }}", pid: "{{ $bagan->pid }}", name: "{{ $bagan->name }}", title: "{{ $bagan->title }}", img: "{{ $bagan->image ?? asset('img/user.jpg') }}" },
                @endforeach
              ]
          });

          // Atur skala awal berdasarkan ukuran layar
          updateScale(chart);

          // Tambahkan event listener untuk mendeteksi perubahan ukuran layar
          window.addEventListener("resize", () => updateScale(chart));
        </script>

      </div>

    </section><!-- /Pricing Section -->

    <!-- Team Section -->
    <section id="pustakawan" class="team section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pustakawan</h2>
        <p>Para Petugas Kami</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">

          @foreach ($pustakawan as $pustaka)
            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{ $pustaka->image ? asset('storage/'.$pustaka->image) : asset('img/user.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info text-center">
                <h4>{{ $pustaka->name }}</h4>
                <span>{{ $pustaka->deskripsi }}</span>
              </div>
            </div><!-- End Team Member -->
          @endforeach


        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Recent Posts Section -->
    <section id="blog" class="recent-posts section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Postingan</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          @foreach ($blogs as $blog)
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <article>

                <div class="post-img">
                  <img src="{{ asset("storage/$blog->thumbnile") }}" alt="" class="img-fluid">
                </div>

                <p class="post-category">{{ $blog->tanggal }}</p>

                <h2 class="title">
                  <a href="/blog-detail/{{ $blog->id }}">{{ $blog->judul }}</a>
                </h2>

              </article>
            </div><!-- End post list item -->
          @endforeach

        </div><!-- End recent posts list -->

        <div class="d-grid gap-2 col-6 mx-auto">
          <a href="/blog" type="button" class="btn btn-outline-primary mt-5" style="outline: var(--accent-color); --bs-btn-padding-x: 10px; ">Lainnya <i class="bi bi-arrow-right"></i></a>
        </div>

      </div>

    </section><!-- /Recent Posts Section -->

    <!-- Contact Section -->
    <section id="kontak" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p>Hubungi Kami</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-item" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Alamat</h3>
                  <p>{!! $data->alamat !!}</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Telepon</h3>
                  <p>{{ $data->telepon }}</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email</h3>
                  <p>{{ $data->email }}</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                  <i class="bi bi-clock"></i>
                  <h3>Jam buka</h3>
                  <p>Senin-Jum’at = {{ $data->jam_buka }}</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-6" style="height: 400px" data-aos="zoom-in" data-aos-delay="500">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.1404513819525!2d119.49993857451686!3d-5.08097315154712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefc0a2f066c3d%3A0xd2bf494556c34282!2sSMP%20Negeri%209%20Makassar!5e0!3m2!1sid!2sid!4v1731999949935!5m2!1sid!2sid" style="border:0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

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
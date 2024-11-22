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
  <style>
    #tree{
      width:100%;
      height:100%;
    }
  </style>

  {{-- js file --}}
  <script src="https://balkan.app/js/OrgChart.js"></script>

  {{-- @vite(['assets3/css/main.css']) --}}

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

      <img src="{{ asset('img/hero image.jpeg') }}" alt="" data-aos="fade-in">

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
            <p>Perpustakaan Mabaca Manennungeng UPT SPF SMP NEGERI 9 Makassar berdiri sejak tahun 1999, Dengan nomor pokok perpustakaan (NPP) 7371111D1000004 dan menempati gedung tersendiri seluas 359,12 m2. Perpustakaan di UPT SPF SMPN 9 Makassar memiliki fasilitas yang cukup memadai antara lain Ac, Televisi, Layar proyektor, Komputer, LCD, Kipas angin, Printer dan Foto copy. Adapun jenis koleksinya sebanyak 3.000 Judul dan 4.230 Eksemplar yaitu terdiri dari buku paket, buku fiksi dan non fiksi, referensi dan digital. Struktur organisasi perpustakaan UPT SPF SMPN 9 Makassar antara lain : terdiri dari Kepala sekolah, kepala perpustakaan, Pelayanan teknis, Pelayanan pemustaka, dan TIK.</p>
          </div>

          <div class="col-xl-7">
            <div class="row gy-4 icon-boxes">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                  <img src="{{ asset('img/galery1.jpeg') }}" class="img-fluid" alt="galery 1">
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <img src="{{ asset('img/galery4.jpeg') }}" class="img-fluid" alt="galery 1">
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <img src="{{ asset('img/galery2.jpeg') }}" class="img-fluid" alt="galery 1">
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <img src="{{ asset('img/galery3.jpeg') }}" class="img-fluid" alt="galery 1">
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
              <span data-purecounter-start="0" data-purecounter-end="3000" data-purecounter-duration="1" class="purecounter"></span>
              <p>Judul</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-6 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="4230" data-purecounter-duration="1" class="purecounter"></span>
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
                  chart.config.scaleInitial = 0.7; // Scale lebih besar
              }

              // Refresh chart untuk menerapkan perubahan
              chart.draw();
          }
          var chart = new OrgChart(document.getElementById("tree"), {
              mouseScrool: OrgChart.action.none,
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
                  { id: "1", pid: '', name: `{{ $name }}`, title: "CEO", img: "https://cdn.balkan.app/shared/1.jpg" },
                  { id: "2", pid: "1", tags: ["IT Manager"], name: "Ava Field", title: "IT Manager", img: "https://cdn.balkan.app/shared/2.jpg" },
                  { id: "3", pid: "2", tags: ["Marketing Manager"], name: "Rhys Harper", title: "Marketing Team Lead", img: "https://cdn.balkan.app/shared/3.jpg" },
                  { id: "4", pid: "2", tags: ["IT"], name: "Carol Foster", title: "Junior Developer", img: "https://cdn.balkan.app/shared/4.jpg" },
                  { id: "5", pid: "2", tags: ["IT"], name: "Blake Morris", title: "Senior Developer", img: "https://cdn.balkan.app/shared/5.jpg" },
                  { id: "6", pid: "3", tags: ["Marketing"], name: "Erin Grant", title: "Junior Marketing", img: "https://cdn.balkan.app/shared/6.jpg" },
                  { id: "7", pid: "4", tags: ["Marketing"], name: "Avery Hughes", title: "Senior MArketing", img: "https://cdn.balkan.app/shared/7.jpg" },
                  { id: "8", pid: "5", tags: ["Marketing"], name: "Erin Grant", title: "Junior Marketing", img: "https://cdn.balkan.app/shared/6.jpg" },
                  { id: "9", pid: "6", tags: ["Marketing"], name: "Avery Hughes", title: "Senior MArketing", img: "https://cdn.balkan.app/shared/7.jpg" }

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

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="assets3/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <p>Aliquam iure quaerat voluptatem praesentium possimus unde laudantium vel dolorum distinctio dire flow</p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="assets3/img/team/team-2.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Sarah Jhonson</h4>
              <span>Product Manager</span>
              <p>Labore ipsam sit consequatur exercitationem rerum laboriosam laudantium aut quod dolores exercitationem ut</p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="assets3/img/team/team-3.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <p>Illum minima ea autem doloremque ipsum quidem quas aspernatur modi ut praesentium vel tque sed facilis at qui</p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
              <img src="assets3/img/team/team-4.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <p>Magni voluptatem accusamus assumenda cum nisi aut qui dolorem voluptate sed et veniam quasi quam consectetur</p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
            <div class="member-img">
              <img src="assets3/img/team/team-5.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Brian Doe</h4>
              <span>Marketing</span>
              <p>Qui consequuntur quos accusamus magnam quo est molestiae eius laboriosam sunt doloribus quia impedit laborum velit</p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
            <div class="member-img">
              <img src="assets3/img/team/team-6.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Josepha Palas</h4>
              <span>Operation</span>
              <p>Sint sint eveniet explicabo amet consequatur nesciunt error enim rerum earum et omnis fugit eligendi cupiditate vel</p>
            </div>
          </div><!-- End Team Member -->

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

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <article>

              <div class="post-img">
                <img src="assets3/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Politics</p>

              <h2 class="title">
                <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets3/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Maria Doe</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jan 1, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <article>

              <div class="post-img">
                <img src="assets3/img/blog/blog-2.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Sports</p>

              <h2 class="title">
                <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets3/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Allisa Mayer</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 5, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article>

              <div class="post-img">
                <img src="assets3/img/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Entertainment</p>

              <h2 class="title">
                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets3/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Mark Dower</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 22, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

        </div><!-- End recent posts list -->

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
                  <p>Jl. Ir. Soetami No.26 Bulurokeng Makassar</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Telepon</h3>
                  <p>0822-9272-4200</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email</h3>
                  <p>perpussmpn9mks@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                  <i class="bi bi-clock"></i>
                  <h3>Jam buka</h3>
                  <p>Senin-Jum’at = 07:00-16:00</p>
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
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>A108 Adam Street</p>
          <p>New York, NY 535022</p>
          <p>United States</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
          <p><strong>Email:</strong> <span>info@example.com</span></p>
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
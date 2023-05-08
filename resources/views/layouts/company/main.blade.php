<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bismillah RPL | @yield("title")</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  {{-- <link href="{{ asset("company/assets/img/favicon.png") }}" rel="icon"> --}}
  <link href="{{ asset('company') }}/assets/img/Logo Akunusa Express.png"  rel="icon">
  {{-- <link href="{{ asset("company") }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset("company") }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset("company") }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset("company") }}/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="{{ asset("company") }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset("company") }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{ asset("company") }}/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset("company") }}/assets/css/main.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
    @include('layouts.company.header')
  <!-- End Header -->

  @yield('content')
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Akurasi Nusantara Indonesia</span>
          </a>
          <p>AKUNUSA adalah sebuah perusahaan IT consultant yang menyediakan solusi teknologi informasi terdepan untuk membantu klien kami meningkatkan kinerja bisnis mereka. Layanan kami mencakup analisis kebutuhan bisnis, desain dan pengembangan sistem, integrasi perangkat lunak dan perangkat keras, manajemen proyek, pengujian dan evaluasi sistem, serta pelatihan dan dukungan.
</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            Indonesia, Jawa Barat <br>
            Jl. Yang Benar<br>
            Indonesia <br><br>
            <strong>Phone:</strong> +62 8 berapa ?<br>
            <strong>Email:</strong> akunusaid@gmail.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>AkuNusaID {{date("Y")}}</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="">Kelompok 7 Teknik Informatika-C  <br> 2023 Institut Teknologi Garut</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset("company") }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset("company") }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ asset("company") }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset("company") }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset("company") }}/assets/vendor/aos/aos.js"></script>
  <script src="{{ asset("company") }}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset("company") }}/assets/js/main.js"></script>

</body>

</html>

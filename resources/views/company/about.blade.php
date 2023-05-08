@extends('layouts.company.main')

@section('title', "About")
@section('content')
<main id="main">
<!-- ======= About Us Section ======= -->
    <section id="about" class="about mt-5">
        <div class="section-header">
            <span>About</span>
            <h2>About</h2>
        </div>
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="{{ asset('company') }}/assets/img/Logo Akunusa Express.png" class="img-fluid" alt="">
            {{-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a> --}}
          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            <h3>About Us</h3>
            <p>
                AKUNUSA adalah sebuah perusahaan IT consultant yang menyediakan solusi teknologi informasi terdepan untuk membantu klien kami meningkatkan kinerja bisnis mereka. Layanan kami mencakup analisis kebutuhan bisnis, desain dan pengembangan sistem, integrasi perangkat lunak dan perangkat keras, manajemen proyek, pengujian dan evaluasi sistem, serta pelatihan dan dukungan.
            </p>
            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-diagram-3"></i>
                <div>
                  <h5>Tim</h5>
                  <p>Tim ahli kami terdiri dari para profesional teknologi informasi yang terlatih dan berpengalaman dalam berbagai sektor industri. Kami memahami betul bagaimana teknologi dapat membantu memperbaiki proses bisnis, meningkatkan efisiensi, dan menghasilkan keuntungan yang lebih besar.</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-fullscreen-exit"></i>
                <div>
                  <h5>Skill Kami</h5>
                  <p>Kami mampu bekerja sama dengan berbagai klien dari perusahaan besar,  pemerintah,organisasi nirlaba, hingga usaha kecil dan menengah. Dalam setiap proyek, kami selalu berusaha memberikan solusi yang terbaik dan sesuai dengan kebutuhan bisnis klien kami.</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-broadcast"></i>
                <div>
                  <h5>Solution</h5>
                  <p>Jika Anda mencari solusi teknologi informasi terdepan untuk membantu  meningkatkan kinerja bisnis Anda, maka jangan ragu untuk menghubungi kami dan bergabung dengan jajaran klien kami yang puas dengan layanan kami.</p>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter pt-0">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Our Team</span>
          <h2>Our Team</h2>

        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-2 col-md-6 d-flex">
            <div class="member">
              <img src="{{asset('company')}}/assets/img/team/eghaphoto.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Egha Satria Bagaskara</h4>
                <span>Web Development</span>
                <p>
                  "Tetap Tenang, Kuasai dan taklukkan"
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-2 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Arvin Muhammad Ajif</h4>
                <span>Web Developer</span>
                <p>
                  "Aku suka Blackpink"
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-2 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Heryaman</h4>
                <span>Content</span>
                <p>
                  "Sapa Tuh"
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-youtube"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->
          <div class="col-lg-2 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Sita Sri Andari</h4>
                <span>2106050</span>
                <p>
                  "Sapa Tuh"
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->
          <div class="col-lg-2 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Agil Nahzar</h4>
                <span>2106090</span>
                <p>
                  "Sapa Tuh"
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Our Team Section -->

 
  </main>
@endsection

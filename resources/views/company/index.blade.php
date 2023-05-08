@extends('layouts.company.main')

@section('title', "Home")
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-8 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <div class="row">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <img src="{{ asset('company') }}/assets/img/Logo Akunusa Express.png" alt="" width="200px">
            </div>
            <div class="col-lg-8">
              <h1 data-aos="fade-up" data-aos-delay="100">Penyedia jasa</h1>
              <h2 data-aos="fade-up">Ekspedisi Barang Indonesia.</h2>
            </div>
          </div>
          <h1 data-aos="fade-up" data-aos-delay="100">Kami mengirimkan produk dan barang Anda dengan aman ke tujuan Anda dalam waktu yang cepat, aman, dan terpercaya.</h1>
          <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
            <input type="text" class="form-control" placeholder="Masukan Nomor Resi">
            <button type="submit" class="btn btn-coklat">Track</button>
          </form>

          <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

          </div>
        </div>
        <div class="col-lg-3 order-1 order-lg-2" data-aos="zoom-out">
            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('company') }}/assets/img/orang.png" alt="" class="img-fluid">
                  </div>
                  <h3 class="text-center d-flex">Company Profile</h3>
                  <p>Menawarkan pengiriman ke rumah di sekitar kota, di mana produk Anda akan berada di depan pintu Anda dalam waktu 48-72 jam.</p>
                  <a href="/about" class="btn btn-coklat">Watch The Video</a>
                {{-- <img src="{{ asset('company') }}/assets/img/hero-img.svg" class="img-fluid mb-3 mb-lg-0" alt=""> --}}
            </div>
        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-cart-flatbed"></i></div>
            <div>
              <h4 class="title">Ekspedisi Barang</h4>
              <p class="description">Pengiriman Barang terjamin</p>
              <a href="service-details.html" class="readmore stretched-link"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-truck"></i></div>
            <div>
              <h4 class="title">Paket 24 Jam</h4>
              <p class="description">Book searang, kami akan selalu siap !</p>
              <a href="service-details.html" class="readmore stretched-link"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-truck-ramp-box"></i></div>
            <div>
              <h4 class="title">Company Delivery</h4>
              <p class="description">Pengiriman barang khusus perusahaan anda !</p>
              <a href="service-details.html" class="readmore stretched-link"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Featured Services Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
@endsection

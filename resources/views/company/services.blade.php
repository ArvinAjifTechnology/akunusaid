@extends('layouts.company.main')

@section('title', 'Services')

@section('content')
<main id="main">
    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Our Services</span>
          <h2>Our Services</h2>

        </div>

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('company') }}/assets/img/Logo Akunusa Express.png" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">Business Services</a></h3>
              <p>Kami memberikan Anda pengiriman lengkap yang dapat diandalkan untuk perusahaan Anda. Kami akan mengambil tanggung jawab penuh pengiriman.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('company') }}/assets/img/Logo Akunusa Express.png" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">Statewide Services</a></h3>
              <p>Menawarkan pengiriman ke rumah di sekitar kota, di mana produk Anda akan berada di depan pintu Anda dalam waktu 48-72 jam.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('company') }}/assets/img/Logo Akunusa Express.png" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">Personal Services</a></h3>
              <p>Kami menawarkan anda  untuk mengirimkan dokumen atau barang paling sensitif Anda dengan aman ke area tertentu dalam waktu singkat.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('company') }}/assets/img/Logo Akunusa Express.png" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">Logistics</a></h3>
              <p>Menangani kebutuhan logistic sebagai anda untuk mengirim barang, kendaraan, dan jasa warehouse atau Fullfillment yang lebih aman dan nyaman.</p>
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->

</main><!-- End #main -->
@endsection

@extends('layouts.company.main')

@section('title', 'Pricing')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Pricing</h2>
              <p>Harga Dijamin Cincai</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Pricing</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item">
              <h3>Harga Teman</h3>
              <h4><sup>Rp.</sup>500.000<span> / bulan</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Chat 24 Jam</li>
                <li><i class="bi bi-check"></i> Bisa Nego tapi yang logis hehe</li>
                <li><i class="bi bi-check"></i> Dijamin Aman</li>
                <li class="na"><i class="bi bi-x"></i> <span>Minta revisi</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Minta Refund</span></li>
              </ul>
              <a href="#" class="buy-btn">Gassin !</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-item featured">
              <h3>Harga Seadanya</h3>
              <h4><sup>Rp</sup>1.000.000<span> / bulan</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Chat 24 Jam + Sleepcall</li>
                <li><i class="bi bi-check"></i> Nego harga rakyat</li>
                <li><i class="bi bi-check"></i> 100% Aman</li>
                <li><i class="bi bi-check"></i> Revisi 2x</li>
                <li><i class="bi bi-check"></i> Refund 25%</li>
              </ul>
              <a href="#" class="buy-btn">Gassin !</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="pricing-item">
              <h3>Harga Lupa Diri</h3>
              <h4><sup>Rp.</sup>Bisa Gratis Gak?<span> / bulan</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Seadanya</li>
                <li><i class="bi bi-check"></i> Tampilan 404 Not Found</li>
                <li><i class="bi bi-check"></i> Dijamin Puas</li>
                <li><i class="bi bi-check"></i> Chat Slowrespon</li>
                <li><i class="bi bi-check"></i> 1x Buat Aja hehe</li>
              </ul>
              <a href="#" class="buy-btn">Gassin !</a>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Horizontal Pricing Section ======= -->
  
@endsection

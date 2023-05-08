@extends('layouts.company.main')

@section('title', "Contact")
@section('content')
<main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" >
        <div class="section-header">
            <span>Contact</span>
            <h2>Contact</h2>

        </div>
        @if(session('success'))
            <div class="alert alert-success" role="alert">
            {{ session('success') }}
            </div>
        @endif
      <div class="row">
        <div class="col-4">
            <div class="row">
                <img src="{{ asset('company') }}/assets/img/Logo Akunusa Express.png" alt="">
            </div>
            <div class="row mt-5">
                <div class="info-item d-flex" data-aos="fade-up">
                    <i class="bi bi-geo-alt flex-shrink-0" data-aos="fade-up"></i>
                    <div>
                      <h4>Location:</h4>
                      <p>Rumah Siapa?, Indonesia, ID 12345</p>
                    </div>
                  </div><!-- End Info Item -->

                  <div class="info-item d-flex" data-aos="fade-up">
                    <i class="bi bi-envelope flex-shrink-0"></i>
                    <div>
                      <h4>Email:</h4>
                      <p>akunusaid@company.com</p>
                    </div>
                  </div><!-- End Info Item -->

                  <div class="info-item d-flex" data-aos="fade-up">
                    <i class="bi bi-phone flex-shrink-0"></i>
                    <div>
                      <h4>Call:</h4>
                      <p>+62 8 Berapa ?</p>
                    </div>
                  </div><!-- End Info Item -->
            </div>
        </div>
        <div class="col-4">
            <form action="{{route('send.message') }}" method="post" role="form" class="">
                @csrf
              <div class="row">
                <div class="col-md-6 form-group" data-aos="fade-up">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0" data-aos="fade-up">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3" data-aos="fade-up">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3" data-aos="fade-up">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="text-center" data-aos="fade-up"><button type="submit" class="btn btn-primary mt-3">Send Message</button></div>
            </form><!-- End Contact Form -->
        </div>
        <div class="col-4 maps">
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.2990507208838!2d107.89364817599157!3d-7.206683770752426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68b1d119852f2f%3A0x116c33498b7cab1d!2sInstitut%20Teknologi%20Garut!5e0!3m2!1sid!2sid!4v1683520677056!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
              <!-- End Google Maps -->
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection

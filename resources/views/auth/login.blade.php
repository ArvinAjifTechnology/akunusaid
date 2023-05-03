@extends('layouts.admin.main')

@section('title', 'Login')

@section('auth')
<div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">


              <div class="card mb-3">

                  <div class="card-body">

                      <div class="pt-4 pb-2">
                        <div class="d-flex justify-content-center py-4">
                        <a href="{{ url('/') }}" class="logo d-flex align-items-center w-auto">
                            <img src="{{ asset('company/assets/img/Logo Akunusa Express.png') }}" alt="">
                        </a>
                        </div><!-- End Logo -->
                  <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                  <p class="text-center small">Enter your username & password to login</p>
                </div>

                <form class="row g-3 needs-validation" method="POST" action="{{ route('login') }}">
                    @csrf

                  <div class="col-12">
                    <label for="yourUsername" class="form-label">Email</label>
                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">@</span>
                      <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" id="yourEmail" value="{{ old('email') }}" autocomplete="email" autofocus>
                      <div class="invalid-feedback">Please enter your email.</div>
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                  </div>

                  <div class="col-12">
                    <label for="yourPassword" class="form-label">{{ __('Password') }}</label>
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" id="yourPassword" required autocomplete="current-password">
                    <div class="invalid-feedback">Please enter your password!</div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>

                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe" {{ old('remember') ? 'checked' : '' }}>
                      <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit">Login</button>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                  </div>
                  <div class="col-12">
                    <p class="small mb-0">Don't have account? <a href="{{ url('/register') }}">Create an account</a></p>
                  </div>
                </form>

              </div>
            </div>

            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>

          </div>
        </div>
      </div>

    </section>

  </div>
@endsection

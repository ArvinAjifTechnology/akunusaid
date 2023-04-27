<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('company') }}/assets/img/Logo Akunusa Express.png" alt="">
        {{-- <h1>AkuNusaExpess</h1> --}}
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
          <li><a href="/about" class="{{ Request::is('about') ? 'active' : '' }}">About</a></li>
          <li><a href="/agen-list" class="{{ Request::is('agen-list') ? 'active' : '' }}">Agen List</a></li>
          <li><a href="/services" class="{{ Request::is('services') ? 'active' : '' }}">Services</a></li>
          <li><a href="/pricing" class="{{ Request::is('pricing') ? 'active' : '' }}">Pricing</a></li>
          <li><a href="/tracking" class="{{ Request::is('tracking') ? 'active' : '' }}">Tracking</a></li>
          <li><a href="/contact" class="{{ Request::is('contact') ? 'active' : '' }}">Contact</a></li>
          <li><a class="get-a-quote" href="/login"  class="{{ Request::is('login') ? 'active' : '' }}">Login</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

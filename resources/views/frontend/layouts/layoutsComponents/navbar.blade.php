<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        {{-- <img src="{{ url('frontend/assets/img/logo.png') }}" height="100%" width="100%" alt="">  --}}
        <h1 class="sitename">Giraffe Oil Company</h1> <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ url('/') }}" class="{{ '/' == request()->path() ? 'active' : '' }}">Home</a></li>
          <li><a href="{{ url('/about-us') }}" class="{{ 'about-us' == request()->path() ? 'active' : '' }}">About</a></li>
          <li><a href="{{ url('/services') }}" class="{{ 'services' == request()->path() ? 'active' : '' }}">Services</a></li>
          <li><a href="{{ url('news') }}" class="{{ 'news' == request()->path() || '/news/details/id' == request()->path() ? 'active' : '' }}">News</a></li>
          <li><a href="{{ url('/contact-us') }}" class="{{ 'contact-us' == request()->path() ? 'active' : '' }}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>
<!-- Spinner End -->

<!-- Topbar Start -->
<div class="container-fluid topbar bg-light px-5 d-none d-lg-block">
    <div class="row gx-0 align-items-center">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-flex flex-wrap">
                <a href="https://maps.app.goo.gl/zrSpiRVskEinD9NY6" class="text-muted small me-4">
                    <i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location
                </a>
                <a href="tel:+256754945447" class="text-muted small me-4">
                    <i class="fas fa-phone-alt text-primary me-2"></i>+256754945447
                </a>
                <a href="mailto:info@najuzi.com" class="text-muted small me-0">
                    <i class="fas fa-envelope text-primary me-2"></i>info@najuzi.com
                </a>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a href="{{ url('register') }}">
                    <small class="me-3 text-dark"><i class="fa fa-user text-primary me-2"></i>Register</small>
                </a>
                <a href="{{ url('login') }}">
                    <small class="me-3 text-dark"><i class="fa fa-sign-in-alt text-primary me-2"></i>Login</small>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="{{ url('/') }}" class="navbar-brand p-0">
            <h1 class="text-primary">
                <i class="me-3">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">
                </i>
                N <span style="color:rgb(255, 132, 0);"> D </span> L
            </h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ url('about') }}" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
                <a href="{{ url('services') }}" class="nav-item nav-link {{ Request::is('services') ? 'active' : '' }}">Services</a>
                <a href="{{ url('blog') }}" class="nav-item nav-link {{ Request::is('blog') ? 'active' : '' }}">Blogs</a>
               
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ url('setupAndPackaging') }}" class="dropdown-item">Setup and Packaging</a>
                        <a href="{{ url('tableLibraryModule') }}" class="dropdown-item">Tablet Library Module</a>
                        <a href="{{ url('team') }}" class="dropdown-item">Our team</a>
                        <a href="{{ url('systemImpact') }}" class="dropdown-item">System Impact</a>                                
                        <a href="{{ url('FAQs') }}" class="dropdown-item">FAQs</a>
                        <a href="{{ url('404') }}" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="{{ url('contact') }}" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
            </div>
            <a href="{{ url('get_started') }}" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Get Started</a>
        </div>
    </nav>
</div>
<!-- Navbar & Hero End -->

<script>
    const buttons = document.querySelectorAll('#buttonGroup .btn');

    buttons.forEach(btn => {
      btn.addEventListener('click', () => {
        buttons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
      });
    });
  </script>

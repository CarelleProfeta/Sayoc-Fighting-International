<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            {{-- <img src="assets/img/SFI_logo.jpg" alt=""> --}}
            {{-- <h1>UpConstruction<span>.</span></h1> --}}
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="/home" class="{{ request()->is('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
                <li><a href="/services" class="{{ request()->is('services') ? 'active' : '' }}">Services</a></li>
                <li><a href="/projects" class="{{ request()->is('projects') ? 'active' : '' }}">Projects</a></li>
                <li><a href="/blogs" class="{{ request()->is('blogs') ? 'active' : '' }}">Blog</a></li>
                <li><a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
            </ul>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- Contact Information Bar -->
<div class="contact-info-bar d-none d-lg-block">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-auto">
                <div class="contact-item me-4">
                    <i class="fas fa-phone me-1"></i>
                    <a href="tel:+254700123456" class="text-light text-decoration-none">+254 700 123 456</a>
                </div>
            </div>
            <div class="col-auto">
                <div class="contact-item me-4">
                    <i class="fas fa-map-marker-alt me-1"></i>
                    <span class="text-light">Nairobi CBD, Kenya</span>
                </div>
            </div>
            <div class="col-auto">
                <div class="contact-item">
                    <i class="fas fa-envelope me-1"></i>
                    <a href="mailto:info@adamsmagomaadvocates.com" class="text-light text-decoration-none">info@adamsmagomaadvocates.com</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('assets/images/logo_law.jpg') }}" alt="Adams & Magoma Advocates Logo" class="logo-image">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Mobile Contact Info (shown when navbar is expanded) -->
            <div class="navbar-contact-info-mobile d-lg-none mb-3">
                <div class="contact-item-mobile text-center mb-2">
                    <i class="fas fa-phone me-1"></i>
                    <a href="tel:+254700123456" class="text-light text-decoration-none">+254 700 123 456</a>
                </div>
                <div class="contact-item-mobile text-center mb-2">
                    <i class="fas fa-map-marker-alt me-1"></i>
                    <span class="text-light">Nairobi CBD, Kenya</span>
                </div>
                <div class="contact-item-mobile text-center">
                    <i class="fas fa-envelope me-1"></i>
                    <a href="mailto:info@adamsmagomaadvocates.com" class="text-light text-decoration-none">info@adamsmagomaadvocates.com</a>
                </div>
            </div>

            <ul class="navbar-nav me-auto justify-content-center">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        <span>Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                        <span>About</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('practice-areas*') ? 'active' : '' }}" href="{{ route('practice-areas') }}">
                        <span>Practice Areas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#attorneys">
                        <span>Attorneys</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimonials">
                        <span>Testimonials</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('blogs*') ? 'active' : '' }}" href="{{ route('blogs') }}">
                        <span>Blogs</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
                        <span>Contact</span>
                    </a>
                </li>
            </ul>
            <div class="d-flex">
                <a href="{{ route('contact') }}" class="btn btn-outline-light me-2">Schedule Consultation</a>
            </div>
        </div>
    </div>
</nav>

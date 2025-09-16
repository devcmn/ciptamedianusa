<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Ciptamedianusa</title>
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/home') }}">
                <img src="{{ asset('image/logo/logo-ciptakom-full.png') }}" alt="Ciptamedianusa Logo"
                    class="navbar-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('home') ? 'active' : '' }}"
                            href="{{ url('/home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('product') ? 'active' : '' }}"
                            href="{{ url('/product') }}">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('project') ? 'active' : '' }}"
                            href="{{ url('/project') }}">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('berlanggan') ? 'active' : '' }}"
                            href="{{ url('/berlanggan') }}">Berlangganan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('bantuan') ? 'active' : '' }}"
                            href="{{ url('/bantuan') }}">Bantuan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <img src="{{ asset('image/logo/logo-ciptakom-full.png') }}" alt="Ciptakom Logo" class="member-logo"
                        style="max-height: 40px; max-width: 340px; width: auto; height: auto; opacity: 0.8; object-fit: contain; margin-bottom: 20px; filter: brightness(0) invert(1);">
                    <p>Menyediakan solusi digital terbaik untuk kebutuhan rumah dan bisnis Anda. Kami berkomitmen untuk
                        memberikan
                        layanan berkualitas tinggi dengan pendekatan yang inovatif.</p>

                    <!-- Member of section -->
                    <div class="member-section mt-4">
                        <h6 class="mb-3" style="color: var(--secondary-color); font-weight: 600;">We Are Member of
                        </h6>
                        <div
                            class="member-logos d-flex flex-wrap align-items-center justify-content-start justify-content-sm-start gap-3">
                            <img src="{{ asset('image/member-pict/apjii-logo-white.png') }}" alt="APJII Member"
                                class="member-logo"
                                style="max-height: 40px; max-width: 120px; width: auto; height: auto; opacity: 0.8; object-fit: contain;">
                            <img src="{{ asset('image/member-pict/apjatel-logo-web-dark.png') }}" alt="APJATEL Member"
                                class="member-logo"
                                style="max-height: 40px; max-width: 120px; width: auto; height: auto; opacity: 0.8; object-fit: contain;">
                        </div>
                    </div>

                    {{-- <div class="social-icons mt-3">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div> --}}
                </div>
                <div class="col-lg-4 mb-4 ms-auto">
                    <h5 class="mb-4" style="color: var(--tertiary-color); font-weight: 700;">Kontak Kami</h5>
                    <p><i class="fas fa-map-marker-alt me-2" style="color: var(--primary-color);"></i> TOKOPEDIA CARE
                        TOWER, Jl. Lkr. Luar Barat No.1 LT. 10, RT.14/RW.4, Rw. Buaya, Kecamatan Cengkareng, Kota
                        Jakarta Barat, Daerah Khusus Ibukota Jakarta 11740</p>
                    <p><i class="fas fa-phone me-2" style="color: var(--primary-color);"></i>(021) 29863888</p>
                    <p><i class="fas fa-envelope me-2" style="color: var(--primary-color);"></i>
                        helpdesk@ciptamedianusa.net
                    </p>
                </div>
            </div>
            <hr class="mt-4 mb-4"
                style="background: linear-gradient(90deg, var(--primary-color) 0%, var(--secondary-color) 50%, var(--tertiary-color) 100%); height: 1px; opacity: 0.2;">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; {{ date('Y') }} Ciptamedianusa. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    @stack('scripts')

    <!-- Custom JS -->
    <script>
        // Add active class to current nav item
        document.addEventListener('DOMContentLoaded', function() {
            const currentLocation = location.pathname;
            const navLinks = document.querySelectorAll('.nav-link');

            navLinks.forEach(link => {
                if (link.getAttribute('href') === currentLocation) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>

</html>

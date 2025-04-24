@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1 class="display-4 fw-bold mb-4">Solusi Digital Terbaik untuk Anda</h1>
                    <p class="lead mb-4">Menyediakan layanan telekomunikasi dan digital yang handal untuk rumah, kantor, dan
                        tempat usaha.</p>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="{{ url('/product') }}" class="btn btn-primary px-4 py-2">Produk Kami</a>
                        <a href="{{ url('/bantuan') }}" class="btn btn-outline-primary px-4 py-2">Hubungi Kami</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img id="sceneryImage" src="{{ asset('ciputra-pict/ciputra-scenery-1.png') }}"
                        alt="Ciptamedianusa Digital Solutions" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Preview Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <h2 class="section-title">Layanan Kami</h2>
                    <p class="lead">Kami menyediakan berbagai layanan digital untuk memenuhi kebutuhan bisnis Anda</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card service-card h-100 p-4 text-center">
                        <div class="service-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h5 class="card-title">Web Development</h5>
                        <p class="card-text">Website profesional dengan desain responsif dan performa tinggi.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card service-card h-100 p-4 text-center">
                        <div class="service-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h5 class="card-title">Mobile Apps</h5>
                        <p class="card-text">Aplikasi mobile yang intuitif untuk Android dan iOS.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card service-card h-100 p-4 text-center">
                        <div class="service-icon">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <h5 class="card-title">UI/UX Design</h5>
                        <p class="card-text">Desain antarmuka yang menarik dan pengalaman pengguna yang optimal.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card service-card h-100 p-4 text-center">
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h5 class="card-title">Digital Marketing</h5>
                        <p class="card-text">Strategi pemasaran digital untuk meningkatkan visibilitas bisnis Anda.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="{{ url('/product') }}" class="btn btn-outline-primary px-4 py-2">Lihat Semua Layanan</a>
            </div>
        </div>
    </section>

    <!-- Projects Preview Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <h2 class="section-title">Project Terbaru</h2>
                    <p class="lead">Beberapa project terbaik yang telah kami kerjakan</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card project-card h-100">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Project 1">
                        <div class="card-body">
                            <h5 class="card-title">E-Commerce Platform</h5>
                            <p class="card-text">Website e-commerce dengan fitur lengkap untuk bisnis retail.</p>
                            <span class="badge bg-dark me-1">Web Development</span>
                            <span class="badge bg-dark">UI/UX Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card project-card h-100">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Project 2">
                        <div class="card-body">
                            <h5 class="card-title">Aplikasi Manajemen Inventori</h5>
                            <p class="card-text">Sistem manajemen inventori untuk perusahaan manufaktur.</p>
                            <span class="badge bg-dark me-1">Mobile App</span>
                            <span class="badge bg-dark">Web Development</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card project-card h-100">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Project 3">
                        <div class="card-body">
                            <h5 class="card-title">Kampanye Digital Marketing</h5>
                            <p class="card-text">Strategi pemasaran digital untuk brand fashion lokal.</p>
                            <span class="badge bg-dark me-1">Digital Marketing</span>
                            <span class="badge bg-dark">Content Creation</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="{{ url('/project') }}" class="btn btn-outline-primary px-4 py-2">Lihat Semua Project</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <h2 class="section-title">Testimoni Klien</h2>
                    <p class="lead">Apa kata klien kami tentang layanan yang kami berikan</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100 p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img src="https://via.placeholder.com/60x60" class="rounded-circle me-3" alt="Client 1">
                            <div>
                                <h5 class="mb-0">Ahmad Rizki</h5>
                                <p class="text-muted mb-0">CEO, PT Maju Bersama</p>
                            </div>
                        </div>
                        <p class="card-text">"Ciptamedianusa telah membantu kami mengembangkan website e-commerce yang
                            sangat meningkatkan penjualan online kami. Layanan mereka sangat profesional dan tepat waktu."
                        </p>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100 p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img src="https://via.placeholder.com/60x60" class="rounded-circle me-3" alt="Client 2">
                            <div>
                                <h5 class="mb-0">Siti Nurhaliza</h5>
                                <p class="text-muted mb-0">Marketing Director, Brand Fashion</p>
                            </div>
                        </div>
                        <p class="card-text">"Strategi digital marketing yang dirancang oleh tim Ciptamedianusa sangat
                            efektif dalam meningkatkan brand awareness kami. Sangat merekomendasikan layanan mereka!"</p>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100 p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img src="https://via.placeholder.com/60x60" class="rounded-circle me-3" alt="Client 3">
                            <div>
                                <h5 class="mb-0">Budi Santoso</h5>
                                <p class="text-muted mb-0">Owner, Restoran Nusantara</p>
                            </div>
                        </div>
                        <p class="card-text">"Aplikasi mobile yang dikembangkan oleh Ciptamedianusa telah memudahkan
                            pelanggan kami dalam memesan makanan. Antarmuka yang intuitif dan performa yang baik!"</p>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2 class="fw-bold">Siap untuk mengembangkan bisnis Anda?</h2>
                    <p class="lead mb-0">Konsultasikan kebutuhan digital Anda dengan tim ahli kami.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ url('/bantuan') }}" class="btn btn-light px-4 py-2">Hubungi Kami</a>
                    <a href="{{ url('/berlangganan') }}" class="btn btn-outline-light px-4 py-2 ms-2">Berlangganan</a>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Array of images
        const images = [
            "{{ asset('ciputra-pict/ciputra-scenery-1.png') }}",
            "{{ asset('ciputra-pict/ciputra-scenery-2.jpeg') }}",
            // "{{ asset('ciputra-pict/ciputra-scenery-3.png') }}",
            // "{{ asset('ciputra-pict/ciputra-scenery-4.png') }}"
        ];

        let currentIndex = 0;

        // Function to change image with fade effect
        function changeImage() {
            const imageElement = document.getElementById('sceneryImage');
            imageElement.style.opacity = 0; // Fade out

            setTimeout(() => {
                currentIndex = (currentIndex + 1) % images.length; // Loop back to the first image
                imageElement.src = images[currentIndex]; // Update image source
                imageElement.style.opacity = 1; // Fade in
            }, 1000); // Wait for 1 second before changing the image
        }

        // Change the image every 5 seconds
        setInterval(changeImage, 5000); // Change every 5 seconds
    </script>


@endsection

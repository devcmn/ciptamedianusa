@extends('layouts.app')

@section('title', 'Layanan')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-4">Layanan Kami</h1>
                    <p class="lead mb-0">Kami menyediakan berbagai layanan digital berkualitas tinggi untuk membantu bisnis
                        Anda berkembang di era digital.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <h2 class="section-title">Solusi Digital Komprehensif</h2>
                    <p class="lead">Layanan kami dirancang untuk memenuhi berbagai kebutuhan bisnis Anda</p>
                </div>
            </div>

            <!-- Web Development -->
            <div class="row align-items-center mb-5 pb-5 border-bottom">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h3 class="mb-4">Web Development</h3>
                    <p class="mb-4">Kami mengembangkan website profesional dengan desain responsif dan performa tinggi
                        yang sesuai dengan kebutuhan bisnis Anda. Dari website perusahaan sederhana hingga platform
                        e-commerce yang kompleks, tim kami siap membantu Anda.</p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Website Perusahaan</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> E-Commerce Platform</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Landing Page</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Web Application</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> CMS Development</li>
                    </ul>
                    <a href="{{ url('/bantuan') }}" class="btn btn-primary px-4 py-2">Konsultasi Gratis</a>
                </div>
                <div class="col-lg-6">
                    <img src="https://via.placeholder.com/600x400" alt="Web Development" class="img-fluid rounded shadow">
                </div>
            </div>

            <!-- Mobile Apps -->
            <div class="row align-items-center mb-5 pb-5 border-bottom flex-lg-row-reverse">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h3 class="mb-4">Mobile Apps Development</h3>
                    <p class="mb-4">Kami mengembangkan aplikasi mobile yang intuitif dan user-friendly untuk platform
                        Android dan iOS. Aplikasi kami dirancang dengan fokus pada pengalaman pengguna dan performa yang
                        optimal.</p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Native Android Apps</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Native iOS Apps</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Cross-Platform Apps</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> E-Commerce Apps</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Enterprise Mobile Solutions</li>
                    </ul>
                    <a href="{{ url('/bantuan') }}" class="btn btn-primary px-4 py-2">Konsultasi Gratis</a>
                </div>
                <div class="col-lg-6">
                    <img src="https://via.placeholder.com/600x400" alt="Mobile Apps Development"
                        class="img-fluid rounded shadow">
                </div>
            </div>

            <!-- UI/UX Design -->
            <div class="row align-items-center mb-5 pb-5 border-bottom">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h3 class="mb-4">UI/UX Design</h3>
                    <p class="mb-4">Kami menciptakan desain antarmuka yang menarik dan pengalaman pengguna yang optimal
                        untuk website dan aplikasi mobile. Desain kami berfokus pada kegunaan, aksesibilitas, dan estetika.
                    </p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> User Research</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Wireframing & Prototyping</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> UI Design</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> UX Design</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Usability Testing</li>
                    </ul>
                    <a href="{{ url('/bantuan') }}" class="btn btn-primary px-4 py-2">Konsultasi Gratis</a>
                </div>
                <div class="col-lg-6">
                    <img src="https://via.placeholder.com/600x400" alt="UI/UX Design" class="img-fluid rounded shadow">
                </div>
            </div>

            <!-- Digital Marketing -->
            <div class="row align-items-center mb-5 pb-5 border-bottom flex-lg-row-reverse">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h3 class="mb-4">Digital Marketing</h3>
                    <p class="mb-4">Kami menyediakan strategi pemasaran digital yang komprehensif untuk meningkatkan
                        visibilitas online bisnis Anda. Dari SEO hingga kampanye media sosial, kami membantu Anda mencapai
                        target audiens Anda.</p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Search Engine Optimization (SEO)
                        </li>
                        <li class="mb-2"><i
                                class="fas fa  Search Engine Optimization (SEO)</li>
                    <li class="mb-2"><i
                                    class="fas fa-check me-2 text-primary"></i> Social Media Marketing</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Content Marketing</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Email Marketing</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Pay-Per-Click (PPC) Advertising
                        </li>
                    </ul>
                    <a href="{{ url('/bantuan') }}" class="btn btn-primary px-4 py-2">Konsultasi Gratis</a>
                </div>
                <div class="col-lg-6">
                    <img src="https://via.placeholder.com/600x400" alt="Digital Marketing" class="img-fluid rounded shadow">
                </div>
            </div>

            <!-- Graphic Design -->
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h3 class="mb-4">Graphic Design</h3>
                    <p class="mb-4">Kami menyediakan layanan desain grafis profesional untuk kebutuhan branding dan
                        marketing bisnis Anda. Dari logo hingga materi promosi, kami membantu Anda menciptakan identitas
                        visual yang kuat.</p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Logo Design</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Brand Identity</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Marketing Materials</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Social Media Graphics</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Packaging Design</li>
                    </ul>
                    <a href="{{ url('/bantuan') }}" class="btn btn-primary px-4 py-2">Konsultasi Gratis</a>
                </div>
                <div class="col-lg-6">
                    <img src="https://via.placeholder.com/600x400" alt="Graphic Design" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-title text-center">Paket Layanan</h2>
                    <p class="lead">Pilih paket layanan yang sesuai dengan kebutuhan bisnis Anda</p>
                </div>
            </div>
            <div class="row">
                <!-- Basic Package -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body p-5">
                            <h5 class="card-title text-center mb-4">Basic</h5>
                            <h2 class="text-center mb-4">Rp 5.000.000</h2>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Website Responsif</li>
                                <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> 5 Halaman</li>
                                <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Form Kontak</li>
                                <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> SEO Dasar</li>
                                <li class="mb-2 text-muted"><i class="fas fa-times me-2"></i> Mobile App</li>
                                <li class="mb-2 text-muted"><i class="fas fa-times me-2"></i> Digital Marketing</li>
                            </ul>
                            <div class="text-center">
                                <a href="{{ url('/berlangganan') }}" class="btn btn-outline-primary px-4 py-2 w-100">Pilih
                                    Paket</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Standard Package -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-primary">
                        <div class="card-body p-5">
                            <span class="badge bg-primary position-absolute top-0 end-0 mt-3 me-3">Popular</span>
                            <h5 class="card-title text-center mb-4">Standard</h5>
                            <h2 class="text-center mb-4">Rp 10.000.000</h2>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Website Responsif</li>
                                <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> 10 Halaman</li>
                                <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> CMS Integration</li>
                                <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> SEO Optimization</li>
                                <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Social Media Integration
                                </li>
                                <li class="mb-2 text-muted"><i class="fas fa-times me-2"></i> Mobile App</li>
                            </ul>
                            <div class="text-center">
                                <a href="{{ url('/berlangganan') }}" class="btn btn-primary px-4 py-2 w-100">Pilih
                                    Paket</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Premium Package -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body p-5">
                            <h5 class="card-title text-center mb-4">Premium</h5>
                            <h2 class="text-center mb-4">Rp 20.000.000</h2>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Website Responsif</li>
                                <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Halaman Tak Terbatas
                                </li>
                                <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> E-Commerce Integration
                                </li>
                                <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> SEO Advanced</li>
                                <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Mobile App (Android &
                                    iOS)</li>
                                <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Digital Marketing
                                    Campaign</li>
                            </ul>
                            <div class="text-center">
                                <a href="{{ url('/berlangganan') }}" class="btn btn-outline-primary px-4 py-2 w-100">Pilih
                                    Paket</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <p>Butuh paket khusus? <a href="{{ url('/bantuan') }}" class="text-primary">Hubungi kami</a> untuk
                        konsultasi.</p>
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
@endsection

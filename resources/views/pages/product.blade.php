@extends('layouts.app')

@section('title', 'Layanan')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class=" section-title display-4 fw-bold mb-4">Layanan Kami</h1>
                    <p class="lead mb-0">Kami menawarkan solusi digital terdepan untuk mendukung pertumbuhan bisnis Anda di
                        era digital yang kompetitif.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-5">
        <div class="container">

            <!-- Triple Play -->
            <div class="row align-items-center mb-5 pb-5 border-bottom">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h3 class="mb-4">Triple Play</h3>
                    <p class="mb-4">Nikmati layanan Internet, TV, dan Telepon dalam satu paket hemat untuk kebutuhan
                        komunikasi Anda.</p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Internet Berkecepatan Tinggi</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Saluran TV Beragam</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Telepon Jernih & Stabil</li>
                    </ul>
                    <a href="{{ url('/berlanggan') }}" class="btn btn-primary px-4 py-2">Berlangganan Sekarang</a>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('image/illustration/watch-tv.svg') }}" alt="Triple Play" class="img-fluid rounded">
                </div>
            </div>

            <!-- Service -->
            <div class="row align-items-center mb-5 pb-5 border-bottom flex-lg-row-reverse">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h3 class="mb-4">Layanan Konektivitas & Keamanan</h3>
                    <p class="mb-4">Kami menyediakan solusi teknologi untuk mendukung operasional Anda dengan konektivitas
                        cepat dan sistem keamanan terpercaya.</p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Internet Berkecepatan Tinggi</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Sistem Telepon Aman</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Jaringan WiFi Stabil</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Pengawasan CCTV</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Solusi Smart Home, Building, &
                            Parking</li>
                    </ul>
                    <a href="{{ url('/berlanggan') }}" class="btn btn-primary px-4 py-2">Berlangganan Sekarang</a>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('image/illustration/wifi-laptop.svg') }}" alt="Service" class="img-fluid rounded">
                </div>
            </div>

            <!-- Smart Life Style -->
            <div class="row align-items-center mb-5 pb-5 border-bottom">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h3 class="mb-4">Smart Lifestyle</h3>
                    <p class="mb-4">Tingkatkan kenyamanan hidup Anda dengan teknologi otomatisasi rumah pintar yang modern
                        dan efisien.</p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Automatic Lamp Controller</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Automatic AC Controller</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Automatic TV Controller</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Automatic Curtain Controller</li>
                    </ul>
                    <a href="{{ url('/berlanggan') }}" class="btn btn-primary px-4 py-2">Berlangganan Sekarang</a>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('image/illustration/smart-home.svg') }}" alt="Smart Life Style"
                        class="img-fluid rounded">
                </div>
            </div>

            <!-- Smart Green -->
            <div class="row align-items-center mb-5 pb-5 border-bottom flex-lg-row-reverse">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h3 class="mb-4">Smart Green</h3>
                    <p class="mb-4">Solusi hemat energi untuk rumah Anda dengan teknologi pengontrol listrik otomatis dan
                        keamanan cerdas.</p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Automatic Electrical Controller
                            “Saving Home Energy Cost” Smart Security</li>
                    </ul>
                    <a href="{{ url('/berlanggan') }}" class="btn btn-primary px-4 py-2">Berlangganan Sekarang</a>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('image/illustration/electric.svg') }}" alt="Smart Green" class="img-fluid rounded">
                </div>
            </div>

            <!-- Smart Socket -->
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h3 class="mb-4">Smart Socket</h3>
                    <p class="mb-4">Tingkatkan keamanan rumah Anda dengan perangkat cerdas yang mendeteksi ancaman dan
                        mempermudah pengawasan.</p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Panic Button</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Smoke & Gas Detector</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Door & Window Sensor</li>
                        <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Motion Detector</li>
                    </ul>
                    <a href="{{ url('/berlanggan') }}" class="btn btn-primary px-4 py-2">Berlangganan Sekarang</a>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('image/illustration/safety.svg') }}" alt="Smart Socket" class="img-fluid rounded ">
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    {{-- @include('product.pricing') --}}

    <!-- CTA Section -->
    @include('footer.cta')
@endsection

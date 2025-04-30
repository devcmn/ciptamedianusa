@extends('layouts.app')

@section('title', 'Bantuan')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-4">Hubungi Kami</h1>
                    <p class="lead mb-0">Kami siap membantu Anda. Silakan hubungi kami untuk konsultasi atau pertanyaan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info Section -->
    {{-- <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="card h-100 border-0 shadow p-4">
                        <div class="text-center mb-4">
                            <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center"
                                style="width: 80px; height: 80px;">
                                <i class="fas fa-map-marker-alt fa-2x text-primary"></i>
                            </div>
                            <h4 class="mt-4">Alamat Kami</h4>
                            <p class="text-muted">Jl. Contoh No. 123, Jakarta, Indonesia</p>
                            <a href="https://maps.google.com" target="_blank" class="btn btn-outline-primary">Lihat di
                                Peta</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="card h-100 border-0 shadow p-4">
                        <div class="text-center mb-4">
                            <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center"
                                style="width: 80px; height: 80px;">
                                <i class="fas fa-phone-alt fa-2x text-primary"></i>
                            </div>
                            <h4 class="mt-4">Telepon</h4>
                            <p class="text-muted">+62 123 4567 890</p>
                            <a href="tel:+6281234567890" class="btn btn-outline-primary">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow p-4">
                        <div class="text-center mb-4">
                            <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center"
                                style="width: 80px; height: 80px;">
                                <i class="fas fa-envelope fa-2x text-primary"></i>
                            </div>
                            <h4 class="mt-4">Email</h4>
                            <p class="text-muted">info@ciptamedianusa.com</p>
                            <a href="mailto:info@ciptamedianusa.com" class="btn btn-outline-primary">Kirim Email</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Contact Form Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card border-0 shadow">
                        <div class="card-body p-5">
                            <div class="col-lg-8 mx-auto text-center">
                                <h2 class="card-title text-center">Kirim Pesan</h2>
                                <p class="text-center mb-4">Isi form di bawah ini untuk mengirim pesan kepada kami</p>
                            </div>
                            <form>
                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <label for="name" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Masukkan nama lengkap">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Masukkan email">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="subject" class="form-label">Subjek</label>
                                    <input type="text" class="form-control" id="subject"
                                        placeholder="Masukkan subjek pesan">
                                </div>

                                <div class="mb-3">
                                    <label for="message" class="form-label">Pesan</label>
                                    <textarea class="form-control" id="message" rows="5" placeholder="Tulis pesan Anda di sini"></textarea>
                                </div>

                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="privacy">
                                    <label class="form-check-label" for="privacy">Saya menyetujui <a
                                            href="#">kebijakan privasi</a> yang berlaku</label>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary px-5 py-2 mt-4">Kirim Pesan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    {{-- @include('pages.bantuan.faq') --}}

    <!-- Map Section -->
    {{-- <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card border-0 shadow">
                        <div class="card-body p-0">
                            <!-- Replace with actual Google Maps embed code -->
                            <div class="ratio ratio-16x9">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.685421436385!2d106.72768317469632!3d-6.172856193814484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3fc1493a4bd%3A0x49120a6f50ac01eb!2sPT%20Ciptakom%20Media%20Nusa!5e0!3m2!1sen!2sid!4v1745487592736!5m2!1sen!2sid"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- CTA Section -->
    @include('pages.footer.cta')
@endsection

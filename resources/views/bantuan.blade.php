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
    <section class="py-5">
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
    </section>

    <!-- Contact Form Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-title text-center">Kirim Pesan</h2>
                    <p class="lead">Isi form di bawah ini untuk mengirim pesan kepada kami</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card border-0 shadow">
                        <div class="card-body p-5">
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
                                    <button type="submit" class="btn btn-primary px-5 py-2">Kirim Pesan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-title text-center">Pertanyaan Umum</h2>
                    <p class="lead">Beberapa pertanyaan yang sering ditanyakan tentang layanan kami</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="accordion" id="faqAccordion">
                        <!-- FAQ Item 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Apa saja layanan yang ditawarkan oleh Ciptamedianusa?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Ciptamedianusa menawarkan berbagai layanan digital termasuk Web Development, Mobile Apps
                                    Development, UI/UX Design, Digital Marketing, dan Graphic Design. Kami menyediakan
                                    solusi digital komprehensif untuk membantu bisnis Anda tumbuh dan berkembang di era
                                    digital.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Berapa biaya untuk mengembangkan sebuah website atau aplikasi?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Biaya pengembangan website atau aplikasi bervariasi tergantung pada kompleksitas, fitur,
                                    dan kebutuhan spesifik Anda. Kami menawarkan berbagai paket mulai dari Rp 5.000.000
                                    untuk website sederhana hingga Rp 20.000.000+ untuk solusi yang lebih kompleks. Silakan
                                    hubungi kami untuk konsultasi dan penawaran yang disesuaikan dengan kebutuhan Anda.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Berapa lama waktu yang dibutuhkan untuk menyelesaikan sebuah proyek?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Waktu pengerjaan proyek bervariasi tergantung pada kompleksitas dan fitur yang
                                    diinginkan. Untuk website sederhana, kami biasanya membutuhkan waktu 2-4 minggu. Untuk
                                    website yang lebih kompleks seperti e-commerce atau aplikasi web, kami membutuhkan waktu
                                    1-3 bulan. Untuk aplikasi mobile, waktu pengembangan biasanya berkisar antara 2-6 bulan.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Bagaimana proses kerja Ciptamedianusa?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Proses kerja kami dimulai dengan konsultasi awal untuk memahami kebutuhan Anda. Kemudian
                                    kami akan membuat proposal dan rencana proyek. Setelah persetujuan, kami akan mulai
                                    dengan tahap desain, dilanjutkan dengan pengembangan, pengujian, dan akhirnya
                                    peluncuran. Kami juga menyediakan dukungan pasca-peluncuran untuk memastikan semua
                                    berjalan dengan baik.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Apakah Ciptamedianusa menyediakan layanan pemeliharaan?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Ya, kami menawarkan layanan pemeliharaan untuk website dan aplikasi yang kami
                                    kembangkan. Layanan ini mencakup update konten, backup, keamanan, dan dukungan teknis.
                                    Kami juga menyediakan paket pemeliharaan bulanan yang dapat disesuaikan dengan kebutuhan
                                    Anda.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card border-0 shadow">
                        <div class="card-body p-0">
                            <!-- Replace with actual Google Maps embed code -->
                            <div class="ratio ratio-16x9">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6664463015!2d106.82496231476884!3d-6.175392395529647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sMonumen%20Nasional!5e0!3m2!1sen!2sid!4v1650123456789!5m2!1sen!2sid"
                                    allowfullscreen="" loading="lazy"></iframe>
                            </div>
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
                    <a href="tel:+6281234567890" class="btn btn-light px-4 py-2">Hubungi Kami</a>
                    <a href="{{ url('/berlangganan') }}" class="btn btn-outline-light px-4 py-2 ms-2">Berlangganan</a>
                </div>
            </div>
        </div>
    </section>
@endsection

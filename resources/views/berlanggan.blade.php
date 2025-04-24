@extends('layouts.app')

@section('title', 'Berlangganan')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-4">Berlangganan Layanan Kami</h1>
                    <p class="lead mb-0">Pilih paket layanan yang sesuai dengan kebutuhan bisnis Anda</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-title text-center">Paket Layanan</h2>
                    <p class="lead">Kami menawarkan berbagai paket layanan untuk memenuhi kebutuhan bisnis Anda</p>
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
                                <button class="btn btn-outline-primary px-4 py-2 w-100" data-bs-toggle="modal"
                                    data-bs-target="#subscribeModal" data-package="Basic">Pilih Paket</button>
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
                                <button class="btn btn-primary px-4 py-2 w-100" data-bs-toggle="modal"
                                    data-bs-target="#subscribeModal" data-package="Standard">Pilih Paket</button>
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
                                <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Halaman Tak Terbatas</li>
                                <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> E-Commerce Integration
                                </li>
                                <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> SEO Advanced</li>
                                <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Mobile App (Android & iOS)
                                </li>
                                <li class="mb-2"><i class="fas fa-check me-2 text-primary"></i> Digital Marketing Campaign
                                </li>
                            </ul>
                            <div class="text-center">
                                <button class="btn btn-outline-primary px-4 py-2 w-100" data-bs-toggle="modal"
                                    data-bs-target="#subscribeModal" data-package="Premium">Pilih Paket</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Subscription Form Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card border-0 shadow">
                        <div class="card-body p-5">
                            <h3 class="card-title text-center mb-4">Form Berlangganan</h3>
                            <p class="text-center mb-4">Isi form di bawah ini untuk berlangganan layanan kami atau
                                konsultasikan kebutuhan khusus Anda</p>

                            <form>
                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <label for="firstName" class="form-label">Nama Depan</label>
                                        <input type="text" class="form-control" id="firstName"
                                            placeholder="Masukkan nama depan">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastName" class="form-label">Nama Belakang</label>
                                        <input type="text" class="form-control" id="lastName"
                                            placeholder="Masukkan nama belakang">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="companyName" class="form-label">Nama Perusahaan</label>
                                    <input type="text" class="form-control" id="companyName"
                                        placeholder="Masukkan nama perusahaan">
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Masukkan email">
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">Nomor Telepon</label>
                                    <input type="tel" class="form-control" id="phone"
                                        placeholder="Masukkan nomor telepon">
                                </div>

                                <div class="mb-3">
                                    <label for="package" class="form-label">Paket Layanan</label>
                                    <select class="form-select" id="package">
                                        <option selected disabled>Pilih paket layanan</option>
                                        <option value="basic">Basic - Rp 5.000.000</option>
                                        <option value="standard">Standard - Rp 10.000.000</option>
                                        <option value="premium">Premium - Rp 20.000.000</option>
                                        <option value="custom">Paket Khusus</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="message" class="form-label">Kebutuhan Khusus</label>
                                    <textarea class="form-control" id="message" rows="4"
                                        placeholder="Jelaskan kebutuhan khusus Anda (opsional)"></textarea>
                                </div>

                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="terms">
                                    <label class="form-check-label" for="terms">Saya menyetujui <a
                                            href="#">syarat dan ketentuan</a> yang berlaku</label>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary px-5 py-2">Kirim Permintaan</button>
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
                                    Berapa lama waktu yang dibutuhkan untuk menyelesaikan sebuah website?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Waktu pengerjaan website bervariasi tergantung pada kompleksitas dan fitur yang
                                    diinginkan. Untuk website sederhana, kami biasanya membutuhkan waktu 2-4 minggu. Untuk
                                    website yang lebih kompleks seperti e-commerce atau aplikasi web, kami membutuhkan waktu
                                    1-3 bulan.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Apakah saya bisa mengubah paket layanan di tengah jalan?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Ya, Anda dapat mengupgrade paket layanan Anda kapan saja. Namun, untuk downgrade paket,
                                    hal ini hanya dapat dilakukan setelah kontrak berakhir. Silakan hubungi tim kami untuk
                                    informasi lebih lanjut.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Apakah ada biaya pemeliharaan bulanan setelah website selesai?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Kami menawarkan paket pemeliharaan bulanan opsional yang mencakup update konten, backup,
                                    keamanan, dan dukungan teknis. Biaya pemeliharaan bervariasi tergantung pada kebutuhan
                                    spesifik Anda. Anda juga dapat memilih untuk mengelola website Anda sendiri tanpa biaya
                                    pemeliharaan.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Apakah saya akan mendapatkan domain dan hosting?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Ya, semua paket kami mencakup domain dan hosting untuk tahun pertama. Setelah itu, Anda
                                    dapat memperpanjang layanan domain dan hosting melalui kami atau mengelolanya sendiri.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Bagaimana proses pembayaran?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Kami biasanya meminta uang muka sebesar 50% dari total biaya untuk memulai proyek, dan
                                    50% sisanya dibayarkan setelah proyek selesai. Untuk proyek besar, kami dapat mengatur
                                    jadwal pembayaran bertahap. Kami menerima pembayaran melalui transfer bank, kartu
                                    kredit, dan e-wallet.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Subscribe Modal -->
    <div class="modal fade" id="subscribeModal" tabindex="-1" aria-labelledby="subscribeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="subscribeModalLabel">Pilih Paket</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Anda telah memilih paket <span id="selectedPackage" class="fw-bold">Basic</span>. Silakan isi form
                        berlangganan untuk melanjutkan.</p>
                    <p>Atau hubungi kami di <a href="tel:+6281234567890">+62 812 3456 7890</a> untuk konsultasi lebih
                        lanjut.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <a href="#subscription-form" class="btn btn-primary" data-bs-dismiss="modal">Isi Form</a>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for Modal -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const subscribeModal = document.getElementById('subscribeModal');
            const selectedPackage = document.getElementById('selectedPackage');

            subscribeModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                const package = button.getAttribute('data-package');
                selectedPackage.textContent = package;

                // Auto-select the package in the form
                const packageSelect = document.getElementById('package');
                for (let i = 0; i < packageSelect.options.length; i++) {
                    if (packageSelect.options[i].text.startsWith(package)) {
                        packageSelect.selectedIndex = i;
                        break;
                    }
                }
            });
        });
    </script>
@endsection

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
    {{-- <section class="py-5">
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
    </section> --}}

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
                                    <input type="email" class="form-control" id="email" placeholder="Masukkan email">
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
                                    <textarea class="form-control" id="message" rows="4" placeholder="Jelaskan kebutuhan khusus Anda (opsional)"></textarea>
                                </div>

                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="terms">
                                    <label class="form-check-label" for="terms">Saya menyetujui <a href="#">syarat
                                            dan ketentuan</a> yang berlaku</label>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary px-5 py-2 mt-4">Kirim
                                        Permintaan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    {{-- @include('berlanggan.faq') --}}

    <!-- Subscribe Modal -->
    <div class="modal fade" id="subscribeModal" tabindex="-1" aria-labelledby="subscribeModalLabel" aria-hidden="true">
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

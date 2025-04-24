@extends('layouts.app')

@section('title', 'Project')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-4">Portfolio Project</h1>
                    <p class="lead mb-0">Beberapa project terbaik yang telah kami kerjakan untuk klien kami</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Filter Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <div class="btn-group" role="group" aria-label="Project filter">
                        <button type="button" class="btn btn-outline-primary active" data-filter="all">Semua</button>
                        <button type="button" class="btn btn-outline-primary" data-filter="web">Web Development</button>
                        <button type="button" class="btn btn-outline-primary" data-filter="mobile">Mobile Apps</button>
                        <button type="button" class="btn btn-outline-primary" data-filter="ui">UI/UX Design</button>
                        <button type="button" class="btn btn-outline-primary" data-filter="marketing">Digital
                            Marketing</button>
                    </div>
                </div>
            </div>

            <div class="row" id="project-grid">
                <!-- Project 1 -->
                <div class="col-md-6 col-lg-4 mb-4 project-item" data-category="web">
                    <div class="card project-card h-100">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="E-Commerce Platform">
                        <div class="card-body">
                            <h5 class="card-title">E-Commerce Platform</h5>
                            <p class="card-text">Website e-commerce dengan fitur lengkap untuk bisnis retail.</p>
                            <span class="badge bg-dark me-1">Web Development</span>
                            <span class="badge bg-dark">UI/UX Design</span>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#projectModal1">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="col-md-6 col-lg-4 mb-4 project-item" data-category="mobile">
                    <div class="card project-card h-100">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top"
                            alt="Aplikasi Manajemen Inventori">
                        <div class="card-body">
                            <h5 class="card-title">Aplikasi Manajemen Inventori</h5>
                            <p class="card-text">Sistem manajemen inventori untuk perusahaan manufaktur.</p>
                            <span class="badge bg-dark me-1">Mobile App</span>
                            <span class="badge bg-dark">Web Development</span>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#projectModal2">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="col-md-6 col-lg-4 mb-4 project-item" data-category="marketing">
                    <div class="card project-card h-100">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top"
                            alt="Kampanye Digital Marketing">
                        <div class="card-body">
                            <h5 class="card-title">Kampanye Digital Marketing</h5>
                            <p class="card-text">Strategi pemasaran digital untuk brand fashion lokal.</p>
                            <span class="badge bg-dark me-1">Digital Marketing</span>
                            <span class="badge bg-dark">Content Creation</span>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#projectModal3">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="col-md-6 col-lg-4 mb-4 project-item" data-category="ui">
                    <div class="card project-card h-100">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top"
                            alt="Redesign UI/UX Aplikasi Fintech">
                        <div class="card-body">
                            <h5 class="card-title">Redesign UI/UX Aplikasi Fintech</h5>
                            <p class="card-text">Peningkatan pengalaman pengguna untuk aplikasi fintech.</p>
                            <span class="badge bg-dark me-1">UI/UX Design</span>
                            <span class="badge bg-dark">Mobile App</span>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#projectModal4">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="col-md-6 col-lg-4 mb-4 project-item" data-category="web">
                    <div class="card project-card h-100">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Portal Berita Online">
                        <div class="card-body">
                            <h5 class="card-title">Portal Berita Online</h5>
                            <p class="card-text">Website portal berita dengan sistem manajemen konten yang canggih.</p>
                            <span class="badge bg-dark me-1">Web Development</span>
                            <span class="badge bg-dark">CMS</span>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#projectModal5">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Project 6 -->
                <div class="col-md-6 col-lg-4 mb-4 project-item" data-category="mobile">
                    <div class="card project-card h-100">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top"
                            alt="Aplikasi Delivery Makanan">
                        <div class="card-body">
                            <h5 class="card-title">Aplikasi Delivery Makanan</h5>
                            <p class="card-text">Aplikasi mobile untuk pemesanan dan pengiriman makanan.</p>
                            <span class="badge bg-dark me-1">Mobile App</span>
                            <span class="badge bg-dark">UI/UX Design</span>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#projectModal6">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <button class="btn btn-outline-primary px-4 py-2" id="load-more">Muat Lebih Banyak</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Modals -->
    <!-- Project Modal 1 -->
    <div class="modal fade" id="projectModal1" tabindex="-1" aria-labelledby="projectModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="projectModal1Label">E-Commerce Platform</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <img src="https://via.placeholder.com/600x400" class="img-fluid rounded"
                                alt="E-Commerce Platform">
                        </div>
                        <div class="col-md-6">
                            <h5>Tentang Project</h5>
                            <p>Website e-commerce dengan fitur lengkap untuk bisnis retail. Platform ini memungkinkan
                                pemilik bisnis untuk mengelola produk, pesanan, dan pelanggan dengan mudah.</p>

                            <h5 class="mt-4">Teknologi yang Digunakan</h5>
                            <ul>
                                <li>Laravel</li>
                                <li>MySQL</li>
                                <li>Bootstrap</li>
                                <li>JavaScript</li>
                                <li>Payment Gateway Integration</li>
                            </ul>

                            <h5 class="mt-4">Hasil</h5>
                            <p>Peningkatan penjualan online sebesar 150% dalam 3 bulan pertama setelah peluncuran.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Project Modal 2 -->
    <div class="modal fade" id="projectModal2" tabindex="-1" aria-labelledby="projectModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="projectModal2Label">Aplikasi Manajemen Inventori</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <img src="https://via.placeholder.com/600x400" class="img-fluid rounded"
                                alt="Aplikasi Manajemen Inventori">
                        </div>
                        <div class="col-md-6">
                            <h5>Tentang Project</h5>
                            <p>Sistem manajemen inventori untuk perusahaan manufaktur. Aplikasi ini membantu perusahaan
                                melacak stok, mengelola pesanan, dan mengoptimalkan rantai pasokan.</p>

                            <h5 class="mt-4">Teknologi yang Digunakan</h5>
                            <ul>
                                <li>React Native</li>
                                <li>Node.js</li>
                                <li>MongoDB</li>
                                <li>Express.js</li>
                                <li>RESTful API</li>
                            </ul>

                            <h5 class="mt-4">Hasil</h5>
                            <p>Pengurangan kesalahan inventori sebesar 85% dan peningkatan efisiensi operasional sebesar
                                40%.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Project Modals (3-6) would be similar to the above -->

    <!-- CTA Section -->
    <section class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2 class="fw-bold">Tertarik untuk bekerja sama?</h2>
                    <p class="lead mb-0">Diskusikan project Anda dengan tim ahli kami.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ url('/bantuan') }}" class="btn btn-light px-4 py-2">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript for Project Filtering -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Project filtering
            const filterButtons = document.querySelectorAll('[data-filter]');
            const projectItems = document.querySelectorAll('.project-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const filterValue = this.getAttribute('data-filter');

                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));

                    // Add active class to clicked button
                    this.classList.add('active');

                    // Show/hide projects based on filter
                    projectItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category') ===
                            filterValue) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });

            // Load more functionality (simplified for UI demo)
            const loadMoreBtn = document.getElementById('load-more');
            loadMoreBtn.addEventListener('click', function() {
                // In a real implementation, this would load more projects from the server
                // For this UI demo, we'll just show a message
                this.textContent = 'Tidak ada project lagi';
                this.disabled = true;
            });
        });
    </script>
@endsection

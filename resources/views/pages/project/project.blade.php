@extends('layouts.app')

@section('title', 'Project')

@section('content')
    <!-- Project Filter Section -->
    <section class="hero-section project-section py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h1 class="section-title display-4 fw-bold mb-4">Lokasi Project</h1>
                    <p class="lead mb-5">Filter project berdasarkan lokasi untuk melihat portfolio kami</p>

                    <div class="filter-container">
                        <button type="button" class="filter-btn active" data-filter="jabodetabek">
                            <span class="filter-text">Jabodetabek</span>
                        </button>
                        <button type="button" class="filter-btn" data-filter="luar-jabodetabek">
                            <span class="filter-text">Luar Jabodetabek</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="row project-grid" id="project-grid">
                <!-- Jabodetabek Project -->
                <div class="col-12 mb-4 project-item jabodetabek">
                    <div class="project-card">
                        <div class="map-container">
                            <img src="{{ asset('image/ciputra-pict/JABODETABEK.png') }}" alt="Jabodetabek Projects"
                                class="map-image">
                        </div>
                        <div class="project-info">
                            <h4>Jabodetabek</h4>
                            <p class="project-location"><i class="fas fa-map-marker-alt me-2"></i>Jakarta & Sekitarnya</p>
                        </div>
                    </div>
                </div>

                <!-- Luar Jabodetabek Project -->
                <div class="col-12 mb-4 project-item luar-jabodetabek hidden">
                    <div class="project-card">
                        <div class="map-container">
                            <img src="{{ asset('image/ciputra-pict/Luar-JABODETABEK.png') }}"
                                alt="Luar Jabodetabek Projects" class="map-image">
                        </div>
                        <div class="project-info">
                            <h4>Luar Jabodetabek</h4>
                            <p class="project-location"><i class="fas fa-map-marker-alt me-2"></i>Seluruh Indonesia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    @include('pages.footer.cta')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all filter buttons and project items
            const filterBtns = document.querySelectorAll('.filter-btn');
            const projectItems = document.querySelectorAll('.project-item');

            // Set initial state - show Jabodetabek by default
            projectItems.forEach(item => {
                if (item.classList.contains('jabodetabek')) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });

            // Add click event to filter buttons
            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterBtns.forEach(btn => btn.classList.remove('active'));

                    // Add active class to clicked button
                    this.classList.add('active');

                    // Get filter value
                    const filterValue = this.getAttribute('data-filter');

                    // Filter projects
                    projectItems.forEach(item => {
                        if (item.classList.contains(filterValue)) {
                            item.classList.remove('hidden');
                            setTimeout(() => {
                                item.style.opacity = '1';
                                item.style.transform = 'scale(1)';
                            }, 50);
                        } else {
                            item.style.opacity = '0';
                            item.style.transform = 'scale(0.8)';
                            setTimeout(() => {
                                item.classList.add('hidden');
                            }, 500);
                        }
                    });
                });
            });
        });
    </script>
@endsection

<section class="py-5">
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-6">
                <h2 class="section-title">Project Kami</h2>
                <p class="lead">Beberapa project yang bekerja sama dengan kami</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card project-card h-100">
                    <img src="{{ asset('image/ciputra-pict/ciputra-scenery-1.png') }}" class="card-img-top"
                        alt="Project 1">
                    <div class="card-body">
                        <h5 class="card-title">Ciputra International</h5>
                        <p class="card-text text-muted">Ciputra International menawarkan ruang hunian dan komersial
                            premium, menggabungkan gaya hidup modern dengan lokasi strategis di Jabodetabek.</p>
                        <span class="badge bg-primary me-1">Favorite</span>
                        <span class="badge bg-secondary">Jabodetabek</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card project-card h-100">
                    <img src="{{ asset('image/ciputra-pict/citra-living.jpg') }}" class="card-img-top" alt="Project 2">
                    <div class="card-body">
                        <h5 class="card-title">Citra Living Apartment</h5>
                        <p class="card-text text-muted">Citra Living Apartment menghadirkan hunian modern yang nyaman di
                            pusat Jabodetabek, dengan
                            fasilitas lengkap untuk mendukung gaya hidup urban Anda.</p>
                        <span class="badge bg-primary me-1">Favorite</span>
                        <span class="badge bg-secondary">Jabodetabek</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card project-card h-100">
                    <img src="{{ asset('image/ciputra-pict/bizpark.jpg') }}" class="card-img-top" alt="Project 3">
                    <div class="card-body">
                        <h5 class="card-title">BizPark Banjarmasin</h5>
                        <p class="card-text text-muted"> BizPark Banjarmasin menawarkan kawasan komersial strategis di
                            luar Jabodetabek, ideal untuk
                            bisnis dan investasi masa depan Anda.
                        </p>
                        <span class="badge bg-primary me-1">Favorite</span>
                        <span class="badge bg-secondary">Luar Jabodetabek</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ url('/project') }}" class="btn btn-outline-primary px-4 py-2">Lihat Semua Project</a>
        </div>
    </div>
</section>

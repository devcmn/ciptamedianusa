@extends('layouts.app')

@section('title', 'Berlangganan')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="section-title display-4 fw-bold mb-4">Berlangganan Layanan Kami</h1>
                    <p class="lead mb-5">Pilih paket layanan yang sesuai dengan kebutuhan bisnis Anda</p>
                </div>
            </div>
        </div>

        <!-- Subscription Form Section -->
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card border-0 shadow-sm bg-white-rounded">
                        <div class="card-body p-5">
                            <h3 class="card-title text-center mb-4">Form Berlangganan</h3>
                            <p class="text-center mb-4">Isi form di bawah ini untuk berlangganan layanan kami atau
                                konsultasikan kebutuhan khusus Anda</p>
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('berlanggan.store') }}">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label for="nama" class="form-label">Nama Pelanggan (Sesuai KTP/SIM) <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            placeholder="Masukkan nama" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="no_ktp" class="form-label">Nomor KTP/SIM <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="no_ktp" name="no_ktp"
                                        placeholder="Masukkan nomor KTP/SIM" required>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="no_telp" class="form-label">Nomor Telepon <span
                                                    class="text-danger">*</span></label>
                                            <input type="tel" class="form-control" id="no_telp" name="no_telp"
                                                placeholder="Masukkan nomor telepon" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email <span
                                                    class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Masukkan email" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="project" class="form-label">Lokasi Project <span
                                            class="text-danger">*</span></label>
                                    <select id="project" name="project" class="form-select select2" required>
                                        <option selected disabled value="">Pilih Project</option>
                                        @foreach ($projects as $project)
                                            <option value="{{ $project['name'] }}">{{ $project['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="layanan" class="form-label">Jenis Layanan <span
                                            class="text-danger">*</span></label>
                                    <select id="layanan" name="layanan" class="form-select select2" required>
                                        <option selected disabled value="">Pilih Jenis Layanan</option>
                                        <option value="Telkom - Internet, TV dan Telepon">Telkom - Internet, TV dan Telepon
                                        </option>
                                        <option value="Telkom - Internet dan TV">Telkom - Internet dan TV</option>
                                        <option value="Telkom - Internet dan Telepon">Telkom - Internet dan Telepon</option>
                                        <option value="Telkom - ASTINET">Telkom - ASTINET</option>
                                        <option value="Biznet - Broadband">Biznet - Broadband</option>
                                        <option value="Biznet - Dedicated">Biznet - Dedicated</option>
                                        <option value="CBN - Broadband">CBN - Broadband</option>
                                        <option value="CBN - Dedicated">CBN - Dedicated</option>
                                        <option value="Linknet - Broadband">Linknet - Broadband</option>
                                        <option value="Linknet - Dedicated">Linknet - Dedicated</option>
                                        <option value="Moratel - Broadband">Moratel - Broadband</option>
                                        <option value="Moratel - Dedicated">Moratel - Dedicated</option>
                                        <option value="OFON - Home">OFON - Home</option>
                                        <option value="OFON - Small Business">OFON - Small Business</option>
                                        <option value="OFON - Lite Biz">OFON - Lite Biz</option>
                                        <option value="OFON - Lite Biz">OFON - Lite Biz</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat Pemasangan <span
                                            class="text-danger">*</span></label>
                                    <textarea class="form-control" name="alamat" id="alamat" placeholder="Tuliskan alamat lengkap anda" required></textarea>
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

    <!-- JavaScript for Modal -->
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#project').select2();
                $('#layanan').select2();
            });
        </script>
    @endpush
@endsection

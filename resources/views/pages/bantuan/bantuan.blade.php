@extends('layouts.app')

@section('title', 'Bantuan')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="section-title display-4 fw-bold mb-4">Hubungi Kami</h1>
                    <p class="lead mb-5">Kami siap membantu Anda. Silakan hubungi kami untuk konsultasi atau pertanyaan.</p>
                </div>
            </div>
        </div>

        <!-- Contact Form Section -->
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card border-0 shadow-sm bg-white-rounded">
                        <div class="card-body p-5">
                            <div class="col-lg-8 mx-auto text-center">
                                <h2 class="card-title text-center">Kirim Pesan</h2>
                                <p class="text-center mb-4">Isi form di bawah ini untuk mengirim pesan kepada kami</p>
                            </div>
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
                            <form method="POST" action="{{ route('bantuan.store') }}">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <label for="id_cmn" class="form-label">
                                            ID CMN
                                        </label>
                                        <input type="text" class="form-control" id="id_cmn" name="id_cmn"
                                            placeholder="Masukkan ID CMN">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nama" class="form-label">
                                            Nama <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            placeholder="Masukkan nama lengkap" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="no_telp" class="form-label">
                                        Nomor Telepon <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="no_telp" name="no_telp"
                                        placeholder="Masukkan nomor telepon" required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">
                                        Email <span class="text-danger">*</span>
                                    </label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Masukkan alamat email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="alamat" class="form-label">
                                        Alamat <span class="text-danger">*</span>
                                    </label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="5" placeholder="Tulis alamat Anda di sini"
                                        required></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="kategori" class="form-label">
                                        Kategori <span class="text-danger">*</span>
                                    </label>
                                    <select id="kategori" name="kategori" class="form-select select2" required>
                                        <option disabled selected value="">Pilih Kategori</option>
                                        <option value="Informasi - Downgrade/Upgrade">Informasi - Downgrade/Upgrade</option>
                                        <option value="Informasi - Berhenti Berlangganan">Informasi - Berhenti Berlangganan
                                        </option>
                                        <option value="Teknis - Gangguan TV">Teknis - Gangguan TV</option>
                                        <option value="Teknis - Gangguan Internet">Teknis - Gangguan Internet</option>
                                        <option value="Teknis - Gangguan Telepon">Teknis - Gangguan Telepon</option>
                                        <option value="Billing - Invoice Kategori">Billing - Invoice Kategori</option>
                                        <option value="Billing - Pembayaran">Billing - Pembayaran</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="pesan" class="form-label">
                                        Pesan <span class="text-danger">*</span>
                                    </label>
                                    <textarea class="form-control" id="pesan" name="pesan" rows="5" placeholder="Tulis pesan Anda di sini"
                                        required></textarea>
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

    <!-- CTA Section -->
    @include('pages.footer.cta')
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#kategori').select2();
            });
        </script>
    @endpush
@endsection

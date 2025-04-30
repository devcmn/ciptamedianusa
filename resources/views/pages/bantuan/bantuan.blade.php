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

    <!-- CTA Section -->
    @include('pages.footer.cta')
@endsection

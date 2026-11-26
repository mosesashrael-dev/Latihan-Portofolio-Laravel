@extends('layouts.app')

@section('title', 'Contact - Portofolio Web')

@section('content')
<section id="Contact" class="py-5 mt-5 bg-contact">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="section-title font-weight-bold text-uppercase text-white">Contact</h2>
            <div class="title-divider mx-auto bg-danger"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-lg p-4 p-md-5 contact-card">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nama" class="font-weight-bold small text-uppercase">Nama Lengkap</label>
                                <input type="text" class="form-control form-control-lg custom-input" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email" class="font-weight-bold small text-uppercase">Alamat Email</label>
                                <input type="email" class="form-control form-control-lg custom-input" id="email" name="email" placeholder="nama@email.com" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pesan" class="font-weight-bold small text-uppercase">Pesan</label>
                            <textarea class="form-control form-control-lg custom-textarea" id="pesan" name="pesan" rows="5" placeholder="Tuliskan detail proyek atau pesan Anda..." required></textarea>
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-danger btn-lg px-5 py-3 rounded-pill font-weight-bold shadow">
                                <i class="fas fa-paper-plane mr-2"></i> Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
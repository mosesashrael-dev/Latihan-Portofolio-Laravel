@extends('layouts.app')

@section('title', 'About - Portofolio Web')

@section('content')
<section id="About" class="py-5 mt-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="section-title font-weight-bold text-uppercase">About</h2>
            <div class="title-divider mx-auto bg-danger"></div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0 pr-md-5">
                <span class="text-danger font-weight-bold text-uppercase">Profil & Keahlian</span>
                <p class="text-muted">
                    lorem ipsum dolor sit amet consectetur adipiscing elit minim sint quibusdam sunt maxime elit quibusdam quo at quis velit id
                </p>

                <div class="mt-4">
                    <div class="d-flex justify-content-between font-weight-bold mb-1">
                        <span>ABILITY 1</span>
                        <span>95%</span>
                    </div>
                    <div class="progress mb-3" style="height: 8px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 95%"></div>
                    </div>
                    <div class="d-flex justify-content-between font-weight-bold mb-1">
                        <span>ABILITY 2</span>
                        <span>90%</span>
                    </div>
                    <div class="progress mb-3" style="height: 8px;">
                        <div class="progress-bar bg-dark" role="progressbar" style="width: 90%"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="about-img-wrapper p-4 bg-white rounded shadow-lg">
                    <h5 class="font-weight-bold mb-3 text-dark">Statistik Performa</h5>
                    <div style="position: relative; height: 280px; width: 100%;">
                        <canvas id="performanceChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
@endpush
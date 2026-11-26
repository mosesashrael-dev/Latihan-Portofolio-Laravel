@extends('layouts.app')

@section('title', 'Home - Portofolio Web')

@section('content')
<section id="Hero">
    <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleControls" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="hero-overlay"></div>
                <img src="{{ asset('assets/img/Verstappern_Car.png') }}" class="d-block w-100 hero-img" alt="Slide 1">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h1 class="display-4 font-weight-bold text-uppercase">Portofolio Web</h1>
                    <p class="lead mb-4">lorem ipsum dolor sit amet consectetur adipiscing elit minim sint quibusdam sunt maxime elit quibusdam quo at quis velit id</p>
                    <div>
                        <a href="{{ route('services') }}" class="btn btn-danger btn-lg rounded-pill px-4 mr-2 shadow">Lihat Services</a>
                        <a href="{{ route('about') }}" class="btn btn-outline-light btn-lg rounded-pill px-4">Tentang Saya</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="hero-overlay"></div>
                <img src="{{ asset('assets/img/bg-2.png') }}" class="d-block w-100 hero-img" alt="Slide 2">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h1 class="display-4 font-weight-bold text-uppercase">HEADER 1</h1>
                    <p class="lead mb-4">lorem ipsum dolor sit amet consectetur adipiscing elit minim sint quibusdam sunt maxime elit quibusdam quo at quis velit id</p>
                    <a href="{{ route('contact') }}" class="btn btn-danger btn-lg rounded-pill px-4 shadow">Hubungi Saya</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
</section>
@endsection
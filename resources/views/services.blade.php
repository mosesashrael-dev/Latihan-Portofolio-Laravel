@extends('layouts.app')

@section('title', 'Services - Portofolio Web')

@section('content')
<section id="Services" class="service-section pt-5 mt-4">
    <div class="service-overlay"></div>
    <div class="container position-relative py-5">
        <div class="text-center text-white mb-5">
            <img class="service-image mb-3 shadow" src="{{ asset('assets/img/services.png') }}" alt="Services">
            <h2 class="section-title font-weight-bold text-uppercase">Services</h2>
            <div class="title-divider mx-auto bg-danger"></div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card service-card h-100 border-0 shadow-lg text-center p-4">
                    <div class="icon-box mx-auto mb-4">
                        <i class="fas fa-tachometer-alt fa-2x text-danger"></i>
                    </div>
                    <h4 class="font-weight-bold mb-3">HEADING 1</h4>
                    <p class="text-muted">
                       lorem ipsum dolor sit amet consectetur adipiscing elit minim sint quibusdam sunt maxime elit quibusdam quo at quis velit id
                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card service-card h-100 border-0 shadow-lg text-center p-4">
                    <div class="icon-box mx-auto mb-4">
                        <i class="fas fa-laptop-code fa-2x text-danger"></i>
                    </div>
                    <h4 class="font-weight-bold mb-3">HEADING 2</h4>
                    <p class="text-muted">
                        lorem ipsum dolor sit amet consectetur adipiscing elit minim sint quibusdam sunt maxime elit quibusdam quo at quis velit id
                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card service-card h-100 border-0 shadow-lg text-center p-4">
                    <div class="icon-box mx-auto mb-4">
                        <i class="fas fa-database fa-2x text-danger"></i>
                    </div>
                    <h4 class="font-weight-bold mb-3">HEADING 3</h4>
                    <p class="text-muted">
                        lorem ipsum dolor sit amet consectetur adipiscing elit minim sint quibusdam sunt maxime elit quibusdam quo at quis velit id
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('frontend.master')

@section('title', '404 Page')

@section('content')

<div class="secondary-banner">
    <div class="banner-img" style="background-image: url('<?php echo asset('frontend/img/crimson-edge-banner.png'); ?>');">
        <div class="container h-100 position-relative">
            <div class="content justify-content-end d-flex flex-column">
                <div class="d-flex align-items-center mb-lg-3">
                    <img src="{{ asset('frontend/img/banner-side-icon.png') }}" class="me-3" alt="Banner Side Icon">
                    <h3 class="main-heading mb-0">Crimson Edge</h3>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="py-lg-5 tabs-section four-pillars-section">
    <div class="container error-container text-center">
        <h1 class="error-title">404</h1>
        <p class="error-message">Oops! The page you're looking for doesn't exist.</p>
        <a href="/" class="main-btn btn mt-lg-3">Go to Homepage <img src="{{ asset('frontend/img/main-btn-arrow.svg') }}" class="ms-2" alt=""></a>
    </div>
</section>
@endsection
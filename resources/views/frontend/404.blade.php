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
                    <p class="sub-heading">Building Skills and Creativity Through Diverse Activities</p>
                </div>
            </div>
        </div>
    </div>


<h1>404</h1>

@endsection

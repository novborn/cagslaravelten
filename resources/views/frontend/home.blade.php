@extends('frontend.master')

@section('title', 'Home Page')

@section('content')



@include('frontend.components.home.video-container')
@include('frontend.components.home.about-section') 
@include('frontend.components.home.know-more')
@include('frontend.components.home.collaborations')
@include('frontend.components.home.campus-gallery')
@include('frontend.components.home.parents-testimonial')
@include('frontend.components.home.join-us-instagram')

@endsection

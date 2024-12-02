@extends('frontend.master')
@section('meta')
@foreach($content as $item)
<title>{{  $item->meta_title }}</title>
    <meta name="description" content="{{  $item->meta_desc }}">
    <meta name="keywords" content="{{  $item->extra_tags }}">
    <meta name="author" content="Admin">
@endforeach
@endsection
@section('content')
@include('frontend.components.common.innerpage-top-section')
</div>
<?php //echo "<pre>"; print_r($content) ?>
@foreach($content as $item)
<section class="py-lg-5">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <div class="section-heading">{!! $item->title !!}</div>
                {!! $item->description !!}

            </div>
            <div class="col-lg-5">
                @if(isset($item) && !empty($item->description_banner))
                    <img src="<?php echo asset('uploads/' . $item->description_banner); ?>" class="w-100" alt="{{ $item->title }}">
                @else
                    <img src="<?php echo asset('frontend/img/Our-Child-Centric-Vision.png'); ?>" class="w-100" alt="description banner">
                @endif
            </div>
        </div>
    </div>
</section>
@endforeach
@include('frontend.components.common.lead-form')
@endsection
@foreach($content as $item)

    @if(isset($item) && !empty($item->inner_page_banner))
        <style>
            .banner-img {
                background-image: url('<?php echo asset('uploads/' . $item->inner_page_banner); ?>');
            }
        </style>
    @else
        <style>
            .banner-img {
                background-image: url('<?php echo asset('frontend/img/crimson-edge-banner.png'); ?>');
            }
        </style>
    @endif


    <div class="secondary-banner">
        <div class="banner-img">
            <div class="container h-100 position-relative">
                <div class="content justify-content-end d-flex flex-column">
                    <div class="d-flex align-items-center mb-lg-3">
                        <img src="{{ asset('frontend/img/banner-side-icon.png') }}" class="me-3" alt="Banner Side Icon">
                        <h3 class="main-heading mb-0">{{ $item->inner_page_title }}</h3>
                    </div>
                    <p class="sub-heading">{{ $item->inner_page_sub_title }}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach

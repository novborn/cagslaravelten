<?php
//dd($testimonials);
?>

<section class="py-lg-5 testimonial-section">
  <div class="container py-lg-4">
    <div class="section-heading text-center">Parents Testimonial</div>
    <div class="owl-carousel owl-theme mt-lg-5" id="testimonial-slider">

    @if ($testimonials->count() > 0)
    
        @foreach ($testimonials as $testimonial)
            <div class="cover">
                <div class="box">
                <img src="{{ asset('frontend/img/testimonial-star.svg') }}" class="mb-3" alt="star">
                    <p class="mb-0">{{ $testimonial->testimonial_text }}</p>
                    <img src="{{ asset('frontend/img/testimonial-Polygon.png') }}" class="testi-polygon" alt="Polygon">
                </div>

                <div class="box-2">
                    @if (!empty($testimonial->testimonial_image))
                        <img src="{{ asset('uploads/' . $testimonial->testimonial_image) }}" class="me-lg-4 testimonial-img" alt="Testimonial Image">
                    @else
                        <img src="{{ asset('frontend/img/testimonial-star.svg') }}" class="me-lg-4 testimonial-img" alt="Default Testimonial Image">
                    @endif

                    <div>
                        <div class="testimonial-name">{{ $testimonial->testimonial_name }}</div>
                        <div class="testimonial-designation">{{ $testimonial->testimonial_sub_name }}</div>
                    </div>
                </div>
            </div>
        @endforeach
   
@else
    <p>No testimonials available. Count: 0</p>
@endif





    </div>
  </div>
</section>
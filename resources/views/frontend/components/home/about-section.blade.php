<section class="home-about-section py-lg-5">
  <div class="container">
    <a href="#" class="play-btn">
      <img src="{{ asset('frontend/img/round-btn.png') }}" alt=""> <i class="fa-solid fa-play"></i>
    </a>
    <div class="row align-items-center justify-content-between ">
      <div class="col-lg-5">
        <div>
          @foreach($content as $item)
          @if(isset($item) && !empty($item->description_banner))
          <img src="<?php echo asset('uploads/' . $item->description_banner); ?>" class="w-100" alt="description banner">
          @else
          <img src="<?php echo asset('frontend/home-about-section-banner.png'); ?>" class="w-100" alt="description banner">
          @endif
          @endforeach


          
        </div>
      </div>
      @if($content->isNotEmpty())
      @foreach($content as $item)
      <div class="col-lg-6">
        <div class="section-heading wow fadeInLeft" data-wow-delay="0ms">{{ $item->title }}</div>

        {!! $item->description !!}

        <a href="#" class="main-btn btn mt-lg-3">School Overview <img src="{{ asset('frontend/img/main-btn-arrow.svg') }}" class="ms-2" alt=""></a>
      </div>
      @endforeach
      @else
      <p>No content available at the moment.</p>
      @endif
    </div>
  </div>
</section>
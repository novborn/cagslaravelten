@extends('frontend.master')
@section('meta')
@foreach($content as $item)
<title>{{ $item->meta_title }}</title>
<meta name="description" content="{{  $item->meta_desc }}">
<meta name="keywords" content="{{  $item->extra_tags }}">
<meta name="author" content="Admin">
@endforeach
@endsection

@section('content')
@include('frontend.components.common.innerpage-top-section')
</div>
<?php // dd($galleryItems); 
?>

<section class="py-lg-5 foundation-p-section">
    <div class="container">
        @foreach($content as $item)
        <div class="d-flex align-items-center justify-content-center flex-column text-center">
            <div class="section-heading">{{ $item->gallery_section_title }}</div>
        </div>
        @endforeach

        <div class="row  pt-lg-4 g-4">

            @foreach($galleryItems as $galleryItem)
            <div class="col-lg-4">
                <div class="box">
                    @if(isset($galleryItem) && !empty($galleryItem->content_gallery_image))
                    <img src="<?php echo asset('uploads/' . $galleryItem->content_gallery_image); ?>" class="w-100" alt="description banner">
                    @else
                    <img src="<?php echo asset('frontend/img/fp-1.png'); ?>" class="w-100" alt="description banner">
                    @endif

                    <div class="p-lg-3">
                        {!! $galleryItem->content_gallery_desc !!}
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<section class="py-lg-5 tabs-section four-pillars-section">
    <div class="container">

        <div class="row justify-content-between">
            <div class="col-lg-5">

                <div class="d-flex  flex-column">
                    <div class="section-heading">Inspired by UNESCO’s Delors Report and its four pillars</div>
                    <p>At CAGS, students are not taught to clear their examinations. Instead, we ignite their curiosity so that they learn beyond books and articles.</p>


                    <div>
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                <img src="<?php echo asset('frontend/img/arrow-right.svg'); ?>" class="normal-img me-1" alt=""> <img src="assets/img/arrow-right-white.svg" alt="" class="normal-img-white me-1"> Learning to Know
                            </button>
                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                <img src="<?php echo asset('frontend/img/arrow-right.svg'); ?>" class="normal-img me-1" alt=""> <img src="assets/img/arrow-right-white.svg" alt="" class="normal-img-white me-1">Learning to do
                            </button>

                            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                <img src="<?php echo asset('frontend/img/arrow-right.svg'); ?>" class="normal-img me-1" alt=""> <img src="assets/img/arrow-right-white.svg" alt="" class="normal-img-white me-1"> Learning to Live Together
                            </button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                <img src="<?php echo asset('frontend/img/arrow-right.svg'); ?>" class="normal-img me-1" alt=""> <img src="assets/img/arrow-right-white.svg" alt="" class="normal-img-white me-1"> Learning to be
                            </button>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-lg-6">

                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                        <img src="<?php echo asset('frontend/img/learning-to-know.png'); ?>" class="w-100" alt="">
                        <div class="mt-lg-3">
                            <h6 class="f-20 text-black">Learning to Know</h6>
                            <p>At CAGS, students are not taught to clear their examinations. Instead, we ignite their curiosity so that they learn beyond books and articles.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                        <img src="<?php echo asset('frontend/img/learning-to-do.png'); ?>" class="w-100" alt="">
                        <div class="mt-lg-3">
                            <h6 class="f-20 text-black">Learning to do</h6>
                            <p>Children learn by doing, which is why we let them explore their interests. Though they are diversely gifted, we never confine their vibrant personalities into boxes. Instead, we let them soar.</p>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                        <img src="<?php echo asset('frontend/img/LEARNING-TO-LIVE-TOGETHER.png'); ?>" class="w-100" alt="">
                        <div class="mt-lg-3">
                            <h6 class="f-20 text-black">Learning to Live Together</h6>
                            <p>India is a multicultural country and we must learn to coexist, which is why we work upon the values of diversity, tolerance and celebration in our school. We have mentors for children who have special requirements, should they desire to avail them. Compassion remains a rare value in today’s world, which is why our community outreach programme allows students from primary school to high school to regularly participate in service initiatives.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
                        <img src="<?php echo asset('frontend/img/learning-to-be.png'); ?>" class="w-100" alt="">
                        <div class="mt-lg-3">
                            <h6 class="f-20 text-black">Learning to be</h6>
                            <p>Every child must be allowed to grow, and this is a policy that we strictly believe in. They have their personalities, dreams and abilities, which must be empowered at all levels. Only when they have a strong foundation, do they fly high. Our educational programmes further foster an entrepreneurial mindset in a child’s mind, where they engage with the outside world, channelise their energy to develop creative solutions, efficiently manage their schedule and seek knowledge to improve the world.</p>
                        </div>
                    </div>
                </div>



            </div>
        </div>

    </div>
</section>


@include('frontend.components.common.lead-form')
@endsection
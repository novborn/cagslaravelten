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

<?php
//Slider One data form Gallery Slider Table by content id
$slider_one_data = $gallerySliderImages->filter(function ($slider) {
    return $slider->gallery_slider_type === 'slider_one' && !empty($slider->gallery_slider_image_one);
});

//dd($slider_one_data);

?>

<section class="py-lg-5 py-5">
    <div class="container">
        <div class="row align-items-center justify-content-between pb-lg-4">
            <div class="col-lg-4 order-lg-2 mb-lg-0 mb-4">
                <div class="d-flex flex-column">
                    <img src="<?php echo asset('frontend/img/Ms-Toshima.png'); ?>" class="w-100" alt="">
                    <div class="leader-box d-flex flex-column text-center mt-2">
                        <h6 class="mb-1 f-18 canela-font-bold">Rani Thomas</h6>
                        <p class="mb-0 f-14">Principal of Undri Campus</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 order-lg-1  text-just">
                <h6 class="f-14 text-black fw-500 mb-lg-2 mb-1">Greetings from CAGS</h6>
                <div class="section-heading mb-3">From the Principal’s Desk</div>
                <p>The Spaces at Crimson Anisha Global School inspire creativity and holistic growth.</p>
                <div class="greeting-box">
                    <p>“Ambition is the path to success. Persistence is <br class="d-none d-lg-block"> the vehicle you arrive in.” </p>
                </div>
                <p>Greetings everyone! At the very onset let me begin by thanking God Almighty for sustaining us throughout the turbulence of the recent past.</p>
                <p>Let me also very specially thank all the parents – for their continued support; all the members of the staff – for their sincere and strenuous efforts and all the well wishers of CAGS – for believing in us unconditionally!!</p>
                <p>Crimson World School recognizes that middle years is a critical time for student’s social emotional development. Further, multiple researches have also indicated how during these years the notion of ‘lifelong learning’ can be instilled in students. While developing and enhancing student agency (Student voice and choice), we ensure that our student’s thoughts, ideas and opinions are heard and considered which in turn provides them with a sense of belonging and ownership within the school community.</p>
                <p>Crimson World School recognizes that middle years is a critical time for student’s social emotional development. Further, multiple researches have also indicated how during these years the notion of ‘lifelong learning’ can be instilled in students. While developing and enhancing student agency (Student voice and choice), we ensure that our student’s thoughts, ideas and opinions are heard and considered which in turn provides them with a sense of belonging and ownership within the school community.</p>

            </div>
        </div>
        <hr>
        <div class="row banner-count mt-lg-5 g-4">
            <div class="col-lg-3 col-6">
                <div class="box">
                    <img src="<?php echo asset('frontend/img/years-of-inception.svg'); ?>" alt="">
                    <div>
                        <h6>2016</h6>
                        <p>Year of Inception</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="box">
                    <img src="<?php echo asset('frontend/img/undri-school-area.svg'); ?>" alt="">
                    <div>
                        <h6>2 Acres</h6>
                        <p>Undri School Area</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="box">
                    <img src="<?php echo asset('frontend/img/no-of-students.svg'); ?>" alt="">
                    <div>
                        <h6>600+</h6>
                        <p>No of Students</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="box">
                    <img src="<?php echo asset('frontend/img/no-of-teachers.svg'); ?>" alt="">
                    <div>
                        <h6>50+</h6>
                        <p>No of Teachers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-lg-5 py-5 campus-facilities-section">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6">
                <div class="section-heading text-white mb-3">Campus Facilities</div>
                <p class="text-white">Greetings everyone! At the very onset let me begin by thanking God Almighty for sustaining us throughout the turbulence of the recent past.</p>
                <div class="d-flex flex-column gap-4">
                    <div class="d-flex align-items-center gap-2 mt-lg-2 facilities-points my-lg-2">
                        <div class="points">Spacious Modern Classrooms</div>
                        <div class="points">Art Room</div>
                        <div class="points">Dance Room</div>
                        <div class="points">Library</div>
                        <div class="points">Music Room</div>
                        <div class="points">Laboratories</div>
                        <div class="points">Cafeteria</div>
                        <div class="points">Indoor Auditorium</div>
                    </div>
                    <div>
                        <h6 class="text-white fw-700 f-18 mb-3">Sports Facilities</h6>
                        <div class="d-flex align-items-center gap-2 mt-lg-2 facilities-points my-lg-2">
                            <div class="points">Basketball</div>
                            <div class="points">Football</div>
                            <div class="points">Tennis</div>
                            <div class="points">Skating</div>
                        </div>
                    </div>
                    <div>
                        <h6 class="text-white fw-700 f-18 mb-3">Unique Facility</h6>
                        <div class="d-flex align-items-center gap-2 mt-lg-2 facilities-points my-lg-2">
                            <div class="points">Robotics Minecraft</div>
                            <div class="points">Organic Farm (O-Farm)</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 mt-lg-0 mt-4">
                <img src="<?php echo asset('frontend/img/campus-facilities.png'); ?>" class="w-100" alt="">
            </div>
        </div>
    </div>
</section>

@if(isset($content))
@foreach($content as $item)
<section class="py-lg-5">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7">
                <div class="section-heading">{!! $item->title !!}</div>
                {!! $item->description !!}

            </div>
            <div class="col-lg-4">
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
@endif;


@if(isset($slider_one_data))
@foreach($slider_one_data as $slider_one)
<section class="py-lg-5 py-5 gallery-section">
    <div class="container">
        <div class="d-flex align-items-center justify-content-center text-center flex-column">
            <div class="section-heading">{{ $slider_one->gallery_slider_title }}</div>
            {!! $slider_one->gallery_slider_sub_title !!}
        </div>
        <div class="owl-carousel owl-theme my-lg-4 gallery-slider">
            @foreach($slider_one->gallery_slider_image_one as $image)
            <div class="single_gallery_item clearfix">
                <img src="<?php echo asset('uploads/' . $image); ?>" alt="Gallery Image">
                <div class="hover_overlay">
                    <!-- Popup links -->
                    <div class="links">

                    
                        <a href="<?php echo asset('uploads/' . $image); ?>" data-fancybox="gallery" data-caption="Gallery Image">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endforeach
@endif


<section class="py-lg-5 py-5">
    <div class="container">
        <div class="row align-items-center justify-content-between">

            <div class="col-lg-7">
                <div class="section-heading text-just">CAGS: One of the Top Ranked Pre-Schools in Undri</div>
                <p>Early education is one of the most important steps, and our exceptional preschool in Undri promises to make this the foundation of exceptional learning. Our preschool is more than just a learning space designed specifically to blossom the creativity and curiosity of your child. Recognized among the top preschools in Undri, we are dedicated to establishing a foundation that extends beyond academics, focusing on holistic child development.</p>
                <p>In our nurturing environment, we recognize the significance of instilling a love for learning early on. Our committed teachers use engaging activities to spark creativity and nurture essential skills. </p>
            </div>

            <div class="col-lg-5 order-lg-1">
                <img src="<?php echo asset('frontend/img/top-ranked.png'); ?>" class="w-100" alt="">
            </div>


        </div>
    </div>
</section>


@include('frontend.components.common.lead-form')
@endsection
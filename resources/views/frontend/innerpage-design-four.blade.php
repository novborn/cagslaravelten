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
            @if(!empty($item->gallery_section_title))
            <div class="section-heading">{{ $item->gallery_section_title }}</div>
            @endif
            {!! $item->gallery_section_sub_title !!}
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

<section class="py-lg-5 py-5 why-choose-cbse">
        <div class="container">
            <div class="d-flex align-items-center justify-content-center flex-column text-center">
                <div class="section-heading">Lorem Ipsum is simply dummy text</div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem <br> Ipsum has been the industry's standard dummy text</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row g-4 my-lg-3">
                        <div class="col-lg-6">
                            <div class="box mb-0">
                                <img src="<?php echo asset('frontend/img/physical.svg'); ?>" alt="icon">
                                <p>Socio-emotional learning to develop emotional and social competence.</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="box mb-0">
                             
                                <img src="<?php echo asset('frontend/img/integrate.svg'); ?>" alt="icon">
                                <p>Integrate sensory experiences in children by using sensory tools in the classroom</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="box mb-0">
                           
                                <img src="<?php echo asset('frontend/img/parachute.svg'); ?>" alt="icon">
                                <p>Parachute play to aid physical and social development along with literacy and numeracy</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="box mb-0">
                               
                                <img src="<?php echo asset('frontend/img/aim.svg'); ?>" alt="icon">
                                <p>We aim to measure how the students progress in their cognitive, language, physical and motor skills</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@include('frontend.components.common.lead-form')
@endsection
<section class="py-lg-5 home-gallery-section">
    <div class="container py-lg-4">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading">Our Campus Gallery</div>
          <p>Our objective is to produce academically competent persons with real-life experiences when our kids leave our school doors.</p>
        </div>
        <div class="col-lg-7 d-flex align-items-center justify-content-end">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">CAGS Marunji</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">CAGS UNDRI</button>
            </li>
            <!-- <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">CAGS PIMPLE NILAKH</button>
            </li> -->

          </ul>
        </div>
      </div>

      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
          <div class="owl-carousel owl-theme my-lg-4 gallery-slider">
            <div class="single_gallery_item clearfix">
              <img src="{{ asset('frontend/img/g1.png') }}" alt="">
              <div class="hover_overlay">
                <!-- Popup links -->
                <div class="links">
                  <a href="{{ asset('frontend/img/g1.png') }}" data-fancybox="gallery" data-caption="Classroom">
                    <i class="fa-solid fa-magnifying-glass-plus"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="single_gallery_item clearfix">
              <img src="{{ asset('frontend/img/g2.png') }}" alt="">
              <div class="hover_overlay">
                <!-- Popup links -->
                <div class="links">
                  <a href="{{ asset('frontend/img/g2.png') }}" data-fancybox="gallery" data-caption="Classroom">
                    <i class="fa-solid fa-magnifying-glass-plus"></i>
                  </a>
                </div>
              </div>
            </div>

            <div class="single_gallery_item clearfix">
              <img src="{{ asset('frontend/img/g3.png') }}" alt="">
              <div class="hover_overlay">
                <!-- Popup links -->
                <div class="links">
                  <a href="{{ asset('frontend/img/g3.png') }}" data-fancybox="gallery" data-caption="Classroom">
                    <i class="fa-solid fa-magnifying-glass-plus"></i>
                  </a>
                </div>
              </div>
            </div>

            <div class="single_gallery_item clearfix">
              <img src="{{ asset('frontend/img/g4.png') }}" alt="">
              <div class="hover_overlay">
                <!-- Popup links -->
                <div class="links">
                  <a href="{{ asset('frontend/img/g4.png') }}" data-fancybox="gallery" data-caption="Classroom">
                    <i class="fa-solid fa-magnifying-glass-plus"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
          <div class="owl-carousel owl-theme mt-lg-5" id="cags-marunji-slider">
            <img src="{{ asset('frontend/img/g1.png') }}" class="w-100" alt="">
            <img src="{{ asset('frontend/img/g2.png') }}" class="w-100" alt="">
            <img src="{{ asset('frontend/img/g3.png') }}" class="w-100" alt="">
            <img src="{{ asset('frontend/img/g4.png') }}" class="w-100" alt="">
          </div>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
          <div class="owl-carousel owl-theme mt-lg-5" id="cags-marunji-slider">
            <img src="{{ asset('frontend/img/g1.png') }}" class="w-100" alt="">
            <img src="{{ asset('frontend/img/g2.png') }}" class="w-100" alt="">
            <img src="{{ asset('frontend/img/g3.png') }}" class="w-100" alt="">
            <img src="{{ asset('frontend/img/g4.png') }}" class="w-100" alt="">
          </div>
        </div>
        <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
      </div>
    </div>
  </section>
@extends('frontend/layouts/main')

@section('contents')

    <main class="main">

          <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(frontend/assets/img/page-title-bg.jpg);">
        <div class="container position-relative">
          <h1>Services</h1>
          <nav class="breadcrumbs">
            <ol>
              <li><a href="index.html">Home</a></li>
              <li class="current">Services</li>
            </ol>
          </nav>
        </div>
      </div><!-- End Page Title -->
      
      @if (!is_null($services) && $services->isNotEmpty())
        <section id="services" class="services section light-background">

              <div class="container">

                  <div class="row gy-4">

                    @foreach ($services as $item)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                      <div class="services-img">
                        <img src="{{ url('/backend/img/ServicesLocationImages/', $item->image) }}" class="img-fluid" style="width: 100%" alt="">
                      </div>
          
                      <div class="service-item  position-relative">
                        <h3>{{ $item->name }}</h3>
                        {{-- {!! $item->description !!} --}}
                        <div class="short-description">
                          {!! \Illuminate\Support\Str::limit(strip_tags($item->description), 200, '...') !!}
                        </div>
                        <div class="full-description" style="display: none;">
                          {!! $item->description !!}
                        </div>
                        {{-- {!! \Illuminate\Support\Str::limit($item->description, 400, '...') !!} --}}
                        {{-- <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a> --}}
                        <a href="javascript:void(0);" class="readmore stretched-link" onclick="toggleDescription(this)">Read more <i class="bi bi-arrow-right"></i></a>
                      </div>
                    </div>
                  @endforeach
                  <!-- End Service Item -->
                  </div>

              </div>

        </section>
      @endif

          <!-- Alt Services 2 Section -->
    {{-- <section id="alt-services-2" class="alt-services-2 section">

        <div class="container">
  
          <div class="row justify-content-around gy-4">
  
            <div class="col-lg-6 d-flex flex-column justify-content-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
              <h3>WHAT WE CAN OFFER</h3>
              <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi</p>
  
              <div class="row">
  
                <div class="col-lg-6 icon-box d-flex">
                  <i class="bi bi-easel flex-shrink-0"></i>
                  <div>
                    <h4>Lorem Ipsum</h4>
                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias </p>
                  </div>
                </div><!-- End Icon Box -->
  
                <div class="col-lg-6 icon-box d-flex">
                  <i class="bi bi-patch-check flex-shrink-0"></i>
                  <div>
                    <h4>Nemo Enim</h4>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiise</p>
                  </div>
                </div><!-- End Icon Box -->
  
                <div class="col-lg-6 icon-box d-flex">
                  <i class="bi bi-brightness-high flex-shrink-0"></i>
                  <div>
                    <h4>Dine Pad</h4>
                    <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit</p>
                  </div>
                </div><!-- End Icon Box -->
  
                <div class="col-lg-6 icon-box d-flex">
                  <i class="bi bi-brightness-high flex-shrink-0"></i>
                  <div>
                    <h4>Tride clov</h4>
                    <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit</p>
                  </div>
                </div><!-- End Icon Box -->
  
              </div>
  
            </div>
  
            <div class="features-image col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
              <img src="{{ url('frontend/assets/img/page-title-bg.jpg') }}" alt="">
            </div>
  
          </div>
  
        </div>
  
    </section> --}}
    <!-- /Alt Services 2 Section -->

      <!-- Testimonials Section -->
  @if (!is_null($testimonials) && $testimonials->isNotEmpty())
    <section id="testimonials" class="testimonials section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
  
          <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 1,
                    "spaceBetween": 40
                  },
                  "1200": {
                    "slidesPerView": 2,
                    "spaceBetween": 20
                  }
                }
              }
            </script>
            <div class="swiper-wrapper">

              @foreach ($testimonials as $data)
                <div class="swiper-slide">
                  <div class="testimonial-wrap">
                    <div class="testimonial-item">
                      <img src="{{ url('/backend/img/TestimonialsImages/', $data->image) }}" class="testimonial-img" alt="">
                      <h3>{{ $data->name }}</h3>
                      <h4>{{ $data->position }}</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>{{ $data->description }}</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                  </div>
                </div><!-- End testimonial item -->
              @endforeach
             
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
  
    </section><!-- /Testimonials Section -->
@endif
  
    </main>

    <script>
      function toggleDescription(element) {
        const shortDescription = element.parentElement.querySelector('.short-description');
        const fullDescription = element.parentElement.querySelector('.full-description');
        
        if (fullDescription.style.display === 'none') {
          fullDescription.style.display = 'block';
          shortDescription.style.display = 'none';
          element.innerHTML = 'Read less <i class="bi bi-arrow-up"></i>';
        } else {
          fullDescription.style.display = 'none';
          shortDescription.style.display = 'block';
          element.innerHTML = 'Read more <i class="bi bi-arrow-right"></i>';
        }
      }
    </script>

@endsection
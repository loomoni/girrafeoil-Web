@extends('frontend/layouts/main')

@section('contents')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" style="background-image: url(frontend/assets/img/page-title-bg.jpg);">
        <div class="container position-relative">
            <h1>About</h1>
            <nav class="breadcrumbs">
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="current">About</li>
            </ol>
            </nav>
        </div>
        </div><!-- End Page Title -->

        <!-- About Section -->
        <section id="about" class="about section">

        <div class="container">

            <div class="row position-relative">

            <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200"><img src="{{ url('/backend/img/AboutUsImages/',  $aboutUs->image) }}"></div>

                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="inner-title">About Us</h2>
                    <div class="our-story">
                    {!! $aboutUs->description !!}

                    {{-- <div class="watch-video d-flex align-items-center position-relative">
                        <i class="bi bi-play-circle"></i>
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox stretched-link">Watch Video</a>
                    </div> --}}
                    </div>
                </div>

          </div>

        </div>

        </section>
        <!-- /About Section -->


        <!-- Alt Services 2 Section -->
    <section id="alt-services-2" class="alt-services-2 section">
        <div class="container">
            <div class="row justify-content-around gy-4">

                <div class="features-image col-lg-6 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ url('frontend/assets/img/page-title-bg.jpg') }}" alt="">
                </div>

            <div class="col-lg-5 d-flex flex-column justify-content-center order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                <h3>WHAT WE CAN OFFER</h3>
                <p>We offer variety of products include quality fuels, premium lubricants, efficient LPG, and reliable transportation services for all your needs.</p>

                <div class="row">

                <div class="col-lg-6 icon-box d-flex">
                    <i class="bi bi-easel flex-shrink-0"></i>
                    <div>
                    <h4>DIESEL</h4>
                    <p>Our diesel ensures optimal engine performance and longevity for trucks, machinery, and generators. Trust Giraffe Oil Company for clean, efficient, and reliable fuel.</p>
                    </div>
                </div><!-- End Icon Box -->

                <div class="col-lg-6 icon-box d-flex">
                    <i class="bi bi-patch-check flex-shrink-0"></i>
                    <div>
                    <h4>PETROL</h4>
                    <p>Experience superior engine performance and improved fuel economy with our premium petrol. Choose Giraffe Oil Company for a smooth and powerful drive.</p>
                    </div>
                </div><!-- End Icon Box -->

                <div class="col-lg-6 icon-box d-flex">
                    <i class="bi bi-brightness-high flex-shrink-0"></i>
                    <div>
                    <h4>LUBRICANTS</h4>
                    <p>Our lubricants minimize friction, reduce wear, and extend equipment life. Perfect for automotive, industrial, and marine applications.</p>
                    </div>
                </div><!-- End Icon Box -->

                <div class="col-lg-6 icon-box d-flex">
                    <i class="bi bi-brightness-high flex-shrink-0"></i>
                    <div>
                    <h4>LPG</h4>
                    <p>Switch to our clean and efficient LPG for domestic, commercial, and industrial use. Enjoy lower emissions and cost-effective energy.</p>
                    </div>
                </div><!-- End Icon Box -->
{{-- 
                <div class="col-lg-12 icon-box d-flex">
                    <i class="bi bi-brightness-high flex-shrink-0"></i>
                    <div>
                    <h4>LPG</h4>
                    <p>Switch to our clean and efficient LPG for domestic, commercial, and industrial use. Enjoy lower emissions and cost-effective energy.</p>
                    </div>
                </div><!-- End Icon Box --> --}}

                </div>

             </div>
            </div>

        </div>

    </section>
    <!-- /Alt Services 2 Section -->

@if (!is_null($Team) && $Team->isNotEmpty())

        <!-- Team Section -->
    <section id="team" class="team section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Team</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-5">

            @foreach ($Team as $data)
                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                    <img src="{{ url('frontend/assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
                    <div class="social">
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                    </div>
                    <div class="member-info text-center">
                    <h4>{{ $data->name }}</h4>
                    <span>{{ $data->position }}</span>
                    <p>{{ $data->description }}</p>
                    </div>
                </div>
            @endforeach
            <!-- End Team Member -->

            </div>

        </div>
    </section><!-- /Team Section -->
@endif

 @if (!is_null($testimonials) && $testimonials->isNotEmpty())

 <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Testimonials</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

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
                @foreach ($testimonials as $item)
                  
                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                        <img src="{{ url('/backend/img/TestimonialsImages/', $item->image) }}" class="testimonial-img" alt="">
                        <h3>{{ $item->name }}</h3>
                        <h4>{{ $item->title }}</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>{{ $item->description }}</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        </div>
                    </div>
                </div>
                    
                @endforeach
                <!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
            </div>

        </div>

        </section><!-- /Testimonials Section -->

@endif
    </main>
@endsection
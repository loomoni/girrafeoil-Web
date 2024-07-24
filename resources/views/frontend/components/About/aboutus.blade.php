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

            <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200"><img src="{{ url('frontend/assets/img/about.jpg') }}"></div>

                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="inner-title">About Us</h2>
                    <div class="our-story">
                    <h4>Est 1988</h4>
                    <h3>Our Story</h3>
                    <p>Inventore aliquam beatae at et id alias. Ipsa dolores amet consequuntur minima quia maxime autem. Quidem id sed ratione. Tenetur provident autem in reiciendis rerum at dolor. Aliquam consectetur laudantium temporibus dicta minus dolor.</p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commo</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit in</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
                    </ul>
                    <p>Vitae autem velit excepturi fugit. Animi ad non. Eligendi et non nesciunt suscipit repellendus porro in quo eveniet. Molestias in maxime doloremque.</p>

                    <div class="watch-video d-flex align-items-center position-relative">
                        <i class="bi bi-play-circle"></i>
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox stretched-link">Watch Video</a>
                    </div>
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
                <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi</p>

                <div class="row">

                <div class="col-lg-6 icon-box d-flex">
                    <i class="bi bi-easel flex-shrink-0"></i>
                    <div>
                    <h4>DAPIBUS EGET</h4>
                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias </p>
                    </div>
                </div><!-- End Icon Box -->

                <div class="col-lg-6 icon-box d-flex">
                    <i class="bi bi-patch-check flex-shrink-0"></i>
                    <div>
                    <h4>CURSUS ELEIFEND</h4>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiise</p>
                    </div>
                </div><!-- End Icon Box -->

                <div class="col-lg-6 icon-box d-flex">
                    <i class="bi bi-brightness-high flex-shrink-0"></i>
                    <div>
                    <h4>ERAT VOLUTPAT</h4>
                    <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit</p>
                    </div>
                </div><!-- End Icon Box -->

                <div class="col-lg-6 icon-box d-flex">
                    <i class="bi bi-brightness-high flex-shrink-0"></i>
                    <div>
                    <h4>PHASELLUS PORTA</h4>
                    <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit</p>
                    </div>
                </div><!-- End Icon Box -->

                </div>

             </div>
            </div>

        </div>

    </section>
    <!-- /Alt Services 2 Section -->

        <!-- Team Section -->
        <section id="team" class="team section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Team</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-5">

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
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Aliquam iure quaerat voluptatem praesentium possimus unde laudantium vel dolorum distinctio dire flow</p>
                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
                <div class="member-img">
                <img src="{{ url('frontend/assets/img/team/team-2.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
                </div>
                <div class="member-info text-center">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Labore ipsam sit consequatur exercitationem rerum laboriosam laudantium aut quod dolores exercitationem ut</p>
                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
                <div class="member-img">
                <img src="{{ url('frontend/assets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
                </div>
                <div class="member-info text-center">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Illum minima ea autem doloremque ipsum quidem quas aspernatur modi ut praesentium vel tque sed facilis at qui</p>
                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
                <div class="member-img">
                <img src="{{ url('frontend/assets/img/team/team-4.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
                </div>
                <div class="member-info text-center">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Magni voluptatem accusamus assumenda cum nisi aut qui dolorem voluptate sed et veniam quasi quam consectetur</p>
                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
                <div class="member-img">
                <img src="{{ url('frontend/assets/img/team/team-5.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
                </div>
                <div class="member-info text-center">
                <h4>Brian Doe</h4>
                <span>Marketing</span>
                <p>Qui consequuntur quos accusamus magnam quo est molestiae eius laboriosam sunt doloribus quia impedit laborum velit</p>
                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
                <div class="member-img">
                <img src="{{ url('frontend/assets/img/team/team-6.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
                </div>
                <div class="member-info text-center">
                <h4>Josepha Palas</h4>
                <span>Operation</span>
                <p>Sint sint eveniet explicabo amet consequatur nesciunt error enim rerum earum et omnis fugit eligendi cupiditate vel</p>
                </div>
            </div><!-- End Team Member -->

            </div>

        </div>

        </section><!-- /Team Section -->

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
                @foreach ($tesimonials as $item)
                  
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
    </main>
@endsection
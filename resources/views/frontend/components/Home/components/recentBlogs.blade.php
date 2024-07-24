<section id="recent-blog-posts" class="recent-blog-posts section">
  
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Recent Blog Posts</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-5">

        @foreach ($currentNews as $data)
        <div class="col-xl-4 col-md-6">
          <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

            <div class="post-img position-relative overflow-hidden">
              <img src="{{ url('/backend/img/NewsImages/', $data->image) }}" class="img-fluid" alt="">
              <span class="post-date">{{ $data->date }}</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">{{ $data->title }}</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Admin</span>
                </div>
                <span class="px-3 text-black-50"></span>
                <div class="d-flex align-items-center">
                  {{-- <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span> --}}
                </div>
              </div>

              <hr>

              <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div>
          
        @endforeach

        <!-- End post item -->

      </div>

    </div>

  </section>
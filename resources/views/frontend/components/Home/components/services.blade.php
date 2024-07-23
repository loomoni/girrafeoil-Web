<section id="services" class="services section light-background">
  
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Services</h2>
      <p>We are available in below place</p>
    </div><!-- End Section Title -->

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
    

  </section>
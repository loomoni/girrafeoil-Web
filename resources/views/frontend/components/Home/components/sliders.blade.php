<section id="hero" class="hero section dark-background">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6 text-center" style="width: 50rem;">
            <h2>Welcome to Giraffe Oil</h2>
            <p>Fueling your dreams</p>
            <a href="#get-started" class="btn-get-started">About Us</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      @foreach ($sliders as $item)
        <div class="carousel-item @if ($loop->index == 0) active @endif">
          <img src="{{ url('/backend/img/slidersImages', $item->file)}}" alt="">
        </div>
      @endforeach

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

</section>
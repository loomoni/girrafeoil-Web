<section id="get-started" class="get-started section">
  
    <div class="container">

      <div class="row justify-content-between gy-4">

        <div class="col-lg-6 d-flex align-items" data-aos="zoom-out" data-aos-delay="100">
          <div class="content">
            <h3>About us.</h3>
            {!! $aboutUs->description !!}
          </div>
          
        </div>

        <div class="col-lg-5" data-aos="zoom-out" data-aos-delay="200">
          <form action="forms/quote.php" method="post" class="php-email-form">
            <h3>Get a quote</h3>
            <p>Need a customized solution for your fuel and lubricant needs? Fill out our quick and easy form to receive a tailored quote. Our team will get back to you promptly with competitive pricing and exceptional service.</p>
            <div class="row gy-3">

              <div class="col-12">
                <input type="text" name="name" class="form-control" placeholder="Name" required="">
              </div>

              <div class="col-12 ">
                <input type="email" class="form-control" name="email" placeholder="Email" required="">
              </div>

              <div class="col-12">
                <input type="text" class="form-control" name="phone" placeholder="Phone" required="">
              </div>

              <div class="col-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
              </div>

              <div class="col-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                <button type="submit">Get a quote</button>
              </div>

            </div>
          </form>
        </div><!-- End Quote Form -->

      </div>

    </div>

</section>
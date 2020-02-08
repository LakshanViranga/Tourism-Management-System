
  <?php include('include/header.php') ?>
    <!-- END head -->

  <section class="site-hero inner-page overlay" style="background-image: url(../../images/kandy.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">Welcome to your business profile</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="index.html">Home</a></li>
              <li>&bullet;</li>
              <li>Business Profile</li>
            </ul>
          </div>
        </div>
      </div>

      <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
          <span class="mouse-wheel"></span>
        </div>
      </a>
    </section>
    <!-- END section -->

    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
              <a href="<?php echo base_url('index.php/business_controller/B_Hotel');?>" class="room">
              <figure class="img-wrap">
                  <img src="<?php echo base_url();?>images/hotel2.jpg" alt="Free website template" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2>Hotel</h2>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
              <a href="<?php echo base_url('index.php/business_controller/B_Restaurant');?>" class="room" d>
              <figure class="img-wrap">
                  <img src="<?php echo base_url();?>images/rest3.jpg" alt="Free website template" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2>Restaurant </h2>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
              <a href="<?php echo base_url('index.php/business_controller/B_other');?>" class="room" d>
              <figure class="img-wrap">
                  <img src="<?php echo base_url();?>images/cabana1.jfif" alt="Free website template" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2>Cabana</h2>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
              <a href="<?php echo base_url('index.php/business_controller/B_other');?>" class="room" d>
              <figure class="img-wrap">
                  <img src="<?php echo base_url();?>images/guest2.jpg" alt="Free website template" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2>Guest House</h2>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
              <a href="<?php echo base_url('index.php/business_controller/B_other');?>" class="room" d>
              <figure class="img-wrap">
                  <img src="<?php echo base_url();?>images/bun1.jpg" alt="Free website template" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2>Bungalow </h2>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
              <a href="<?php echo base_url('index.php/business_controller/B_other');?>" class="room" d>
              <figure class="img-wrap">
                  <img src="<?php echo base_url();?>images/img_5.jpg" alt="Free website template" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2>Other </h2>
              </div>
            </a>
          </div>

        </div>
      </div>
    </section>

  <?php include('include/footer.php') ?>

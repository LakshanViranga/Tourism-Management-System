<?php include('include/header.php') ?>

<section class="site-hero inner-page overlay" style="background-image: url(../../images/kandy.jpg)" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade">
                <h1 class="heading mb-3">Business information form</h1>
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

    <section class="section contact-section" id="next">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">

              <?php echo validation_errors(); ?>
              <?php echo form_open_multipart ('business_controller/B_other'); ?>
            <div class="row">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="name">Name of the business</label>
                  <input type="text" id="name" class="form-control ">
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" class="form-control ">
                </div>
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="phone">Phone Number</label>
                  <input type="text" id="phone" class="form-control ">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="location">Address</label>
                  <input type="text" id="address" class="form-control ">
                </div>
                </div>

                <div class="row">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="rooms">Upload images:</label>
                  <input type="file" size="100" accept="image/*">
                </div>
                </div>

              <div class="row">
                  <div class="col-md-6 form-group">
                      <input id="type" type="submit" name="Add" value="Add" class="btn btn-primary text-white py-3 px-5 font-weight-bold">
                  </div>
                  <div class="col-md-6 form-group">
                      <input id="type" type="submit" name="Update" value="Update" class="btn btn-primary text-white py-3 px-5 font-weight-bold">
                  </div>
                  <div class="col-md-6 form-group">
                      <input id="type" type="submit" name="Delete" value="Delete" class="btn btn-primary text-white py-3 px-5 font-weight-bold">
                  </div>
              </div>


              <?php echo form_close();?>

          </div>
 
        </div>
      </div>
    </section>
<?php include('include/footer.php') ?>
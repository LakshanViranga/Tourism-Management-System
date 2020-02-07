
<?php include('include/header.php') ?>

<section class="site-hero inner-page overlay" style="background-image: url(../../../images/hero_4.jpg)" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade">
                <h1 class="heading mb-3">Cart Form</h1>
                <ul class="custom-breadcrumbs mb-4">
                    <li><a href="<?php echo base_url('index.php');?>">Home</a></li>
                    <li>&bullet;</li>
                    <li>Cart</li>
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

                <?php echo validation_errors();?>
                <?php echo form_open('Cart_Controller/add_cart');?>
                <form  class="bg-white p-md-5 p-4 mb-5 border">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label class="text-black font-weight-bold" for="email">Customer Name</label>
                            <input type="text" name="customer" id="cutomer" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="text-black font-weight-bold" for="name">Hotel Name</label>
                            <input type="text" name="hotel" id="name" class="form-control" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="text-black font-weight-bold" for="phone">Package Name</label>
                            <input type="text" name="package" id="package" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-12 form-group">
                            <label class="text-black font-weight-bold" for="message">Notes</label>
                            <textarea name="notes" id="notes" class="form-control " cols="30" rows="8"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="submit" value="Add Cart" class="btn btn-primary text-white py-3 px-5 font-weight-bold">
                        </div>
                    </div>
                </form>
                <?php form_close()?>
            </div>

        </div>
    </div>
</section>
<?php include('include/footer.php') ?>

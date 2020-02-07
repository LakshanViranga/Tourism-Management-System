<?php include ('include/header.php');?>
<section class="site-hero inner-page overlay" style="background-image: url(../../images/hero_4.jpg)" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade">
                <h1 class="heading mb-3">Your Cart</h1>
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
<section class="section bg-light">
    <div class="container">
        <div class="row">

            <table class="table table-striped table-dark">
                <thead class=thead-dark">
                <tr>
                    <td>Place Name</td>
                    <th>Package</th>
                    <th>Note</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($query as $row):?>
                        <tr>
                            <td><?php echo $row->hotel_name ?></td>
                            <td><?php echo $row->package_name ?></td>
                            <td><?php echo $row->notes ?></td>
                        </tr>

                </tbody>
                <?php endforeach;?>
            </table>

        </div>
    </div>
</section>
<?php include ('include/footer.php');?>
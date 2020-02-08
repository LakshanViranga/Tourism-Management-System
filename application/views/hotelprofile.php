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

                <?php if($this->session->flashdata('msg')): ?>
                    <p><?php echo $this->session->flashdata('msg'); ?></p>
                <?php endif; ?>
                <?php echo validation_errors(); ?>
                <?php echo form_open_multipart('business_controller/B_Restaurant'); ?>



                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label class="text-black font-weight-bold" for="name">Hotel Name</label>
                            <input type="text" id="name" name="hotel_name" class="form-control ">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="text-black font-weight-bold" for="email">Email</label>
                            <input type="text" id="email" name="email" class="form-control ">
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="text-black font-weight-bold" for="phone">Phone Number</label>
                            <input type="text" id="phone" name="phone" class="form-control ">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label class="text-black font-weight-bold" for="location">Address</label>
                            <input type="text" id="address" name="address" class="form-control ">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label class="text-black font-weight-bold" for="rooms">Rooms</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="room_type1" class="font-weight-bold text-black">Types of the room</label>
                            <div class="field-icon-wrap">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select name="room_type1" id="room_type1"  class="form-control">
                                    <option value=""></option>
                                    <option value="Single">Single</option>
                                    <option value="Double">Double</option>
                                    <option value="Triple">Triple</option>
                                    <option value="Quad">Quad</option>
                                    <option value="Queen">Queen</option>
                                    <option value="King">King</option>
                                    <option value="Twin">Twin</option>
                                    <option value="Double-double">Double-double</option>
                                    <option value="Studio">Studio</option>
                                    <option value="Hollywood twin room">Hollywood twin room</option>
                                </select>
<!--                                <input type="submit" name="submit" value="Post it">-->
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="no_of_rooms" class="font-weight-bold text-black">Number of rooms</label>
                            <input type="text" id="no_of_rooms1" name="no_of_rooms1" class="form-control" value="0">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <div class="field-icon-wrap">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select name="room_type2" id="room_type2"  class="form-control">
                                    <option value=""></option>
                                    <option value="Single">Single</option>
                                    <option value="Double">Double</option>
                                    <option value="Triple">Triple</option>
                                    <option value="Quad">Quad</option>
                                    <option value="Queen">Queen</option>
                                    <option value="King">King</option>
                                    <option value="Twin">Twin</option>
                                    <option value="Double-double">Double-double</option>
                                    <option value="Studio">Studio</option>
                                    <option value="Hollywood twin room">Hollywood twin room</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" id="no_of_rooms2" name="no_of_rooms2" class="form-control" value="0">
                        </div>
                    </div>
                    <!--row-->

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <div class="field-icon-wrap">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select name="room_type3" id="room_type3" name="room_type" class="form-control">
                                    <option value=""></option>
                                    <option value="Single">Single</option>
                                    <option value="Double">Double</option>
                                    <option value="Triple">Triple</option>
                                    <option value="Quad">Quad</option>
                                    <option value="Queen">Queen</option>
                                    <option value="King">King</option>
                                    <option value="Twin">Twin</option>
                                    <option value="Double-double">Double-double</option>
                                    <option value="Studio">Studio</option>
                                    <option value="Hollywood twin room">Hollywood twin room</option>
                                </select>
<!--                                <input type="submit" name="submit" value="Post it">-->
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" id="no_of_rooms3" name="no_of_rooms3" class="form-control" value="0">
                        </div>
                    </div><!--row-->

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <div class="field-icon-wrap">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select name="room_type4" id="room_type4" class="form-control">
                                    <option value=""></option>
                                    <option value="Single">Single</option>
                                    <option value="Double">Double</option>
                                    <option value="Triple">Triple</option>
                                    <option value="Quad">Quad</option>
                                    <option value="Queen">Queen</option>
                                    <option value="King">King</option>
                                    <option value="Twin">Twin</option>
                                    <option value="Double-double">Double-double</option>
                                    <option value="Studio">Studio</option>
                                    <option value="Hollywood twin room">Hollywood twin room</option>
                                </select>
<!--                                <input type="submit" name="submit" value="Post it">-->
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" id="no_of_rooms4" name="no_of_rooms4" class="form-control" value="0">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="suit_type" class="font-weight-bold text-black">Types of the suit</label>
                            <div class="field-icon-wrap">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select  name="suit_type1" id="suit_type1" class="form-control">
                                    <option value=""></option>
                                    <option value="Master Suite or exclusive suite">Master Suite or exclusive suite</option>
                                    <option value="Mini-Suite or Junior Suite">Mini-Suite or Junior Suite</option>
                                    <option value="President suite">President suite</option>
                                </select>
<!--                                <input type="submit" name="submit" value="Post it">-->
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="no_of_suites" class="font-weight-bold text-black">Number of suites</label>
                            <input type="text" id="no_of_suites1" name="no_of_suites1" class="form-control" value="0">
                        </div>
                    </div><!--row-->
                    <!---->
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <div class="field-icon-wrap">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select  name="suit_type2" id="suit_type2" class="form-control">
                                    <option value=""></option>
                                    <option value="Master Suite or exclusive suite">Master Suite or exclusive suite</option>
                                    <option value="Mini-Suite or Junior Suite">Mini-Suite or Junior Suite</option>
                                    <option value="President suite">President suite</option>
                                </select>
<!--                                <input type="submit" name="submit" value="Post it">-->
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" id="no_of_suites2" name="no_of_suites2" class="form-control" value="0">
                        </div>
                    </div><!--row-->
                    <!---->
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <div class="field-icon-wrap">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select  name="suit_type3" id="suit_type3" class="form-control">
                                    <option value=""></option>
                                    <option value="Master Suite or exclusive suite">Master Suite or exclusive suite</option>
                                    <option value="Mini-Suite or Junior Suite">Mini-Suite or Junior Suite</option>
                                    <option value="President suite">President suite</option>
                                </select>
<!--                                <input type="submit" name="submit" value="Post it">-->
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" id="no_of_suites3" name="no_of_suites3" class="form-control" value="0">
                        </div>
                    </div><!--row-->
                    <!---->
                    <!---->
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label class="text-black font-weight-bold" for="rooms">Amenities</label>
                        </div>
                    </div>
                    <!---->
                    <!---->
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="text-black font-weight-bold" for="rooms">In the room</label>
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="text-black font-weight-bold" for="rooms">Outside the room</label>
                        </div>
                    </div>
                    <!---->
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="checkbox" name="amenity[]" value="Television"> Television<br>
                            <input type="checkbox" name="amenity[]" value="Wifi">WiFi<br>
                            <input type="checkbox" name="amenity[]" value="PersonalItems"> Personal Items<br>
                            <input type="checkbox" name="amenity[]" value="HairDryer"> Hair Dryer<br>
                            <input type="checkbox" name="amenity[]" value="Towels"> Towels<br>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="checkbox" name="amenity[]" value="Dinning"> Dinning<br>
                            <input type="checkbox" name="amenity[]" value="Vending">Vending<br>
                            <input type="checkbox" name="amenity[]" value="Exercise"> Exercise<br>
                            <input type="checkbox" name="amenity[]" value="Recreation"> Recreation<br>
                            <input type="checkbox" name="amenity[]" value="SwimmingPool"> Swimming Pool<br>
                            <input type="checkbox" name="amenity[]" value="Parking"> Parking<br>
                        </div>
                    </div>
                    <!---->
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
                ><!--row
<!---->

                <?php echo form_close();?>
            </div>

        </div>
    </div>
</section>
<?php include('include/footer.php') ?>


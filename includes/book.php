<?php
include_once('class/Country.php');
include_once('class/Place.php');
include_once('class/City.php');

$objPlace = new Place();
$objCountry = new Country();
$objCity = new City();
$queryPlace = $objPlace->view();
$queryCountry = $objCountry->view();
$queryCity = $objCity->view();


?>
<!-- Book Us Start -->
<div class="container-fluid contact py-6 wow bounceInUp" data-wow-delay="0.1s">
    <div class="container">
        <form action="" method="post">
            <div class="row g-0">
                <div class="col-1">
                    <img src="img/background-site.jpg" class="img-fluid h-100 w-100 rounded-start" style="object-fit: cover; opacity: 0.7;" alt="">
                </div>
                <div class="col-10">
                    <div class="border-bottom border-top border-primary bg-light py-5 px-4">
                        <div class="text-center">
                            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Book Us</small>
                            <h1 class="display-5 mb-5">Where you want Our Services</h1>
                        </div>
                        <div class="row g-4 form">
                            <div class="col-lg-4 col-md-6">
                                <select class="form-select border-primary p-2" name="booking_country" aria-label="Default select example">
                                    <option selected>Select Country</option>
                                    <?php

                                    while ($data = mysqli_fetch_assoc($queryCountry)) {
                                    ?>
                                        <option value="<?= $data['country_id']; ?>"><?= $data['country_name']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <select class="form-select border-primary p-2" name="booking_city" aria-label="Default select example">
                                    <option selected>Select City</option>
                                    <?php

                                    while ($row = mysqli_fetch_assoc($queryCity)) {
                                    ?>
                                        <option value="<?= $row['city_id']; ?>"><?= $row['city_name']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <select class="form-select border-primary p-2" name="booking_place" aria-label="Default select example">
                                    <option selected>Select Place</option>
                                    <?php

                                    while ($row = mysqli_fetch_assoc($queryPlace)) {
                                    ?>
                                        <option value="<?= $row['place_id']; ?>"><?= $row['place_name']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <select class="form-select border-primary p-2" name="booking_event_type" aria-label="Default select example">
                                    <option selected>Event Type</option>
                                    <option value="2">Big Event</option>
                                    <option value="1">Medium Event</option>
                                    <option value="3">Small Event</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <select class="form-select border-primary p-2" name="booking_num_people" aria-label="Default select example">
                                    <option selected>No. Of People</option>
                                    <option value="1">100-200</option>
                                    <option value="2">300-400</option>
                                    <option value="3">500-600</option>
                                    <option value="4">700-800</option>
                                    <option value="5">900-1000</option>
                                    <option value="6">1000+</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <select class="form-select border-primary p-2" name="booking_type_people" aria-label="Default select example">
                                    <option selected>Type Of People</option>
                                    <option value="1">Vegetarian</option>
                                    <option value="2">Non Vegetarian</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="mobile" class="form-control border-primary p-2" name="booking_contact_no" placeholder="Your Contact No.">
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="date" class="form-control border-primary p-2" name="booking_date" placeholder="Select Date">
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="email" class="form-control border-primary p-2" name="booking_email" placeholder="Enter Your Email">
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary px-5 py-3 rounded-pill">Submit Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <img src="img/background-site.jpg" class="img-fluid h-100 w-100 rounded-end" style="object-fit: cover; opacity: 0.7;" alt="">
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Book Us End -->
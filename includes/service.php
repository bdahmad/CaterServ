<?php
include_once('class/Services.php');
$objServices = new Services();
?>
<!-- Service Start -->
<div class="container-fluid service py-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our Services</small>
            <h1 class="display-5 mb-5">What We Offer</h1>
        </div>
        <div class="row g-4">
            <?php
            $query = $objServices->view();
            while ($data = mysqli_fetch_assoc($query)) {
            ?>
                <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded service-item">
                        <div class="service-content d-flex align-items-center justify-content-center p-4">
                            <div class="service-content-icon text-center">
                                <i class="<?= $data['service_icon']; ?> fa-7x text-primary mb-4"></i>
                                <h4 class="mb-3"><?= $data['service_title']; ?></h4>
                                <p class="mb-4"><?= $data['service_description']; ?></p>
                                <a href="<?= $data['service_link']; ?>" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<!-- Service End -->
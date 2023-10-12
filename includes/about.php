<?php
include_once('class/About.php');

$objAbout = new About();
$query = $objAbout->show();
$data = mysqli_fetch_assoc($query);

?>


<!-- About Satrt -->
<div class="container-fluid py-6">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                <img src="dashboard/uploads/<?= $data['about_photo']; ?>" class="img-fluid rounded" height="650px" width="650px" alt="">
            </div>
            <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">
                <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">About Us</small>
                <h1 class="display-5 mb-4"><?= $data['about_heading']; ?></h1>
                <p class="mb-4"><?= $data['about_para']; ?></p>
                <div class="row g-4 text-dark mb-5">
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i><?= $data['about_service_1']; ?>
                    </div>
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i><?= $data['about_service_2']; ?>
                    </div>
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i><?= $data['about_service_3']; ?>
                    </div>
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i><?= $data['about_service_4']; ?>
                    </div>
                </div>
                <a href="about.php" class="btn btn-primary py-3 px-5 rounded-pill">About Us<i class="fas fa-arrow-right ps-2"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
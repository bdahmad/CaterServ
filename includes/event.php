<?php
include_once('class/EventCategory.php');
include_once('class/Event.php');

$objEventCategory = new EventCategory();

$objEvent = new Event();
$queryEvent = $objEvent->view();

?>
<!-- Events Start -->
<div class="container-fluid event py-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Latest Events</small>
            <h1 class="display-5 mb-5">Our Social & Professional Events Gallery</h1>
        </div>


        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp" data-wow-delay="0.1s">
                <?php
                $c = 1;
                $query = $objEventCategory->view();
                while ($data = mysqli_fetch_assoc($query)) {

                    if ($c == 1) {
                        $c++; ?>
                        <li class="nav-item p-2">
                            <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                                <span class="text-dark" style="width: 150px;"><?= $data['event_cate_name']; ?></span>
                            </a>
                        </li>
                    <?php
                    } else {
                    ?>
                        <li class="nav-item p-2">
                            <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-<?= $data['event_cate_slug']; ?>">
                                <span class="text-dark" style="width: 150px;"><?= $data['event_cate_name']; ?></span>
                            </a>
                        </li>
                <?php
                    }
                }
                ?>
            </ul>
            <div class="tab-content">
                <?php
                $t = 1;
                while ($dataEV = mysqli_fetch_assoc($queryEvent)) {
                    if ($t == 1) {
                        $t++; ?>
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <?php
                                    while ($dataEV = mysqli_fetch_assoc($queryEvent)) { ?>
                                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.1s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="dashboard/uploads/<?= $dataEV['event_image']; ?>" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto"><?= $dataEV['event_cate_name']; ?></h4>
                                                    <a href="dashboard/uploads/<?= $dataEV['event_image']; ?>" data-lightbox="event-1" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>


                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div id="tab-<?= $data['event_cate_slug']; ?>" class="tab-pane fade show p-0">
                            <!-- <div class="row g-4"> -->
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                    <?php
                                    while ($dataEV = mysqli_fetch_assoc($queryEvent)) { ?>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="dashboard/uploads/<?= $dataEV['event_image']; ?>" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Wedding</h4>
                                                    <a href="dashboard/uploads/<?= $dataEV['event_image']; ?>" data-lightbox="event-8" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <!-- <div class="col-md-6 col-lg-3">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-2.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Wedding</h4>
                                                    <a href="img/01.jpg" data-lightbox="event-9" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            <!-- </div> -->
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Events End -->
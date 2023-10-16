<?php
include_once('class/EventCategory.php');
include_once('class/Event.php');

$objEventCategory = new EventCategory();
$query = $objEventCategory->view();
$objEvent = new Event();
$queryEvent = $objEvent->view();
$dat = mysqli_fetch_assoc($query)

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
                <?php while ($data = mysqli_fetch_assoc($query)) { ?>
                    <li class="nav-item p-2">
                        <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill <?= ($data['event_cate_id'] === '1') ? 'active' : ''; ?>" data-bs-toggle="pill" href="#<?= $data['event_cate_slug']; ?>">
                            <span class="text-dark" style="width: 150px;"><?= $data['event_cate_name']; ?></span>
                        </a>
                    </li>
                <?php } ?>
            </ul>
            <div class="tab-content">
                <?php
                $queryEvent = $objEvent->view();
                while ($dataEv = mysqli_fetch_assoc($queryEvent)) {
                ?>
                    <div id="<?= $dat['event_cate_slug']; ?>" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <?php

                                    // while ($dataEvent = mysqli_fetch_assoc($queryEvent)) {
                                        if($dat['event_cate_id']==$dataEv['event_cate_id']){
                                    ?>
                                    <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.1s">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100" src="dashboard/uploads/<?= $dataEv['event_image']; ?>" alt="">
                                            <!-- <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto"><? //= $dataEv['event_cate_name']; 
                                                                        ?></h4>
                                                    <a href="dashboard/uploads/<? //= $dataEv['event_image']; 
                                                                                ?>" data-lightbox="event-1" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div> -->
                                        </div>
                                    </div>
                                    <?php } 
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- Events End -->
<?php
include_once('class/Team.php');

$objTeam = new Team();
$query = $objTeam->view();


?>
<!-- Team Start -->
<div class="container-fluid team py-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our Team</small>
            <h1 class="display-5 mb-5">We have experienced chef Team</h1>
        </div>
        <div class="row g-4">
            <?php
            while ($data = mysqli_fetch_assoc($query)) {
            ?>
                <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.1s">

                    <div class="team-item rounded">
                        <img class="img-fluid rounded-top " src="dashboard/uploads/<?= $data['team_photo']; ?>" alt="">
                        <div class="team-content text-center py-3 bg-dark rounded-bottom">
                            <h4 class="text-primary"><?= $data['team_name']; ?></h4>
                            <p class="text-white mb-0"><?= $data['team_designation']; ?></p>
                        </div>
                        <div class="team-icon d-flex flex-column justify-content-center m-4">
                            <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fas fa-share-alt"></i></a>
                            <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href="<?= $data['team_facebook']; ?>"><i class="fab fa-facebook-f"></i></a>
                            <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href="<?= $data['team_twitter']; ?>"><i class="fab fa-twitter"></i></a>
                            <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href="<?= $data['team_instagram']; ?>"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            <?php  } ?>
        </div>
    </div>
</div>
<!-- Team End -->
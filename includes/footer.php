<?php
include_once('class/SocialGalary.php');
include_once('class/SocialMedia.php');

$objSocialGalary = new SocialGalary();
$querySocialGalary = $objSocialGalary->view();
$objSocialMedia = new SocialMedia();


?>
<!-- Footer Start -->
<div class="container-fluid footer py-6 my-6 mb-0 bg-light wow bounceInUp" data-wow-delay="0.1s">
   <div class="container">
      <div class="row">
         <div class="col-lg-3 col-md-6">
            <div class="footer-item">
               <h1 class="text-primary">Cater<span class="text-dark">Serv</span></h1>
               <p class="lh-lg mb-4">There cursus massa at urnaaculis estieSed aliquamellus vitae ultrs condmentum leo massamollis its estiegittis miristum.</p>
               <div class="footer-icon d-flex">
                  <?php
                     $querySocialMedia = $objSocialMedia->view();
                     $media = mysqli_fetch_assoc($querySocialMedia);
                  ?>
                  <a class="btn btn-primary btn-sm-square me-2 rounded-circle" href="<?= $media['social_facebook'] ?>"><i class="fab fa-facebook-f"></i></a>
                  <a class="btn btn-primary btn-sm-square me-2 rounded-circle" href="<?= $media['social_twitter'] ?>"><i class="fab fa-twitter"></i></a>
                  <a href="<?= $media['social_instagram'] ?>" class="btn btn-primary btn-sm-square me-2 rounded-circle"><i class="fab fa-instagram"></i></a>
                  <a href="<?= $media['social_linkedin'] ?>" class="btn btn-primary btn-sm-square rounded-circle"><i class="fab fa-linkedin-in"></i></a>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="footer-item">
               <h4 class="mb-4">Special Facilities</h4>
               <div class="d-flex flex-column align-items-start">
                  <a class="text-body mb-3" href=""><i class="fa fa-check text-primary me-2"></i>Cheese Burger</a>
                  <a class="text-body mb-3" href=""><i class="fa fa-check text-primary me-2"></i>Sandwich</a>
                  <a class="text-body mb-3" href=""><i class="fa fa-check text-primary me-2"></i>Panner Burger</a>
                  <a class="text-body mb-3" href=""><i class="fa fa-check text-primary me-2"></i>Special Sweets</a>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="footer-item">
               <h4 class="mb-4">Contact Us</h4>
               <div class="d-flex flex-column align-items-start">
                  <p><i class="fa fa-map-marker-alt text-primary me-2"></i> 123 Street, New York, USA</p>
                  <p><i class="fa fa-phone-alt text-primary me-2"></i> (+012) 3456 7890 123</p>
                  <p><i class="fas fa-envelope text-primary me-2"></i> info@example.com</p>
                  <p><i class="fa fa-clock text-primary me-2"></i> 26/7 Hours Service</p>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="footer-item">
               <h4 class="mb-4">Social Gallery</h4>
               <div class="row g-2">
                  <?php
                  while ($dataGalary = mysqli_fetch_assoc($querySocialGalary)) {
                  ?>
                     <div class="col-4">
                        <img src="dashboard/uploads/<?= $dataGalary['socio_galary_image']; ?>" class="img-fluid rounded-circle border border-primary p-2" alt="">
                     </div>
                  <?php } ?>

               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright bg-dark py-4">
   <div class="container">
      <div class="row">
         <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>CaterServ</a>, All right reserved.</span>
         </div>
         <div class="col-md-6 my-auto text-center text-md-end text-white">
            Develop By <a class="border-bottom" href="https://www.linkedin.com/in/adm-ad-ali">Ahmad Ali</a>
         </div>
      </div>
   </div>
</div>
<!-- Copyright End -->


<a href="#" class="btn btn-md-square btn-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<script src="js/main.js"></script>
</body>

</html>
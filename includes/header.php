<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <title>CaterServ - Catering Services Website Template</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta content="" name="keywords">
   <meta content="" name="description">

   <link href="css/googleapis.swap.css" rel="stylesheet">

   <link rel="stylesheet" href="css/fontawesome.all.css" />
   <link href="css/bootstrap-icons.css" rel="stylesheet">

   <link href="lib/animate/animate.min.css" rel="stylesheet">
   <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
   <link href="lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">

   <link href="css/bootstrap.min.css" rel="stylesheet">

   <link href="css/style.css" rel="stylesheet">
</head>

<body>

   <!-- Spinner Start -->
   <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
      <div class="spinner-grow text-primary" role="status"></div>
   </div>
   <!-- Spinner End -->

   <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
   <!-- Navbar start -->
   <div class="container-fluid nav-bar">
      <div class="container">
         <nav class="navbar navbar-light navbar-expand-lg py-4">
            <a href="index.php" class="navbar-brand">
               <h1 class="text-primary fw-bold mb-0">Cater<span class="text-dark">Serv</span> </h1>
            </a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
               <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
               <div class="navbar-nav mx-auto">
                  <a href="index.php" class="nav-item nav-link <?= ($activePage == 'index') ? 'active' : ''; ?>">Home</a>
                  <a href="about.php" class="nav-item nav-link <?= ($activePage == 'about') ? 'active' : ''; ?>">About</a>
                  <a href="service.php" class="nav-item nav-link <?= ($activePage == 'service') ? 'active' : ''; ?>">Services</a>
                  <a href="event.php" class="nav-item nav-link <?= ($activePage == 'event') ? 'active' : ''; ?>">Events</a>
                  <a href="menu.php" class="nav-item nav-link <?= ($activePage == 'menu') ? 'active' : ''; ?>">Menu</a>
                  <a href="book.php" class="nav-item nav-link <?= ($activePage == 'book') ? 'active' : ''; ?>">Booking</a>
                  <a href="blog.php" class="nav-item nav-link <?= ($activePage == 'blog') ? 'active' : ''; ?>">Our Blog</a>
                  <a href="team.php" class="nav-item nav-link <?= ($activePage == 'team') ? 'active' : ''; ?>">Our Team</a>
                  <a href="testimonial.php" class="nav-item nav-link <?= ($activePage == 'testimonial') ? 'active' : ''; ?>">Testimonial</a>
                  <!-- <div class="nav-item dropdown">
                     <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                     <div class="dropdown-menu bg-light">
                        
                        <a href="404.php" class="dropdown-item">404 Page</a>
                     </div>
                  </div> -->
                  <a href="contact.php" class="nav-item nav-link <?= ($activePage == 'contact') ? 'active' : ''; ?>">Contact</a>
               </div>
               <a href="" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill">Book Now</a>
            </div>
         </nav>
      </div>
   </div>
   <!-- Navbar End -->
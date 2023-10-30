<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
   <nav class="navbar bg-light navbar-light">
      <a href="index.php" class="navbar-brand mx-4 mb-3">
         <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
      </a>
      <div class="d-flex align-items-center ms-4 mb-4">
         <div class="position-relative">
            <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
            <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
         </div>
         <div class="ms-3">
            <h6 class="mb-0">Jhon Doe</h6>
            <span>Admin</span>
         </div>
      </div>
      <?php $activePage = basename($_SERVER['PHP_SELF'], ".php") ?>
      <div class="navbar-nav w-100">
         <a href="index.php" class="nav-item nav-link <?= ($activePage == "index") ? 'active' : ''; ?>"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
         <a href="all-user.php" class="nav-item nav-link <?= ($activePage == "all-user") ? 'active' : ''; ?>"><i class="fa fa-tachometer-alt me-2"></i>Users</a>
         <a href="all-team.php" class="nav-item nav-link <?= ($activePage == "all-team") ? 'active' : ''; ?>"><i class="fa fa-tachometer-alt me-2"></i>Team</a>
         <a href="all-services.php" class="nav-item nav-link <?= ($activePage == "all-services") ? 'active' : ''; ?>"><i class="fa fa-tachometer-alt me-2"></i>Services</a>
         <a href="edit-about.php" class="nav-item nav-link <?= ($activePage == "edit-about") ? 'active' : ''; ?>"><i class="fa fa-tachometer-alt me-2"></i>About</a>
         <a href="edit-achievement.php" class="nav-item nav-link <?= ($activePage == "edit-achievement") ? 'active' : ''; ?>"><i class="fa fa-tachometer-alt me-2"></i>Achievement</a>
         <a href="all-social-galary.php" class="nav-item nav-link <?= ($activePage == "all-social-galary") ? 'active' : ''; ?>"><i class="fa fa-tachometer-alt me-2"></i>Social Gallery</a>
         <a href="all-social-media.php" class="nav-item nav-link <?= ($activePage == "all-social-media") ? 'active' : ''; ?>"><i class="fa fa-tachometer-alt me-2"></i>Social Media</a>
         <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle <?= ($activePage == "all-event-category") || ($activePage == "all-event") ? 'active' : ''; ?>" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Event</a>
            <div class="dropdown-menu bg-transparent border-0 mx-5">
               <a href="all-event-category.php" class="dropdown-item mb-1 <?= ($activePage == "all-event-category") ? 'active' : ''; ?>"><i class="fa fa-laptop me-2"></i> Category</a>
               <a href="all-event.php" class="dropdown-item <?= ($activePage == "all-event") ? 'active' : ''; ?>"><i class="fa fa-laptop me-2"></i> Events</a>
            </div>
         </div>
         <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle <?= ($activePage == "all-booking") || ($activePage == "all-country") ? 'active' : ''; ?>" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Booking</a>
            <div class="dropdown-menu bg-transparent border-0 mx-5">
               <a href="all-booking.php" class="dropdown-item mb-1 <?= ($activePage == "all-booking") ? 'active' : ''; ?>"><i class="fa fa-laptop me-2"></i> Bookings</a>
               <a href="all-country.php" class="dropdown-item mb-1 <?= ($activePage == "all-country") ? 'active' : ''; ?>"><i class="fa fa-laptop me-2"></i> Country</a>
               <a href="all-city.php" class="dropdown-item <?= ($activePage == "all-city") ? 'active' : ''; ?>"><i class="fa fa-laptop me-2"></i> City</a>
               <a href="all-place.php" class="dropdown-item <?= ($activePage == "all-place") ? 'active' : ''; ?>"><i class="fa fa-laptop me-2"></i> Place</a>
            </div>
         </div>
         <a href="widget.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
         <a href="form.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
         <a href="table.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
         <a href="chart.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
         <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
            <div class="dropdown-menu bg-transparent border-0">
               <a href="signin.php" class="dropdown-item">Sign In</a>
               <a href="signup.php" class="dropdown-item">Sign Up</a>
               <a href="404.php" class="dropdown-item">404 Error</a>
               <a href="blank.php" class="dropdown-item">Blank Page</a>
            </div>
         </div>
      </div>
   </nav>
</div>
<!-- Sidebar End -->
<?php
require_once('functions/function.php');
include_once('../class/User.php');
getHeader();
getSidebar();
$id = $_GET['v'];
$objUser = new User();
$query = $objUser->viewUser($id);
$data = mysqli_fetch_assoc($query);



?>
<!-- Content Start -->
<div class="content">
  <?php getNavbar(); ?>

  <div class="row">
    <div class="col-md-12">
      <div class="card mb-3 mt-5">
        <div class="card-header">
          <div class="row">
            <div class="col-md-8 card_title_part">
              <i class="fab fa-gg-circle"></i>View User Information
            </div>
            <div class="col-md-4 card_button_part">
              <a href="all-user.php" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All User</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <table class="table table-bordered table-striped table-hover custom_view_table">
                <tr>
                  <td>Name</td>
                  <td>:</td>
                  <td><?= $data['user_name']; ?></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td>:</td>
                  <td><?= $data['user_email']; ?></td>
                </tr>
                <tr>
                  <td>Phone</td>
                  <td>:</td>
                  <td><?= $data['user_phone']; ?></td>
                </tr>
                <tr>
                  <td>Username</td>
                  <td>:</td>
                  <td><?= $data['user_username']; ?></td>
                </tr>
                <tr>
                  <td>Designation</td>
                  <td>:</td>
                  <td><?= $data['user_designation']; ?></td>
                </tr>
                <tr>
                  <td>Address</td>
                  <td>:</td>
                  <td><?= $data['user_address']; ?></td>
                </tr>
                <tr>
                  <td>Role</td>
                  <td>:</td>
                  <td><?= $data['role_name']; ?></td>
                </tr>
                <tr>
                  <td>Status</td>
                  <td>:</td>
                  <td><?= $data['status_name']; ?></td>
                </tr>
                <tr>
                  <td>Photo</td>
                  <td>:</td>
                  <td>
                    <?php
                    if ($data['user_photo'] != '') {
                    ?>
                      <img class="img200" src="uploads/<?= $data['user_photo']; ?>" alt="user">
                    <?php
                    } else {
                    ?>
                      <img class="img200" src="images/avatar.jpg" alt="user" />
                    <?php
                    }
                    ?>
                  </td>
                </tr>
              </table>
            </div>
            <div class="col-md-2"></div>
          </div>
        </div>
        <div class="card-footer">
          <div class="btn-group" role="group" aria-label="Button group">
            <button type="button" class="btn btn-sm btn-dark">Print</button>
            <button type="button" class="btn btn-sm btn-secondary">PDF</button>
            <button type="button" class="btn btn-sm btn-dark">Excel</button>
          </div>
        </div>
      </div>
    </div>


    <?php getFooter(); ?>
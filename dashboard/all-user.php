<?php
require_once('functions/function.php');
getHeader();
getSidebar();
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
            <i class="fab fa-gg-circle"></i> All User Information
          </div>
          <div class="col-md-4 card_button_part">
            <a href="add-user.php" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i>Add User</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-striped table-hover custom_table">
          <thead class="table-dark">
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Username</th>
              <th>Role</th>
              <th>Image</th>
              <th>Manage</th>
            </tr>
          </thead>
          <tbody>
          
            
            
          </tbody>
        </table>
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
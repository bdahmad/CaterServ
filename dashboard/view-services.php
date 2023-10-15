<?php
require_once('functions/function.php');
getHeader();
getSidebar();
include_once('../class/Services.php');
$objServices = new Services();
$query = $objServices->view();
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
              <i class="fab fa-gg-circle"></i>View Service Information
            </div>
            <div class="col-md-4 card_button_part">
              <a href="all-services.php" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Service</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <table class="table table-bordered table-striped table-hover custom_view_table">
                <tr>
                  <td>Icon</td>
                  <td>:</td>
                  <td><?= $data['service_icon']; ?></td>
                </tr>
                <tr>
                  <td>Title</td>
                  <td>:</td>
                  <td><?= $data['service_title']; ?></td>
                </tr>
                <tr>
                  <td>Description</td>
                  <td>:</td>
                  <td><?= $data['service_description'];?></td>
                </tr>
                <tr>
                  <td>Link</td>
                  <td>:</td>
                  <td><?= $data['service_link']; ?></td>
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
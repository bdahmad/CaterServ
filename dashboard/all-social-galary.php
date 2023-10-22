<?php
require_once('functions/function.php');
include_once('../class/SocialGalary.php');
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
              <i class="fab fa-gg-circle"></i> All Socail Galary Information
            </div>
            <div class="col-md-4 card_button_part">
              <a href="add-social-galary.php" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i>Add Galary</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-striped table-hover custom_table">
            <thead class="table-dark">
              <tr>
                <th>Image</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $objSocialGalary = new SocialGalary();
              $query = $objSocialGalary->view();
              while ($data = mysqli_fetch_assoc($query)) {

              ?>
                <tr>
                  <td>
                    <?php
                    if ($data['socio_galary_image'] != '') {
                    ?>
                      <img height="40px" src="uploads/<?= $data['socio_galary_image']; ?>" alt="image">
                    <?php
                    } else {
                    ?>
                      <img class="img200" height="40" src="images/avatar.png" alt="" />
                    <?php
                    }
                    ?>

                  </td>
                  <td><?= $data['socio_galary_status']; ?></td>
                  <td>
                      <a class="btn btn-sm btn-primary" href="view-user.php?v=<?= $data['socio_galary_id']; ?>"><i class="fas fa-eye"></i> </a> 
                     <a class="btn btn-sm btn-info" href="edit-user.php?e=<?= $data['socio_galary_id']; ?>"><i class="fas fa-edit"></i></a>
                        <!-- <li><a class="btn btn-sm btn-primary" href="delete-user.php?d=<?= ['user_id']; ?>"><i class="fas fa-trash-alt"></i></a></li> -->
                        <!-- <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#delete<?=['socio_galary_id'];?>">Delete</button> -->
                      
                    
                    <!-- Button trigger modal -->
                    

                    <!-- Modal -->
                    <div class="modal fade" id="delete<?= ['user_id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete Message</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Are you sure to delete?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                            <a  type="button" class="btn btn-primary" href="delete-user.php?d=<?= ['user_id']; ?>">Yes</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              <?php
              }
              ?>
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
<?php
require_once('functions/function.php');
include_once('../class/User.php');
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
              <a href="add-team.php" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i>Add User</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-striped table-hover custom_table">
            <thead class="table-dark">
              <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Username</th>
                <th>Role</th>
                <th>Status</th>
                <th>Image</th>
                <th>Manage</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $objUser = new User();
              $query = $objUser->viewAllUser();
              while ($data = mysqli_fetch_assoc($query)) {

              ?>
                <tr>
                  <td><?= $data['user_name']; ?></td>
                  <td><?= $data['user_phone']; ?></td>
                  <td><?= $data['user_email']; ?></td>
                  <td><?= $data['user_username']; ?></td>
                  <td><?= $data['role_name']; ?></td>
                  <td><?= $data['status_name']; ?></td>
                  <td>
                    <?php
                    if ($data['user_photo'] != '') {
                    ?>
                      <img height="40px" src="uploads/<?= $data['user_photo']; ?>" alt="user">
                    <?php
                    } else {
                    ?>
                      <img class="img200" height="40" src="images/avatar.png" alt="" />
                    <?php
                    }
                    ?>

                  </td>
                  <td>
                    <div class="btn-group btn_group_manage" role="group">
                      <button type="button" class="btn btn-sm btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Manage</button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="view-user.php?v=<?= $data['user_id']; ?>">View</a></li>
                        <li><a class="dropdown-item" href="edit-user.php?e=<?= $data['user_id']; ?>">Edit</a></li>
                        <li><a class="dropdown-item" href="change-password.php?p=<?= $data['user_id']; ?>">Change Password</a></li>
                        <!-- <li><a class="dropdown-item" href="delete-user.php?d=<?= $data['user_id']; ?>">Delete</a></li> -->
                        <li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete<?=$data['user_id'];?>">Delete</button></li>
                      </ul>
                    </div>
                    <!-- Button trigger modal -->
                    

                    <!-- Modal -->
                    <div class="modal fade" id="delete<?=$data['user_id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <a  type="button" class="btn btn-primary" href="delete-user.php?d=<?= $data['user_id']; ?>">Yes</a>
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
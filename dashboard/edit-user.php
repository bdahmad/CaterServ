<?php
require_once('functions/function.php');
include_once('../class/User.php');
include_once('../class/Role.php');
getHeader();
getSidebar();

$id = $_GET['e'];
$objRole = new Role();
$objUser = new User();
$query = $objUser->viewUser($id);
$dat = mysqli_fetch_assoc($query);



?>

<!-- Content Start -->
<div class="content">
    <?php getNavbar(); ?>

    <div class="row">
        <div class="col-md-12 ">
            <form method="post" action="" enctype="multipart/form-data">
                <div class="card mb-3 mt-5">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-8 card_title_part">
                                <i class="fab fa-gg-circle"></i> Update User Information
                            </div>
                            <div class="col-md-4 card_button_part">
                                <a href="all-user.php" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All User</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Name<span class="req_star">*</span>:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form_control" id="" value="<?= $dat['user_name']; ?>" name="name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Email<span class="req_star">*</span>:</label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control form_control" value="<?= $dat['user_email']; ?>" id="" name="email">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Phone:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form_control" id="" name="phone" value="<?= $dat['user_phone']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Username<span class="req_star">*</span>:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form_control" value="<?= $dat['user_username']; ?>" id="" name="" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Designation<span class="req_star">*</span>:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form_control" value="<?= $dat['user_designation']; ?>" id="" name="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Address<span class="req_star">*</span>:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form_control" value="<?= $dat['user_address']; ?>" id="" name="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">User Role<span class="req_star">*</span>:</label>
                            <div class="col-sm-4">
                                <select class="form-control form_control" id="" name=" role">
                                    <option>Select Role</option>
                                    <?php

                                    $data = $objRole->showData();
                                    while ($row = mysqli_fetch_assoc($data)) {
                                    ?>
                                        <option value="<?= $row['role_id']; ?>" <?php if ($row['role_id'] == $dat['role_id']) echo 'selected' ?>><?= $row['role_name']; ?></option>
                                    <?php
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>
                        <div>

                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">User Status<span class="req_star">*</span>:</label>
                            <div class="col-sm-4">
                                <select class="form-control form_control" id="" name="status">

                                    <option>Select Status</option>
                                    <?php
                                    include_once('../class/Status.php');
                                    $objStatus = new Status();

                                    $data = $objStatus->showData();


                                    while ($row = mysqli_fetch_assoc($data)) {
                                    ?>
                                        <option value="<?= $row['status_id']; ?>" <?php if ($row['status_id'] == $dat['status_id']) echo 'selected' ?>><?= $row['status_name']; ?></option>
                                    <?php
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Photo:</label>
                            <div class="col-sm-4">
                                <input type="file" class="form-control form_control" id="" name="photo">
                            </div>
                            <div class="col-sm-2">
                                <img class="img200" src="uploads/<?= $dat['user_photo']; ?>" alt="">
                            </div>
                        </div>

                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-sm btn-dark">UPDATE</button>
                    </div>
                </div>
            </form>
        </div>

    </div>


    <?php getFooter(); ?>
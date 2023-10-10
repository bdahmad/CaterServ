<?php
require_once('functions/function.php');
getHeader();
getSidebar();
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
                                <i class="fab fa-gg-circle"></i>User Registration
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
                                <input type="text" class="form-control form_control" id="" name="name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Email<span class="req_star">*</span>:</label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control form_control" id="" name="email">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Phone:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form_control" id="" name="phone">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Username<span class="req_star">*</span>:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form_control" id="" name="username">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Password<span class="req_star">*</span>:</label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control form_control" id="" name="password">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Confirm-Password<span class="req_star">*</span>:</label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control form_control" id="" name="confirmPassword">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Designation<span class="req_star">*</span>:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form_control" id="" name="username">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Address<span class="req_star">*</span>:</label>
                            <div class="col-sm-7">
                                <!-- <input type="address"  id="" name="username"> -->
                                <textarea name="" id="" class="form-control form_control" cols="10" rows="2"></textarea>
                            </div>
                            
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">User Role<span class="req_star">*</span>:</label>
                            <div class="col-sm-7">
                                <select class="form-control form_control" id="" name="role">
                                    <option>Select Role</option>

                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Photo:</label>
                            <div class="col-sm-7">
                                <input type="file" class="form-control form_control" id="" name="photo">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-sm btn-dark">REGISTRATION</button>
                    </div>
                </div>
            </form>
        </div>

    </div>


    <?php getFooter(); ?>
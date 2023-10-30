<?php
require_once('functions/function.php');
include_once('../class/SocialMedia.php');

getHeader();
getSidebar();
$objSocialMedia = new SocialMedia();



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
                                <i class="fab fa-gg-circle"></i>add social image
                            </div>
                            <div class="col-md-4 card_button_part">
                                <a href="all-social-media.php" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Social Media</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_POST['add-media'])) {
                            echo $objSocialMedia->insert($_POST);
                        }
                        ?>
                        
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Facebook</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control form_control" id="" name="social_facebook" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Twitter</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control form_control" id="" name="social_twitter" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Instagram</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control form_control" id="" name="social_instagram" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">LinkedIn</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control form_control" id="" name="social_linkedIn" >
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-sm btn-dark" name="add-media">Submit</button>
                    </div>
                </div>
            </form>
        </div>

    </div>




    <?php getFooter(); ?>

    <script>
        var loadFile = function() {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
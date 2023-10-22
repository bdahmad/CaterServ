<?php
require_once('functions/function.php');
include_once('../class/SocialGalary.php');

getHeader();
getSidebar();
$objSocialGalary = new SocialGalary();



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
                                <a href="all-social-galary.php" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Social Galary</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_POST['add-img'])) {
                            echo $objSocialGalary->insert($_POST);
                        }
                        ?>
                        
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Photo:</label>
                            <div class="col-sm-4">
                                <input type="file" onchange="loadFile()" class="form-control form_control" id="" name="socio_galary_image" >
                            </div>
                            <div class="col-sm-2">
                                <img class="img200" id="output"  alt="">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-sm btn-dark" name="add-img">ADD Image</button>
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
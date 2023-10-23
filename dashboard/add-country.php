<?php
require_once('functions/function.php');
include_once('../class/Country.php');

getHeader();
getSidebar();
$objCountry = new Country();




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
                                <i class="fab fa-gg-circle"></i>add country
                            </div>
                            <div class="col-md-4 card_button_part">
                                <a href="all-country.php" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Country</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_POST['add-country'])) {
                            echo $objCountry->insert($_POST);
                        }
                        ?>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Country Name:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form_control" id="" name="country_name">
                            </div>
                        
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-sm btn-dark" name="add-country">Submit</button>
                    </div>
                </div>
            </form>
        </div>

    </div>




    <?php getFooter(); ?>

    <script>
        
    </script>
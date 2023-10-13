<?php
require_once('functions/function.php');

getHeader();
getSidebar();

include_once('../class/Achievement.php');

$objAchievement = new Achievement();

$query = $objAchievement->show();
$data = mysqli_fetch_assoc($query);

$id = $data['achieve_id'];

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
                                <i class="fab fa-gg-circle"></i> Update About Information
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_POST['update-achievement'])) {
                            echo $objAchievement->update($_POST, $id);
                        }
                        ?>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Customers<span class="req_star">*</span>:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form_control" id="" value="<?= $data['achieve_customers']; ?>" name="achieve_customers">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Chefs<span class="req_star">*</span>:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form_control" value="<?= $data['achieve_chefs']; ?>" id="" name="achieve_chefs">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Events<span class="req_star">*</span>:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form_control" id="" name="achieve_events" value="<?= $data['achieve_events']; ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Youtube Video:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form_control" value="<?= $data['achieve_video']; ?>" name="achieve_video">
                            </div>

                        </div>

                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" name="update-achievement" class="btn btn-sm btn-dark">UPDATE</button>
                    </div>
                </div>
            </form>
        </div>

    </div>


    <?php getFooter(); ?>
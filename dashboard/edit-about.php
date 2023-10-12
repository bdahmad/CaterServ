<?php
require_once('functions/function.php');

getHeader();
getSidebar();

include_once('../class/About.php');

$objAbout = new About();

$query = $objAbout->show();
$data = mysqli_fetch_assoc($query);

$id = $data['about_id'];

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
                        if (isset($_POST['update-about'])) {
                            echo $objAbout->update($_POST, $id);
                        }
                        ?>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Heading<span class="req_star">*</span>:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form_control" id="" value="<?= $data['about_heading']; ?>" name="heading">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Paragraph<span class="req_star">*</span>:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form_control" value="<?= $data['about_para']; ?>" id="" name="para">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Service-1<span class="req_star">*</span>:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form_control" id="" name="service_1" value="<?= $data['about_service_1']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Service-2<span class="req_star">*</span>:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form_control" value="<?= $data['about_service_2']; ?>" id="" name="service_2">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Service-3<span class="req_star">*</span>:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form_control" value="<?= $data['about_service_3']; ?>" id="" name="service_3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Service-4<span class="req_star">*</span>:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form_control" value="<?= $data['about_service_4']; ?>" id="" name="service_4">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Photo:</label>
                            <div class="col-sm-4">
                                <input type="file" onchange="loadFile()" class="form-control form_control" id="photo" name="photo">
                            </div>
                            <div class="col-sm-2">
                                <?php
                                if ($data['about_photo'] != '') {
                                ?>
                                    <img class="img200" id="output" src="uploads/<?= $data['about_photo']; ?>" alt="user">
                                <?php
                                } else {
                                ?>
                                    <img class="img200" id="output" src="images/avatar.png" alt="" />
                                <?php
                                }
                                ?>
                                <!-- <img class="img200" id="output" src="uploads/<?= $dat['user_photo']; ?>" alt=""> -->
                            </div>
                        </div>

                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" name="update-about" class="btn btn-sm btn-dark">UPDATE</button>
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
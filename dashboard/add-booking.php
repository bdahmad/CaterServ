<?php
require_once('functions/function.php');
include_once('../class/EventCategory.php');
include_once('../class/Event.php');

getHeader();
getSidebar();
$objEventCategory = new EventCategory();
$objEvent = new Event();




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
                                <i class="fab fa-gg-circle"></i>add event
                            </div>
                            <div class="col-md-4 card_button_part">
                                <a href="all-event.php" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All event</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_POST['add-event'])) {
                            echo $objEvent->insert($_POST);
                        }
                        ?>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Event Name<span class="req_star">*</span>:</label>
                            <div class="col-sm-7">
                                <select class="form-control form_control" id="" name="event_name">
                                    <option>Select Status</option>
                                    <?php
                                    $data = $objEventCategory->view();

                                    while ($row = mysqli_fetch_assoc($data)) {
                                    ?>
                                        <option value="<?= $row['event_cate_id']; ?>"><?= $row['event_cate_name']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Photo:</label>
                            <div class="col-sm-4">
                                <input type="file" onchange="loadFile()" class="form-control form_control" id="" name="event_image">
                            </div>
                            <div class="col-sm-2">
                                <img class="img200" id="output"  alt="">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-sm btn-dark" name="add-event">ADD Event</button>
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
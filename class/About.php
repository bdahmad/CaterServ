<?php

include_once('Config.php');

class About extends Config
{
    public function show()
    {
        $sql = "SELECT * FROM `tbl_about` ";
        return mysqli_query($this->con, $sql);
    }
    public function update($fromData, $id)
    {
        $heading = $fromData['heading'];
        $para = $fromData['para'];
        $service_1 = $fromData['service_1'];
        $service_2 = $fromData['service_2'];
        $service_3 = $fromData['service_3'];
        $service_4 = $fromData['service_4'];
        $photo = $_FILES['photo'];


        $photoName = '';
        if ($photo['name'] != '') {
            $photoName = 'about_' . time() . '_' . rand(100000, 100000000) . '.' . pathinfo($photo['name'], PATHINFO_EXTENSION);
        }

        $sql = "UPDATE `tbl_about` SET `about_heading`='$heading',`about_para`='$para',`about_service_1`='$service_1',`about_service_2`='$service_2',`about_service_3`='$service_3',`about_service_4`='$service_4',`about_photo`='$photoName' WHERE `about_id`='$id'";

        if (empty($heading)) {
            return '<div class="alert alert-danger">Heading is required</div>';
        } elseif (empty($para)) {
            return '<div class="alert alert-danger">Paragraph is required</div>';
        } elseif (empty($service_1)) {
            return '<div class="alert alert-danger">Service 1 is required</div>';
        } elseif (empty($service_2)) {
            return '<div class="alert alert-danger">Service 2 is required</div>';
        } elseif (empty($service_3)) {
            return '<div class="alert alert-danger">Service 3 is required</div>';
        } elseif (empty($service_4)) {
            return '<div class="alert alert-danger">Service 4 is required</div>';
        } else {
            if (mysqli_query($this->con, $sql)) {
                move_uploaded_file($photo['tmp_name'], 'uploads/' . $photoName);
                return '<div class="alert alert-success">Data Modify Successful.</div>';
            } else {
                return '<div class="alert alert-danger">Data Modify Failed.</div>';
            }
        }
    }
}

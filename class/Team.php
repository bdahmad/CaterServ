<?php

include_once('Config.php');

class Team extends Config
{
    public function insert($allData)
    {
        $team_name = htmlentities($allData['team_name'], ENT_QUOTES);
        $team_designation = htmlentities($allData['team_designation'], ENT_QUOTES);
        $team_facebook = htmlentities($allData['team_facebook'], ENT_QUOTES);
        $team_twitter = htmlentities($allData['team_twitter'], ENT_QUOTES);
        $team_instagram = htmlentities($allData['team_instagram'], ENT_QUOTES);
        $team_slug = uniqid('U');
        $photo = $_FILES['photo'];


        $photoName = '';
        if ($photo['name'] != '') {
            $photoName = 'team_' . time() . '_' . rand(100000, 100000000) . '.' . pathinfo($photo['name'], PATHINFO_EXTENSION);
        }

        $sql = "INSERT INTO `tbl_team`( `team_name`, `team_designation`, `team_facebook`, `team_twitter`, `team_instagram`, `team_slug`, `team_photo`) 
      VALUES ('$team_name','$team_designation','$team_facebook','$team_twitter','$team_instagram','$team_slug','$photoName')";

        if (empty($team_name)) {
            return '<div class="alert alert-danger">Name is required</div>';
        } elseif (empty($team_designation)) {
            return '<div class="alert alert-danger">Designation is required</div>';
        } elseif (empty($team_facebook)) {
            return '<div class="alert alert-danger">Facebook Link is required</div>';
        } elseif (empty($team_twitter)) {
            return '<div class="alert alert-danger">Twitter Link is required</div>';
        } elseif (empty($team_instagram)) {
            return '<div class="alert alert-danger">Instagram Link is required</div>';
        } else {
            if (mysqli_query($this->con, $sql)) {
                move_uploaded_file($photo['tmp_name'], 'uploads/' . $photoName);
                return '<div class="alert alert-success">Registration Successful.</div>';
            } else {
                return '<div class="alert alert-danger">Registration Failed.</div>';
            }
        }
    }

    public function view()
    {
        $sql = "SELECT * FROM `tbl_team`";
        return mysqli_query($this->con, $sql);
    }
    public function find($getViewId)
    {
        $sql = "SELECT * FROM `tbl_users` NATURAL JOIN `tbl_role`NATURAL JOIN `tbl_status` WHERE user_id = '$getViewId' ";
        return mysqli_query($this->con, $sql);
    }
    public function update($allData, $getEditId)
    {
        $name = htmlentities($allData['name'], ENT_QUOTES);
        $email = htmlentities($allData['email'], ENT_QUOTES);
        $phone = htmlentities($allData['phone'], ENT_QUOTES);
        $designation = htmlentities($allData['designation'], ENT_QUOTES);
        $address = htmlentities($allData['address'], ENT_QUOTES);
        $role = $allData['role'];
        $status = $allData['status'];
        $photo = $_FILES['photo'];

        $photoName = '';
        if ($photo['name'] != '') {
            $photoName = 'users_' . time() . '_' . rand(100000, 100000000) . '.' . pathinfo($photo['name'], PATHINFO_EXTENSION);
        }

        $sql = "UPDATE `tbl_users` SET `user_name`='$name',`user_email`='$email',`user_phone`='$phone',
      `user_designation`='$designation',`user_address`='$address',
      `role_id`='$role',`status_id`='$status',`user_photo`='$photoName' WHERE `user_id`='$getEditId'";

        if (empty($name)) {
            return '<div class="alert alert-danger">Name is required</div>';
        } elseif (empty($email)) {
            return '<div class="alert alert-danger">E-mail is required</div>';
        } elseif (empty($phone)) {
            return '<div class="alert alert-danger">Phone is required</div>';
        } elseif (empty($designation)) {
            return '<div class="alert alert-danger">Designation is required</div>';
        } elseif (empty($address)) {
            return '<div class="alert alert-danger">Address is required</div>';
        } elseif (empty($role)) {
            return '<div class="alert alert-danger">Select Role</div>';
        } elseif (empty($status)) {
            return '<div class="alert alert-danger">Select Status</div>';
        } else {
            if (mysqli_query($this->con, $sql)) {
                move_uploaded_file($photo['tmp_name'], 'uploads/' . $photoName);
                return '<div class="alert alert-success">Registration Successful.</div>';
            } else {
                return '<div class="alert alert-danger">Registration Failed.</div>';
            }
        }
    }
    public function delete($getDeleteId)
    {
        $sql = "DELETE FROM `tbl_users` WHERE user_id = '$getDeleteId'";
        return mysqli_query($this->con, $sql);
    }
}

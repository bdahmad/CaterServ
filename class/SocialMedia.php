<?php

include_once('Config.php');

class SocialMedia extends Config
{
   public function insert($allData)
   {
      $social_facebook = $allData['social_facebook'];
      $social_twitter = $allData['social_twitter'];
      $social_instagram = $allData['social_instagram'];
      $social_linkedIn = $allData['social_linkedIn'];


      $sql = "INSERT INTO `tbl_social_media`(`social_facebook`, `social_instagram`, `social_twitter`, `social_linkedin`)
      VALUES ('$social_facebook','$social_twitter','$social_instagram','$social_linkedIn')";

      if (empty($social_facebook)) {
         return '<div class="alert alert-danger">This field is required</div>';
      } elseif (empty($social_twitter)) {
         return '<div class="alert alert-danger">This field  is required</div>';
      } elseif (empty($social_instagram)) {
         return '<div class="alert alert-danger">This field is required</div>';
      } elseif (empty($social_linkedIn)) {
         return '<div class="alert alert-danger">This field  is required</div>';
      } else {
         if (mysqli_query($this->con, $sql)) {
            return '<div class="alert alert-success">Successfully Upload .</div>';
         } else {
            return '<div class="alert alert-danger">Upload Failed.</div>';
         }
      }
   }

   public function view()
   {
      $sql = "SELECT * FROM `tbl_social_media` ";
      return mysqli_query($this->con, $sql);
   }
   public function viewUser($getViewId)
   {
      $sql = "SELECT * FROM `tbl_users` NATURAL JOIN `tbl_role`NATURAL JOIN `tbl_status` WHERE social_id = '$getViewId' ";
      return mysqli_query($this->con, $sql);
   }
   public function updateUser($allData, $getEditId)
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
   public function deleteUser($getDeleteId)
   {
      $sql = "DELETE FROM `tbl_users` WHERE user_id = '$getDeleteId'";
      return mysqli_query($this->con, $sql);
   }
}

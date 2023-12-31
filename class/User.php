<?php

include_once('Config.php');

class User extends Config
{
   public function addUser($allData)
   {
      $name = htmlentities($allData['name'], ENT_QUOTES);
      $email = htmlentities($allData['email'], ENT_QUOTES);
      $phone = htmlentities($allData['phone'], ENT_QUOTES);
      $username = htmlentities($allData['username'], ENT_QUOTES);
      $password = htmlentities($allData['password'], ENT_QUOTES);
      $confirmPassword = htmlentities($allData['confirmPassword'], ENT_QUOTES);
      $designation = htmlentities($allData['designation'], ENT_QUOTES);
      $address = htmlentities($allData['address'], ENT_QUOTES);
      $slug = uniqid('U');
      $role = $allData['role'];
      $status = $allData['status'];
      $photo = $_FILES['photo'];


      $photoName = '';
      if ($photo['name'] != '') {
         $photoName = 'users_' . time() . '_' . rand(100000, 100000000) . '.' . pathinfo($photo['name'], PATHINFO_EXTENSION);
      }

      $mdPass = md5($password); // password convert in Hash value in 32 bit

      $sql = "INSERT INTO `tbl_users`( `user_name`, `user_email`, `user_phone`, `user_username`, `user_password`, `user_designation`, `user_address`, `user_slug`, `role_id`, `status_id`,`user_photo`) 
      VALUES ('$name','$email','$phone','$username','$mdPass','$designation','$address','$slug','$role','$status','$photoName')";

      if (empty($name)) {
         return '<div class="alert alert-danger">Name is required</div>';
      } elseif (empty($email)) {
         return '<div class="alert alert-danger">E-mail is required</div>';
      } elseif (empty($phone)) {
         return '<div class="alert alert-danger">Phone is required</div>';
      } elseif (empty($username)) {
         return '<div class="alert alert-danger">Username is required</div>';
      } elseif (empty($password)) {
         return '<div class="alert alert-danger">Password is required</div>';
      } elseif (empty($confirmPassword)) {
         return '<div class="alert alert-danger">Confirm Password is required</div>';
      } elseif (empty($designation)) {
         return '<div class="alert alert-danger">Designation is required</div>';
      } elseif (empty($address)) {
         return '<div class="alert alert-danger">Address is required</div>';
      } elseif (empty($role)) {
         return '<div class="alert alert-danger">Select Role</div>';
      } elseif (empty($status)) {
         return '<div class="alert alert-danger">Select Status</div>';
      } else {
         if ($password == $confirmPassword) {
            if (mysqli_query($this->con, $sql)) {
               move_uploaded_file($photo['tmp_name'], 'uploads/' . $photoName);
               return '<div class="alert alert-success">Registration Successful.</div>';
            } else {
               return '<div class="alert alert-danger">Registration Failed.</div>';
            }
         } else {
            return '<div class="alert alert-danger">Password didn\'t match.</div>';
         }
      }
   }

   public function viewAllUser()
   {
      $sql = "SELECT * FROM `tbl_users` NATURAL JOIN `tbl_role`NATURAL JOIN `tbl_status`";
      return mysqli_query($this->con, $sql);
   }
   public function viewUser($getViewId)
   {
      $sql = "SELECT * FROM `tbl_users` NATURAL JOIN `tbl_role`NATURAL JOIN `tbl_status` WHERE user_id = '$getViewId' ";
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
   public function deleteUser($getDeleteId){
      $sql = "DELETE FROM `tbl_users` WHERE user_id = '$getDeleteId'";
      return mysqli_query($this->con, $sql);
   }
}

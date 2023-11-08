<?php

include_once('Config.php');
include_once('lib/ImageResize.php');
use \Gumlet\ImageResize;

class SocialGalary extends Config
{
   public function insert($allData)
   {

      $photo = $_FILES['socio_galary_image'];
      $photoName = '';
      if ($photo['name'] != '') {
         $photoName = 'social_galary_' . time() . '_' . rand(100000, 100000000) . '.' . pathinfo($photo['name'], PATHINFO_EXTENSION);
      }

      $sql = "INSERT INTO `tbl_social_galary` ( `socio_galary_image`) 
      VALUES ('$photoName')";

      if (mysqli_query($this->con, $sql)) {
         $image = new ImageResize($photo['tmp_name']);   // img resize
         $image->resize(120,120)->save('uploads/'.$photoName);  // img resize

         // move_uploaded_file($photo['tmp_name'], 'uploads/' . $photoName);
         return '<div class="alert alert-success">Insert Successful.</div>';
      } else {
         return '<div class="alert alert-danger">Insert Failed.</div>';
      }
   }

   public function view()
   {
      $sql = "SELECT * FROM `tbl_social_galary` ";
      return mysqli_query($this->con, $sql);
   }
   public function find($getViewId)
   {
      $sql = "SELECT * FROM `tbl_services` WHERE service_id = '$getViewId' ";
      return mysqli_query($this->con, $sql);
   }
   public function update($allData, $getEditId)
   {
      $photo = $_FILES['socio_galary_image'];
      $photoName = '';
      if ($photo['name'] != '') {
         $photoName = 'social_galary_' . time() . '_' . rand(100000, 100000000) . '.' . pathinfo($photo['name'], PATHINFO_EXTENSION);
      }

      $sql = "UPDATE `tbl_social_galary` SET `socio_galary_image`='[value-2]' 
            WHERE `socio_galary_id` = $getEditId";

      if (mysqli_query($this->con, $sql)) {
         $image = new ImageResize($photo['tmp_name']);   // img resize
         $image->resize(120,120)->save('uploads/'.$photoName);  // img resize

         // move_uploaded_file($photo['tmp_name'], 'uploads/' . $photoName);
         return '<div class="alert alert-success">Update Successful.</div>';
      } else {
         return '<div class="alert alert-danger">Update Failed.</div>';
      }
   }
   public function delete($getDeleteId)
   {
      $sql = "DELETE FROM `tbl_services` WHERE service_id = '$getDeleteId'";
      return mysqli_query($this->con, $sql);
   }
}

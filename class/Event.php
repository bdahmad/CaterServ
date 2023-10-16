<?php

include_once('Config.php');

class Event extends Config
{
   public function insert($allData)
   {
      $event_name = htmlentities($allData['event_name'], ENT_QUOTES);
      $photo = $_FILES['event_image'];
      $photoName = '';
      if ($photo['name'] != '') {
         $photoName = 'event_' . time() . '_' . rand(100000, 100000000) . '.' . pathinfo($photo['name'], PATHINFO_EXTENSION);
      }


      $sql = "INSERT INTO `tbl_event`( `event_cate_id`, `event_image`) 
      VALUES ('$event_name','$photoName')";

      if (empty($event_name)) {
         return '<div class="alert alert-danger">Category is required.</div>';
      } else {
         if (mysqli_query($this->con, $sql)) {
            move_uploaded_file($photo['tmp_name'], 'uploads/' . $photoName);
            return '<div class="alert alert-success">Insert Successful.</div>';
         } else {
            return '<div class="alert alert-danger">Insert Failed.</div>';
         }
      }
   }

   public function view()
   {
      $sql = "SELECT * FROM `tbl_event` NATURAL JOIN `tbl_event_category` ";
      return mysqli_query($this->con, $sql);
   }
   public function find($getViewId)
   {
      $sql = "SELECT * FROM `tbl_services` WHERE service_id = '$getViewId' ";
      return mysqli_query($this->con, $sql);
   }
   public function update($allData, $getEditId)
   {
      $service_icon = htmlentities($allData['service_icon'], ENT_QUOTES);
      $service_title = htmlentities($allData['service_title'], ENT_QUOTES);
      $service_description = htmlentities($allData['service_description'], ENT_QUOTES);
      $service_link = htmlentities($allData['service_link'], ENT_QUOTES);

      $sql = "UPDATE `tbl_services` SET `service_icon`='$service_icon',`service_title`=' $service_title ',
      `service_description`='$service_description',`service_link`='$service_link' WHERE `service_id`='$getEditId'";

      if (empty($service_icon)) {
         return '<div class="alert alert-danger">Please select icon.</div>';
      } elseif (empty($service_title)) {
         return '<div class="alert alert-danger">Title is required</div>';
      } elseif (empty($service_description)) {
         return '<div class="alert alert-danger">Description is required</div>';
      } elseif (empty($service_link)) {
         return '<div class="alert alert-danger">Link is required</div>';
      } else {
         if (mysqli_query($this->con, $sql)) {
            return '<div class="alert alert-success">Update Successful.</div>';
         } else {
            return '<div class="alert alert-danger">Update Failed.</div>';
         }
      }
   }
   public function delete($getDeleteId)
   {
      $sql = "DELETE FROM `tbl_services` WHERE service_id = '$getDeleteId'";
      return mysqli_query($this->con, $sql);
   }
}

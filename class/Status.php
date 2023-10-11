<?php
include_once('Config.php');
 class Status extends Config{
   public function showData(){
      $sql = "SELECT * FROM `tbl_status` ";
        return mysqli_query($this->con,$sql);
   }
 }
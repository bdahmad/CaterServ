<?php

include_once('Config.php');

class Role extends Config{
   public function showData(){
      $sql = "SELECT * FROM `tbl_role` ";
        return mysqli_query($this->con,$sql);
   }
}

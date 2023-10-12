<?php
   include_once('../class/User.php');
   $objUser = new User();
   $id = $_GET['d'];

   if($objUser->deleteUser($id)){
      echo "Delete info successfully.";
      header("Location: all-user.php");
      
   }
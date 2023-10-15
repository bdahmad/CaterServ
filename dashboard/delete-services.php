<?php
   include_once('../class/Services.php');
   $objServices = new Services();
   $id = $_GET['d'];

   if($objServices->delete($id)){
      echo "Delete info successfully.";
      header("Location: all-services.php");
      
   }
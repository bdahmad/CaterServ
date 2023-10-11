<?php

class Config{
   protected $con;
   public function __construct()
   {
      $this->con = new mysqli('localhost','root','','cater_serv');
   }
}
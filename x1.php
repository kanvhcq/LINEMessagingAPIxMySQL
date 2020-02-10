<?php
$servername = "http://ppdatacenter.com/phpMyAdmin";
  $username = "ppdata_kan";
  $password = "Ptc#02290";
  $dbname = "ppdata_kan";
$mysql = new mysqli($servername, $username, $password, $dbname);
  mysqli_set_charset($mysql, "utf8");

  if ($mysql->connect_error){
  $errorcode = $mysql->connect_error;
  print("MySQL(Connection)> ".$errorcode);
  }

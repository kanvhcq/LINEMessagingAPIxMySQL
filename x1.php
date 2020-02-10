<?php
$servername = "http://ppdatacenter.com/phpMyAdmin/index.php";
  $username = "ppdata_kan";
  $password = "Ptc#02290";
  $dbname = "ppdata_kan";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  mysqli_set_charset($conn, "utf8");
	mysqli_query($conn, "SET NAMES utf8");

if (mysqli_connect_error()) 
{
	echo "failed to connect to MySQL: " . mysqli_connect_error();
}
	


  ?>

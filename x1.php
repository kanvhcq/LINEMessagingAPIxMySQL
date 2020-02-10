<?php
$host = "localhost";    
$user = "root";    
$pass = "Ptc#02290";    
$db = "ppdata_kan";    
mysql_connect($host, $user, $pass) or die("Could not connect to database"); 
mysql_select_db($db) or die("Could not connect to database"); 
mysql_query("SET NAMES utf8")
?>

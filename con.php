<?php
$Setup_Server = ‘http://ppdatacenter.com/phpMyAdmin/’;
$Setup_User = ‘ppdata_kan’;
$Setup_Pwd = ‘Ptc#02290’;
$Setup_Database = ‘ppdata_kan’;
mysql_connect($Setup_Server,$Setup_User,$Setup_Pwd);
mysql_query(“use $Setup_Database”);
mysql_query(“SET NAMES UTF8”);


<?php

define('BASEPATH','');
include_once("../application/config/database.php");

$host = $db['default']['hostname'];
$dbname = $db['default']['database'];
$dbusername = $db['default']['username'];
$pass = $db['default']['password'];
$con = mysql_connect($host,$dbusername,$pass) or
die(mysql_error());

if($con)
{
mysql_select_db($dbname);
}
else{
	echo "Could not select Database";
}
?>
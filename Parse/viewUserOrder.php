<?php 
include("Conf.php");
$id = $_GET['uid'];
$q = "Select * From orders WHERE `uuid`='$id'";
$run = mysql_query($q);

while($row = mysql_fetch_array($run)){
	$arr[] = $row;
	}
	echo json_encode($arr);
?>
<?php 
include("Conf.php");
$id = $_GET['pid'];
$q = "Select * From addnewtaxi WHERE `P_ID`='$id'";
$run = mysql_query($q);

while($row = mysql_fetch_array($run)){
	$arr[] = $row;
	}
	echo json_encode($arr);
?>
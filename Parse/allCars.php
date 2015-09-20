<?php 
include("Conf.php");
$q = "Select * From addnewtaxi";
$run = mysql_query($q) or die(mysql_error());

while($row = mysql_fetch_array($run)){
	$arr[] = $row;
	}
	echo json_encode($arr);
?>
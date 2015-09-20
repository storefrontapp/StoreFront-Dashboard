<?php 
	include('../carParse/Conf.php');
	$submit_new_order = "SELECT * FROM feedback_remarks";
	$plist = mysql_query($submit_new_order);
	while($row = mysql_fetch_array($plist)){
		$sum[] = $row;
		}
	echo json_encode($sum);
?>
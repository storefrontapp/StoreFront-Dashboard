<?php 
include('../carParse/Conf.php');
$cust_id = $_GET['cust_id'];
$remark = $_GET['remark'];
$rating = $_GET['rating'];
$date = $_GET['date'];

//$hot_dishes_list = "INSERT INTO test(val)Values('".$testval."')";
$submit_new_order = "INSERT INTO `feedback_remarks` (`customer_id`, `remarks`, `rating`, `created_on`, `STATUS`) 
VALUES ('".$cust_id."', '".$remark."', '".$rating."', '".$date."', 'new');";
echo $submit_new_order;
$plist = mysql_query($submit_new_order);

echo $plist;
	
?>
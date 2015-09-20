<?php 
include('../carParse/Conf.php');
$name = $_GET['name'];
$address = $_GET['address'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$cmnt = $_GET['cmnt'];
$date = $_GET['date'];
$uid = $_GET['uid'];
$carNumbr = $_GET['carNum'];
$q = "INSERT INTO `orders` (`name`, `address`, `email`, `phone`, `comment`, `status`, `date`, `uuid`,`carNumber`) 
VALUES ('$name', '$address', '$email', '$phone', '$cmnt', 'Pending', '$date', '$uid', '$carNumbr');";
echo $q;
$run = mysql_query($q);
?>
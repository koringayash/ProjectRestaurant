<?php

session_start();

include '_db_conect.php';

$cust_id = $_GET['cust_id'];
$tot_prize = $_GET['tot_pri'];

// $get_prize_sql = "SELECT "
$delete_sql = "DELETE FROM `temp` WHERE customer_id='$cust_id'";
$result=mysqli_query($conn,$delete_sql);

$insert_sql = "INSERT INTO `orders`(`prize`,`customer_id`,`order_date_time`)VALUES ('$tot_prize','$cust_id',current_timestamp())";
$result2=mysqli_query($conn,$insert_sql);

// echo "OK";
header("Location: /project/pay.php");


// header("Location:$_SERVER[HTTP_REFERER]");
?>
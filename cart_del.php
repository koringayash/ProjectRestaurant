<?php

session_start();
// if(isset($_SESSION['username']))
// {

    if(!isset($_GET['confirm']))
    {
        include '_db_conect.php';
        $item_id = $_GET['item_id'];
        $it_order_id = $_GET['order_id'];

        // echo $item_id;
                // This is use to get id of customer
                $customer_name = $_SESSION['username'];
                $sql_c_name = "SELECT * FROM `customers` WHERE customer_username='$customer_name'";
                $result=mysqli_query($conn,$sql_c_name);
                $row=mysqli_fetch_assoc($result);
                $cust_Id = $row['customer_id'];
        // $cust_Id = 1;

        $sql = "DELETE FROM `temp` WHERE item_id='$item_id' AND customer_id='$cust_Id' AND order_no='$it_order_id' ";
        $result=mysqli_query($conn,$sql);

        // echo $item_id;
        
        header("Location: /project/cart_boos.php");
    }
    else
    {
        // include '_db_conect.php';
        // $item_id = $_GET['item_id'];
        // $it_order_id = $_GET['order_id'];
        // $cust_Id = 1;

        // $sql = "DELETE FROM `temp` WHERE item_id='$item_id' AND customer_id='$cust_Id' AND order_no='$it_order_id' ";
        // $result=mysqli_query($conn,$sql);
    }
    
// }

?>
<?php

session_start();
include '_db_conect.php';

$method= $_SERVER['REQUEST_METHOD'];
if($method=="POST")
{
    if(isset($_SESSION['username']))
    {
        // $cat_id=$_POST['item_cat'];
        // echo var_dump($_POST);
        $item_id = $_POST['item_id'];
        $item_quan = $_POST['item_qunt'];
        $item_cat=$_POST['item_cat'];

        // This is use to get id of customer
        $customer_name = $_SESSION['username'];
                $sql_c_name = "SELECT * FROM `customers` WHERE customer_username='$customer_name'";
                $result2=mysqli_query($conn,$sql_c_name);
                $row2=mysqli_fetch_assoc($result2);
                $cust_Id = $row2['customer_id'];


        // echo $item_quan;

        $sql = "INSERT INTO `temp` (`item_id`, `item_quan`, `time`, `customer_id`,`item_cat`) VALUES ('$item_id', '$item_quan', current_timestamp(), '$cust_Id','$item_cat')";
        $result=mysqli_query($conn,$sql);

        // echo "This is end";
        // header("Location: /project/punjabi_2.html");
        header("Location:$_SERVER[HTTP_REFERER]");
    }
    else
    {
        echo '<script>
            var flag=confirm("For adding items into the cart you have to login Press a OK button for login!");
            if(flag)
            {
                window.location.href = "/project/login.html";
            }
            else
            {
                history.back();
            }
        </script>';
        
        // header("Location:$_SERVER[HTTP_REFERER]");
    }
}


?>
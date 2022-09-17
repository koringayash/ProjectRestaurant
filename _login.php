<?php

echo var_dump($_POST);

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $showAlert=false;
    $showError="";
include '_db_conect.php';

$useremail=$_POST["email"];
$userpass=$_POST["pass"];

$sql="SELECT * FROM `customers` WHERE customer_username='$useremail'";
$result=mysqli_query($conn,$sql);
$numExistRow=mysqli_num_rows($result);
if($numExistRow==1)
    {
        $row=mysqli_fetch_assoc($result);
        $hashpass=$row['customer_password'];
        if(password_verify($userpass,$hashpass))
        {
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['username']=$useremail;
            echo 'You login';
            header("Location: /project/index.php");
        }
        else
        {
            echo 'Invalid password';
            $showError="Invalid password";      
            $showAlert=true;
        }
    }
else
{
    echo 'no such username';
    $showError="such username does not exists";
    $showAlert=true;
    // header("Location: /project/index.php");
}
if($showAlert)
{
    echo '<script>
            var flag=confirm("Invalid password or user id. want to try again");
            if(flag)
            {
                window.location.href = "/project/login.html";
            }
            else
            {
                window.location.href = "/project/index.php";
            }
        </script>';
}
}
?>
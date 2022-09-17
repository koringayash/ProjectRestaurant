<?php
// echo "we are in";
// if($_SERVER["REQUEST_METHOD"]=="POST")
// {
    echo var_dump($_POST);
    $showAlert=false;
    $showError=false;
    include '_db_conect.php';
    $username=$_POST["Username"];
    $useremail=$_POST["Email"];
    $userphoneno=$_POST["Phone_Number"];
    $userdateofbirth=$_POST["Date_Of_birth"];
    $password=$_POST["Password"];
    $cpassword=$_POST["Confirm_Password"];
    $useraddress=$_POST["Address"];
    // $usergender=$_POST["gender"];

    $exists=false;

    // check whether this user name exists or not
    $existSql="SELECT * FROM `customers` WHERE customer_username='$username'";
    $result=mysqli_query($conn,$existSql);
    $numExistRow=mysqli_num_rows($result);
    if($numExistRow>0)
    {
      $showError="username alredy exists";
      $exists = true;
    }
    else
    {
      if(($password==$cpassword)&& $exists==false)
      {
        $hash= password_hash($password, PASSWORD_BCRYPT);
        $sql="INSERT INTO `customers` (`customer_username`, `customer_email`, `customer_password`, `customer_date_of_birth`, `customer_phone_no`, `customer_address`) VALUES ('$username','$useremail', '$hash','$userdateofbirth','$userphoneno','$useraddress')";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            $showAlert=true;          
            header("Location: /project/index.php?signupsuccess=true");
            exit();
        }
      }
      else
      {
        $showError="Passwords do not match";
      }
    }
    header("Location: /project/index.php?signupsuccess=false&error=$showError");
// }
?>
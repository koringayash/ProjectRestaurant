<?php
    // session_start();
    include '_db_conect.php';
?>
<?php
        include '_nav.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="cart.css">
    <title>Cart Page</title>
</head>

<body>
    <div class="container my-4" id="ques">
        <h2 class="text-center my-4">Your Cart</h2>
        <div class="row my-4">
    <?php
            if(isset($_SESSION['username']))
            {
                // This is use to get id of customer
                $customer_name = $_SESSION['username'];
                $sql_c_name = "SELECT * FROM `customers` WHERE customer_username='$customer_name'";
                $result2=mysqli_query($conn,$sql_c_name);
                $row2=mysqli_fetch_assoc($result2);
                $cust_Id = $row2['customer_id'];
                // $cust_Id = 1;
                $sql="SELECT * FROM `temp` WHERE customer_id='$cust_Id'";
                $result=mysqli_query($conn,$sql);
                $numrows=mysqli_num_rows($result);
                $total_prize = 0;
                if($numrows>0)
                {
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $it_id = $row['item_id'];
                        $it_qu = $row['item_quan'];
                        $it_order_id = $row['order_no'];
                        $it_cat = $row['item_cat'];

                        $sql2="SELECT * FROM `items` WHERE item_id='$it_id'";
                        $result2=mysqli_query($conn,$sql2);
                        $row2=mysqli_fetch_assoc($result2);
                        $it_name = $row2['item_name'];
                        $it_prize = $row2['prize'];
                        $confirm = 1;

                        echo '<div class="col-md-3 my-2">
                            <div class="card" style="width: 18rem;">';
                            if($it_cat==1)
                            {
                                echo '<img src="image/'.$it_name.'.jpeg" class="card-img-top img" alt="'.$it_name.'">';
                            }
                            else
                            {
                                echo '<img src="image/'.$it_name.'.jpg" class="card-img-top img" alt="'.$it_name.'">';
                            }                    

                            echo '<div class="card-body">
                                    <h5 class="card-title">'.$it_name.'</h5>
                                    <p class="card-text">Q = '.$it_qu.'</p>
                                    <p class="card-text">prize per item = '.$it_prize.'</p>
                                    <p class="card-text">Total prize = '.($it_prize*$it_qu).'</p>
                                    <a href="cart_del.php?item_id='.$it_id.'&order_id='.$it_order_id.'" class="btn btn-primary">Remove From Cart</a>
                                </div>
                            </div>
                        </div>';
                        $total_prize += ($it_prize*$it_qu);
                    }
                    echo '<a href="cart_order.php?cust_id='.$cust_Id.'&tot_pri='.$total_prize.'" class="btn btn-success">Order Now</a>';
                    echo '</div>';
                }
                else
                {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Please!</strong> Add items from menu your cart is empty.
                
                    </div>';
                }    
                
            }

            else
            {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Sorry!</strong> You has to login to see your cart.
                
              </div>';
            }
        ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
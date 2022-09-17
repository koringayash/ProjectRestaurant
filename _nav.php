<?php
// Start the session
session_start();
?>
<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_nav.css">
</head>
<body>
<div class="head">
        <header>
            <ul>
                <li> <a href="index.php"> Home</a> </li>&nbsp;
                <li> <a href="Menu.html"> Menu</a> </li>&nbsp;
                <li> <a href="cart_boos.php"> Cart Page</a> </li>&nbsp;
                <li> <a href="Contact_us.html"> Book a Restaurant</a> </li>&nbsp;
                <li> <a href="Contact_us.html"> Contact Us</a> </li>&nbsp;';
                ?>
                
                
                <?php
if(isset($_SESSION['loggedin']) && isset($_SESSION['loggedin'])==true)
{
    echo '<li class="right"><a href="_logout.php">LogOut</a> </li>&nbsp;';
    echo '<p class="username">'. $_SESSION['username'].'</p>';
}
else
{
    echo '<li class="right"><a href="login.html"> Log in</a> </li>&nbsp;';
}
            ?>
                
         <?php   echo '</ul>
        </header>
    </div>
</body>
</html>';
<?php

require('_db_conect.php');
session_start();


$keyId = 'rzp_live_jXEoNuxkxVTBoL';
$keySecret = 'FFtdLmQ70xvbrJ09wZFORN8V';
$displayCurrency = 'INR';

//db connection
// $conn = mysqli_connect($host, $username, $password, $dbname);

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $razorpay_order_id = $_SESSION['razorpay_order_id'];
    $razorpay_payment_id = $_POST['razorpay_payment_id'];
    $email = $_SESSION['email'];
    $price = $_SESSION['price'];
    $sql = "INSERT INTO `payment` (`order_id`, `razorpay_payment_id`, `status`, `email`, `price`) VALUES ('$razorpay_order_id', '$razorpay_payment_id', 'success', '$email', '$price')";
    if(mysqli_query($conn, $sql)){
        // echo "payment details inserted to db";
    }

    $html = "<p>Your payment was successful.Order Will be ready into 15 Min.</p>
            <p>Thank You!.Payment Details has been Sent to Your registered Email.</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";

    
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
?>
<button onclick="change()">Go to Home Page</button>
<script>
    function change()
    {
        document.location.href='index.php';
    }
</script>
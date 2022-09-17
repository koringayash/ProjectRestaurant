<?php

require('_db_conect.php');
require('razorpay-php/Razorpay.php');
session_start();

$keyId = 'rzp_live_jXEoNuxkxVTBoL';
$keySecret = 'FFtdLmQ70xvbrJ09wZFORN8V';
$displayCurrency = 'INR';


// Create the Razorpay Order

use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);


$customer_name = $_SESSION['username'];
                $sql_c_name = "SELECT * FROM `customers` WHERE customer_username='$customer_name'";
                $result2=mysqli_query($conn,$sql_c_name);
                $row2=mysqli_fetch_assoc($result2);
                $cust_Id = $row2['customer_id'];
                $email = $row2['customer_email'];
                $contactno = $row2['customer_phone_no'];

                $sql_prize="SELECT * FROM `orders` WHERE customer_id='$cust_Id' ORDER BY order_no DESC LIMIT 1;";
// $sql_prize = "SELECT * FROM `orders` WHERE customer_id='$cust_Id'";
$result3 = mysqli_query($conn,$sql_prize);
$row3=mysqli_fetch_assoc($result3);
$price = $row3['prize'];



// $price = $_POST['price'];
$_SESSION['price'] = $price;
$customername = $_SESSION['username'];
$_SESSION['email'] = $email;
// $contactno = $_POST['contactno'];
$orderData = [
    'receipt'         => 3456,
    'amount'          => $price * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];


$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "Food Adda",
    "description"       => "Food for Everyone",
    "image"             => "https://s29.postimg.org/r6dj1g85z/daft_punk.jpg",
    "prefill"           => [
    "name"              => $customername,
    "email"             => $email,
    "contact"           => $contactno,
    ],
    "notes"             => [
    "address"           => "Hello World",
    "merchant_order_id" => "12312321",
    ],
    "theme"             => [
    "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);
?>


<form action="verify.php" method="POST">
  <script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $data['key']?>"
    data-amount="<?php echo $data['amount']?>"
    data-currency="INR"
    data-name="<?php echo $data['name']?>"
    data-image="<?php echo $data['image']?>"
    data-description="<?php echo $data['description']?>"
    data-prefill.name="<?php echo $data['prefill']['name']?>"
    data-prefill.email="<?php echo $data['prefill']['email']?>"
    data-prefill.contact="<?php echo $data['prefill']['contact']?>"
    data-notes.shopping_order_id="3456"
    data-order_id="<?php echo $data['order_id']?>"
    <?php if ($displayCurrency !== 'INR') { ?> data-display_amount="<?php echo $data['display_amount']?>" <?php } ?>
    <?php if ($displayCurrency !== 'INR') { ?> data-display_currency="<?php echo $data['display_currency']?>" <?php } ?>
  >
  </script>
  <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
  <input type="hidden" name="shopping_order_id" value="3456">
</form>
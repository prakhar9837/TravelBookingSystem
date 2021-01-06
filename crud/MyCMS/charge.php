<?php

  require_once('config.php');
  


  $token  = $_POST['stripeToken'];
  $email  = $_POST['stripeEmail'];

  $customer = \Stripe\Customer::create([
      'email' => $email,
      'source'  => $token,
  ]);

  $charge = \Stripe\Charge::create([
      'customer' => $customer->id,
      'amount'   => 100000,
      'currency' => 'inr',
  ]);




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>
  body{
    padding-top:400px;
    background-size:auto;
    background-repeat:no-repeat;
    background-position:center;
  }
  </style>
  <title>Success</title>
  
</head>
<body background="images/Payment.png">
<!--<h1 style="text-align:center"><?php echo 'PAYMENT SUCCESSFUL'; ?></h1>-->
<h2 style="text-align:center; color:red"><?php echo 'THANKS FOR BOOKING WITH US. HAVE A WONDERUL TRIP'; ?></h2>
<div style="text-align:center">
<a href="index.php" style="align:center">Go to Homepage</a>
</div>
</body>
</html>

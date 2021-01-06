<?php
require_once('stripe-php/init.php');

$stripe = [
  "secret_key"      => "sk_test_9nrmEfcn12cyeYBcRHyDW6Jm00HkdvtLck",
  "publishable_key" => "pk_test_ytckeMeu6tljHTWXRRZJrFxf00QmU3fLvH",
];

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>

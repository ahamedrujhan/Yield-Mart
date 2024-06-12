<?php
session_start();
include "./stripe-php/init.php";
//require_once '../vendor/autoload.php';
require_once './secrets.php';
\Stripe\Stripe::setApiKey($stripeSecretKey);
header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost/next/customer/stripe/';

$productName = $_SESSION["product"];
$stripeAmount = $_SESSION["amount"];
$email = $_SESSION["email"];
$currency = "lkr";
$url = ["https://www.lalpathlabs.com/blog/wp-content/uploads/2019/01/Fruits-and-Vegetables.jpg"];



$checkout_session = \Stripe\Checkout\Session::create(
  [

    'customer_email' => $email,
    'line_items' => [[
      'price_data' => [
        'product_data' => [
          'name' => $_SESSION["name"],
          'images' => $url,
          'description' => $productName,
          // 'metadata' => [
          //   'pro_id' => $productID
          // ]
        ],
        'unit_amount' => $stripeAmount * 100,
        'currency' => $currency,
      ],
      'quantity' => 1,

    ]],

    // 'line_items' => [[
    //   # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    //   'amount' => 500,
    //   'currency' => 'lkr',
    //   // 'price' => '',
    //   // 'unit_amount' => 100,
    //   // 'currency'=> 'lkr',
    //   'quantity' => 1,
    // ]],
    'mode' => 'payment',
    'success_url' => $YOUR_DOMAIN . 'success.php',
    'cancel_url' => $YOUR_DOMAIN . 'cancel.php',
  ]
);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Payment Success</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,900'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>
  <link rel="stylesheet" href="./payment.css">

</head>
<?php
session_start();
?>

<body>
  <!-- partial:index.partial.html -->
  <div class="bg">

    <div class="card">

      <span class="card__success"><i class="ion-checkmark"></i></span>

      <h1 class="card__msg">Payment Complete</h1>
      <h2 class="card__submsg">Thank you for your transfer</h2>

      <div class="card__body">


        <div class="card__recipient-info">
          <p class="card__recipient"><?php echo $_SESSION["name"]; ?></p>
          <p class="card__email"><?php echo $_SESSION["email"]; ?></p>
        </div>

        <h1 class="card__price"><span>LKR</span><?php echo $_SESSION["amount"]; ?><span>.00</span></h1>

        <p class="card__method">Payment method</p>
        <div class="card__payment">
          <img src="https://seeklogo.com/images/V/VISA-logo-F3440F512B-seeklogo.com.png" class="card__credit-card">
          <div class="card__card-details">
            <p class="card__card-type">Credit / debit card</p>

          </div>
        </div>

      </div>

      <div class="card__tags">
        <span class="card__tag">completed</span>

      </div>

    </div>

  </div>
  <!-- partial -->

</body>

</html>
<?php
session_start();
if ($_SESSION['role'] != "Customer") {
   $url = "./login.php?error=Can't Access!!!";
   header("Location: $url");
}
?>
<?php
//checkout page for customer

@include 'config.php';
$_SESSION['id'] = 1;
$sessionId = $_SESSION["id"];
if (isset($_POST['order_btn'])) {

   $name = $_POST['name'];
   $number = $_POST['number'];

   $method = $_POST['method'];
   $address = $_POST['address'];



   $cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
   $price_total = 0;
   if (mysqli_num_rows($cart_query) > 0) {
      while ($product_item = mysqli_fetch_assoc($cart_query)) {
         $product_name[] = $product_item['name'] . ' (' . $product_item['quantity'] . ') ';
         $product_price = number_format($product_item['price'] * $product_item['quantity']);
         $price_total += $product_price;
      };
   };

   $total_product = implode(', ', $product_name);
   $detail_query = mysqli_query($conn, "INSERT INTO `order`(name, number, method,address, total_products, total_price) VALUES('$name','$number','$method','$address','$total_product','$price_total')") or die('query failed');

   if ($cart_query && $detail_query) {
      if ($method == "cash on delivery") {
         echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>thank you for shopping!</h3>
         <div class='order-detail'>
            <span>" . $total_product . "</span>
            <span class='total'> total : $" . $price_total . "/-  </span>
         </div>
         <div class='customer-details'>
            <p>  Name : <span>" . $name . "</span> </p>
            <p> Phone number : <span>" . $number . "</span> </p>
      
            <p>Address : <span>" . $address . "</span> </p>
            <p> Payment mode : <span>" . $method . "</span> </p>

            <p>(*pay when product arrives*)</p>
            
              
         </div>
            <a href='products.php?func=true' class='btn' >continue shopping</a>

         </div>
      </div>
      ";
      } else {
         header('Location:paymentgateway.php');
      }
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<style>
   :root {
      --blue: #0c8f3c;
      --red: rgb(112, 205, 36);
      --orange: rgb(106, 168, 51);
      --black: #333;
      --white: #fff;
      --bg-color: #eee;
      --dark-bg: rgba(0, 0, 0, .7);
      --box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
      --border: .1rem solid #999;
   }
</style>

<body>

   <?php include 'header.php'; ?>

   <div class="container">

      <section class="checkout-form">

         <h1 class="heading">complete your order</h1>

         <form action="" method="post">

            <div class="display-order">
               <?php
               $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
               $total = 0;
               $grand_total = 0;
               if (mysqli_num_rows($select_cart) > 0) {
                  while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
                     $total_price = number_format($fetch_cart['price'] * $fetch_cart['quantity']);
                     $grand_total = $total += $total_price;
               ?>
                     <span><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
               <?php
                  }
               } else {
                  echo "<div class='display-order'><span>your cart is empty!</span></div>";
               }
               ?>
               <span class="grand-total"> grand total : Rs.<?= $grand_total; ?>/- </span>
            </div>



            <div class="flex">
               <div class="inputBox">
                  <span>your name</span>
                  <input type="text" placeholder="Enter your name" name="name" required>
               </div>
               <div class="inputBox">
                  <span>your Phone number</span>
                  <input type="text" placeholder="Enter your number" name="number" required>
               </div>
               <div class="inputBox">
                  <span>address </span>
                  <input type="text" placeholder="Your Address" name="address" required>
               </div>
               <div class="inputBox">
                  <span>payment method</span>
                  <select name="method">
                     <option value="" selected>Choose payment method</option>
                     <option value="cash on delivery" name="cash on delivery">Cash on devlivery</option>
                     <option value="credit card" name="credit">Credit/Debit card </option>

                  </select>
               </div>


            </div>
            <input type="submit" value="order now" name="order_btn" class="btn">
         </form>

      </section>

   </div>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>
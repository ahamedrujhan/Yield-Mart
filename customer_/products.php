<?php
session_start();
if ($_SESSION['role'] != "Customer") {
   $url = "./login.php?error=Can't Access!!!";
   header("Location: $url");
}
?>
<?php
//Customer view products
@include 'config.php';
include "./conn.php";

if (isset($_POST['add_to_cart'])) {

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];

   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if (mysqli_num_rows($select_cart) > 0) {
      $message[] = 'product already added to cart';
   } else {
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }
}

if (isset($_GET["func"])) {
   $connect = mysqli_connect('localhost', 'root', '', 'cart') or die('connection failed');
   $sq = "DELETE FROM cart;";
   $result = mysqli_query($connect, $sq);
   $url = "./home.php";
   header("Location: $url");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<style>
   :root {
      --blue: #156a34;
      --red: tomato;
      --orange: orange;
      --black: #333;
      --white: #fff;
      --bg-color: #eee;
      --dark-bg: rgba(0, 0, 0, .7);
      --box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
      --border: .1rem solid #999;
   }

   .cart {
      font-size: 20px;
      position: relative;
      left: 1200px;
   }
</style>

<body>

   <?php include 'header.php'; ?>



   <a href="cart.php" class="cart"><i class="fa-solid fa-cart-shopping"></i>
      <span>&nbsp; <?php echo $row_count; ?></span> </a>

   <?php

   if (isset($message)) {
      foreach ($message as $message) {
         echo '<div class="message"><span>' . $message . '</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
      };
   };

   ?>


   <div class="container">

      <section class="products">

         <h1 class="heading">products</h1>

         <div class="box-container">

            <?php

            $select_products = mysqli_query($con, "SELECT * FROM `products`");
            if (mysqli_num_rows($select_products) > 0) {
               while ($fetch_product = mysqli_fetch_assoc($select_products)) {
            ?>

                  <form action="" method="post">
                     <div class="box">
                        <img src="product_img/<?php echo $fetch_product['image']; ?>" alt="">
                        <h3><?php echo $fetch_product['name']; ?></h3>
                        <div class="price">Rs.<?php echo $fetch_product['price']; ?>/-</div>
                        <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">

                        <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                        <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                        <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
                     </div>
                  </form>

            <?php
               };
            };
            ?>

         </div>

      </section>

   </div>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>
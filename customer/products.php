<?php
session_start();
if ($_SESSION['role'] != "Customer") {
   $url = "../login.php?error=Can't Access!!!";
   header("Location: $url");
}
?>
<?php

//Customer view products
@include 'config.php';
include "./conn.php";
$id = $_SESSION["id"];

if (isset($_POST['add_to_cart'])) {

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];

   $product_image = $_POST['product_image'];
   $product_id = $_POST["product_id"];
   $product_quantity = 1;



   $select_cart = mysqli_query($con, "SELECT * FROM `cart` WHERE product_id = '$product_id' AND user_id = '$id'");

   if (mysqli_num_rows($select_cart) > 0) {
      $message[] = 'product already added to cart';
   } else {

      $ins = mysqli_query($con, "UPDATE `products` SET quantity= quantity-1 WHERE product_id = '$product_id'");
      // $get = mysqli_query($con, "SELECT quantity FROM `products` WHERE product_id = '$product_id'");
      // $qua = mysqli_fetch_assoc($get);
      $insert_product = mysqli_query($con, "INSERT INTO `cart`(name, price, image, quantity,user_id,product_id) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity','$id', '$product_id')");
      $message[] = 'product added to cart succesfully';
   }
}

if (isset($_GET["func"])) {
   $connect = mysqli_connect('localhost', 'root', '', 'mart') or die('connection failed');
   $sq = "DELETE FROM cart WHERE user_id='$id';";
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
   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');


   ::selection {
      color: #fff;
      background: #0e2719;
   }

   .wrapper {
      position: relative;
      left: 500px;
      max-width: 500px;
      margin: 50px auto;
   }

   .wrapper .search-input {
      background: rgb(198, 246, 213);
      width: 100%;
      border-radius: 5px;
      position: relative;
      box-shadow: 0px 1px 5px 3px rgba(0, 0, 0, 0.12);
   }

   .search-input input {
      height: 55px;
      width: 100%;
      outline: none;
      border: none;
      border-radius: 5px;
      padding: 0 60px 0 20px;
      font-size: 18px;
      box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
   }

   .search-input.active input {
      border-radius: 5px 5px 0 0;
   }

   .search-input .autocom-box {
      padding: 0;
      opacity: 0;
      pointer-events: none;
      max-height: 280px;
      overflow-y: auto;
   }

   .search-input.active .autocom-box {
      padding: 10px 8px;
      opacity: 1;
      pointer-events: auto;
   }

   .autocom-box li {
      list-style: none;
      padding: 8px 12px;
      display: none;
      width: 100%;
      cursor: default;
      border-radius: 3px;
   }

   .search-input.active .autocom-box li {
      display: block;
   }

   .autocom-box li:hover {
      background: #efefef;
   }

   .search-input .icon {
      position: absolute;
      right: 0px;
      top: 0px;
      height: 55px;
      width: 55px;
      text-align: center;
      line-height: 55px;
      font-size: 20px;
      color: #0c2c18;
      cursor: pointer;
   }

   .cart {
      position: relative;
      text-decoration: none;
      font-size: 20px;
      left: 90%;



   }
</style>

<body>




   <?php
   include 'wnavigation.php';
   $select_rows = mysqli_query($con, "SELECT * FROM `cart` WHERE user_id='$id'") or die('query failed');
   $row_count = mysqli_num_rows($select_rows);

   ?>

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
         <div class="wrapper">
            <div class="search-input">


               <div class="autocom-box">

               </div>

            </div>
         </div>

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
                        <input type="hidden" name="product_id" value="<?php echo $fetch_product['product_id']; ?>">
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




</body>

</html>
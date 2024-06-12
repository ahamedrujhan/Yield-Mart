<?php

@include 'config.php';

if(isset($_POST['add_to_cart'])){

   $stocks_name = $_POST['stocks_name'];
   $stocks_price = $_POST['stocks_price'];
   
   $stocks_image = $_POST['stocks_image'];
   $stocks_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$stocks_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'stocks already added to cart';
   }else{
      $insert_stocks = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$stocks_name', '$stocks_price', '$stocks_image', '$stocks_quantity')");
      $message[] = 'stocks added to cart succesfully';
   }

}

if(isset($_GET["func"])){
   $connect = mysqli_connect('localhost','root','','cart') or die('connection failed');
   $sq="DELETE FROM cart;";
   $result=mysqli_query($connect,$sq);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Stocks </title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<style>
:root{
   --blue:#156a34;
   --red:tomato;
   --orange:orange;
   --black:#333;
   --white:#fff;
   --bg-color:#eee;
   --dark-bg:rgba(0,0,0,.7);
   --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
   --border:.1rem solid #999;
}

.cart{
   font-size:20px;
   position: relative;
 left: 1200px;
}
</style>
<body>
  
<?php include 'header.php'; ?> 
<a href="cart.php" class="cart" ><i class="fa-solid fa-cart-shopping"></i>  
         <span>&nbsp; <?php echo $row_count; ?></span> </a>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>


<div class="container">

<section class="stocks">

   <h1 class="heading">Stocks</h1>

   <div class="box-container">

      <?php
      
      $select_stocks = mysqli_query($conn, "SELECT * FROM `stocks`");
      if(mysqli_num_rows($select_stocks) > 0){
         while($fetch_stocks = mysqli_fetch_assoc($select_stocks)){
      ?>

      <form action="" method="post">
         <div class="box">
            <img src="uploaded_img/<?php echo $fetch_stocks['image']; ?>" alt="">
            <h3><?php echo $fetch_stocks['name']; ?></h3>
            <div class="price">Rs.<?php echo $fetch_stocks['price']; ?>/- per kg</div>
            <input type="hidden" name="stocks_name" value="<?php echo $fetch_stocks['name']; ?>">
            
            <input type="hidden" name="stocks_price" value="<?php echo $fetch_stocks['price']; ?>">
            <input type="hidden" name="stocks_image" value="<?php echo $fetch_stocks['image']; ?>">
            <input type="submit" class="btn" value="Sell" name="sell">
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
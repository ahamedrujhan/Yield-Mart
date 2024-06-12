<?php
session_start();
include 'config.php';
include 'conn.php';
if ($_SESSION['role'] != "Customer") {
   $url = "./login.php?error=Can't Access!!!";
   header("Location: $url");
}
?>
<?php



$id = $_SESSION['id'];


//customer cart page for add or remove things in cart db

if (isset($_POST['update_update_btn'])) {
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $product_id = $_POST['update_product_id'];
   $ca = mysqli_query($conn, "SELECT quantity FROM `cart` WHERE id='$update_id'");
   $ca1 = mysqli_fetch_row($ca);
   $cav = (int)$ca1[0];
   $res = mysqli_query($conn, "SELECT quantity, IF(quantity-'$update_value'+'$cav' >= 0, 'TRUE', 'FALSE') FROM `products` WHERE product_id='$product_id';");
   $re1 = mysqli_fetch_assoc($res);
   $rest = $re1["IF(quantity-'$update_value'+'$cav' >= 0, 'TRUE', 'FALSE')"];
   //var_dump($rest) or die();
   if ($rest == 'TRUE') {
      $ins = mysqli_query($conn, "UPDATE `products` SET quantity= quantity-$update_value+$cav WHERE product_id = '$product_id'");
      $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
   } else {
      echo "<script>alert('Quantity Exceed')</script>";
   }
   if ($update_quantity_query) {
      header('location:cart.php');
   };
};

if (isset($_POST['remove'])) {
   $remove_id = $_POST['id'];
   $product_id = $_POST['remove_product_id'];
   $qty = $_POST["remove_quantity"];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id' AND user_id='$id'");
   mysqli_query($conn, "UPDATE `products` SET quantity= quantity+$qty WHERE product_id = '$product_id'");
   header('location:cart.php');
};

if (isset($_POST['removeall'])) {
   mysqli_query($conn, "DELETE FROM `cart` WHERE user_id=$id");
   header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Orders cart</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<style>
   :root {
      --blue: #0c8f3c;
      --red: tomato;
      --orange: rgb(113, 182, 53);
      --black: #333;
      --white: #fff;
      --bg-color: #eee;
      --dark-bg: rgba(0, 0, 0, .7);
      --box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
      --border: .1rem solid #999;
   }
</style>

<body>

   <?php
   include 'wnavigation.php';

   ?>

   <div class="container">

      <section class="shopping-cart">

         <h1 class="heading">Pending Orders</h1>

         <table>

            <thead>
               <th></th>
               <th>name</th>

               <th>price</th>
               <th>quantity</th>
               <th>total price</th>
               <th>action</th>
            </thead>

            <tbody>

               <?php



               $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id=$id");
               $grand_total = 0;
               if (mysqli_num_rows($select_cart) > 0) {
                  while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
               ?>

                     <tr>
                        <td><img src="product_img/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
                        <td><?php echo $fetch_cart['name']; ?></td>
                        <td>Rs.<?php echo number_format($fetch_cart['price']); ?>/-</td>
                        <td>
                           <form action="" method="post">
                              <input type="hidden" name="update_quantity_id" value="<?php echo $fetch_cart['id']; ?>">
                              <input type="hidden" name="update_product_id" value="<?php echo $fetch_cart['product_id']; ?>">
                              <input type="number" name="update_quantity" min="1" value="<?php echo $fetch_cart['quantity']; ?>">
                              <input type="submit" value="update" name="update_update_btn">
                           </form>
                        </td>
                        <td>Rs.<?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity']);
                                 $tot = $fetch_cart['price'] * $fetch_cart['quantity']; ?>/-</td>
                        <td>
                           <form action="" method="post">
                              <input type="hidden" name="id" value="<?php echo $fetch_cart['id']; ?>">
                              <input type="hidden" name="remove_product_id" value="<?php echo $fetch_cart['product_id']; ?>">
                              <input type="hidden" name="remove_quantity" value="<?php echo $fetch_cart['quantity']; ?>">
                              <button type="submit" name="remove" class="delete-btn"> <i class="fas fa-trash"></i>Remove</button>
                           </form>
                        </td>
                     </tr>
               <?php
                     $grand_total += $tot;
                  };
               };
               ?>
               <tr class="table-bottom">
                  <td><a href="products.php" class="option-btn" style="margin-top: 0;">continue shopping</a></td>
                  <td colspan="3">grand total</td>
                  <td>Rs.<?php echo number_format($grand_total);
                           ?>/-</td>
                  <td>
                     <!-- <form action="" method="post">
                        <button type="submit" name="removeall" class="delete-btn"> <i class="fas fa-trash"></i>Delete all</button>
                     </form> -->
                  </td>
               </tr>

            </tbody>

         </table>

         <div class="checkout-btn">
            <a href="checkout.php" class="btn <?= ($grand_total > 1) ? '' : 'disabled'; ?>">proceed to checkout</a>
         </div>

      </section>

   </div>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>
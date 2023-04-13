<?php

@include 'config.php';
include "./conn.php";

if (isset($_POST['update_update_btn'])) {
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($con, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
   if ($update_quantity_query) {
      header('location:cart.php');
   };
};

if (isset($_GET['sell'])) {
   $sell_id = $_GET['sell'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$sell_id'");
   header('location:cart.php');
};

if (isset($_GET['delete_all'])) {
   mysqli_query($conn, "DELETE FROM `cart`");
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

   <?php include 'header.php'; ?>

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

               $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
               $grand_total = 0;
               if (mysqli_num_rows($select_cart) > 0) {
                  while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
               ?>

                     <tr>
                        <td><img src="uploaded_img/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
                        <td><?php echo $fetch_cart['name']; ?></td>
                        <td>Rs.<?php echo number_format($fetch_cart['price']); ?>/-</td>
                        <td>
                           <form action="" method="post">
                              <input type="hidden" name="update_quantity_id" value="<?php echo $fetch_cart['id']; ?>">
                              <input type="number" name="update_quantity" min="1" value="<?php echo $fetch_cart['quantity']; ?>">
                              <input type="submit" value="update" name="update_update_btn">
                           </form>
                        </td>
                        <td>Rs.<?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity']); ?>/-</td>
                        <td><a href="cart.php?sell=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('sell item from cart?')" class="sell-btn"> <i class="fa-solid fa-hand-holding-dollar"></i> sell</a></td>
                     </tr>
               <?php
                     $grand_total += $sub_total;
                  };
               };
               ?>
               <tr class="table-bottom">
                  <td><a href="stockss.php" class="option-btn" style="margin-top: 0;">continue shopping</a></td>
                  <td colspan="3">grand total</td>
                  <td>Rs.<?php echo $grand_total; ?>/-</td>
                  <td><a href="cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="delete-btn"> <i class="fas fa-trash"></i> delete all </a></td>
               </tr>

            </tbody>

         </table>

      </section>

   </div>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>
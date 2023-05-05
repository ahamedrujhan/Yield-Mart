<?php
session_start();
if ($_SESSION['role'] != "Farmer") {
   $url = "../login.php?error=Can't Access!!!";
   header("Location: $url");
}
?>
<?php
$f_id = $_SESSION["id"];
$f_name = $_SESSION["lname"];

// @include 'config.php';
include "./conn.php";

// if (isset($_POST['add_to_cart'])) {

//    $stocks_name = $_POST['stocks_name'];
//    $stocks_price = $_POST['stocks_price'];

//    $stocks_image = $_POST['stocks_image'];
//    $stocks_quantity = 1;

//    $select_cart = mysqli_query($con, "SELECT * FROM `cart` WHERE name = '$stocks_name'");

//    if (mysqli_num_rows($select_cart) > 0) {
//       $message[] = 'stocks already added to cart';
//    } else {
//       $insert_stocks = mysqli_query($con, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$stocks_name', '$stocks_price', '$stocks_image', '$stocks_quantity')");
//       $message[] = 'stocks added to cart succesfully';
//    }
// }

// if (isset($_GET["func"])) {
//    $connect = mysqli_connect('localhost', 'root', '', 'mart') or die('connection failed');
//    $sq = "DELETE FROM cart;";
//    $result = mysqli_query($connect, $sq);
//}

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





   #popup {
      display: none;
   }

   .popup-container {
      height: 100vh;
      width: 100%;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      background-color: rgb(96 95 127 / 75%);
      position: absolute;
      top: 0;
      left: 0;

   }

   .popup {
      background-color: #ffffff;
      padding: 20px 30px;
      width: 40%;
      border-radius: 15px;

   }

   .close-popup {
      display: flex;
      justify-content: flex-end;
   }

   .close-popup a {
      font-size: 1.2rem;
      background-color: rebeccapurple;
      color: #fff;
      padding: 5px 10px;
      font-weight: bold;
      text-decoration: none;
      border-radius: 10px;
      display: inline-block;
   }

   .popup>h2 {
      font-size: 1.6rem;
      margin-bottom: 10px;
   }

   .popup>p {
      font-size: 1.2rem;
      margin-bottom: 10px;
   }

   .req {
      font-size: 3rem;
   }

   #quantity {
      width: auto;
      height: 2.5rem;

   }

   input[name="total"] {
      width: 20%;
      border: 2px solid #aaa;
      border-radius: 4px;
      margin: 8px 0;
      outline: none;
      padding: 8px;
      box-sizing: border-box;
      transition: .3s;
   }

   input[name="que"] {
      width: 20%;
      border: 2px solid #aaa;
      border-radius: 4px;
      margin: 8px 0;
      outline: none;
      padding: 8px;
      box-sizing: border-box;
      transition: .3s;
   }

   input[name="que"]:focus {
      border-color: #ffebcd;
      box-shadow: 0 0 8px 0 #ffebcd;
   }

   input[name="price"] {
      width: 20%;
      border: 2px solid #aaa;
      border-radius: 4px;
      margin: 8px 0;
      outline: none;
      padding: 8px;
      box-sizing: border-box;
      transition: .3s;
   }

   input[name="price"]:focus {
      border-color: #ffebcd;
      box-shadow: 0 0 8px 0 #ffebcd;
   }
</style>

<body>
   <div id="head">

      <?php include 'header.php'; ?>
   </div>
   <!-- <a href="cart.php" class="cart"><i class="fa-solid fa-cart-shopping"></i>
      <span>&nbsp; <?php //echo $row_count; 
                     ?></span> </a> -->

   <?php

   if (isset($message)) {
      foreach ($message as $message) {
         echo '<div class="message"><span>' . $message . '</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
      };
   };

   ?>


   <div class="container">

      <section class="stocks">

         <h1 class="heading">Stocks</h1>

         <div class="box-container">

            <?php

            $select_stocks = mysqli_query($con, "SELECT * FROM `stock` WHERE `quantity`>0");
            if (mysqli_num_rows($select_stocks) > 0) {
               while ($fetch_stocks = mysqli_fetch_assoc($select_stocks)) {




            ?>



                  <!-- <form action="" method="post"> -->
                  <div class="box">

                     <div id="popup">
                        <div class="popup-container">
                           <div class="popup">
                              <div class="close-popup" id="closeBtn"><a href="#">X</a></div>
                              <h1 class="req">Request Order</h1>
                              <p>
                                 <img id='img-popup' src="" alt="">
                              <h3 id='stock_name'></h3>
                              <p id='quantity'>
                              <h3>Quantity for Sale:&nbsp;
                                 <input type='number' name="que" placeholder='Quantity' id="qua" onblur="total()"></p>
                              </h3>
                              </p>
                              <p id='price'>
                              <h3>Price:&nbsp;
                                 <input type='number' name="price" placeholder='Price' id="pri" onblur="total()"></p>
                              </h3>
                              </p>
                              <h3>Total = <input type='number' name="total" placeholder='Total' id="tot" readonly></h3>


                              <form method="POST">

                                 <button class="btn" name="req">Request</button>
                              </form>
                           </div>
                        </div>
                     </div>




                     <img src="stock_img/<?php echo $fetch_stocks['image']; ?>" alt="">
                     <h3><?php echo $fetch_stocks['name']; ?></h3>
                     <div class="price">Quantity: <?php echo $fetch_stocks['quantity']; ?> <?php echo $fetch_stocks['type']; ?></div>
                     <!-- <input type="hidden" name="stocks_name" value="<?php echo $fetch_stocks['name']; ?>">

                     <input type="hidden" name="stocks_price" value="<?php echo $fetch_stocks['price']; ?>">
                     <input type="hidden" name="stocks_image" value="<?php echo $fetch_stocks['image']; ?>"> -->
                     <form method="POST">
                        <input type="hidden" name="s_id" value="<?php echo $fetch_stocks["stock_id"] ?>">
                        <input type="hidden" name="s_name" value="<?php echo $fetch_stocks["name"] ?>">
                     </form>
                     <!-- <input type="submit" class="btn" value="Sell" name="sell"> -->
                     <button id="clickBtn" class="btn" onclick="document.getElementById('popup').style.display='block';document.getElementById('head').style.display='none';document.getElementById('img-popup').src='stock_img/<?php echo $fetch_stocks['image']; ?>';
                     document.getElementById('stock_name').innerHTML='<?php echo $fetch_stocks['name']; ?>';  n='<?php echo $fetch_stocks['name']; ?>';  i='<?php echo $fetch_stocks['stock_id'];  ?>';
                     qu='<?php echo $fetch_stocks['quantity']; ?>'; ">Sell</button>


                     <script>
                        const clickBtn = document.getElementById("clickBtn");
                        const popup = document.getElementById("popup");
                        const nav = document.getElementById("head");
                        const closeBtn = document.getElementById("closeBtn");

                        clickBtn.addEventListener('click', () => {
                           popup.style.display = 'block';
                           nav.style.display = 'none';
                        });

                        closeBtn.addEventListener('click', () => {
                           popup.style.display = 'none';
                           nav.style.display = 'block';
                           document.getElementById("qua").value = null;
                           document.getElementById("pri").value = null;
                           document.getElementById("tot").value = null;
                           document.cookie = "pri =" + null;
                           document.cookie = "qua =" + null;
                           document.cookie = "tot =" + null;
                           document.cookie = "s_name =" + null;
                           document.cookie = "s_id =" + null;
                        });

                        // function getDetails() {
                        //    var q = document.getElementById("qua").value;
                        //    var p = document.getElementById("pri").value;
                        //    alert("Quantity : " + q + " Price: " + p + " Total is: " + q * p);
                        //    t = q * p;
                        //    return t;
                        // }
                        function total() {
                           var p = parseInt(document.getElementById("pri").value);
                           var q = parseInt(document.getElementById("qua").value);
                           var result = q * p;
                           document.getElementById('tot').value = result;
                           document.cookie = "pri =" + p;
                           document.cookie = "qua =" + q;
                           document.cookie = "tot =" + result;
                           document.cookie = "s_name =" + n;
                           document.cookie = "s_id =" + i;
                           document.cookie = "quantity =" + qu;
                        }

                        // popup.addEventListener('click', () => {
                        //    popup.style.display = 'none';
                        // });
                     </script>


                  </div>
                  <!-- </form> -->
            <?php

               };
            };

            ?>

         </div>
         <?php
         if (isset($_POST["req"])) {
            $que = $_COOKIE["qua"];
            $pri = $_COOKIE["pri"];
            $tot = $_COOKIE["tot"];
            $s_id = $_COOKIE["s_id"];
            $s_name = $_COOKIE["s_name"];
            $quantity = $_COOKIE["quantity"];
            //var_dump($quantity);
            // $sql_request = "INSERT INTO 'requests'(farmer_id, stock_id, quantity, price, f_name, total, s_name,status) VALUES ('$f_id','$s_id', '$que', '$pri', '$f_name', '$tot', '$s_name', '0')";
            if ($quantity >= $que) {
               $sql_request = "INSERT INTO `requests`(`farmer_id`, `stock_id`, `quantity`, `price`, `f_name`, `total`, `s_name`, `status`) VALUES ('$f_id','$s_id','$que','$pri','$f_name','$tot','$s_name','0')";
               $result_request = mysqli_query($con, $sql_request)  or die("query failed");
               unset($_POST);
               $_POST = array();
               unset($_SESSION['postdata']);

               // var_dump($que, $pri, $tot, $f_id, $f_name, $s_id, $s_name);
            }
         }
         ?>

      </section>

   </div>


   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>
<?php
session_start();
if ($_SESSION['role'] != "Customer") {
    $url = "./login.php?error=Can't Access!!!";
    header("Location: $url");
}
?>
<?php
//payment gateway!!!!

@include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/paymentgate.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Paymentgateway</title>
</head>
<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 25px;
        min-height: 100vh;
        background: linear-gradient(90deg, #fdfdfd 60%, #fafbfa 40.1%);
    }
</style>

<body>
    <?php 
    
    
    include 'header.php';
    include 'wnavigation.php';
     ?>
    <div class="container">

        <form action="">

            <div class="row">

                <div class="col">

                    <h3 class="title">billing address</h3>

                    <div class="inputBox">
                        <span>full name :</span>
                        <input type="text" placeholder="Full Name">
                    </div>
                    <div class="inputBox">
                        <span>email :</span>
                        <input type="email" placeholder="example@example.com">
                    </div>
                    <div class="inputBox">
                        <span>address :</span>
                        <input type="text" placeholder="Address">
                    </div>
                    <div class="inputBox">

                    </div>

                    <div class="flex">
                        <div class="inputBox">

                        </div>
                        <div class="inputBox">

                        </div>
                    </div>

                </div>

                <div class="col">

                    <h3 class="title">payment</h3>

                    <div class="inputBox">
                        <span>cards accepted :</span>
                        <img src="images/card_img.png" alt="">
                    </div>
                    <div class="inputBox">
                        <span>name on card :</span>
                        <input type="text" placeholder="mr. Kasun Silva">
                    </div>
                    <div class="inputBox">
                        <span>credit card number :</span>
                        <input type="text" placeholder="1111-2222-3333-4444" require>
                    </div>
                    <div class="inputBox">
                        <span>exp month :</span>
                        <input type="text" placeholder="january" require>
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>exp year :</span>
                            <input type="text" placeholder="2022" require>
                        </div>
                        <div class="inputBox">
                            <span>CVV :</span>
                            <input type="text" placeholder="1234" require>
                        </div>
                    </div>

                </div>

            </div>

            <input type="submit" value="PAY" class="submit-btn">

        </form>

    </div>

</body>

</html>
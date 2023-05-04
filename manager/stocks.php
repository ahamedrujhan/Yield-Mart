<html>
<?php
include "./conn.php";
$sql_view = "SELECT * FROM `stock`";
?>

<?php
session_start();
if ($_SESSION['role'] != "Manager") {
    $url = "../login.php?error=Can't Access!!!";
    header("Location: $url");
}
?>

<head>
    <title>
        Stocks
    </title>
    <link rel="stylesheet" href="./css/orders.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>
    <div class="main">


        <div class="head">

            <h1>STOCKS</h1>


        </div>

        <div class="stocks">
            <!-- back button -->
            <a href="./mdash.php"><i class="fa-solid fa-circle-arrow-left fa-2xl" style="color: #a6b695; left:5%; position:absolute;top:8%;width:25px;height:25px;" onMouseOver="this.style.color='#669c35'" onMouseOut="this.style.color='#a6b695'"></i></a>




            <?php

            $select_products = mysqli_query($conn, $sql_view);
            if (mysqli_num_rows($select_products) > 0) {
                while ($row = mysqli_fetch_assoc($select_products)) {
            ?>
                    <div class="card">
                        <img src="../farmer_new/stock_img/<?php echo $row['image']; ?>">
                        <p><?php echo $row['name']; ?>
                            <br>Wanted: <?php echo $row['quantity']; ?> <?php echo $row['type']; ?>
                        </p>
                    </div>
            <?php }
            } ?>

        </div>
        <br><br>
        <footer>
            <div class="container">
                <p>Yield Mart ©2023</p>
            </div>
        </footer>

</body>

</html>
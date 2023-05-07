<html>
<?php
include "./config.php";
$sql_view = "SELECT * FROM `stocks`";
?>

<?php
if (!$_SESSION['role'] == "Manager") {
    $url = "./login.php?error=Can't Access!!!";
    header("Location: $url");
}
?>

<head>
    <title>
        Stocks
    </title>
    <link rel="stylesheet" href="./css/orders.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="main">
        <div class="head">
            <h1>STOCKS</h1>
        </div>
        <div class="stocks">
            <?php

            $select_products = mysqli_query($conn, $sql_view);
            if (mysqli_num_rows($select_products) > 0) {
                while ($row = mysqli_fetch_assoc($select_products)) {
            ?>
                    <div class="card">
                        <img src="./stock_img/<?php echo $row['image']; ?>">
                        <p><?php echo $row['name']; ?></p>
                        <p>Wanted: <?php echo $row['quantity']; ?></p>
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
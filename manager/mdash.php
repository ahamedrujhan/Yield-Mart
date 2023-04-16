<html>
<?php
session_start();
?>
<?php
if ($_SESSION['role'] != "Manager") {
    $url = "../login.php?error=Can't Access!!!";
    header("Location: $url");
}
?>

<head>
    <link rel="stylesheet" href="./css/orders.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<title>Manager Dashboard</title>

<body>
    <div class="main" style="height:100%; width:100%">

        <div class="navbar">
            <p>Ruju&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <img src="./images/no-image.jpg">&nbsp;&nbsp;
            <a href="../logout.php">
                <i class="fa-solid fa-right-from-bracket"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;

        </div>
        <div class="heading">
            <h3>Manager Dashboard</h3>
        </div>
        <div class="m-flex">
            <div class="f-container">
                <h3>Farmers</h3>
                <button class="c-b" onclick="window.location.href='./addStocks.php';">Stock Management</button>
                <button class="c-b" onclick="window.location.href='./stocks.php';">View Available Stocks</button>
                <button class="c-b" onclick="window.location.href='./requests.php';">Requests</button>
                <button class="c-b" onclick="window.location.href='./f-orders.php';">Orders</button>
            </div>
            <div class="s-container">
                <h3>Selling</h3>
                <button class="c-b" onclick="window.location.href='./addProducts.php';">Product Management</button>
                <button class="c-b" onclick="window.location.href='./products.php';">View Available Products</button>
                <button class="c-b" onclick="window.location.href='./s-orders.php';">Orders</button>
            </div>
        </div>
        <br><br>
        <footer>
            <div class="container">
                <p>Yield Mart ©2023</p>
            </div>
        </footer>

    </div>
</body>

</html>
<html>
<?php
session_start();
if ($_SESSION['role'] != "Manager") {
    $url = "./login.php?error=Can't Access!!!";
    header("Location: $url");
}
?>

<head>
    <link rel="stylesheet" href="./css/orders.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <title>Assign Deliver
    </title>
    <div class="main">
        <div class="head">
            <h1>Order Payments</h1>
        </div>
        <br>
        <div class="conform">
            <div class="content">
                <p id=f>
                    &nbsp;Farmer Id:
                    <br>
                    &nbsp;Farmer Name:
                    <br>
                    &nbsp;Total=
                </p>
                <p id=s>
                    &nbsp;Stocks:
                </p>
                <button id=a><i class="fa fa-money" aria-hidden="true"></i> Pay Now</button>&nbsp;&nbsp;&nbsp;&nbsp;

            </div>
            <div class="content">
                <p id=f>
                    &nbsp;Farmer Id:
                    <br>
                    &nbsp;Farmer Name:
                    <br>
                    &nbsp;Total=
                </p>
                <p id=s>
                    &nbsp;Stocks:
                </p>
                <button id=a><i class="fa fa-money" aria-hidden="true"></i> Pay Now</button>&nbsp;&nbsp;&nbsp;&nbsp;

            </div>
        </div>
        <br>
        <div class="conformed">
            <h3>&nbsp;Paid Orders </h3>
        </div>
        <br>
        <div class="conform">
            <div class="content">
                <p id=f>
                    &nbsp;Farmer Id:
                    <br>
                    &nbsp;Farmer Name:
                    <br>
                    &nbsp;Total=
                </p>
                <p id=s>
                    &nbsp;Stocks:
                </p>
                <p id=d><i class="fa fa-check-square-o" aria-hidden="true"></i> Paid</p>&nbsp;&nbsp;&nbsp;&nbsp;

            </div>
            <div class="content">
                <p id=f>
                    &nbsp;Farmer Id:
                    <br>
                    &nbsp;Farmer Name:
                    <br>
                    &nbsp;Total=
                </p>
                <p id=s>
                    &nbsp;Stocks:
                </p>
                <p id=d><i class="fa fa-check-square-o" aria-hidden="true"></i> Paid</p>&nbsp;&nbsp;&nbsp;&nbsp;

            </div>
        </div>
        <br>
    </div>

</body>

</html>
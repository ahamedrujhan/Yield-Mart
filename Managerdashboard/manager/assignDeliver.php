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
            <h1>Assign Delivery Person</h1>
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
                <button id=a><i class="fa fa-user" aria-hidden="true"></i> Assign</button>&nbsp;&nbsp;&nbsp;&nbsp;

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
                <button id=a><i class="fa fa-user" aria-hidden="true"></i> Assign</button>&nbsp;&nbsp;&nbsp;&nbsp;

            </div>

        </div>
        <br>
        <div class="conformed">
            <h3>&nbsp;Waiting for Pickup </h3>
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
                <button id=c><i class="fa fa-truck" aria-hidden="true"></i> Waiting</button>&nbsp;&nbsp;&nbsp;&nbsp;

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
                <button id=c><i class="fa fa-truck" aria-hidden="true"></i> Waiting</button>&nbsp;&nbsp;&nbsp;&nbsp;

            </div>
        </div>
        <br>
    </div>

</body>

</html>
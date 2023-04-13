<html>
<?php
@include "./conn.php";
$sqlRequestView = "SELECT * FROM `request`";
?>

<head>
    <link rel="stylesheet" href="./css/orders.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.
    min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>
    <title>Orders
    </title>
    <div class="main">
        <div class="head">
            <h1>Orders</h1>
        </div>

        <br>
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
            <p id=c><i class="fa-solid fa-truck"></i> Assign</p>&nbsp;&nbsp;
            <p id=a><i class="fa fa-check" aria-hidden="true"></i>Accepted</p>&nbsp;&nbsp;

        </div>
        <br>
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
            <p id=a><i class="fa fa-check" aria-hidden="true"></i>Accepted</p>&nbsp;&nbsp;

        </div>
        <br>

        <div class="conformed">
            <h3>&nbsp;Finished Orders</h3>

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
                <p id=a><i class="fa-solid fa-thumbs-up"></i> Finished</p>&nbsp;&nbsp;

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
                <p id=a><i class="fa-solid fa-thumbs-up"></i> Finished</p>&nbsp;&nbsp;

            </div>
        </div>
        <br>


    </div>
    <br><br>
    <footer>
        <div class="container">
            <p>Yield Mart ©2023</p>
        </div>
    </footer>
</body>

</html>
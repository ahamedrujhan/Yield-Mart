<html>
<?php
@include "./conn.php";
$sqlRequestView = "SELECT * FROM `request`";
?>
<?php
if (!$_SESSION['role'] == "Manager") {
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
    <title>Requested Orders
    </title>
    <div class="main">
        <div class="head">
            <h1>Requested Orders</h1>
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
            <button class=accept><i class="fa fa-check" aria-hidden="true"></i> Accept</button>
            &nbsp;
            <button class=reject><i class="fa fa-times" aria-hidden="true"></i> Reject</button>
            &nbsp;
        </div>
        <br>
        <div class="fmconf">
            <h3>&nbsp;Waiting for Farmers Conformation </h3>
        </div>
        <br>
        <div class="fmcon">
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
                <p id=c><i class="fa fa-clock-o" aria-hidden="true"></i>Waiting</p>&nbsp;&nbsp;

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
                <p id=c><i class="fa fa-clock-o" aria-hidden="true"></i>Waiting</p>&nbsp;&nbsp;

            </div>
        </div>
        <br>

        <br>
        <div class="rejected">
            <h3>&nbsp;Rejected Orders</h3>
        </div>
        <br>
        <div class="rejects">
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
                <p id=b><i class="fa fa-times" aria-hidden="true"></i>Rejected</p>&nbsp;&nbsp;

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
                <p id=b><i class="fa fa-times" aria-hidden="true"></i>Rejected</p>&nbsp;&nbsp;

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
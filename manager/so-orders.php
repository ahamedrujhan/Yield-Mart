<html>
<?php
@include "./conn.php";
$sqlRequestView = "SELECT * FROM `request`";
?>
<?php
session_start();
if ($_SESSION['role'] != "Manager") {
    $url = "../login.php?error=Can't Access!!!";
    header("Location: $url");
}
$sql0 = "SELECT * FROM `orders` WHERE method='credit card' AND STATUS=0"; //accept or reject
$sql3 = "SELECT * FROM `orders` WHERE method='credit card' AND STATUS=3"; //finished online
$sql4 = "SELECT * FROM `orders` WHERE method='credit card' AND STATUS=4"; //rejected online
?>

<head>
    <link rel="stylesheet" href="./css/orders.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.
    min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>
    <title>Online Orders
    </title>
    <div class="main">
        <!-- back button -->
        <a href="./mdash.php"><i class="fa-solid fa-circle-arrow-left fa-2xl" style="color: #a6b695; left:5%; position:absolute;top:7%;width:25px;height:25px;" onMouseOver="this.style.color='#669c35'" onMouseOut="this.style.color='#a6b695'"></i></a>
        <div class="head">
            <h1>Online Orders</h1>
        </div>

        <br>
        <?php

        $sqlRequestViewResult = mysqli_query($conn, $sql0);
        if (mysqli_num_rows($sqlRequestViewResult) > 0) {
            while ($row = mysqli_fetch_assoc($sqlRequestViewResult)) {

                $Rid = $row["order_id"];

        ?>
                <br>
                <div class="content">
                    <p id=f>
                        &nbsp;Customer Id: <b><?php echo $row["user_id"]; ?></b>
                        <br>
                        &nbsp;Customer Name: <b><?php echo $row["name"]; ?></b>
                        <br>
                        &nbsp;Total= <b><?php echo $row["total_price"]; ?></b>
                    </p>
                    <p id=s>
                        &nbsp;Products: <b><?php echo $row["total_products"]; ?></b>
                    </p>
                    <p id=c><i class="fa-solid fa-truck"></i> Assign</p>&nbsp;&nbsp;
                    <button class=reject><i class="fa fa-times" aria-hidden="true"></i> Reject</button>

                </div>
        <?php }
        }
        ?>
        <br>
        <div class="content">
            <p id=f>
                &nbsp;Customer Id:
                <br>
                &nbsp;Customer Name:
                <br>
                &nbsp;Total=
            </p>
            <p id=s>
                &nbsp;Products:
            </p>
            <p id=c><i class="fa-solid fa-truck"></i> Assign</p>&nbsp;&nbsp;
            <button class=reject><i class="fa fa-times" aria-hidden="true"></i> Reject</button>

        </div>
        <br>
        <div class="conformed">
            <h3>&nbsp;Finished Orders</h3>

        </div>

        <br>
        <div class="conform">
            <div class="content">
                <p id=f>
                    &nbsp;Customer Id:
                    <br>
                    &nbsp;Customer Name:
                    <br>
                    &nbsp;Total=
                </p>
                <p id=s>
                    &nbsp;Products:
                </p>
                <p id=a><i class="fa-solid fa-thumbs-up"></i> Finished</p>&nbsp;&nbsp;

            </div>
            <br>
        </div>
        <br>

        <div class="conformed">
            <h3>&nbsp;Canceled Orders</h3>

        </div>

        <br>
        <div class="conform">
            <div class="content">
                <p id=f>
                    &nbsp;Customer Id:
                    <br>
                    &nbsp;Customer Name:
                    <br>
                    &nbsp;Total=
                </p>
                <p id=s>
                    &nbsp;Products:
                </p>
                <p id=r><i class="fa-solid fa-thumbs-down"></i> Rejected</p>&nbsp;&nbsp;

            </div>
            <div class="content">
                <p id=f>
                    &nbsp;Customer Id:
                    <br>
                    &nbsp;Customer Name:
                    <br>
                    &nbsp;Total=
                </p>
                <p id=s>
                    &nbsp;Products:
                </p>
                <p id=r>
                    <i class="fa-solid fa-thumbs-down"></i> Rejected
                </p>&nbsp;&nbsp;

            </div>
        </div>
        <br>

        <br><br>
        <footer>
            <div class="container">
                <p>Yield Mart ©2023</p>
            </div>
        </footer>
    </div>

</body>

</html>
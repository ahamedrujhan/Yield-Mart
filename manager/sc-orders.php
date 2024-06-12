<html>
<?php
@include "./conn.php";
//$sqlRequestView = "SELECT * FROM `orders` WHERE method = 'cash on delivery'";
?>
<?php
session_start();
if ($_SESSION['role'] != "Manager") {
    $url = "../login.php?error=Can't Access!!!";
    header("Location: $url");
}
$sql0 = "SELECT * FROM `orders` WHERE method='cash on delivery' AND STATUS=0"; //accept or reject
$sql1 = "SELECT * FROM `orders` WHERE method='cash on delivery' AND STATUS=1"; //inprocess
$sql2 = "SELECT * FROM `orders` WHERE method='cash on delivery' AND STATUS=4"; //rejected
$sql3 = "SELECT * FROM `orders` WHERE method='cash on delivery' AND STATUS=3"; //delivered
?>

<head>
    <link rel="stylesheet" href="./css/orders.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.
    min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>
    <title>Cash on Deliery Orders
    </title>
    <div class="main">
        <!-- back button -->
        <a href="./mdash.php"><i class="fa-solid fa-circle-arrow-left fa-2xl" style="color: #a6b695; left:5%; position:absolute;top:7%;width:25px;height:25px;" onMouseOver="this.style.color='#669c35'" onMouseOut="this.style.color='#a6b695'"></i></a>
        <div class="head">
            <h1>Cash on Deliery Orders</h1>
        </div>
        <?php

        $sqlRequestViewResult = mysqli_query($conn, $sql0);
        if (mysqli_num_rows($sqlRequestViewResult) > 0) {
            while ($row = mysqli_fetch_assoc($sqlRequestViewResult)) {

                $Oid = $row["order_id"];

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
                        <br>
                        <br>
                        &nbsp;Ordered on: <b><?php echo $row["ordered_on"]; ?></b>
                    </p>
                    <br>
                    <p>
                    <form method="post">
                        <button id=c type="submit" name="assign<?php echo $Oid; ?>"><i class="fa-solid fa-truck"></i> Assign</button>&nbsp;&nbsp;
                        <button class=reject type="submit" name="reject<?php echo $Oid; ?>"><i class="fa fa-times" aria-hidden="true" type="submit"></i> Reject</button>
                    </form>
                    </p>

                </div>
        <?php if (isset($_POST["assign$Oid"])) {
                    $sqlRequestaccept = "UPDATE `orders` SET `status`=1 WHERE `order_id`=$Oid";
                    $sqlAccept = mysqli_query($conn, $sqlRequestaccept);
                    // var_dump($Rid);
                    header("Location:sc-orders.php");
                }
                if (isset($_POST["reject$Oid"])) {
                    $sqlRequestaccept = "UPDATE `orders` SET `status`=4 WHERE `order_id`=$Oid";
                    $sqlAccept = mysqli_query($conn, $sqlRequestaccept);
                    // var_dump($Rid);
                    header("Location:sc-orders.php");
                }
            }
        } else {
            echo "<br>No more orders <br>";
        }
        ?>

        <br>
        <div class="conformed">
            <h3>&nbsp;In Process Orders</h3>

        </div>
        <?php

        $sqlRequestViewResult = mysqli_query($conn, $sql1);
        if (mysqli_num_rows($sqlRequestViewResult) > 0) {
            while ($row = mysqli_fetch_assoc($sqlRequestViewResult)) {

                // $Oid = $row["order_id"];

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
                        <br>
                        <br>
                        &nbsp;Ordered on: <b><?php echo $row["ordered_on"]; ?></b>
                    </p>
                    <!-- <p id=a><i class="fa-solid fa-thumbs-up"></i> Finished</p>&nbsp;&nbsp; -->
                    <p id=c><i class="fa-solid fa-truck"></i> In Process</p>&nbsp;&nbsp;
                </div>
        <?php }
        } else {
            echo "<br>No more orders <br>";
        }
        ?>
        <div class="conformed">
            <h3>&nbsp;Delivered Orders</h3>

        </div>
        <?php

        $sqlRequestViewResult = mysqli_query($conn, $sql3);
        if (mysqli_num_rows($sqlRequestViewResult) > 0) {
            while ($row = mysqli_fetch_assoc($sqlRequestViewResult)) {

                // $Oid = $row["order_id"];

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
                        <br>
                        &nbsp;Ordered on: <b><?php echo $row["ordered_on"]; ?></b>
                        <br>
                        &nbsp;Delivered on: <b><?php echo $row["delivered_on"]; ?></b>
                    </p>
                    <!-- <p id=a><i class="fa-solid fa-thumbs-up"></i> Finished</p>&nbsp;&nbsp; -->
                    <p id=c><i class="fa-solid fa-truck"></i> Delivered</p>&nbsp;&nbsp;
                </div>

        <?php }
        } else {
            echo "<br>No more orders <br>";
        } ?>


        <br>

        <div class="conformed">
            <h3>&nbsp;Rejected Orders</h3>

        </div>
        <?php

        $sqlRequestViewResult = mysqli_query($conn, $sql2);
        if (mysqli_num_rows($sqlRequestViewResult) > 0) {
            while ($row = mysqli_fetch_assoc($sqlRequestViewResult)) {

                // $Oid = $row["order_id"];

        ?>

                <br>
                <div class="conform">
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
                            <br>
                            <br>
                            &nbsp;Ordered on: <b><?php echo $row["ordered_on"]; ?></b>
                        </p>
                        <p id=r><i class="fa-solid fa-thumbs-down"></i> Rejected</p>&nbsp;&nbsp;

                    </div>
            <?php }
        } else {
            echo "<br>No more orders <br>";
        }
            ?>
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
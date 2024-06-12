<html>
<?php
@include "./conn.php";
$sqlRequestView_2 = "SELECT * FROM `requests` WHERE status=2"; //ACCEPTED BY FARMER ALSO
$sqlRequestView_4 = "SELECT * FROM `requests` WHERE status=4"; //Delivered
?>
<?php
session_start();
if ($_SESSION['role'] != "Manager") {
    $url = "../login.php?error=Can't Access!!!";
    header("Location: $url");
}
?>

<head>
    <link rel="stylesheet" href="./css/orders.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.
    min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>
    <title>Farmer Orders
    </title>
    <div class="main">
        <div class="head">
            <h1>Orders</h1>
        </div>
        <!-- back button -->
        <a href="./mdash.php"><i class="fa-solid fa-circle-arrow-left fa-2xl" style="color: #a6b695; left:5%; position:absolute;top:8%;width:25px;height:25px;" onMouseOver="this.style.color='#669c35'" onMouseOut="this.style.color='#a6b695'"></i></a>
        <br>
        <div class="conformed">
            <h3>&nbsp;Waiting For Delivery</h3>

        </div>
        <?php

        $sqlRequestViewResult = mysqli_query($conn, $sqlRequestView_2);
        if (mysqli_num_rows($sqlRequestViewResult) > 0) {
            while ($row = mysqli_fetch_assoc($sqlRequestViewResult)) {
                $Rid = $row["request_id"];



        ?>

                <br>

                <div class="content">
                    <p id=f>
                        &nbsp;Farmer ID: <b><?php echo $row["farmer_id"]; ?></b>
                        <br>
                        <br>
                        &nbsp;Farmer Name: <b><?php echo $row["f_name"]; ?></b>

                    </p>
                    <p id=s>
                        &nbsp;Stock: <b><?php echo $row["s_name"]; ?></b>
                        <br>
                        &nbsp;Quantity: <b><?php echo $row["quantity"]; ?></b>
                        <br>
                        &nbsp;Price: <b><?php echo $row["price"]; ?></b>
                    </p>
                    <p id=s>

                        &nbsp;Total: <b><?php echo $row["total"]; ?></b>
                        <br>
                        &nbsp;Requested on: <b><?php echo $row["requested_on"]; ?></b>
                        <br>
                        &nbsp;Handover on: <b><?php echo $row["handovered_on"]; ?></b>

                    </p>
                    <form method="post">
                        <input type="hidden" name="s_name" value="<?php echo $row["s_name"]; ?>">
                        <input type="hidden" name="s_qty" value="<?php echo $row["quantity"]; ?>">
                        <button id=c type="submit" name="deliver<?php echo $Rid; ?>"><i class="fa-solid fa-truck"></i> Delivered</button>
                        &nbsp;&nbsp;
                    </form>


                </div>
        <?php
                if (isset($_POST["deliver$Rid"])) {
                    $name = $_POST["s_name"];
                    $qty = $_POST["s_qty"];
                    mysqli_query($conn, "UPDATE `products` SET quantity=quantity+$qty WHERE name='$name'");
                    //var_dump($name, $qty) or die();
                    $sql_4 = "UPDATE `requests` SET `status`=4 WHERE `request_id`=$Rid";
                    $sqlAccept = mysqli_query($conn, $sql_4);
                    header("Location:f-orders.php");
                }
            }
        } ?>
        <br>

        <div class="conformed">
            <h3>&nbsp;Finished Orders</h3>

        </div>
        <?php

        $sqlRequestViewResult = mysqli_query($conn, $sqlRequestView_4);
        if (mysqli_num_rows($sqlRequestViewResult) > 0) {
            while ($row = mysqli_fetch_assoc($sqlRequestViewResult)) {



        ?>

                <br>

                <div class="content">
                    <p id=f>
                        &nbsp;Farmer ID: <b><?php echo $row["farmer_id"]; ?></b>
                        <br>
                        <br>
                        &nbsp;Farmer Name: <b><?php echo $row["f_name"]; ?></b>

                    </p>
                    <p id=s>
                        &nbsp;Stock: <b><?php echo $row["s_name"]; ?></b>
                        <br>
                        &nbsp;Quantity: <b><?php echo $row["quantity"]; ?></b>
                        <br>
                        &nbsp;Price: <b><?php echo $row["price"]; ?></b>
                    </p>
                    <p id=s>

                        &nbsp;Total: <b><?php echo $row["total"]; ?></b>
                        <br>
                        &nbsp;Requested on: <b><?php echo $row["requested_on"]; ?></b>
                        <br>
                        &nbsp;Handover on: <b><?php echo $row["handovered_on"]; ?></b>

                    </p>
                    <p id=a><i class="fa-solid fa-thumbs-up"></i> Finished</p>&nbsp;&nbsp;

                </div>
        <?php
            }
        }
        ?>


        <br>



        <br><br>
        <footer>
            <div class="container">
                <p>Yield Mart ©2023</p>
            </div>
        </footer>


</body>

</html>
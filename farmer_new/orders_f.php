<html>
<?php
@include "./conn.php";

?>
<?php
session_start();
if ($_SESSION['role'] != "Farmer") {
    $url = "../login.php?error=Can't Access!!!";
    header("Location: $url");
}
$id = $_SESSION['id'];
$sql_1 = "SELECT * FROM `requests` WHERE status=1 AND farmer_id=$id"; //farmer accept or reject
$sql_2 = "SELECT * FROM `requests` WHERE status=2 AND farmer_id=$id"; //waiting for delivary farmrer accepted
$sql_4 = "SELECT * FROM `requests` WHERE status=4 AND farmer_id=$id"; //finished orders
$sql_3 = "SELECT * FROM `requests` WHERE status=3 AND farmer_id=$id"; //rejected orders
?>

<head>
    <link rel="stylesheet" href="./css/orders.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.
    min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <title>Orders
    </title>
    <div class="main">
        <div class="head">
            <h1>Orders</h1>
        </div>
        <br>
        <div class="conformed">
            <h3>&nbsp;Process Orders</h3>

        </div>
        <?php

        $sqlRequestViewResult = mysqli_query($con, $sql_1);
        if (mysqli_num_rows($sqlRequestViewResult) > 0) {
            while ($row = mysqli_fetch_assoc($sqlRequestViewResult)) {

                $Rid = $row["request_id"];
                $que_f = $row["quantity"];
                $Sid = $row["stock_id"];
                $sql_1 = "SELECT `quantity` FROM `stock` WHERE `stock_id`=$Sid";
                $result = mysqli_query($con, $sql_1);
                $que = mysqli_fetch_assoc($result)["quantity"];


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
                        <br>
                        &nbsp;Total: <b><?php echo $row["total"]; ?></b>


                    </p>
                    <form method="POST">
                        <br>
                        <button class=accept type="submit" name="accept<?php echo $Rid; ?>"><i class="fa-sharp fa-regular fa-arrow-left"></i> Process</button>
                        &nbsp;
                        <button class=reject type="submit" name="reject<?php echo $Rid; ?>"><i class=" fa fa-times" aria-hidden="true"></i> Cancel</button>
                        &nbsp;
                    </form>
                </div>
        <?php
                if (isset($_POST["accept$Rid"])) {
                    if ($que >= $que_f) {
                        $sqlRequestaccept = "UPDATE `requests` SET `status`=2 WHERE `request_id`=$Rid";
                        $sqlAccept = mysqli_query($con, $sqlRequestaccept);

                        $bal = $que - $que_f;
                        $sqlup = "UPDATE `stock` SET `quantity`=$bal WHERE `stock_id`=$Sid";
                        $sqlreup = mysqli_query($con, $sqlup);
                        header("Location:orders_f.php");
                    } else {
                        echo "<script>
                        alert('Quantity EXCEEDED!');
                        </script>";
                        $sqlRequestaccept = "UPDATE `requests` SET `status`=4 WHERE `request_id`=$Rid";
                        $sqlAccept = mysqli_query($con, $sqlRequestaccept);
                    }
                    //var_dump($Rid, $que_f, $Sid, $que, $bal);

                }
                if (isset($_POST["reject$Rid"])) {
                    $sqlRequestaccept = "UPDATE `requests` SET `status`=3 WHERE `request_id`=$Rid";
                    $sqlAccept = mysqli_query($con, $sqlRequestaccept);

                    // var_dump($Rid);
                    header("Location:orders_f.php");
                }
            }
        }
        ?>

        <br>

        <div class="conformed">
            <h3>&nbsp;Waiting for delivery</h3>

        </div>
        <?php

        $sqlRequestViewResult = mysqli_query($con, $sql_2);
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
                        <br>
                        &nbsp;Total: <b><?php echo $row["total"]; ?></b>


                    </p>
                    <p id=c><i class="fa fa-clock-o" aria-hidden="true"></i>Waiting</p>&nbsp;&nbsp;
                </div>
        <?php }
        } ?>

        <br>

        <div class="conformed">
            <h3>&nbsp;Finished orders</h3>

        </div>
        <?php

        $sqlRequestViewResult = mysqli_query($con, $sql_4);
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
                        <br>
                        &nbsp;Total: <b><?php echo $row["total"]; ?></b>


                    </p>
                    <p id=a><i class="fa-solid fa-thumbs-up"></i> Finished</p>&nbsp;&nbsp;
                </div>


        <?php }
        } ?>
        <br>

        <div class="conformed">
            <h3>&nbsp;Rejected orders</h3>

        </div>
        <?php

        $sqlRequestViewResult = mysqli_query($con, $sql_3);
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
                        <br>
                        &nbsp;Total: <b><?php echo $row["total"]; ?></b>


                    </p>
                    <p id=b><i class="fa fa-times" aria-hidden="true"></i>Rejected</p>&nbsp;&nbsp;
                </div>
        <?php }
        }
        ?>



        <br><br>
        <footer>
            <div class="container">
                <p>Yield Mart ©2023</p>
            </div>
        </footer>
    </div>
</body>

</html>
<html>
<?php
@include "./conn.php";
$sqlRequestView_0 = "SELECT * FROM `requests` WHERE status=0"; //accept or reject
$sqlRequestView_1 = "SELECT * FROM `requests` WHERE status=1"; //accepted
$sqlRequestView_3 = "SELECT * FROM `requests` WHERE status=3"; //Rejected


?>
<?php
session_start();
if ($_SESSION['role'] != "Manager") {
    $url = "../login.php?error=Can't Access!!!";
    header("Location: $url");
}
$f_id = $_SESSION["id"];

?>

<head>
    <link rel="stylesheet" href="./css/orders.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <title>Requested Orders
    </title>
    <div class="main">
        <div class="head">
            <h1>Requested Orders</h1>
        </div>
        <!-- back button -->
        <a href="./mdash.php"><i class="fa-solid fa-circle-arrow-left fa-2xl" style="color: #a6b695; left:5%; position:absolute;top:8%;width:25px;height:25px;" onMouseOver="this.style.color='#669c35'" onMouseOut="this.style.color='#a6b695'"></i></a>

        <br>
        <?php

        $sqlRequestViewResult = mysqli_query($conn, $sqlRequestView_0);
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
                    <form method="POST">
                        <br>
                        <button class=accept type="submit" name="accept<?php echo $Rid; ?>"><i class="fa fa-check" aria-hidden="true"></i> Accept</button>
                        &nbsp;
                        <button class=reject type="submit" name="reject<?php echo $Rid; ?>"><i class=" fa fa-times" aria-hidden="true"></i> Reject</button>
                        &nbsp;
                    </form>
                </div>
        <?php
                if (isset($_POST["accept$Rid"])) {
                    $sqlRequestaccept = "UPDATE `requests` SET `status`=1 WHERE `request_id`=$Rid";
                    $sqlAccept = mysqli_query($conn, $sqlRequestaccept);
                    // var_dump($Rid);
                    header("Location:requests.php");
                }
                if (isset($_POST["reject$Rid"])) {
                    $sqlRequestaccept = "UPDATE `requests` SET `status`=3 WHERE `request_id`=$Rid";
                    $sqlAccept = mysqli_query($conn, $sqlRequestaccept);
                    // var_dump($Rid);
                    header("Location:requests.php");
                }
            }
        }

        ?>

        <br>
        <div class="fmconf">
            <h3>&nbsp;Waiting for Farmers Conformation </h3>
        </div>

        <?php

        $sqlRequestViewResult = mysqli_query($conn, $sqlRequestView_1);
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
                    <p id=c><i class="fa fa-clock-o" aria-hidden="true"></i>Waiting</p>&nbsp;&nbsp;

                </div>


        <?php
            }
        }
        ?>

        <br>

        <br>
        <div class="rejected">
            <h3>&nbsp;Rejected Orders</h3>
        </div>
        <?php

        $sqlRequestViewResult = mysqli_query($conn, $sqlRequestView_3);
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

                    </p>
                    <p id=b><i class="fa fa-times" aria-hidden="true"></i>Rejected</p>&nbsp;&nbsp;

                </div>

        <?php
            }
        } ?>
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
<html>
<?php
@include "./conn.php";
$sqlRequestView_2 = "SELECT * FROM `requests` WHERE status=2"; //ACCEPTED BY FARMER ALSO
$sqlRequestView_4 = "SELECT * FROM `requests` WHERE status=4"; //Delivered
?>
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
                    <p id=c><i class="fa-solid fa-truck"></i> Delivered</p>&nbsp;&nbsp;
                    <p id=a><i class="fa fa-check" aria-hidden="true"></i>Accepted</p>&nbsp;&nbsp;

                </div>
        <?php
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
                <div class="conform">
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
            <?php
            }
        }
            ?>

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
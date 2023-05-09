<html>
<?php
include "./conn.php";

?>
<?php
session_start();
// if ($_SESSION['role'] != "Manager") {
//     $url = "../login.php?error=Can't Access!!!";
//     header("Location: $url");
// }
$sql = "SELECT * FROM `users` WHERE status=0 AND role='Manager'";
$sql1 = "SELECT * FROM `users` WHERE status=1 AND role='Manager'"
?>

<head>
    <link rel="stylesheet" href="./css/orders.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.
    min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>
    <title>Account Control
    </title>
    <div class="main">
        <div class="head">
            <h1>Manager Account Control</h1>
        </div>
        <!-- back button -->
        <a href="./admin_home.php"><i class="fa-solid fa-circle-arrow-left fa-2xl" style="color: #a6b695; left:5%; position:absolute;top:7%;width:25px;height:25px;" onMouseOver="this.style.color='#669c35'" onMouseOut="this.style.color='#a6b695'"></i></a>

        <br>
        <div class="conformed">
            <h3>&nbsp;Active Accounts</h3>

        </div>
        <?php

        $sqlRequestViewResult = mysqli_query($conn, $sql);
        if (mysqli_num_rows($sqlRequestViewResult) > 0) {
            while ($row = mysqli_fetch_assoc($sqlRequestViewResult)) {

                $Uid = $row["user_id"];


        ?>

                <br>
                <div class="content">
                    <p id=f>
                        &nbsp;User Id: <b><?php echo $row["user_id"]; ?></b>
                        <br>
                        &nbsp;First Name: <b><?php echo $row["f_name"]; ?></b>
                        <br>
                        &nbsp;Last Name: <b><?php echo $row["l_name"]; ?></b>
                    </p>
                    <p id=s>
                        &nbsp;Email: <b><?php echo $row["email"]; ?></b>
                        <br>
                        &nbsp;Phone: <b><?php echo $row["phone"]; ?></b>
                        <br>
                        &nbsp;Gender: <b><?php echo $row["gender"]; ?></b>
                    </p>

                    <form method="post">
                        <br>
                        <button class=reject type="submit" name="deactive<?php echo $Uid; ?>"><i class=" fa fa-times" aria-hidden="true"></i> Deactivate</button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                    </form>

                </div>
        <?php
                if (isset($_POST["deactive$Uid"])) {
                    $sqlRequestaccept = "UPDATE `users` SET `status`=1 WHERE `user_id`=$Uid";
                    $sqlAccept = mysqli_query($conn, $sqlRequestaccept);
                    // var_dump($Rid);
                    header("Location:control.php");
                }
            }
        }

        ?>
        <br>

        <div class="conformed">
            <h3>&nbsp;Deactivated Accounts</h3>

        </div>
        <?php

        $sqlRequestViewResult = mysqli_query($conn, $sql1);
        if (mysqli_num_rows($sqlRequestViewResult) > 0) {
            while ($row = mysqli_fetch_assoc($sqlRequestViewResult)) {

                $Uid = $row["user_id"];


        ?>

                <br>
                <div class="content">
                    <p id=f>
                        &nbsp;User Id: <b><?php echo $row["user_id"]; ?></b>
                        <br>
                        &nbsp;First Name: <b><?php echo $row["f_name"]; ?></b>
                        <br>
                        &nbsp;Last Name: <b><?php echo $row["l_name"]; ?></b>
                    </p>
                    <p id=s>
                        &nbsp;Email: <b><?php echo $row["email"]; ?></b>
                        <br>
                        &nbsp;Phone: <b><?php echo $row["phone"]; ?></b>
                        <br>
                        &nbsp;Gender: <b><?php echo $row["gender"]; ?></b>
                    </p>

                    <form method="post">
                        <br>
                        <button id=c type="submit" name="activate<?php echo $Uid; ?>"><i class="fa-solid fa-check"></i></i> Activate</button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                    </form>

                </div>
        <?php
                if (isset($_POST["activate$Uid"])) {
                    $sqlRequestaccept1 = "UPDATE `users` SET `status`=0 WHERE `user_id`=$Uid";
                    $sqlAccept = mysqli_query($conn, $sqlRequestaccept1);
                    // var_dump($Rid);
                    header("Location:control.php");
                }
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
    </div>
    <br>





</body>

</html>
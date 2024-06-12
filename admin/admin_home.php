<?php
session_start();
if ($_SESSION['role'] != "Admin") {
    $url = "./login.php?error=Can't Access!!!";
    header("Location: $url");
}
?>
<?php
//admin dashboard
include "./header.php";
include "./conn.php";
$sql_f = "SELECT * FROM `users` WHERE role='Farmer'";
$sql_c = "SELECT * FROM `users` WHERE role='Customer'";
$sql_m = "SELECT * FROM `users` WHERE role='Manager'";
$re_f = mysqli_query($conn, $sql_f);
$re_c = mysqli_query($conn, $sql_c);
$re_m = mysqli_query($conn, $sql_m);
$fcount = mysqli_num_rows($re_f);
$ccount = mysqli_num_rows($re_c);
$mcount = mysqli_num_rows($re_m);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin Farmer panel</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/admin_header.css">
    <link rel="stylesheet" href="./css/admin_home.css">

</head>

<body class="pattern">
    <div class="users">
        <a href="./f-control.php">
            <div class="farmers">
                <P>Farmers
                    <br>
                    <br>
                <p class=num><?php echo $fcount ?></p>
                </P>
            </div>
        </a>
        <a href="./c-control.php">
            <div class="wholesellers">
                <P>Customers
                    <br>
                    <br>
                <p class=num><?php echo $ccount ?></p>
                </P>
            </div>
        </a>
        <a href="./m-control.php">
            <div class="deliver">
                <P>Manager
                    <br>
                    <br>
                <p class=num><?php echo $mcount ?></p>
                </P>
            </div>
        </a>

    </div>
</body>

</html>
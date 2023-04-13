<?php
include "./config.php";
include "./header_f.php";
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
    <link rel="stylesheet" href="./css/admin_farmer_home.css">

</head>

<body class="home">
    <div class="btn_line">
        <a href="./add.php">
            <div class="add_btn">
                <p>Add Products</p>
            </div>
        </a>
        <div class="ordes_btn">
            <p>View Orders</p>
        </div>
        <div class="stock_btn">
            <p>View Stocks</p>
        </div>
    </div>
</body>

</html>
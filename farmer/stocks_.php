<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stocks | Yield Mart</title>
    <link rel="stylesheet" href="./css/stocks.css">
</head>

<body>
    <?php include "./config.php"; ?>

    <!--navigation bar-->
    <div class="nav-bar">
        <div class="left">
            <img src="./Images/logo.png" class="logo-photo" alt="logo">
        </div>

        <div class="middle">
            <div class="nav-text"><a href="#">Home</a></div>
            <div class="nav-text"><a href="#">About</a></div>
            <div class="nav-text"><a href="#">Contact Us</a></div>
            <div class="nav-text"><a href="#">Profile</a></div>
            <div class="nav-text"><a href="#">Cart</a></div>
        </div>

        <div class="right">
            <div><a href="./logout.php"><input type="button" value="Log Out"></a></div>
        </div>
    </div>
    <div class="content pattern">
        <div class="row">
            <div class="txt">Products</div>

        </div>

        <div class="row" style="background-color: #94C57D; border-radius:20px;">
            <div class="txt" style="font-size: 25px; margin-left: 20px; text-decoration:none; font-family: 'Poppins';">VEGETABLES</div>
        </div>

        <div class="row" style="background-color: #C9F59E; border-radius:20px;">
            <?php

            $select_products = mysqli_query($conn, "SELECT * FROM `products`");
            if (mysqli_num_rows($select_products) > 0) {
                while ($fetch_product = mysqli_fetch_assoc($select_products)) {
            ?>
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <form action="" method="post">
                                        <div class="box">
                                            <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
                                            <h3><?php echo $fetch_product['name']; ?></h3>
                                            <div class="price">Rs.<?php echo $fetch_product['price']; ?>/- per kg</div>
                                            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">

                                            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                                            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                                            <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
                                        </div>
                                    </form>
                                </td>
                            <tr>
                        <tbody>
                    </table>
            <?php
                };
            };
            ?>
        </div>

    </div>
</body>

</html>
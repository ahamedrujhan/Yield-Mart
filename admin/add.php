<?php
@include './config.php';
include './header_f.php';
//quaries

$sql_view = "SELECT * FROM `products`";

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
    <link rel="stylesheet" href="./css/admin_farmer_stock.css">
    <link rel="stylesheet" href="./css/admin_header.css">

</head>

<body class="pattern">

    <?php if (isset($_GET['message'])) {
        $message = $_GET['message'];
    ?>
        <div class="message">
            <?php echo $message; ?>
        </div>
    <?php }
    ?>


    </div>
    <div class="container">

        <section>

            <form action="./add_back.php" method="POST" class="add-product-form">
                <h3>add a new product</h3>
                <input type="text" name="p_name" placeholder="enter the product name" class="box" required>
                <select name="p_type" class="box">
                    <option value="Fruit">Fruit</option>
                    <option value="Vegitable">Vegitable</option>
                </select>
                <input type="number" name="p_price" min="0" placeholder="enter the product price" class="box" required>
                <input type="number" name="p_value" min="0" placeholder="enter the available amount" class="box" required>

                <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
                <input type="submit" value="add the product" name="add_product" class="btn">
            </form>

        </section>
        <section class="product-table">

            <table>

                <thead>
                    <th>product image</th>
                    <th>product name</th>
                    <th>Product type</th>
                    <th>product price</th>
                    <th>Amount available</th>
                    <th>action</th>
                </thead>

                <tbody>
                    <?php

                    $select_products = mysqli_query($conn, $sql_view);
                    if (mysqli_num_rows($select_products) > 0) {
                        while ($row = mysqli_fetch_assoc($select_products)) {
                    ?>

                            <tr>
                                <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['type']; ?></td>
                                <td>LKR <?php echo $row['price']; ?>/-</td>
                                <td><?php echo $row['Amount_available']; ?> Kg</td>
                                <td>
                                    <a href="delete_back.php?delete=<?php echo $row['product_id']; ?>" class="delete-btn" onclick="return confirm('are your sure you want to delete this?')"><i class="fas fa-trash"></i>delete </a>

                                </td>
                            </tr>

                    <?php
                        };
                    } else {
                        echo "<div class='empty'>no product added</div>";
                    };
                    ?>
                </tbody>
            </table>

        </section>
    </div>

    <body>

</html>
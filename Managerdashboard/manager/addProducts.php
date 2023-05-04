<?php
include './conn.php';
session_start();
if ($_SESSION['role'] != "Manager") {
    $url = "../login.php?error=Can't Access!!!";
    header("Location: $url");
}
//quaries

$sql_view = "SELECT * FROM `products`";

function del($id)
{
    include './conn.php';
    $sql = "DELETE FROM products WHERE product_id='$id';";
    $resutl = mysqli_query($conn, $sql);
    $message = "Deleted successfully!";
    $url = "addProducts.php?message=$message";
    header("Location: $url");
}

?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/orders.css">

</head>

<body>
    <div class="main">

        <?php if (isset($_GET['message'])) {
            $message = $_GET['message'];
        ?>
            <div class="message">
                <?php echo $message; ?>
            </div>
        <?php }
        ?>



        <div class="container">

            <section>

                <form action="" method="POST" class="add-product-form">
                    <h3>Add a New product</h3>
                    <input type="text" name="p_name" placeholder="Enter the Product Name" class="box" required>
                    <input type="number" name="p_value" min="0" placeholder="Enter the Quantity" class="box" required>
                    <input type="number" name="p_price" min="0" placeholder="Enter the Price" class="box" required>
                    <input type="text" name="p_des" placeholder="Enter the Description" class="box" required>

                    <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
                    <input type="submit" value="Add Product" name="add_product" class="btn">
                </form>

            </section>

            <section class="product-table">

                <table>

                    <thead>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Action</th>
                    </thead>

                    <tbody>
                        <?php

                        $select_products = mysqli_query($conn, $sql_view);
                        if (mysqli_num_rows($select_products) > 0) {
                            while ($row = mysqli_fetch_assoc($select_products)) {
                        ?>

                                <tr>

                                    <td><img src="product_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['quantity']; ?> Kg</td>
                                    <td><?php echo $row['price']; ?>/=</td>
                                    <td>
                                        <?php
                                        $id = $row["product_id"];
                                        if (isset($_POST["del$id"])) {
                                            del($id);
                                        }

                                        ?>

                                        <form method="POST">
                                            <button class="delete-btn" type="submit" name="del<?php echo $id; ?>"><i class="fas fa-trash"></i>Delete</button>

                                            <button class="update-btn"><i class="fa-regular fa-pen-to-square"></i>Update</button>
                                        </form>

                                    </td>
                                </tr>

                        <?php
                            }
                        } else {
                            echo "<div class='empty'>no product added</div>";
                        };
                        ?>
                    </tbody>
                </table>

            </section>
        </div>


        <?php
        if (isset($_POST['add_product'])) {






            $p_name = $_POST["p_name"];
            $p_image = $_POST["p_image"];
            $p_value = $_POST["p_value"];
            $p_price = $_POST["p_price"];
            $p_des = $_POST["p_des"];



            $sql_insert = "INSERT INTO `products`(name, quantity, image,price,description,listed_on) VALUES('$p_name',   '$p_value', '$p_image','$p_price',' $p_des',now())";

            if (isset($p_name) && isset($p_value) && isset($p_image) && isset($p_price) && isset($p_des)) {
                $result_insert = mysqli_query($conn, $sql_insert) or die("query failed");
            }

            if ($result_insert == TRUE) {
                $message = "Product added successfully!";
                header("Location:addProducts.php?message=$message");
            }
        }


        ?>

</html>
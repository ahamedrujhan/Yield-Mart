<?php
include './config.php';
session_start();
if ($_SESSION['role'] != "Manager") {
    $url = "../login.php?error=Can't Access!!!";
    header("Location: $url");
}
//quaries

$sql_view = "SELECT * FROM `stocks`";

function del($id)
{
    include './config.php';
    $sql = "DELETE FROM stocks WHERE id='$id';";
    $resutl = mysqli_query($conn, $sql);
    $message = "Deleted successfully!";
    $url = "addStocks.php?message=$message";
    header("Location: $url");
}

?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Stocks</title>

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
                    <h3>Add a New Stocks</h3>
                    <input type="text" name="p_name" placeholder="Enter the Stock Name" class="box" required>
                    <input type="number" name="p_value" min="0" placeholder="Enter the Amount" class="box" required>

                    <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
                    <input type="submit" value="Add Stock" name="add_product" class="btn">
                </form>

            </section>

            <section class="product-table">

                <table>

                    <thead>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </thead>

                    <tbody>
                        <?php

                        $select_products = mysqli_query($conn, $sql_view);
                        if (mysqli_num_rows($select_products) > 0) {
                            while ($row = mysqli_fetch_assoc($select_products)) {
                        ?>

                                <tr>
                                    <td><img src="stock_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['quantity']; ?> Kg</td>
                                    <td>
                                        <?php
                                        $id = $row["id"];
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



            $sql_insert = "INSERT INTO `stocks`(name, quantity, image) VALUES('$p_name',   '$p_value', '$p_image')";

            if (isset($p_name) && isset($p_value) && isset($p_image)) {
                $result_insert = mysqli_query($conn, $sql_insert) or die("query failed");
            }

            if ($result_insert == TRUE) {
                $message = "Stock added successfully!";
                header("Location:addStocks.php?message=$message");
            }
        }


        ?>

</html>
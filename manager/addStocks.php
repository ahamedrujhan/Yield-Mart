<?php
include './conn.php';

session_start();
if ($_SESSION['role'] != "Manager") {
    $url = "../login.php?error=Can't Access!!!";
    header("Location: $url");
}
//quaries

$sql_view = "SELECT * FROM `stock`";

function del($id)
{
    include './conn.php';
    $sql = "DELETE FROM stock WHERE stock_id='$id';";
    $resutl = mysqli_query($conn, $sql);
    $message = "Stock deleted successfully!";
    // header("Location:addStocks.php?message=$message");
    $url = "addStocks.php?message=$message";
    if ($resutl == TRUE) {
        header("Location: $url");
    }
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
            <!-- back button -->
            <a href="./mdash.php"><i class="fa-solid fa-circle-arrow-left fa-2xl" style="color: #a6b695; left:5%; position:absolute;top:7%;width:25px;height:25px;" onMouseOver="this.style.color='#669c35'" onMouseOut="this.style.color='#a6b695'"></i></a>
            <section>

                <form action="" method="POST" class="add-product-form" enctype="multipart/form-data">
                    <h3>Add a New Stocks</h3>
                    <input type="text" name="p_name" placeholder="Enter the Stock Name" class="box" required>
                    <input type="number" name="p_value" min="0" placeholder="Enter the Amount" class="box" style="width:70%" required>&nbsp;
                    <select name="p_type" class="box" style="width:20%">
                        <option value="Pices">Pieces</option>
                        <option value="Kg">Kg</option>
                    </select>

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
                                    <td><img src="../farmer_new/stock_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['quantity']; ?> <?php echo $row['type']; ?></td>
                                    <td>
                                        <?php
                                        $id = $row["stock_id"];
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



</html>
<?php

if (isset($_POST['add_product'])) {




    $p_name = $_POST["p_name"];
    $p_value = $_POST["p_value"];
    $p_type = $_POST["p_type"];

    $img_name = $_FILES["p_image"]['name'];
    $img_size = $_FILES["p_image"]['size'];
    $tmp_name = $_FILES["p_image"]['tmp_name'];



    if ($img_size > 5000000) {
        // $em = "Sorry, your file is too large.";
        // header("Location: index.php?error=$em");
    } else {

        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        // print_r($img_ex);
        // die();
        $allowed_exs = array("jpg", "jpeg", "png");

        if (in_array($img_ex_lc, $allowed_exs)) {
            $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
            $img_upload_path = '../farmer_new/stock_img/' . $new_img_name;
            $res = move_uploaded_file($tmp_name, $img_upload_path);
            $p_iname = $new_img_name;

            // Insert into Database
            // $sql = "INSERT INTO images(image_url) 
            //         VALUES('$new_img_name')";
            // mysqli_query($conn, $sql);

        }
    }



    $sql_insert = "INSERT INTO `stock`(name, quantity, image, type, listed_on) VALUES('$p_name', '$p_value', '$p_iname','$p_type', CURRENT_TIMESTAMP)";

    if (isset($p_name) && isset($p_value) && isset($p_iname)) {

        $result_insert = mysqli_query($conn, $sql_insert) or die("query failed");
        // print_r($result_insert) or die();
        unset($_POST);
        $_POST = array();
        unset($_SESSION['postdata']);
    }

    if ($result_insert == TRUE) {

        $message = "Stock added successfully!";
        header("Location:addStocks.php?message=$message");
    }
}


?>
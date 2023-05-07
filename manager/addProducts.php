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
    echo "<script>window.location.href='$url';</script>";
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
<style>
    #popup {
        display: none;
        top: 10%
    }

    .popup-container {
        font-family: 'Poppins', sans-serif;

        height: 60rem;
        font-weight: bold;
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        background-color: rgb(96 95 127 / 75%);
        position: absolute;
        top: 0;
        left: 0;

    }

    .popupc {
        background-color: #ffffff;
        padding: 20px 30px;
        width: 30%;
        border-radius: 15px;

    }

    .close-popup {
        display: flex;
        justify-content: flex-end;
    }

    .close-popup a {
        font-size: 1.2rem;
        background-color: rebeccapurple;
        color: #fff;
        padding: 5px 10px;
        font-weight: bold;
        text-decoration: none;
        border-radius: 10px;
        display: inline-block;
    }

    .popupc>h2 {
        font-size: 1.6rem;
        margin-bottom: 10px;
    }

    .popupc>p {
        font-size: 1.2rem;
        margin-bottom: 10px;
    }

    .req {
        font-size: 2rem;
    }

    #quantity {
        width: auto;
        height: 2.5rem;


    }

    #img-popup {
        height: 20rem;
        width: 20rem;
        margin-left: 8%;
        margin-right: auto;
    }

    input[name="que"] {
        width: 20%;
        border: 2px solid #aaa;
        border-radius: 4px;
        margin: 8px 0;
        outline: none;
        padding: 8px;
        box-sizing: border-box;
        transition: .3s;
        font-size: medium;
    }

    .req {
        text-align: center;
    }
</style>


<body>
    <div class="main">
        <!-- back button -->
        <a href="./mdash.php"><i class="fa-solid fa-circle-arrow-left fa-2xl" style="color: #a6b695; left:5%; position:absolute;top:7%;width:25px;height:25px;" onMouseOver="this.style.color='#669c35'" onMouseOut="this.style.color='#a6b695'"></i></a>

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

                <form action="" method="POST" class="add-product-form" enctype="multipart/form-data">
                    <h3>Add a New product</h3>
                    <input type=" text" name="p_name" placeholder="Enter the Product Name" class="box" required>
                    <input type="number" name="p_value" min="0" placeholder="Enter the Quantity" class="box" style="width:70%" required>&nbsp;
                    <select name="p_type" class="box" style="width:20%">
                        <option value="Kg">Kg</option>
                        <option value="Pices">Pieces</option>
                        <option value="">None</option>

                    </select>
                    <input type="number" name="p_price" min="0" placeholder="Enter the Price" class="box" required>

                    <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
                    <input type="submit" value="Add Product" name="add_product" class="btn">
                </form>

            </section>
            <div id="popup">
                <div class="popup-container">
                    <div class="popupc">
                        <div class="close-popup" id="closeBtn">
                            <a href="#">X</a>
                        </div>
                        <h1 class="req">Update</h1>
                        <p>
                            &nbsp;&nbsp;&nbsp;
                            <img id='img-popup' src="" alt="">
                        <h3 id='stock_name'></h3>
                        <p id='quantity'>
                        <h2 style="text-align: center;">Quantity :&nbsp;
                            <input type='number' name="que" placeholder='Quantity' id="qua"></p>
                        </h2>
                        </p>
                        <p id='price'>
                        <h2 style="text-align: center;">Price :&nbsp;
                            <input type='number' name="pri" placeholder='Price' id="pri"></p>
                        </h2>
                        </p>
                        <form method="post">
                            <button id="clickBtn" class="btn" onclick=func() name="update">Update</button>

                        </form>


                    </div>
                </div>
            </div>

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
                                    <td><?php echo $row['quantity']; ?> <?php echo $row['type']; ?></td>
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

                                            <!-- <button class="update-btn"><i class="fa-regular fa-pen-to-square"></i>Update</button> -->
                                        </form>
                                        <button class="update-btn" id="clickBtn" onclick="document.getElementById('popup').style.display='block'; 
                                        document.getElementById('pri').value='<?php echo $row['price'];  ?>'; document.getElementById('img-popup').src='./product_img/<?php echo $row['image']; ?>'; d=<?php echo $row['product_id']; ?>;"><i class="fa-regular fa-pen-to-square"></i>Update</button>


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
                <script>
                    const clickBtn = document.getElementById("clickBtn");
                    const popup = document.getElementById("popup");
                    const closeBtn = document.getElementById("closeBtn");

                    clickBtn.addEventListener('click', () => {
                        popup.style.display = 'block';
                    });

                    closeBtn.addEventListener('click', () => {
                        popup.style.display = 'none';
                        document.cookie = "upqua =" + null;
                        document.cookie = "Sid =" + null;
                    });

                    function func() {
                        i = document.getElementById('qua').value;
                        document.cookie = "upqua =" + i;
                        document.cookie = "Sid =" + d;

                    }
                </script>

            </section>
        </div>


        <?php
        if (isset($_POST['add_product'])) {






            $p_name = $_POST["p_name"];
            $p_image = $_POST["p_image"];
            $p_value = $_POST["p_value"];
            $p_price = $_POST["p_price"];
            $p_type = $_POST["p_type"];
            $chk = "SELECT * FROM `products` WHERE name ='$p_name'";
            $res = mysqli_query($conn, $chk);
            $r = mysqli_num_rows($res);
            if ($r > 0) {

                $message2 = "Product Already Exists...";
                echo "<script>window.location.href='addProducts.php?message=$message2';</script>";
            } else {



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
                        $new_img_name = uniqid("PRO-", true) . '.' . $img_ex_lc;
                        $img_upload_path = './product_img/' . $new_img_name;
                        $rest = move_uploaded_file($tmp_name, $img_upload_path);
                        $p_iname = $new_img_name;

                        // Insert into Database
                        // $sql = "INSERT INTO images(image_url) 
                        //         VALUES('$new_img_name')";
                        // mysqli_query($conn, $sql);

                    }
                }

                $sql_insert = "INSERT INTO `products`(name, quantity, image,price,type,listed_on) VALUES('$p_name',   '$p_value', '$p_iname','$p_price',' $p_type',now())";

                if (isset($p_name) && isset($p_value) && isset($p_iname) && isset($p_price) && isset($p_type)) {
                    $result_insert = mysqli_query($conn, $sql_insert) or die("query failed");
                }

                if ($result_insert == TRUE) {
                    $message = "Product added successfully!";
                    // header("Location:addProducts.php?message=$message");
                    echo "<script>window.location.href='addProducts.php?message=$message';</script>";
                }
            }
        }


        ?>

</html>
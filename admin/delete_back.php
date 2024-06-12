<?php
include "./config.php";
$id = $_GET["delete"];
$sql_delete = "DELETE FROM `products` WHERE `products`.`product_id` = $id";
if (isset($id)) {

    $result_delete = mysqli_query($conn, $sql_delete) or die("query failed");
}
if ($result_delete == TRUE) {
    $message = "Product deleted Successfully!";
    header("Location:./add.php?message=$message");
} else {
    $message = "Can't delete the product!";
    header("Location:./add.php?message=$message");
}

<?php
include "./config.php";
$p_name = $_POST["p_name"];
$p_price = $_POST["p_price"];
$p_image = $_POST["p_image"];
$p_type = $_POST["p_type"];
$p_value = $_POST["p_value"];
$sql_insert = "INSERT INTO `products`(name, price, image, type, Amount_available) VALUES('$p_name', '$p_price', '$p_image', '$p_type' , '$p_value' )";

if (isset($p_name) && isset($p_price) && isset($p_image)) {
    $result_insert = mysqli_query($conn, $sql_insert) or die("query failed");
}
if ($result_insert == TRUE) {
    $message = "product added successfully!";
    header("Location:add.php?message=$message");
}

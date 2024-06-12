<?php
include "./conn.php";
if (isset($_POST)) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $add1 = $_POST["add1"];
    $add2 = $_POST["add2"];
    $city = $_POST["city"];
    $phone = $_POST["phone"];
    $gen = $_POST["gender"];
    $email = $_POST["email"];
    $nic = $_POST["nic"];
    $pw = $_POST["pwd"];
    $rpwd = $_POST["rpwd"];
    var_dump($_POST);
}

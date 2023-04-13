<?php
session_start();
include "./config.php";
if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($txt)
    {
        $txt = trim($txt);
        $txt = stripslashes($txt);
        $txt = htmlspecialchars($txt);
        return $txt;
    }
}
$uname = validate($_POST['username']);
$pass = validate($_POST['password']);

if (empty($uname)) {
    header("Location: login.php?error=User Name is required");
    exit();
} elseif (empty($pass)) {
    header("Location: login.php?error=Password is required");
    exit();
} else {
    $sql = "SELECT * FROM user WHERE email= '$uname' AND password= '$pass' AND role='admin'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);



        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['id'] = $row['id'];
        $url = "./admin_home.php";
        header("Location: $url");
    } else {
        header("Location: login.php?error=Incorrect User Name or Password");
        exit();
    }
}

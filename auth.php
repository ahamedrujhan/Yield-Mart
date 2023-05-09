<?php
session_start();
include "./conn.php";
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
    $sql = "SELECT * FROM users WHERE email= '$uname' AND password= '$pass'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row["status"] == 0) {





            $_SESSION['email'] = $row['email'];
            $_SESSION['id'] = $row['user_id'];
            $_SESSION['lname'] = $row['l_name'];
            $_SESSION['role'] = $row['role'];

            if ($row["role"] == "Manager") {
                $url = "./manager/mdash.php";
                header("Location: $url");
            }
            /*if ($row["role"] == "Farmer") {
            $url = "./Farmer/stocks.php";
            header("Location: $url");
        }*/
            if ($row["role"] == "Farmer") {
                $url = "./farmer_new/home.php";
                header("Location: $url");
            }
            if ($row["role"] == "Admin") {
                $url = "./admin/admin_home.php";
                header("Location: $url");
            }
            if ($row["role"] == "Customer") {
                $url = "./index.php";
                header("Location: $url");
            }
            if ($row["role"] == "Deliver") {
                $url = "./deliver/orders.php";
                header("Location: $url");
            }
            /*$url = "./admin_home.php";
        header("Location: $url");
        */
        }
        if ($row["status"] == 1) {
            header("Location: login.php?error=Admin Blocked Your account");
            exit();
        }
    } else {
        header("Location: login.php?error=Incorrect User Name or Password");
        exit();
    }
}

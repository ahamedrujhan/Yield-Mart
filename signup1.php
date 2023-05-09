<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Yield Mart Signup</title>
  <link rel="stylesheet" href="./css/signup.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <?php
  use Stripe\Terminal\Location;
  if (isset($_GET['message'])) {
    ?>
    <div class="message">
      <?php echo $_GET['message']; ?>
    </div>
    <?php
  }
  include "./conn.php";
  $fnameErr = $lnameErr = $emailErr =  $numErr = $addErr = $pwErr = $cpwErr = "";
  if (isset($_POST["signup"])) {
    $role = $_POST["role"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];
    $number = $_POST["number"];
    $password = $_POST["pass"];
    $c_password = $_POST["c_pass"];
    $v = TRUE;

    $sql = "INSERT INTO `users`(`f_name`, `l_name`, `gender`, `phone`, `email`, `address`, `role`, `password`, `created_on`, `status`) 
    VALUES ('$fname', '$lname', '$gender', '$number', '$email', '$address', '$role', '$password', NOW(), 0)";

    $sql1 = "SELECT * FROM `users` WHERE email = '$email'";

    if (empty($_POST["fname"])) {
      $fnameErr = "First Name is required";
      $v = FALSE;
    } else {
      $name = $_POST["fname"];
      if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $fnameErr = "Only letters and white space allowed";
        $v = FALSE;
      }
    }

    if (empty($_POST["lname"])) {
      $lnameErr = "Last Name is required";
      $v = FALSE;
    }

    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
      $v = FALSE;
    } else {
      $email = $_POST["email"];
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "The email address is incorrect";
        $v = FALSE;
      }
    }

    if (empty($_POST["number"])) {
      $numErr = "Phone Number is required";
      $v = FALSE;
    } else {
      $number = $_POST["number"];
      if (!preg_match('/^[0-9]{10}+$/', $number)) {
        $numErr = "Invalid Phone Number";
        $v = FALSE;
      }
    }

    if (empty($_POST["address"])) {
      $addErr = "Address is required";
      $v = FALSE;
    }

    if (empty($_POST["pass"])) {
      $pwErr = "Password is required";
      $v = FALSE;
    }

    if (empty($_POST["c_pass"])) {
      $cpwErr = "Confirm Password is required";
      $v = FALSE;
    }

    if ($v == TRUE) {
      if ($_POST["pass"] === $_POST["c_pass"]) {

        $re1 = mysqli_query($conn, $sql1);
        $result = mysqli_num_rows($re1);
        if ($result > 0) {
          $message = "Email Address is already Exist....";
          header("Location:signup.php?message=$message");
          exit();
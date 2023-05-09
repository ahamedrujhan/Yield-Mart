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

  if (isset($_GET['message'])) {
  ?>
    <div class="message">
      <?php
      echo $_GET['message'];
      ?>
    </div>
  <?php
  }
  ?>
  <?php
  include "./conn.php";
  $fnameErr = $lnameErr = $emailErr =  $numErr = $addErr = $pwErr = $cpwErr = "";

  ?>
  <?php
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

    // $sql = "INSERT INTO `users`(`f_name`, `l_name`, `gender`, `phone`, `email`, `address`, `role`, `password`, `created_on`,`status`) VALUES ('$fname','$lname','$gender','$number','$email','$address','$role','$password',now(),0)";
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
      $v == FALSE;
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
      $v = FALSE;
      if (!preg_match('/^[0-9]{10}+$/', $number)) {
        $v == FALSE;
        $numErr = "Invalid Phone Number";
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
    $v = TRUE;
    if ($v == TRUE) {
      if ($_POST["pass"] === $_POST["c_pass"]) {

        $re1 = mysqli_query($conn, $sql1);
        $result = mysqli_num_rows($re1);
        if ($result > 0) {
          $message = "Email Address is already Exist....";
          header("Location:signup.php?message=$message");
        } else {
          $re1 = mysqli_query($conn, $sql);
          if ($re1 == true) {
            header("Location:index.php");
          }
        }
      } else {
        $message = "Passwords not matched....";
        header("Location:signup.php?message=$message");
      }
    }
  }
  ?>
  <form id="container" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

    <h3 id="Heading">Sign Up</h3>
    <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //   //Empty checking....

    // }
    ?>
    <label>For:</label>
    <div class="row">
      <div class="icon"><i class="fa-solid fa-user fa-xl" style="color: #f7f7f7; position: relative;
        top: 20%;"></i></div>
      <select name="role" class="gender">
        <option value="Farmer">Farmer</option>
        <option value="Customer">Customer</option>
      </select>
    </div>

    <label>Email:</label><span class="error"><?php echo $emailErr; ?>
    </span>
    <div class="row">
      <div class="icon"><i class="fa-solid fa-envelope fa-xl" style="color: #f7f7f7; position: relative;
        top: 20%;"></i></div><input name="email" type="email" placeholder="Email" value="<?php echo $_POST["email"]; ?>" required>
    </div>
    <div class="row name"><span class="error"><?php echo $fnameErr; ?>
      </span>
      <input type="text" placeholder="First Name" name="fname" value="<?php echo $_POST["fname"]; ?> " required><span class="error"><?php echo $lnamelErr; ?>
      </span>
      <input type="text" placeholder="Last Name" name="lname" value="<?php echo $_POST["lname"]; ?> " required>
    </div>
    <label>Address:</label><span class="error"><?php echo $addErr; ?>
    </span>
    <div class="row">
      <div class="icon"><i class="fa-solid fa-location-dot fa-xl" style="color: #f7f7f7; position: relative;
        top: 20%;"></i></div><input type="text" placeholder="Address" name="address" value="<?php echo $_POST["address"]; ?>" minlength="10" required>
    </div>
    <label>Phone:</label><span class="error"><?php echo $numErr; ?>
    </span>
    <div class="row">
      <div class="icon"><i class="fa-solid fa-phone fa-xl" style="color: #f7f7f7; position: relative;
        top: 20%;"></i></div><input name="number" type="number" placeholder="Phone Number" value="<?php echo $_POST["number"]; ?>" required>
    </div>
    <label>Gender:</label>
    <div class="row">
      <div class="icon"><i class="fa-solid fa-user fa-xl" style="color: #f7f7f7; position: relative;
        top: 20%;"></i></div>
      <select name="gender" class="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
    </div>
    <label>Password:</label><span class="error"><?php echo $pwErr; ?>
    </span>
    <div class="row">

      <div class="icon"><i class="fa-solid fa-key fa-xl" style="color: #f7f7f7; position: relative;
        top: 20%;"></i></div><input type="password" placeholder="Password" name="pass" minlength="8" maxlength="12" required>
    </div>
    <label>Confirm Password:</label><span class="error"><?php echo $cpwErr; ?>
    </span>
    <div class="row">

      <div class="icon"><i class="fa-solid fa-key fa-xl" style="color: #f7f7f7; position: relative;
        top: 20%;"></i></div><input type="password" placeholder="Confirm Password" name="c_pass" minlength="8" maxlength="12" required>
    </div>


    <button type="submit" name="signup">Sign up</button>
    <span>
      <span>Already have Account <a href="./login.php"> Log In</a></span></span>
  </form>
  <!-- partial -->

</body>


</html>
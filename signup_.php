<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS links -->
    <link rel="stylesheet" href="./css/signup.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <title>Signup</title>
</head>
<body>
    <?php
    include "./conn.php";
    $fnameErr = $lnameErr = $emailErr =  $numErr = $addErr = $pwErr = $cpwErr = "";
    ?>
    <div class="main">
        <!-- Navigation bar -->
        <div class="nav">
            <a href=""><div>Home</div></a>
            <a href=""><div>About</div></a>
            <a href=""><div>Contact Us</div></a>
        </div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //Empty checking....
            if (empty($_POST["fname"])) {
                $fnameErr = "First Name is required";
            }
            if (empty($_POST["lname"])) {
                $lnameErr = "Last Name is required";
            }
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            }
            if (empty($_POST["number"])) {
                $numErr = "Phone Number is required";
            }
            if (empty($_POST["address"])) {
                $addErr = "Address is required";
            }
            if (empty($_POST["pass"])) {
                $pwErr = "Password is required";
            }
            if (empty($_POST["c_pass"])) {
                $cpwErr = "Confirm Password is required";
            }
        }
        ?>
        <div class="m_pic"></div>

        <!-- Green Box -->
        <div class="right">
            <div class="form-container">
                <form class="form-inner-container" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
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

                    <div class="field">
                        <label>First Name</label>
                        <span class="error">*<?php echo $fnameErr; ?></span>
                        <input type="text" name="fname" value="<?php echo $_POST['fname'] ?? ''; ?>">
                    </div>
                    <!-- Repeat this pattern for other form fields -->
                    <div class="field">
                        <label>Last Name</label>
                        <span class="error">*<?php echo $lnameErr; ?></span>
                        <input type="text" name="lname" value="<?php echo $_POST['lname'] ?? ''; ?>">
                    </div>
                    <!-- Additional form fields go here -->

                    <div>
                        <input class="signup" type="submit" value="Create Account">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

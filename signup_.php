<html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/signup.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
</head>

<body>
    <?php
    include "./conn.php";
    $fnameErr = $lnameErr = $emailErr =  $numErr = $addErr = $pwErr = $cpwErr = "";
    ?>
    <title>Signup</title>
    <div class="main">
        <!--Navigation bar-->
        <div class="nav">
            <a href="">
                <div>Home</div>
            </a>
            <a href="">
                <div>About</div>
            </a>
            <a href="">
                <div>Contact Us</div>
            </a>

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


        <!--Green Box-->
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

                    <div class=" field">
                        <label>First Name

                        </label>
                        <span class="error">*<?php echo $fnameErr; ?>
                        </span>
                        <input type="text" name="fname" value="<?php echo $_POST['fname'] ?? ''; ?>">
                    </div>
                    <div class="field">
                        <label>Last Name</label>
                        <span class="error">*<?php echo $lnameErr; ?>
                        </span>
                        <input type="text" name="lname" value="<?php echo $_POST['lname'] ?? ''; ?>">
                    </div>
                    <div class="field">
                        <label>Email</label>
                        <span class="error">*<?php echo $emailErr; ?>
                        </span>
                        <input type="email" name="email" value="<?php echo $_POST['email'] ?? ''; ?>">
                    </div>
                    <div class="field">
                        <label>Phone</label>
                        <span class="error">*<?php echo $numErr; ?>
                        </span>
                        <input type="text" name="number" pattern="[0-9]{9}" title="Enter 9 Digit Number" value="<?php echo $_POST['number'] ?? ''; ?>">
                    </div>
                    <div class="field">
                        <label>Role</label>
                        <select name="role">
                            <option value="Farmer">Farmer</option>
                            <option value="Customer">Customer</option>
                        </select>
                    </div>
                    <div class="field">
                        <label>Gender</label>
                        <select name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="field">
                        <label>Street 1</label>
                        <span class="error">*<?php echo $addErr; ?>
                        </span>
                        <input type="text" name="st1" value="<?php echo $_POST['st1'] ?? ''; ?>">
                    </div>
                    <div class="field">
                        <label>Street 2</label>
                        </span>
                        <input type="text" name="st2" value="<?php echo $_POST['st2'] ?? ''; ?>">
                    </div>
                    <div class="field">
                        <label>City</label>
                        <span class="error">*<?php echo $addErr; ?>
                        </span>
                        <input type="text" name="city" value="<?php echo $_POST['city'] ?? ''; ?>">
                    </div>
                    <div class="field">
                        <label>Password</label>
                        <span class="error">*<?php echo $pwErr; ?>
                        </span>
                        <input type="password" name="pass">

                    </div>
                    <div class="field">
                        <label>Confirm
                            <br>Password</label>
                        <span class="error">*<?php echo $cpwErr; ?>
                        </span>
                        <input type="password" name="c_pass">

                    </div>
                    <br>
                    <div>

                        <input class="signup" type="submit" value="Create Account">

                    </div>







                </form>
            </div>


        </div>

    </div>


</body>
<?php
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$num = $_POST["number"];
$gender = $_POST["gender"];
$role = $_POST["role"];
$st1 = $_POST["st1"];
$st2 = $_POST["st2"];
$city = $_POST["city"];
$pw = $_POST["pass"];

$sql = "INSERT INTO  users (f_name, l_name, email, phone, gender,lane_1,lane_2,city, role, password) VALUES ('$fname', '$lname', '$email', '$num', '$gender', '$st1','$st2','$city', '$role', '$pw')";
$sql1 = "SELECT email FROM user WHERE email='$email'";



if (!empty($fname) && !empty($lname) && !empty($email) && !empty($num) && !empty($gender) && !empty($address) && !empty($pw)) {
    $result1 = mysqli_query($conn, $sql1);

    $row = mysqli_fetch_assoc($result1);
    if ($row["email"] == $email) {
        header("location:./signup.php?message=Email address is already exists");
        exit();
    } else {
        $result = mysqli_query($conn, $sql);
        if ($result == TRUE) {
            echo "<script>alert('Account Created Successfully')</script>";
            header("location:./login.php");
            exit();
        }
    }
}




?>

</html>
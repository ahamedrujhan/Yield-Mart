<html>
<?php
session_start();
if ($_SESSION['role'] != "Manager") {
    $url = "./login.php?error=Can't Access!!!";
    header("Location: $url");
}
?>

<head>
    <link rel="stylesheet" href="./css/orders.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Profile</title>
</head>

<body>
    <div class="main">
        <div class="navbar">
            <p>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <img src="./stock_img/green-apple-removebg-preview.png">
            <button>
                Logout </button>&nbsp;&nbsp;

        </div>
        <div class="heading">
            <h3>Profile</h3>
        </div>
        <div class="container">
            <div class="profile_pic">
                <img src="./stock_img/green-apple-removebg-preview.png">

            </div>
            <div class="details">
                <!-- Full Name -->
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="John Smith" required minlength="3" maxlength="100" />
                </div>
                <!-- Phone Number -->
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" placeholder="UK 11 Digits" required pattern="[0-9]{11}" title="Please enter a valid UK phone number (11 digits)." />
                </div>
                <!-- Email Address -->
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="email@address.com" required pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$" />
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password1">Password</label>
                    <input type="password" id="password1" placeholder="Create Password (Min. 8 characters)" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$" title="Please include at least 1 uppercase character, 1 lowercase character, and 1 number." />
                </div>
                <!-- Confirm Password -->
                <div class="form-group">
                    <label for="password2">Confirm Password</label>
                    <input type="password" id="password2" placeholder="Confirm Password" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$" name="password" />
                </div>
                <button type="submit">Register</button>
                </form>

            </div>
        </div>
    </div>
</body>

</html>
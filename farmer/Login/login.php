<html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat" </head>

<body>
    <title>LOGIN</title>
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
        <!--Green Box-->
        <div class="right">
            <!--Profile pic-->
            <div class="pic"></div>

            <?php if (isset($_GET['error'])) {
                $error = $_GET['error'];
            } ?>

            <form action="../auth.php" method="POST">
                <?php if (isset($_GET['error'])) { ?>
                    <div class="error">
                        <?php echo $error; ?>




                    </div>
                <?php } ?>
                <!--Username-->
                <div class="username">
                    <!--Username text-->

                    <div class="E1">
                        <label> &nbsp Username</label>

                    </div>
                    <!--Usernield-->
                    <div class="field">
                        <input type="text" name="username" maxlength="25" required>


                    </div>
                </div>
                <!--Password-->
                <div class="password">
                    <!--Password text-->
                    <div class="P1">
                        <label> &nbsp Password</label>
                    </div>
                    <!--Password field-->
                    <div class="field">
                        <input type="password" name="password" maxlength="25" required>
                    </div>
                </div>

                <!--Sign in Button-->

                <input type="submit" class="sign_in text" value="Sign in">


            </form>
            <!--forgot password-->
            <a href="">

                <div class="forget">Forget Password</div>
            </a>
            <!--creat account-->

            <a href="">
                <div class="create">Creat New Account</div>
            </a>
        </div>
        <!--Main pic-->
        <div class="m_pic">
        </div>
    </div>
    </div>
</body>

</html>
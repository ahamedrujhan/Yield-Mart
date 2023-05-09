<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Yield Mart Login</title>
  <link rel="stylesheet" href="./css/login.css">

</head>

<body>


  <body>

    <div class="container">
      <?php if (isset($_GET['error'])) { ?>
        <div class="error">
          <?php echo $_GET['error']; ?>
        </div>
      <?php } ?>
      <form method="post" action="./auth.php">
        <h1>LOGIN</h1>
        <div class="login__field">
          <fieldset>
            <legend>EMAIL</legend>
            <input type="text" class="login__input" placeholder="EMAIL" name="username">
        </div>
        <br>
        <div class="login__field">
          <fieldset>
            <legend>PASSWORD</legend>
            <input type="password" placeholder="Password" name="password" pattern="[0-9a-z-A-Z]{4,8}" maxlength="25">
        </div>
        <br>
        <button class="submit" type="submit">LOGIN</button>
        <br><br>
        <!-- <a href="forgot.php">Forgot Password</a> -->


        <br>
        <p>
          <a href="signup.php">Don't have an account? Signup now.</a>
      </form>
  </body>

</body>

</html>
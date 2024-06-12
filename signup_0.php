<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <style>
        .col-md-8 {
            background: rgba(159, 157, 157, 0.5);
            position: relative;
            left: 200px;
        }

        body {
            background-image: url('https://img.freepik.com/premium-photo/border-fresh-vegetables-wooden-background-with-copy-space_116547-609.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

        .h2 {
            color: black;
            text-align: center;
        }

        .m-2 {
            color: white;
        }

        a {
            color: black;
        }
    </style>
</head>

<body>
    <form method="post">
        <div class="col-md-8 col-lg-4 border rounded mx-auto mt-5 p-4 shadow">
            <div class="h2">Signup</div>

            <div class="input-group mt-3">
                <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                <input name="firstname" type="text" class="form-control p-3" placeholder="First name">
            </div>
            <small class="js-error js-error-firstname text-danger"></small>

            <div class="input-group mt-3">
                <span class="input-group-text"><i class="bi bi-person-square"></i></span>
                <input name="lastname" type="text" class="form-control p-3" placeholder="Last name">
            </div>
            <small class="js-error js-error-lastname text-danger"></small>

            <div class="input-group mt-3">
                <span class="input-group-text"><i class="bi bi-house-door-fill"></i></span>
                <input name="address" type="text" class="form-control p-3" placeholder="Address">
            </div>
            <small class="js-error js-error-address text-danger"></small>

            <div class="input-group mt-3">
                <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                <input name="phone" type="text" class="form-control p-3" placeholder="Phone Number">
            </div>
            <small class="js-error js-error-phone text-danger"></small>

            <div class="input-group mt-3">
                <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                <select class="form-select" name="gender">
                    <option selected value="">Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <small class="js-error js-error-gender text-danger"></small>

            <div class="input-group mt-3">
                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                <input name="email" type="text" class="form-control p-3" placeholder="Email">
            </div>
            <small class="js-error js-error-email text-danger"></small>

            <div class="input-group mt-3">
                <span class="input-group-text"><i class="bi bi-key"></i></span>
                <input name="password" type="password" class="form-control p-3" placeholder="Password">
            </div>
            <small class="js-error js-error-password text-danger"></small>

            <div class="input-group mt-3">
                <span class="input-group-text"><i class="bi bi-key-fill"></i></span>
                <input name="retype_password" type="password" class="form-control p-3" placeholder="Retype Password">
            </div>

            <div class="progress mt-3 d-none">
                <div class="progress-bar" role="progressbar" style="width: 50%;">Working... 25%</div>
            </div>

            <button class="mt-3 btn btn-primary col-12">Signup</button>
            <div class="m-2">
                Already have an account? <a href="index.php">login here</a>
            </div>
        </div>
    </form>
    <!-- Your script goes here -->
</body>

</html>

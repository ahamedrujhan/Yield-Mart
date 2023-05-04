<?php
session_start();
if ($_SESSION['role'] != "Farmer") {
    $url = "./login.php?error=Can't Access!!!";
    header("Location: $url");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Stocks </title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./js/popup.js"></script>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="mains">
        <?php include 'header.php'; ?>



        <section>
            <div>
                <!-- Here Main content -->
                <h4>Popup With blur Effect</h4>
                <p>This is simple section with Image BackGround To Show the Popup click on the Show button. </p>
                <!-- on click to show -->
                <button class="show-pop">Show</button>
            </div>

        </section>
        <!-- Bluer -->
        <div class="overly">
            <div class="pop-up">
                <!-- Popup ui -->
                <h4 class="title">simple Popup</h4>
                <br>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nesciunt,
                    sed perspiciatis facere asperiores voluptates, ipsam nisi molestiae
                    cupiditate non cumque maxime beatae excepturi corporis ut tempora provident repudiandae totam?</p>
                <!-- close button -->
                <button class="close-pop">close me</button>
            </div>

        </div>



</body>

</html>
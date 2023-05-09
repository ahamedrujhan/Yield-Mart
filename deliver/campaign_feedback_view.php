<?php
$_SESSION['selected_campid'] = $_GET['camp'];
$metaTitle = 'Donor Feedback';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $metaTitle; ?>
    </title>

    <!-- Favicons -->
    <link href="../../../public/img/favicon.jpg" rel="icon">

    <!-- CSS Files -->
    <link href="../../../public/css/donor/dashboard.css" rel="stylesheet">

    <!-- Font Files -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

    <!-- js Files -->
    <script src="../../../public/js/drop-down.js"></script>



</head>
<style>
    .popup {
    position: fixed;
    top: 0%;
    left: 0%;
    background-color: rgb(0 0 0 / 80%);
    border: 1px solid #000;
    z-index: 9999;
    height: 100%;
    width: 100%;
    display: none;
}

.popup div {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 20px;
    background-color: #fff;
    border: 1px solid #000;
    z-index: 9999;
    height: 200px;
    width: 750px;
    border: 2px solid black;
    border-radius: 8px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;

}

.popup div p {
    font-size: 24px;
    font-family: Poppins;
    font-weight: bold;
    margin-top: -68px;
}


.popup div div {
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    margin-top: 5%;
    width: 84%;
    height: 14%;
    flex-direction: row;
    border: none;
    background: none;
}

.popup div div button {
    width: 42%;
    height: 45px;
    border: none;
    border-radius: 8px;
    font-size: 18px;
    font-family: Poppins;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: space-around;
}

.popup div div .yes-button {
    background-color: #640e0b;
    color: white;
}

.popup div div .no-button {
    background-color: #e8e8e8;
    color: #630e0b;
}

.popup div .close {
    position: absolute;
    width: 21px;
    right: 5px;
    top: 5px;
}

.popup div .close:hover {
    cursor: pointer;
}
    </style>
<body>
    <!-- header -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/app/views/donor/layout/header.php'); ?>


    <!-- Side bar -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/app/views/donor/layout/feedback_active.php'); ?>


    <div class="rate-campaign-box">
        <?php echo '<h2 class="rate-camp">' .
            $_SESSION['selected_campname'] .
            '</h2>'; ?>
        <div class="viewrating">
            <p class="p11">Your Rating</p>
            <div class="view-stars">
                <?php
                $rating = $_SESSION['selected_camprating']['Rating'];
                for ($i = 0; $i < $rating; $i++) {
                    echo '<img src="../../../public/img/donordashboard/yellow_star.png" alt="star">';
                }
                for ($i = 0; $i < 5 - $rating; $i++) {
                    echo '<img src="../../../public/img/donordashboard/grey_star.png" alt="star">';
                }
                ?>

            </div>
            <p id="exper">Your Experience : </p>
            <?php echo '<div class="feedback-read"><p>' . $_SESSION['selected_camprating']['Feedback'] ?>
            </p>
        </div>

        <div class="rate_btn_view">
            <?php echo '<a href="editrating?camp=' .
                $_SESSION['selected_campid'] .
                '">Edit Rating</a>
                <a href="remove_rating" onclick="showPopup(event)">Delete Rating</a>'; ?>
        </div>

    </div>



    </div>


    </div>

    <div class="popup">
        <div>
            <p>Are you sure you want to delete this feedback?</p>
            <div><button class="yes-button">Yes</button>
                <button class="no-button">No</button>
            </div>


            <img class="close" onclick="hidealert()" src="../../../public/img/donordashboard/close.png">

        </div>
    </div>

    <script>
        function showPopup(event) {
            console.log(event.target.href);

            event.preventDefault(); // prevent following the link
            var popup = document.querySelector(".popup");
            popup.style.display = "block"; // show the pop-up box
            var yesButton = document.querySelector(".yes-button");
            yesButton.onclick = function () {
                window.location.href = event.target.href; // follow the link
            };
            var noButton = document.querySelector(".no-button");
            noButton.onclick = function () {
                popup.style.display = "none"; // hide the pop-up box
            };
        }

        function hidealert() {
            var popup = document.querySelector(".popup");
            popup.style.display = "none";
        }
    </script>


</body>

</html>
<?php
session_start();

@include 'conn.php';
if ($_SESSION['role'] != "Customer") {
    $url = "./login.php?error=Can't Access!!!";
    header("Location: $url");
}
$id = $_SESSION['id'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders cart</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Roboto');

    * {
        margin: 0;
        padding: 0;
        outline: 0;
    }

    .filter {
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        right: 0;
        z-index: 1;


    }

    h2 {

        text-align: center;
        font-family: verdana;
        font-size: 30px;
    }

    table {

        position: relative;

        left: 1%;
        top: 30%;
        width: 98%;
        border-collapse: collapse;
        border-spacing: 0;
        box-shadow: 0 2px 15px rgba(64, 64, 64, .7);
        border-radius: 12px 12px 0 0;




    }

    td,
    th {
        padding: 15px 20px;
        text-align: center;
        height: 70px;
        font-size: 15px;

    }

    th {
        background-color: #284b38;
        color: #fafafa;
        font-family: 'Open Sans', Sans-serif;
        font-weight: 500;
        text-transform: uppercase;

        font-size: 20px;
    }

    tr {
        width: 200%;
        background-color: #fafafa;
        font-family: 'Montserrat', sans-serif;
    }

    tr:nth-child(even) {
        background-color: #eeeeee;
    }

    .crow {
        background-color: #6c8075;
        font-family: verdana;
        color: white;
        text-align: center;
        position: relative;
        top: 40px;
        font-size: 25px;
    }

    .orow {
        background-color: #6c8075;
        font-family: verdana;
        color: white;
        text-align: center;
        position: relative;
        top: 400px;
        font-size: 25px;
    }

    .table-container {
        position: relative;
        height: 400px;
        /* set a fixed height for the container */
        /* enable vertical scrolling */
    }

    .arr {

        background: black;
        height: 35px;
        width: 35px;
        border-radius: 50%;
        margin: 15px;
        position: relative;
        left: 100px;
        top: -9px;
    }

    .arr div {
        position: absolute;
        height: 19px;
        width: 19px;
        border-top: 5px solid white;
        border-left: 5px solid white;
        transform: rotate(45deg);
        left: 6px;
        top: 8px;
    }

    .right {
        transform: rotate(-90deg);
    }
</style>

<body>

    <?php
    include 'wnavigation.php';

    ?>

    <div class="container">
        <h2>
            Orders

        </h2>

        <div class="crow">
            Online Payment Orders
        </div>

        <a href="cashorder.php">
            <div class="arr right">
                <div></div>
            </div>
        </a>
        <div class="table-container">


            <table class="online">

                <thead>

                    <tr>

                        <th class="text-center" scope="col">#</th>

                        <th class="text-center" scope="col">Name</th>
                        <th class="text-center" scope="col">Phone Number </th>

                        <th class="text-center" scope="col">Address</th>



                        <th class="text-center" scope="col">Products & Quantity </th>

                        <th class="text-center" scope="col">Payment Method</th>


                        <th class="text-center" scope="col">Total Price</th>
                        <th class="text-center" scope="col">Status</th>

                    </tr>

                </thead>



                <?php
                $get_data = "SELECT * FROM `orders` WHERE user_id='$id' AND method='credit card'";
                $result = mysqli_query($con, $get_data);
                $i = 0;
                if ($result) {
                    $resultCheck = mysqli_num_rows($result);
                    if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $sl = ++$i;
                            $name = $row['name'];

                            $method = $row['method'];
                            $phone = $row['number'];
                            $address = $row['address'];
                            $products = $row['total_products'];
                            $total = $row['total_price'];
                            if ($row['status'] == 0) {
                                $status = "Placed";
                            }
                            if ($row['status'] == 3) {
                                $status = "Finished";
                            }
                            if ($row['status'] == 4) {
                                $status = "Failed";
                            }

                            echo "

           <tr>
           <td class='text-center'>$sl</td>
           <td class='text-left'>$name   </td>
         
           <td class='text-left'>$phone</td>
           <td class='text-left'>$address</td>
           <td class='text-center'>$method</td>
           <td class='text-left'>$products   </td>
           <td class='text-left'>$total   </td>
           <td class='text-left'>$status   </td>

           </tr>


               ";
                        }
                    }
                } else {
                    echo "Error: " . mysqli_error($con);
                }

                ?>
            </table>
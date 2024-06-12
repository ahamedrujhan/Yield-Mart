<?php
include 'conn.php';
session_start();
$id = $_SESSION["invoice_id"];

//$id-$_GET[]  

$get_data = "SELECT * FROM `orders` WHERE  `order_id`=$id";
$result = mysqli_query($conn, $get_data);
$i = 0;
if ($result) {
  $resultCheck = mysqli_num_rows($result);
  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

?>


      <!DOCTYPE html>
      <html>

      <head>
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <title>Yield Mart</title>
        <style>
          body {
            font-family: Arial, sans-serif;
          }

          #invoice {
            margin: 0 auto;
            max-width: 800px;
            padding: 20px;
            border: 1px solid #ccc;
            position: relative;
            top: 200px;
          }

          #header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
          }

          #header div {
            text-align: right;
          }

          h1 {
            font-size: 36px;
            margin: 0;
          }

          #details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
          }

          #details div {
            text-align: right;
          }

          table {
            width: 100%;
            border-collapse: collapse;
          }

          th {
            background-color: #f2f2f2;
          }

          th,
          td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
          }

          #footer {
            margin-top: 20px;
            text-align: right;
          }


          button {
            background-color: rgb(87, 173, 219);
            position: relative;
            left: 1000px;
            top: -150px;
            font-size: 20px;
            color: white;
            width: 60px;
            border-radius: 8px;
          }
        </style>
      </head>

      <body>
        <!-- back button -->
        <a href="./orders.php"><i class="fa-solid fa-circle-arrow-left fa-2xl" style="color: #a6b695; left:15%; position:absolute;top:17%;width:25px;height:25px;" onMouseOver="this.style.color='#669c35'" onMouseOut="this.style.color='#a6b695'"></i></a>



        <?php
        include 'dnavigation.php';

        ?>


        <div id="print_setion">
          <div id="invoice">
            <div id="header">
              <div>
                <h1>Invoice</h1>
              </div>
              <div>
                <p>Order ID: <?php echo $row['order_id'] ?></p>

              </div>
            </div>
            <div id="details">
              <div>
                <p>Customer Name: <?php echo $row['name']; ?></p>
                <p>Customer Address: <?php echo $row['address']; ?></p>
              </div>
              <div>
                <p>Date:<?php echo $row['date']; ?> </p>
              </div>
            </div>
            <table>
              <thead>
                <tr>
                  <th>Product & Quantity</th>
                  <th>Total Price</th>
                </tr>
              </thead>


              <tbody>
                <tr>
                  <td><?php echo $row['total_products']; ?></td>


                  <td>Rs.<?php echo $row['total_price']; ?></td>

                </tr>

              </tbody>
            </table>

            <div id="footer">
              <p>Thank you for your business!</p>
            </div>
          </div>


        </div>
  <?php      }
  }
}
  ?>
  <button onclick="printDivSection('print_setion')" value="Print">Print</button>


  <script>
    function printDivSection(setion_id) {
      var Contents_Section = document.getElementById(setion_id).innerHTML;
      var originalContents = document.body.innerHTML;

      document.body.innerHTML = Contents_Section;

      window.print();

      document.body.innerHTML = originalContents;
    }
  </script>





      </body>

      </html>
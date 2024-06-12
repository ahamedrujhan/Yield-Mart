<!-- Farmers Dashboard -->

<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="./orders.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./sidebar.css" rel="stylesheet">
</head>


<body>
  <?php
  include 'nheader.php'

  ?>

  <div class="sidebar">
    <div class="logo-details">

      <div class="logo_name"> Yield Mart. </div>
      <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">

      <li>
        <a href="mdashboard.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li><br>
      <li>
        <a href="products.php">
          <i class="bx bx-grid-horizontal"></i>
          <span class="links_name">Stock Management</span>
        </a>
        <span class="tooltip">Stock Management</span>
      </li><br>
      <li>
        <a href="technician.php">
          <i class='bx bx-user '></i>
          <span class="links_name">View Available Stocks</span>
        </a>
        <span class="tooltip">View Available Stocks</span>
      </li><br>
      <li>
        <a href="mjob.php">
          <i class='bx bxs-cart-alt'></i>
          <span class="links_name">Requests</span>
        </a>
        <span class="tooltip">Requests</span>
      </li><br>
      <li>
        <a href="email.php">
          <i class='bx bx-envelope'></i>
          <span class="links_name">Orders</span>
        </a>
        <span class="tooltip">Orders</span>
      </li>
      <br>
      <li>
        <a href="logout.php">
          <i class="bx bx-arrow-from-left"></i>
          <span class="links_name">Log Out</span>
        </a>
        <span class="tooltip">Logout</span>
      </li>

  </div>

  </ul>
  </div>
  <div class="container1">
  </div>

  <script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", () => {
      sidebar.classList.toggle("open");
      menuBtnChange(); //calling the function(optional)
    });

    searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
      sidebar.classList.toggle("open");
      menuBtnChange(); //calling the function(optional)
    });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
      if (sidebar.classList.contains("open")) {
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
      } else {
        closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
      }
    }
  </script>

  </div>
</body>

</html>
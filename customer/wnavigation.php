<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->

  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }

  .sidebar {
    position: fixed;
    left: 0;
    top: 0;
    height: 100%;
    width: 78px;
    background: #2d4a3e;
    padding: 6px 14px;
    z-index: 99;
    transition: all 0.5s ease;
  }

  .sidebar.open {
    width: 250px;
  }

  .sidebar .logo-details {
    height: 60px;
    display: flex;
    align-items: center;
    position: relative;
  }

  .sidebar .logo-details .icon {
    opacity: 0;
    transition: all 0.5s ease;
  }

  .sidebar .logo-details .logo_name {
    color: #fff;
    font-size: 15px;
    font-weight: 600;
    opacity: 0;
    transition: all 0.5s ease;
  }

  .sidebar.open .logo-details .icon,
  .sidebar.open .logo-details .logo_name {
    opacity: 1;
  }

  .sidebar .logo-details #btn {
    position: absolute;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    font-size: 22px;
    transition: all 0.4s ease;
    font-size: 23px;
    text-align: center;
    cursor: pointer;
    transition: all 0.5s ease;
  }

  .sidebar.open .logo-details #btn {
    text-align: right;
  }

  .sidebar i {
    color: #fff;
    height: 60px;
    min-width: 50px;
    font-size: 28px;
    text-align: center;
    line-height: 60px;
  }

  .sidebar .nav-list {
    margin-top: 20px;
    height: 100%;
  }

  .sidebar li {
    position: relative;
    margin: 8px 0;
    list-style: none;
  }

  .sidebar li .tooltip {
    position: absolute;
    top: -20px;
    left: calc(100% + 15px);
    z-index: 3;
    background: #fff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
    padding: 6px 12px;
    border-radius: 4px;
    font-size: 15px;
    font-weight: 400;
    opacity: 0;
    white-space: nowrap;
    pointer-events: none;
    transition: 0s;
  }

  .sidebar li:hover .tooltip {
    opacity: 1;
    pointer-events: auto;
    transition: all 0.4s ease;
    top: 50%;
    transform: translateY(-50%);
  }

  .sidebar.open li .tooltip {
    display: none;
  }

  .sidebar input {
    font-size: 15px;
    color: #FFF;
    font-weight: 400;
    outline: none;
    height: 50px;
    width: 100%;
    width: 50px;
    border: none;
    border-radius: 12px;
    transition: all 0.5s ease;
    background: #1d1b31;
  }

  .sidebar.open input {
    padding: 0 20px 0 50px;
    width: 100%;
  }

  .sidebar .bx-search {
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    font-size: 22px;
    background: #1d1b31;
    color: #FFF;
  }

  .sidebar.open .bx-search:hover {
    background: #1d1b31;
    color: #FFF;
  }

  .sidebar .bx-search:hover {
    background: #FFF;
    color: #11101d;
  }

  .sidebar li a {
    display: flex;
    height: 100%;
    width: 100%;
    border-radius: 12px;
    align-items: center;
    text-decoration: none;
    transition: all 0.4s ease;
    background: #11101D;
  }

  .sidebar li a:hover {
    background: #FFF;
  }

  .sidebar li a .links_name {
    color: #fff;
    font-size: 15px;
    font-weight: 400;
    white-space: nowrap;
    opacity: 0;
    pointer-events: none;
    transition: 0.4s;
  }

  .sidebar.open li a .links_name {
    opacity: 1;
    pointer-events: auto;
  }

  .sidebar li a:hover .links_name,
  .sidebar li a:hover i {
    transition: all 0.5s ease;
    color: #11101D;
  }

  .sidebar li i {
    height: 50px;
    line-height: 50px;
    font-size: 18px;
    border-radius: 12px;
  }

  .sidebar li.profile {
    position: fixed;
    height: 60px;
    width: 68px;
    left: 0;
    bottom: -8px;
    padding: 10px 14px;
    background: #1d1b31;
    transition: all 0.5s ease;
    overflow: hidden;
  }

  .sidebar.open li.profile {
    width: 250px;
  }

  .sidebar li .profile-details {
    display: flex;
    align-items: center;
    flex-wrap: nowrap;
  }

  .sidebar li img {
    height: 45px;
    width: 45px;
    object-fit: cover;
    border-radius: 6px;
    margin-right: 10px;
  }

  .sidebar li.profile .name,
  .sidebar li.profile .job {
    font-size: 15px;
    font-weight: 400;
    color: #fff;
    white-space: nowrap;
  }

  .sidebar li.profile .job {
    font-size: 12px;
  }

  .sidebar .profile #log_out {
    position: absolute;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    background: #1d1b31;
    width: 100%;
    height: 60px;
    line-height: 60px;
    border-radius: 0px;
    transition: all 0.5s ease;
  }

  .sidebar.open .profile #log_out {
    width: 50px;
    background: none;
  }

  .home-section {
    position: relative;
    background: #E4E9F7;
    min-height: 100vh;
    top: 0;
    left: 78px;
    width: calc(100% - 78px);
    transition: all 0.5s ease;
    z-index: 2;
  }

  .sidebar.open~.home-section {
    left: 250px;
    width: calc(100% - 250px);
  }

  @media (max-width: 420px) {
    .sidebar li .tooltip {
      display: none;
    }
  }
</style>

<body>
  <?php
  include 'header.php';

  ?>
  <div class="sidebar">
    <div class="logo-details">

      <div class="logo_name"> Yield Mart </div>
      <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">

      <li>
        <a href="../index.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Home</span>
        </a>
        <span class="tooltip">Home</span>
      </li><br>
      <li>
        <a href="products.php">
          <i class="bx bx-grid-horizontal"></i>
          <span class="links_name">Products</span>
        </a>
        <span class="tooltip">Products</span>
      </li><br>
      <li>
        <a href="profile.php">
          <i class='bx bx-user '></i>
          <span class="links_name">Profile</span>
        </a>
        <span class="tooltip">Profile</span>
      </li><br>
      <li>
        <a href="cart.php">
          <i class='bx bxs-cart-alt'></i>
          <span class="links_name">Cart</span>
        </a>
        <span class="tooltip">Cart</span>
      </li><br>
      <li>
        <a href="cashorder.php">
          <i class='bx bxs-checkbox'></i>
          <span class="links_name">Orders</span>
        </a>
        <span class="tooltip">Orders</span>
      </li><br>
      <li>
        <a href="email.php">
          <i class='bx bx-envelope'></i>
          <span class="links_name">Notifications</span>
        </a>
        <span class="tooltip">Notifications</span>
      </li>
      <br>
      <li>
        <a href="../logout.php">
          <i class="bx bx-arrow-from-left"></i>
          <span class="links_name">Log Out</span>
        </a>
        <span class="tooltip">Logout</span>
      </li>

  </div>

  </ul>
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
</body>

</html>
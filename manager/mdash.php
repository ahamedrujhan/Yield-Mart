<html>
<?php
session_start();
?>
<?php
if ($_SESSION['role'] != "Manager") {
    $url = "../login.php?error=Can't Access!!!";
    header("Location: $url");
}
?>

<head>
    <link rel="stylesheet" href="./css/orders.css">
    <link href="./css/sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<title>Manager Dashboard</title>

<body>
    <?php
    include 'nheader.php'

    ?>

    <div class="sidebar">
        <div class="logo-details">

            <div class="logo_name"> Yield Mart. </div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list" style="
    height: 50px;">

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
        <br>
        <div class="heading">
            <h3>Manager Dashboard</h3>
        </div>
        <br>
        <div class="m-flex">
            <div class="f-container">
                <h3>Farmers</h3>
                <button class="c-b" onclick="window.location.href='./addStocks.php';">Stock Management</button>
                <button class="c-b" onclick="window.location.href='./stocks.php';">Available Stocks</button>
                <button class="c-b" onclick="window.location.href='./requests.php';">Requests</button>
                <button class="c-b" onclick="window.location.href='./f-orders.php';">Orders</button>
            </div>
            <div class="s-container">
                <h3>Wholeseller</h3>
                <button class="c-b" onclick="window.location.href='./addProducts.php';">Product Management</button>
                <button class="c-b" onclick="window.location.href='./products.php';">Available Products</button>
                <button class="c-b" onclick="window.location.href='#';">Warehouse</button>
                <button class="c-b" onclick="window.location.href='./s-orders.php';">Orders</button>
            </div>
        </div>
        <br><br>
        <footer>
            <div class="container">
                <p>Yield Mart ©2023</p>
            </div>
        </footer>
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
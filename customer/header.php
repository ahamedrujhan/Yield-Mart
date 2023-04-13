<?php
include 'config.php';
$select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
$row_count = mysqli_num_rows($select_rows);

?>


<head>
    <link rel="stylesheet" href="icon.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<style>
    /* fonts*/
    @import url('https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:wght@300;400;700&family=Poppins:wght@100;200;300;400;500;600;700&family=Ubuntu:wght@300;400;500;700&display=swap');

    /* icons */
    @import url('./icon.css');





    nav {
        position: absolute;
        top: 2.4rem;
        left: 50%;
        -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        transform: translateX(-50%);
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        height: 3.6rem;
        width: 1300px;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        background: #fff;
        border-bottom: 1.5px solid #ddd;
        border-radius: 0.1rem;
        -webkit-transition: all 0.4s ease;
        -o-transition: all 0.4s ease;
        transition: all 0.4s ease;
        z-index: 999;
    }

    nav.active {
        position: fixed;
        top: 0;
        height: 4rem;
        width: 100%;
        border-radius: 0;
    }

    nav.active .search-box {
        width: 24rem;
    }

    nav .logo {
        margin-left: 3rem;
    }

    nav.active .logo {
        margin-left: 4rem;
    }

    nav .logo a {
        color: #267226;
        font-size: 2rem;
        font-weight: bold;
        text-decoration: none;
    }

    nav .nav-items {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        list-style: none;
    }

    .nav-items li {
        margin-right: 2rem;
    }

    .nav-items li a {
        color: #2e2e3f;
        font-size: 1.2rem;
        font-weight: 500;
        text-decoration: none;
        -webkit-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }

    .nav-items li a:hover {
        color: orangered;
    }

    .search-box {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        height: 2.2rem;
        width: 18rem;
        -webkit-transition: all 0.4s ease;
        -o-transition: all 0.4s ease;
        transition: all 0.4s ease;
    }

    nav .icon-links {
        margin-right: 2.8rem;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .icon-links div {
        position: relative;
        margin-right: 1.6rem;

    }

    .icon-links div span {
        color: #2e2e3f;
        cursor: pointer;
        text-decoration: none;
        font-size: 1.2rem;
    }

    .icon-links #search-btn {
        display: none;
    }

    .icon-links div #item-counter {
        position: absolute;
        top: 0;
        left: 0;
        -webkit-transform: translate(0.9rem, -0.8rem);
        -ms-transform: translate(0.9rem, -0.8rem);
        transform: translate(0.9rem, -0.8rem);
        display: none;
        height: 1.3rem;
        width: 1.3rem;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        color: #fff;
        font-size: 0.8rem;
        background: red;
        border-radius: 50%;
    }

    .icon-links div #item-counter.active-item-counter {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }

    #toggle-bar {
        position: relative;
        height: 1.6rem;
        width: 1.4rem;
        display: none;
    }

    #toggle-bar .toggler {
        position: absolute;
        content: '';
        height: 3px;
        width: 100%;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        background: #2e2e3f;
        border-radius: 0.2rem;
        -webkit-transition: all 0.2s ease;
        -o-transition: all 0.2s ease;
        transition: all 0.2s ease;
    }

    #toggle-bar .toggler::before {
        position: absolute;
        content: '';
        height: 3px;
        width: 100%;
        top: -8px;
        left: 0;
        background: #2e2e3f;
        border-radius: 0.2rem;
        -webkit-transition: all 0.2s ease;
        -o-transition: all 0.2s ease;
        transition: all 0.2s ease;
    }

    #toggle-bar .toggler::after {
        position: absolute;
        content: '';
        height: 3px;
        width: 100%;
        top: 8px;
        left: 0;
        background: #2e2e3f;
        border-radius: 0.2rem;
        -webkit-transition: all 0.2s ease;
        -o-transition: all 0.2s ease;
        transition: all 0.2s ease;
    }

    #toggle-bar.active-toggler .toggler {
        background: transparent;
    }

    #toggle-bar.active-toggler .toggler::before {
        top: 0;
        -webkit-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    #toggle-bar.active-toggler .toggler::after {
        top: 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }
</style>


<img src="fruits.jpg" alt="Smiley face" width="50%" height="100"><img src="fruits.jpg" alt="Smiley face" width="50%" height="100" opacity="0.5">

<nav class="navbar">
    <div class="logo">
        <a href="#">Yeild Mart<span>.</span></a>
    </div>

    <ul class="nav-items">
        <li><a href="home.php">Home</a></li>
        <li><a href="home.php">About</a></li>

        <li><a href="products.php">Products</a></li>
        <li><a href="home.php">Contact</a></li>

    </ul>



    <div class="icon-links">



        <div id="login-or-signup"><a href="profile.php"><i class="fa fa-user" aria-hidden="true"></i>
        </div>


        <div id="customer-center"><a href="../logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
        </div>
        <div id="toggle-bar"><span class="toggler"></span></div>

    </div>
</nav>
</div>

</header>
<!DOCTYPE html>
<html lang="en">
<!--home page-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">

    <!-- owl carousel cnd link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Yeild Mart</title>
</head>

<body>
    <!-- home section start -->
    <div class="home">
        <!-- navbar -->
        <nav class="navbar">
            <div class="logo">
                <a href="#">Yeild Mart<span>.</span></a>
            </div>

            <ul class="nav-items">
                <li><a href="home.php">Home</a></li>
                <li><a href="about us.php">About</a></li>

                <li><a href="products.php">Products</a></li>
                <li><a href="contact us.php">Contact</a></li>
            </ul>



            <div class="icon-links">


               <div id="icon-shopping-cart"><a href="cart.php"><span class="icon-cart-arrow-down"></a><span id="item-counter">0</span></div>
                <div id="login-or-signup"> <a href="profile.php"><span class="icon-user"></a></div>

                <div id="customer-center"><span class="bi bi-box-arrow-right" onclick="window.location.href='../logout.php';">LogOut</span></div>
                <div id="toggle-bar"><span class="toggler"></span></div>

            </div>
        </nav>

        <!-- background image slider -->
        <div class="home-slider">
            <div class="bg-slider bg-slider-1 active-bg"></div>
            <div class="bg-slider bg-slider-2"></div>
            <div class="bg-slider bg-slider-3"></div>
        </div>

       

        <!-- hero text -->
        <div id="hero">
            <h1>Try fresh Fruits & Vegetables with great discount and lead a healthy life</h1>
            <p>Buy fresh Vegetables and fruits fast and quickly under one roof with low price and best quality.</p>
            <div class="button">

                <div class="btn">
                    <a href="products.php">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- home section end -->





    
          







    
              




    <!-- customer review section start -->
    <div class="customer-review">
        <div class="section-wrap">
            <div class="customer-section-title">
                <p>Customer review </p>
                <span class="icon-angle-double-right"></span>
            </div>

            <div class="review-items owl-carousel">
                <div class="review-content">
                    <div class="customer-info">
                        <div class="customer-image">
                            <img src="img/customers/customer_1.jpg" alt="review1">
                        </div>
                        <div class="customer-details">
                            <h2 class="name">Kasun Perera</h2>
                            <p class="country">Galle</p>
                        </div>
                    </div>

                    <div class="review-text">
                        <p class="review"><span class="icon-quote-left"></span>Great food quality with low cost.fresh vegetables and fruits undder one roof.good customer careGreat food quality with low cost.fresh vegetables and fruits undder one roof.good customer careFast delivery.Great food quality with low cost.
                            fresh vegetables and fruits undder one roof.good customer care<span class="icon-quote-right"></span></p>
                    </div>
                </div>

                <div class="review-content">
                    <div class="customer-info">
                        <div class="customer-image">
                            <img src="img/customers/customer_2.jpg" alt="review1">
                        </div>
                        <div class="customer-details">
                            <h2 class="name">Nimal Silva</h2>
                            <p class="country">Colombo</p>
                        </div>
                    </div>

                    <div class="review-text">
                        <p class="review"><span class="icon-quote-left"></span>Great food quality with low cost.
                            fresh vegetables and fruits undder one roof.good customer careGreat food quality with low cost.
                            fresh vegetables and fruits undder one roof.good customer careFast delivery.Great food quality with low cost.
                            fresh vegetables and fruits undder one roof.good customer care<span class="icon-quote-right"></span></p>
                    </div>
                </div>

               

                <div class="review-content">
                    <div class="customer-info">
                        <div class="customer-image">
                            <img src="img/customers/customer_4.jpg" alt="review1">
                        </div>

                        <div class="customer-details">
                            <h2 class="name">Amal Perera</h2>
                            <p class="country">Colombo</p>
                        </div>
                    </div>

                    <div class="review-text">
                        <p class="review"><span class="icon-quote-left"></span>Great food quality with low cost.
                            fresh vegetables and fruits undder one roof.
                            good customer careGreat food quality with low cost.
                            fresh vegetables and fruits undder one roof.good customer careFast delivery.Great food quality with low cost.
                            fresh vegetables and fruits undder one roof.good customer care<span class="icon-quote-right"></span></p>
                    </div>
                </div>


            </div>
        </div>
        <!-- customer review section end -->





       





        <!-- footer section start -->
        <div id="footer">
            <!-- subscribe area start -->
            <div class="subscribe-area">
                <div class="section-wrap">
                    <div class="subscribe-wrap">
                        <div class="subscribe-text">
                            <p>Subscribe to get all product updates first</p>
                        </div>
                        <form class="subscribe-input">
                            <input type="email" placeholder="Enter your email" required>
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- subscribe area end -->



            <!-- footer navigation area start -->
            <div class="section-footer">
                <div class="section-wrap">
                    <div class="footer-wrap">
                        <div class="company-details">
                            <h2>Yeild Mart</h2>

                            <div class="fdetails">
                                <p>Fresh & Fast vegetables and fruits under one roof.</p>
                            </div>

                            <div class="social-media-links">
                                <div class="f-links">
                                    <a href="product.php"><span class="icon-facebook-f"></span></a>
                                </div>

                                <div class="f-links">
                                    <a href="#"><span class="icon-instagram"></span></a>
                                </div>

                                <div class="f-links">
                                    <a href="#"><span class="icon-linkedin-in"></span></a>
                                </div>

                                <div class="f-links">
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </div>

                                <div class="f-links">
                                    <a href="#"><span class="icon-telegram-plane"></span></a>
                                </div>
                            </div>
                        </div>

                        <div class="footer-menu">
                            <h2>Menu</h2>
                            <div class="fmenu">
                                <p><a href="home.php">Home</a></p>
                                <p><a href="about us.php">About</a></p>

                                <p><a href="products.php">Products</a></p>
                                <p><a href="contact us.php">Contact</a></p>
                            </div>
                        </div>

                        <div class="top-products-links">
                            <h2>Top Products</h2>
                            <div class="flinks">
                                <p><a href="products.php">Fresh Fruits </a></p>
                                <p><a href="products.php">Fresh Vegetables</a></p>

                            </div>
                        </div>

                        <div class="useful-links">
                            <h2>Quick Links</h2>
                            <div class="Qlinks">
                                <p>User Account</p>
                                <p>Become An Affilate</a></p>
                                <p>New Offer</p>
                                <p>Recent Blogs</p>
                                <p>Help</p>
                            </div>
                        </div>

                        <div class="master-cards">
                            <h2>Easy Payment</h2>
                            <div class="payment-cards">


                                <div class="payment-link">
                                    <a href="#"><span class="icon-cc-mastercard"></span></a>
                                </div>


                                <div class="payment-link">
                                    <a href="#"><span class="icon-cc-visa"></span></a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer navigation area end -->



            <!-- copyright area start -->
            <footer>
                <p>Created By <a href="https://www.youtube.com/channel/UCr4TC9YxsDZwzwIxnZOVlBw" target="_blank">UCSC 18th
                        batch</a> |
                    &copy; 2022 All rights reserved</p>
            </footer>
            <!-- copyright area end -->
        </div>
        <!-- footer section end -->



        <!-- owl carousel cdn -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- external plugins script -->
        <script src="js/library.js"></script>

        <!-- custom script -->
        <script src="js/script.js"></script>

</body>

</html>
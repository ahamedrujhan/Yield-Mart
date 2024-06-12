<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">

    <!-- owl carousel cnd link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <li><a href="#top">Home</a></li>
                <li><a href="#about">About</a></li>
             
                <li><a href="stocks.php"> Stocks </a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>

           

            <div class="icon-links">
             
               
                <div id="icon-shopping-cart"><span class="icon-cart-arrow-down"><span id="item-counter">0</span></div>
                <div id="login-or-signup"><span class="icon-user"></div>
                    
                <div id="customer-center"><span class="bi bi-box-arrow-right">LogOut</span></div>
                <div id="toggle-bar"><span class="toggler"></span></div>

            </div>
        </nav>

        <!-- background image slider -->
        <div class="home-slider">
            <div class="bg-slider bg-slider-1 active-bg"></div>
            <div class="bg-slider bg-slider-2"></div>
            <div class="bg-slider bg-slider-3"></div>
        </div>

        <!-- slide button -->
        <div class="bg-slide-btn">
            <div class="bg-slide-left">
                <span class="icon-arrow-left"></span>
            </div>
            <div class="bg-slide-right">
                <span class="icon-arrow-right"></span>
            </div>
        </div>

        <!-- hero text -->
        <div id="hero">
            <h1>Try fresh Fruits & Vegetables with great discount and lead a healthy life</h1>
            <p>Buy fresh Vegetables and fruits fast and quickly under one roof with low price and best quality.</p>
            <div class="button">
                
                <div class="btn">
                    <a href="stockss.php">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- home section end -->





    <!-- top stockss section start -->
    <div class="top-stockss">
        <div class="section-wrap">
            <div class="sub-section-title">
                <p>Top stockss</p>
                <a href="stocks.php">See more <span class="icon-angle-double-right"></span></a>
            </div>

            <div class="stockss">
                <div class="fruit apple">
                    <div class="fruit-text">
                        <h2>Pomegranate</h2>
                        <span>260kg+</span>
                        <p>Sales</p>
                    </div>
                </div>
                <div class="fruit apple">
                    <div class="fruit-text">
                        <h2>Pomegranate</h2>
                        <span>260kg+</span>
                        <p>Sales</p>
                    </div>
                </div>
                <div class="fruit papaya">
                    <div class="fruit-text">
                        <h2>Papaya</h2>
                        <span>260kg+</span>
                        <p>Sales</p>
                    </div>
                </div>
                <div class="fruit carrot">
                    <div class="fruit-text">
                        <h2>Carrot</h2>
                        <span>260kg+</span>
                        <p>Sales</p>
                    </div>
                </div>
                <div class="fruit banana">
                    <div class="fruit-text">
                        <h2>Banana</h2>
                        <span>260kg+</span>
                        <p>Sales</p>
                    </div>
                </div>

                <div class="fruit mango">
                    <div class="fruit-text">
                        <h2>Mango</h2>
                        <span>180kg+</span>
                        <p>Sales</p>
                    </div>
                </div>

                <div class="fruit peach">
                    <div class="fruit-text">
                        <h2>Pine Apple</h2>
                        <span>220kg+</span>
                        <p>Sales</p>
                    </div>
                </div>

                <div class="fruit beatroot">
                    <div class="fruit-text">
                        <h2>Beatroot</h2>
                        <span>280kg+</span>
                        <p>Sales</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top stockss section end -->
    <div class="shopping-cart-area" id="stocks-cart-area">
        <div class="shopping-cart-wrap">
            <div class="stocks-cart-menu">
                <div class="cart-menu-items">
                    <h2 id="selected-stockss" class="active-cart-menu">Selected stockss</h2>
                    <h2 id="favorite-stockss">Favorite stockss</h2>
                </div>

                <div class="cart-close-btn">
                    <button>Close Cart</button>
                </div>
            </div>

            <div class="cart-contents-header">
                <div class="total-cart-items">
                    <p id="total-selected" class="active-stocks-counter">
                        <strong>Total Selected: </strong>
                        <span>No item found</span>
                    </p>
                    <p id="total-favorite">
                        <strong>Total Favorite: </strong>
                        <span>No item found</span>
                    </p>
                </div>

                <div class="buying-stocks-title">
                    <div class="total-buying-item">
                        <p>
                            <strong>Total Buying Items: </strong>
                            <span id="total-buying-item-counter">0</span>
                        </p>
                    </div>
                    <div class="buy-items-button">
                        <button id="buy-items">Buy Items</button>
                    </div>
                </div>
            </div>

            <div class="cart-contents-area shopping-cart-contents-area active-cart-content">
                <!-- selected stocks contents -->
            </div>
            <div class="cart-wishlist-area shopping-cart-contents-area">
                <!-- favorite stocks contents -->
            </div>

        </div>

    </div>
    <!-- selected and favorite stocks items area end -->



    <!-- confirmation message area start -->
    <div class="sell-confirmation-message">
        <div class="sell-message-wrap">
            <div class="sell-message-title">
                <h2>Sell item confirmation message</h2>
            </div>

            <div class="sell-message-button">
                <button id="sell-confirm-btn">Sell</button>
                <button id="sell-cancel-btn">Cancel</button>
            </div>
        </div>
    </div>

    <div class="popup-shadow"></div>
    <!-- confirmation message area end -->



    <!-- buying details/shoping cart area start -->
    <div class="buying-details-area">
        <div class="buying-details-wrap">
            <div class="shop-title">
                <h1>Shopping Cart</h1>
            </div>

            <div class="shopping-details-wrap">
                <div class="shopping-details-header">
                    <div class="shopping-details">
                        <div class="shop-detail stocks-sl">
                            <h2>SL No.</h2>
                        </div>
                        <div class="shop-detail stocks-name">
                            <h2>stocks Name</h2>
                        </div>
                        <div class="shop-detail regular-price">
                            <h2>Regular Price</h2>
                        </div>
                        <div class="shop-detail discount">
                            <h2>Discount</h2>
                        </div>
                        <div class="shop-detail present-price">
                            <h2>Present Price</h2>
                        </div>
                        <div class="shop-detail stocks-quantity">
                            <h2>Quantity</h2>
                        </div>
                        <div class="shop-detail total-amount">
                            <h2>Total Price</h2>
                        </div>
                        <div class="shop-detail sell-all-btn">
                            <button id="sell-all-items">Sell All</button>
                        </div>
                    </div>
                </div>

                <div class="shopping-details-content">
                    <!-- shopping details content -->
                </div>
            </div>

            <div class="buying-details-footer">
                <div class="calculate-buying-details">
                    <div class="calculate-total-items">
                        <h2>Total Items: </h2>
                        <p><span>000</span></p>
                    </div>

                    <div class="calculate-total-quantity">
                        <h2>Total Quantity: </h2>
                        <p>total quantity display here</p>
                    </div>

                    <div class="calculate-total-amount">
                        <h2>Total Amount: </h2>
                        <p><span>000</span> Tk.</p>
                    </div>
                </div>

                <div class="confirm-order-button">
                    <button id="confirm-order-btn">Confirm Order</button>
                </div>
            </div>
        </div>

        <div class="close-buy-area">
            <div id="close-buy-area-btn"></div>
        </div>
    </div>
    <!-- buying details/shoping cart area end -->
    <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\ -->
    <!-- shopping cart area end -->





    <!-- timer section start -->
    <div class="hot-deals" id ="about">
        <div class="section-wrap">
            <div class="hot-deals-title">
                <h1>About Us</h1>
            </div>
<p class="p">Overall result of this project is to deliver a working, reliable and secure web based system for 
    farmers and wholesalers to connect the economic centers.</p>
            <div class="countdown-wrap">
                <div class="timer">
                    <div class="timer-bg"></div>
                    <div class="counter">
                        <h1 id="day">MISSION</h1>
                        <p>This system's primary goal is to link all farmers (from small-scale to large-scale) with 
                            wholesalers and retailers in order to empower the farmers by giving them a target 
                            market and increase the efficiency of Sri Lankan agriculture.
                          To stop unnecessary cultivation of crops
                             To reduce wastage of crops.
                           Reduce the excessive buying power of intermediate dealers and price bargaining with 
                            the farmers.</p>
                    </div>
                </div>

                <div class="timer">
                    <div class="timer-bg"></div>
                    <div class="counter">
                        <h1 id="hour">VISSION</h1>
                        <p>This system's primary goal is to link all farmers (from small-scale to large-scale) with 
                            wholesalers and retailers in order to empower the farmers by giving them a target 
                            market and increase the efficiency of Sri Lankan agriculture.
                          To stop unnecessary cultivation of crops
                             To reduce wastage of crops.
                           Reduce the excessive buying power of intermediate dealers and price bargaining with 
                            the farmers.</p>
                    </div>
                </div>

                <div class="timer">
                    <div class="timer-bg"></div>
                    <div class="counter">
                        <h1 id="minute">ACHIEVEMENTS</h1>
                        <p>This system's primary goal is to link all farmers (from small-scale to large-scale) with 
                            wholesalers and retailers in order to empower the farmers by giving them a target 
                            market and increase the efficiency of Sri Lankan agriculture.
                          To stop unnecessary cultivation of crops
                             To reduce wastage of crops.
                           Reduce the excessive buying power of intermediate dealers and price bargaining with 
                            the farmers.</p>
                    </div>
                </div>

                
                </div>
            </div>
        </div>
    </div>
    <!-- timer section end -->





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
                            fresh vegetables and fruits undder one roof.good customer care<span
                                class="icon-quote-right"></span></p>
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
                            fresh vegetables and fruits undder one roof.good customer care<span
                                class="icon-quote-right"></span></p>
                    </div>
                </div>

                <div class="review-content">
                    <div class="customer-info">
                        <div class="customer-image">
                            <img src="img/customers/customer_3.jpg" alt="review1">
                        </div>
                        <div class="customer-details">
                            <h2 class="name">Nihal Zoysa</h2>
                            <p class="country">Anuradapura</p>
                        </div>
                    </div>

                    <div class="review-text">
                        <p class="review"><span class="icon-quote-left"></span>Great food quality with low cost.
                            fresh vegetables and fruits undder one roof.
                            good customer careGreat food quality with low cost.
                            fresh vegetables and fruits undder one roof.good customer careFast delivery.Great food quality with low cost.
                            fresh vegetables and fruits undder one roof.good customer care<span
                                class="icon-quote-right"></span></p>
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
                            fresh vegetables and fruits undder one roof.good customer care<span
                                class="icon-quote-right"></span></p>
                    </div>
                </div>

          
        </div>
    </div>
    <!-- customer review section end -->





    <!-- contact section start -->
    <div class="contact-section" id="contact">
        <div class="image-area"></div>
        <div class="form-area">
            <div class="form-wrap">
                <div class="title">
                    <h1>Contact Us</h1>
                </div>

                <div class="contact-area">
                    <div class="contact-info">
                        <h2>Information</h2>
                        <div class="contact-address">
                            <span class="icon-map-marked-alt"></span>
                            <p>127,Poorwarama Road,Sibel,Colombo 03<br>
                               </p>
                        </div>

                        <div class="contact-mail">
                            <span class="icon-envelope"></span>
                            <p>aaa@gmail.com</p>
                        </div>

                        <div class="contact-phone">
                            <span class="icon-phone-alt"></span>
                            <p>+94 012-345-6789</p>
                        </div>
                    </div>

                    <form class="contact-form">
                        <div class="name-field">
                            <div class="input-area">
                                <input type="text" id="fname" autocomplete="off" required>
                                <label for="fname">First Name</label>
                            </div>

                            <div class="input-area">
                                <input type="text" id="lname" autocomplete="off" required>
                                <label for="lname">Last Name</label>
                            </div>
                        </div>

                        <div class="input-area">
                            <input type="email" id="email" autocomplete="off" required>
                            <label for="email">Email</label>
                        </div>

                        <div class="message-area">
                            <textarea id="message" required></textarea>
                            <label for="message">Message</label>
                        </div>

                        <div class="btn">
                            <button type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section end -->





    <!-- footer section start -->
    <div id="footer">
        <!-- subscribe area start -->
        <div class="subscribe-area">
            <div class="section-wrap">
                <div class="subscribe-wrap">
                    <div class="subscribe-text">
                        <p>Subscribe to get all stocks updates first</p>
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
                                <a href="stocks.php"><span class="icon-facebook-f"></span></a>
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
                            <p><a href="#top">Home</a></p>
                            <p><a href="#about">About</a></p>
                            
                            <p><a href="#stockss">stockss</a></p>
                            <p><a href="#contact">Contact</a></p>
                        </div>
                    </div>

                    <div class="top-stockss-links">
                        <h2>Top stockss</h2>
                        <div class="flinks">
                            <p><a href="#stockss">Fresh Fruits </a></p>
                            <p><a href="#stockss">Fresh Vegetables</a></p>
                         
                        </div>
                    </div>

                    <div class="useful-links">
                        <h2>Quick Links</h2>
                        <div class="Qlinks">
                            <p><a href="#">User Account</a></p>
                            <p><a href="#">Become An Affilate</a></p>
                            <p><a href="#">New Offer</a></p>
                            <p><a href="#">Recent Blogs</a></p>
                            <p><a href="#">Help</a></p>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- external plugins script -->
    <script src="js/library.js"></script>

    <!-- custom script -->
    <script src="js/script.js"></script>

</body>

</html>
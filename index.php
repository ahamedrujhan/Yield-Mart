<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom stylesheet -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">

    <!-- owl carousel cnd link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Yeild Mart</title>
</head>

<body>
    <?php
    session_start();
    // print_r($_SESSION);
    if(isset($_GET["create"])) {
        echo '<script>alert("Account Created Successfully")</script>';
    }
    ?>
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

                <li><a href="products.php">Products</a></li>
                <li><a href="#contact">Contact</a></li>
                <div style="position: absolute;left: 90%;">

                    <?php if (isset($_SESSION['lname'])) {
                        $name = $_SESSION['lname'];
                        echo "$name";
                    }
                    ?>
                </div>
            </ul>



            <div class="icon-links">


                <div id="icon-shopping-cart"><span class="icon-cart-arrow-down"><span id="item-counter">0</span></div>
                <div id="login-or-signup"><span class="icon-user"></div>

                <div id="customer-center"><span class="bi bi-box-arrow-right" onclick="">

                    </span></div>
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
                <i class="fa-solid fa-arrow-left fa-xl" style="color: #ffffff;"></i>
            </div>
            <div class="bg-slide-right">
                <i class="fa-solid fa-arrow-right fa-xl" style="color: #ffffff;"></i>
            </div>
        </div>

        <!-- hero text -->
        <div id="hero">
            <h1>Try fresh Fruits & Vegetables with great discount and lead a healthy life</h1>
            <p>Buy fresh Vegetables and fruits fast and quickly under one roof with low price and best quality.</p>
            <div class="button">

                <div class="btn">
                    <a href="./customer/products.php">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- home section end -->





    <!-- top products section start -->
    <div class="top-products">
        <div class="section-wrap">
            <div class="sub-section-title">
                <p>Top products</p>
                <a href="products.php">See more <span class="icon-angle-double-right"></span></a>
            </div>

            <div class="products">
                <div class="fruit apple">
                    <div class="fruit-text">
                        <h2>Pomegranate</h2>
                        <span>280kg+</span>
                        <p>Sales</p>
                    </div>
                </div>
                <div class="fruit apple">
                    <div class="fruit-text">
                        <h2>Pomegranate</h2>
                        <span>230kg+</span>
                        <p>Sales</p>
                    </div>
                </div>
                <div class="fruit papaya">
                    <div class="fruit-text">
                        <h2>Papaya</h2>
                        <span>300kg+</span>
                        <p>Sales</p>
                    </div>
                </div>
                <div class="fruit carrot">
                    <div class="fruit-text">
                        <h2>Carrot</h2>
                        <span>210kg+</span>
                        <p>Sales</p>
                    </div>
                </div>
                <div class="fruit banana">
                    <div class="fruit-text">
                        <h2>Banana</h2>
                        <span>270kg+</span>
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
                        <span>190kg+</span>
                        <p>Sales</p>
                    </div>
                </div>

                <div class="fruit beatroot">
                    <div class="fruit-text">
                        <h2>Beatroot</h2>
                        <span>250kg+</span>
                        <p>Sales</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top products section end -->







    <!-- shopping cart area start -->
    <!-- /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\ -->
    <!-- selected and favorite product items area start -->
    <div class="shopping-cart-area" id="product-cart-area">
        <div class="shopping-cart-wrap">
            <div class="product-cart-menu">
                <div class="cart-menu-items">
                    <h2 id="selected-products" class="active-cart-menu">Selected Products</h2>
                    <h2 id="favorite-products">Favorite Products</h2>
                </div>

                <div class="cart-close-btn">
                    <button>Close Cart</button>
                </div>
            </div>

            <div class="cart-contents-header">
                <div class="total-cart-items">
                    <p id="total-selected" class="active-product-counter">
                        <strong>Total Selected: </strong>
                        <span>No item found</span>
                    </p>
                    <p id="total-favorite">
                        <strong>Total Favorite: </strong>
                        <span>No item found</span>
                    </p>
                </div>

                <div class="buying-product-title">
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
                <!-- selected product contents -->
            </div>
            <div class="cart-wishlist-area shopping-cart-contents-area">
                <!-- favorite product contents -->
            </div>

        </div>

    </div>
    <!-- selected and favorite product items area end -->



    <!-- confirmation message area start -->
    <div class="remove-confirmation-message">
        <div class="remove-message-wrap">
            <div class="remove-message-title">
                <h2>Remove item confirmation message</h2>
            </div>

            <div class="remove-message-button">
                <button id="remove-confirm-btn">Remove</button>
                <button id="remove-cancel-btn">Cancel</button>
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
                        <div class="shop-detail product-sl">
                            <h2>SL No.</h2>
                        </div>
                        <div class="shop-detail product-name">
                            <h2>Product Name</h2>
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
                        <div class="shop-detail product-quantity">
                            <h2>Quantity</h2>
                        </div>
                        <div class="shop-detail total-amount">
                            <h2>Total Price</h2>
                        </div>
                        <div class="shop-detail remove-all-btn">
                            <button id="remove-all-items">Remove All</button>
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
    <div class="hot-deals" id="about">
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
                        <p>Empower farmers in rural regions by bridging the communication 
                            gap between them and potential consumers. We aim to provide them with a platform that 
                            facilitates direct and transparent communication, thereby eliminating intermediaries 
                            and ensuring fair prices for their produce. Through this, we strive to enhance the livelihoods
                             of farmers and contribute to the sustainable development of rural communities.</p>
                    </div>
                </div>

                <div class="timer">
                    <div class="timer-bg"></div>
                    <div class="counter">
                        <h1 id="hour">VISSION</h1>
                        <p>Our vision is to create a connected agricultural ecosystem where farmers have easy access to markets, 
                            resources, and knowledge regardless of geographical constraints. We envision a future where farmers are able 
                            to leverage technology to effectively showcase their products, communicate with consumers, and build long-term 
                            relationships based on trust and mutual benefit.Fostering a thriving agricultural sector.</p>
                    </div>
                </div>

                <div class="timer">
                    <div class="timer-bg"></div>
                    <div class="counter">
                        <h1 id="minute">ACHIEVEMENTS</h1>
                        <p>Successfully launched a user-friendly website tailored to the needs of farmers in rural regions, facilitating direct 
                            communication with consumers.Enabled farmers to showcase their produce online, reaching a wider audience and expanding
                             market opportunities.Provided educational resources and training to farmers on utilizing technology for marketing and 
                             communication purposes.Established partnerships with local organizations and government agencies to support the sustainability
                              and growth of the agricultural sector in rural communities</p>
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

           <!-- <div class="review-items owl-carousel">
               <div class="review-content">
                    <div class="customer-info">
                        <div class="customer-image">
                            <img src="customer_/img/customers/customer_1.jpg" alt="review1">
                        </div>
                        <div class="customer-details">
                            <h2 class="name">Thilshath smt</h2>
                            <p class="country">224195D</p>
                        </div>
                    </div>

                    <div class="review-text">
                        <p class="review"><span class="icon-quote-left"></span>Incredible variety, impeccable freshness! Yeild Mart truly 
                        delivers on their promise of quality. From farm-fresh vegetables to exotic fruits, they have it all under one roof. 
                        Plus, their lightning-fast delivery ensures I always get what I need when I need it.<span class="icon-quote-right"></span></p>
                    </div>
                </div>

                <div class="review-content">
                    <div class="customer-info">
                        <div class="customer-image">
                            <img src="customer_/img/customers/customer_2.jpg" alt="review2">
                        </div>
                        <div class="customer-details">
                            <h2 class="name">Faskath mhm</h2>
                            <p class="country">224251X</p>
                        </div>
                    </div>

                    <div class="review-text">
                        <p class="review"><span class="icon-quote-left"></span>Yeild Mart is a game-changer for busy folks like me. 
                        With their convenient online ordering and swift delivery, I can get farm-fresh produce delivered straight 
                        to my doorstep in no time. The quality is unmatched, and I love knowing that I'm supporting local farmers while
                         enjoying the best fruits and veggies<span class="icon-quote-right"></span></p>
                    </div>
                </div>

                <div class="review-content">
                    <div class="customer-info">
                        <div class="customer-image">
                            <img src="customer_/img/customers/customer_3.jpg" alt="review3">
                        </div>
                        <div class="customer-details">
                            <h2 class="name">Rassahi naleer</h2>
                            <p class="country">224257V</p>
                        </div>
                    </div>

                    <div class="review-text">
                        <p class="review"><span class="icon-quote-left"></span>Freshness you can taste, quality you can trust! 
                        Yeild Mart has become my go-to for all things produce. Whether it's juicy strawberries or crisp lettuce, 
                        every item is carefully selected and delivered with care. Plus, their affordable prices make healthy eating 
                        accessible to everyone. Highly recommend!<span class="icon-quote-right"></span></p>
                    </div>
                </div>

                <div class="review-content">
                    <div class="customer-info">
                        <div class="customer-image">
                            <img src="customer_/img/customers/customer_4.jpg" alt="review4">
                        </div>

                        <div class="customer-details">
                            <h2 class="name">Abdullah mi</h2>
                            <p class="country">224001H</p>
                        </div>
                    </div>

                    <div class="review-text">
                        <p class="review"><span class="icon-quote-left"></span>I've been a loyal customer of Yeild Mart for years, and their
                         commitment to excellence never fails to impress me. Their produce is always top-notch, and the prices are unbeatable. 
                         With their wide selection and low costs, I can stock up on everything I need without breaking the bank!<span class="icon-quote-right"></span></p>
                    </div>

                    <div class="review-content">
                    <div class="customer-info">
                        <div class="customer-image">
                            <img src="customer_/img/customers/customer_5.jpg" alt="review5">
                        </div>
                        <div class="customer-details">
                            <h2 class="name">Afzal Zawahir</h2>
                            <p class="country">224232P</p>
                        </div>
                    </div>

                    <div class="review-text">
                        <p class="review"><span class="icon-quote-left"></span>Yeild Mart is a lifesaver! As a busy mom, I rely on them for 
                        fresh fruits and vegetables to keep my family healthy. Their wide variety of produce, combined with their 
                        fast delivery and affordable prices, make grocery shopping a breeze. I never have to compromise on quality or 
                        convenience, thanks to Yeild Mart !<span class="icon-quote-right"></span></p>
                    </div>
                </div>
                </div>


            </div>
        </div> -->
        <div style="display: flex; flex-direction:row; gap: 10px;">
             <div class="review-items owl-carousel">
               <div class="review-content">
                    <div class="customer-info">
                        <div class="customer-image">
                            <img src="customer_/img/customers/customer_1.jpg" alt="review1">
                        </div>
                        <div class="customer-details">
                            <h2 class="name">Thilshath smt</h2>
                            <p class="country">224195D</p>
                        </div>
                    </div>

                    <div class="review-text">
                        <p class="review"><span class="icon-quote-left"></span>Incredible variety, impeccable freshness! Yeild Mart truly 
                        delivers on their promise of quality. From farm-fresh vegetables to exotic fruits, they have it all under one roof. 
                        Plus, their lightning-fast delivery ensures I always get what I need when I need it.<span class="icon-quote-right"></span></p>
                    </div>
                </div>

                <div class="review-content">
                    <div class="customer-info">
                        <div class="customer-image">
                            <img src="customer_/img/customers/customer_2.jpg" alt="review2">
                        </div>
                        <div class="customer-details">
                            <h2 class="name">Faskath mhm</h2>
                            <p class="country">224251X</p>
                        </div>
                    </div>

                    <div class="review-text">
                        <p class="review"><span class="icon-quote-left"></span>Yeild Mart is a game-changer for busy folks like me. 
                        With their convenient online ordering and swift delivery, I can get farm-fresh produce delivered straight 
                        to my doorstep in no time. The quality is unmatched, and I love knowing that I'm supporting local farmers while
                         enjoying the best fruits and veggies<span class="icon-quote-right"></span></p>
                    </div>
                </div>

                <div class="review-content">
                    <div class="customer-info">
                        <div class="customer-image">
                            <img src="customer_/img/customers/customer_3.jpg" alt="review3">
                        </div>
                        <div class="customer-details">
                            <h2 class="name">Rassahi naleer</h2>
                            <p class="country">224257V</p>
                        </div>
                    </div>

                    <div class="review-text">
                        <p class="review"><span class="icon-quote-left"></span>Freshness you can taste, quality you can trust! 
                        Yeild Mart has become my go-to for all things produce. Whether it's juicy strawberries or crisp lettuce, 
                        every item is carefully selected and delivered with care. Plus, their affordable prices make healthy eating 
                        accessible to everyone. Highly recommend!<span class="icon-quote-right"></span></p>
                    </div>
                </div>

                <!-- <div class="review-content">
                    <div class="customer-info">
                        <div class="customer-image">
                            <img src="customer_/img/customers/customer_4.jpg" alt="review4">
                        </div>

                        <div class="customer-details">
                            <h2 class="name">Abdullah mi</h2>
                            <p class="country">224001H</p>
                        </div>
                    </div>

                    <div class="review-text">
                        <p class="review"><span class="icon-quote-left"></span>I've been a loyal customer of Yeild Mart for years, and their
                         commitment to excellence never fails to impress me. Their produce is always top-notch, and the prices are unbeatable. 
                         With their wide selection and low costs, I can stock up on everything I need without breaking the bank!<span class="icon-quote-right"></span></p>
                    </div>

                    <div class="review-content">
                    <div class="customer-info">
                        <div class="customer-image">
                            <img src="customer_/img/customers/customer_5.jpg" alt="review5">
                        </div>
                        <div class="customer-details">
                            <h2 class="name">Afzal Zawahir</h2>
                            <p class="country">224232P</p>
                        </div>
                    </div>

                    <div class="review-text">
                        <p class="review"><span class="icon-quote-left"></span>Yeild Mart is a lifesaver! As a busy mom, I rely on them for 
                        fresh fruits and vegetables to keep my family healthy. Their wide variety of produce, combined with their 
                        fast delivery and affordable prices, make grocery shopping a breeze. I never have to compromise on quality or 
                        convenience, thanks to Yeild Mart !<span class="icon-quote-right"></span></p>
                    </div>
                </div>
                </div> -->


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
                                <p>University of Moratuwa,kadubedda<br>
                                </p>
                            </div>

                            <div class="contact-mail">
                                <span class="icon-envelope"></span>
                                <p>Fit@22.UOM.lk</p>
                            </div>

                            <div class="contact-phone">
                                <span class="icon-phone-alt"></span>
                                <p>+94 777777777</p>
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
                                <p><a href="#top">Home</a></p>
                                <p><a href="#about">About</a></p>

                                <p><a href="#products">Products</a></p>
                                <p><a href="#contact">Contact</a></p>
                            </div>
                        </div>

                        <div class="top-products-links">
                            <h2>Top Products</h2>
                            <div class="flinks">
                                <p><a href="#products">Fresh Fruits </a></p>
                                <p><a href="#products">Fresh Vegetables</a></p>

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
                <p>Created By <a href="https://www.youtube.com/channel/UCr4TC9YxsDZwzwIxnZOVlBw" target="_blank">FIT@UOM_22nd
                        batch</a> |
                    &copy; 2024 All rights reserved</p>
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

<?php
session_start();

?>

</html>
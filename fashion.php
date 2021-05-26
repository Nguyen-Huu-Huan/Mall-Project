<?php 
# Don't delete, PHP01
if (file_exists('install.php') === TRUE) {die('Error, the file install.php is still exists');}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mallux Fashion| Online Shopping Mall</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;500;800&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <noscript>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;500;800&display=swap"
        rel="stylesheet"
        type="text/css"
    />
</noscript>
</head>


<body class="index">
    <div class="cookie">
        <div class="container">
            <h1 class="text-extra text-center">Cookie Consent</h1>
        </div>
        <div class="container">
            <p class="text-big text-center">Please consent to our cookie policy</p>
        </div>
        <div class="container row">
            <input type="submit" name="" value="Agree" class="btn col-40 agree text-medium" onclick="myFunction()">
            <a href="#" class="col-30 learn-more">
                <p class="text-big text-medium">Learn more</p>
            </a>
        </div>
    </div>
    <input type="checkbox" id="hamburger">
    <label for="hamburger" class="hamburger"><span class="text-bold close-hamburger color-red">X</span><img src="images/mobile-nav.svg"></label>
    <nav class="mobile-menu">
        <ul>
            <li><a class="text-bold" href="index.html">Home</a></li>
            <li><a class="text-bold" href="about-us.html">About us</a></li>
            <li><a class="text-bold" href="fees.html">Fees</a></li>
            <li><a class="text-bold" href="myaccount.html">My Account</a></li>
            <li>
                <div class="mobile-menu-dropdown">
                    <input type="checkbox" class="mobile-menu-dropdown-trigger" id="menu-drop">
                    <label for="menu-drop" class="text-bold">Browse Stores &#8628;</label>
                    <div class="mobile-menu-dropdown-content">
                        <ul>
                            <li><a class="text-bold" href="browse-by-name.html">Browse stores by names</a></li>
                        </ul>
                        <div class="mobile-menu-dropdown">
                            <ul>
                                <li><input type="checkbox" class="mobile-menu-dropdown-trigger" id="menu-cate">
                                    <label for="menu-cate" class="text-thin text-bold">Browse store by category &#8628;</label>

                                    <div id="mobile-menu-cate" class="mobile-menu-dropdown-content">
                                        <ul>
                                            <li><a href="fashion.html">Fashion</a></li>
                                            <li><a href="electronics.html">Electronics and technology</a></li>
                                            <li><a href="beauty.html">Beauty</a></li>
                                        </ul>

                                    </div>
                                </li>
                            </ul>


                        </div>

                    </div>
                </div>
            </li>
            <li><a class="text-bold" href="faq.html">FAQs</a></li>
            <li><a class="text-bold" href="contact.html">Contact</a></li>
            <li class="logout text-bold"><a href="myaccount.html" onclick="logOut()">Log out</a></li>
            <li>
                <a href="order-placement.html"><img class="mobile-cart-icon" src="images/cart.png" alt="cart"></a>
            </li>
            <br>
            <li><a href="term-of-service.html">Term of Service</a></li>
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
            <li><a href="copyright.html">Copyright</a></li>
        </ul>

    </nav>
    <div class="mobile-menu-opened">
        <header class="bg-gradient-light small-header">
            <div class="container">
                <div class="row">
                    <div class="col-30">
                        <a href="index.html"> <img class="header-logo" src="images/logo.png" alt="mallux logo">
                        </a>
                    </div>
                    <nav class="col-70 menu">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about-us.html">About us</a></li>
                            <li><a href="fees.html">Fees</a></li>
                            <li><a href="myaccount.html">My Account</a></li>
                            <li>
                                <div class="dropdown">
                                    <a>Browse &#8628;</a>
                                    <div class="dropdown-content">
                                        <a href="browse-by-name.html">Browse stores by names</a>
                                        <div class="dropdown">
                                            <a>Browse store by category &#8628;</a>
                                            <div class="dropdown-content dropdown-category">
                                                <a href="fashion.html">Fashion</a>
                                                <a href="electronics.html">Electronics and technology</a>
                                                <a href="beauty.html">Beauty</a>
                                            </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li class="logout"><a href="myaccount.html" onclick="logOut()">Log out</a></li>
                        </ul>
                        <a href="order-placement.html"><img class="cart-icon" src="images/cart.png" alt="cart"></a>
                    </nav>
                    <div class="res-index-space1 col-70"></div>
                </div>
            </div>
        </header>
        <!--Contact-->
        <main>
            <section class="fashion-stores">
                <div class="small-container">
                    <div class="row">
                        <h1 class="text-center section-title">Fashion</h1>
                    </div>
                    <div class="row">
                        <div class="col-20">
                            <a class="store-thumbnail" href="store/store-home.html">
                                <figure class="col-15 hover-shadow">
                                    <img src="images/nike.jpg" alt="Nike">
                                    <figcaption class="text-center">
                                        <a href="store/store-home.html" class="text-medium text-bold">Nike</a>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="col-20">
                            <a class="store-thumbnail" href="store/store-home.html">
                                <figure class="col-15 hover-shadow">
                                    <img src="images/uniqlo.jpg" alt="uniqlo">
                                    <figcaption class="text-center">
                                        <a href="store/store-home.html" class="text-medium text-bold">Uniqlo</a>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="col-20">
                            <a class="store-thumbnail" href="store/store-home.html">
                                <figure class="col-15 hover-shadow">
                                    <img src="images/saintlaurent.jpg" alt="saint laurent">
                                    <figcaption class="text-center">
                                        <a href="store/store-home.html" class="text-medium text-bold">Saint Laurent</a>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="col-20">
                            <a class="store-thumbnail" href="store/store-home.html">
                                <figure class="col-15 hover-shadow">
                                    <img src="images/offwhite.jpg" alt="off-white">
                                    <figcaption class="text-center">
                                        <a href="store/store-home.html" class="text-medium text-bold">Off-White</a>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-20">
                            <a class="store-thumbnail" href="store/store-home.html">
                                <figure class="col-15 hover-shadow">
                                    <img src="images/adidas.jpg" alt="adidas">
                                    <figcaption class="text-center">
                                        <a href="store/store-home.html" class="text-medium text-bold">Adidas</a>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="col-20">
                            <a class="store-thumbnail" href="store/store-home.html">
                                <figure class="col-15 hover-shadow">
                                    <img src="images/ecco.jpg" alt="ecco">
                                    <figcaption class="text-center">
                                        <a href="store/store-home.html" class="text-medium text-bold">Ecco</a>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="col-20">
                            <a class="store-thumbnail" href="store/store-home.html">
                                <figure class="col-15 hover-shadow">
                                    <img src="images/valentino.jpg" alt="valentino">
                                    <figcaption class="text-center">
                                        <a href="store/store-home.html" class="text-medium text-bold">Valentino</a>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="col-20">
                            <a class="store-thumbnail" href="store/store-home.html">
                                <figure class="col-15 hover-shadow">
                                    <img src="images/footlocker.jpg" alt="footlocker">
                                    <figcaption class="text-center">
                                        <a href="store/store-home.html" class="text-medium text-bold">Footlocker</a>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-20">
                            <a class="store-thumbnail" href="store/store-home.html">
                                <figure class="col-15 hover-shadow">
                                    <img src="images/chanel.jpg" alt="chanel">
                                    <figcaption class="text-center">
                                        <a href="store/store-home.html" class="text-medium text-bold">Chanel</a>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="col-20">
                            <a class="store-thumbnail" href="store/store-home.html">
                                <figure class="col-15 hover-shadow">
                                    <img src="images/rmwilliams.jpg" alt="rmwilliams">
                                    <figcaption class="text-center">
                                        <a href="store/store-home.html" class="text-medium text-bold">R.M.Williams</a>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="col-20">
                            <a class="store-thumbnail" href="store/store-home.html">
                                <figure class="col-15 hover-shadow">
                                    <img src="images/kookai.jpg" alt="kookai">
                                    <figcaption class="text-center">
                                        <a href="store/store-home.html" class="text-medium text-bold">Kookai</a>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="col-20">
                            <a class="store-thumbnail" href="store/store-home.html">
                                <figure class="col-15 hover-shadow">
                                    <img src="images/zara.jpg" alt="zara">
                                    <figcaption class="text-center">
                                        <a href="store/store-home.html" class="text-medium text-bold">Zara</a>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

        </main>
        <footer class="footer">
            <div class="container">
                <div class="row ">
                    <div class="col-20">
                        <img class="footer-logo " src="images/logo-dark.png">
                        <p>Thank you for shopping with us</p>
                    </div>
                    <div class="col-20">
                        <h3>Useful Links</h3>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="term-of-service.html">Term of Service</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="copyright.html">Copyright</a></li>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li class="logout"><a href="myaccount.html" onclick="logOut()">Log out</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <p class="copyright ">Copyright 2021 © - Web Programming - Group 38</p>
            </div>
        </footer>
    </div class="mobile-menu-opened">
    </div>
</body>
<script type="text/javascript" src="effects.js"></script>

</html>
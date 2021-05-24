<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mallux FaQ| Online Shopping Mall</title>
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
                        <img class="header-logo" src="images/logo.png" alt="mallux logo">
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
        <main>
            <h1 class="section-title">FAQs</h1>
            <section class="faqs">
                <div class="small-container">
                    <div class="faqs-container">
                        <input id="tab-1" type="checkbox">
                        <label for="tab-1">Does return policy apply for VIP customers?</label>
                        <div class="faqs-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                        </div>
                    </div>

                    <div class="faqs-container">
                        <input id="tab-2" type="checkbox">
                        <label for="tab-2">What are usually the sale seasons?</label>
                        <div class="faqs-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                        </div>
                    </div>

                    <div class="faqs-container">
                        <input id="tab-3" type="checkbox">
                        <label for="tab-3">How does COVID impact Mallux Delivery Service?</label>
                        <div class="faqs-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                        </div>
                    </div>
                    <div class="faqs-container">
                        <input id="tab-4" type="checkbox">
                        <label for="tab-4">How to open a store  ?</label>
                        <div class="faqs-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
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
    </div>
</body>
<script type="text/javascript" src="effects.js"></script>

</html>

</html>
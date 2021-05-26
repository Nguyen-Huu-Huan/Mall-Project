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
    <title>Mallux Fees| Online Shopping Mall</title>
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
        <main>
            <section class="fees">
                <div class="containter">
                    <h1 class="section-title">Fees</h1>
                    <h3 class="text-center">Get the perfect plan that best suits your needs!</h3>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-57 shopper-colorbar">
                            <h3 class="fees-category">Shoppers</h3>

                        </div>
                        <div class="fees-responsive">
                            <div class="col-17 hover-shadow  shadow">
                                <div class="shopper-colorbar smallbox-fees">fewfewf</div>
                                <h2 class="text-center text-extras color-red">Monthly</h2>
                                <p class="text-center text-normal">For VIP customers</p>
                                <h1 class="text-center text-extras">$15.00</h1>
                                <hr class="hr-shopper">
                                <p class="text-center text-small">✔ Discounts</p>
                                <p class="text-center text-small">✔ No parking charges</p>
                                <p class="text-center text-small">✔ A Mallux T-shirt</p>
                                <p class="text-center text-small">✔ Opportunities to receive gifts from Lucky Customers Program</p>
                                <a class="text-center btn btn-fees" href="">Subscribe</a>
                            </div>
                            <div class="col-17 hover-shadow  shadow">
                                <div class="shopper-colorbar smallbox-fees">fewfewf</div>
                                <h2 class="text-center text-extras color-red">Commision</h2>
                                <p class="text-center text-normal">For family or a group of individuals</p>
                                <h1 class="text-center text-extras">$32.00</h1>
                                <hr class="hr-shopper">
                                <p class="text-center text-small">✔ High discounts</p>
                                <p class="text-center text-small">✔ Birthday special gifts</p>
                                <p class="text-center text-small">✔ Discounts for event participation</p>
                                <p class="text-center text-small">✔ Everything above</p>
                                <a class="text-center btn btn-fees" href="">Subscribe</a>
                            </div>
                            <div class="col-17 hover-shadow  shadow">
                                <div class="shopper-colorbar smallbox-fees">fewfewf</div>
                                <h2 class="text-center text-extras color-red">Premium</h2>
                                <p class="text-center text-normal">For Golden customers</p>
                                <h1 class="text-center text-extras">$49.00</h1>
                                <hr class="hr-shopper">
                                <p class="text-center text-small">✔ Exclusive discounts</p>
                                <p class="text-center text-small">✔ Line-up free</p>
                                <p class="text-center text-small">✔ Free 3 cups of coffee a month at any cafe stores</p>
                                <p class="text-center text-small">✔ Everything above</p>
                                <a class="text-center btn btn-fees" href="">Subscribe</a>
                            </div>
                        </div>
                        <div class="col-37 store_owner-colorbar">
                            <h3 class="fees-category">Shop owners </h3>

                        </div>
                        <div class="fees-responsive">
                            <div class="col-17 hover-shadow  shadow">
                                <div class="store_owner-colorbar smallbox-fees">fefwefew</div>
                                <h2 class="text-center text-extras color-purple">Monthly</h2>
                                <p class="text-center text-normal">For medium Shop Owners</p>
                                <h1 class="text-center text-extras">$345.00</h1>
                                <hr class="hr-owner">
                                <p class="text-center text-small">✔ Security Service</p>
                                <p class="text-center text-small">✔ Advertisement Discounts</p>
                                <p class="text-center text-small">✔ Cleaning Service</p>
                                <a class="text-center btn btn-fees" href="">Subscribe</a>
                            </div>
                            <div class="col-17 hover-shadow  shadow">
                                <div class="store_owner-colorbar smallbox-fees">fewfewfwe</div>
                                <h2 class="text-center text-extras color-purple">Commision</h2>
                                <p class="text-center text-normal">For big Shop Owners</p>
                                <h1 class="text-center text-extras">$489.00</h1>
                                <hr class="hr-owner">
                                <p class="text-center text-small">✔ Management Service</p>
                                <p class="text-center text-small">✔ Support Human Resources</p>
                                <p class="text-center text-small">✔ Hosting events</p>
                                <p class="text-center text-small">✔ Everything above</p>
                                <a class="text-center btn btn-fees" href="">Subscribe</a>
                            </div>
                        </div>
                    </div>
                    <div class="row fees-desktop">
                        <div class="col-17 hover-shadow  shadow">
                            <div class="shopper-colorbar smallbox-fees">fewfewf</div>
                            <h2 class="text-center text-medium color-red">Monthly</h2>
                            <p class="text-center text-normal">For VIP customers</p>
                            <h1 class="text-center text-medium">$15.00</h1>
                            <hr class="hr-shopper">
                            <p class="text-center text-bitsmall">✔ Discounts</p>
                            <p class="text-center text-bitsmall">✔ No parking charges</p>
                            <p class="text-center text-bitsmall">✔ A Mallux T-shirt</p>
                            <p class="text-center text-bitsmall">✔ Opportunities to receive gifts from Lucky Customers Program</p>
                            <a class="text-center btn btn-fees" href="">Subscribe</a>
                        </div>
                        <div class="col-17 hover-shadow  shadow">
                            <div class="shopper-colorbar smallbox-fees">fewfewf</div>
                            <h2 class="text-center text-medium color-red">Commision</h2>
                            <p class="text-center text-normal">For family or a group of individuals</p>
                            <h1 class="text-center text-medium">$32.00</h1>
                            <hr class="hr-shopper">
                            <p class="text-center text-bitsmall">✔ High discounts</p>
                            <p class="text-center text-bitsmall">✔ Birthday special gifts</p>
                            <p class="text-center text-bitsmall">✔ Discounts for event participation</p>
                            <p class="text-center text-bitsmall">✔ Everything above</p>
                            <a class="text-center btn btn-fees" href="">Subscribe</a>
                        </div>
                        <div class="col-17 hover-shadow  shadow">
                            <div class="shopper-colorbar smallbox-fees">fewfewf</div>
                            <h2 class="text-center text-medium color-red">Premium</h2>
                            <p class="text-center text-normal">For Golden customers</p>
                            <h1 class="text-center text-medium">$49.00</h1>
                            <hr class="hr-shopper">
                            <p class="text-center text-bitsmall">✔ Exclusive discounts</p>
                            <p class="text-center text-bitsmall">✔ Line-up free</p>
                            <p class="text-center text-bitsmall">✔ Free 3 cups of coffee a month at any cafe stores</p>
                            <p class="text-center text-bitsmall">✔ Everything above</p>
                            <a class="text-center btn btn-fees" href="">Subscribe</a>
                        </div>
                        <div class="col-17 hover-shadow  shadow">
                            <div class="store_owner-colorbar smallbox-fees">fefwefew</div>
                            <h2 class="text-center text-medium color-purple">Monthly</h2>
                            <p class="text-center text-normal">For medium Shop Owners</p>
                            <h1 class="text-center text-medium">$345.00</h1>
                            <hr class="hr-owner">
                            <p class="text-center text-bitsmall">✔ Security Service</p>
                            <p class="text-center text-bitsmall">✔ Advertisement Discounts</p>
                            <p class="text-center text-bitsmall">✔ Cleaning Service</p>
                            <a class="text-center btn btn-fees" href="">Subscribe</a>
                        </div>
                        <div class="col-17 hover-shadow  shadow">
                            <div class="store_owner-colorbar smallbox-fees">fewfewfwe</div>
                            <h2 class="text-center text-medium color-purple">Commision</h2>
                            <p class="text-center text-normal">For big Shop Owners</p>
                            <h1 class="text-center text-medium">$489.00</h1>
                            <hr class="hr-owner">
                            <p class="text-center text-bitsmall">✔ Management Service</p>
                            <p class="text-center text-bitsmall">✔ Support Human Resources</p>
                            <p class="text-center text-bitsmall">✔ Hosting events</p>
                            <p class="text-center text-bitsmall">✔ Everything above</p>
                            <a class="text-center btn btn-fees" href="">Subscribe</a>
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
</body>
<script type="text/javascript" src="effects.js"></script>

</html>
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
    <title>Mallux Browse by name| Online Shopping Mall</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&display=swap" rel="stylesheet"
            type="text/css" />
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
    <a href="#top" class="back-to-top btn">
        Top &#9650;</a>
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

        <!----List of STORES--->
        <section class="browse-by-name">

            <div class="container">
                <h2 class="section-title" id="top">Stores by names</h2>

                <h2 class="text-center">
                    <a href="#A">A</a>
                    <a href="#B">B</a>
                    <a href="#C">C</a>
                    <a href="#D">D</a>
                    <a href="#E">E</a>
                    <a href="#F">F</a>
                    <a href="#G">G</a>
                    <a href="#H">H</a>
                    <a href="#I">I</a>
                    <a href="#J">J</a>
                    <a href="#K">K</a>
                    <a href="#L">L</a>
                    <a href="#M">M</a>
                    <a href="#N">N</a>
                    <a href="#O">O</a>
                    <a href="#P">P</a>
                    <a href="#Q">Q</a>
                    <a href="#R">R</a>
                    <a href="#S">S</a>
                    <a href="#T">T</a>
                    <a href="#U">U</a>
                    <a href="#V">V</a>
                    <a href="#W">W</a>
                    <a href="#X">X</a>
                    <a href="#Y">Y</a>
                    <a href="#Z">Z</a>
                </h2>
            </div>
            <div class="container">
                <div class="text-start" class="row">
                    <h1 id="A">A</h1>
                </div>
                <div class="row">
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/adidas.jpg" alt="adidas">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="adidas">Adidas</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/adidas.jpg" alt="adidas">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="adidas">Adidas</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/adidas.jpg" alt="adidas">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="adidas">Adidas</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/adidas.jpg" alt="adidas">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="adidas">Adidas</a>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="container">
                <div class="text-start" class="row">
                    <h1 id="B">B</h1>
                </div>
                <div class="row">
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/babylon.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="babylon">Babylon</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/babylon.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="babylon">Babylon</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/babylon.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="babylon">Babylon</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/babylon.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="babylon">Babylon</a>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="container">
                <div class="text-start" class="row">
                    <h1 id="C">C</h1>
                </div>
                <div class="row">
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/chanel.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="chanel">Chanel</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/chanel.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="chanel">Chanel</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/chanel.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="chanel">Chanel</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/chanel.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="chanel">Chanel</a>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>

            <div class="container">
                <div class="text-start" class="row">
                    <h1 id="D">D</h1>
                </div>
                <div class="row">
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/drmartens.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="drmartens">Dr.Martens</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/drmartens.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="drmartens">Dr.Martens</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/drmartens.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="drmartens">Dr.Martens</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/drmartens.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="drmartens">Dr.Martens</a>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>

            <div class="container">
                <div class="text-start" class="row">
                    <h1 id="E">E</h1>
                </div>
                <div class="row">
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/ecco.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="ecco">Ecco</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/ecco.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="ecco">Ecco</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/ecco.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="ecco">Ecco</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/ecco.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="ecco">Ecco</a>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>

            <div class="container">
                <div class="text-start" class="row">
                    <h1 id="F">F</h1>
                </div>
                <div class="row">
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/footlocker.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="footlocker">Footlocker</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/footlocker.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="footlocker">Footlocker</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/footlocker.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="footlocker">Footlocker</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/footlocker.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="footlocker">Footlocker</a>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>

            <div class="container">
                <div class="text-start" class="row">
                    <h1 id="G">G</h1>
                </div>
                <div class="row">
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/givenchy.jpg" alt="givenchy">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="givenchy">Givenchy</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/givenchy.jpg" alt="givenchy">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="givenchy">Givenchy</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/givenchy.jpg" alt="givenchy">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="givenchy">Givenchy</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/givenchy.jpg" alt="givenchy">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="givenchy">Givenchy</a>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>

            <div class="container">
                <div class="text-start" class="row">
                    <h1 id="H">H</h1>
                </div>
                <div class="row">
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/harrolds.jpg" alt="harrolds">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="harrolds">Harrolds</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/harrolds.jpg" alt="harrolds">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="harrolds">Harrolds</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/harrolds.jpg" alt="harrolds">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="harrolds">Harrolds</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/harrolds.jpg" alt="harrolds">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="harrolds">Harrolds</a>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>

            <div class="container">
                <div class="text-start" class="row">
                    <h1 id="J">J</h1>
                </div>
                <div class="row">
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/jbhifi.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="jbhifi">JB Hi-Fi</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/jbhifi.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="jbhifi">JB Hi-Fi</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/jbhifi.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="jbhifi">JB Hi-Fi</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/jbhifi.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="jbhifi">JB Hi-Fi</a>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="container">
                <div class="text-start" class="row">
                    <h1 id="K">K</h1>
                </div>
                <div class="row">
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/kookai.jpg" alt="kookai">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="kookai">Kookai</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/kookai.jpg" alt="kookai">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="kookai">Kookai</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/kookai.jpg" alt="kookai">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="kookai">Kookai</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/kookai.jpg" alt="kookai">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="kookai">Kookai</a>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="container">
                <div class="text-start" class="row">
                    <h1 id="L">L</h1>
                </div>
                <div class="row">
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/lg-logo.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="lg">LG</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/lg-logo.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="lg">LG</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/lg-logo.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="lg">LG</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/lg-logo.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="lg">LG</a>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="container">
                <div class="text-start" class="row">
                    <h1 id="M">M</h1>
                </div>
                <div class="row">
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/mjbale.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="mjbale">M.J.Bale</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/mjbale.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="mjbale">M.J.Bale</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/mjbale.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="mjbale">M.J.Bale</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/mjbale.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="mjbale">M.J.Bale</a>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="container">
                <div class="text-start" class="row">
                    <h1 id="N">N</h1>
                </div>
                <div class="row">
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/nike.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="nike">Nike</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/nike.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="nike">Nike</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/nike.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="nike">Nike</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/nike.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="nike">Nike</a>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="container">
                <div class="text-start" class="row">
                    <h1 id="O">O</h1>
                </div>
                <div class="row">
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/offwhite.jpg" alt="off-white">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="offwhite">Off-White</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/offwhite.jpg" alt="off-white">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="offwhite">Off-White</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/offwhite.jpg" alt="off-white">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="offwhite">Off-White</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/offwhite.jpg" alt="off-white">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="offwhite">Off-White</a>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="container">
                <div class="text-start" class="row">
                    <h1 id="S">S</h1>
                </div>
                <div class="row">
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/saintlaurent.jpg" alt="saint laurent">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="saintlaurent">Saint Laurent</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/saintlaurent.jpg" alt="saint laurent">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="saintlaurent">Saint Laurent</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/saintlaurent.jpg" alt="saint laurent">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="saintlaurent">Saint Laurent</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/saintlaurent.jpg" alt="saint laurent">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="saintlaurent">Saint Laurent</a>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>

            <div class="container">
                <div class="text-start" class="row">
                    <h1 id="T">T</h1>
                </div>
                <div class="row">
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/tde.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="tde">tde.</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/tde.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="tde">tde.</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/tde.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="tde">tde.</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/tde.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="tde">tde.</a>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>

            <div class="container">
                <div class="text-start" class="row">
                    <h1 id="U">U</h1>
                </div>
                <div class="row">
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/uniqlo.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="uniqlo">Uniqlo</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/uniqlo.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="uniqlo">Uniqlo</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/uniqlo.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="uniqlo">Uniqlo</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.html">
                        <figure class="col-20 hover-shadow">
                            <img src="images/uniqlo.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.html" class="text-medium text-bold" alt="uniqlo">Uniqlo</a>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>

        </section>
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
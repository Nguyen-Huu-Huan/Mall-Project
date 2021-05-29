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
    <title>Mallux Privacy Policy| Online Shopping Mall</title>
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
            <li><a class="text-bold" href="index.php">Home</a></li>
            <li><a class="text-bold" href="about-us.php">About us</a></li>
            <li><a class="text-bold" href="fees.php">Fees</a></li>
            <li><a class="text-bold" href="myaccount.php">My Account</a></li>
            <li>
                <div class="mobile-menu-dropdown">
                    <input type="checkbox" class="mobile-menu-dropdown-trigger" id="menu-drop">
                    <label for="menu-drop" class="text-bold">Browse Stores &#8628;</label>
                    <div class="mobile-menu-dropdown-content">
                        <ul>
                            <li><a class="text-bold" href="browse-by-name.php">Browse stores by names</a></li>
                        </ul>
                        <div class="mobile-menu-dropdown">
                            <ul>
                                <li><input type="checkbox" class="mobile-menu-dropdown-trigger" id="menu-cate">
                                    <label for="menu-cate" class="text-thin text-bold">Browse store by category &#8628;</label>

                                    <div id="mobile-menu-cate" class="mobile-menu-dropdown-content">
                                        <ul>
                                            <li><a href="fashion.php">Fashion</a></li>
                                            <li><a href="electronics.php">Electronics and technology</a></li>
                                            <li><a href="beauty.php">Beauty</a></li>
                                        </ul>

                                    </div>
                                </li>
                            </ul>


                        </div>

                    </div>
                </div>
            </li>
            <li><a class="text-bold" href="faq.php">FAQs</a></li>
            <li><a class="text-bold" href="contact.php">Contact</a></li>
            <li class="logout text-bold"><a href="myaccount.php" onclick="logOut()">Log out</a></li>
            <li>
                <a href="order-placement.php"><img class="mobile-cart-icon" src="images/cart.png" alt="cart"></a>
            </li>
            <br>
            <li><a href="term-of-service.php">Term of Service</a></li>
            <li><a href="privacy-policy.php">Privacy Policy</a></li>
            <li><a href="copyright.php">Copyright</a></li>
        </ul>

    </nav>

    <div class="mobile-menu-opened">
        <main>
            <header class="bg-gradient-light small-header">
                <div class="container">
                    <div class="row">
                        <div class="col-30">
                            <a href="index.php"> <img class="header-logo" src="images/logo.png" alt="mallux logo">
                            </a>
                        </div>
                        <nav class="col-70 menu">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about-us.php">About us</a></li>
                                <li><a href="fees.php">Fees</a></li>
                                <li><a href="myaccount.php">My Account</a></li>
                                <li>
                                    <div class="dropdown">
                                        <a>Browse &#8628;</a>
                                        <div class="dropdown-content">
                                            <a href="browse-by-name.php">Browse stores by names</a>
                                            <div class="dropdown">
                                                <a>Browse store by category &#8628;</a>
                                                <div class="dropdown-content dropdown-category">
                                                    <a href="fashion.php">Fashion</a>
                                                    <a href="electronics.php">Electronics and technology</a>
                                                    <a href="beauty.php">Beauty</a>
                                                </div>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li><a href="faq.php">FAQs</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li class="logout"><a href="myaccount.php" onclick="logOut()">Log out</a></li>
                            </ul>
                            <a href="order-placement.php"><img class="cart-icon" src="images/cart.png" alt="cart"></a>
                        </nav>
                        <div class="res-index-space1 col-70"></div>
                    </div>
                </div>
            </header>
            <main>
                <h1 class="section-title">Privacy Policy</h1>
                <div class="container">
                    <p>Pellentesque vitae eros dui. Nam sollicitudin commodo congue. Sed sapien neque, feugiat non pharetra a, suscipit vel felis. Aenean suscipit nunc eu nulla posuere, ac rhoncus eros viverra. In facilisis tincidunt mi, sit amet bibendum
                        est tempus eget. Duis in nisi eros. Donec consectetur tempus sapien. Morbi at viverra tortor, eu fermentum elit. </p>
                    <br>
                    <p>Proin mattis mollis dui quis consequat. Ut ut blandit est, at porta magna. Aliquam ac libero non nulla dapibus accumsan id ut metus. Etiam fringilla sed eros ac sodales. In venenatis auctor tincidunt. Mauris a nisl purus. Duis placerat
                        dui ac ligula consequat, ut tristique nibh porttitor. Aenean accumsan enim a nulla dictum vestibulum. Nam fermentum et nisi vitae consequat. Aliquam nulla urna, congue vel ex sit amet, laoreet tincidunt tellus. Cras ac magna dignissim
                        velit commodo sagittis. Donec viverra sit amet erat at malesuada. Morbi dapibus egestas dolor, non ullamcorper lectus posuere et. Nunc nisl nunc, blandit ut hendrerit quis, mattis vitae magna.
                    </p>
                    <br>
                    <p> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aenean turpis sem, aliquet sed felis ut, elementum blandit nunc. Etiam nec ligula ante. Vivamus euismod auctor nibh ut dictum. Nam vitae lobortis
                        eros, id rhoncus quam. In condimentum imperdiet pharetra. Duis ligula magna, congue quis tellus non, lacinia hendrerit tortor. Sed eleifend commodo lorem, at posuere urna facilisis non. Maecenas interdum condimentum nibh, at fermentum
                        turpis vestibulum sed. Maecenas iaculis elementum facilisis. Mauris suscipit laoreet mauris a finibus. Nullam posuere sem lectus, ut faucibus sem pellentesque eget. Donec volutpat interdum ante, vitae semper neque pulvinar eu.
                    </p>
                    <br>
                    <p>Donec tellus justo, lobortis at nulla vitae, viverra lacinia neque. Suspendisse tempor arcu et eros pulvinar hendrerit. Duis lacinia blandit varius. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nam ut nunc volutpat, condimentum felis in, sodales ex. Vestibulum nec nisi at dolor vehicula venenatis non vel orci. Mauris ac augue elit.
                        Integer dolor dolor, consectetur et semper ut, imperdiet vestibulum ante. Nullam id eleifend mauris, id volutpat lorem. Nunc est quam, cursus id egestas vitae, tristique in enim.
                    </p>
                </div>
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
                                <li><a href="index.php">Home</a></li>
                                <li><a href="term-of-service.php">Term of Service</a></li>
                                <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                <li><a href="copyright.php">Copyright</a></li>
                                <li><a href="faq.php">FAQs</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li class="logout"><a href="myaccount.php" onclick="logOut()">Log out</a></li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <p class="copyright ">Copyright 2021 © - Web Programming - Group 38</p>
                </div>
            </footer>
        </main>
    </div>

</body>
<script type="text/javascript" src="effects.js"></script>

</html>
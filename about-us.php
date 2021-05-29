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
    <title>Mallux About us | Online Shopping Mall</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;500;800&display=swap"
        as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;500;800&display=swap" rel="stylesheet"
            type="text/css" />
    </noscript>
</head>


<body class="index" onload="about_us()">
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
    <label for="hamburger" class="hamburger"><span class="text-bold close-hamburger color-red">X</span><img
            src="images/mobile-nav.svg"></label>
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
                                    <label for="menu-cate" class="text-thin text-bold">Browse store by category
                                        &#8628;</label>

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
        <h1 class="section-title">About Us</h1>
        <section class="about-us">
            <div class="container">
                <div class="row text-center">
                    <p>Our team consist of first year and second year students, which are all undertaking Bachelor of IT
                        in RMIT. This website is built for our Assignment in Web Programming Course and also is an
                        opportunity of us to experience building a
                        website using HTML and CSS. We also got the chance to work in a team in which would support us
                        when we get into the industry later on.</p>
                </div>
                <div class="row">
                    <!--Huy short info-->
                    <div id="Huy" class="col-30 shadow hover-shadow">
                        <img src="images/Huy.jpg">
                        <h3>Quach Nhat Huy</h3>
                    </div>

                    <!--Huan short info-->
                    <div id="Huan" class="col-30  shadow hover-shadow">
                        <img src="images/Huan.jpg">
                        <h3>Nguyen Huu Huan</h3>
                    </div>

                    <!--Nguyen short info-->
                    <div id="Nguyen" class="col-30  shadow hover-shadow">
                        <img src="images/Nguyen.jpg">
                        <h3>Vo Tran Cong Nguyen</h3>
                    </div>
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

    </div>
    <!--Huy long info in modal-->
    <div id="Huymodal" class="Huy-bg-modal">
        <div class="modal-content shadow hover-shadow">
            <img src="images/Huy.jpg">
            <h3>Quach Nhat Huy</h3>
            <p>After graduating Year 12 in my hometown, I studied abroad in Australia for 2 year. After
                much
                discussion, I decided to fly back to Vietnam to complete my Information technology in
                RMIT.
                Since I have a knack for music, in my free
                time I would pick up my beloved guitar and proceed to compose or cover popular pop
                songs.
                Even though I only started learning how to play the guitar 5 years ago, I always felt
                drawn
                to it whenever I feel overwhelmed by my school
                workload. </p>
        </div>
    </div>
    <!--Huan long info in modal-->
    <div id="Huanmodal" class="Huan-bg-modal">
        <div class="modal-content shadow hover-shadow">
            <img src="images/Huan.jpg">
            <h3>Nguyen Huu Huan</h3>
            <p>I had had 2 years studying abroad in Canada but due to Covid 19, I had to come back to
                Vietnam. Right now I'm a new IT student in RMIT. Everything has been so great with me
                and I
                hope I will have an amazing time at this school.</p>
        </div>
    </div>
    <!--Nguyen long info in modal-->
    <div id="Nguyenmodal" class="Nguyen-bg-modal">
        <div class="modal-content shadow hover-shadow">
            <img src="images/Nguyen.jpg">
            <h3>Vo Tran Cong Nguyen</h3>
            <p>I moved to Australia for high school four years ago for high school, but I came back
                after 4
                days into RMIT Melbourne because of the pandemic. This is my second year. I'm currently
                a
                free graphic designer, specialized in branding
                and marketing collaterals. For IT-related skills, I have acquired basic knowledge and
                application of some programming languages such as HTML, CSS, Java. I have also
                experienced
                working in groups for IT projects during my first
                year.
            </p>
        </div>
    </div>
</body>
<script type="text/javascript" src="effects.js"></script>

</html>

</html>

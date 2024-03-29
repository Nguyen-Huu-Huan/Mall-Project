<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

echo "<script>var showLogout = false</script>";
if (isset($_SESSION['validate'])) {
    
    if (isset($_POST['logout1'])) {
        $_SESSION['validate'] = false;
    }
    if ($_SESSION['validate'] === true) {
        echo "<script> var showLogout = true</script>";
    }
    if ($_SESSION['validate'] === false || !isset($_SESSION['validate'])) {
        echo "<script>var showLogout = false</script>";
    }
}
?>
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
    <title>Mallux Contact| Online Shopping Mall</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;500;800&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;500;800&display=swap" rel="stylesheet"
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
             <li class="logout1 text-bold"><form method="POST"><input type="submit" name="logout1" value="Log Out"></form></li>
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
                                        <a href="browse-by-category.php">Browse store by category</a>

                                    </div>
                                </div>
                            </li>
                            <li><a href="faq.php">FAQs</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li class="logout1"><form method="POST"><input type="submit" name="logout1" value="Log Out"></form></li>
                        </ul>
                        <a href="order-placement.php"><img class="cart-icon" src="images/cart.png" alt="cart"></a>
                    </nav>
                    <div class="res-index-space1 col-70"></div>
                </div>
            </div>
        </header>
        <!--Contact-->
        <main>
            <section class="contact">
                <div class="row">
                    <div class="small-container col-70">
                        <h1 class="section-title">Contact Form</h1>
                        <form action="contact.php" method="post" class="form" id="formContact" onsubmit="return checkContact()">
                            <label for="contact_purpose"><strong>Contact Purpose</strong></label>
                            <br>
                            <select name="purpose">
                                <option value="open_store">Open a store</option>
                                <option value="customer_services">Customer Service</option>
                                <option value="general">General Inquiry</option>
                                <option value="complaints">Complaints</option>
                                <option value="feedback">Feedback</option>
                                <option value="collab">Business Collaboration</option>
                                <option value="other">Other purpose</option>
                            </select>
                            <div class="form-control">
                                <label for="Name"><strong>Name:</strong></label>
                                <input type="text" name="Name" value="" required placeholder="*required" id="userName">
                                <i class="correct">&#10004;</i>
                                <i class="wrong">&#9888;</i>
                                <small>Error message</small>
                            </div>
                            <div class="form-control">
                                <label for="Email"><strong>Email:</strong></label>
                                <input type="email" name="Email" value="" required placeholder="*required" id="email">
                                <i class="correct">&#10004;</i>
                                <i class="wrong">&#9888;</i>
                                <small>Error message</small>
                            </div>
                            <div class="form-control">
                                <label for="Phone"><strong>Phone:</strong></label>
                                <input type="tel" name="Phone" value="" required placeholder="0901234567" pattern="0[0-9]{9}" id="phone">
                                <i class="correct">&#10004;</i>
                                <i class="wrong">&#9888;</i>
                                <small>Error message</small>
                            </div>
                            <br>
                            <div class="form-control">
                                <label for="contact-method "><strong>Prefered Contact Method:</strong></label>
                                <input type="radio" name="contact" value=" " required id="option1">
                                <label class="text-thin" for="contact-method">Email</label>
                                <input type="radio" name="contact" value=" " required id="option2">
                                <label class="text-thin" for="contact-method">Phone</label>
                                <i class="correct">&#10004;</i>
                                <i class="wrong">&#9888;</i>
                                <small>Select exactly one option!</small>
                            </div>
                            <div class="other-input ">
                                <label for="Contact_days"> <strong>Contact days:</strong> </label>
                                <br><br>
                                <div class="form-control">
                                    <label for="monday">Monday</label>
                                    <input type="checkbox" name="contact-day-1" value="yes" id="day1">
                                    <label for="tuesday">Tuesday</label>
                                    <input type="checkbox" name="days" value=" " id="day2">
                                    <label for="wednesday">Wednesday</label>
                                    <input type="checkbox" name="days" value=" " id="day3">
                                    <label for="thursday">Thursday</label>
                                    <input type="checkbox" name="days" value=" " id="day4">
                                    <label for="friday">Friday</label>
                                    <input type="checkbox" name="days" value=" " id="day5">
                                    <label for="saturday">Saturday</label>
                                    <input type="checkbox" name="days" value=" " id="day6">
                                    <label for="sunday">Sunday</label>
                                    <input type="checkbox" name="days" value=" " id="day7">
                                    <i class="correct">&#10004;</i>
                                    <i class="wrong">&#9888;</i>
                                    <small>Select at least one option!</small>
                                </div>
                            </div>

                            <div class="form-control">
                                <textarea name="message" minlength="50" maxlength="500" rows="8" cols="80" placeholder="Your Message" spellcheck="false" id="contact-message"></textarea>

                                <small id="message-error">Select exactly one option!</small>
                                <i class="correct" id="message-correct">&#10004;</i>
                                <i class="wrong" id="message-wrong">&#9888;</i>
                            </div>
                            <div>
                                <input class="btn" type="reset" value="Clear">
                                <input class="btn" type="submit" value="Send" onclick="checkContact()">
                            </div>
                        </form>
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
                            <li><a href="index.php">Home</a></li>
                            <li><a href="term-of-service.php">Term of Service</a></li>
                            <li><a href="privacy-policy.php">Privacy Policy</a></li>
                            <li><a href="copyright.php">Copyright</a></li>
                            <li><a href="faq.php">FAQs</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li class="logout1"><form method="POST"><input type="submit" name="logout1" value="Log Out"></form></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <p class="copyright ">Copyright 2021 © - Web Programming - Group 38</p>
            </div>
        </footer>
    </div>
    <script type="text/javascript" src="effects.js"></script>
</body>


</html>
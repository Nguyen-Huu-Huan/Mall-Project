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
<?php 
    if (isset($_POST['order'])){
        if((isset($_SESSION['logged-in']))&&($_SESSION['logged-in']==true)){
            header("location:order-completed.php");

        }else{
            header("location:register.php");
        }
    }
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mallux Order Placement| Online Shopping Mall</title>
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

<body class="index" onload="">
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
                            <li><a class="text-bold" href="browse-by-name.php">Browse stores by names</a></li><li><a class="text-bold" href="browse-by-category.php">Browse store by category</a></li>
                        </ul>
                        
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
                        <img class="header-logo" src="images/logo.png" alt="mallux logo">
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
        </header>
        <main class="order-placement">
            <h1 class="section-title">ORDER SUMMARY</h1>
            <div class="order-empty">
                <h2 class="text-big text-center">Looks like your cart is empty</h2>
            </div>
            <section class="order-placement product-section">
                <div class="medium-container">
                    <div class="order-details">
                        <h2 class="text-medium">1. Order Details</h2>
                    </div>
                    <br>
                    <div class="row">
                        <h4 class="col-40 text-center">Products' Names</th>
                            <h4 class="col-20 text-center">Price</th>
                                <h4 class="col-20 text-center">Quantity</th>
                    </div>
                    <hr>
                    <br>
                </div>
            </section>
            <section class="coupon-section">
                <div class="medium-container">
                    <div class="coupon-code">
                        <h2 class="text-medium">2. Coupon Code</h2>
                    </div>
                    <div class="row">
                        <label for="coupon" class="col-30">Coupon code</label>
                        <input type="text" name="coupon" class="col-50">
                        <input type="button" value="Apply" class="btn hover-shadow img" id="order-button" onclick="coupon_apply()">
                    </div>
                    <div class="HD-apply">
                        <p class="text-medium text-center">"&#10004; COSC2430-HD has been applied! You received 20% off"</h2>
                    </div>
                    <div class="DI-apply">
                        <p class="text-medium text-center">"&#10004; COSC2430-DI has been applied! You received 10% off"</h2>
                    </div>
                    <div class="non-apply">
                        <p class="text-medium text-center">&#10060; Sorry, your coupon code is invalid.</h2>
                    </div>
                </div>
            </section>
            <section class="total-section">
                <div class="row">
                    <div class="col-45">
                        <p style="color: white;">fwifowief</p>
                    </div>
                    <div class="col-30">
                        <h1 class="text-center">Total</h1>
                        <hr>
                        <p class="text-big text-center total-money">0$</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-45">
                        <a href="">&#8592; Continue Shopping</a>
                    </div>
                    <div class="col-30">
                        <?php
                        echo "<form method='POST'><input type='submit' class=\"btn hover-shadow img\" id=\"order-button\" name='order' value='Order'></form>";
                        ?>
                    </div>
                    <!-- href="order-completed.php" -->
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
</body>
<script type="text/javascript" src="effects.js"></script>

</html>

</html>

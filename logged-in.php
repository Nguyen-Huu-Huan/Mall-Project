<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
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
if (file_exists('install.php') === TRUE) {
    die('Error, the file install.php is still exists');
}
?>
<!DOCTYPE html>
<html lang="en">

<?php $_SESSION['logged-in'] = true; 
if ($_SESSION['validate'] === false) {

    echo "<script type='text/javascript'> document.location = 'myaccount.php'; </script>";
}?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mallux | Online Shopping Mall</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;500;800&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;500;800&display=swap" rel="stylesheet" type="text/css" />
    </noscript>
</head>


<body onload="logged_in()">
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
                            <li><a class="text-bold" href="browse-by-name.php">Browse stores by names</a></li>
                            <li><a class="text-bold" href="browse-by-category.php">Browse store by category</a></li>
                        </ul>


                        </div>

                    </div>
                </div>
            </li>
            <li><a class="text-bold" href="faq.php">FAQs</a></li>
            <li><a class="text-bold" href="contact.php">Contact</a></li>
            <li id="logout" class="logout1 text-bold">
                <form method="POST">
                    <input type="submit" name="logout1" value="Log Out">
                </form>
            </li>
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
                            <li id="logout" class="logout1">
                                <form method="POST"><input type="submit" name="logout1" value="Log Out"></form>
                            </li>
                        </ul>
                        <a href="order-placement.php"><img class="cart-icon" src="images/cart.png" alt="cart"></a>
                    </nav>
                    <div class="res-index-space1 col-70"></div>
                </div>
        </header>

        <main>
            <h1 class="section-title ">Account Information</h1>
            <div class="row ">
                <div class="col-40 ">
                    <h3>Full name: <span class="text-medium ">admin</span></h3>
                    <?php 
                    echo "<h3>Email address: <span class='text-medium'>";
                    echo $_SESSION['login-email']; 
                    echo "</span></h3>"
                    ?>
                    
                    <h3>Phone number: <span class="text-medium ">(+84)0123456789</span></h3>
                </div>
                <div class="col-40 ">
                    <img src="images/profile_picture.png " alt="Profile picture is not available ">
                </div>
            </div>
        </main>
        <!----Footer--->
        <footer class="footer ">
            <div class="container ">
                <div class="row ">
                    <div class="col-20 ">
                        <img class="footer-logo " src="images/logo-dark.png ">
                        <p>Thank you for shopping with us</p>
                    </div>
                    <div class="col-20 ">
                        <h3>Useful Links</h3>
                        <ul>
                            <li><a href="index.php ">Home</a></li>
                            <li><a href="store/term-of-service.php ">Term of Service</a></li>
                            <li><a href="store/privacy-policy.php ">Privacy Policy</a></li>
                            <li><a href="store/copyright.php ">Copyright</a></li>
                            <li><a href="faq.php ">FAQs</a></li>
                            <li><a href="contact.php ">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <p class="copyright ">Copyright 2021 © - Web Programming - Group 38</p>
            </div>
        </footer>
    </div>
</body>
<script type="text/javascript " src="effects.js "></script>

</html>
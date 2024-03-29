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
if (file_exists('../install.php') === TRUE) {die('Error, the file install.php is still exists');}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike Dunk Low Black | Online Shopping Mall</title>
    <link rel="stylesheet" href="../style.css">

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
    <a href="../order-placement.php" class="back-to-top">
        <img src="../images/cart.png" alt="cart" class="cart-icon-big">
        <p class="cart-qty"></p>
    </a>
    <div class="flash-message shadow">
        <div class="row">
            <div class="col-10 text-center">
                <img src="../images/add_success.png">
            </div>
            <div class="col-70">
                <h1 class="text-normal text-start color-red">New product has been added!</h1>
            </div>
        </div>
    </div>
    <input type="checkbox" id="hamburger">
    <label for="hamburger" class="hamburger"><span class="text-bold close-hamburger color-red">X</span><img src="../images/mobile-nav-black.svg"></label>
    <nav class="mobile-menu">
        <ul>
            <li><a href="store-home.php" class="text-bold">Home</a></li>
            <li><a href="about-us.php" class="text-bold">About us</a></li>
            <li>
                <div class="mobile-menu-dropdown">
                    <input type="checkbox" class="mobile-menu-dropdown-trigger" id="menu-drop">
                    <label for="menu-drop" class="text-bold">Products &#8628;</label>
                    <div class="mobile-menu-dropdown-content">
                        <ul>
                            <li><a href="browse-by-category.php" class="text-bold">Browse Products by Category</a></li>
                            <li><a href="browse-by-time.php" class="text-bold">Browse Products by Created Time</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li><a class="text-bold" href="contact-nike.php">Contact</a></li>
            <li>
                <a href="../order-placement.php"><img class="mobile-cart-icon" src="../images/cart.png" alt="cart"></a>
            </li>
        </ul>

    </nav>
    <div class="mobile-menu-opened">
        <header class="small-header">
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        <img alt="nike logo" class="header-logo" src="../images/nike logo black.jpg">
                    </div>
                    <nav class="col-90 menu">
                        <ul>
                            <li><a href="store-home.php">Home</a></li>
                            <li><a href="about-us.php">About us</a></li>
                            <li>
                                <div class="dropdown">
                                    <a>Products &#8628;</a>
                                    <div class="dropdown-content">
                                        <a href="browse-by-category.php">Browse Products by Category</a>
                                        <a href="browse-by-time.php">Browse Products by Created Time</a>
                                    </div>
                                </div>
                            </li>
                            <li><a href="contact-nike.php">Contact</a></li>
                            <li>
                                <a href="../order-placement.php">
                                    <img alt="cart" class="cart-icon" src="../images/cart.png">
                                    <p class="cart-qty"></p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <!-----Air force one--->
        <section class="dunklowblack">
            <div class="small-container">
                <div class="row">
                    <div class="col-50">
                        <img src="../images/air-force-1-1.jpg" alt="Air Force One" width="100%">
                        <div class="row">
                            <div class="col-17">
                                <img src="../images/air-force-1-2.png" alt="Air Force One" width="100%">
                            </div>
                            <div class="col-17">
                                <img src="../images/air-force-1-3.png" alt="Air Force One" width="100%">
                            </div>
                            <div class="col-17">
                                <img src="../images/air-force-1-5.png" alt="Air Force One" width="100%">
                            </div>
                            <div class="col-17">
                                <img src="../images/air-force-1-5.png" alt="Air Force One" width="100%">
                            </div>
                            <div class="col-17">
                                <img src="../images/air-force-1-6.png" alt="Air Force One" width="100%">
                            </div>
                        </div>
                    </div>
                    <div class="col-45">
                        <h2>Air Force One</h2>
                        <h3 class="color-red">$147</h3>
                        <select>
                    <option>Select size</option>
                    <option>EU 41</option>
                    <option>EU 42</option>
                    <option>EU 43</option>
                    <option>EU 44</option>
                </select><br>
                        <input type="number" value="1" class="shoe-qty">
                        <h3> <a href="#" class="btnnike btn add-to-cart" onclick="add_to_cart('Air Force One', event)">Add to cart</a>
                            <a href="../order-placement.php" class="btnnike btn">Buy Now</a>
                        </h3>
                        <h3>Product details</h3>
                        <p>Refresh your look and step into a new AF-1 world with the Nike Air Force 1 React. It fuses modern design with iconic b-ball style for a big, bold look. The oversized Swoosh, large "AIR" on the midsole and new sole pattern let you
                            express your modern world while Nike React technology adds exceptional underfoot comfort.</p>
                    </div>
                </div>
            </div>
        </section>
        <!----RECOMMENDED PRODUCTS--->
        <section class="nike-recommended-products">
            <div class="container">
                <h2 class="section-title">Recommended Products</h2>
                <div class="row">
                    <div class="col-20">
                        <div class="new-products-wrapper hover-shadow">
                            <figure class="new-products-img-wrapper">
                                <a href="product-details-dunklowblack.php"><img class="new-products-img" src="../images/air-force-1.jpg" alt="Nike Air Force 1 is unavailable"></a>
                            </figure>
                            <a href="product-details-dunklowblack.php">
                                <h2 class="text-medium">Air Force 1</h2>
                            </a>
                            <h3 class="text-normal color-red">$120.50</h3>
                            <p class="text-small">Made from dense, brushed-back fleece in a loose fit, warm coverage with chic pin.</p>
                        </div>
                    </div>
                    <div class="col-20">
                        <div class="new-products-wrapper hover-shadow">
                            <figure class="new-products-img-wrapper">
                                <a href="product-details-dunklowblack.php"><img class="new-products-img" src="../images/pantnike.png" alt="Black Pants"></a>
                            </figure>
                            <a href="product-details-dunklowblack.php">
                                <h2 class="text-medium">Long Black Pants</h2>
                            </a>
                            <h3 class="text-normal color-red">$30.50</h3>
                            <p class="text-small">Made from dense, brushed-back fleece in a loose fit, warm coverage with chic pin.</p>
                        </div>
                    </div>
                    <div class="col-20">
                        <div class="new-products-wrapper hover-shadow">
                            <figure class="new-products-img-wrapper">
                                <a href="product-details-dunklowblack.php"><img class="new-products-img" src="../images/shirtnike2.png" alt="Black Pants"></a>
                            </figure>
                            <a href="product-details-dunklowblack.php">
                                <h2 class="text-medium">Sport Loose Tee</h2>
                            </a>
                            <h3 class="text-normal color-red">$45.00</h3>
                            <p class="text-small">Made from dense, brushed-back fleece in a loose fit, warm coverage with chic pin.</p>
                        </div>
                    </div>
                    <div class="col-20">
                        <div class="new-products-wrapper hover-shadow">
                            <figure class="new-products-img-wrapper">
                                <a href="product-details-dunklowblack.php"><img class="new-products-img" src="../images/shirtnike1.png" alt="Black Pants"></a>
                            </figure>
                            <a href="product-details-dunklowblack.php">
                                <h2 class="text-medium">Fit Tee</h2>
                            </a>
                            <h3 class="text-normal color-red">$23.00</h3>
                            <p class="text-small">Made from dense, brushed-back fleece in a loose fit, warm coverage with chic pin.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="container">
                <div class="row ">
                    <div class="col-20">
                        <img class="footer-logo " src="../images/nike logo.png">
                        <p>Thank you for shopping with us</p>
                    </div>
                    <div class="col-20">
                        <h3>Useful Links</h3>
                        <ul>
                            <li><a href="store-home.php">Home</a></li>
                            <li><a href="term-of-service.php">Term of Service</a></li>
                            <li><a href="privacy-policy.php">Privacy Policy</a></li>
                            <li><a href="copyright.php">Copyright</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <p class="copyright ">Copyright 2021 © - Web Programming - Group 38</p>
            </div>
        </footer>
    </div>

</body>
<script type="text/javascript" src="../effects.js"></script>

</html>

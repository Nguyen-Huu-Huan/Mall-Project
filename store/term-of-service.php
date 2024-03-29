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
    <title>Nike Term Of Service | Online Shopping Mall</title>
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
        <a href="#" class="col-30 learn-more"><p class="text-big text-medium">Learn more</p></a>
      </div>
    </div>
    <a href="../index.php" class="back-to-top btn">&#9664; Back to Mallux</a>
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
                        </ul>
                        <a href="../order-placement.php"><img alt="cart" class="cart-icon" src="../images/cart.png"></a>
                    </nav>
                </div>
            </div>
        </header>
        <main>
            <h1 class="section-title">Term Of Service</h1>
            <div class="container">
                <p>Duis laoreet diam at nunc tempor, at venenatis urna aliquam. Mauris a felis eget massa scelerisque cursus. Aliquam faucibus suscipit elit convallis suscipit. Nam at egestas velit. Duis interdum libero ut mi eleifend finibus. Curabitur
                    faucibus id quam ut dictum. Maecenas imperdiet, sem id accumsan sollicitudin, augue lectus scelerisque purus, sed maximus eros quam rhoncus nibh. Quisque ornare efficitur neque, ut faucibus purus rhoncus vel. In leo neque, consequat
                    ac quam ullamcorper, volutpat molestie nisi.
                </p>
                <br>
                <p>Curabitur eget libero ante. Mauris vitae orci et nulla tincidunt sollicitudin ut et velit. Morbi nulla massa, viverra et justo vitae, ornare tempor dui. Morbi vitae imperdiet elit. Aliquam erat volutpat. Sed nec scelerisque arcu. Vivamus
                    lacinia sem libero, a blandit sapien maximus ac. Integer pulvinar ipsum sed pharetra sodales. Etiam vehicula sapien vehicula congue varius. Pellentesque vulputate tellus finibus, dapibus tellus nec, ullamcorper odio. Donec eu metus
                    rutrum, sollicitudin tortor ut, ullamcorper justo.
                </p>
                <br>
                <p>Quisque posuere semper ante eu euismod. Suspendisse ullamcorper gravida felis at facilisis. Donec blandit quam in tempus semper. Nam lorem quam, aliquam eget risus vitae, sollicitudin hendrerit lacus. Quisque et efficitur dolor. Maecenas
                    mi dolor, viverra sit amet fringilla a, ornare eget arcu. Suspendisse interdum sed ante lobortis facilisis. Sed bibendum et ligula a iaculis. Aenean ornare cursus arcu, sollicitudin condimentum odio rutrum vel. Integer ac augue non
                    justo elementum accumsan et at arcu. Etiam tincidunt sit amet massa in auctor. Vestibulum fermentum, nunc et vulputate dapibus, ipsum erat semper elit, sed lacinia nisi justo et augue.
                </p>
            </div>
        </main>
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

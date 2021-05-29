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
    <title>Nike Copyright | Online Shopping Mall</title>
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


<body class="store-copyright">
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
        <main>
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
            <!--Contact-->
            <main>
                <h1 class="section-title">Copyright</h1>
                <div class="container">
                    <p>In erat augue, hendrerit vitae quam quis, dictum congue libero. Fusce enim dolor, sollicitudin id porttitor quis, posuere non justo. Vestibulum sollicitudin tincidunt velit, vitae maximus arcu facilisis et. Ut tincidunt accumsan metus
                        et tincidunt. Curabitur porta vulputate molestie. Nullam venenatis, velit in tincidunt condimentum, tortor elit malesuada justo, eu dignissim risus tellus ut sem. Donec vel elit dignissim, aliquet quam non, lacinia justo. Curabitur
                        tincidunt dapibus nisi mattis molestie.
                    </p>
                    <br>
                    <p>Cras scelerisque, arcu ac egestas iaculis, justo felis maximus neque, vitae aliquet lorem felis at quam. Suspendisse semper nulla ac consectetur eleifend. Ut ut urna tristique, aliquam eros vitae, pretium neque. Sed malesuada lorem
                        et est consectetur aliquam. Vestibulum facilisis purus ut gravida laoreet. Maecenas nisl odio, pretium ut libero vitae, commodo porttitor elit. Cras non tortor eu purus auctor mollis. Nulla leo mi, sollicitudin in justo tempus,
                        dapibus condimentum nibh. Ut consequat quis nulla id malesuada. Pellentesque purus nisl, iaculis et tincidunt at, aliquet at eros. Duis vulputate accumsan sapien at varius. Aliquam id orci nec erat vulputate ultrices ut sed tellus.
                        Sed ut sagittis est.
                    </p>
                    <br>
                    <p>Quisque efficitur at diam eget fringilla. Phasellus placerat sagittis metus, ac sollicitudin ex convallis consectetur. Etiam cursus ultricies ex sed congue. Maecenas ullamcorper tincidunt lorem, in molestie lorem vehicula vitae. Suspendisse
                        at sagittis sapien. Vestibulum vel imperdiet eros. Cras tempor porta ligula, imperdiet rutrum neque auctor et. Vestibulum at suscipit tellus. Etiam eget ultrices sem, non efficitur sem. Donec ac pretium massa, ac viverra tortor.
                        Etiam sit amet dictum libero, id eleifend velit. Nulla sodales dignissim gravida. Sed ullamcorper nec quam at cursus. Quisque eu leo massa. Integer varius tempus leo, id dignissim est suscipit ac.
                    </p>
                    <br>
                    <p>Praesent varius laoreet enim at faucibus. Curabitur vestibulum semper magna, ac varius dui efficitur eget. Quisque dolor augue, egestas vel ex vitae, maximus molestie urna. Donec mollis, nisi ac mattis lacinia, augue risus fringilla
                        tortor, at ullamcorper erat mauris ut nibh. Aenean urna metus, pellentesque finibus sodales eget, malesuada et lacus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
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
        </main>
    </div>

</body>
<script type="text/javascript" src="../effects.js"></script>
</html>

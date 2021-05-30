<?php
 if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_POST['logout1'])) {
    unset($_POST);
    $_SESSION['validate'] = false;
  }
if($_SESSION['validate']=== TRUE){
    echo"<script>document.querySelectorAll('.logout').forEach((button) => { button.style.display = 'inline-block' })
    document.querySelectorAll('a[href='myaccount.php']:not(a[onclick='logOut()'])').forEach((button) => {
        button.removeAttribute('href');
        button.setAttribute('href', 'logged-in.php')</script>";
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
             <li class="logout text-bold"><form method="POST"><input type="submit" name="logout1" value="Log Out"></form></li>
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
                            <li class="logout"><form method="POST"><input type="submit" name="logout1" value="Log Out"></form></li>
                        </ul>
                        <a href="order-placement.php"><img class="cart-icon" src="images/cart.png" alt="cart"></a>
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
                    <form action="" method="post">
                        <input type="submit" name="letter" value="A">
                        <input type="submit" name="letter" value="B">
                        <input type="submit" name="letter" value="C">
                        <input type="submit" name="letter" value="D">
                        <input type="submit" name="letter" value="E">
                        <input type="submit" name="letter" value="F">
                        <input type="submit" name="letter" value="G">
                        <input type="submit" name="letter" value="H">
                        <input type="submit" name="letter" value="I">
                        <input type="submit" name="letter" value="J">
                        <input type="submit" name="letter" value="K">
                        <input type="submit" name="letter" value="L">
                        <input type="submit" name="letter" value="M">
                        <input type="submit" name="letter" value="N">
                        <input type="submit" name="letter" value="O">
                        <input type="submit" name="letter" value="P">
                        <input type="submit" name="letter" value="Q">
                        <input type="submit" name="letter" value="R">
                        <input type="submit" name="letter" value="S">
                        <input type="submit" name="letter" value="T">
                        <input type="submit" name="letter" value="U">
                        <input type="submit" name="letter" value="V">
                        <input type="submit" name="letter" value="W">
                        <input type="submit" name="letter" value="X">
                        <input type="submit" name="letter" value="Y">
                        <input type="submit" name="letter" value="Z">
                    </form>
                </h2>
            </div>
            <?php
            $letter = $_POST['letter'];
            $file = 'CSV_files/stores.txt';
            $store_csv_file = fopen($file, "r");
            $stores_array = array();
            while ($line = fgetcsv($store_csv_file, 1000)) {
                if (isset($letter)){
                    $compare = stripos($line[1],$letter);
                    if ($compare===0){
                        $stores_array[] = $line[1];                     
                    }
                }
            }    
            $stores_array = array_slice($stores_array, 1, count($stores_array));
            $alphabet_letter = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
            $link_image = ['images/adidas.jpg','images/babylon.jpg','images/chanel.jpg','images/drmartens.jpg',
                           'images/ecco.jpg','images/footlocker.jpg','images/givenchy.jpg','images/harrolds.jpg',
                           'images/indigo.jpg','images/jbhifi.jpg','images/kookai.jpg','images/lg-logo.jpg',
                           'images/mjbale.jpg','images/nike.jpg','images/offwhite.jpg','images/pacson.jpg',
                           'images/qatar.jpg','images/reebok.jpg','images/saintlaurent.jpg','images/tde.jpg',
                           'images/uniqlo.jpg','images/victoria.jpg','images/western.jpg','images/xfinity.jpg',
                           'images/yankee_candle.jpg', 'images/zara.jpg'];
            $image_select = '';
            for ($i = 0;$i<count($alphabet_letter);$i+=1){
                if ($letter==strtoupper($alphabet_letter[$i])){
                    $image_select = $link_image[$i];
                }
            }
            sort($stores_array);
            echo "<div class='container'>";
            echo "<div class='text-start' class='row'>
                    <h1 id='$letter'>$letter</h1>
                </div>";
            echo "<div class='row'>";
            function store_display_by_name($store, $image){
                echo "<a class='store-thumbnail' href='store/store-home.php'>
                        <figure class='col-20 hover-shadow'>
                            <img src=$image alt='$store'>
                            <figcaption class='text-center'>
                                <a href='store/store-home.php' class='text-medium text-bold'>$store</a>
                            </figcaption>
                        </figure>
                </a>";
            }
            for ($i = 0;$i<count($stores_array);$i+=1){
                store_display_by_name($stores_array[$i], $image_select);
            }
            echo "</div>";
            ?>
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
                            <li class="logout"><form method="POST"><input type="submit" name="logout1" value="Log Out"></form></li>
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

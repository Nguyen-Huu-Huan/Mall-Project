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

        <!----List of STORES--->
        <section class="browse-by-name">

            <div class="container">
                <h2 class="section-title" id="top">Stores by names</h2>

                <h2 class="text-center">
                    <form action="" method="post">
                        <input type="submit" value="A">
                        <input type="submit" value="B">
                        <input type="submit" value="C">
                        <input type="submit" value="D">
                        <input type="submit" value="E">
                        <input type="submit" name="bla" value="F">
                        <input type="submit" value="G">
                        <input type="submit" value="H">
                        <input type="submit" value="I">
                        <input type="submit" value="J">
                        <input type="submit" value="K">
                        <input type="submit" value="L">
                        <input type="submit" value="M">
                        <input type="submit" value="N">
                        <input type="submit" value="N">
                        <input type="submit" value="O">
                        <input type="submit" value="P">
                        <input type="submit" value="Q">
                        <input type="submit" value="R">
                        <input type="submit" value="S">
                        <input type="submit" value="T">
                        <input type="submit" value="U">
                        <input type="submit" value="V">
                        <input type="submit" value="W">
                        <input type="submit" value="X">
                        <input type="submit" value="Y">
                        <input type="submit" value="Z">
                    </form>
                </h2>
            </div>
            <?php
            $letter = $_POST['bla'];
            echo $letter;
            $file = 'CSV_files/stores.txt';
            $store_csv_file = fopen($file, "r");
            $stores_array = array();
            while ($line = fgetcsv($store_csv_file, 1000)) {
                if (isset($letter)){
                    if ((strpos($line[1], strtoupper($letter))==0)||(strpos($line[1], strtolower($letter))==0)){
//                         $stores_array[] = $line[1];
//                         echo $line[1].nl2br("\n");
                        echo strpos($line[1], strtoupper($letter));
                    }
                }
//                 echo $line[1].nl2br("\n");
            }
//             sort($stores_array);
//             print_r($stores_array);
//             echo "<div class='container'>";
//             echo "<div class='text-start' class='row'>
//                     <h1 id='$letter'>$letter</h1>
//                 </div>";
//             echo "<div class='row'>";
//             function store_display_by_name(){
//                 echo "<a class='store-thumbnail' href='store/store-home.php'>
//                         <figure class='col-20 hover-shadow'>
//                             <img src='images/adidas.jpg' alt='adidas'>
//                             <figcaption class='text-center'>
//                                 <a href='store/store-home.php' class='text-medium text-bold' alt='adidas'>BlaBla</a>
//                             </figcaption>
//                         </figure>
//                 </a>";
//             }
//             echo "</div>";
            ?>
            <div class="container">
                <div class="text-start" class="row">
                    <h1 id="A">A</h1>
                </div>
                <div class="row">
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/adidas.jpg" alt="adidas">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="adidas">Adidas</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/adidas.jpg" alt="adidas">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="adidas">Adidas</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/adidas.jpg" alt="adidas">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="adidas">Adidas</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/adidas.jpg" alt="adidas">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="adidas">Adidas</a>
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
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/babylon.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="babylon">Babylon</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/babylon.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="babylon">Babylon</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/babylon.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="babylon">Babylon</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/babylon.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="babylon">Babylon</a>
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
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/chanel.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="chanel">Chanel</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/chanel.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="chanel">Chanel</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/chanel.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="chanel">Chanel</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/chanel.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="chanel">Chanel</a>
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
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/drmartens.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="drmartens">Dr.Martens</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/drmartens.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="drmartens">Dr.Martens</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/drmartens.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="drmartens">Dr.Martens</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/drmartens.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="drmartens">Dr.Martens</a>
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
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/ecco.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="ecco">Ecco</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/ecco.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="ecco">Ecco</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/ecco.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="ecco">Ecco</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/ecco.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="ecco">Ecco</a>
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
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/footlocker.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="footlocker">Footlocker</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/footlocker.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="footlocker">Footlocker</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/footlocker.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="footlocker">Footlocker</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/footlocker.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="footlocker">Footlocker</a>
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
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/givenchy.jpg" alt="givenchy">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="givenchy">Givenchy</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/givenchy.jpg" alt="givenchy">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="givenchy">Givenchy</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/givenchy.jpg" alt="givenchy">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="givenchy">Givenchy</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/givenchy.jpg" alt="givenchy">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="givenchy">Givenchy</a>
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
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/harrolds.jpg" alt="harrolds">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="harrolds">Harrolds</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/harrolds.jpg" alt="harrolds">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="harrolds">Harrolds</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/harrolds.jpg" alt="harrolds">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="harrolds">Harrolds</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/harrolds.jpg" alt="harrolds">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="harrolds">Harrolds</a>
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
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/jbhifi.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="jbhifi">JB Hi-Fi</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/jbhifi.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="jbhifi">JB Hi-Fi</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/jbhifi.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="jbhifi">JB Hi-Fi</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/jbhifi.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="jbhifi">JB Hi-Fi</a>
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
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/kookai.jpg" alt="kookai">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="kookai">Kookai</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/kookai.jpg" alt="kookai">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="kookai">Kookai</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/kookai.jpg" alt="kookai">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="kookai">Kookai</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/kookai.jpg" alt="kookai">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="kookai">Kookai</a>
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
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/lg-logo.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="lg">LG</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/lg-logo.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="lg">LG</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/lg-logo.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="lg">LG</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/lg-logo.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="lg">LG</a>
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
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/mjbale.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="mjbale">M.J.Bale</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/mjbale.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="mjbale">M.J.Bale</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/mjbale.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="mjbale">M.J.Bale</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/mjbale.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="mjbale">M.J.Bale</a>
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
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/nike.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="nike">Nike</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/nike.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="nike">Nike</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/nike.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="nike">Nike</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/nike.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="nike">Nike</a>
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
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/offwhite.jpg" alt="off-white">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="offwhite">Off-White</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/offwhite.jpg" alt="off-white">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="offwhite">Off-White</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/offwhite.jpg" alt="off-white">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="offwhite">Off-White</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/offwhite.jpg" alt="off-white">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="offwhite">Off-White</a>
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
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/saintlaurent.jpg" alt="saint laurent">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="saintlaurent">Saint Laurent</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/saintlaurent.jpg" alt="saint laurent">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="saintlaurent">Saint Laurent</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/saintlaurent.jpg" alt="saint laurent">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="saintlaurent">Saint Laurent</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/saintlaurent.jpg" alt="saint laurent">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="saintlaurent">Saint Laurent</a>
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
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/tde.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="tde">tde.</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/tde.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="tde">tde.</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/tde.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="tde">tde.</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/tde.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="tde">tde.</a>
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
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/uniqlo.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="uniqlo">Uniqlo</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/uniqlo.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="uniqlo">Uniqlo</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/uniqlo.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="uniqlo">Uniqlo</a>
                            </figcaption>
                        </figure>
                    </a>
                    <a class="store-thumbnail" href="store/store-home.php">
                        <figure class="col-20 hover-shadow">
                            <img src="images/uniqlo.jpg">
                            <figcaption class="text-center">
                                <a href="store/store-home.php" class="text-medium text-bold" alt="uniqlo">Uniqlo</a>
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
</body>
<script type="text/javascript" src="effects.js"></script>

</html>

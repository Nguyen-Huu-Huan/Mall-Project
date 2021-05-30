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
    <title>Nike | Online Shopping Mall</title>
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

<body class="store-home" onload="store_file()">
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
            <?php 
                $file = '../CSV_files/products.txt';
                $product_csv_file = fopen($file, "r");
                $products_array = array();
                $feature_products = array();
                $created_time = array();
                $new_products = array();
                $product_array[] = fgetcsv($product_csv_file, 1000);
                while ($line = fgetcsv($product_csv_file, 1000)) {
                    if ($line[count($line)-1]=='TRUE'){
                        $feature_products[] = $line;
                    }
                    $time_str = $line[3];
                    $time_str = str_replace("Z","",$time_str);
                    $time_conversion = strtotime($time_str);
                    $created_time[$time_conversion] = $line;
                    $stores_array[] = $line;
                }
                ksort($created_time);
                $created_time = array_slice($created_time,-5);
                fclose($product_csv_file);
                # Function to display each of the 5 most recently added item with its image
                function new_products_display($item, $image){
                    echo "
                    <div class='col-17'>
                        <a href='product-details-airforceone.php'>
                            <div class='new-products-wrapper hover-shadow'>
                                <figure class='new-products-img-wrapper'>
                                    <img class='new-products-img' src=$image alt='$item[1]'>
                                </figure>
                                <p class='text-center text-small color-gray'>$item[1]</p>
                                <h2 class='text-center text-medium'>$item[1]</h2>
                                <h3 class='text-center text-normal color-red'>$$item[2]</h3>
                            </div>
                        </a>
                    </div>";
                }
                # An array with new products' image links
                $new_product_images = ['../images/kits.jpg','../images/red_lobster.jpg','../images/solprole.png','../images/starbucks.jpg','../images/doritos.jpg'];
                echo "            
                <section class='new-products'>
                    <div class='medium-container'>
                        <h2 class='section-title'>New Products</h2>
                        <div class='row'>";
                for ($i = 0; $i<count($created_time); $i+=1){
                    new_products_display($created_time[$i], $new_product_images[$i]);
                }
                echo "
                        </div>
                    </div>
                </section>";
                $feature_product_images = [];
                function feature_products_display($item, $image){
                    echo "
                        <div class='thumbnail-wrapper-products'>
                            <div class='row'>
                                <div class='col-80'>
                                    <img src=$image class='offer-img'>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-90'>
                                    <h1 class='text-medium'>$item</h1>
                                    <p>There is a Dunk for everyone. Our latest drop of new and old-school colors are coming soon.</p>
                                    <a href='product-details-dunklowblack.php' class='btn btnnike'>See details &#10147; </a>
                                </div>
                            </div>
                        </div>";
                }
                echo "<h2 class='section-title'>Featured Products</h2>";
                echo "<div class='container'>";
                echo "<div class='nowrap scroll-products'>";
                for ($i = 0; $i<count($feature_products); $i+=1){
                    feature_products_display($feature_products[$i][1], $new_product_images[$i%5]);
                }
                echo "</div>";
                echo "</div>";
                echo "<a href='#' id='display' onclick='see_products()'>Click here to see all products</a>";
                echo "<a href='#' id='collapse' onclick='product_disappear()' style=\"display:none\">Collapse table</a>";
                echo "<script type='text/javascript'>function see_products(){
                    document.querySelector('.see_all').style.display='block';
                    document.querySelector('#collapse').style.display='block';
                    document.querySelector('#display').style.display='none';
                    document.querySelector('#collapse').addEventListener(\"click\", function(event){
                        event.preventDefault()});
                }</script>";
                echo "<script type='text/javascript'>function product_disappear(){
                    document.querySelector('.see_all').style.display='none';
                    document.querySelector('#collapse').style.display='none';
                    document.querySelector('#display').style. display='block';
                    document.querySelector('#display').addEventListener(\"click\", function(event){
                        event.preventDefault()});
                }</script>";
                echo "<table cellspacing='20' class='small-container see_all' style=\"display:none\">";
                for ($i = 0; $i<count($feature_products);$i+=5){
                    echo "<tr style='text-align: center;'>";
                    for ($j = 0; $j < 5; $j += 1){
                        if ($i+$j<count($feature_products)){
                            $cell = $feature_products[$i+$j][1];
                            echo "<td>$cell</td>";
                        }
                    }
                    echo "</tr>";
                }
                echo "</table>";

            ?>
        
        </main>
        <footer class="footer">
            <div class="container">
                <div class="row">
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
    <script type="text/javascript" src="../effects.js"></script>
</body>
</html>

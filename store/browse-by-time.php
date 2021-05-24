<?php session_start()?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike Browse By time | Online Shopping Mall</title>
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

<body class="store-browse-by-time">
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
    <a href="../index.html" class="back-to-top btn">&#9664; Back to Mallux</a>
    <input type="checkbox" id="hamburger">
    <label for="hamburger" class="hamburger"><span class="text-bold close-hamburger color-red">X</span><img src="../images/mobile-nav-black.svg"></label>
    <nav class="mobile-menu">
        <ul>
            <li><a href="store-home.html" class="text-bold">Home</a></li>
            <li><a href="about-us.html" class="text-bold">About us</a></li>
            <li>
                <div class="mobile-menu-dropdown">
                    <input type="checkbox" class="mobile-menu-dropdown-trigger" id="menu-drop">
                    <label for="menu-drop" class="text-bold">Products &#8628;</label>
                    <div class="mobile-menu-dropdown-content">
                        <ul>
                            <li><a href="browse-by-category.html" class="text-bold">Browse Products by Category</a></li>
                            <li><a href="browse-by-time.html" class="text-bold">Browse Products by Created Time</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li><a class="text-bold" href="contact-nike.html">Contact</a></li>
            <li>
                <a href="../order-placement.html"><img class="mobile-cart-icon" src="../images/cart.png" alt="cart"></a>
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
                                <li><a href="store-home.html">Home</a></li>
                                <li><a href="about-us.html">About us</a></li>
                                <li>
                                    <div class="dropdown">
                                        <a>Products &#8628;</a>
                                        <div class="dropdown-content">
                                            <a href="browse-by-category.html">Browse Products by Category</a>
                                            <a href="browse-by-time.html">Browse Products by Created Time</a>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="contact-nike.html">Contact</a></li>
                            </ul>
                            <a href="../order-placement.html"><img alt="cart" class="cart-icon" src="../images/cart.png"></a>
                        </nav>
                    </div>
                </div>
            </header>

            <!----NEW PRODUCTS--->
            <section class="new-products">
                <div class="container">
                    <h2 class="section-title">Products</h2>

                    <div class="small-container">
                        <h2 class="text-normal">Browse By Created Time</h2>
                        <form action="" method='POST' class='row'>
                            <select name="sort_order" class='col-70' required>
                                <option disabled selected value='not_selected'>Select Order</option>
                                <option value='newest_first'>Newest First</input></option>
                                <option value='oldest_first'>Oldest First</option>
                            </select>
                            <input type="submit" name="" class='col-10 text-big btn hover-shadow img' id='order-button'>
                        </form>
                    </div>

                <?php 
                $file = '../CSV_files/products.txt';
                $product_csv_file = fopen($file, "r");
                $products_array = array();
                $created_time = array();
                $new_products = array();
                $product_array[] = fgetcsv($product_csv_file, 1000);
                while ($line = fgetcsv($product_csv_file, 1000)) {
                    $time_str = $line[3];
                    $time_str = str_replace("Z","",$time_str);
                    $time_conversion = strtotime($time_str);
                    $created_time[$time_conversion] = $line;
                    $stores_array[] = $line;
                }
                if ((isset($_SESSION['sort']))&&($_SESSION['sort']=='newest')){
                    ksort($created_time);
                }else if (($_SESSION['sort'])&&($_SESSION['sort']=='oldest')){
                    krsort($created_time);
                }
                $created_time = array_slice($created_time,-count($created_time));
                function new_products_display($item){
                    $formatted_time = str_replace("Z","",$item[3]);
                    echo "
                    <div class='col-40'>
                        <div class='new-products-wrapper hover-shadow'>
                            <figure class='new-products-img-wrapper'>
                                <a href='product-details-dunklowblack.html'><img class='new-products-img' src='../images/pantnike.png' alt='Black Pants'></a>
                            </figure>
                            <p class='text-center text-bitsmall color-gray'>$formatted_time</p>
                            <a href='product-details-dunklowblack.html'>
                                <h2 class='text-medium'>$item[1]</h2>
                            </a>
                            <h3 class='text-normal color-red'>$$item[2]</h3>
                            <p class='text-small'>Made from dense, brushed-back fleece in a loose fit, warm coverage with chic pin.</p>
                        </div>
                    </div>";
                }
                $new_product_images = ['../images/kits.jpg','../images/red_lobster.jpg','../images/solprole.png','../images/starbucks.jpg','../images/doritos.jpg'];
                echo "<div class='small-container'>";
                if (isset($_POST['sort_order'])){
                    $_SESSION['start_display_position'] = 0;
                    if ($_POST["sort_order"]=='newest_first'){
                        $_SESSION['sort'] = 'newest';
                    }else if ($_POST["sort_order"]=='oldest_first'){
                        $_SESSION['sort'] = 'oldest';
                    }
                    echo "<div class='row'>";
                    new_products_display($created_time[0], $new_product_images[1]);
                    new_products_display($created_time[1], $new_product_images[1]);
                    echo "</div>";
                    echo "<form action='' method='POST'><input type='submit' name='next' id='myAnchor' value='See more'></form>";
                }else{
                    $_SESSION['sort'] = '';
                }
                if (isset($_POST['next'])||isset($_POST['previous'])){
                    $i = $_SESSION['start_display_position']+2;
                    $k = $_SESSION['start_display_position']-2;
                    if (isset($_POST['previous'])){
                        $_SESSION['start_display_position'] = $k;
                    }else if (isset($_POST['next'])){
                        $_SESSION['start_display_position'] = $i;
                    }
                    if (($_SESSION['start_display_position']>=0)&&($_SESSION['start_display_position']<=998)){
                        echo "<h1>".$_SESSION['start_display_position']."</h1>";
                        if ($_SESSION['start_display_position']>0){
                            echo "<form action='' method='POST'><input type='submit' id='myAnchor' name='previous' value='See previous'></form>";
                        }
                        echo "<div class='row'>";
                        for ($j = 0; $j<2;$j+=1){
                            if (isset($_POST['previous'])){
                                if (($k+$j)<count($created_time)){
                                    if (isset($_SESSION['sort'])){
                                        if ($_SESSION['sort']=='oldest'){
                                            array_reverse($created_time);
                                        }
                                    }
                                    new_products_display($created_time[$k+$j]);
                                }
                            }else if (isset($_POST['next'])){
                                if (($i+$j)<count($created_time)){
                                    if (isset($_SESSION['sort'])){
                                        if ($_SESSION['sort']=='oldest'){
                                            array_reverse($created_time);
                                        }
                                    }
                                    new_products_display($created_time[$i+$j]);
                                }
                            }
                        }
                        echo "</div>";
                        if ($_SESSION['start_display_position']<998){
                            echo "<form action='' method='POST'><input type='submit' id='myAnchor' name='next' value='See more'></form>";
                        }
                        echo "</div>";
                    }
                }
                
                echo "</div>";
                // echo '<script type="text/javascript">';
                // echo "document.getElementById('myAnchor').addEventListener('click', function(event){
                //     console.log('start_display_position');
                //   });";
                
                // echo '</script>';
                // if (($_SESSION["sort"]=='newest')||($_SESSION["sort"]=='oldest')){
                    echo "<div class='tiny-container'>";
                    echo "<table rules='all' class='text-center'>";
                    echo "<tr>";
                    echo "<th>Index</th><th>ID</th><th>Name</th><th>Price</th><th>Created time</th><th>Store ID</th><th>Featured in store</th><th>Featured in mall</th>";
                    echo "</tr>";
                    foreach ($created_time as $key => $value){
                        echo "<tr>";
                        echo "<td>$key</td>";
                        for($i = 0 ; $i<count($value);$i+=1){
                            if ($key==$_SESSION['start_display_position']){
                                // $end_position = $i+1;
                                echo "<td>";
                                echo "<strong style='color:red;'>".$value[$i].str_repeat('&nbsp',3)."</strong>";
                                echo "</td>";
                                // echo "<strong style='color:red;'>".$end_position.str_repeat('&nbsp',3)."</strong>";
                            }else{
                                echo "<td>";
                                echo $value[$i];
                                echo "</td>";
                            }
                        }
                        echo "</tr>";

                    }
                    echo "</table>";

                    echo "</div>";
                // }

            ?>
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
                                <li><a href="store-home.html">Home</a></li>
                                <li><a href="term-of-service.html">Term of Service</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="copyright.html">Copyright</a></li>
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
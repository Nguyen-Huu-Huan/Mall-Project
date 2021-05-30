<?php
# Don't delete, PHP01
if (file_exists('install.php') === TRUE) {
    die('Error, the file install.php is still exists');
}
?>
<!DOCTYPE html>
<html lang="en">

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


<body class="index" onload="index_file()">
    <div class="cookie ">
        <div class="container ">
            <h1 class="text-extras text-center ">Cookie Consent</h1>
        </div>
        <div class="container ">
            <p class="text-big text-center ">Please consent to our cookie policy</p>
        </div>
        <div class="container row ">
            <input type="submit " name=" " value="Agree " class="btn col-40 agree text-medium text-center" onclick="myFunction() ">
            <a href="# " class="col-30 learn-more ">
                <p class="text-big text-medium ">Learn more</p>
            </a>
        </div>
    </div>
    <input type="checkbox" id="hamburger">
    <label for="hamburger" class="hamburger"><span class="text-bold close-hamburger color-red ">X</span><img src="images/mobile-nav.svg "></label>
    <nav class="mobile-menu ">
        <ul>
            <li><a class="text-bold " href="index.php ">Home</a></li>
            <li><a class="text-bold " href="about-us.php ">About us</a></li>
            <li><a class="text-bold " href="fees.php ">Fees</a></li>
            <li><a class="text-bold " href="myaccount.php ">My Account</a></li>
            <li>
                <div class="mobile-menu-dropdown ">
                    <input type="checkbox " class="mobile-menu-dropdown-trigger " id="menu-drop ">
                    <label for="menu-drop " class="text-bold ">Browse Stores &#8628;</label>
                    <div class="mobile-menu-dropdown-content ">
                        <ul>
                            <li><a class="text-bold " href="browse-by-name.php ">Browse stores by names</a></li>
                        </ul>
                        <div class="mobile-menu-dropdown ">
                            <ul>
                                <li><input type="checkbox " class="mobile-menu-dropdown-trigger " id="menu-cate ">
                                    <label for="menu-cate " class="text-thin text-bold ">Browse store by category &#8628;</label>

                                    <div id="mobile-menu-cate " class="mobile-menu-dropdown-content ">
                                        <ul>
                                            <li><a href="fashion.php ">Fashion</a></li>
                                            <li><a href="electronics.php ">Electronics and technology</a></li>
                                            <li><a href="beauty.php ">Beauty</a></li>
                                        </ul>

                                    </div>
                                </li>
                            </ul>


                        </div>

                    </div>
                </div>
            </li>
            <li><a class="text-bold " href="faq.php ">FAQs</a></li>
            <li><a class="text-bold " href="contact.php ">Contact</a></li>
            <li class="logout text-bold "><a href="myaccount.php " onclick="logOut() ">Log out</a></li>
            <li>
                <a href="order-placement.php "><img class="mobile-cart-icon " src="images/cart.png " alt="cart "></a>
            </li>
            <br>
            <li><a href="term-of-service.php ">Term of Service</a></li>
            <li><a href="privacy-policy.php ">Privacy Policy</a></li>
            <li><a href="copyright.php ">Copyright</a></li>
        </ul>

    </nav>
    <div class="mobile-menu-opened ">

        <main>
            <header class="bg-gradient-light ">
                <div class="container ">
                    <div class="row ">
                        <div class="col-30 ">
                            <a href="index.php "><img class="header-logo " src="images/logo.png " alt="mallux logo "></a>
                        </div>
                        <nav class="col-70 menu ">
                            <ul>
                                <li><a href="index.php ">Home</a></li>
                                <li><a href="about-us.php ">About us</a></li>
                                <li><a href="fees.php ">Fees</a></li>
                                <li><a href="myaccount.php ">My Account</a></li>
                                <li>
                                    <div class="dropdown ">
                                        <a>Browse &#8628;</a>
                                        <div class="dropdown-content ">
                                            <a href="browse-by-name.php ">Browse stores by names</a>
                                            <div class="dropdown ">
                                                <a>Browse store by category &#8628;</a>
                                                <div class="dropdown-content dropdown-category ">
                                                    <a href="fashion.php ">Fashion</a>
                                                    <a href="electronics.php ">Electronics and technology</a>
                                                    <a href="beauty.php ">Beauty</a>
                                                </div>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li><a href="faq.php ">FAQs</a></li>
                                <li><a href="contact.php ">Contact</a></li>
                                <li class="logout "><a href="myaccount.php " onclick="logOut() ">Log out</a></li>
                            </ul>
                            <a href="order-placement.php "><img class="cart-icon " src="images/cart.png " alt="cart "></a>
                        </nav>
                        <div class="res-index-space1 col-70 "></div>
                    </div>

                    <div class="row ">
                        <div class="header-text col-50 ">
                            <h1><span class="experience ">EXPERIENCE</span><br>
                                <span class="text-thin ">BETTER SHOPPING</span>
                            </h1>
                            <p class="color-gray ">Experience going to the mall without "GOING " to the mall</p>
                            <a href="browse-by-name.php " class="btn ">Browse from hundreds of stores &#10148;</a>
                        </div>
                        <div class="hero-image-container col-50 ">
                            <img class="hero-image " src="images/image1.png ">
                        </div>
                    </div>
                </div>
            </header>

            <!----FEATURED STORES--->
            <section class="new-stores ">
                <h2 class="section-title color-purple">Featured Stores</h2>
                <?php
                $file = 'CSV_files/stores.csv';
                $store_csv_file = fopen($file, "r");
                $created_time = array();
                $product_array[] = fgetcsv($store_csv_file, 1000);
                while ($line = fgetcsv($store_csv_file, 1000)) {
                    if ($line[4] == "TRUE") {
                        $time_str = $line[3];
                        $time_str = str_replace("Z", "", $time_str);
                        $time_conversion = strtotime($time_str);
                        $created_time[$time_conversion] = $line;
                    }
                }
                krsort($created_time);
                if (sizeof($created_time) >= 10) {
                    $created_time = array_slice($created_time, 0, 10);
                }
                function featured_stores_display($item)
                {
                    echo "
                    <div class='thumbnail-wrapper-stores'>
                        <a href='store/store-home.php'>
                            <figure class='hover-shadow'>
                                <img src='images/zara.jpg' alt='givenchy'>
                                <figcaption class='text-center'>
                                    <a href='store/store-home.php' class='text-medium text-bold color-purple'>$item[1]</a>
                                </figcaption>
                            </figure>
                        </a>
                    </div>";
                }
                echo "                
                <div class='container'>
                    <div class='nowrap scroll-stores'>";
                for ($i = 0; $i < count($created_time); $i += 1) {
                    featured_stores_display($created_time[$i]);
                }
                echo "</div>
                </div>";
                echo "<a href='#' id='display' onclick='see_products()'>Click here to see all stores</a>";
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
                echo "<div class='tiny-container see_all' style=\"display:none;\">";
                echo "<table rules='all' class='text-center'>";
                echo "<tr>";
                echo "<th>Products' names</th><th>Created time</th>";
                echo "</tr>";
                foreach ($created_time as $stores) {
                    echo "<tr>";
                    echo "<td>$stores[1]</td>";
                    echo "<td>$stores[3]</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
                ?>
            </section>

            <!----FEATURED PRODUCTS--->
            <section class="featured-products ">
                <h2 class="section-title color-purple">Featured Products</h2>
                <?php
                $file = 'CSV_files/products.csv';
                $store_csv_file = fopen($file, "r");
                $created_time = array();
                $product_array[] = fgetcsv($store_csv_file, 1000);
                while ($line = fgetcsv($store_csv_file, 1000)) {
                    if ($line[5] == "TRUE") {
                        $time_str = $line[3];
                        $time_str = str_replace("Z", "", $time_str);
                        $time_conversion = strtotime($time_str);
                        $created_time[$time_conversion] = $line;
                    }
                }
                krsort($created_time);
                if (sizeof($created_time) >= 10) {
                    $created_time = array_slice($created_time, 0, 10);
                }
                function featured_products_display($item)
                {
                    echo "
                    <div class='thumbnail-wrapper-products hover-shadow '>
                            <figure class='new-products-img-wrapper '>
                                <a href='store/store-home.php '><img class='new-products-brand hover-shadow ' src='images/nike.jpg ' id='brand-hover '></a>
                                <a href='store/product-details-dunklowblack.php '><img class='new-products-img ' src='images/shirtnike1.png ' alt='Red Shirt '></a>
                            </figure>
                            <a href='store/store-home.php ' class='text-center text-small color-gray '>Store $item[4]</a>
                            <a href='store/product-details-dunklowblack.php '>
                                <h2 class='text-medium color-purple'>$item[1]</h2>
                            </a>
                            <h3 class='text-normal color-red '>$$item[2]</h3>
                        </div>";
                }
                echo "                
                <div class='container'>
                    <div class='nowrap scroll-products1'>";
                for ($i = 0; $i < count($created_time); $i += 1) {
                    featured_products_display($created_time[$i]);
                }
                ?>
            </section>
            <!----NEW STORES--->
            <section class="new-stores ">
                <h2 class="section-title ">New Stores</h2>
                <?php
                $file = 'CSV_files/stores.csv';
                $store_csv_file = fopen($file, "r");
                $created_time = array();
                $product_array[] = fgetcsv($store_csv_file, 1000);
                while ($line = fgetcsv($store_csv_file, 1000)) {
                    $time_str = $line[3];
                    $time_str = str_replace("Z", "", $time_str);
                    $time_conversion = strtotime($time_str);
                    $created_time[$time_conversion] = $line;
                }
                krsort($created_time);
                if (sizeof($created_time) >= 10) {
                    $created_time = array_slice($created_time, 0, 10);
                }
                function new_stores_display($item)
                {
                    echo "
                    <div class='thumbnail-wrapper-stores'>
                        <a href='store/store-home.php'>
                            <figure class='hover-shadow'>
                                <img src='images/givenchy.jpg' alt='givenchy'>
                                <figcaption class='text-center'>
                                    <a href='store/store-home.php' class='text-medium text-bold'>$item[1]</a>
                                </figcaption>
                            </figure>
                        </a>
                    </div>";
                }
                echo "                
                <div class='container'>
                    <div class='nowrap scroll-stores1'>";
                for ($i = 0; $i < count($created_time); $i += 1) {
                    new_stores_display($created_time[$i]);
                }
                echo "</div>
                </div>";
                echo "<a href='#' id='display' onclick='see_products()'>Click here to see all stores</a>";
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
                echo "<div class='tiny-container see_all' style=\"display:none;\">";
                echo "<table rules='all' class='text-center'>";
                echo "<tr>";
                echo "<th>Products' names</th><th>Created time</th>";
                echo "</tr>";
                foreach ($created_time as $stores) {
                    echo "<tr>";
                    echo "<td>$stores[1]</td>";
                    echo "<td>$stores[3]</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
                ?>
            </section>


            <!----NEW PRODUCTS--->
            <section class="new-products ">
                <h2 class="section-title ">New Products</h2>
                <?php
                $file = 'CSV_files/products.csv';
                $store_csv_file = fopen($file, "r");
                $created_time = array();
                $product_array[] = fgetcsv($store_csv_file, 1000);
                while ($line = fgetcsv($store_csv_file, 1000)) {

                    $time_str = $line[3];
                    $time_str = str_replace("Z", "", $time_str);
                    $time_conversion = strtotime($time_str);
                    $created_time[$time_conversion] = $line;
                }
                krsort($created_time);
                if (sizeof($created_time) >= 10) {
                    $created_time = array_slice($created_time, 0, 10);
                }
                function new_products_display($item)
                {
                    echo "
                    <div class='thumbnail-wrapper-products hover-shadow '>
                            <figure class='new-products-img-wrapper '>
                                <a href='store/store-home.php '><img class='new-products-brand hover-shadow ' src='images/nike.jpg ' id='brand-hover '></a>
                                <a href='store/product-details-dunklowblack.php '><img class='new-products-img ' src='images/shirtnike1.png ' alt='Red Shirt '></a>
                            </figure>
                            <a href='store/store-home.php ' class='text-center text-small color-gray '>Store $item[4]</a>
                            <a href='store/product-details-dunklowblack.php '>
                                <h2 class='text-medium '>$item[1]</h2>
                            </a>
                            <h3 class='text-normal color-red '>$$item[2]</h3>
                        </div>";
                }
                echo "                
                <div class='container'>
                    <div class='nowrap scroll-products'>";
                for ($i = 0; $i < count($created_time); $i += 1) {
                    new_products_display($created_time[$i]);
                }
                ?>
            </section>


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
                                <li class="logout "><a href="myaccount.php " onclick="logOut() ">Log out</a></li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <p class="copyright ">Copyright 2021 © - Web Programming - Group 38</p>
                </div>
            </footer>
        </main>

    </div>
    <script type="text/javascript" src="effects.js"></script>
</body>

</html>
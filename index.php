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
    <title>Mallux | Online Shopping Mall</title>
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
            <li><a class="text-bold " href="index.html ">Home</a></li>
            <li><a class="text-bold " href="about-us.html ">About us</a></li>
            <li><a class="text-bold " href="fees.html ">Fees</a></li>
            <li><a class="text-bold " href="myaccount.html ">My Account</a></li>
            <li>
                <div class="mobile-menu-dropdown ">
                    <input type="checkbox " class="mobile-menu-dropdown-trigger " id="menu-drop ">
                    <label for="menu-drop " class="text-bold ">Browse Stores &#8628;</label>
                    <div class="mobile-menu-dropdown-content ">
                        <ul>
                            <li><a class="text-bold " href="browse-by-name.html ">Browse stores by names</a></li>
                        </ul>
                        <div class="mobile-menu-dropdown ">
                            <ul>
                                <li><input type="checkbox " class="mobile-menu-dropdown-trigger " id="menu-cate ">
                                    <label for="menu-cate " class="text-thin text-bold ">Browse store by category &#8628;</label>

                                    <div id="mobile-menu-cate " class="mobile-menu-dropdown-content ">
                                        <ul>
                                            <li><a href="fashion.html ">Fashion</a></li>
                                            <li><a href="electronics.html ">Electronics and technology</a></li>
                                            <li><a href="beauty.html ">Beauty</a></li>
                                        </ul>

                                    </div>
                                </li>
                            </ul>


                        </div>

                    </div>
                </div>
            </li>
            <li><a class="text-bold " href="faq.html ">FAQs</a></li>
            <li><a class="text-bold " href="contact.html ">Contact</a></li>
            <li class="logout text-bold "><a href="myaccount.html " onclick="logOut() ">Log out</a></li>
            <li>
                <a href="order-placement.html "><img class="mobile-cart-icon " src="images/cart.png " alt="cart "></a>
            </li>
            <br>
            <li><a href="term-of-service.html ">Term of Service</a></li>
            <li><a href="privacy-policy.html ">Privacy Policy</a></li>
            <li><a href="copyright.html ">Copyright</a></li>
        </ul>

    </nav>
    <div class="mobile-menu-opened ">

        <main>
            <header class="bg-gradient-light ">
                <div class="container ">
                    <div class="row ">
                        <div class="col-30 ">
                            <a href="index.html "><img class="header-logo " src="images/logo.png " alt="mallux logo "></a>
                        </div>
                        <nav class="col-70 menu ">
                            <ul>
                                <li><a href="index.html ">Home</a></li>
                                <li><a href="about-us.html ">About us</a></li>
                                <li><a href="fees.html ">Fees</a></li>
                                <li><a href="myaccount.html ">My Account</a></li>
                                <li>
                                    <div class="dropdown ">
                                        <a>Browse &#8628;</a>
                                        <div class="dropdown-content ">
                                            <a href="browse-by-name.html ">Browse stores by names</a>
                                            <div class="dropdown ">
                                                <a>Browse store by category &#8628;</a>
                                                <div class="dropdown-content dropdown-category ">
                                                    <a href="fashion.html ">Fashion</a>
                                                    <a href="electronics.html ">Electronics and technology</a>
                                                    <a href="beauty.html ">Beauty</a>
                                                </div>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li><a href="faq.html ">FAQs</a></li>
                                <li><a href="contact.html ">Contact</a></li>
                                <li class="logout "><a href="myaccount.html " onclick="logOut() ">Log out</a></li>
                            </ul>
                            <a href="order-placement.html "><img class="cart-icon " src="images/cart.png " alt="cart "></a>
                        </nav>
                        <div class="res-index-space1 col-70 "></div>
                    </div>

                    <div class="row ">
                        <div class="header-text col-50 ">
                            <h1><span class="experience ">EXPERIENCE</span><br>
                                <span class="text-thin ">BETTER SHOPPING</span>
                            </h1>
                            <p class="color-gray ">Experience going to the mall without "GOING " to the mall</p>
                            <a href="browse-by-name.html " class="btn ">Browse from hundreds of stores &#10148;</a>
                        </div>
                        <div class="hero-image-container col-50 ">
                            <img class="hero-image " src="images/image1.png ">
                        </div>
                    </div>
                </div>
            </header>

            <!----FEATURED STORES--->
            <section class="featured-stores ">
                <div class="container ">
                    <h2 class="section-title ">Featured Stores</h2>
                    <div class="row ">
                        <div class="col-45 ">
                            <div class="featured-stores-wrapper ">
                                <figure>
                                    <a href="store/store-home.html ">
                                        <img class="hover-shadow " src="images/lg.jpg " alt="LG logo ">
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <figure class="col-45 ">
                            <a href="store/store-home.html ">
                                <img class="hover-shadow " src="images/locklock.jpg " alt="Lock&Lock logo ">
                            </a>
                        </figure>
                    </div>
                </div>
            </section>

            <!----NEW STORES--->
            <section class="new-stores ">
                <h2 class="section-title ">New Stores</h2>
                <?php
                $file = 'CSV_files/stores.txt';
                $store_csv_file = fopen($file, "r");
                $created_time = array();
                $product_array[] = fgetcsv($store_csv_file, 1000);
                while ($line = fgetcsv($store_csv_file, 1000)) {
                    $time_str = $line[3];
                    $time_str = str_replace("Z","",$time_str);
                    $time_conversion = strtotime($time_str);
                    $created_time[$time_conversion] = $line;
                }
                ksort($created_time);
                if (sizeof($created_time)>=10){
                    $created_time = array_slice($created_time,0,10);
                }
                function new_stores_display($item){
                    echo "
                    <div class='thumbnail-wrapper-stores'>
                        <a href='store/store-home.html'>
                            <figure class='hover-shadow'>
                                <img src='images/givenchy.jpg' alt='givenchy'>
                                <figcaption class='text-center'>
                                    <a href='store/store-home.html' class='text-medium text-bold'>$item[1]</a>
                                </figcaption>
                            </figure>
                        </a>
                    </div>";
                }
                echo "                
                <div class='container'>
                    <div class='nowrap scroll-stores'>";
                for ($i = 0; $i<count($created_time); $i+=1){
                    new_stores_display($created_time[$i]);
                }
                echo "</div>
                </div>";
                print_r($created_time);
                foreach($created_time as $store){
                    echo $store[1];
                }
                ?>
                <div class="container">
                    <div class="nowrap scroll-stores">
                        <div class="thumbnail-wrapper-stores">
                            <a href="store/store-home.html ">
                                <figure class="hover-shadow ">
                                    <img src="images/givenchy.jpg " alt="givenchy">
                                    <figcaption class="text-center ">
                                        <a href="store/store-home.html " class="text-medium text-bold ">Givenchy</a>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="thumbnail-wrapper-stores">
                            <a href="store/store-home.html ">
                                <figure class="hover-shadow ">
                                    <img src="images/saintlaurent.jpg " alt="saint laurent ">
                                    <figcaption class="text-center ">
                                        <a href="store/store-home.html " class="text-medium text-bold ">Saint Laurent</a>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>

                        <div class="thumbnail-wrapper-stores">
                            <a href="store/store-home.html ">
                                <figure class="hover-shadow ">
                                    <img src="images/adidas.jpg " alt="adidas ">
                                    <figcaption class="text-center ">
                                        <a href="store/store-home.html " class="text-medium text-bold ">Adidas</a>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>


                        <div class="thumbnail-wrapper-stores">
                            <a href="store/store-home.html ">
                                <figure class="hover-shadow ">
                                    <img src="images/offwhite.jpg " alt="off-white ">
                                    <figcaption class="text-center ">
                                        <a href="store/store-home.html " class="text-medium text-bold ">Off White</a>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="thumbnail-wrapper-stores">
                            <a href="store/store-home.html ">
                                <figure class="hover-shadow ">
                                    <img src="images/harrolds.jpg " alt="harrolds ">
                                    <figcaption class="text-center ">
                                        <a href="store/store-home.html " class="text-medium text-bold ">Harrolds</a>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="thumbnail-wrapper-stores">
                            <a href="store/store-home.html ">
                                <figure class="hover-shadow ">
                                    <img src="images/kookai.jpg " alt="kookai ">
                                    <figcaption class="text-center ">
                                        <a href="store/store-home.html " class="text-medium text-bold ">Kookai</a>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="thumbnail-wrapper-stores">
                            <a href="store/store-home.html ">
                                <figure class="hover-shadow ">
                                    <img src="images/drmartens.jpg " alt="drmartens ">
                                    <figcaption class="text-center ">
                                        <a href="store/store-home.html " class="text-medium text-bold ">Dr Martens</a>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="thumbnail-wrapper-stores">
                            <a href="store/store-home.html ">
                                <figure class="hover-shadow ">
                                    <img src="images/cottononbody.png " alt="cottononbody ">
                                    <figcaption class="text-center ">
                                        <a href="store/store-home.html " class="text-medium text-bold ">Cotton On Body</a>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>




                    </div>
                </div>
            </section>

            <!----FEATURED PRODUCTS--->

            <section class="offer bg-gradient-light ">
                <h2 class="section-title ">Featured Products</h2>
                <div class="container ">

                    <div class="row ">
                        <div class="col-50 ">
                            <img src="images/offer1.png " class="offer-img " alt="Tivi LG ">
                        </div>
                        <div class="col-40 offer-des ">
                            <h1 class="text-big ">Smart Tivi LED LG</h1>
                            <h3 class="text-medium color-red ">$25.99</h3>
                            <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas eligendi debitis ex commodi ducimus asperiores vitae dolorem at nobis excepturi ipsum praesentium, quos labore quod illo rem tempore aliquam unde! </p>
                            <a href="store/product-details-dunklowblack.html " class="btn ">Product Details &#10148; </a>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-50 ">
                            <img src="images/ac.png " class="offer-img " alt="AC Inverter LG ">
                        </div>
                        <div class="col-40 offer-des ">
                            <h1 class="text-big "> LG AC Inverter 1 HP</h1>
                            <h3 class="text-medium color-red ">$25.99</h3>
                            <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas eligendi debitis ex commodi ducimus asperiores vitae dolorem at nobis excepturi ipsum praesentium, quos labore quod illo rem tempore aliquam unde! </p>
                            <a href="store/product-details-dunklowblack.html " class="btn ">Product Details &#10148; </a>
                        </div>
                    </div>
                </div>
            </section>

            <!----NEW PRODUCTS--->
            <section class="new-products ">
                <div class="container ">
                    <h2 class="section-title ">New Products</h2>
                    <div class="nowrap scroll-products">
                        <div class="thumbnail-wrapper-products hover-shadow ">
                            <figure class="new-products-img-wrapper ">
                                <a href="store/store-home.html "><img class="new-products-brand hover-shadow " src="images/nike.jpg " id="brand-hover "></a>
                                <a href="store/product-details-dunklowblack.html "><img class="new-products-img " src="images/shirtnike1.png " alt="Red Shirt "></a>
                            </figure>
                            <a href="store/store-home.html " class="text-center text-small color-gray ">Nike</a>
                            <a href="store/product-details-dunklowblack.html ">
                                <h2 class="text-medium ">Red Shirt</h2>
                            </a>
                            <h3 class="text-normal color-red ">$20.50</h3>
                        </div>

                        <div class="thumbnail-wrapper-products hover-shadow ">
                            <figure class="new-products-img-wrapper ">
                                <a href="store/store-home.html "><img class="new-products-brand hover-shadow " src="images/nike.jpg " id="brand-hover "></a>
                                <a href="store/product-details-dunklowblack.html "><img class="new-products-img " src="images/product1.png " alt="Grey Hoodie "></a>
                            </figure>
                            <a href="store/store-home.html " class="text-center text-small color-gray ">Nike</a>
                            <a href="store/product-details-dunklowblack.html ">
                                <h2 class="text-medium ">Grey Hoodie</h2>
                            </a>
                            <h3 class="text-normal color-red ">$29.99</h3>

                        </div>

                        <div class="thumbnail-wrapper-products hover-shadow ">
                            <figure class="new-products-img-wrapper ">
                                <a href="store/store-home.html "><img class="new-products-brand hover-shadow " src="images/nike.jpg " id="brand-hover "></a>
                                <a href="store/product-details-dunklowblack.html "><img class="new-products-img " src="images/shirtnike2.png " alt="Black Shirt "></a>
                            </figure>
                            <a href="store/store-home.html " class="text-center text-small color-gray ">Nike</a>
                            <a href="store/product-details-dunklowblack.html ">
                                <h2 class="text-medium ">Black Shirt</h2>
                            </a>
                            <h3 class="text-normal color-red ">$17.99</h3>

                        </div>

                        <div class="thumbnail-wrapper-products hover-shadow ">
                            <figure class="new-products-img-wrapper ">
                                <a href="store/store-home.html "><img class="new-products-brand hover-shadow " src="images/nike.jpg " id="brand-hover "></a>
                                <a href="store/product-details-dunklowblack.html "><img class="new-products-img " src="images/pantnike.png " alt="Black Pants "></a>
                            </figure>
                            <a href="store/store-home.html " class="text-center text-small color-gray ">Nike</a>
                            <a href="store/product-details-dunklowblack.html ">
                                <h2 class="text-medium ">Long Black Pants</h2>
                            </a>
                            <h3 class="text-normal color-red ">$30.50</h3>

                        </div>
                        <div class="thumbnail-wrapper-products hover-shadow ">
                            <figure class="new-products-img-wrapper ">
                                <a href="store/store-home.html "><img class="new-products-brand hover-shadow " src="images/nike.jpg " id="brand-hover "></a>
                                <a href="store/product-details-dunklowblack.html "><img class="new-products-img " src="images/shirtnike1.png " alt="Red Shirt "></a>
                            </figure>
                            <a href="store/store-home.html " class="text-center text-small color-gray ">Nike</a>
                            <a href="store/product-details-dunklowblack.html ">
                                <h2 class="text-medium ">Red Shirt</h2>
                            </a>
                            <h3 class="text-normal color-red ">$20.50</h3>

                        </div>

                        <div class="thumbnail-wrapper-products hover-shadow ">
                            <figure class="new-products-img-wrapper ">
                                <a href="store/store-home.html "><img class="new-products-brand hover-shadow " src="images/nike.jpg " id="brand-hover "></a>
                                <a href="store/product-details-dunklowblack.html "><img class="new-products-img " src="images/product1.png " alt="Grey Hoodie "></a>
                            </figure>
                            <a href="store/store-home.html " class="text-center text-small color-gray ">Nike</a>
                            <a href="store/product-details-dunklowblack.html ">
                                <h2 class="text-medium ">Grey Hoodie</h2>
                            </a>
                            <h3 class="text-normal color-red ">$29.99</h3>

                        </div>

                        <div class="thumbnail-wrapper-products hover-shadow ">
                            <figure class="new-products-img-wrapper ">
                                <a href="store/store-home.html "><img class="new-products-brand hover-shadow " src="images/nike.jpg " id="brand-hover "></a>
                                <a href="store/product-details-dunklowblack.html "><img class="new-products-img " src="images/shirtnike2.png " alt="Black Shirt "></a>
                            </figure>
                            <a href="store/store-home.html " class="text-center text-small color-gray ">Nike</a>
                            <a href="store/product-details-dunklowblack.html ">
                                <h2 class="text-medium ">Black Shirt</h2>
                            </a>
                            <h3 class="text-normal color-red ">$17.99</h3>

                        </div>

                        <div class="thumbnail-wrapper-products hover-shadow ">
                            <figure class="new-products-img-wrapper ">
                                <a href="store/store-home.html "><img class="new-products-brand hover-shadow " src="images/nike.jpg " id="brand-hover "></a>
                                <a href="store/product-details-dunklowblack.html "><img class="new-products-img " src="images/pantnike.png " alt="Black Pants "></a>
                            </figure>
                            <a href="store/store-home.html " class="text-center text-small color-gray ">Nike</a>
                            <a href="store/product-details-dunklowblack.html ">
                                <h2 class="text-medium ">Long Black Pants</h2>
                            </a>
                            <h3 class="text-normal color-red ">$30.50</h3>
                        </div>
                    </div>




                </div>
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
                                <li><a href="index.html ">Home</a></li>
                                <li><a href="store/term-of-service.html ">Term of Service</a></li>
                                <li><a href="store/privacy-policy.html ">Privacy Policy</a></li>
                                <li><a href="store/copyright.html ">Copyright</a></li>
                                <li><a href="faq.html ">FAQs</a></li>
                                <li><a href="contact.html ">Contact</a></li>
                                <li class="logout "><a href="myaccount.html " onclick="logOut() ">Log out</a></li>
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

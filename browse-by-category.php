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
    <title>Mallux Browse by catgegory| Online Shopping Mall</title>
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

        <!----NEW PRODUCTS--->
        <?php 
        $file = 'CSV_files/categories.txt';
        $categories_csv_file = fopen($file, "r");
        $categories_array = array();
        while ($line = fgetcsv($categories_csv_file, 1000)) {
            $categories_array[] = $line[1];                     
        }    
        $categories_array = array_slice($categories_array, 1,count($categories_array));
        $file = 'CSV_files/stores.txt';
        $stores_by_category_csv_file = fopen($file, "r");
        $stores_by_category_array = array();
        $store_counter = 1;
        foreach($categories_array as $category){
            $store_array = array();
            while ($line = fgetcsv($stores_by_category_csv_file, 1000)) {
                if ($line[2]==$store_counter){$store_array[] = $line[1];}
            }    
            $stores_by_category_array[$store_counter] = $store_array;
            $store_counter+=1;
        }
        print_r($stores_by_category_array);
        echo "<section class='new-products'>
            <div class='small-container'>
                <h2 class='section-title'>Store Categories</h2>
                <form action='' method='post' class='row'>
                    <select name='category' class='col-70'>";
        for ($i = 0; $i<count($categories_array);$i+=1){
            echo "<option value='$i'>$categories_array[$i]</option>";
        }
        echo "</select>
             <input type='submit' class='col-10 text-big btn hover-shadow img' id='order-button'>
            </form>";
        echo "<div class='row'>";
        foreach ($stores_by_category_array as $category => $store){            
            if ($category==$_POST['category']){
                foreach ($store as $item){
                    echo "<div class='col-20'>
                            <div class='new-products-wrapper hover-shadow'>
                                <figure class='new-products-img-wrapper'>
                                    <img class='new-products-img' src='images/shirtnike1.png' alt='Red Shirt'>
                                    <img class='new-products-brand' src='images/nike.jpg'>
                                </figure>
                                <p class='text-center text-small color-gray'>$item</p>
                                <p class='text-center text-medium color-black'>Shirt</p>
                                <h2 class='text-center text-medium'>$category</h2>
                            </div>
                        </div>";
                }
//                 echo "hello world";
            }
        } 
        echo"</div>
            </div>
        </section>";
    
        ?>
        <section class="new-products">
            <div class="small-container">
                <h2 class="section-title">Products</h2>
                <select>
                    <option>Select category</option>
                    <option>Shirt</option>
                    <option>Hoodie</option>
                    <option>Pant</option>
                </select>
                <div class="row">
                    <div class="col-20">
                        <div class="new-products-wrapper hover-shadow">
                            <figure class="new-products-img-wrapper">
                                <img class="new-products-img " src="images/shirtnike1.png" alt="Red Shirt">
                                <img class="new-products-brand" src="images/nike.jpg">
                            </figure>
                            <p class="text-center text-small color-gray">Nike</p>
                            <p class="text-center text-medium color-black">Shirt</p>
                            <h2 class="text-center text-medium">Red Shirt</h2>
                            <h3 class="text-center text-normal color-red">$20.50</h3>

                        </div>
                    </div>
                    <div class="col-20">
                        <div class="new-products-wrapper hover-shadow">
                            <figure class="new-products-img-wrapper">
                                <img class="new-products-img " src="images/product1.png" alt="Grey Hoodie">
                                <img class="new-products-brand" src="images/nike.jpg">
                            </figure>
                            <p class="text-center text-small color-gray">Nike</p>
                            <p class="text-center text-medium color-black">Hoodie</p>
                            <h2 class="text-center text-medium">Grey Hoodie</h2>
                            <h3 class="text-center text-normal color-red">$29.99</h3>

                        </div>
                    </div>
                    <div class="col-20">
                        <div class="new-products-wrapper hover-shadow">
                            <figure class="new-products-img-wrapper">
                                <img class="new-products-img " src="images/shirtnike2.png" alt="Black Shirt">
                                <img class="new-products-brand" src="images/nike.jpg">
                            </figure>
                            <p class="text-center text-small color-gray">Nike</p>
                            <p class="text-center text-medium color-black">Shirt</p>
                            <h2 class="text-center text-medium">Black Shirt</h2>
                            <h3 class="text-center text-normal color-red">$17.99</h3>

                        </div>
                    </div>
                    <div class="col-20">
                        <div class="new-products-wrapper hover-shadow">
                            <figure class="new-products-img-wrapper">
                                <img class="new-products-img " src="images/pantnike.png" alt="Black Pant">
                                <img class="new-products-brand" src="images/nike.jpg">
                            </figure>
                            <p class="text-center text-small color-gray">Nike</p>
                            <p class="text-center text-medium color-black">Pant</p>
                            <h2 class="text-center text-medium">Long Black Pant</h2>
                            <h3 class="text-center text-normal color-red">$30.50</h3>

                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-20">
                        <div class="new-products-wrapper hover-shadow">
                            <figure class="new-products-img-wrapper">
                                <img class="new-products-img " src="images/shirtnike1.png" alt="Red Shirt">
                                <img class="new-products-brand" src="images/nike.jpg">
                            </figure>
                            <p class="text-center text-small color-gray">Nike</p>
                            <p class="text-center text-medium color-black">Shirt</p>
                            <h2 class="text-center text-medium">Red Shirt</h2>
                            <h3 class="text-center text-normal color-red">$20.50</h3>

                        </div>
                    </div>
                    <div class="col-20">
                        <div class="new-products-wrapper hover-shadow">
                            <figure class="new-products-img-wrapper">
                                <img class="new-products-img " src="images/product1.png" alt="Grey Hoodie">
                                <img class="new-products-brand" src="images/nike.jpg">
                            </figure>
                            <p class="text-center text-small color-gray">Nike</p>
                            <p class="text-center text-medium color-black">Hoodie</p>
                            <h2 class="text-center text-medium">Grey Hoodie</h2>
                            <h3 class="text-center text-normal color-red">$29.99</h3>

                        </div>
                    </div>
                    <div class="col-20">
                        <div class="new-products-wrapper hover-shadow">
                            <figure class="new-products-img-wrapper">
                                <img class="new-products-img " src="images/shirtnike2.png" alt="Black Shirt">
                                <img class="new-products-brand" src="images/nike.jpg">
                            </figure>
                            <p class="text-center text-small color-gray">Nike</p>
                            <p class="text-center text-medium color-black">Shirt</p>
                            <h2 class="text-center text-medium">Black Shirt</h2>
                            <h3 class="text-center text-normal color-red">$17.99</h3>

                        </div>
                    </div>
                    <div class="col-20">
                        <div class="new-products-wrapper hover-shadow">
                            <figure class="new-products-img-wrapper">
                                <img class="new-products-img " src="images/pantnike.png" alt="Black Pant">
                                <img class="new-products-brand" src="images/nike.jpg">
                            </figure>
                            <p class="text-center text-small color-gray">Nike</p>
                            <p class="text-center text-medium color-black">Pant</p>
                            <h2 class="text-center text-medium">Long Black Pant</h2>
                            <h3 class="text-center text-normal color-red">$30.50</h3>

                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-20">
                        <div class="new-products-wrapper hover-shadow">
                            <figure class="new-products-img-wrapper">
                                <img class="new-products-img " src="images/shirtnike1.png" alt="Red Shirt">
                                <img class="new-products-brand" src="images/nike.jpg">
                            </figure>
                            <p class="text-center text-small color-gray">Nike</p>
                            <p class="text-center text-medium color-black">Shirt</p>
                            <h2 class="text-center text-medium">Red Shirt</h2>
                            <h3 class="text-center text-normal color-red">$20.50</h3>

                        </div>
                    </div>
                    <div class="col-20">
                        <div class="new-products-wrapper hover-shadow">
                            <figure class="new-products-img-wrapper">
                                <img class="new-products-img " src="images/product1.png" alt="Grey Hoodie">
                                <img class="new-products-brand" src="images/nike.jpg">
                            </figure>
                            <p class="text-center text-small color-gray">Nike</p>
                            <p class="text-center text-medium color-black">Hoodie</p>
                            <h2 class="text-center text-medium">Grey Hoodie</h2>
                            <h3 class="text-center text-normal color-red">$29.99</h3>

                        </div>
                    </div>
                    <div class="col-20">
                        <div class="new-products-wrapper hover-shadow">
                            <figure class="new-products-img-wrapper">
                                <img class="new-products-img " src="images/shirtnike2.png" alt="Black Shirt">
                                <img class="new-products-brand" src="images/nike.jpg">
                            </figure>
                            <p class="text-center text-small color-gray">Nike</p>
                            <p class="text-center text-medium color-black">Shirt</p>
                            <h2 class="text-center text-medium">Black Shirt</h2>
                            <h3 class="text-center text-normal color-red">$17.99</h3>

                        </div>
                    </div>
                    <div class="col-20">
                        <div class="new-products-wrapper hover-shadow">
                            <figure class="new-products-img-wrapper">
                                <img class="new-products-img " src="images/pantnike.png" alt="Black Pant">
                                <img class="new-products-brand" src="images/nike.jpg">
                            </figure>
                            <p class="text-center text-small color-gray">Nike</p>
                            <p class="text-center text-medium color-black">Pant</p>
                            <h2 class="text-center text-medium">Long Black Pant</h2>
                            <h3 class="text-center text-normal color-red">$30.50</h3>

                        </div>
                    </div>

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

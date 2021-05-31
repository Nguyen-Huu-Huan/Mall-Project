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
    <title>Nike Contact | Online Shopping Mall</title>
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

<body class="store-contact">
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
                <section class="contact">
                    <div class="small-container">
                        <h1 class="section-title">Contact Form</h1>
                        <form class="" action="contact.php" method="post">
                            <label for="contact_purpose"><strong>Contact Purpose</strong></label>
                            <br>
                            <select name="contact_purpose">
                    <option value="customer_service">Customer Service</option>
                    <option value="general">General Inquiry</option>
                    <option value="complaints">Complaints</option>
                    <option value="feedback">Feedback</option>
                    <option value="collab">Business Collaboration</option>
                    <option value="other">Other purpose</option>
                </select>
                            <br>
                            <label for="Name"><strong>Name:</strong></label>
                            <br>
                            <input type="text" name="Name" value="" required placeholder="*required">
                            <br>
                            <label for="Email"><strong>Email:</strong></label>
                            <br>
                            <input type="email" name="Email" value="" required placeholder="*required">
                            <br>
                            <label for="Phone"><strong>Phone:</strong></label>
                            <br>
                            <input type="tel" name="Phone" value="" required placeholder="(+84) 0123456789" pattern="0[0-9]{9}">
                            <br>
                            <div class="other-input">
                                <label for="contact-method "><strong>Prefered Contact Method:</strong></label>
                                <input type="radio" name="contact" value=" " required>
                                <label class="text-thin" for="contact-method">Email</label>
                                <input type="radio" name="contact" value=" " required>
                                <label class="text-thin" for="contact-method">Phone</label>
                            </div>
                            <br>
                            <br>
                            <label for="Contact_days"> <strong>Contact days:</strong> </label>
                            <div class="other-input">
                                <label for="monday">Monday</label>
                                <input type="checkbox" name="contact-day-1" value="yes">
                                <label for="tuesday">Tuesday</label>
                                <input type="checkbox" name="days" value=" ">
                                <label for="wednesday">Wednesday</label>
                                <input type="checkbox" name="days" value=" ">
                                <label for="thursday">Thursday</label>
                                <input type="checkbox" name="days" value=" ">
                                <label for="friday">Friday</label>
                                <input type="checkbox" name="days" value=" ">
                                <label for="saturday">Saturday</label>
                                <input type="checkbox" name="days" value=" ">
                                <label for="sunday">Sunday</label>
                                <input type="checkbox" name="days" value=" ">
                            </div>
                            <br>
                            <br>
                            <br>
                            <textarea name="message" rows="8" cols="80" placeholder="Your Message"></textarea>
                            <br>
                            <input class="btnnike" type="reset" value="Clear">
                            <input class="btnnike" type="submit" value="Send">
                        </form>
                    </div>
                </section>

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

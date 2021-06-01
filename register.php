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
    <title>Mallux Register| Online Shopping Mall</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;500;800&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;500;800&display=swap" rel="stylesheet" type="text/css" />
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
                            <li><a class="text-bold" href="browse-by-category.php">Browse store by category</a></li>
                        </ul>

                    </div>
                </div>
            </li>
            <li><a class="text-bold" href="faq.php">FAQs</a></li>
            <li><a class="text-bold" href="contact.php">Contact</a></li>
            <li class="logout1 text-bold">
                <form method="POST"><input type="submit" name="logout1" value="Log Out"></form>
            </li>
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
                        <img class="header-logo" src="images/logo.png" alt="mallux logo">
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
                                        <a href="browse-by-category.php">Browse store by category</a>

                                    </div>
                                </div>
                            </li>
                            <li><a href="faq.php">FAQs</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li class="logout1">
                                <form action="myaccount.php" method="POST"><input type="submit" name="logout1" value="Log Out"></form>
                            </li>
                        </ul>
                        <a href="order-placement.php"><img class="cart-icon" src="images/cart.png" alt="cart"></a>
                    </nav>
                    <div class="res-index-space1 col-70"></div>
                </div>
        </header>



        <main class="login-wrapper">
            <h1 class="section-title">Register</h1>
            <section class="register tiny-container">
                <div class="row">

                    <div class="col-100">
                        <form class="form" id="form" method="POST">
                            <fieldset class="shopper-fieldset">
                                <br>
                                <div class="row">
                                    <div class="col-50">
                                        <div class="container">
                                            <label for="account">Account Type</label>
                                            <br><br>
                                            <label class="text-thin" for="account">Shopper</label>&nbsp;&nbsp;
                                            <input type="radio" name="account" value="shopper"  checked="checked">
                                            <br><br>
                                            <label class="text-thin" for="account">Store Owner</label>
                                            <input type="radio" name="account" value="owner" id="owner-checked" >
                                            <br>

                                            <fieldset class="owner-fieldset">
                                                <legend class="text-normal">Store Onwers only</legend>
                                                <br>
                                                <div class="container">
                                                    <div class="form-control">
                                                        <label for="bname">Business Name</label>
                                                        <br>
                                                        <input type="text" name="bname" value="" id="bName">
                                                        <i class="correct">&#10004;</i>
                                                        <i class="wrong">&#9888;</i>
                                                        <small>Error message</small>
                                                    </div>
                                                    <div class="form-control">
                                                        <label for="sname">Store Name</label>
                                                        <br>
                                                        <input type="text" name="sname" value="" id="sName">
                                                        <i class="correct">&#10004;</i>
                                                        <i class="wrong">&#9888;</i>
                                                        <small>Error message</small>
                                                    </div>
                                                    <label for="scategory">Store Category</label>
                                                    <br>
                                                    <select name="scategory">
                                                        <option value="department_stores">Department Stores</option>
                                                        <option value="grocery_stores">Grocery Stores</option>
                                                        <option value="restaurants">Restaurants</option>
                                                        <option value="clothing_stores">Clothing Stores</option>
                                                        <option value="accessory_stores">Accessory Stores</option>
                                                        <option value="pharmacies">Pharmacies</option>
                                                        <option value="technology_stores">Technology Stores</option>
                                                        <option value="toy_stores">Toy Stores</option>
                                                        <option value="specialty_stores">Specialty Stores</option>
                                                        <option value="thrift_stores">Thrift Stores</option>
                                                        <option value="services">Services</option>
                                                        <option value="kiosks">Kiosks</option>
                                                    </select>
                                                    <br>
                                                </div>
                                            </fieldset>
                                            <br><br><br>

                                            <div class="form-control">
                                                <label for="email">Email address</label>
                                                <input type="email" name="email" value=""  placeholder="*required" id="email">
                                                <i class="correct">&#10004;</i>
                                                <i class="wrong">&#9888;</i>
                                                <small>Error message</small>
                                            </div>

                                            <div class="form-control">
                                                <label for="phone">Phone number</label>
                                                <input type="tel" name="phone" value=""  placeholder="0901234567" pattern="0[0-9]{9}" id="phone">
                                                <i class="correct">&#10004;</i>
                                                <i class="wrong">&#9888;</i>
                                                <small>Error message</small>
                                            </div>
                                            <div class="form-control">
                                                <label for="pass">Password</label>
                                                <input type="password" name="pass" value=""  placeholder="*required" id="pw">
                                                <i class="correct">&#10004;</i>
                                                <i class="wrong">&#9888;</i>
                                                <small>Error message</small>
                                            </div>
                                            <div class="form-control">
                                                <label for="cfpass">Confirm Password</label>
                                                <input type="password" name="cfpass" value=""  placeholder="*required" id="confirmPW">
                                                <i class="correct">&#10004;</i>
                                                <i class="wrong">&#9888;</i>
                                                <small>Error message</small>
                                            </div>


                                            <br>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-50">
                                        <div class="container">
                                            <label for="upload"><strong>Profile Picture</strong></label>
                                            <input type="file" name="upload" value=""required >
                                            <div class="form-control">
                                                <label for="fname">First name</label>
                                                <input type="text" name="fname" value=""  placeholder="*required" id="firstName">
                                                <i class="correct">&#10004;</i>
                                                <i class="wrong">&#9888;</i>
                                                <small>Error message</small>
                                            </div>
                                            <div class="form-control">
                                                <label for="lname">Last name</label>
                                                <input type="text" name="lname" value=""  placeholder="*required" id="lastName">
                                                <i class="correct">&#10004;</i>
                                                <i class="wrong">&#9888;</i>
                                                <small>Error message</small>
                                            </div>
                                            <div class="form-control">
                                                <label for="address">Address</label>
                                                <input type="text" name="address" value=""  placeholder="*required" id="address">
                                                <i class="correct">&#10004;</i>
                                                <i class="wrong">&#9888;</i>
                                                <small>Error message</small>
                                            </div>
                                            <div class="form-control">
                                                <label for="city">City</label>
                                                <input type="text" name="city" value=""  placeholder="*required" id="city">
                                                <i class="correct">&#10004;</i>
                                                <i class="wrong">&#9888;</i>
                                                <small>Error message</small>
                                            </div>
                                            <div class="form-control">
                                                <label for="zipcode">Zipcode</label>
                                                <input type="tel" name="zipcode" value=""  placeholder="4-6 digits" pattern="[0-9]{4,6}" id="zipcode">
                                                <i class="correct">&#10004;</i>
                                                <i class="wrong">&#9888;</i>
                                                <small>Error message</small>
                                            </div>
                                            <label for="country">Country</label>
                                            <br>
                                            <select name="country" >
                                                <option value="AF">Afghanistan</option>
                                                <option value="AX">Åland Islands</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctica</option>
                                                <option value="AG">Antigua and Barbuda</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Belarus</option>
                                                <option value="BE">Belgium</option>
                                                <option value="BZ">Belize</option>
                                                <option value="BJ">Benin</option>
                                                <option value="BM">Bermuda</option>
                                                <option value="BT">Bhutan</option>
                                                <option value="BO">Bolivia, Plurinational State of</option>
                                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                <option value="BA">Bosnia and Herzegovina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BV">Bouvet Island</option>
                                                <option value="BR">Brazil</option>
                                                <option value="IO">British Indian Ocean Territory</option>
                                                <option value="BN">Brunei Darussalam</option>
                                                <option value="BG">Bulgaria</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BI">Burundi</option>
                                                <option value="KH">Cambodia</option>
                                                <option value="CM">Cameroon</option>
                                                <option value="CA">Canada</option>
                                                <option value="CV">Cape Verde</option>
                                                <option value="KY">Cayman Islands</option>
                                                <option value="CF">Central African Republic</option>
                                                <option value="TD">Chad</option>
                                                <option value="CL">Chile</option>
                                                <option value="CN">China</option>
                                                <option value="CX">Christmas Island</option>
                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                <option value="CO">Colombia</option>
                                                <option value="KM">Comoros</option>
                                                <option value="CG">Congo</option>
                                                <option value="CD">Congo, the Democratic Republic of the</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="CI">Côte d'Ivoire</option>
                                                <option value="HR">Croatia</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CW">Curaçao</option>
                                                <option value="CY">Cyprus</option>
                                                <option value="CZ">Czech Republic</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">Dominican Republic</option>
                                                <option value="EC">Ecuador</option>
                                                <option value="EG">Egypt</option>
                                                <option value="SV">El Salvador</option>
                                                <option value="GQ">Equatorial Guinea</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="EE">Estonia</option>
                                                <option value="ET">Ethiopia</option>
                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                <option value="FO">Faroe Islands</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FI">Finland</option>
                                                <option value="FR">France</option>
                                                <option value="GF">French Guiana</option>
                                                <option value="PF">French Polynesia</option>
                                                <option value="TF">French Southern Territories</option>
                                                <option value="GA">Gabon</option>
                                                <option value="GM">Gambia</option>
                                                <option value="GE">Georgia</option>
                                                <option value="DE">Germany</option>
                                                <option value="GH">Ghana</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GR">Greece</option>
                                                <option value="GL">Greenland</option>
                                                <option value="GD">Grenada</option>
                                                <option value="GP">Guadeloupe</option>
                                                <option value="GU">Guam</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GG">Guernsey</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GW">Guinea-Bissau</option>
                                                <option value="GY">Guyana</option>
                                                <option value="HT">Haiti</option>
                                                <option value="HM">Heard Island and McDonald Islands</option>
                                                <option value="VA">Holy See (Vatican City State)</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IS">Iceland</option>
                                                <option value="IN">India</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IR">Iran, Islamic Republic of</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IE">Ireland</option>
                                                <option value="IM">Isle of Man</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italy</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japan</option>
                                                <option value="JE">Jersey</option>
                                                <option value="JO">Jordan</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KI">Kiribati</option>
                                                <option value="KP">Korea, Democratic People's Republic of</option>
                                                <option value="KR">Korea, Republic of</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Lao People's Democratic Republic</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LY">Libya</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MO">Macao</option>
                                                <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                                                <option value="MG">Madagascar</option>
                                                <option value="MW">Malawi</option>
                                                <option value="MY">Malaysia</option>
                                                <option value="MV">Maldives</option>
                                                <option value="ML">Mali</option>
                                                <option value="MT">Malta</option>
                                                <option value="MH">Marshall Islands</option>
                                                <option value="MQ">Martinique</option>
                                                <option value="MR">Mauritania</option>
                                                <option value="MU">Mauritius</option>
                                                <option value="YT">Mayotte</option>
                                                <option value="MX">Mexico</option>
                                                <option value="FM">Micronesia, Federated States of</option>
                                                <option value="MD">Moldova, Republic of</option>
                                                <option value="MC">Monaco</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="ME">Montenegro</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MA">Morocco</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="MM">Myanmar</option>
                                                <option value="NA">Namibia</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NP">Nepal</option>
                                                <option value="NL">Netherlands</option>
                                                <option value="NC">New Caledonia</option>
                                                <option value="NZ">New Zealand</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NE">Niger</option>
                                                <option value="NG">Nigeria</option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">Norfolk Island</option>
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="NO">Norway</option>
                                                <option value="OM">Oman</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PW">Palau</option>
                                                <option value="PS">Palestine, State of</option>
                                                <option value="PA">Panama</option>
                                                <option value="PG">Papua New Guinea</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="PE">Peru</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PN">Pitcairn</option>
                                                <option value="PL">Poland</option>
                                                <option value="PT">Portugal</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="QA">Qatar</option>
                                                <option value="RE">Réunion</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russian Federation</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="BL">Saint Barthélemy</option>
                                                <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                <option value="KN">Saint Kitts and Nevis</option>
                                                <option value="LC">Saint Lucia</option>
                                                <option value="MF">Saint Martin (French part)</option>
                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                <option value="WS">Samoa</option>
                                                <option value="SM">San Marino</option>
                                                <option value="ST">Sao Tome and Principe</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SN">Senegal</option>
                                                <option value="RS">Serbia</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SX">Sint Maarten (Dutch part)</option>
                                                <option value="SK">Slovakia</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SO">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                <option value="SS">South Sudan</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="SE">Sweden</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="SY">Syrian Arab Republic</option>
                                                <option value="TW">Taiwan, Province of China</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania, United Republic of</option>
                                                <option value="TH">Thailand</option>
                                                <option value="TL">Timor-Leste</option>
                                                <option value="TG">Togo</option>
                                                <option value="TK">Tokelau</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TT">Trinidad and Tobago</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="TR">Turkey</option>
                                                <option value="TM">Turkmenistan</option>
                                                <option value="TC">Turks and Caicos Islands</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="AE">United Arab Emirates</option>
                                                <option value="GB">United Kingdom</option>
                                                <option value="US">United States</option>
                                                <option value="UM">United States Minor Outlying Islands</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                <option value="VN">Viet Nam</option>
                                                <option value="VG">Virgin Islands, British</option>
                                                <option value="VI">Virgin Islands, U.S.</option>
                                                <option value="WF">Wallis and Futuna</option>
                                                <option value="EH">Western Sahara</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="YW">Zimbabwe</option>
                                            </select>
                                            <br>

                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </fieldset>
                            <br>
                            <br>
<script type="text/javascript" src="effects.js"></script>                            
                            <?php

if(isset($_POST['register'])){
    $email = $_POST["email"];
    if (file_exists('../userfile.csv') === TRUE) {
        $fp = fopen('../userfile.csv', 'r');
        while ($line = fgetcsv($fp, 1000)) {
            if (htmlspecialchars($email)  == $line[0]){
                echo "<p class='color-red'>Use another email, this one has already been registerd!</p>";
            }
            if (htmlspecialchars($email)  == $line[2]){
                echo "<p class='color-red'>Use another phone number, this one has already been registerd!</p>";
            }
        }
    }else{
        $phone = $_POST["phone"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $pass = $_POST["pass"];
        $password_hash = password_hash($pass, PASSWORD_BCRYPT);
        $userfile = fopen('../userfile.csv', 'a');
        fwrite($userfile, $email . "," . $password_hash."," . $phone . "," . $fname . "," . $lname . "," . $address . "," . $city . "\n");
        echo "<p class='color-red'>Register successful!</p>";
        echo("<meta http-equiv='refresh' content='1'>");
    }
}
?>

                            <div class="row">
                                <input type="submit"  action="myaccount.php" name="register" value="Register" class="col-50 btn text-medium reg_button">
                                <input type="reset" name="" value="Clear" class="col-30 btn text-medium">
                            </div>
                        </form>
                    </div>
                    <div class="col-100 text-center">
                        <h1 class="text-medium">Already a member? <a href="myaccount.php" class="text-medium">Login
                                here</a></h1>
                    </div>
                </div>
            </section>
            
        </main>
        <!----Footer--->
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
                            <li class="logout1">
                                <form action="myaccount.php" method="POST"><input type="submit" name="logout1" value="Log Out"></form>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <p class="copyright ">Copyright 2021 © - Web Programming - Group 38</p>
            </div>
        </footer>
    </div>
</body>


</html>

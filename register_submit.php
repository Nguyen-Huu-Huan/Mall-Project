<?php
    if( isset($_POST['submit']) && $_POST["email"] != ''&& $_POST["phone"] != ''&& $_POST["pass"] != ''&& $_POST["cfpass"] != ''&& $_POST["fname"] != ''&& $_POST["lname"] != ''&& $_POST["address"] != ''&& $_POST["city"] != '' ){
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $pass = $_POST["pass"];
        $cfpass = $_POST["cfpass"];
        if( $pass != $cfpass){
            header("location:register.php");
        }
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $address = $_POST["address"];
        $city = $_POST["city"];
    }else{
        header("location:register.php");
    }
?>
<?php
include 'config.php';
    if( isset($_POST['submit']) && $_POST["email"] != ''&& $_POST["phone"] != ''&& $_POST["pass"] != ''&& $_POST["cfpass"] != ''&& $_POST["fname"] != ''&& $_POST["lname"] != ''&& $_POST["address"] != ''&& $_POST["city"] != '' ){
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $pass = $_POST["pass"];
        $cfpass = $_POST["cfpass"];
        if( $pass != $cfpass){
            header("location:register.php");
        }
        $sql = "SELECT * FROM users WHERE email = '$email' ";
        $old = mysqli_query($conn,$sql);
        $pass= md5($pass);
        if (mysqli_num_rows($old) > 0){
            header("location:register.php");
        }
        $sql = "INSERT INTO users (email,pass,phone,fname,lname,address,city) VALUES ('$email','$pass','$phone','$fname','$lname','$address','$city')";
        mysqli_query($conn,$sql);
        header("location:myacount.php");
    }else{
        header("location:register.php");
    }
?>
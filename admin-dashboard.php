<?php
$fp = fopen('data.csv', 'r');
while ($line = fgets($fp)) {
  $texts[] = $line;
};

$fp = fopen('../adminfile.txt', 'r');
while ($line = fgets($fp)) {
  $admin[] = $line;
};



if (isset($_POST['admin-dashboard'])) {
  echo "<meta http-equiv='refresh' content='0'>";
  $fp = fopen('data.csv', 'w');
  $copyright = htmlspecialchars($_POST['copyright-text']);
  $tos = $_POST['tos-text'];
  $privacy = $_POST['privacy-text'];
  fwrite($fp, str_replace("\n", "<br>", (rtrim($copyright, "\n"))) . "\n");
  fwrite($fp, str_replace("\n", "<br>", (rtrim($tos, "\n"))) . "\n");
  fwrite($fp, str_replace("\n", "<br>", (rtrim($privacy, "\n"))) . "\n");
};


?>

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['validate'])) {
    
    if (isset($_POST['logout1'])) {
        unset($_SESSION['validate']);
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
if (file_exists('install.php') === TRUE) {die('Error, the file install.php is still exists');}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mallux About us | Online Shopping Mall</title>
  <link rel="stylesheet" href="style.css">

  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;500;800&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'" />
  <noscript>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;500;800&display=swap" rel="stylesheet" type="text/css" />
  </noscript>
</head>
<?php
session_start();
if (isset($_POST['logout'])) {
  unset($_POST);
  $_SESSION['valid'] = false;
}

?>
<?php
if (isset($_SESSION['valid']) == false || $_SESSION['valid'] == false) {
  echo "
<section class='admin-reg'>
  <h1 class='section-title'>Admin login</h1>
  <div class='small-container'>
    <div class='row'>
      <div class='col-50'>
        <form method='post' name='admin-login-form' onsubmit='return passCheck()'>
          <label for='admin-username'>Username</label><br>
          <input style='width: 100%;' type='text' name='admin-username' required><br><br>
          <label for='admin-password'>Password</label><br>
          <input style='width: 100%;' type='password' name='admin-password' id='password' required>";
}


if (isset($_POST['admin-login'])) {
  if (
    $_POST['admin-username'] != $admin[0] || password_verify($_POST['admin-password'], $admin[1]) === false
  ) {
    $_SESSION['valid'] = false;
  }
  if (
    $_POST['admin-username'] = $admin[0] && password_verify($_POST['admin-password'], $admin[1])
  ) {
    $_SESSION['valid'] = true;
    echo "<meta http-equiv='refresh' content='0'>";
  }
}
if (isset($_SESSION['valid']) == false || $_SESSION['valid'] == false) {
  echo "
          <br>
          <button id='submit' class='btn' style='width: 30%;' type='submit' name='admin-login'>Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>";
}
?>
<?php
if (isset($_SESSION['valid'])) {
  if ($_SESSION['valid'] == true) {
    echo "
<body>
  <section class='admin-dashboard'>
    <h1 class='section-title'>Admin Dashboard</h1>
    <p class='text-center color-red' >Hard refresh on affected page(s) to see changes</p>
    <div class='container'>
      <div class='row'>
        <div class='col-100'>
          <form method='post' name='admin-dashboard-form' action='' enctype='multipart/form-data'>
            <label class='text-big' for='copyright-text'>Copyright</label>
            <textarea class='ad-textarea' name='copyright-text' placeholder=''>";
    echo str_replace("<br>", "", $texts[0]);
    echo "</textarea><br>

            <label class='text-big' for='tos-text'>Term Of Services</label>
            <textarea class='ad-textarea' name='tos-text' placeholder=''>";
    echo str_replace("<br>", "", $texts[1]);
    echo "</textarea><br>

            <label class='text-big' for='cprivacy-text'>Privacy Policy</label>
            <textarea class='ad-textarea' name='privacy-text' placeholder=''>";
    echo str_replace("<br>", "", $texts[2]);
    echo "</textarea><br>
            <div style='margin:0 35%'>

            <button style='width: 45%;' class='btn bg-color-black' type='submit' name='logout'>Logout</button>

            
              <button class='btn' style='width: 45%;' type='submit' name='admin-dashboard'>Save</button><br>

            </div>
          
        </div>        
      </div>
      <h2 class='section-title'>About Us Portraits</h2>
      <div class='row'>
        <div class='col-20'>
        <h3 class='text-center'>Huy</h3>
        <br>
        <img src='images/Huy.jpg'><br>
        <p class='text-center'>Upload new image:</p>
        <input type='file' name='Huy'>
        </div>
        <div class='col-20'>
        <h3 class='text-center'>Huan</h3>
        <br>
        <img src='images/Huan.jpg'><br>
        <p class='text-center'>Upload new image:</p>
        <input type='file' name='Huan'>
        </div>
        <div class='col-20'>
        <h3 class='text-center'>Nguyen</h3>
        <br>
        <img src='images/Nguyen.jpg'><br>
        <p class='text-center'>Upload new image:</p>
        <input type='file' name='Nguyen'>
        </div>
      </div>
      <div style='margin:0 35%'>

      <button style='width: 45%;' class='btn bg-color-black' type='submit' name='logout'>Logout</button>

      
        <button class='btn' style='width: 45%;' type='submit' name='admin-dashboard'>Save</button><br>

      </div>
    </div>
    </form>
  </section>
</body>";
  }
} ?>

<?php
function checkUpload($name){
  $changeName = "images/" . $name.'.'. pathinfo($_FILES[$name]["name"] ,PATHINFO_EXTENSION); //get the file extension and append it to the new file name
  $uploadSuccess = 1;
  $ext = pathinfo($_FILES[$name]["name"] ,PATHINFO_EXTENSION);
  // Check file size
if ($_FILES["$name"]["size"] > 8000000) {
  echo "<script type='text/javascript'>alert('Sorry, your $name file is too large.');</script>";
    $uploadSuccess = 0;
}

// Allow certain file formats
if($ext != "jpg") {
  echo "<script type='text/javascript'>alert('Only upload JPG for $name');</script>";
    $uploadSuccess = 0;
}
// Check if $uploadSuccess is set to 0 by an error
if ($uploadSuccess == 0) {
  echo "<script type='text/javascript'>alert('Upload failed for $name');</script>";
// if everything is ok, try to upload file
} else {
  unlink($name . ".png");
  unlink($name . ".jpeg");
  unlink($name . ".jpg");
    if (move_uploaded_file($_FILES["$name"]["tmp_name"],  $changeName)) {
      echo "<script type='text/javascript'>alert('$name portrait uploaded');</script>";
    }
}

}

if (isset($_POST['admin-dashboard'])){
  
  if (file_exists($_FILES['Nguyen']['tmp_name']) || is_uploaded_file($_FILES['Nguyen']['tmp_name'])){
    checkUpload('Nguyen');
  }
  if (file_exists($_FILES['Huan']['tmp_name']) || is_uploaded_file($_FILES['Nguyen']['tmp_name'])){
    checkUpload('Huan');
  }
  if (file_exists($_FILES['Huy']['tmp_name']) || is_uploaded_file($_FILES['Nguyen']['tmp_name'])){
    checkUpload('Huy');
  }
  
}



?>

</html>
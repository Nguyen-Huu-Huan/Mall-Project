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
  $copyright = $_POST['copyright-text'];
  $tos = $_POST['tos-text'];
  $privacy = $_POST['privacy-text'];
  fwrite($fp, str_replace("\n", "<br>", (rtrim($copyright, "\n"))) . "\n");
  fwrite($fp, str_replace("\n", "<br>", (rtrim($tos, "\n"))) . "\n");
  fwrite($fp, str_replace("\n", "<br>", (rtrim($privacy, "\n"))) . "\n");
};


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
  <title>Mallux About us | Online Shopping Mall</title>
  <link rel="stylesheet" href="style.css">

  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;500;800&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'" />
  <noscript>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;500;800&display=swap" rel="stylesheet" type="text/css" />
  </noscript>
</head>
<?php
$yoa = 'zxc';
session_start();
echo ($_SESSION['valid']);
echo ($yoa = $admin[0] && password_verify('zxc', $admin[1]));

?>

<section class="admin-reg">
  <h1 class="section-title">Admin login</h1>
  <div class="small-container">
    <div class="row">
      <div class="col-50">
        <form method="post" name="admin-login-form" onsubmit="return passCheck()">
          <label for="admin-username">Username</label><br>
          <input style="width: 100%;" type="text" name="admin-username" required><br><br>
          <label for="admin-password">Password</label><br>
          <input style="width: 100%;" type="password" name="admin-password" id="password" required><br><br>
          <?php

          if (isset($_POST['admin-login'])) {
            if (
              $_POST['admin-username'] != $admin[0] || password_verify($_POST['admin-password'], $admin[1]) === false
            ) {
              $_SESSION['valid'] === false;
              echo "<meta http-equiv='refresh' content='0'>";
            }
            if (
              $_POST['admin-username'] = $admin[0] && password_verify($_POST['admin-password'], $admin[1])
            ) {
              $_SESSION['valid'] === true;
              echo "<meta http-equiv='refresh' content='0'>";
            }
          }
          ?>
          <br><br>
          <button id="submit" class="btn" style="width: 30%;" type="submit" name="admin-login">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php

if ($_SESSION['valid'] === true) {
  echo "
<body>
  <section class='admin-dashboard'>
    <h1 class='section-title'>Admin Dashboard</h1>
    <p class='color-red text-center'>Use &ltbr&gt for line break and remember to click save after editing.</p>
    <br>
    <div class='container'>
      <div class='row'>
        <div class='col-100'>
          <form method='post' name='admin-dashboard-form' action=''>
            <label class='text-big' for='copyright-text'>Copyright Texts</label>
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
            <form method='post'>
            <button style='width: 45%;' class='btn bg-color-black' type='submit' name='logout'>Logout</button>
</form>
            
              <button class='btn' style='width: 45%;' type='submit' name='admin-dashboard'>Save</button><br>

            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>";
} ?>

</html>
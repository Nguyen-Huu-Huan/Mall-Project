<?php
$fp = fopen('data.csv', 'r');
while ($line = fgets($fp)) {
  $texts[] = $line;
};

if (isset($_POST['admin-dashboard'])) {
  $copyright = $_POST['copyright-text'];
  $tos = $_POST['tos-text'];
  $privacy = $_POST['privacy-text'];
  flock($fp, LOCK_SH);
  $datafile = fopen('data .csv', 'w');
  
  fwrite($datafile,$copyright . "\n");
  fwrite($datafile,$tos."\n");
  fwrite($datafile,$privacy."\n");
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

<body>
  <section class="admin-dashboard">
    <h1 class="section-title">Admin Dashboard</h1>
    <p class="color-red text-center">Use &ltbr&gt for line break and remember to click save after editing.</p>
    <div class="container">
      <div class="row">
        <div class="col-100">
          <form method="post" name="admin-dashboard-form">
          <div style="margin:0 35%">
          <button class="btn" style="width: 100%;" type="submit" name="admin-dashboard">Save</button><br>

          </div>
            <label class="text-big" for="copyright-text">Copyright Texts</label>
            <textarea class="ad-textarea" name="copyright-text" placeholder=""><?php echo (str_replace('"', "", $texts[0])) ?></textarea><br>

            <label class="text-big" for="tos-text">Term Of Services</label>
            <textarea class="ad-textarea" name="tos-text" placeholder=""><?php echo (str_replace('"', "", $texts[1])) ?></textarea><br>

            <label class="text-big" for="cprivacy-text">Privacy Policy</label>
            <textarea class="ad-textarea" name="privacy-text" placeholder=""><?php echo (str_replace('"', "", $texts[2])) ?></textarea><br>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>

</html>
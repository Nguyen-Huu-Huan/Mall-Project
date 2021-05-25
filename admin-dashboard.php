<?php
$fp = fopen ('data.csv', 'r');
while($line = fgets($fp)){
  $texts[] = $line;
};
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
    <div class="container">
      <div class="row">
        <div class="col-100">
        <label for="copyright-text">Copyright Texts</label>
        <textarea class="ad-textarea" name="copyright-text" placeholder=""><?php echo (str_replace('"',"",$texts[0]))?></textarea>
        </div>
        <div class="col-30">
        </div>
        <div class="col-30">
        </div>
      </div>
    </div>
  </section>
</body>

</html>
<?php
    if (isset($_POST['admin-reg'])) {
        $username = $_POST['admin-username'];
        $password = $_POST['admin-password'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $adminfile = fopen('../adminfile.txt', 'w');
        fwrite($adminfile,$username . "\n");
        fwrite($adminfile,$password_hash);
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

<body>
    <section class="admin-reg">
        <h1 class="section-title">Admin Registeration</h1>
        <div class="small-container">
            <div class="row">
                <div class="col-50">
                    <form method="post" name="admin-reg-form">
                        <label for="admin-username">Username</label><br>
                        <input style="width: 100%;" type="text" name="admin-username" required><br><br>
                        <label for="admin-password">Password</label><br>
                        <input style="width: 100%;" type="password" name="admin-password" required><br><br>
                        <button class="btn" style="width: 30%;" type="submit" name="admin-reg">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
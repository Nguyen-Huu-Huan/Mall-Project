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
                    <form method="post" name="admin-reg-form" onsubmit="return passCheck()">
                        <label for="admin-username">Username</label><br>
                        <input style="width: 100%;" type="text" name="admin-username" required><br><br>
                        <label for="admin-password">Password</label><br>
                        <input style="width: 100%;" type="password" name="admin-password" onkeyup="passCheck()" id="password" required><br><br>
                        <label for="re-password">Repeat Password</label><br>
                        <input style="width: 100%;" type="password" name="re-password" onkeyup="passCheck()" id="re-password" required>
                        <p id="error"></p>
                        <br><br>
                        <button id="submit" class="btn" style="width: 30%;" type="submit" name="admin-reg">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
<script>

    let message = ""

    function passCheck() {
        if (document.querySelector("#password").value == document.querySelector("#re-password").value) {

            if (document.querySelector("#password").value == "") {
                document.querySelector("#error").innerHTML = "";
            } else {
                message = "Password matched"
                document.querySelector("#error").innerHTML = message;
                return true;
            }

            <?php
            if (isset($_POST['admin-reg'])) {
                $username = $_POST['admin-username'];
                $password = $_POST['admin-password'];
                $password_hash = password_hash($password, PASSWORD_BCRYPT);
                $adminfile = fopen('../adminfile.csv', 'w');
                fwrite($adminfile, $username . "\n");
                fwrite($adminfile, $password_hash);
                echo "Admin account created";
            }
            ?>

        } else {
            if (document.querySelector("#password").value == "") {
                document.querySelector("#error").innerHTML = "";
            } else {
                
                document.querySelector("#error").innerHTML = "Password does not match";
            }
            return false;
        }
    }

</script>

</html>
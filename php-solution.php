<?php
session_start();
?>
<html>
    <head></head>
    <body>
        <form method="post" action="">
            <input type="submit" name="count" value="Start counting" />
        </form>
        <?php
        // if(isset($_POST['count'])){
        //     if(!($_SESSION['fwe'])){
        //         $_SESSION['fwe'] = 1;
        //     }else{
        //         $count = $_SESSION['fwe'] + 1;
        //         $_SESSION['fwe'] = $count;
        //     }
        // }
        // echo $_SESSION['fwe'];
        if (isset($_POST['count'])){
            $count = $_SESSION['hello']+1;
            $_SESSION['hello'] = $count;
            echo "<h1>".$_SESSION['hello']."</h1>";
        }
        unset($_POST)
        ?>
    </body>
</html>
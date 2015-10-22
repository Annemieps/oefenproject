<?php
//random.php

session_start();

if (!isset($_SESSION["aantal"])) {
    $_SESSION["aantal"] = 0;
} else {
    $_SESSION["aantal"] ++;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo $_SESSION["aantal"];
        ?>
    </body>
</html>

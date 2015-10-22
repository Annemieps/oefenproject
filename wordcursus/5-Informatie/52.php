<?php
//random.php

session_start();

if (!isset($_SESSION["aantal"])) {
    $_SESSION["aantal"] = 0;
} else {
    $_SESSION["aantal"] ++;
}
if (!isset($_SESSION["getal"]) || $_SESSION["aantal"] == 10) {
    $_SESSION["aantal"] = 0;
    $_SESSION["getal"] = rand(1, 100);
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo $_SESSION["getal"];
        ?>
    </body>
</html>

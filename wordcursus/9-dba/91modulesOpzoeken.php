<?php
require_once './91moduleLijst.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gegevens ophalen</title>
    </head>
    <body>
        <h1>Zoekresultaat</h1>        
        <?php
        $ophalen=new moduleLijst();
        $tab=$ophalen->getLijst();
        ?>
        <ul>
        <?php
            foreach ($tab as $module) {
                print("<li>" . $module . "</li>");
            }
        ?>
        </ul>
        
    </body>
</html>

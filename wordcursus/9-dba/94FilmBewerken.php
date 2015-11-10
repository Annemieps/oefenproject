<?php
require_once './93filmGegevens.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Film aanpassen</h1>
        <form action="94FilmBewerken.php.php?action=verwerk&id=<?php print($_GET["id"]); ?>" method="post">
            <label for="titel">Titel</label> <input type="text" name="titel" required><br><br>
            <label for ="duurtijd">Duurtijd</label> <input type="number"  min="1" name="duurtijd" required> minuten.<br><br>
        <input type="submit" value="Toevoegen"/>
    </body>
</html>

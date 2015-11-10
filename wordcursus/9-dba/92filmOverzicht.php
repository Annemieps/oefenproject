<?php
require_once './92filmGegevens.php';

if (isset($_POST["titel"]) && $_POST["duurtijd"]>=0) {
 $filmlijst = new FilmLijst();
 $filmlijst->maakFilm(($_POST["titel"]),$_POST["duurtijd"]);
}   

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Alle films</h1>
        <?php
        $filmGegevens = new FilmLijst();
        $tab=$filmGegevens->getLijst();
        
        foreach ($tab as $film) {
            print("<li>" . $film . "</li>");
        }
	?>
        
        <h1>Film toevoegen</h1>
        <form action="" method="post">
            <label for="titel">Titel</label> <input type="text" name="titel" required><br><br>
            <label for ="duurtijd">Duurtijd</label> <input type="number"  min="1" name="duurtijd" required> minuten.<br><br>
        <input type="submit" value="Toevoegen"/>
    </body>
</html>

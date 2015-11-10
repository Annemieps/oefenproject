<?php
require_once './93filmGegevens.php';
$filmGegevens = new FilmLijst();

//Is de invoer van de invoervelden juist? Voer dan de functie uit om een film aan te maken
//en post de titel en duurtijd als parameters
if (isset($_POST["titel"]) && $_POST["duurtijd"]>=0) {
 $filmGegevens->maakFilm(($_POST["titel"]),$_POST["duurtijd"]);
}   

//voor het aanroepen van delete dat in de delete knop zit.
if (isset($_GET["action"]) && $_GET["action"] == "delete") {
    $filmGegevens->verwijder($_GET["id"]);
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
        //maak een lijst aan
        $tab=$filmGegevens->getLijst();
        
        //voor elke film in de tabel word de titel opgeroepen en de duurtijd.
        //De delete knop heeft een link waarin een action delete staat met een dynamisch ID
        //het id komt uit film
        foreach ($tab as $film) {
          echo $film->getTitel() . " - " . $film->getDuurtijd() . " - "; 
        ?> 
        min <a href="93filmOverzicht.php?action=delete&id=<?php echo $film->getId(); ?>">
             <img src="delete.png" alt=""/></a><br>
             
          <?php
        }?>
	
        
        <h1>Film toevoegen</h1>
        <form action="" method="post">
            <label for="titel">Titel</label> <input type="text" name="titel" required><br><br>
            <label for ="duurtijd">Duurtijd</label> <input type="number"  min="1" name="duurtijd" required> minuten.<br><br>
        <input type="submit" value="Toevoegen"/>
    </body>
</html>

<?php
require_once './95DataGastenboek.php';
$berichten=new posten();

if (isset($_POST["auteur"]) && isset($_POST["boodschap"])) {
$berichten->invoegenPost($_POST["auteur"], $_POST["boodschap"]);
}

?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Berichten</h1>
        <?php
        $tab=$berichten->getLijst();
        foreach ($tab as $bericht) {
            
            echo '<p><b> Auteur: </b>' . $bericht->getAuteur() . '<br>';
            echo $bericht->getBoodschap().'<hr></p>';
        }
        ?>
        <h1>Bericht toevoegen</h1>
        <form action="" method="post">
            Auteur: <input type="text" name="auteur" required><br><br>
            Boodschap:<br>
            <textarea cols="59" rows="10" name="boodschap" maxlength="200" required></textarea><br>
            <input type="submit" value="Verzenden">
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>

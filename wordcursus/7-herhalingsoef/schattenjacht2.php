<?php
//schattenjacht.php

session_start();

//Als get reset leeg is en reset is één dan word de session variabele deuren en schattendeuren leeg gemaakt. 
if (isset($_GET["reset"]) && $_GET["reset"] == 1) {
    unset($_SESSION["deurenReeks"]);
    unset($_SESSION["schattenDeurNr"]);
}

//als de sessie variabele deuren leeg is dan 
if (!isset($_SESSION["deurenReeks"])) {
    //word er van de sessie variabele deurenreeks een array gemaakt
    $_SESSION["deurenReeks"] = array();
    
    for ($i = 1; $i <= 7; $i++) {
        //de 7 deuren worden op nul gezet in de deurenreeks
        $_SESSION["deurenReeks"][$i] = 0;
    }
    //het nummer van de schat word aangemaakt
    $_SESSION["schattenDeurNr"] = rand(1, 7);
}

//als de gekozen deur opgevult is dan:
if (isset($_GET["kiesdeur"])) {
   //word die in een variabele gestoken
    $gekozenDeurNr = $_GET["kiesdeur"];
    //als de gekozen deur gelijk is aan die in de sessie variabele zit dan is het 2
    if ($gekozenDeurNr == $_SESSION["schattenDeurNr"]) {
        $_SESSION["deurenReeks"][$gekozenDeurNr] = 2;
    } else {
        //anders is het één: gekozen deur maar leeg
        $_SESSION["deurenReeks"][$gekozenDeurNr] = 1;
    }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Schattenjacht</title>
        <style>
            img { border-width: 0px;}
        </style>
    </head>
    <body>
        <h1>Kies een deur</h1>
        
        <?php
        //tellen tot zeven
        for ($i = 1; $i <= 7; $i++) {
            ?>
            <!--link genereren voor elke deur-->
            <a href="schattenjacht.php?kiesdeur=<?php echo $i;?>" 
                
                <?php
                
                if ($_SESSION["deurenReeks"][$i] == 0) {
                    ?>
                <img src="img/doorclosed.png" alt="gesloten deur"/>
                    <?php
                } elseif ($_SESSION["deurenReeks"][$i] == 1) {
                    ?>
                <img src="img/dooropen.png" alt="open deur" />
                    <?php
                } elseif ($_SESSION["deurenReeks"][$i] == 2) {
                    ?>
                <img src="img/doortreasure.png" alt="deur met schat" />
                    <?php
                }
                ?>
            </a>
            <?php
        }
        ?>
        <br />
        
    </body>
</html>

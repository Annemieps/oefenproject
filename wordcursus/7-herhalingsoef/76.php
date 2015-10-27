<?php

session_start();

//als er nog geen aantal lucifers is opgeslagen dan word dat op 7 gezet
if (!isset($_SESSION['aantallucifers'])){
    $_SESSION['aantallucifers']=7;
   
}
   
//als het aantal (van de knoppen) ingevuld is dan word het in een variabele gestopt
if (isset($_GET["aantal"])){
    $aantal=$_GET["aantal"];
    
    //als aantal aanwezige lucifers min aantal groter is dan nul = -
    if($_SESSION['aantallucifers']-$aantal>0){
        $_SESSION['aantallucifers']=$_SESSION['aantallucifers']-$aantal;
        echo $_SESSION['aantallucifers'];
    }
    //als het aantal lucifers min $aantal kleiner of gelijk is aan nul dan is het spel gedaan.
    elseif ($_SESSION["aantalLucifers"] - $aantal <= 0) {
        echo "Spel gedaan";
    }
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
        for ($i=1;$i<=$_SESSION['aantallucifers'];$i++){
            ?><img src="img/lucifer.png" class="onzichtbaar"><?php
        }
        ?>
            <form action="76.php?aantal=1" method="post">
                <button type="submit" name="een">één lucifer wegnemen</button>
            </form>
            <form action="76.php?aantal=2" method="post">
                <button type="submit" name="twee">Twee lucifer wegnemen</button>
            </form>
    </body>
</html>

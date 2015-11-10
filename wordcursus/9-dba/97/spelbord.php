<?php
require_once './spel.php';

if (isset($_GET["action"])) {
    if ($_GET["action"] == "kiesgeel"){
    $_SESSION['kleur']=1;
    }
    elseif ($_GET["action"] == "kiesrood"){
    $_SESSION['kleur']=2;
    }
    elseif ($_GET["action"] == "plaatsmunt"){
        $beurt=new spel();
        $beurt->smijtMunt($_GET["kolom"]);
       echo $_GET["kolom"];
    }
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vier op een rij</title>
    </head>
    <body>
        <h1>Vier op een rij</h1>
        <table>
        <?php 
        
        for ($rij = 1;$rij <= 6;$rij++) {
           ?>
            <tr>
            <?php
                for ($kolom = 1;$kolom <= 7;$kolom++) {
            ?>
                <td>
                    <a href="spelbord.php?action=plaatsmunt&kolom=<?php echo $kolom ;?>">
                        <?php
                            if ($spel->getStatus($rij, $kolom) == 0) {
                            ?>
                                <img src="img/emptyslot.png">
                            <?php
                            } 
                            elseif ($spel->getStatus($rij, $kolom) == 1) {
                            ?>
                                <img src="img/yellowslot.png">
                            <?php
                            } 
                            elseif ($spel->getStatus($rij, $kolom) == 2) {
                            ?>
                                <img src="img/redslot.png">
                            <?php
                            }
                            ?>
                    
                    
                    </a>
                </td>
               
                <?php
                }
                ?>
            </tr>
        <?php
        }

        ?>
        </table>
        <a href="spelbord.php">refresh</a><br>
        <a href="spelbord.php?action=<?php if ($_SESSION['kleur']=1) {echo "kiesrood";} 
        else {echo "kiesgeel";} ?>">Verander kleur</a><br>
               
        <a href="#">Spel herstarten</a>
        
    </body>
</html>

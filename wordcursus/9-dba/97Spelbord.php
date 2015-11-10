<?php
if (isset($_GET["action"])) {
    if ($_GET["action"] == "kiesgeel"){
    $_SESSION['kleur']=1;
    }
    elseif ($_GET["action"] == "kiesrood"){
    $_SESSION['kleur']=2;
    }
    
}
if (isset($_GET['rij']) && isset($_GET['kolom'])){
    $spel=new spel();
    $spel->smijtMunt($_GET['rij'],$_GET['kolom'],$_SESSION['kleur']);
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
                <td><a href="97Spelbord.php?rij=<?php echo $rij.'&kolom='.$kolom ;?>"><img src="emptyslot.png"></a></td>
               
                <?php
               
            }
            ?>
            </tr>
            <?php
        }

        ?>
    </body>
</html>
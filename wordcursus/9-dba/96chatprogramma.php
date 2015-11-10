<?php
session_start();
require_once './96Chat.php';
$berichten=new gastenboek();

//if(!isset($_SESSION['gebruikersnaam'])){
//$_SESSION['gebruikersnaam']=rand(111,999);
//}
if (isset($_GET["action"]) && $_GET["action"] == "add") {
    if(!isset($_SESSION['gebruikersnaam'])){
    $_SESSION['gebruikersnaam']=  $_POST['gebruikersnaam'];
    }
    $berichten->posten($_SESSION['gebruikersnaam'],$_POST['bericht']);    
}

?>
<!DOCTYPE html>
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
            echo 'p'.$bericht->getNickname() . ' > ';
            echo $bericht->getBoodschap().'<br>';
        }
        ?>
        <br>
        
        <form action="96chatprogramma.php?action=add" method="post">
            Username: <br><input type="text" name="gebruikersnaam" required <?php if (isset($_SESSION['gebruikersnaam'])) echo "disabled" ?>><br>
            Bericht:<br>
            
            <textarea rows="5" cols="55" name="bericht"></textarea><br>
            <input type="submit" value="Versturen">
        </form>
        
    </body>
</html>    
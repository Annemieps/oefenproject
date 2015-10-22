<?php
        if (!isset($_POST["kleur"])) {
            setcookie("achtergrondkleur", $_POST["kleur"], time() + 24 * 3600);
            $achtergrondkleur = $_POST["kleur"];
	} 
        elseif (isset ($_COOKIE["achtergrond"])){
            $achtergrondkleur=$_COOKIE["achtergrondkleur"];
        }


?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body style="background-color: <?php echo $achtergrondkleur; ?>"> 
        <form action="55.php" method="post">
            Kies uw favoriete achtergrond kleur: 
            <select name="kleur">
                <option value="red">Rood</option>
                <option value="blue">Blauw</option>
                <option value="green">Groen</option>
                <option value="yellow">Geel</option>
                <option value="white">Wit</option>
             </select>
            <button type="submit" name="submit">Ok</button>
                  
        </form>
        <?php
        
        ?>
    </body>
</html>

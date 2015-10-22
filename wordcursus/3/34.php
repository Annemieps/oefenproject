<?php
class Getal{
    public function getSom($getal1,$getal2){
        $resultaat=$getal1+$getal2;
        return $resultaat;
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Getallenkiezer</title>
    </head>
    <body>
        <form action="34.php" method="get" id="insturen">
            <label for="getal1">Getal 1</label>
            <input type="text" name="getal1"><br><br>
            <label for="getal2">Getal 2</label>
            <input type="text" name="getal2"><br><br>
            
            <button type="submit" form="insturen" value="Submit">Som Berekenen</button>
        </form>
        <br>
        
                <?php
            	$getal=new Getal();
                $resultaat=$getal->getSom($_GET["getal1"],$_GET["getal2"]);
                
                if (empty($_GET["getal1"])||empty($_GET["getal2"]));
                else echo "De som van ". $_GET["getal1"] ."+". $_GET["getal2"] . " = ". $resultaat;
            	?>	
    </body>
</html>

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
        
                <?php
            	echo "Getal 1: " . $_GET["getal1"] . ". <br>";
            	echo "Getal 2: " . $_GET["getal2"] . ". <br>";
                                
                $getal=new Getal();
                $resultaat=$getal->getSom($_GET["getal1"],$_GET["getal2"]);
                echo "De som van ". $_GET["getal1"] ."+". $_GET["getal2"] . " = ". $resultaat;
            	?>	
    </body>
</html>

<?php
class Seizoen{    
public function getArray(){
                $Seizoen = array();
		array_push($Seizoen, "Winter");
		array_push($Seizoen, "Lente");
		array_push($Seizoen, "Zomer");
                array_push($Seizoen, "Herfst");
                print_r($Seizoen);
    }
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
                
                
                $seizoenen = new Seizoen();
                print_r($seizoenen->getArray());
        ?>
    </body>
</html>

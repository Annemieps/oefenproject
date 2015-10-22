<?php
/*tachtig*/
class getallen{
    public function tachtig(){
        $totTachtig=array();
        $getal=rand(1,100);
        array_push($totTachtig, $getal);
            while($getal<80){
                $getal=rand(1,100);
                array_push($totTachtig, $getal);
            }
        return $totTachtig;
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
        $getal=new getallen();
        print_r($getal->tachtig());
        ?>
    </body>
</html>

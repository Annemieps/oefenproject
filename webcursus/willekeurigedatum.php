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
        $beginjaar=2010;
        $eindjaar=2020;
        function datum($jaar,$maanden = array(1,3,4,5,6,7,8,9,10,11,12)){
            $maandnaam=array("januari", "februari", "maart", "april", "mei", "juni", "juli", "augustus", "september", "oktober", "november", "december");
            $maandnummer=rand(1,count($maanden));
            $maand = $maanden[$maandnummer-1];
            $benaming_maand=$maandnaam[$maand];
            $tijdstip=  mktime(0,0,0, $maand,1,$jaar);
            $dagen=  date('t',$tijdstip);
            
        
        }
        
        ?>
    </body>
</html>

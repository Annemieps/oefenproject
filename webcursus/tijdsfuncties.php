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
        $tijdstip=  mktime(08, 2, 00, 5, 2, 2013);
        $nu=  time();
        
        if ($nu>$tijdstip) echo "U bent te laat, we hadden u verwacht op ".  date('d-m-Y', $tijdstip);
                else 
                    echo "Je bent op tijd";
        ?>
        
       
        
    </body>
</html>

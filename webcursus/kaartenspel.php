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
            $soorten = array("Harten", "Koeken", "Klaveren", "Schoppen");
            $waarden = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, "Boer", "Dame", "Heer");
            $kaarten = array();
            
            for ($index = 0; $index < count($soorten); $index++) {
                for ($index1 = 0; $index1 < count($waarden); $index1++) {
                    array_push($kaarten, "$soorten[$index] $waarden[$index1]");
                } 
            }
            $getrokken_kaart=  array_rand($kaarten);
            echo "De getrokken kaart is " . $kaarten[$getrokken_kaart];
            ?>
    </body>
</html>

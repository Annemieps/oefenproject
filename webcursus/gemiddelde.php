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
        function gemiddelde($array_waarden){
            $som=  array_sum($array_waarden);
            $aantal=count($array_waarden);
            $gem=$som/$aantal;
            return($gem);
        }
        
        $array1 = array(1,2,3,4,5);
        $array2 = array(10,5,3);
        $array3 = array(3,4,5,2,5,1,2,1,0,2);
        echo gemiddelde($array1)."<br>".gemiddelde($array2)."<br>".gemiddelde($array3);
        ?>
    </body>
</html>

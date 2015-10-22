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
        $computergok=rand(1,10);
        echo $computergok."<br>";
        echo $_GET["mijngok"]."<br>";
        if($computergok==$_GET["mijngok"]){
            echo "Juist";
        }
        else
            echo "Fout";
        ?>
    </body>
</html>

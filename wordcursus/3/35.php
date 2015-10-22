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
        <form action="35.php" method="get" id="gok">
            <label for="mijngok">Getal 1</label>
            <input type="text" name="mijngok"><br><br>
                   
            <button type="submit" form="gok" value="Submit">Gok</button>
        </form>
        <?php
        if(empty($_GET["mijngok"]));
        else{
            $computergok=rand(1,10);
            if($computergok==$_GET["mijngok"]){
                echo "Juist";
            }
            else
                echo "Fout";
        }
        ?>
    </body>
</html>

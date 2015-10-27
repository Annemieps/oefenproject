<?php
$schat=rand(1,7);
$keuze=$_GET["keuzedeur"];
if($keuze!=$schat){
    $deurstatus=1;
}
else $deurstatus=2;

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
        <h1>Kies een deur</h1>
        <?php
        for ($i=1;$i<=7;$i++){
            echo '<img src="img/doorclosed.png">';
            $deurstatus=0;
        }
        If ($deurstatus=0){
             echo '<img src="img/doorclosed.png">';
        }
        if ($deurstatus=1){
            echo '<img src="img/dooropen.png">';
        }
        if ($deurstatus=2){
               echo '<img src="img/doortreasure.png">';
        }
            
        ?>
    </body>
</html>

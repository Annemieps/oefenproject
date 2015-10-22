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
        $maandarray=array("januari", "februari", "maart", "april", "mei", "juni", "juli", "augustus", "september", "oktober", "november", "december");
        $maand=date("m");
        echo "<h1>Een kalender voor de maand ". $maandarray[$maand-1]."</h1>";
        $dagen= date("t");
        $weekdag=date("w");
        $eerstevandemaand=date("w",mktime(0, 0, 0, date('m'), 1, date('Y')));
        $vandaag=date('d');
                
        ?>
        <table border="1">
        <tr><td>Ma</td><td>Di</td><td>Wo</td><td>Do</td><td>Vr</td><td>Za</td><td>Zo</td></tr>
        <?php
        for ($index = 1; $index <= $dagen; $index++) 
        {
                    /*if($index=$eerste){
                        for($index1=1;$index1<$eerstevandemaand;$index1++){
                        echo "<td></td>";}
                    }*/
                    
                   
        ?>
        <td><?php echo $index;?></td>
                <?php
                              
                if($index%7==0){
                    echo "</tr><tr>";
                }
        }?>
        
        </table>
    </body>
</html>

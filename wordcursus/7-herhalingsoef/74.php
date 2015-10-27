<?php
$tab=array();
for ($i=1;$i<=6;$i++){
    $willekeurigGetal = rand(1, 42);
    $tab[$i] = $willekeurigGetal;
}

?>
<table border="1">
<?php

for ($i=1;$i<=42;$i++){
    
    //begin table row
    if ($i % 7 == 1) {
       echo "<tr>";
    }
    
    //kleur aanpassen gekozen cellen
    if(in_array($i, $tab)){
        $kleur="#FFF936";
    }
    else{$kleur="#FFF";}
    
    //cellen afdrukken
    echo "<td bgcolor=".$kleur.">".$i."</td>";
    //als de cel de 7nde is, rij afsluiten.
    if($i %7 == 0){
    echo "</tr>";
    }
   }
   
   ?>
   </table>

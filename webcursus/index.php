<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tijdsaanduiding</title>
    </head>
    <body>
        <h1>
            
        Huidige tijd: 
    <?php 
        
        echo date("H:i:s"); 
        echo "<br>";
        echo "Hij zei \"Het is koud vandaag\".";
        echo "<br>";
        echo "\\\\ is het escapeteken voor een backslash." . "<br>";
        $test= strlen("Annemie");
        echo '$test bevat '.$test . " aantal letters.". "<br>";
        
        $a=15;
        $b=4;
        echo "De rest van $a gedeelt door $b is " . $a % $b;
    ?>
        <h1>Opervlakte driehoek        </h1>
    <?php

        $basis = 5;
        $hoogte = 3;

        $oppervlakte1 = $basis * $hoogte / 2;
        // Hier berekenen we de oppervlakte van de driehoek met rekenkundige operatoren.

        $oppervlakte2 = 1;
        // Hier berekenen we de oppervlakte met enkel toewijzingsoperatoren.
        // We moeten dan eerst de variabele oppervlakte2 initialiseren.
        // We kennen de waarde 1 toe omdat dit het neutrale element is voor de vermenigvuldiging.
        // Als we met 0 zouden initialiseren zou de $oppervlakte2 tijdens de hele berekening 0 blijven.

        $oppervlakte2 *= $basis;

        $oppervlakte2 *= $hoogte;

        $oppervlakte2 /= 2;

        // Als je het resultaat op het scherm wil zien verschijnen moet je nog een print-commando gebruiken.
        echo $oppervlakte2 . '<br><br>';
    ?>
        <h1>Oefening if else </h1>
    <?php
    $getal1=2;
    $getal2=2;
    
    if($getal1==$getal2) echo "getal 1 is gelijk aan getal 2";
    else if ($getal1>$getal2) echo "Getal 1 is groter dan getal 2";
    else echo "Getal 2 is groter dan getal 1";
    ?>
        <h1>Oefening switch</h1>  
        <?php
        $kleur = "rood";
        
        switch($kleur){
            case ("blauw"):{
            echo "Blauw is een mooie kleur";    
            }
            break;
            case ("groen"):{
            echo "Groen is niet mijn favoriete kleur";    
            }
            break;
            case ("rood"):{
            echo "Rood is de kleur van de liefde";    
            }
            break;
            default :{
            echo "Deze kleur heeft ook zijn charme";
            }
        }
        ?>
        
        <h1>Oefening while</h1>
        <?php
        $teller=1;
                while($teller<=100){
                echo $teller . '&nbsp;';
                $teller++;
                if($teller % 5 ==0){
                    echo "<br>";
                }
                }
        ?>
        <h1>While + Fibonacci</h1>
        <?php
        $getal1=0;
        $getal2=1;
        $som=$getal1+$getal2;
        echo "0 1 $som ";
        
        while ($som<1000000){
            $getal1 = $getal2;
            $getal2 = $som;
            $som = $getal1 + $getal2;
            echo $som . '&nbsp;';
        }
        ?>
        <h1>For lus</h1>
        <?php
        for ($teller=0;$teller<=100;$teller++)
               
               echo $teller;
        ?>
        
        <h2>
        <?php
        $grondgetal = 3;
        $getal = 1;
        echo "Het grondgetal is $grondgetal.";
        ?>
        </h2>
        <table width="30%" border="1">
        <?php
        for ($nummer=0; $nummer<=10; $nummer++) {
        ?>
        <tr>
        <td width="50%"><?php echo $nummer; ?></td>
        <td width="50%"><?php echo $getal; ?></td>
        </tr>
          
        <?php
        $getal = $grondgetal * $getal;
        }
        ?>
        </table>
        
        <h1>Break/Continue</h1>
        <?php
        $teller=0;
        while (true){
            $teller++;
            if($teller %2==1)continue;
            if($teller >10) break;
            echo $teller . " ";
        }
        
        echo "De volgende getallen zijn deelbaar door 3 en 5 <br>";
        $deteller=0;
        while(true){
            $teller++;
            if(($teller %3 <>0) ||($teller %5 <>0)) continue;
            if ($teller > 100) break;
            echo $teller ." ";
        }
        ?>    
        
        <h1>Rekenkundige functies</h1>
        <?php
        $getal= -10;
        $getal=abs($getal);
        echo $getal."<br>";
        $getal=sqrt($getal);
        echo $getal."<br>";
        $getal=round($getal,2);
        echo $getal."<br>";
        ?>
        
        <h1>time</h1>
        <?php
        $nu=time();
        echo round($nu/(60*60*24),2)."<br>";
        $geboortedatum=mktime(0,0,0,10,29,1990);
        echo round($geboortedatum/(60*60*24),2)."<br>";
        $verschil=$nu-$geboortedatum;
        $dagen=ceil($verschil/(60*60*24));
        echo "Je bent geboren op ".date("d-m-Y",$geboortedatum)." ". $dagen. " dagen oud";
        
        ?>
        <h1>Array</h1>
         <?php
        $seizoen=array("L"=>"Lente", "Z"=> "Zomer","H"=> "Herfst","W"=> "Winter");
        print_r($seizoen);
        ?>
        <h1>Foreach</h1>
        <?php
        $fruit=array('appel' => 'rood','peer' => 'groen','appelsien' => 'oranje','banaan' => 'geel');
        foreach ($fruit as $item => $kleur) {
            echo "Een $item is $kleur. <br>";
            
            }
        ?>
        </body>
</html>

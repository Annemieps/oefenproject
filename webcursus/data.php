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
        $beginjaar = 2010;
        $eindjaar = 2020;
        function datum($jaar, $maanden = array(1,2,3,4,5,6,7,8,9,10,11,12)) {
        $maandnaam = array("januari", "februari", "maart", "april", "mei", "juni", "juli", "augustus", "september", "oktober", "november", "december");
        $maandnummer = rand(1,count($maanden));
        $maand = $maanden[$maandnummer-1];
        $benaming_maand = $maandnaam[$maand-1];
        $tijdstip_in_maand = mktime(0,0,0,$maand,1,$jaar);

// We zoeken op hoeveel dagen er in deze maand zitten
$aantal_dagen_in_maand = date('t', $tijdstip_in_maand);

// We kiezen een willekeurige dag in de maand
$dag = rand(1,$aantal_dagen_in_maand);

// We schrijven het resultaat naar het scherm
print("$dag $benaming_maand $jaar<br>");
}

// We zoeken eerst in 11 opeenvolgende jaren een willekeurige datum
// Omdat er geen beperking is voor de maanden moet er maar één argument worden doorgegeven
for($i=2010;$i<=2020;$i++) datum($i);

print("<br>");

// We zoeken vervolgens in 11 opeenvolgende jaren een willekeurige datum in juli of augustus
// We geven nu wel een array door met de nummers van de maanden juli en augustus
for($i=2010;$i<=2020;$i++) datum($i, array(7, 8));

        ?>
        
        <h1>nieuwjaar</h1>
        <?php
        $jaar=date('Y');
        $volgendjaar=$jaar+1;
        $nu=time();
        $nieuwjaar=  mktime(0,0,0,1,1,$volgendjaar);
        $verschil=($nieuwjaar-$nu)/60/60/24;
        $verschil=  ceil($verschil);
        echo "Nog $verschil aantal dagen tot nieuwjaar."
        ?>
        
       
    </body>
</html>

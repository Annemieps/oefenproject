<?php
//analyse.php

class Oefening {
	public function getAnalyse($getal1, $getal2) {
                if ($getal1>$getal2) echo "Het eerste getal is groter dan het tweede";
                    elseif ($getal2>$getal1) {echo "Het eerste getal is niet groter dan het tweede";}
                    else echo "Het eerste getal is gelijk aan het tweede";
                    
                
	}
}
?>


<!DOCTYPE HTML>
<html>
	<head>
		<meta charset=utf-8>
		<title>Analyse</title>
	</head>
	<body>
		<h1>
			<?php
			$oef = new Oefening();
			print($oef->getAnalyse(-4, -4));
			?>
		</h1>
	</body>
</html>

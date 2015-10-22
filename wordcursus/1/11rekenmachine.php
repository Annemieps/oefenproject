<?php
//rekenmachine.php

class Rekenmachine {

	public function getKwadraat($getal) {
		$kwad = $getal * $getal;
		return $kwad;
	}

	public function getSom($getal1, $getal2) {
		$resultaat = $getal1 + $getal2;
		return $resultaat;
	}
        
        public function getMaal($getal1, $getal2) {
		$maal = $getal1 * $getal2;
		return $maal;
	}
}
?>


<!DOCTYPE HTML>
<html>
	<head>
		<meta charset=utf-8>
		<title>Rekenmachine</title>
                <style type="text/css">
                h1 { color: red; }
               </style>

	</head>
	<body>
		<h1>
			<?php
			$reken = new Rekenmachine();
			print($reken->getKwadraat(5));
			?>
		</h1>
		<h1>
			<?php
			print($reken->getSom(34, 55));
			?>
		</h1>
            <h1>
			<?php
			print($reken->getMaal(34, 55));
			?>
		</h1>
	</body>
</html>

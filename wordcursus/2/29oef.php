<?php
//analyse.php

class deSwitch {
	public function volUitgeschreven($getal) {
                if ($getal < 1 || $getal>5) {
                echo $getal;
                } elseif ($getal == 1) {
                    echo "een";
                } elseif ($getal == 2) {
                    echo "twee";
                }
                elseif ($getal == 3) {
                    echo "Drie";
                }
                elseif ($getal == 4) {
                    echo "Vier";
                }
                else echo "Vijf";

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
			$switchen = new deSwitch();
			echo $switchen->volUitgeschreven(6);
			?>
		</h1>
	</body>
</html>
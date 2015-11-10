<?php
//cursistenEnMedewerkers.php
require_once './cursist.php';
require_once './medewerker.php';


        $cursist = new Cursist("Peeters", "Jan", 3);
	$medewerker = new Medewerker("Janssens", "Tom", 8);

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Cursisten en medewerkers</title>
	</head>
	<body>
		<h1>Namen</h1>
		<ul>
			<li><?php print($cursist->getVollNaam());?></li>
			<li><?php print($medewerker->getVollNaam());?></li>
		</ul>
                <li><?php print($cursist->getVollNaam() . " volgt " .  
				$cursist->getAantalCursussen() . " cursus(sen)");?></li>
			<li><?php print($medewerker->getVollNaam() . " begeleidt " .  
				$medewerker->getAantalCursisten() .  
				" cursist(en)");?></li>

	</body>
</html>

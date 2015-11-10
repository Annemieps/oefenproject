<?php
//personenlijst.php

class PersonenLijst {

	public function getLijst() {
		$lijst = array();
                //verbinding leggen
		$dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8", 
				 "cursusgebruiker", "cursuspwd");
                //de query
                $resultSet = $dbh->query("select familienaam, voornaam from personen order by familienaam asc");
                $lijst=array();
                //voor elk resultaat van rij geef resulaat waar rij= familienaam, voornaam. 
                //push dan de lijst in de array
                foreach ($resultSet as $rij) {
                    $naam = $rij["familienaam"] . ", " . $rij["voornaam"];
                    array_push($lijst, $naam);

                }
		$dbh = null;
                return $lijst;
                
	}
	
}
?>


<!DOCTYPE HTML>
<html>
	<head>
		<meta charset=utf-8>
		<title>Databanken introductie</title>
	</head>
	<body>
		<?php
		$pl = new PersonenLijst();
		$tab = $pl->getLijst();
		?>
		<ul>
			<?php
			foreach ($tab as $naam) {
				print("<li>" . $naam . "</li>");
			}
			?>
		</ul>

	</body>
</html>

<?php
//dbGegevensOphalenParams.php

class PersonenLijst {

	public function getLijst($familienaam, $geslacht) {
            //database toegang = dbh
		$dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8", 
			"cursusgebruiker", "cursuspwd");

		//positionele params
                //de query in de variabele sql zetten
		$sql = "select familienaam, voornaam from personen  
			where familienaam = ? and geslacht = ? "; 	
                //de variabele stmt bevat dat de database toegang het sql statement prepared
		$stmt = $dbh->prepare($sql);
                //stmt execute een array met daarin familienaam en geslacht
		$stmt->execute(array($familienaam, $geslacht));
		$resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);

		//benoemde params
		//$sql = "select familienaam, voornaam from personen  
		//	where familienaam = :fn and geslacht = :gesl ";
		//$stmt = $dbh->prepare($sql);
		//$stmt->execute(array(':fn' => $familienaam, ':gesl' => $geslacht)); 
		//$resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);

		$lijst= array();
		foreach ($resultSet as $rij) {
			$naam = $rij["familienaam"] . ", " .	$rij["voornaam"];
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

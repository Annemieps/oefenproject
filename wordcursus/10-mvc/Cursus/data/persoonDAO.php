<?php 
//data/PersoonDAO.php

//Data access object
require_once("entities/Persoon.php");
require_once("DBConfig.php");

class PersoonDAO {

	public function getAll() {		
		$dbh = new PDO(DBConfig::$DB_CONNSTRING,  
			DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
                $sql = "select familienaam, voornaam from personen";
		$resultSet = $dbh->query($sql);

		$lijst = array();
		foreach ($resultSet as $rij) {
			$persoon = new Persoon($rij["familienaam"], $rij["voornaam"]);
			array_push($lijst, $persoon);
		}
		$dbh = null;
		return $lijst;
	}

}

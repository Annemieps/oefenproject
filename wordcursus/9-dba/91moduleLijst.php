<?php

class moduleLijst {

	public function getLijst() {
	$dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8","cursusgebruiker", "cursuspwd");
        $sql = "select naam, prijs from modules where prijs >= :minprijs and prijs <= :maxprijs";
        $statement = $dbh->prepare($sql);
        $statement->execute(array(':minprijs' => $_GET["minPrijs"], ':maxprijs' => $_GET["maxPrijs"]));
        $resultSet =  $statement->fetchAll(PDO::FETCH_ASSOC);
                
        $lijst = array();
        foreach ($resultSet as $rij) {
            $module = $rij["naam"] . " (" . $rij["prijs"] . " euro)";
            array_push($lijst, $module);
        }
	$dbh = null;
        return $lijst;
        }
	
}
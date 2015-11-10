<?php

class FilmLijst{
    public function maakFilm($titel,$duurtijd){
        $dba = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8", 
			"cursusgebruiker", "cursuspwd");
        $sql1='INSERT INTO films (titel,duurtijd,id) values (:titel,:duurtijd)';
        $resultaat = $dba->prepare($sql1);
        $resultaat->execute(array(':titel' => $titel,':duurtijd' => $duurtijd));
    }
    
    public function getLijst() {
        $dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8", 
			"cursusgebruiker", "cursuspwd");
        $sql="Select titel, duurtijd from films";
        $resultaat = $dbh->prepare($sql);
        $result = $resultaat->execute();
        
        $lijst=array();
        foreach ($resultaat as $rij) {
            $film = $rij["titel"] . ", (" . $rij["duurtijd"] ." min)";
            array_push($lijst, $film);
        }
        return $lijst;
        $dbh = null;      
    }
    
    
}
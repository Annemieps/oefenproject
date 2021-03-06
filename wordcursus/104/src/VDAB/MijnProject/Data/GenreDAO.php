<?php

//src/VDAB/MijnProject/Data/GenreDAO.php

namespace VDAB\MijnProject\Data;
use VDAB\MijnProject\Data\DBConfig;
use VDAB\MijnProject\Entities\Genre;
use PDO;

class GenreDAO {

    public function getById($id) {
        $sql = "select genre from mvc_genres where id = :id";
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':id' => $id));
        $rij = $stmt->fetch(PDO::FETCH_ASSOC);
        
        $genre = Genre::create($id, $rij["genre"] );
        $dbh = null;
        return $genre;
    }
    
    public function getAll() {
        $sql = "select id, genre from mvc_genres";
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $resultSet = $dbh->query($sql);
        
        $lijst = array();
        foreach ($resultSet as $rij) {
            $genre = Genre::create($rij["id"], $rij["genre"]);
            array_push($lijst, $genre);
        } 
        $dbh = null;
        return $lijst;
    }

}

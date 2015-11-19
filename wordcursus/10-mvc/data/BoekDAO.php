<?php
//getAll books, selectie van de boeken, inner join met genre

//data/BoekDAO.php
require_once("DBConfig.php");
require_once("entities/Genre.php");
require_once("entities/Boek.php");

class BoekDAO {

	public function getAll() {		
		$sql = "select mvc_boeken.id as boek_id, titel,  
			genre_id, genre from mvc_boeken,  
			mvc_genres where genre_id = mvc_genres.id";
		$dbh = new PDO(DBConfig::$DB_CONNSTRING,  
			DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
		$resultSet = $dbh->query($sql);
		
		$lijst = array();
                //waarom create bij het selecteren en maken van een lijst? 
		foreach ($resultSet as $rij) {
                    //Wat doet die genre::create
			 $genre = Genre::create($rij["genre_id"], $rij["genre"]);
			 $boek = Boek::create($rij["boek_id"], $rij["titel"], $genre);
			 array_push($lijst, $boek);
		}
		$dbh = null;
		return $lijst;
	}
        
        //per id ophalen
        public function getById($id) {
            $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, 
                    DBConfig::$DB_PASSWORD);
            $sql = "select mvc_boeken.id as boek_id, titel, genre_id, genre  
                    from mvc_boeken, mvc_genres  
                    where genre_id = mvc_genres.id and mvc_boeken.id = :id" ;
            $stmt = $dbh->prepare($sql);
            $stmt->execute(array(':id' => $id));
            $rij = $stmt->fetch(PDO::FETCH_ASSOC);

            $genre = Genre::create($rij["genre_id"],$rij["genre"]);
            $boek = Boek::create($rij["boek_id"], $rij["titel"], $genre);
            $dbh = null;
            return $boek;
        }       
        
        
        //maken van boek, de insert
        public function create($titel, $genreId) {
            $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME,  
                    DBConfig::$DB_PASSWORD);
            $sql = "insert into mvc_boeken (titel, genre_id)  
                    values (:titel, :genreId)";
            
            $stmt = $dbh->prepare($sql);
            $stmt->execute(array(':titel' => $titel, ':genreId' => $genreId));

            //id van de net ingevoerde boek
            $boekId = $dbh->lastInsertId();
            $dbh = null;

            //genre id ophalen voor het boek
            $genreDAO = new GenreDAO();
            $genre = $genreDAO->getById($genreId);
            //creer boek aan de hand van boekid,titel en genre
            $boek = Boek::create($boekId, $titel, $genre);
            return $boek;
        }
        
        public function delete($id){
            $dba=new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
            $sql="delete from mvc_boeken where id = :id";
            $stmt = $dba->prepare($sql);
            $stmt->execute(array('id' => $id));
            $dba=null;
        }

	
}

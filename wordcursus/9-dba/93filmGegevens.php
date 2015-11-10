<?php
require_once './92Film.php';

class FilmLijst{
    //oproepen lijst
    private $dbConn;
    private $dbUsername;
    private $dbPassword;

    public function __construct() {
        $this->dbConn = "mysql:host=localhost;dbname=cursusphp;charset=utf8";
        $this->dbUsername = "cursusgebruiker";
        $this->dbPassword = "cursuspwd";
    }
    
    public function getLijst() {
        //database toegang
        $dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassword);
        //sql statement
        $sql = "select id, titel, duurtijd from films";
        //statement word geprepared door de toegang van de database en dat word in resultaat gezet
        $resultaat = $dbh->prepare($sql);
        //Resultaat word uitgevoerd
        $resultaat->execute();
        //resultaat fetcht alle fields en assoc zegt het als een associatieve array te doen
        //Dus het is een array met keys van kolom namen
        $result=$resultaat->fetchAll(PDO::FETCH_ASSOC);
        //de array lijst word aangemaakt
        $lijst=array();
        //het resultaat van de fetch word keer per keer bezien met $rij als key
        foreach ($result as $rij) {
            $film = new Film (
                    //nieuwe film waar de rijen id, titel en duurtijd worden afgedrukt.
                    $rij["id"],
                    $rij["titel"],
                    $rij["duurtijd"])
                    ;
            //he word bij elke nieuwe rij gepushed in de array lijst en de inhoud van film word daar ingestopt
            array_push($lijst, $film);
        }
        //return de lijst
        return $lijst;
        $dbh = null;      
    }
    
    //maak film
    public function maakFilm($titel,$duurtijd){
        $dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassword);
        $sql1='INSERT INTO films (titel,duurtijd) values (:titel,:duurtijd)';
        $resultaat = $dbh->prepare($sql1);
        $resultaat->execute(array(':titel' => $titel,':duurtijd' => $duurtijd));
    }
    
    //verwijder film
    public function verwijder($id){
        $dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassword);
        $sql3="DELETE from films where id = :id";
        $resultaat = $dbh->prepare($sql3);
        $resultaat->execute(array(':id'=>$id));
        $dbh=null;
    }
    
    //pas film aan
    public function FilmViaId($id){
       $dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassword);
       $sql="SELECT titel,duurtijd from film where id= :id";
       
       $resultaat=$dbh->prepare($sql);
       $resultaat->execute(array(':id'=>$id));
       $result=$resultaat->fetch(PDO::FETCH_ASSOC);
       
       $filmAanp=new Film($id,$result["titel"],$result["duurtijd"]);
       $dbh=null;
       return $filmAanp;
    }
    
    public function updateFilm($filmAanp){
        $dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassword);
        $sql="UPDATE films set titel =:titel,duurtijd=:duurtijd where id=:id";
        
        $resultaat=$dbh->prepare($sql);
        $resultaat->execute(array(
            ':id' => $filmAanp->getId(),
            ':titel' => $filmAanp->getId(),
            ':duurtijd' => $filmAanp->getId()));
        $dbh=null;
    }
}
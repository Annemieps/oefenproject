<?php
require_once './95Bericht.php';

class posten{
    private $dbConn;
    private $dbUsername;
    private $dbPassword;
    
    public function __construct() {
        $this->dbConn = "mysql:host=localhost;dbname=cursusphp;charset=utf8";
        $this->dbUsername = "cursusgebruiker";
        $this->dbPassword = "cursuspwd";
    }
    
    public function getLijst(){
        $dba=new PDO($this->dbConn, $this->dbUsername, $this->dbPassword);
        $sql='SELECT id, auteur, boodschap from gastenboek';
        $resultaat=$dba->prepare($sql);
        $resultaat->execute();
        $result=$resultaat->fetchAll(PDO::FETCH_ASSOC);
        
        $lijst=array();
        foreach ($result as $rij) {
            $bericht = new bericht(
                    $rij["id"], 
                    $rij["auteur"], 
                    $rij["boodschap"]
            );
            array_push($lijst, $bericht);
        }
        return $lijst;
        $dba=null;
    }
    
    public function invoegenPost($auteur,$boodschap){
        $dba=new PDO($this->dbConn, $this->dbUsername, $this->dbPassword);
        $sql='INSERT gastenboek (auteur,boodschap) VALUES (:auteur,:boodschap)';
        $resultaat=$dba->prepare($sql);
        $resultaat->execute(array(':auteur'=>$auteur,':boodschap' => $boodschap));
        $dba=null;
    }
}
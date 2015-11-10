<?php
require_once './96Chatbericht.php';

class gastenboek{
    private $dbConn;
    private $dbUsername;
    private $dbPassword;
    
    public function __construct() {
        $this->dbConn = "mysql:host=localhost;dbname=cursusphp;charset=utf8";
        $this->dbUsername = "cursusgebruiker";
        $this->dbPassword = "cursuspwd";
    }
    
    public function getLijst(){
        $dba=new PDO($this->dbConn,$this->dbUsername,$this->dbPassword);
        $sql='SELECT id, nickname, boodschap from chatberichten order by datum';
        $resultaat=$dba->query($sql);
     
        $lijst=array();
        foreach ($resultaat as $rij) {
            $bericht=new chatbericht($rij["id"], $rij["nickname"], $rij["boodschap"]);
            array_push($lijst, $bericht);
        }
        
        return $lijst;
        $dba=null;
    }
    public function posten($user,$boodschap){
        $dba=new PDO($this->dbConn,$this->dbUsername,$this->dbPassword);
        $sql='INSERT into chatberichten (nickname,boodschap) VALUES (:nickname, :boodschap)';
        $resultaat=$dba->prepare($sql);
        $resultaat->execute(array(':nickname'=> $user,':boodschap' => $boodschap));
        
        $dba=null;
    }
}
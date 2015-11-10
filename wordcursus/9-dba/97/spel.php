<?php
class spel{
    private $dbConn;
    private $dbUsername;
    private $dbPassword;
    
    function __construct($dbConn, $dbUsername, $dbPassword) {
        $this->dbConn = $dbConn;
        $this->dbUsername = $dbUsername;
        $this->dbPassword = $dbPassword;
    }

    //status ophalen van elk blokje apart. Is het nul leeg, 1 geel of 2 rood?
    public function getStatus($rij,$kolom){
        $dba=new PDO($this->$dbConn, $this->$dbUsername, $this->$dbPassword);
        $sql="select status from vieropeenrij_spelbord where rij = :rij and kolom = :kolom";
        $resultaat = $dba->prepare($sql);
        $resultaat->execute(array(':rij' => $rij,':kolom' => $kolom));
        $resultset=  $resultaat->fetch(PDO::FETCH_ASSOC);
        
    }
    public function smijtMunt($kolom){
        
    }
}
<?php

require_once '../entities/user.php';
require_once '../../Cursus/data/DBconfig.php';

class userDAO{
    public function getByUsername($username){
        $dba=new PDO(DBConfig::$DB_CONNSTRING,  DBConfig::$DB_USERNAME ,DBConfig::$DB_PASSWORD);
        $sql="Select * from gebruikers where :username = username";
        $stmt=$dba->prepare($sql);
        $stmt->execute(array(":username" =>$username));
        $rij=$stmt->fetch(PDO::FETCH_ASSOC);
        
        
    }
    
}
<?php

require_once 'entities/user.php';
require_once '../Cursus/data/DBconfig.php';

class userDAO{
    public static function getByUsername($username){
        $dba=new PDO(DBConfig::$DB_CONNSTRING,  DBConfig::$DB_USERNAME ,DBConfig::$DB_PASSWORD);
        $sql="Select * from gebruikers where :username = username";
        $stmt=$dba->prepare($sql);
        $stmt->execute(array(":username" =>$username));
        $rij=$stmt->fetch(PDO::FETCH_ASSOC);
        
        //user word leeg gezet
        $user = null;
        if ($rij) { 
            //als de rij true is (dus als er een field is) dan word in user de id,username en wachtwoord gezet
            $user = User::create($rij["id"], $rij["username"], $rij["wachtwoord"]);
            $dba = null;
        } 
        //als er dus geen field was dan word user als null doorgegeven als er wel een was word de user door gegeven.
        return $user;
    }
    
}
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

    public function smijtMunt(){

    }
}
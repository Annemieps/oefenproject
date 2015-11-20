<?php

class user{
    private $id;
    private $username;
    private $wachtwoord;
    
    function __construct($id, $username, $wachtwoord) {
        $this->id = $id;
        $this->username = $username;
        $this->wachtwoord = $wachtwoord;
    }

    public static function create($id,$username,$wachtwoord){
       
    }
    function getId() {
        return $this->id;
    }

    function getUsername() {
        return $this->username;
    }

    function getWachtwoord() {
        return $this->wachtwoord;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setWachtwoord($wachtwoord) {
        $this->wachtwoord = $wachtwoord;
    }


}
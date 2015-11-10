<?php

class chatbericht{
    private $id;
    private $nickname;
    private $boodschap;
    
        
    function __construct($id, $nickname, $boodschap) {
        $this->id = $id;
        $this->nickname = $nickname;
        $this->boodschap = $boodschap;
    }
    
    function getId() {
        return $this->id;
    }

    function getNickname() {
        return $this->nickname;
    }

    function getBoodschap() {
        return $this->boodschap;
    }

    function setNickname($nickname) {
        $this->nickname = $nickname;
    }

    function setBoodschap($boodschap) {
        $this->boodschap = $boodschap;
    }
  
}
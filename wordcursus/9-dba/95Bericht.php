<?php

Class bericht{
    private $id;
    private $auteur;
    private $boodschap;
    
    function __construct($id, $auteur, $boodschap) {
        $this->id = $id;
        $this->auteur = $auteur;
        $this->boodschap = $boodschap;
    }
    function getId() {
        return $this->id;
    }

    function getAuteur() {
        return $this->auteur;
    }

    function getBoodschap() {
        return $this->boodschap;
    }

    function setAuteur($auteur) {
        $this->auteur = $auteur;
    }

    function setBoodschap($boodschap) {
        $this->boodschap = $boodschap;
    }



}
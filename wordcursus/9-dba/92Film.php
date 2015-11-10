<?php

class film {
    private $id;
    private $titel;
    private $duurtijd;
           
    public function __construct($id,$titel,$duurtijd) {
        $this->id=$id;
        $this->titel=$titel;
        $this->duurtijd=$duurtijd;
    }
    function getId() {
        return $this->id;
    }

    function getTitel() {
        return $this->titel;
    }

    function getDuurtijd() {
        return $this->duurtijd;
    }

    function setTitel($titel) {
        $this->titel = $titel;
    }

    function setDuurtijd($duurtijd) {
        $this->duurtijd = $duurtijd;
    }
  
}
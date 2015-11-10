<?php

class Personen{
    private $voorNaam;
    private $familieNaam;
    
    public function getVollNaam(){
        return $this->familieNaam . ', ' . $this->voorNaam;
    }
    
    public function setvoorNaam($voornaam){
        $this->voorNaam=$voornaam;        
    }
    public function setfamilieNaam($familienaam){
        return $this->familieNaam=$familienaam;
    }
    
}
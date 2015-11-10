<?php

abstract class Rekening {
    private $rekeningnr;
    private $saldo;
    
    public function __construct($rekeningnr){
        $this->rekeningnr = $rekeningnr;
        $this->saldo=0;
    }
    
     public function getSaldo(){
        return $this->saldo;
    }
    
    public function stort($bedrag){
        $this->saldo = $this->saldo + $bedrag;
    }   
    
    public abstract function voerIntrestDoor();
    
}

//rekeningen opsplitsen
//intrest is statisch en word in de klasse gezet.
class Zichtrekening extends Rekening{
     private static $intrest = 0.025;
     //de intrest functie moet worden uitgevoerd door 
     public function voerIntrestDoor(){
       parent::stort(parent::getSaldo() * self::$intrest);  
    }
}
class Spaarrekening extends Rekening{
     private static $intrest = 0.03;
     public function voerIntrestDoor(){
       parent::stort(parent::getSaldo() * self::$intrest);  
    }
    
}
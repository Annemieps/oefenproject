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

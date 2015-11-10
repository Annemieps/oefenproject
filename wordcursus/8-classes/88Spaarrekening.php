<?php
require_once './88Rekening.php';
require_once './88Omschrijving.php';

class Spaarrekening extends Rekening implements Omschrijving{
     private static $intrest = 0.03;
     public function voerIntrestDoor(){
       parent::stort(parent::getSaldo() * self::$intrest);  
    }
    public function getOmschrijving() {
         $termijn="Langetermijn";
         return $termijn;
     }
    
}
<?php
require_once './88Rekening.php';

class Zichtrekening extends Rekening implements Omschrijving{
     private static $intrest = 0.025;
     //de intrest functie moet worden uitgevoerd door 
     public function voerIntrestDoor(){
       parent::stort(parent::getSaldo() * self::$intrest);  
    }
     public function getOmschrijving() {
         $termijn="Kortetermijn";
         return $termijn;
     }
}

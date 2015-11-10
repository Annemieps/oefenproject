<?php
require_once 'personen.php';

class Cursist extends Personen{
    private $aantalCursussen;
    
    public function __construct($familieNaam,$voorNaam,$aantalCursussen) {
	parent::setfamilieNaam($familieNaam);
        parent::setvoorNaam($voorNaam);
	$this->setAantalCursussen($aantalCursussen);
	}
        
    public function setAantalCursussen($aantalCursussen) {
        $this->aantalCursussen=$aantalCursussen;
        }
    public function getAantalCursussen(){
        return $this->aantalCursussen;
    }
 
}

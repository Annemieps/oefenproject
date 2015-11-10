<?php
require_once './personen.php';

class Medewerker extends Personen{
    private $aantalCursisten;

    public function __construct($familieNaam,$voorNaam,$aantalCursisten) {
        parent::setFamilienaam($familieNaam);
        parent::setVoornaam($voorNaam);
        $this->aantalCursisten = $aantalCursisten;
    }

    public function getAantalCursisten() {
        return $this->aantalCursisten;
    }

    public function setAantalCursisten($aantalCursisten) {
        $this->aantalCursisten = $aantalCursisten;
    }
}

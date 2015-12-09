<?php
//business/PersoonService.php
require_once("data/PersoonDAO.php");

class PersoonService {
        
    //1 taak per functie: ophalen personen overzicht uit DAO
    	public function getPersonenOverzicht() {
		$pDAO = new PersoonDAO();
		$personen = $pDAO->getAll();
		return $personen;
	}

}

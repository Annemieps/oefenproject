<?php
require_once("data/BoekDAO.php");

class BoekService{
    public function getBoekenOverzicht(){
        $boekDAO=new BoekDAO();
        $lijst= $boekDAO->getAll();
        return $lijst;
    }
    
    public function voegNieuwBoekToe($titel, $genreId) {
	$boekDAO = new BoekDAO();
	$boekDAO->create($titel, $genreId);
    }
    
    public function verwijderBoek($id){
        $boekDAO=new BoekDAO;
        $boekDAO->delete($id);
    }
    
    //1 enkel boek ophalen aan de hand van het id
    public function haalBoekOp($id){
        //laat de DAO het id ophalen 
        $boekDAO= new BoekDAO();
        $boek=$boekDAO->getById($id);
        //$boek = het id
        return $boek;
    }
    
    //update boek heeft 3 param
    public function updateBoek($id, $titel, $genreId) {
        //genre dao en boek dao instanties aangemaakt
	$genreDAO = new GenreDAO();
	$boekDAO = new BoekDAO();
        //genre by id ophalen
	$genre = $genreDAO->getById($genreId);
        //boek by id ophalen
	$boek = $boekDAO->getById($id);
        // set titel en genre updaten en dan de update functie uitvoeren met als param
        // boek krijgt de titel en het genre mee
	$boek->setTitel($titel);
	$boek->setGenre($genre);
        //update word uitgevoerd waar titel en genre veranderd worden via de DAO in de dba.
	$boekDAO->update($boek);
    } 

}
<?php
require_once '../data/GenreDAO.php';

class GenreService {
    public function getGenresOverzicht(){
        $genredao= new GenreDAO();
        $lijst=$genredao->getAll();
        return $lijst;
    }
    
    
}
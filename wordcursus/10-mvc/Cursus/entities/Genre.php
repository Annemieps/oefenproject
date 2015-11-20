<?php
//entities/Genre.php

class Genre {
        
    //private array $idmap
	private static $idMap = array();
	
        //private id en genrenaam
	private $id;
	private $genreNaam;
	
        //constructor
	private function __construct($id, $genreNaam) {
		$this->id = $id;
		$this->genreNaam = $genreNaam;
	}
	
        //public static function create met id en genre als parameters
	public static function create($id, $genreNaam) {
                //als het id leeg is dan word er een nieuw genre aangemaakt binnen de array
                //met als param id en genre
		if (!isset(self::$idMap[$id])) {
			self::$idMap[$id] = new Genre($id, $genreNaam);
		}
                //return de array
		return self::$idMap[$id];
	}
	
	public function getId() {
		return $this->id;
	}
	public function getGenreNaam () {
		return $this->genreNaam;
	}
	
	public function setGenreNaam ($genreNaam) {
		$this->genreNaam = $genreNaam;
	}
	
}

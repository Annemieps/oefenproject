<?php
//def. van een boek

class boek{
    //static dus dan word er gebruik gemaakt van self::
    private static $idMap=array();
    
    private $id;
    private $titel;
    private $genre;
   
    private function __construct($id, $titel, $genre) {
        $this->id = $id;
        $this->titel = $titel;
        $this->genre= $genre;
    }
    public static function create($id,$titel,$genre){
        if(!isset(self::$idMap[$id])){
            self::$idMap[$id] = new boek($id, $titel, $genre);
        }
        return self::$idMap[$id];
    }
    
    function getId() {return $this->id;}
    function getTitel() {return $this->titel;}
    function getGenre() {return $this->genre;}
    
    function setId($id) {$this->id = $id;}
    function setTitel($titel) {$this->titel = $titel;}
    function setGenre($genre){$this->genre = $genre;}
   


 
}
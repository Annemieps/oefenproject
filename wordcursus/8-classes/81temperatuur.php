<?php
class Thermometer{
    private $temperatuur;
    
    public function __construct($temperatuur) {
        $this->temperatuur=$temperatuur;
    }

    public function verhoog($aantal){
        if(($this->temperatuur+=$aantal)<=100){
        $this->temperatuur+=$aantal;}
    }
    public function verlaag($aantal){
        if( ($this->temperatuur - $aantal) >= -50){
        $this->temperatuur -= $aantal;}
    }
    public function getTemperatuur(){
        return $this->temperatuur;
    }
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $koud=new Thermometer(5);
        $koud->verlaag(40);
        echo $koud->getTemperatuur()."<br>";
        $koud->verhoog(20);
        echo $koud->getTemperatuur()."<br>";
        $koud->verlaag(60);
        echo $koud->getTemperatuur()."<br>";
        ?>
    </body>
</html>

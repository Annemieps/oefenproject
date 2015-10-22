<?php
class frequentie{
    public function willekeurig(){
        $freq=array();
        /*inialiseren*/
        for($k=1;$k<=40;$k++){
            $freq[$k]=0;
        }
        for($i=1;$i<100;$i++){
            $random=rand(1,40);
            $freq[$random] ++;
        }
        return $freq;
        
    }
    
}
?><!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         $getal=new frequentie();
         $freq=$getal->willekeurig();
         for ($i = 1; $i <= 40; $i++) {
        ?>
            Getal <?php echo $i; ?> werd <?php echo $freq[$i]; ?> keer gegenereerd.<br>
            <?php
        } 
        ?>
    </body>
</html>

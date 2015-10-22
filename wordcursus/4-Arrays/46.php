<?php
/*tachtig*/
class getallen{
    public function inhoudArray(){
        $deArray=array();
        for ($i = 1; $i <= 50; $i+=2) {
            array_push($deArray, $i);
        }
        for ($i = 2; $i <= 50; $i+=2) {
            array_push($deArray, $i);
        }
        return $deArray;
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $getal=new getallen();
        print_r($getal->inhoudArray());
        ?>
    </body>
</html>

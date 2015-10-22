<?php
session_start();
class getal{
    public function willekeurig(){
        if (!isset($_SESSION["teRadenGetal"])) {
	$_SESSION["teRadenGetal"] = rand(1, 100);
        }
        echo $_SESSION["teRadenGetal"];
        
    return $_SESSION["teRadenGetal"];
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
                $tab = new Getal();
		$resultaat = $tab->willekeurig();
                
        ?>
    </body>
</html>

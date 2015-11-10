<?php
require_once './88Rekening.php';
require_once './88Spaarrekening.php';
require_once './88Zichtrekening.php';
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset=utf-8>
		<title>Rekeningnummers</title>
	</head>
	<body>
		<h1>
			<?php
			$rek = new Zichtrekening("091-0122401-16");
			echo "Het saldo is: " .$rek->getSaldo() . "<br />";
			$rek->stort(200);
			echo "Het saldo is: " .$rek->getSaldo() . "<br />";
			$rek->voerIntrestDoor();
                        echo "Het saldo is: " .$rek->getSaldo() . "<br />";
                        $rek->getOmschrijving();
                        echo $rek->getOmschrijving();
			?>
		</h1>
	</body>
</html>

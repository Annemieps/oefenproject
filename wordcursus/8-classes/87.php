<?php
require_once './87Rekeningen.php';
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
			$rek = new Spaarrekening("091-0122401-16");
			echo "Het saldo is: " .$rek->getSaldo() . "<br />";
			$rek->stort(200);
			echo "Het saldo is: " .$rek->getSaldo() . "<br />";
			$rek->voerIntrestDoor();
                        echo "Het saldo is: " .$rek->getSaldo() . "<br />";
			?>
		</h1>
	</body>
</html>

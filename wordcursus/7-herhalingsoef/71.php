<?php
//71.php

require_once("PhpIsFantastisch.php");
?>


<!DOCTYPE HTML>
<html>
	<head>
		<meta charset=utf-8>
		<title>Hello world</title>
	</head>
	<body>
<h1>
			<?php
			$pif = new Genereer();
			print($pif->getReeks());
			?>
		</h1>
	</body>
</html>

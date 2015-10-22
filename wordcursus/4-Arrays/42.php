<?php
//getallenarray.php

class GetalArrayGenerator {
	public function getArray() {
		$tab = array();
                $tab[0]=0;
		for ($i=1; $i<50; $i++) {
                    $tab[$i] = $tab[$i-1] +$i;
		}
		return $tab;
	}
}
?>


<!DOCTYPE HTML>
<html>
	<head>
		<meta charset=utf-8>
		<title>Willekeurige getallen</title>
	</head>
	<body>
		<pre>
			<?php
			$arrGen= new GetalArrayGenerator();
			print_r($arrGen->getArray());
			?>
		</pre>
	</body>
</html>

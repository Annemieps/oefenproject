<?php
//phpIsFantastisch.php

class Genereer {
	public function getReeks() {
                for ($i=1; $i<=7; $i++) {
		?> 
                <div style="text-align:center; font-size:<?php echo $i*10;?>px"><?php echo "PHP is FANTASTISCH <br>";?></div>
                <?php    
		}
		for ($k=7; $k>=0; $k--) {
		?> 
                <div style="text-align:center; font-size:<?php echo $k*10;?>px"><?php echo "PHP is FANTASTISCH <br>";?></div>
                <?php    
		}

	}
}
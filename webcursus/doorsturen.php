<?php

  $aantal=rand(1,10);
  if ($aantal%2==0) {
    header("Location: http://www.vdab.be");
    } 
    else {
    header("Location: http://www.google.be");
    }
    ?>
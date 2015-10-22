
<!DOCTYPE html>
<?php
function breekaf($tekst) {
$deeltekst = substr($tekst, 0, 3) . "...";
return($deeltekst);
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Tijdsaanduiding</title>
    </head>
    <body>
        
 <?php

 $teller=1;
 while($teller<10){
     echo "abc ";
     $teller++;
 }
 echo "<br>";
 $teller=1;
 do{
     echo "xyz ";
     $teller++;
 }
 while ($teller<=9);
  echo "<br>";
 for($teller=1;$teller<10;$teller++){
     echo $teller . " ";
 }
 echo "<br>";
 for($teller="A";$teller<"G";$teller++){
     echo " Item ".$teller . "<br>";
 }
  echo "<br>";
  
  $rij=15;
  for($teller=1;$teller<=$rij;$teller++){
      echo "*";
      for($kolom=2;$kolom<=$teller;$kolom++){
          echo "*";
      }
      echo "<br>";
  }
  echo "<br>";
  
print("Webleren is fun --- " . breekaf("Webleren is fun") . "<br>");
print("VDAB --- " . breekaf("VDAB"));

?>
        <p>Als alles goed verloopt krijg je hieronder de bevestiging dat je het bestand hebt kunnen importeren.</p>
        <?php
        include ("inc_Geslaagd.php");
        /*include ("doorsturen.php");*/
        ?>
   </body>
</html>

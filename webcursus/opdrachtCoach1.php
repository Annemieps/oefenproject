<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Coach</title>
        <style>
            table,table td{border:none;margin:0;padding:0.5em;border-collapse: collapse;}
            table tr:nth-child(odd){background-color:black;color:white;}
            table tr:nth-child(even){background-color:yellow;}
        </style>
    </head>
    <body>
        <?php
        $rij=20;
        $kolom=10;
        $getal = 0;
        echo "<h1>Een Dynamische tabel</h1>";
        echo "Deze tabel bevat $rij rijen en $kolom kolommen <br>"
        ?>
        
        <table width="10%">
            
        <?php
        while($getal<=199){
           
           for ($teller=1; $teller<=$rij; $teller++) {
            ?>
            <tr>
           <?php for ($tellerk=1; $tellerk<=$kolom; $tellerk++) {  
               $getal++;
           ?>
              
              <td width="50%"><?php echo $getal; ?></td>
            
           <?php } ?>
             </tr> 
        <?php } ?>
        <?php } ?>
           
        
        </table>
        
    </body>
</html>

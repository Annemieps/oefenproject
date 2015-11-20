<?php
//test.php
require_once("data/GenreDAO.php");

$dao = new GenreDAO();
$boek = $dao->getById(3);
print("<pre>");
print_r($boek);
print("</pre>");
?> 

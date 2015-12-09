<?php
//toonalleboeken.php
//require_once("business/BoekService.php");
//
//$boekSvc = new BoekService();
//$boekenLijst = $boekSvc->getBoekenOverzicht();
//include("presentation/boekenlijst.php");
//include("voegboektoe.php");


//toonalleboeken.php
require_once("Business/BoekService.php");
require_once("Libraries/Twig/lib/Twig/Autoloader.php");

Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem("Presentation");
$twig = new Twig_Environment($loader);

$boekSvc = new BoekService();
$boekenLijst = $boekSvc->getBoekenOverzicht();

$view = $twig->render("boekenlijst.twig",  
		array("boekenLijst" => $boekenLijst));
echo $view;
include("voegboektoe.php");

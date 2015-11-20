<?php
//updateboek.php
require_once("business/GenreService.php");
require_once("business/BoekService.php");

if (isset($_GET["action"]) && $_GET["action"] == "process") {
	$boekSvc = new BoekService();
	$boekSvc->updateBoek($_GET["id"], $_POST["txtTitel"], $_POST["selGenre"]);
	header("location: toonalleboeken.php");
	exit(0);

} else {
        //nieuwe genre service
	$genreSvc = new GenreService();
        //lijst van genre's ophalen
	$genreLijst = $genreSvc->getGenresOverzicht();
        //nieuwe boekenservice
	$boekSvc = new BoekService();
        //het id van het gekozen boek in boek stoppen
	$boek = $boekSvc->haalBoekOp($_GET["id"]);
	include("presentation/updateboekForm.php");
}

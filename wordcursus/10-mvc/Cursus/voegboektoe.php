<?php
//voegboektoe.php
require_once './business/GenreService.php';
require_once './business/BoekService.php';
require_once '../Exceptions/TitelBestaatException.php';

//Als er process is dan word er een nieuwe boekenservice gemaakt
//boekenscv voegt voegniewboektoe uit en geeft titel en genre mee en stuurt dan door naar toonalleboeken
if (isset($_GET["action"]) && $_GET["action"] == "process") {
    try {
	$boekSvc = new BoekService();
	$boekSvc->voegNieuwBoekToe($_POST["txtTitel"], $_POST["selGenre"]);
	header("location: toonalleboeken.php");
        //exit: Wanneer de PHP interpreter deze instructie uitvoert wordt het script op die pagina 
        //onmiddellijk afgesloten. Alle instructies daarna worden genegeerd.
	exit(0);
        } catch (TitelBestaatException $ex) {
		header("location: voegboektoe.php?error=titelbestaat");
		exit(0);
	}

} else {
    //anders .... ? 
	$genreSvc = new GenreService();
	$genreLijst = $genreSvc->getGenresOverzicht();
        if (isset($_GET["error"])){
		$error = $_GET["error"];
	}
	include("Presentation/nieuweboekform.php");
}

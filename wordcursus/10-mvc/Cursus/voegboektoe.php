<?php
//voegboektoe.php
require_once './business/GenreService.php';
require_once './business/BoekService.php';


//Als er process is dan word er een nieuwe boekenservice gemaakt
//boekenscv voegt voegniewboektoe uit en geeft titel en genre mee en stuurt dan door naar toonalleboeken
if (isset($_GET["action"]) && $_GET["action"] == "process") {
	$boekSvc = new BoekService();
	$boekSvc->voegNieuwBoekToe($_POST["txtTitel"], $_POST["selGenre"]);
	header("location: toonalleboeken.php");
        //exit: Wanneer de PHP interpreter deze instructie uitvoert wordt het script op die pagina 
        //onmiddellijk afgesloten. Alle instructies daarna worden genegeerd.
	exit(0);

} else {
    //anders .... ? 
	$genreSvc = new GenreService();
	$genreLijst = $genreSvc->getGenresOverzicht();
	include("presentation/nieuweboekform.php");
}

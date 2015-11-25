<?php
//toonallepersonen.php
require_once("business/PersoonService.php");

//maakt een nieuwe personen service aan waarin het personen overzicht word opgehaald
//in het personen overzicht word een nieuwe DAO aangemaakt en in de DAO word effectief de inhoud opgehaald
$pService = new PersoonService();
$personen = $pService->getPersonenOverzicht();

//includen presentatie waar er per persoon object de familienaam en voornaam word afgedrukt.
include("presentation/personenlijst.php");

<?php
session_start();
require_once 'business/userService.php';

if (isset($_GET["action"]) && $_GET["action"] == "login"){
    $check = UserService::checkLogin($_POST["username"], $_POST["wachtwoord"]);
    
    if ($check){
        $_SESSION["aangemeld"] = true;
        header('location: toongeheim.php');
        exit(0);
        
    } else {
        header('location: aanmelden.php');
        exit(0);
    }
}
else {
    include("presentation/loginform.php");
}
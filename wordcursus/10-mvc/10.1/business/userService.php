<?php

class UserService{
    
    public static function checkLogin($username,$wachtwoord){
        if ($username == "admin" && $wachtwoord == "geheim"){
            return true;
        }
        else {
        return false;
        }
    }
}
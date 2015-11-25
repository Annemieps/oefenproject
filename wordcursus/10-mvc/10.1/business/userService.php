<?php
require_once 'data/userDAO.php';

class UserService{
    
    public static function checkLogin($username,$wachtwoord){
       $user = userDAO::getByUsername($username);
       
        if (isset($user) && $user->getWachtwoord()==$wachtwoord){
            return true;
        }
        else {
        return false;
        }
    }
}
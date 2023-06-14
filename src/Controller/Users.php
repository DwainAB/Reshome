<?php

require_once '../Model/Class/User.php';

class Users {
    public function register(){
        
    }

}

$init = new Users;

// Envoyez les info de l'user post request
if($_SERVER['REQUEST_METHOD']=='POST'){
    switch($_POST['type']){
        case 'register':
            $init->register();
            break;
    }
}
<?php

//This is the accounts controller: Specializes in logins and registrations

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
    $action = filter_input(INPUT_GET, 'action');
}

switch($action){
    case 'login':

        include "../views/login.php";
        break;

    case 'regform':

        include "../views/register.php";
        break;

    case 'register':
        $firstname = filter_input(INPUT_POST, 'firstname');
        $lastname = filter_input(INPUT_POST, 'lastname');
        $email = filter_input(INPUT_POST, 'email');
        $phone = filter_input(INPUT_POST, 'phone');
        $username = filter_input(INPUT_POST, 'username');
        $passwrd = filter_input(INPUT_POST, 'passwrd');
        include "../models/account-model.php";
        break;
    
    default:
        break;
    }
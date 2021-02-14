<?php

//This is the accounts controller: Specializes in logins and registrations

// include connection
require_once "../connector/connection.php";

// Include accounts Model
include "../models/account-model.php";


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
    $action = filter_input(INPUT_GET, 'action');
}

switch($action){
    case 'login':

        include "../views/login.php";
        break;

    case 'developer-login':

        break;

    case 'customer-login':

        break;

    case 'regform':

        include "../views/register.php";
        break;

    case 'register-developer':
        $firstname = filter_input(INPUT_POST, 'firstname');
        $lastname = filter_input(INPUT_POST, 'lastname');
        $username = filter_input(INPUT_POST, 'username');
        $phone = filter_input(INPUT_POST, 'phone');
        $email = filter_input(INPUT_POST, 'email');
        $passwrd = filter_input(INPUT_POST, 'passwrd');

        $message = register_developer($firstname, $lastname, $username, $phone, $email, $passwrd);

        include "../views/login.php";
        break;
    
    default:
        include "../index.php";
        break;
    }
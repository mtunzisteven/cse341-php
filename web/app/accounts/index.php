<?php

//This is the accounts controller: Specializes in logins and registrations

// include connection
require_once "../connector/connection.php";

// Include accounts Model
include "../account-model.php";


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

        include "../views/login.php";
        break;
    
    default:
        include "../index.php";
        break;
    }
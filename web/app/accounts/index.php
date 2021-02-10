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
        echo $firstname;
        $lastname = filter_input(INPUT_POST, 'lastname');
        echo $lastname;
        $email = filter_input(INPUT_POST, 'email');
        echo $email;
        $phone = filter_input(INPUT_POST, 'phone');
        echo $phone;
        $username = filter_input(INPUT_POST, 'username');
        echo $username;
        $passwrd = filter_input(INPUT_POST, 'passwrd');
        echo $passwrd;
        include "../model/accounts-model.php";
        break;
    
    default:
        break;
    }
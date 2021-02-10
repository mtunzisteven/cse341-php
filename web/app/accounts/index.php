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
        echo "<br/>".$firstname;
        $lastname = filter_input(INPUT_POST, 'lastname');
        echo "<br/>".$lastname;
        $email = filter_input(INPUT_POST, 'email');
        echo "<br/>".$email;
        $phone = filter_input(INPUT_POST, 'phone');
        echo "<br/>".$phone;
        $username = filter_input(INPUT_POST, 'username');
        echo "<br/>".$username;
        $passwrd = filter_input(INPUT_POST, 'passwrd');
        echo "<br/>".$passwrd;
        include "/app/main-model.php";
        break;
    
    default:
        break;
    }
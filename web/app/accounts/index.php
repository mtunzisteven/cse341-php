<?php

session_start();

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

        $username = filter_input(INPUT_POST, 'username');
        $passwrd = filter_input(INPUT_POST, 'passwrd');

        // Login results returned.
        $logins = login_developer($username, $passwrd);

        //echo "Hey!"; exit;

        if($logins===1){
            // fetch all developer data
            $develepoer_data = getDeveloper_data($username, $passwrd);
            //echo "Hey!"; exit;
            // set session data
            $_SESSION['dev_firstname'] = $develepoer_data['firstname'];
            $_SESSION['dev_lastname'] = $develepoer_data['lastname'];
            $_SESSION['dev_firstname'] = $develepoer_data['firstname'];
            $_SESSION['dev_username'] = $username;
            $_SESSION['dev_password'] = $passwrd;
            $_SESSION['dev_phone'] = $develepoer_data['phone'];
            $_SESSION['dev_reviews'] = $develepoer_data['reviews'];
            $_SESSION['dev_rating'] = $develepoer_data['rating'];
            $_SESSION['dev_profileimage'] = $develepoer_data['profileimage'];
            $_SESSION['dev_qualifications'] = $develepoer_data['qualifications'];
            //echo "Hey!"; exit;
            include "../views/home.php";
        }

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
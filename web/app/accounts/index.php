<?php

session_start();

//This is the accounts controller: Specializes in logins and registrations

// include connection
require_once "../connector/connection.php";

// Include main-model
include "../main-model.php";

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

        //echo $logins; exit;

        if($logins==1){
            //echo "hey!"; exit;
            // fetch all developer data
            $develepoer_data = getDeveloper_data($username, $passwrd);

            //echo var_dump($develepoer_data); exit;
            //echo $develepoer_data[0]['firstname']; exit;

            //echo "Hey!"; exit;
            
            // set session data
            $_SESSION['dev_firstname'] = $develepoer_data[0]['firstname']; 
            $_SESSION['dev_lastname'] = $develepoer_data[0]['lastname'];
            $_SESSION['dev_username'] = $username;
            $_SESSION['dev_password'] = $passwrd;
            $_SESSION['dev_phone'] = $develepoer_data[0]['phone'];
            $_SESSION['dev_reviews'] = $develepoer_data[0]['reviews'];
            $_SESSION['dev_rating'] = $develepoer_data[0]['rating'];
            $_SESSION['dev_profileimage'] = $develepoer_data[0]['profileimage'];
            $_SESSION['dev_qualifications'] = $develepoer_data[0]['qualifications'];
            $_SESSION['dev_city'] = $develepoer_data[0]['city'];
            $_SESSION['dev_country'] = $develepoer_data[0]['country'];
            //echo "Hey!"; exit;
            include "../views/home.php";
        }

        break;

    case 'customer-login':
        $username = filter_input(INPUT_POST, 'username');
        $passwrd = filter_input(INPUT_POST, 'passwrd');

        // Login results returned.
        $logins = login_customer($username, $passwrd);

        //echo $logins; exit;

        if($logins==1){
            //echo "hey!"; exit;
            // fetch all developer data
            $develepoer_data = getCustomer_data($username, $passwrd);

            //echo var_dump($develepoer_data); exit;
            //echo $develepoer_data[0]['firstname']; exit;

            //echo "Hey!"; exit;
            
            // set session data
            $_SESSION['dev_firstname'] = $develepoer_data[0]['firstname']; 
            $_SESSION['dev_lastname'] = $develepoer_data[0]['lastname'];
            $_SESSION['dev_username'] = $username;
            $_SESSION['dev_password'] = $passwrd;
            $_SESSION['dev_phone'] = $develepoer_data[0]['phone'];

            //echo "Hey!"; exit;
            include "../views/home.php";
        }

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
        $country = filter_input(INPUT_POST, 'country');
        $city = filter_input(INPUT_POST, 'city');
        $profileimage = $_POST['profileimage'];

        $message = register_developer($firstname, $lastname, $username, $phone, $email, $passwrd, $profileimage, $country, $city);

        include "../views/login.php";
        break;

    case 'register-customer':
        $firstname = filter_input(INPUT_POST, 'firstname');
        $lastname = filter_input(INPUT_POST, 'lastname');
        $phone = filter_input(INPUT_POST, 'phone');
        $email = filter_input(INPUT_POST, 'email');
        $passwrd = filter_input(INPUT_POST, 'passwrd');

        $message = register_customer($firstname, $lastname, $phone, $email, $passwrd);

        include "../views/login.php";
        break;

    case 'about':
        include "../views/about.php";
        break;

    case 'developers':
        include "../views/developers.php";
        break;

    default:
        include "../index.php";
        break;
    }
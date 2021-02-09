<?php

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
    $action = filter_input(INPUT_GET, 'action');
}

echo "accounts filtered!";

switch($action){
    case 'login':

        include "../views/login.php";
        break;

    case 'reg':

        include "../views/register.php";
        break;
        
    default:
        break;
    }
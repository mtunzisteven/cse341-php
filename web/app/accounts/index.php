<?php

echo "accounts here!<br/>";

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
    $action = filter_input(INPUT_GET, 'action');
}

echo "accounts filtered!";

switch($action){
    case 'login':

        echo "login selected!<br/>";
        include "/app/views/login.php";
        echo "path here!";
        break;
    case 'reg':
        include "/app/views/register.php";
        break;
    default:
        break;
    }
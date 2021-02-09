<?php

//This is the main controller

//echo "Started!<br/>";

require_once "main-model.php";

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
    $action = filter_input(INPUT_GET, 'action');
}

switch($action){
    case 'home':
        include "views/home.php";
        break;
    case 'about':
        include "views/about.php";
        break;
    case 'developers':
        include "views/developers.php";
        break;
    case 'projects':
        include "views/projects.php";
        break;
    case 'request':
        include "views/request.php";
        break;
    default:
        include "views/home.php";
}


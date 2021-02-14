<?php

//This is the main controller

//echo "Started!<br/>";

require_once "main-model.php";


foreach($projects as $row){
    $projectList = '<p class="project-title"><strong>'.$row['title'].'</strong></p><hr/><p class="date-posted">Date Posted: '.$row['date'].'</p>';
}

foreach($developer as $row){
    $counter = 0;
    $dev = '<div class="dev-container"><img class="dev-img" src"'.$row['profileimage'].'" alt="profile image" />';
    $dev .=  '<div class="dev-text-container">';
    $dev .=  '<h2 class="dev-name">'.$row['firstname'].' '.$row['lastname'].'</h2>';
    $dev .=  '<p class"dev-contacts">'.'Phone: '.$row['phone'].' <br/>Email: '.$row['email'].'</p>';
    $dev .=  '<a class="dev-link" href="../app/?action=profile&user='.$row['developerid'].'" title="Request a Developer" >Request</a></div></div><br/>';

    $counter +=1;

    if($counter==5){
        break;
    }
}


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


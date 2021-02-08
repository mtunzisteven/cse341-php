<?php

//This is the main controller

echo "Started!<br/>";

require_once "model/main-model.php";

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
    $action = filter_input(INPUT_GET, 'action');
}

//For Testing purposes
echo var_dump($developer);
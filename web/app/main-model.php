<?php

//This is the main model for the app.

echo "model started<br/>";

require_once "connector/connection.php";

echo "model inserts connection<br/>";

$db = db_connect();

echo "<br/>model call connection fn<br/>";

$stmt = $db->prepare("SELECT firstName, lastName, profileImage, reviews, rating FROM developer");
$stmt->execute();

$developer = $stmt->fetchAll(PDO::FETCH_ASSOC);

//Test wether array data received from db
//echo "\n".var_dump($developer)."\n";

//test whether array data is correct
foreach($developer as $row){
    echo "Name: ".$row['firstname']." Last Name: ".$row['lastname']."<br/>";
}
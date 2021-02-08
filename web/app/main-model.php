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

echo "\n".var_dump($developer)."\n";

$stmt = $db->prepare("SELECT firstName, lastName, profileImage FROM customer");
$stmt->execute();

$customer = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "\n".var_dump($customer);
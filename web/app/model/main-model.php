<?php

//This is the main model for the app.

echo "model started<br/>";

require_once "../connector/connection.php";

echo "model inserts connection<br/>";

$db = db_connect();

echo "model call connection fn";

$stmt = $db->prepare('SELECT * FROM developer');
$stmt->bindValue(':firstName', $firstName, PDO::PARAM_STR);
$stmt->bindValue(':lastName', $lastName, PDO::PARAM_STR);
$stmt->bindValue(':profileImage', $profileImage, PDO::PARAM_STR);  
$stmt->bindValue(':reviews', $reviews, PDO::PARAM_STR);
$stmt->bindValue(':rating', $rating, PDO::PARAM_STR);
$stmt->execute();
$developer = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo var_dump($developer);

$stmt = $db->prepare('SELECT * FROM customer');
$stmt->bindValue(':firstName', $firstName, PDO::PARAM_STR);
$stmt->bindValue(':lastName', $lastName, PDO::PARAM_STR);
$stmt->bindValue(':profileImage', $profileImage, PDO::PARAM_STR);  
$stmt->execute();
$customer = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo var_dump($customer);
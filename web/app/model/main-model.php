<?php

//This is the main model for the app.

require_once "/app/connector/connection.php";

$db = db_connect();

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
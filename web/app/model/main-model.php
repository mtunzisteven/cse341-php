<?php

//This is the main model for the app.

require_once "/app/connection.php";

$stmt = $db->prepare('SELECT * FROM developer');
$stmt->bindValue(':firstName', $firstName, PDO::PARAM_STR);
$stmt->bindValue(':lastName', $lastName, PDO::PARAM_STR);
$stmt->bindValue(':profileImage', $profileImage, PDO::PARAM_STR);  
$stmt->bindValue(':reviews', $reviews, PDO::PARAM_STR);
$stmt->bindValue(':rating', $rating, PDO::PARAM_STR);
$stmt->execute();
$developer = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $db->prepare('SELECT * FROM customer');
$stmt->bindValue(':firstName', $firstName, PDO::PARAM_STR);
$stmt->bindValue(':lastName', $lastName, PDO::PARAM_STR);
$stmt->bindValue(':profileImage', $profileImage, PDO::PARAM_STR);  
$stmt->execute();
$customer = $stmt->fetchAll(PDO::FETCH_ASSOC);
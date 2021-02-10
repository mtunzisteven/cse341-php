<?php

echo "accounts-model started<br/>";

require_once "../connector/connection.php";

echo "accounts-model inserts connection<br/>";

$db = db_connect();

echo "<br/>accounts-model called connection fn<br/>";

//Set developer data
$stmt = $db->prepare('INSERT INTO developer (firstName, lastName, userName, phone, email, passwrd) VALUES ($firstname, $lastname,$username , $phone, $email, $passwrd)');
$stmt->execute();

$Registration = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo $Registration;
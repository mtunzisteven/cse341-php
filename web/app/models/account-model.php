<?php

//This is the main model for the app.

require_once "/app/connector/connection.php";

echo "Account model inserts connection<br/>";

$db = db_connect();

//Set developer data
$stmt = $db->prepare('INSERT INTO developer (firstname, lastname, username, phone, email, passwrd) VALUES (?,?,?,?,?,?)');

$stmt->bindParam("sssiss", $firstname, $lastname, $username,$phone,$email,$password);

$firstname="Lusanda";
$lastname="Mavuma";
$username="lusysuh";
$phone=0732124365;
$email="luhh1973@gmail.com";
$password="passwrd";

$stmt->execute();
echo $stmt;
$stmt->closeCursor();
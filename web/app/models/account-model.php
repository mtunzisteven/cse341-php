<?php

//This is the main model for the app.

require_once "../connector/connection.php";

echo "Account model inserts connection<br/>";

$db = db_connect();

echo "Setting User Data<br/>";
//Set developer data
$stmt = $db->prepare('INSERT INTO developer (firstname, lastname, username, phone, email, passwrd) VALUES (?,?,?,?,?,?)');
echo "??<br/>";

$stmt->bindParam("sssiss", $firstnam, $lastnam, $usernam,$phon,$emai,$passwor);
echo "Bound<br/>";

$firstnam="Lusanda";
$lastnam="Mavuma";
$usernam="lusysuh";
$phone=0732124365;
$emai="luhh1973@gmail.com";
$passwor="passwrd";

echo "Values<br/>";
$stmt->execute();

echo $stmt;
$stmt->closeCursor();
<?php

//This is the main model for the app.

require_once "/app/connector/connection.php";

//echo "model inserts connection<br/>";

$db = db_connect();

//Set developer data
$stmt = $db->prepare('INSERT INTO developer (firstname, lastname, username, phone, email, passwrd) VALUES ("Lusanda", "Mavuma","lusysuh" , 0732124365, luhh1973@gmail.com, "passwrd")');
$stmt->execute();
echo "Account model Inserts passed";
$stmt->closeCursor();
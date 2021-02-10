<?php

echo "accounts-model started<br/>";

require_once "../connector/connection.php";

echo "accounts-model inserts connection<br/>";

$db = db_connect();

echo "<br/>accounts-model called connection fn<br/>";

//Set developer data
$sql = "INSERT INTO developer 
            (firstName, lastName, userName, phone, email, passwrd)
        VALUES 
            ($firstname, $lastname,$username , $phone, $email, $passwrd)";

echo "values issue!<br/>";


echo $firstname."<br/>";
echo $lastname."<br/>";
echo $email."<br/>";
echo $phone."<br/>";
echo $username."<br/>";
echo $passwrd."<br/>";

$stmt = $db->prepare($sql);
$stmt->execute();
 
$stmt->closeCursor();


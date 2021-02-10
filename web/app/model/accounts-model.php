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

 
if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->closeCursor();

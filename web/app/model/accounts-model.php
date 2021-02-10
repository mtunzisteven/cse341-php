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
 
if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}


$stmt->closeCursor();

<?php

//This is the main model for the app.

echo "model started<br/>";

require_once "connector/connection.php";

//echo "model inserts connection<br/>";

$db = db_connect();

//echo "<br/>model call connection fn<br/>";

//Get developer data
$stmt = $db->prepare("SELECT firstName, lastName, profileImage, reviews, rating, phone, email, developerid FROM developer");
$stmt->execute();

$developer = $stmt->fetchAll(PDO::FETCH_ASSOC);

//Test wether array data received from db
//echo "\n".var_dump($developer)."\n";

//Test whether array data is correct
/*foreach($developer as $row){
    echo "Name: ".$row['firstname']." Last Name: ".$row['lastname']."<br/>";
}

echo "<br/>";*/

//Get customer data
$stmt = $db->prepare("SELECT firstName, lastName, profileImage FROM customer");
$stmt->execute();

$customer = $stmt->fetchAll(PDO::FETCH_ASSOC);

/*foreach($customer as $row){
    echo "Name: ".$row['firstname']." Last Name: ".$row['lastname']."<br/>";
}*/

//Get project data
$stmt = $db->prepare("SELECT title, DATE(dateposted) FROM projects"); //Use date() to get just the date from the time stamp.
$stmt->execute();

$projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($developer as $row){
    echo $row.'1 <br/>';
}

//Set developer data
$sql = "INSERT INTO developer 
            (firstName, lastName, userName, phone, email, passwrd)
        VALUES 
            ($firstname, $lastname,$username , $phone, $email, $passwrd)";

$stmt = $db->prepare($sql);
$stmt->execute();

foreach($developer as $row){
    echo $row.'2 <br/>';
}

$stmt->closeCursor();

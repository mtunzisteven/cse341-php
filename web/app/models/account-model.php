<?php

//This is the main model for the app.

require_once "../connector/connection.php";

//echo "Account model inserts connection<br/>";

$db = db_connect();

//echo "Setting User Data<br/>";
//Set developer data
/*$stmt = $db->prepare('INSERT INTO developer (firstname, lastname, username, phone, email, passwrd) VALUES (?,?,?,?,?,?)');
echo "??<br/>";

$stmt->bindParam("sssiss", $firstnam, $lastnam, $usernam,$phon,$emai,$passwor);
echo "Bound<br/>";

$firstnam="Lusanda";
$lastnam="Mavuma";
$usernam="lusysuh";
$phon=0732124365;
$emai="luhh1973@gmail.com";
$passwor="passwrd";

echo "Values<br/>";

$stmt->execute([$firstname, $lastname, $username, $phone, $email, $password]);
echo "Executed<br/>";

$stmt->closeCursor();*/

try{

    $stmt = $db->prepare("INSERT INTO developer(firstname, lastname, username, phone, email, passwrd, reviews, rating, profileimage, qualifications) VALUES(?,?,?,?,?,?,?,?,?,?)");
    $stmt->execute([$firstname, $lastname, $username, $phone, $email, $passwrd, '', '', '', '']);
    //echo "result inserted";

    $message = "Your registration was successful! <br/>Please login below<br/>";

}catch (PDOException $ex){

    echo 'Error!: ' . $ex->getMessage();
    die();

}
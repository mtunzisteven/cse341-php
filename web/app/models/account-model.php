<?php

//This is the main model for the app.


//echo "Account model inserts connection<br/>";



function register_developer($firstName, $lastName, $userName, $phone, $email, $passwrd){

    $db = db_connect();

    try{

        $sql = "INSERT INTO developer
                    (firstName, lastName, userName, phone, email, passwrd)
                VALUES
                    (:fistName, :lastName, :userName, :phone, :email, :passwrd)";

        $stmt = $db->prepare($sql);

        $stmt->bindValue(':firstName',$firstName, PDO::PARAM_STR);
        $stmt->bindValue(':lastName',$lastName, PDO::PARAM_STR);
        $stmt->bindValue(':userName',$userName, PDO::PARAM_STR);
        $stmt->bindValue(':phone',$phone, PDO::PARAM_INT);
        $stmt->bindValue(':email',$email, PDO::PARAM_STR);
        $stmt->bindValue(':passwrd',$passwrd, PDO::PARAM_STR);

        $stmt->execute();

        //echo "result inserted";

        $message = "Your registration was successful! Please login below<br/>";

    }catch (PDOException $ex){

        echo 'Error!: ' . $ex->getMessage();
        die();

    }
}

function register_customer($firstName, $lastName, $userName, $phone,$email, $passwrd){
    
    $db = db_connect();

    try{

        $sql = "INSERT INTO customer
                    (firstName, lastName, userName, phone, email, passwrd)
                VALUES
                    (:fistName, :lastName, :userName, :phone, :email, :passwrd)";

        $stmt = $db->prepare($sql);

        $stmt->bindValue(':firstName',$firstName, PDO::PARAM_STR);
        $stmt->bindValue(':lastName',$lastName, PDO::PARAM_STR);
        $stmt->bindValue(':userName',$userName, PDO::PARAM_STR);
        $stmt->bindValue(':phone',$phone, PDO::PARAM_INT);
        $stmt->bindValue(':email',$email, PDO::PARAM_STR);
        $stmt->bindValue(':passwrd',$passwrd, PDO::PARAM_STR);

        $stmt->execute();

        //echo "result inserted";

        $message = "Your registration was successful! Please login below<br/>";

    }catch (PDOException $ex){

        echo 'Error!: ' . $ex->getMessage();
        die();

    }
}
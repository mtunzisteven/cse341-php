<?php

//This is the main model for the app.


//echo "Account model inserts connection<br/>";


// Register a developer and save their details in the database
function register_developer($firstName, $lastName, $userName, $phone, $email, $passwrd){

    $db = db_connect();

    try{

        $sql = "INSERT INTO developer
                    (firstname, lastname, username, phone, email, passwrd)
                VALUES
                    (:firstName, :lastName, :userName, :phone, :email, :passwrd)";

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

// Developer login using username and password
function login_developer($userName, $passwrd){

    $db = db_connect();

    try{

        $sql = "SELECT userName, passwrd FROM developer WHERE userName=':userName' AND passwrod = ':passwrd"; 


        $stmt = $db->prepare($sql);

        $stmt->bindValue(':userName',$userName, PDO::PARAM_STR);
        $stmt->bindValue(':passwrd',$passwrd, PDO::PARAM_STR);

        $stmt->execute();
        $login_result = $stmt->fetchAll();

        //echo "result inserted";

        $message = "Your registration was successful! Please login below<br/>";

        return $login_result;

    }catch (PDOException $ex){

        echo 'Error!: ' . $ex->getMessage();
        die();

    }
}

function getDeveloper_data($userName, $passwrd){

    $db = db_connect();

    try{

        $sql = "SELECT* FROM developer WHERE userName=':userName' AND passwrod = ':passwrd"; 


        $stmt = $db->prepare($sql);

        $stmt->bindValue(':userName',$userName, PDO::PARAM_STR);
        $stmt->bindValue(':passwrd',$passwrd, PDO::PARAM_STR);

        $stmt->execute();

        $develepoer_data=$stmt->fetchAll();

        //echo "result inserted";

        $message = "Your registration was successful! Please login below<br/>";

        return $develepoer_data;

    }catch (PDOException $ex){

        echo 'Error!: ' . $ex->getMessage();
        die();

    }
}

function register_customer($firstName, $lastName, $phone,$email, $passwrd){
    
    $db = db_connect();

    try{

        $sql = "INSERT INTO customer
                    (firstName, lastName, phone, email, passwrd)
                VALUES
                    (:fistName, :lastName, :phone, :email, :passwrd)";

        $stmt = $db->prepare($sql);

        $stmt->bindValue(':firstName',$firstName, PDO::PARAM_STR);
        $stmt->bindValue(':lastName',$lastName, PDO::PARAM_STR);
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

function login_customer($email, $passwrd){

    $db = db_connect();

    try{

        $sql = "SELECT email, passwrd FROM customer WHERE email=':email' AND passwrod = ':passwrd"; 


        $stmt = $db->prepare($sql);

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
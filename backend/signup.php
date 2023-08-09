<?php

require_once 'Database/DBConnector.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['firstName'])
        && isset($_POST['secondName'])
        && isset($_POST['userName'])
        && isset($_POST['email'])
        && isset($_POST['password1'])
    ){
        $firstName = $_POST['firstName'];
        $secondName = $_POST['secondName'];
        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $pwd = $_POST['password1'];


        $dbConnector = new DBConnector();
        $pdo = $dbConnector->getConnection();

        $stmt = $pdo->prepare('SELECT * FROM user WHERE email = :email');
        $stmt->bindParam(':email',$email, PDO::PARAM_STR);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            echo 'UserName is already Taken';
        }else {
            $hashedPassword = password_hash($pwd, PASSWORD_DEFAULT);

            $stmt = $pdo->prepare('INSERT INTO user (firstName, lastname, userName, email, password) VALUES (:firstName, :secondName, :username, :email, :password)');
            $stmt->bindParam(':firstName',$firstName, PDO::PARAM_STR);
            $stmt->bindParam(':secondName',$secondName, PDO::PARAM_STR);
            $stmt->bindParam(':username',$userName, PDO::PARAM_STR);
            $stmt->bindParam(':email',$email, PDO::PARAM_STR);
            $stmt->bindParam(':password',$hashedPassword, PDO::PARAM_STR);

            if($stmt->execute()) {
                echo 'success';
            }else {
                echo 'signup failed';
            }
        }
    }else{
        echo 'please fill the form';
    }
}
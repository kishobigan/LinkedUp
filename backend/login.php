<?php
session_start();

require_once 'Database/DBConnector.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username'])
        && isset($_POST['password'])
        ){
        $userName = $_POST['username'];
        $password = $_POST['password'];

        $dbConnector = new DBConnector();
        $pdo = $dbConnector->getConnection();

        $stmt = $pdo->prepare('SELECT userName, password FROM user WHERE userName = ? OR email = ?');
        $stmt->bindParam(1,$userName,PDO::PARAM_STR);
        $stmt->bindParam(2,$userName,PDO::PARAM_STR);
        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_OBJ);

        if (empty($rs)){
            echo 'login fail';
            echo json_encode('Username password incorrect');
        }else{
            foreach ($rs as $row){
                    $dbUserName = $row->userName;
                    $dbPassword = $row->password;
            }
            if (password_verify($password,$dbPassword)){
                $_SESSION['username'] = $dbUserName;
                $_SESSION['logged_in'] = true;

                setcookie('logged_in_cookie', 'true', [
                    'expires' => time() + 2592000,
                    'path' => '/home.php',
                    'secure' => true,
                    'samesite' => 'None'
                ]);
                echo 'login Success';
                header("Location: ../front-end/home.php", true, 301);
                exit();
            }else {
                echo 'Invalid username password';
            }
        }

    }
}
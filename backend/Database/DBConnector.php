<?php

class DBConnector
{
    private $DB_HOST = 'localhost';
    private $DB_NAME = 'linkedUp';
    private $DB_USER = 'wad';
    private $DB_PASS = 'linkedUp';


    private $pdo;

    public function __construct() {
        $dsn = 'mysql:host='.$this->DB_HOST.';dbname='.$this->DB_NAME;

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try{
            $this->pdo = new PDO($dsn, $this->DB_USER, $this->DB_PASS, $options);
        }catch (PDOException $e) {
            die("Connection Failed: ".$e->getMessage());
        }
    }

    public function getConnection() {
        return $this->pdo;
    }
}
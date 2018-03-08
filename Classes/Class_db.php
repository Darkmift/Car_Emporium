<?php

class Database implements InsertInterface {

    private $host;
    private $user;
    private $pass;
    private $db;
    public $mysqli;
    public static $instance;

    public static function getInstance() {
        if (!isset(Database::$instance)) {
            Database::$instance = new Database();
            return Database::$instance;
        }//can only exist once.
    }

    public function __construct() {
        $this->db_connect();
    }

    private function db_connect() {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->pass = '';
        $this->db = 'gearshop';

        $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db);
        return $this->mysqli;
    }

    public function db_insert($queryString, $types, array $bindParamString) {
        if (mysqli_connect_errno($this->mysqli)) {
            die("Failed to connect to MySQL: " . mysqli_connect_error());
        }
        $statement = $this->mysqli->prepare($queryString);
        $statement->bind_param($types, ...$bindParamString);
        //echo '<pre>' . print_r(debug_backtrace(), 1) . '</pre>';
        if (!$statement->execute()) {
            echo "Execute failed: (" . $statement->errno . ") " . $statement->error;
        }
    }

}

interface InsertInterface {

    public function db_insert($queryString, $types, array $bindParamString);
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

//
////
//$db = Database::getInstance()->db_insert(
//        "INSERT INTO `cars`(`name`, `color`) VALUES (?,?)", 'ss', array(generateRandomString(), 'this')
//);



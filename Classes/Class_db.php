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
        $conn = $this->db_connect();
        if ($conn->connect_error) {
            die("Failed to connect to MySQL: " . mysqli_connect_error());
        }
        $statement = $this->mysqli->prepare($queryString);
        $statement->bind_param($types, ...$bindParamString);

        if (!$statement->execute()) {

            echo "Execute failed: (" . $statement->errno . ") " . $statement->error;
        }
        $conn->close();
    }

    public function db_fetch($queryString) {
        $conn = $this->db_connect();
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $result = $conn->query($queryString);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $rowString = '';
                foreach ($row as $key => $value) {
                    $rowString .= $key . ' : ' . $value . ' .';
                }
                echo substr($rowString, 0, -1) . "<br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
    }

}

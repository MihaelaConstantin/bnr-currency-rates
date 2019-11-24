<?php


require_once(realpath('../config.php') . "config.php");

class DbHelper {

    protected $connection;

    public function __construct() {
        try {
            $this->connection = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);
        } catch (Exception $e) {
            die("Failed to connect to the database");
        }
    }

    public function select($sql) {
        $result = array();
        $queryResult = $this->connection->query($sql);
        while($row = $queryResult->fetch_assoc()) {
            array_push($result, $row);
        }
        
        return $result;
    }

    public function insert($sql) {
        return $this->connection->query($sql);
    }
}
<?php

abstract class Product {

    protected $name;
    protected $type;
    protected $price;
    protected $date_sold;

//protected $table;
    public function getName() {
        return $this->name;
    }

    public function __construct($name, $type, $price, $date_sold) {
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->date_sold = $date_sold;
    }

    public function insertSQLArray() {
        $details = array();
        $details[0] = $this->name;
        $details[1] = $this->type;
        $details[2] = $this->price;
        $details[3] = $this->date_sold;
        return $details;
    }

    function returnClassType() {
        //return __CLASS__;
        return get_called_class();
    }

    function returnClassKeys() {
        return array_keys(get_class_vars(get_class($this)));
    }

    public function create_SqlParams() {
        $columns = $this->returnClassKeys();
        $column_names = '';
        $queryValues = '';
        $types = '';
        for ($index = 0; $index < count($columns); $index++) {
            $column_names .= $columns[$index] . ',';
            $queryValues .= "?,";
            $types .= 's';
        }
        $queryString = "INSERT INTO " .
                lcfirst($this->returnClassType()) .
                "(" . substr($column_names, 0, -1) . ") " .
                "VALUES (" . substr($queryValues, 0, -1) . ")";
        return array($queryString, $types);
    }

    public static function read_SqlParams($param) {
        $queryString = '';
        if ($param === 'All') {
            $queryString = "SELECT * FROM " . lcfirst(self::returnClassType());
        } else {
            $queryString = "SELECT * FROM " . lcfirst(self::returnClassType()) . " WHERE `name`='$this->name'";
        }
        return $queryString;
    }

    public function update_SqlParams() {
        
    }

    public function sold_SqlParams() {
        
    }

}

<?php


/* abstract */

class Product {

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

    public function create_SqlParams() {
        $columns = array_keys(get_class_vars(get_class($this)));
        $string = '';
        $queryValues = '';
        $types = '';
        for ($index = 0; $index < count($columns); $index++) {
            $string .= $columns[$index] . ',';
            $queryValues .= "?,";
            $types .= 's';
        }
        $queryString = "INSERT INTO " .
                lcfirst($this->returnClassType()) .
                "(" . substr($string, 0, -1) . ") " .
                "VALUES (" . substr($queryValues, 0, -1) . ")";
//        $bindParamString = $this->insertSQLArray();
//        echo 'query String; ' . $queryString . "<hr>";
//        echo 'types: ' . $types . "<hr>";
        return array($queryString, $types);
    }

    public function read_SqlParams() {
        
        
    }

    public function update_SqlParams() {
        
    }

    public function sold_SqlParams() {
        
    }

}

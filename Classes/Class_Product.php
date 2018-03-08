<?php

abstract class Product implements iProduct {

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

    public function prepDetailsArray() {
        $details = array();
        $details['name'] = $this->name;
        $details['type'] = $this->type;
        $details['price'] = $this->price;
        $details['date_sold'] = $this->date_sold;
        return $details;
    }

    public function insertSQLArray() {
        $details = array();
        $details[0] = $this->name;
        $details[1] = $this->type;
        $details[2] = $this->price;
        $details[3] = $this->date_sold;
        return $details;
    }

    function creationStatement() {
        return "You made a " . __CLASS__ . "<hr>";
    }

    public function prepStatement() {
        $statement = $this->mysqli->prepare(
                "INSERT INTO " . __CLASS__
                . "(`name`,`type`,`price`,`date_inserted`, `date_sold`)"
                . " VALUES (?,?,?,?,?)");
        $statement_bind = bind_param(array('s', 's', 's', 's', 's'), $this->name, $this->type, $this->price, $this->date_sold);
        $statementData = array($statement, $statement_bind);
        return $statementData;
    }

}

interface iProduct {

    public function prepDetailsArray();
}

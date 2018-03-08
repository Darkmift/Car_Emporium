<?php

include 'Class_Product.php';
include 'Class_db.php';

class Vehicle extends Product implements iVehicle {

    private $licensePlate;

    function __construct($name, $type, $price, $date_sold, $licensePlate) {
        parent::__construct($name, $type, $price, $date_sold);
        $this->licensePlate = $licensePlate;
    }

    public function addToInsertSQLArray() {
        $details = $this->insertSQLArray();
        array_push($details, $this->licensePlate);
        unset($details[3]);
        return $details;
    }

    public static function echoName() {
        return __CLASS__;
    }

}

interface iVehicle {

    public function addToInsertSQLArray();
}

echo "<hr>";
$someCar = new Vehicle('MetalButt', '$type', '$price', '$date_sold', '$licensePlate');
$someCar->insertSQLArray();
echo '<pre>' . print_r($someCar, 1) . '</pre><hr>';
//echo '<pre>' . print_r($someCar->prepDetailsArray(), 1) . '</pre><hr>';
echo '<pre>' . print_r($someCar->addToInsertSQLArray(), 1) . '</pre><hr>';
echo '<hr>';
$db = Database::getInstance()->db_insert(
        "INSERT INTO " . lcfirst(Vehicle::echoName()) .
        "(`name`, `type`,`price`,`licensePlate`) "
        . "VALUES (?,?,?,?)", 'ssss', $someCar->addToInsertSQLArray()
);


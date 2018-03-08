<?php

include 'Class_Product.php';
include 'Class_db.php';

class Vehicle extends Product implements iVehicle {

    private $licensePlate;

    function __construct($name, $type, $price, $date_sold, $licensePlate) {
        parent::__construct($name, $type, $price, $date_sold);
        $this->licensePlate = $licensePlate;
    }

    public function addToDetailsArray() {
        $details = $this->prepDetailsArray();
        $details['licensePlate'] = $this->licensePlate;
        return $details;
    }

    public function addToDetailsArray2() {
        $details = $this->prepDetailsArray2();
        array_push($details, $this->licensePlate);
        unset($details[3]);
        return $details;
    }

    public static function echoName() {
        return __CLASS__;
    }

}

interface iVehicle {

    public function addToDetailsArray();
}

echo "<hr>";
$someCar = new Vehicle('$myshinyassname', '$type', '$price', '$date_sold', '$licensePlate');
$someCar->prepDetailsArray2();
echo '<pre>' . print_r($someCar, 1) . '</pre><hr>';
//echo '<pre>' . print_r($someCar->prepDetailsArray(), 1) . '</pre><hr>';
echo '<pre>' . print_r($someCar->addToDetailsArray2(), 1) . '</pre><hr>';
echo '<hr>';
$db = Database::getInstance()->db_insert(
        "INSERT INTO " . lcfirst(Vehicle::echoName()) .
        "(`name`, `type`,`price`,`licensePlate`) "
        . "VALUES (?,?,?,?)", 'ssss', $someCar->addToDetailsArray2()
);


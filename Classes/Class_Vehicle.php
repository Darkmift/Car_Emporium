<?php

class Vehicle extends Product implements iVehicle {

    private $licensePlate;

    function __construct($name, $type, $price, $date_sold, $licensePlate) {
        parent::__construct($name, $type, $price, $date_sold);
        $this->licensePlate = $licensePlate;
    }

    public function addToInsertSQLArray() {
        $details = $this->insertSQLArray();
        array_push($details, $this->licensePlate);
        return $details;
    }

}

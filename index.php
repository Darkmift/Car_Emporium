<?php

include 'Classes/Class_Product.php';
include 'Classes/Class_db.php';
include 'Classes/Class_Vehicle.php';
include 'Classes/Class_Product_Factory.php';

//vehicle interface
interface iVehicle {

    //fetch query for insert to db
    public function addToInsertSQLArray();

    //fetch query for select from db
    public static function read_SqlParams($param);

    public static function update_SqlParams($where_Column, $param_to_update, $param_update_value);

    public static function delete_SqlParams($where_Column, $param_to_delete);
}

//db interface
interface InsertInterface {

    public function db_insert($queryString, $types, array $bindParamString);

    public function db_fetch($queryString, $action);
}

//factory interface

interface iFactory {

    public function create($Param_array);
}

//////
//$someProduct = new Product('TEST02', 'someType', '$price', '$date_sold');
//$someProduct->create_SqlParams();
//echo '<pre>someProduct bindparams:' . print_r($someProduct->insertSQLArray(), 1) . '</pre><hr>';
//echo '<pre>someProduct properties:' . print_r($someProduct, 1) . '</pre><hr>';
//echo '<pre>get object vars:';
//get_object_vars($someProduct);
//echo '</pre><hr>';
//$injectarray = $someProduct->create_SqlParams();
//$db = Database::getInstance();
//$db->db_insert($injectarray[0], $injectarray[1], $someProduct->insertSQLArray());
//echo '<pre>' . print_r(debug_backtrace(), 1) . '</pre><hr>';
////////////////
//$someVehicle = new Vehicle('TEST02', 'someType', '$price', '$date_sold', '$licensePlate');
//$someVehicle->create_SqlParams();
//echo '<pre>someProduct bindparams:' . print_r($someVehicle->insertSQLArray(), 1) . '</pre><hr>';
//echo '<pre>someProduct properties:' . print_r($someVehicle, 1) . '</pre><hr>';
//echo '<pre>get object vars:';
//get_object_vars($someVehicle);
//echo '</pre><hr>';
//$injectarray = $someVehicle->create_SqlParams();
//
//$db->db_insert($injectarray[0], $injectarray[1], $someVehicle->insertSQLArray());
//
//$SSSS = new Vehicle('$name', '$type', '$price', '$date_sold', '$licensePlate');
//echo $SSSS->returnClassType();
//////////
//$someProduct = new Product('TEST04', 'someType', '$price', '$date_sold');
//$injectarray = $someProduct->create_SqlParams();
//$db = Database::getInstance();
//$db->db_insert($injectarray[0], $injectarray[1], $someProduct->insertSQLArray());
/////////
//$db = Database::getInstance();
//$someVehicle = new Vehicle('TEST11', 'someType', '$price', '$date_sold', '$licensePlate');
//$injectarray = $someVehicle->create_SqlParams();
//$db->db_insert($injectarray[0], $injectarray[1], $someVehicle->addToInsertSQLArray());
///////////
//$DDD = new Vehicle('$name', '$type', '$price', '$date_sold', '$licensePlate');
//echo '<hr>';
//$DDD->SortKeys();
//print_r($DDD->addToInsertSQLArray());
///////////
//$db = Database::getInstance();
//$someVehicle = new Vehicle('TEST12', 'someType', '$price', '$date_sold', '$licensePlate');
//$injectarray = $someVehicle->create_SqlParams();
//$db->db_insert($injectarray[0], $injectarray[1], $someVehicle->addToInsertSQLArray());
//$db->db_fetch(Vehicle::read_SqlParams('All'));
////////////
//$db = Database::getInstance();
//$someVehicle = new Vehicle('TEST12', 'someType', '$price', '$date_sold', '$licensePlate');
//$injectarray = $someVehicle->create_SqlParams();
//$db->db_insert($injectarray[0], $injectarray[1], $someVehicle->addToInsertSQLArray());
//$db->db_fetch(Vehicle::read_SqlParams('TEST05'));
//////
//$someVehicle = new Vehicle('TEST12', 'someType', '$price', '$date_sold', '$licensePlate');
//echo '<pre>someProduct properties:' . print_r($someVehicle, 1) . '</pre><hr>';
//
/////
//$db = Database::getInstance();
//$db->db_fetch(Vehicle::update_SqlParams('price', '30.00', '350.00'), 'UPDATE');
/////
//$db = Database::getInstance();
//$db->db_fetch(Vehicle::delete_SqlParams('id', '9'), 'DELETE');
////
$factory = new Product_Factory;
$someVehicle = $factory->create(array('Vehicle', 'TEST13', 'someType', '$price', '$date_sold', '$licensePlate'));
echo '<pre>someProduct properties:' . print_r($someVehicle, 1) . '</pre><hr>';
$db = Database::getInstance();
$injectarray = $someVehicle->create_SqlParams();
$db->db_insert($injectarray[0], $injectarray[1], $someVehicle->addToInsertSQLArray());

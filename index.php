<?php

include 'Classes/Class_Product.php';
include 'Classes/Class_db.php';
include 'Classes/Class_Vehicle.php';

//vehicle interface
interface iVehicle {

    public function addToInsertSQLArray();
}

//db interface
interface InsertInterface {

    public function db_insert($queryString, $types, array $bindParamString);
}

//////
//////
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
$someProduct = new Product('TEST03', 'someType', '$price', '$date_sold');
$injectarray = $someProduct->create_SqlParams();
$db = Database::getInstance();
$db->db_insert($injectarray[0], $injectarray[1], $someProduct->insertSQLArray());
/////////
$someVehicle = new Vehicle('TEST03', 'someType', '$price', '$date_sold', '$licensePlate');
$injectarray = $someVehicle->create_SqlParams();
$db->db_insert($injectarray[0], $injectarray[1], $someVehicle->insertSQLArray());

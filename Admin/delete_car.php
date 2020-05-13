<?php
require_once 'My_DB.php';
require_once 'CarModel.php';

$cars = new carmodel();
$u=new carmodel();
//getting id of the data from url
$cars->ID = $_GET['id'];

$u->remove($cars);


?>

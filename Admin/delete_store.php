<?php
require_once 'StoreModel.php';

$store = new storemodel();
$u=new storemodel();
//getting id of the data from url
$store->ID = $_GET['id'];

$u->remove($store);


?>

<?php

require_once 'InventoryModel.php';

$inv = new inventorymodel();
$u=new inventorymodel();
//getting id of the data from url
$inv->ID = $_GET['id'];

$u->remove($inv);


?>

<?php

require_once 'StoreInventoryModel.php';

$storeinvo = new storeinventorymodel();
$u=new storeinventorymodel();
//getting id of the data from url
$storeinvo->ID = $_GET['id'];

$u->remove($storeinvo);


?>

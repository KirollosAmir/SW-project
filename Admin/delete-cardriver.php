<?php

require_once 'CarDriverModel.php';
require_once 'My_DB.php';
$pharma = new cardrivermodel();
$u=new cardrivermodel();
//getting id of the data from url
$pharma->ID = $_GET['id'];

$u->remove($pharma);


?>

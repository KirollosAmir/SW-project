<?php

require_once 'PharmacyModel.php';

$pharma = new pharmacymodel();
$u=new pharmacymodel();
//getting id of the data from url
$pharma->ID = $_GET['id'];

$u->Remove($pharma);


?>

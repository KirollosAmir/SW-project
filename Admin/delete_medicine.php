<?php

require_once 'MedicineModel.php';

$med = new medicinemodel();
$u=new medicinemodel();
//getting id of the data from url
$med->ID = $_GET['id'];

$u->Remove($med);


?>

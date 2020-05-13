<?php

require_once 'StoreMedicineModel.php';

$storemed = new storemedicinemodel();
$u=new storemedicinemodel();
//getting id of the data from url
$storemed->ID = $_GET['id'];

$u->remove($storemed);


?>

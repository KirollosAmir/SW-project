<?php
//Controller

require_once 'PharmacyModel.php';
require_once 'Pharmacyview.php';


$stdView=new pharmacyView();
$pharmacy=$_GET['ID'];
$stdView->ViewEdit($pharmacy);





?>
<?php
//Controller

require_once 'MedicineModel.php';
require_once 'Medicineview.php';


$stdView=new MedicineView();
$medicine=$_GET['ID'];
$stdView->ViewEdit($medicine);





?>
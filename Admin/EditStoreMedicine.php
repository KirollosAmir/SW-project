<?php
//Controller

require_once 'StoreMedicineModel.php';
require_once 'StoreMedicineView.php';


$stdView=new StoreMedicineView();
$StoreMedicine=$_GET['ID'];
$stdView->ViewEdit($StoreMedicine);





?>
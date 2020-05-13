<?php
//Controller

require_once 'InventoryModel.php';
require_once 'Inventoryview.php';


$stdView=new InventoryView();
$inventory=$_GET['ID'];
$stdView->ViewEdit($inventory);





?>
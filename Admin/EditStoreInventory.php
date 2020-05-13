<?php
//Controller

require_once 'StoreInventoryModel.php';
require_once 'StoreInventoryView.php';


$stdView=new StoreInventoryView();
$user=$_GET['ID'];
$stdView->ViewEdit($user);





?>
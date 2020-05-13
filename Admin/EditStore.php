<?php
//Controller

require_once 'StoreModel.php';
require_once 'Storeview.php';


$stdView=new StoreView();
$store=$_GET['ID'];
$stdView->ViewEdit($store);





?>
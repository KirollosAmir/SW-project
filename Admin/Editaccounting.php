<?php
//Controller

require_once 'AccountingMode.php';
require_once 'AccountingView.php';


$stdView=new accountingView();
$acc=$_GET['ID'];
$stdView->ViewEdit($acc);





?>
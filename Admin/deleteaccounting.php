<?php

require_once 'AccountingMode.php';

$acc = new accountingmodel();
$u=new accountingmodel();
//getting id of the data from url
$acc->ID = $_GET['id'];

$u->remove($acc);


?>

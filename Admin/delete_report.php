<?php

require_once 'ReportModel.php';

$rep = new reportmodel();
$u=new reportmodel();
//getting id of the data from url
$rep->ID = $_GET['id'];

$u->remove($rep);


?>

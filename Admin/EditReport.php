<?php
//Controller

require_once 'ReportModel.php';
require_once 'Reportview.php';


$stdView=new ReportView();
$report=$_GET['ID'];
$stdView->ViewEdit($report);





?>
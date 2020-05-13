<?php
//Controller

require_once 'PaymentModel.php';
require_once 'PaymentView.php';


$stdView=new PaymentView();
$payment=$_GET['ID'];
$stdView->ViewEdit($payment);





?>
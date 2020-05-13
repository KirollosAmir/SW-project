<?php

require_once 'PaymentModel.php';

$pay = new  paymentmodel();
$u=new  paymentmodel();
//getting id of the data from url
$pay->ID = $_GET['id'];

$u->remove($pay);


?>

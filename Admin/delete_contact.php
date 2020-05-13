<?php

require_once 'ContactModel.php';

$contactus = new contactmodel();
$u=new contactmodel();
//getting id of the data from url
$contactus->ID = $_GET['id'];

$u->remove($contactus);


?>

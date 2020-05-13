<?php

require_once 'UsertypeModel.php';

$ut = new usertypemodel();
$u=new usertypemodel();
//getting id of the data from url
$ut->ID = $_GET['id'];

$u->remove($ut);


?>

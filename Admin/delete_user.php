<?php

require_once 'UserModel.php';

$user = new usermodel();
$u=new usermodel();
//getting id of the data from url
$user->ID = $_GET['id'];

$u->remove($user);


?>

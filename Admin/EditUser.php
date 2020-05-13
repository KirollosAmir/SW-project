<?php
//Controller

require_once 'UserModel.php';
require_once 'Userview.php';


$stdView=new UserView();
$user=$_GET['ID'];
$stdView->ViewEdit($user);





?>
<?php
//Controller

require_once 'UsertypeModel.php';
require_once 'Usertypeview.php';


$stdView=new UsertypeView();
$user=$_GET['ID'];
$stdView->ViewEdit($user);





?>
<?php
//Controller
require_once 'My_DB.php';
require_once 'CarDriverModel.php';
require_once 'CarDriverView.php';


$stdView=new CarDriverView();
$user=$_GET['ID'];
$stdView->ViewEdit($user);





?>
<?php
//Controller

require_once 'CarModel.php';
require_once 'carview.php';


$stdView=new CarView();
$car=$_GET['ID'];
$stdView->ViewEdit($car);


?>
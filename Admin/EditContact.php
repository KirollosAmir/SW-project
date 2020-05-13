<?php
//Controller

require_once 'ContactModel.php';
require_once 'Contactview.php';


$stdView=new ContactView();
$contact=$_GET['ID'];
$stdView->ViewEdit($contact);





?>
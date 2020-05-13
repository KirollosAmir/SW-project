<?php 
require_once ("My_DB.php");
require_once ("CClass.php");
class accountingmodel
{
	public $ID;
	public $Taxes;
	public $delivery;
	public $UserTypeID;
	

	
	
   
   public function edit($obj){
	   $class = new pharmacy();
       $result = $class->update('accounting',array('Taxes'=>$obj->Taxes,'delivery'=>$obj->delivery,'UserTypeID'=>6),$obj->ID);
   }

 


}
?>
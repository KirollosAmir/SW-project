<?php 
require_once ("My_DB.php");
require_once ("CClass.php");
class paymentmodel
{
	public $ID;
	public $Name;
	public $UserTypeID;
	

	
	function remove($obj){
     $crud = new Pharmacy();
     $result = $crud->delete('payment',$obj->ID);

   }
     
   
   public function edit($obj){
	   $class = new pharmacy();
       $result = $class->update('payment',array('Name'=>$obj->Name,'UserTypeID'=>$obj->UserTypeID),$obj->ID);
   }

 function Adding($obj){
   $crud = new pharmacy;
  $result = $crud->insert('payment',array('Name'=>$obj->Name,'UserTypeID'=>6));


   }

}
?>
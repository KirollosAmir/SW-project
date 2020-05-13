<?php 
require_once ("My_DB.php");
require_once ("CClass.php");
class pharmacymodel
{
	public $ID;
	public $Name;
	public $Location;
	public $UserTypeID;
	

	
	  function remove($obj){
     $crud = new Pharmacy();
     $result = $crud->delete('allpharmacy',$obj->ID);

   }
     
   
   public function edit($obj){
	   $class = new pharmacy();
       $result = $class->update('allpharmacy',array('Name'=>$obj->Name,'Location'=>$obj->Location),$obj->ID);
   }

 function Adding($obj){
   $crud = new pharmacy;
  $result = $crud->insert('allpharmacy',array('Name'=>$obj->Name,'Location'=>$obj->Location,'UserTypeID'=>6));


   }


}
?>
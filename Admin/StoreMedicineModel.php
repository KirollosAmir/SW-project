<?php 
require_once ("My_DB.php");
require_once ("CClass.php");
class storemedicinemodel
{
	public $ID;
	public $MedicineID;
	public $StoreID;
	

	
	 function remove($obj){
     $crud = new Pharmacy();
     $result = $crud->delete('storemedicine',$obj->ID);

   }
   
   public function edit($obj){
	   $class = new pharmacy();
       $result = $class->update('storemedicine',array('MedicineID'=>$obj->MedicineID,'StoreID'=>$obj->StoreID),$obj->ID);
   }

function Adding($obj){
   $crud = new pharmacy;
  $result = $crud->insert('storemedicine',array('MedicineID'=>$obj->MedicineID,'StoreID'=>$obj->StoreID));


   }


}
?>
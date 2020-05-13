<?php 
require_once ("My_DB.php");
require_once ("CClass.php");
class storeinventorymodel
{
	
	public $ID;
	public $StoreID;
	public $InventoryID;


	 function remove($obj){
     $crud = new Pharmacy();
     $result = $crud->delete('storeinventory',$obj->ID);

   }
   
   public function edit($obj){
	   $class = new pharmacy();
       $result = $class->update('storeinventory',array('StoreID'=>$obj->StoreID,'InventoryID'=>$obj->InventoryID),$obj->ID);
   }
function Adding($obj){
   $crud = new pharmacy;
  $result = $crud->insert('storeinventory',array('StoreID'=>$obj->StoreID,'InventoryID'=>$obj->InventoryID));


   }



}
?>
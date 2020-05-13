<?php 
require_once ("My_DB.php");
require_once ("CClass.php");
class inventorymodel
{

	public $ID;
	public $Name;
	public $Description;
	public $Type;
	public $Item;
	public $number;
	public $cost;



	
	function remove($obj){
     $crud = new Pharmacy();
     $result = $crud->delete('inventory',$obj->ID);

   }
   
   public function edit($obj){
	   $class = new pharmacy();
       $result = $class->update('inventory',array('Name'=>$obj->Name,'Description'=>$obj->Description,'Type'=>$obj->Type,
	   'Item'=>$obj->Item,'number'=>$obj->number,'cost'=>$obj->cost),$obj->ID);
   }

 function Adding($obj){
   $crud = new pharmacy;
  $result = $crud->insert('inventory',array('Name'=>$obj->Name,'Description'=>$obj->Description,'Type'=>$obj->Type,'Item'=>$obj->Item,'number'=>$obj->number,'cost'=>$obj->cost));


   }


}
?>
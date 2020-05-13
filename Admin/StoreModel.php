<?php 
require_once ("My_DB.php");
require_once ("CClass.php");
class storemodel
{
	public $ID;
	public $Name;
	public $NumberOFproduct;
	public $price;
	public $UserTypeID;
	

	
	function remove($obj){
     $crud = new Pharmacy();
     $result = $crud->delete('store',$obj->ID);

   }
   
   public function edit($obj){
	   $class = new pharmacy();
       $result = $class->update('store',array('Name'=>$obj->Name,'NumberOFproduct'=>$obj->NumberOFproduct,'price'=>$obj->price,
	   'UserTypeID'=>$obj->UserTypeID),$obj->ID);
   }


 function Adding($obj){
   $crud = new pharmacy;
  $result = $crud->insert('store',array('Name'=>$obj->Name,'NumberOFproduct'=>$obj->NumberOFproduct,'price'=>$obj->price,'UserTypeID'=>$obj->UserTypeID));


   }



}
?>
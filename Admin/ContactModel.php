<?php 
require_once ("My_DB.php");
require_once ("CClass.php");
class contactmodel
{
	
	public $ID;
	public $Name;
	public $Subject;
	public $comment;
	public $UserTypeID;

	
	function remove($obj){
     $crud = new Pharmacy();
     $result = $crud->delete('contact',$obj->ID);

   }
     
   
   public function edit($obj){
	   $class = new pharmacy();
       $result = $class->update('contact',array('Name'=>$obj->Name,'Subject'=>$obj->Subject,'comment'=>$obj->comment,
	   'UserTypeID'=>$obj->UserTypeID),$obj->ID);
   }

 function Adding($obj){
   $crud = new pharmacy;
  $result = $crud->insert('contact',array('Name'=>$obj->Name,'Subject'=>$obj->Subject,'comment'=>$obj->comment,'UserTypeID'=>$obj->UserTypeID));


   }

}
?>
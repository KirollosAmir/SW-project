<?php 
require_once ("My_DB.php");
require_once ("CClass.php");
class usertypemodel
{
	public $ID;
	public $Type;
	

	
	 function remove($obj){
     $crud = new Pharmacy();
     $result = $crud->delete('usertype',$obj->ID);

   }
     
   
   public function edit($obj){
	   $class = new pharmacy();
       $result = $class->update('usertype',array('Type'=>$obj->Type),$obj->ID);
   }

 function Adding($obj){
   $crud = new pharmacy;
  $result = $crud->insert('usertype',array('Type'=>$obj->Type));


   }


}
?>
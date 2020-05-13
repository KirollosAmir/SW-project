<?php 
require_once ("My_DB.php");
require_once ("CClass.php");
class cardrivermodel
{
	public $ID;
	public $UserTypeID;
	public $CarID;
	


	
	 function Remove($Obj){
		   $crud = new pharmacy;
		   $result = $crud->delete('cardriver',$Obj->ID);
   }
     
   
   public function edit($obj){
	   $class = new pharmacy();
       $result = $class->update('cardriver',array('UserTypeID'=>$obj->UserTypeID,'CarID'=>$obj->CarID),$obj->ID);
   }

 function Adding($obj){
   $crud = new pharmacy;
  $result = $crud->insert('cardriver',array('UserTypeID'=>2,'CarID'=>$obj->CarID));
}


}
?>
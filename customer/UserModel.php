<?php 
require_once ("My_DB.php");
require_once ("CClass.php");
class usermodel
{
	public $ID;
	public $FirstName;
	public $LastName;
	public $DateOfBirth;
	public $Gender;
	public $Email;
	public $Password;
	public $UsetTypeID;

	
	 function remove($obj){
    $crud = new Pharmacy();
    $result = $crud->delete('user',$obj->ID);

  }
     
   
   public function edit($obj){
	   $class = new pharmacy();
       $result = $class->update('user',array('FirstName'=>$obj->FirstName,'LastName'=>$obj->LastName,'DateOfBirth'=>$obj->DateOfBirth,
	   'Gender'=>$obj->Gender,'Email'=>$obj->Email,'Password'=>$obj->Password,'UsetTypeID'=>$obj->UsetTypeID),$obj->ID);
   }
   
 function Adding($obj){
   $crud = new pharmacy;
  $result = $crud->insert('user',array('FirstName'=>$obj->FirstName,'LastName'=>$obj->LastName,'DateOfBirth'=>$obj->DateOfBirth,'Gender'=>$obj->Gender,'Email'=>$obj->Email,
  'Password'=>$obj->Password,'UsetTypeID'=>$obj->UsetTypeID));

   }


}
?>
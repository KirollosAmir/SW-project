<?php 
require_once ("My_DB.php");
require_once ("CClass.php");
class medicinemodel
{
	public $ID;
	public $Name;
	public $Discription;
	public $Type;
	public $Cost;
	public $Number;
	public $UserTypeID;
	public $MedcineSeen;

	
	 function remove($obj){
     $crud = new pharmacy();
     $result = $crud->delete('medicine',$obj->ID);

   }
     
   
   public function edit($obj){
	   $class = new pharmacy();
       $result = $class->update('medicine',array('Name'=>$obj->Name,'Discription'=>$obj->Discription,'Type'=>$obj->Type,
	   'Cost'=>$obj->Cost,'Number'=>$obj->Number,'UserTypeID'=>$obj->UserTypeID),$obj->ID);
   }

function Adding($obj){
   $crud = new pharmacy;
  $result = $crud->insert('medicine',array('Name'=>$obj->Name,'Discription'=>$obj->Discription,
  'Type'=>$obj->Type,'Cost'=>$obj->Cost,'Number'=>$obj->Number,'UserTypeID'=>6 , 'MedcineSeen'=>0));


   }

}
?>
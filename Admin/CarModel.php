<?php 
require_once ("My_DB.php");
require_once ("CClass.php");
class carmodel
{
	public $ID;
	public $Type;
	public $DateOFEntery;
	public $Color;
	public $License;
	

  function remove($obj){
     $crud = new Pharmacy();
     $result = $crud->delete('car',$obj->ID);
   }
   
   public function edit($obj){
	   $class = new pharmacy();
       $result = $class->update('car',array('Type'=>$obj->Type,'Model'=>$obj->Model,'DateOFEntery'=>$obj->DateOFEntery,
	   'Color'=>$obj->Color,'License'=>$obj->License),$obj->ID);
   }

 function Adding($obj){
   $crud = new pharmacy;
  $result = $crud->insert('car',array('Type'=>$obj->Type,'Model'=>$obj->Model,'DateOFEntery'=>$obj->DateOFEntery,
  'Color'=>$obj->Color,'License'=>$obj->License));
   }


}
?>
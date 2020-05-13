<?php 
require_once ("My_DB.php");
require_once ("CClass.php");
class reportmodel
{
	public $ID;
	public $ReportName;
	public $UserTypeID;

	

	 function remove($obj){
     $crud = new Pharmacy();
     $result = $crud->delete('report',$obj->ID);

   }
     
   
   public function edit($obj){
	   $class = new pharmacy();
       $result = $class->update('report',array('ReportName'=>$obj->ReportName,'UserTypeID'=>$obj->UserTypeID),$obj->ID);
   }

  function Adding($obj){
   $crud = new pharmacy;
  $result = $crud->insert('report',array('ReportName'=>$obj->ReportName,'UserTypeID'=>$obj->UserTypeID));


   }


}
?>
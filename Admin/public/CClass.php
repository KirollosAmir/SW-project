<?php
include_once 'My_DB.php';
	class pharmacy 
{
	public $id;
	public $name;
	public $pass;
	

	public function __construct()
	
	{
			 
	}
	

	public static function SelectAll($sql)
	{
		$con = new mysqli("localhost", "root", "","pharmacy");
  
       $DataSet1 = mysqli_query($con,$sql);	
	
			$rows = array();
		
		while ($row = $DataSet1->fetch_assoc()) {
			$rows[] = $row;
		}
		
		return $rows;
		
	}
	
	public function insert($table,$Value=array()){
    	 $con = new mysqli("localhost", "root", "","pharmacy");
       $sql='INSERT INTO `'.$table.'` (`'.implode('`, `',array_keys($Value)).'`) VALUES ("' . implode('", "', $Value) . '")';
       $result = mysqli_query($con,$sql);	
       
	
		if ($result == true) {
            	
                return true; 
            }else{
            	
                return false; 
            }
        }
		
		
	public function delete($table,$id) 
	{ 
	
	$con = new mysqli("localhost", "root", "","pharmacy");
    $sql = "DELETE FROM $table WHERE id = $id";
    $result = mysqli_query($con,$sql);	
       
		
		
		
	
		if ($result == false) {
			echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
			return false;
		} else {
			return true;
		}
	}
	
	
	 public function update($table,$params=array(),$where){
    	
            $ar=array();
			foreach($params as $field=>$value){
				
				$ar[]=$field.'="'.$value.'"';
			}
			$con = new mysqli("localhost", "root", "","pharmacy");
   	$sql='UPDATE '.$table.' SET '.implode(',',$ar).' WHERE ID ='.$where;
    $result = mysqli_query($con,$sql);	
       
    	
		
			
           
		if ($result == true) {
            	
                return true; 
            }else{
            	
                return false; 
            }
        
    }
	
	
	


	
	
	}
	



?>
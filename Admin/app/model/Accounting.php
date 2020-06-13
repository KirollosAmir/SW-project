<?php
require_once(__ROOT__ . "model/Model.php");

class Movie extends Model {
	 private $id;
    private $Taxes	;
	private $delivery;  
	private $UserTypeID;




function __construct($id="",$Taxes="",$delivery="",$UserTypeID="") {
  $this->id = $id;
	    $this->db = $this->connect();
		
			 if(""===$Taxes){
      $this->readMovie($id);
    }else{
       $this->Taxes = $Taxes;
	  $this->delivery=$delivery;
      $this->UserTypeID = $UserTypeID;
     
    }
   
}
  
  
  
	function getTaxes() {
    return $this->Taxes;
  }
  function setTaxes($Taxes) {
    return $this->Taxes = $Taxes;
  }
  
   function getdelivery() {
    return $this->delivery;
  }
  function setdelivery($delivery) {
    return $this->delivery = $delivery;
  }
  
  function getUserTypeID() {
    return $this->UserTypeID;
  }
  function setUserTypeID($UserTypeID) {
    return $this->UserTypeID = $UserTypeID;
  }
  
 
  
  function getID() {
    return $this->id;
	}

	
	
	function readMovie(){
    $sql = "SELECT * FROM accounting ";
    $db = $this->connect();
    $result = $db->query($sql);
if(mysqli_num_rows($result) > 0){
        $row = $db->fetchRow();
        $this->Taxes = $row["Taxes"];
		$this->delivery = $row["delivery"];
		$this->UserTypeID=$row["UserTypeID"];
      
    }
    else {
        $this->Taxes = "";
		$this->delivery="";
        $this->UserTypeID = "";
	
		
    }
  }

	
	
	
	function editMovie($Taxes,$delivery,$UserTypeID){
      $sql = "update accounting set Taxes='$Taxes',delivery='$delivery', UserTypeID='$UserTypeID' where id=$this->id;";
        if($this->db->query($sql) === true){
            echo "updated successfully.";
            $this->readMovie($this->id);
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
  }
  
  function deleteMovie(){
	  $sql="delete from accounting where id=$this->id;";
	  if($this->db->query($sql) === true){
            echo "deletet successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
	}
}

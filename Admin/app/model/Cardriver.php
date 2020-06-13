<?php
require_once(__ROOT__ . "model/Model.php");

class Movie extends Model {
	 private $id;
    private $UserTypeID	;
	private $CarID;
   




function __construct($id="",$UserTypeID="",$CarID="") {
    $this->id = $id;
	    $this->db = $this->connect();

    if(""===$UserTypeID){
      $this->readMovie($id);
    }else{
       $this->UserTypeID = $UserTypeID;
	  $this->CarID=$CarID;
    
    }
  }
  
  
	function getUserTypeID() {
    return $this->UserTypeID;
  }
  function setUserTypeID($UserTypeID) {
    return $this->UserTypeID = $UserTypeID;
  }
  
   function getCarID() {
    return $this->CarID;
  }
  function setCarID($CarID) {
    return $this->CarID = $CarID;
  }
  
  
  
  function getID() {
    return $this->id;
	}

	
	
	function readMovie(){
    $sql = "SELECT * FROM cardriver ";
    $db = $this->connect();
    $result = $db->query($sql);
if(mysqli_num_rows($result) > 0){
        $row = $db->fetchRow();
        $this->UserTypeID = $row["UserTypeID"];
		
		$this->CarID=$row["CarID"];
      
    }
    else {
        $this->UserTypeID = "";
		$this->CarID="";
      
		
    }
  }

	
	
	
	function editMovie($UserTypeID,$CarID){
      $sql = "update cardriver set UserTypeID='$UserTypeID',CarID='$CarID' where id=$this->id;";
        if($this->db->query($sql) === true){
            echo "updated successfully.";
            $this->readMovie($this->id);
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
  }
  
  function deleteMovie(){
	  $sql="delete from cardriver where id=$this->id;";
	  if($this->db->query($sql) === true){
            echo "deletet successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
	}
}
<?php
require_once(__ROOT__ . "model/Model.php");

class Movie extends Model {
	 private $id;
    private $Name	;
	private $Location;
    private $UserTypeID;
    




function __construct($id="",$Name="",$Location="",$UserTypeID="") {
    $this->id = $id;
	    $this->db = $this->connect();
		 if(""===$Name){
      $this->readMovie($id);
    }else{
       $this->Name = $Name;
	  $this->Location=$Location;
      $this->UserTypeID = $UserTypeID;
     
    }

}
	function getName() {
    return $this->Name;
  }
  function setName($Name) {
    return $this->Name = $Name;
  }
  
   function getLocation() {
    return $this->Location;
  }
  function setLocation($Location) {
    return $this->Location = $Location;
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
    $sql = "SELECT * FROM allpharmacy ";
    $db = $this->connect();
    $result = $db->query($sql);
if(mysqli_num_rows($result) > 0){
        $row = $db->fetchRow();
        $this->Name = $row["Name"];
		$this->Location=$row["Location"];
        $this->UserTypeID = $row["UserTypeID"];
		
    }
    else {
        $this->Name = "";
		$this->Location="";
        $this->UserTypeID = "";
		
		
    }
  }

	
	
	
	function editMovie($Name,$Location,$UserTypeID){
      $sql = "update allpharmacy set Name='$Name',Location='$Location', UserTypeID='$UserTypeID'  where id=$this->id;";
        if($this->db->query($sql) === true){
            echo "updated successfully.";
            $this->readMovie($this->id);
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
  }
  
  function deleteMovie(){
	  $sql="delete from allpharmacy where id=$this->id;";
	  if($this->db->query($sql) === true){
            echo "deletet successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
	}
}
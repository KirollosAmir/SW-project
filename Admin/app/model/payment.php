<?php
require_once(__ROOT__ . "model/Model.php");

class Movie extends Model {
	 private $id;
    private $Name	;
	
 private $UserTypeID	;



 
 
function __construct($id="",$Name="",$UserTypeID="") {
    $this->id = $id;
	    $this->db = $this->connect();

    if(""===$Name){
      $this->readMovie($id);
    }else{
       $this->Name = $Name;
	  $this->UserTypeID = $UserTypeID;
	  
	  
    }
  }
  
  function getName() {
    return $this->Name;
  }
  function setName($Name) {
    return $this->Name = $Name;
  }
  
  
  
  
	function getUserTypeID() {
    return $this->UserTypeID;
  }
  
  
 
	
  
  function getID() {
    return $this->id;
	}


	function readMovie(){
    $sql = "SELECT * FROM payment ";
    $db = $this->connect();
    $result = $db->query($sql);
if(mysqli_num_rows($result) > 0){
        $row = $db->fetchRow();
        $this->Name = $row["Name"];
		$_SESSION["Name"]=$row["Name"];
		 $this->UserTypeID = $row["UserTypeID"];
		 
		 
    }
    else {
		 $this->Name = "";
        $this->UserTypeID = "";
		
		
		
    }
  }

	
	
	
	function editMovie($Name,$UserTypeID){
      $sql = "update payment set   Name='$Name',UserTypeID='$UserTypeID' where id=$this->id;";
        if($this->db->query($sql) === true){
            echo "updated successfully.";
            $this->readMovie($this->id);
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
  }
  
  function deleteMovie(){
	  $sql="delete from payment where id=$this->id;";
	  if($this->db->query($sql) === true){
            echo "deletet successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
	}
}
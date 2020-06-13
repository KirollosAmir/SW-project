<?php
require_once(__ROOT__ . "model/Model.php");

class Movie extends Model {
	 private $id;
    private $Name	;
	
 private $NumberOFproduct	;

  private $price	;
	
 private $UserTypeID	;
 
 
function __construct($id="",$Name="",$NumberOFproduct="",$price="",$UserTypeID="") {
    $this->id = $id;
	    $this->db = $this->connect();

    if(""===$Name){
      $this->readMovie($id);
    }else{
       $this->Name = $Name;
	  $this->NumberOFproduct = $NumberOFproduct;
	  
	   $this->price = $price;
	  $this->UserTypeID = $UserTypeID;
    }
  }
  
  function getName() {
    return $this->Name;
  }
  function setName($Name) {
    return $this->Name = $Name;
  }
  
  
  
  
	function getNumberOFproduct() {
    return $this->NumberOFproduct;
  }
  
  
  
  function getprice() {
    return $this->price;
  }
 
  
   function getUserTypeID() {
    return $this->UserTypeID;
  }
 
  
  function getID() {
    return $this->id;
	}

	
	
	function readMovie(){
    $sql = "SELECT * FROM store ";
    $db = $this->connect();
    $result = $db->query($sql);
if(mysqli_num_rows($result) > 0){
        $row = $db->fetchRow();
        $this->Name = $row["Name"];
		$_SESSION["Name"]=$row["Name"];
		 $this->NumberOFproduct = $row["NumberOFproduct"];
		 
		  $this->price = $row["price"];
		  
		   $this->UserTypeID = $row["UserTypeID"];
    }
    else {
		 $this->Name = "";
        $this->NumberOFproduct = "";
		
		 $this->price = "";
        $this->UserTypeID = "";
		
		
    }
  }

	
	
	
	function editMovie($Name,$NumberOFproduct,$price,$UserTypeID){
      $sql = "update store set Name='$Name',NumberOFproduct='$NumberOFproduct',price='$price' ,UserTypeID='$UserTypeID' where id=$this->id;";
        if($this->db->query($sql) === true){
            echo "updated successfully.";
            $this->readMovie($this->id);
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
  }
  
  function deleteMovie(){
	  $sql="delete from store where id=$this->id;";
	  if($this->db->query($sql) === true){
            echo "deletet successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
	}
}
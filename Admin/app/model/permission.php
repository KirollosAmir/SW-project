<?php
require_once(__ROOT__ . "model/Model.php");

class Movie extends Model {
	 private $id;
    private $PhysicalAddress	;
	
 private $FriendAddress	;

 private $Html	;

 
 
function __construct($id="",$PhysicalAddress="",$FriendAddress="",$Html="") {
    $this->id = $id;
	    $this->db = $this->connect();

    if(""===$PhysicalAddress){
      $this->readMovie($id);
    }else{
       $this->PhysicalAddress = $PhysicalAddress;
	  $this->FriendAddress = $FriendAddress;
	   $this->Html = $Html;
	  
    }
  }
  
  function getPhysicalAddress() {
    return $this->PhysicalAddress;
  }
  function setPhysicalAddress($PhysicalAddress) {
    return $this->PhysicalAddress = $PhysicalAddress;
  }
  
  
  
  
	function getFriendAddress() {
    return $this->FriendAddress;
  }
  
  
 
	function getHtml() {
    return $this->Html;
  } 
  
  function getID() {
    return $this->id;
	}


	function readMovie(){
    $sql = "SELECT * FROM permission ";
    $db = $this->connect();
    $result = $db->query($sql);
if(mysqli_num_rows($result) > 0){
        $row = $db->fetchRow();
        $this->PhysicalAddress = $row["PhysicalAddress"];
		$_SESSION["PhysicalAddress"]=$row["PhysicalAddress"];
		 $this->FriendAddress = $row["FriendAddress"];
		  $this->Html = $row["Html"];
		 
    }
    else {
		 $this->PhysicalAddress = "";
        $this->FriendAddress = "";
		 $this->Html = "";
		
		
    }
  }

	
	
	
	function editMovie($PhysicalAddress,$FriendAddress,$Html){
      $sql = "update permission set   PhysicalAddress='$PhysicalAddress',FriendAddress='$FriendAddress',Html='$Html' where id=$this->id;";
        if($this->db->query($sql) === true){
            echo "updated successfully.";
            $this->readMovie($this->id);
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
  }
  
  function deleteMovie(){
	  $sql="delete from permission where id=$this->id;";
	  if($this->db->query($sql) === true){
            echo "deletet successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
	}
}
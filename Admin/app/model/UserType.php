<?php
require_once(__ROOT__ . "model/Model.php");

class Movie extends Model {
	 private $id;
    private $Type	;
	



function __construct($id="",$Type="") {
    $this->id = $id;
	    $this->db = $this->connect();

    if(""===$Type){
      $this->readMovie($id);
    }else{
       $this->Type = $Type;
	 
    }
  }
  
  
	function getFirstName() {
    return $this->Type;
  }
  function setFirstName($Type) {
    return $this->Type = $Type;
  }
  
  
  function getID() {
    return $this->id;
	}

	
	
	function readMovie(){
    $sql = "SELECT * FROM usertype ";
    $db = $this->connect();
    $result = $db->query($sql);
if(mysqli_num_rows($result) > 0){
        $row = $db->fetchRow();
        $this->Type = $row["Type"];
		$_SESSION["Type"]=$row["Type"];
		
    }
    else {
        $this->Type = "";
		
		
    }
  }

	
	
	
	function editMovie($Type){
      $sql = "update usertype set Type='$Type' where id=$this->id;";
        if($this->db->query($sql) === true){
            echo "updated successfully.";
            $this->readMovie($this->id);
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
  }
  
  function deleteMovie(){
	  $sql="delete from usertype where id=$this->id;";
	  if($this->db->query($sql) === true){
            echo "deletet successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
	}
}
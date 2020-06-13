<?php
require_once(__ROOT__ . "model/Model.php");

class Movie extends Model {
	 private $id;
    private $UserID	;
	
 private $LinkID	;


function __construct($id="",$UserID="",$LinkID="") {
    $this->id = $id;
	    $this->db = $this->connect();

    if(""===$UserID){
      $this->readMovie($id);
    }else{
       $this->UserID = $UserID;
	  $this->LinkID = $LinkID;
    }
  }
  
  function getUserID() {
    return $this->UserID;
  }
  function setUserID($UserID) {
    return $this->UserID = $UserID;
  }
  
  
  
  
	function getLinkID() {
    return $this->LinkID;
  }
  function setLinkID($LinkID) {
    return $this->LinkID = $LinkID;
  }
  
  
  
  
  function getID() {
    return $this->id;
	}

	
	
	function readMovie(){
    $sql = "SELECT * FROM usertypelink ";
    $db = $this->connect();
    $result = $db->query($sql);
if(mysqli_num_rows($result) > 0){
        $row = $db->fetchRow();
        $this->UserID = $row["UserID"];
		$_SESSION["UserID"]=$row["UserID"];
		 $this->LinkID = $row["LinkID"];
    }
    else {
		 $this->UserID = "";
        $this->LinkID = "";
		
		
    }
  }

	
	
	
	function editMovie($UserID,$LinkID){
      $sql = "update usertypelink set UserID='$UserID',LinkID='$LinkID' where id=$this->id;";
        if($this->db->query($sql) === true){
            echo "updated successfully.";
            $this->readMovie($this->id);
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
  }
  
  function deleteMovie(){
	  $sql="delete from usertypelink where id=$this->id;";
	  if($this->db->query($sql) === true){
            echo "deletet successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
	}
}
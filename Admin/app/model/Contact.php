<?php
require_once(__ROOT__ . "model/Model.php");

class Movie extends Model {
	 private $id;
    private $Name	;
	private $Subject;
    private $comment;
    private $UserTypeID;
 




function __construct($id="",$Name="",$Subject="",$comment="",$UserTypeID="") {
    $this->id = $id;
	    $this->db = $this->connect();

    if(""===$Name){
      $this->readMovie($id);
    }else{
       $this->Name = $Name;
	  $this->Subject=$Subject;
      $this->comment = $comment;
      $this->UserTypeID = $UserTypeID;
	
    }
  }
  
  
	function getName() {
    return $this->Name;
  }
  function setName($Name) {
    return $this->Name = $Name;
  }
  
   function getSubject() {
    return $this->Subject;
  }
  function setSubject($Subject) {
    return $this->Subject = $Subject;
  }
  
  function getcomment() {
    return $this->comment;
  }
  function setcomment($comment) {
    return $this->comment = $comment;
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
    $sql = "SELECT * FROM contact ";
    $db = $this->connect();
    $result = $db->query($sql);
if(mysqli_num_rows($result) > 0){
        $row = $db->fetchRow();
        $this->Name = $row["Name"];
		
		$this->Subject=$row["Subject"];
        $this->comment = $row["comment"];
		$this->UserTypeID = $row["UserTypeID"];
		
    }
    else {
        $this->Name = "";
		$this->Subject="";
        $this->comment = "";
		$this->UserTypeID = "";
	
		
    }
  }

	
	function editMovie($Name,$Subject,$comment,$UserTypeID){
      $sql = "update contact set Name='$Name',Subject='$Subject', comment='$comment', UserTypeID='$UserTypeID'  where id=$this->id;";
        if($this->db->query($sql) === true){
            echo "updated successfully.";
            $this->readMovie($this->id);
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
  }
  
  function deleteMovie(){
	  $sql="delete from contact where id=$this->id;";
	  if($this->db->query($sql) === true){
            echo "deletet successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
	}
}
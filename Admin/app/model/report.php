<?php
require_once(__ROOT__ . "model/Model.php");

class Movie extends Model {
	 private $id;
    private $ReportName	;
	
 private $UserTypeID	;


 
 
function __construct($id="",$ReportName="",$UserTypeID="") {
    $this->id = $id;
	    $this->db = $this->connect();

    if(""===$ReportName){
      $this->readMovie($id);
    }else{
       $this->ReportName = $ReportName;
	  $this->UserTypeID = $UserTypeID;
	  
	  
    }
  }
  
  function getReportName() {
    return $this->ReportName;
  }
  function setReportName($ReportName) {
    return $this->ReportName = $ReportName;
  }
  
  
  
  
	function getUserTypeID() {
    return $this->UserTypeID;
  }
  
  
  
  
  function getID() {
    return $this->id;
	}


	function readMovie(){
    $sql = "SELECT * FROM report ";
    $db = $this->connect();
    $result = $db->query($sql);
if(mysqli_num_rows($result) > 0){
        $row = $db->fetchRow();
        $this->ReportName = $row["ReportName"];
		$_SESSION["ReportName"]=$row["ReportName"];
		 $this->UserTypeID = $row["UserTypeID"];
		 
		 
    }
    else {
		 $this->ReportName = "";
        $this->UserTypeID = "";
		
		
		
    }
  }

	
	
	
	function editMovie($ReportName,$UserTypeID){
      $sql = "update report set ReportName='$ReportName',UserTypeID='$UserTypeID'where id=$this->id;";
        if($this->db->query($sql) === true){
            echo "updated successfully.";
            $this->readMovie($this->id);
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
  }
  
  function deleteMovie(){
	  $sql="delete from report where id=$this->id;";
	  if($this->db->query($sql) === true){
            echo "deletet successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
	}
}
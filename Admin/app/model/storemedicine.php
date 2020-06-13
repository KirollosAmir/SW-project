<?php
require_once(__ROOT__ . "model/Model.php");

class Movie extends Model {
	 private $id;
    private $MedicineID	;
	
 private $StoreID	;


function __construct($id="",$MedicineID="",$StoreID="") {
    $this->id = $id;
	    $this->db = $this->connect();

    if(""===$MedicineID){
      $this->readMovie($id);
    }else{
       $this->MedicineID = $MedicineID;
	  $this->StoreID = $StoreID;
    }
  }
  
  function getStoreID() {
    return $this->StoreID;
  }
  function setStoreID($StoreID) {
    return $this->StoreID = $StoreID;
  }
  
  
  
  
	function getMedicineID() {
    return $this->MedicineID;
  }
  function setLinkID($MedicineID) {
    return $this->MedicineID = $MedicineID;
  }
  
  
  
  
  function getID() {
    return $this->id;
	}

	
	
	function readMovie(){
    $sql = "SELECT * FROM storemedicine ";
    $db = $this->connect();
    $result = $db->query($sql);
if(mysqli_num_rows($result) > 0){
        $row = $db->fetchRow();
        $this->MedicineID = $row["MedicineID"];
		$_SESSION["MedicineID"]=$row["MedicineID"];
		 $this->StoreID = $row["StoreID"];
    }
    else {
		 $this->MedicineID = "";
        $this->StoreID = "";
		
		
    }
  }

	
	
	
	function editMovie($MedicineID,$StoreID){
      $sql = "update storemedicine set MedicineID='$MedicineID',StoreID='$StoreID' where id=$this->id;";
        if($this->db->query($sql) === true){
            echo "updated successfully.";
            $this->readMovie($this->id);
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
  }
  
  function deleteMovie(){
	  $sql="delete from storemedicine where id=$this->id;";
	  if($this->db->query($sql) === true){
            echo "deletet successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
	}
}
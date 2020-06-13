<?php
require_once(__ROOT__ . "model/Model.php");

class Movie extends Model {
	 private $id;
    private $StoreID	;
	
 private $InventoryID	;


function __construct($id="",$StoreID="",$InventoryID="") {
    $this->id = $id;
	    $this->db = $this->connect();

    if(""===$StoreID){
      $this->readMovie($id);
    }else{
       $this->StoreID = $StoreID;
	  $this->InventoryID = $InventoryID;
    }
  }
  
  function getStoreID() {
    return $this->StoreID;
  }
  function setStoreID($StoreID) {
    return $this->StoreID = $StoreID;
  }
  
  
  
  
	function getInventoryID() {
    return $this->InventoryID;
  }
  function setInventoryID($InventoryID) {
    return $this->InventoryID = $InventoryID;
  }
  
  
  
  
  function getID() {
    return $this->id;
	}

	
	
	function readMovie(){
    $sql = "SELECT * FROM storeinventory ";
    $db = $this->connect();
    $result = $db->query($sql);
if(mysqli_num_rows($result) > 0){
        $row = $db->fetchRow();
        $this->StoreID = $row["StoreID"];
		$_SESSION["StoreID"]=$row["StoreID"];
		 $this->InventoryID = $row["InventoryID"];
    }
    else {
		 $this->StoreID = "";
        $this->InventoryID = "";
		
		
    }
  }

	
	
	
	function editMovie($StoreID,$InventoryID){
      $sql = "update storeinventory set StoreID='$StoreID',InventoryID='$InventoryID' where id=$this->id;";
        if($this->db->query($sql) === true){
            echo "updated successfully.";
            $this->readMovie($this->id);
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
  }
  
  function deleteMovie(){
	  $sql="delete from storeinventory where id=$this->id;";
	  if($this->db->query($sql) === true){
            echo "deletet successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
	}
}
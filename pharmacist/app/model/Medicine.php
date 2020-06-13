<?php
require_once(__ROOT__ . "model/Model.php");

class Movie extends Model {
	 private $id;
    private $Name	;
	private $Discription;
    private $Type;
    private $Cost;
  private $Number;
    private $UserTypeID;
	private $MedcineSeen;
	



function __construct($id="",$Name="",$Discription="",$Type="",$Cost="",$Number="",$UserTypeID="",$MedcineSeen="") {
    $this->id = $id;
	    $this->db = $this->connect();

    if(""===$Name){
      $this->readMovie($id);
    }else{
       $this->Name = $Name;
	  $this->Discription=$Discription;
      $this->Type = $Type;
      $this->Cost = $Cost;
	 $this->Number=$Number;
      $this->UserTypeID = $UserTypeID;
	   $this->MedcineSeen = $MedcineSeen;
     
    }
  }
  
  
	function getName() {
    return $this->Name;
  }
  function setName($Name) {
    return $this->Name = $Name;
  }
  
   function getDiscription() {
    return $this->Discription;
  }
  function setDiscription($Discription) {
    return $this->Discription = $Discription;
  }
  
  function getTypee() {
    return $this->Type;
  }
  function setTypee($Type) {
    return $this->Type = $Type;
  }
  
  function getCost() {
    return $this->Cost;
  }
  function setCost($Cost) {
    return $this->Cost = $Cost;
  }
  
  
  function getNumber() {
    return $this->Number;
  }
  function setNumber($Number) {
    return $this->Number = $Number;
  }
  
  
  
  
   function getUserTypeID() {
    return $this->UserTypeID;
  }
  function setUserTypeID($UserTypeID) {
    return $this->UserTypeID = $UserTypeID;
  }
  
   function getMedcineSeen() {
    return $this->MedcineSeen;
  }
  function setMedcineSeen($MedcineSeen) {
    return $this->MedcineSeen = $MedcineSeen;
  }
  
  function getID() {
    return $this->id;
	}

	
	
	function readMovie(){
    $sql = "SELECT * FROM medicine ";
    $db = $this->connect();
    $result = $db->query($sql);
if(mysqli_num_rows($result) > 0){
        $row = $db->fetchRow();
        $this->Name = $row["Name"];
		
		$this->Discription=$row["Discription"];
        $this->Type = $row["Type"];
		$this->Cost = $row["Cost"];
		$this->Number = $row["Number"];
		$this->UserTypeID = $row["UserTypeID"];
		$this->MedcineSeen = $row["MedcineSeen"];
		
    }
    else {
        $this->Name = "";
		$this->Discription="";
        $this->Type = "";
		$this->Cost = "";
		 $this->Number = "";
		$this->UserTypeID="";
		$this->MedcineSeen="";
       
		
    }
  }

	
	
	
	function editMovie($Name,$Discription,$Type,$Cost,$Number,$UserTypeID){
      $sql = "update medicine set Name='$Name',Discription='$Discription', Type='$Type', Cost='$Cost',Number='$Number',UserTypeID='$UserTypeID' where id=$this->id;";
        if($this->db->query($sql) === true){
            echo "updated successfully.";
            $this->readMovie($this->id);
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
  }
  
  function deleteMovie(){
	  $sql="delete from medicine where id=$this->id;";
	  if($this->db->query($sql) === true){
            echo "deletet successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
	}
}
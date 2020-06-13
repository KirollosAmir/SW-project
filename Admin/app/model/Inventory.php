<?php
require_once(__ROOT__ . "model/Model.php");

class Movie extends Model {
	 private $id;
    private $Name	;
	private $Description;
    private $Type;
    private $Item;
  private $number;
    private $cost;




function __construct($id="",$Name="",$Description="",$Type="",$Item="",$number="",$cost="") {
    $this->id = $id;
	    $this->db = $this->connect();

    if(""===$Name){
      $this->readMovie($id);
    }else{
       $this->Name = $Name;
	  $this->Description=$Description;
      $this->Type = $Type;
      $this->Item = $Item;
	 $this->number=$number;
      $this->cost = $cost;
     
    }
  }
  
  
	  function getName() {
    return $this->Description;
  }
  function setName($Name) {
    return $this->Name = $Name;
  }
  
   function getDescription() {
    return $this->Description;
  }
  function setDescription($Description) {
    return $this->Description = $Description;
  }
  
  function getTypee() {
    return $this->Type;
  }
  function setTypee($Type) {
    return $this->Type = $Type;
  }
  
  function getItem() {
    return $this->Item;
  }
  function setItem($Item) {
    return $this->Item = $Item;
  }
  
  
  function getnumber() {
    return $this->number;
  }
  function setnumber($number) {
    return $this->number = $number;
  }
  
  
   function getcost() {
    return $this->cost;
  }
  function setcost($cost) {
    return $this->cost = $cost;
  }
  
  
  
  
  function getID() {
    return $this->id;
	}

	
	
	function readMovie(){
    $sql = "SELECT * FROM inventory ";
    $db = $this->connect();
    $result = $db->query($sql);
if(mysqli_num_rows($result) > 0){
        $row = $db->fetchRow();
        $this->Name = $row["Name"];
	
		$this->Description=$row["Description"];
        $this->Type = $row["Type"];
		$this->Item = $row["Item"];
		$this->number = $row["number"];
		$this->cost = $row["cost"];
		
    }
    else {
        $this->Name = "";
		$this->Description="";
        $this->Type = "";
		$this->Item = "";
		 $this->number = "";
		$this->cost="";
        
		
    }
  }

	
	
	
	function editMovie($Name,$Description,$Type,$Item,$number,$cost){
      $sql = "update inventory set Name='$Name',Description='$Description', Type='$Type', Item='$Item',number='$number',cost='$cost'  where id=$this->id;";
        if($this->db->query($sql) === true){
            echo "updated successfully.";
            $this->readMovie($this->id);
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
  }
  
  function deleteMovie(){
	  $sql="delete from inventory where id=$this->id;";
	  if($this->db->query($sql) === true){
            echo "deletet successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
	}
}
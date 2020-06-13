<?php
require_once(__ROOT__ . "model/Model.php");

class Movie extends Model {
	 private $id;
    private $Type	;
	private $Model;
    private $DateOFEntery;
    private $Color;
  private $License;
  




function __construct($id="",$Type="",$Model="",$DateOFEntery="",$Color="",$License="") {
    $this->id = $id;
	    $this->db = $this->connect();

    if(""===$Type){
      $this->readMovie($id);
    }else{
       $this->Type = $Type;
	  $this->Model=$Model;
      $this->DateOFEntery = $DateOFEntery;
      $this->Color = $Color;
	 $this->License=$License;
     
    }
  }
  
  
	function getTypee() {
    return $this->Type;
  }
  function setTypee($Type) {
    return $this->Type = $Type;
  }
  
   function getModel() {
    return $this->Model;
  }
  function setModel($Model) {
    return $this->Model = $Model;
  }
  
  function getDateOFEntery() {
    return $this->DateOFEntery;
  }
  function setDateOFEntery($DateOFEntery) {
    return $this->DateOFEntery = $DateOFEntery;
  }
  
  function getColor() {
    return $this->Color;
  }
  function setColor($Color) {
    return $this->Color = $Color;
  }
  
  
  function getLicense() {
    return $this->License;
  }
  function setLicense($License) {
    return $this->License = $License;
  }
  
  
  
  
  function getID() {
    return $this->id;
	}

	
	
	function readMovie(){
    $sql = "SELECT * FROM car ";
    $db = $this->connect();
    $result = $db->query($sql);
if(mysqli_num_rows($result) > 0){
        $row = $db->fetchRow();
        $this->Type = $row["Type"];
		 $this->Model = $row["Model"];
		$this->DateOFEntery=$row["DateOFEntery"];
		  $this->Color = $row["Color"];
		$this->License = $row["License"];
		
    }
    else {
        $this->Type = "";
		$this->Model="";
        $this->DateOFEntery = "";
		$this->Color = "";
		 $this->License = "";
		
		
    }
  }

	
	function editMovie($Type,$Model,$DateOFEntery,$Color,$License){
      $sql = "update car set Type='$Type',Model='$Model', DateOFEntery='$DateOFEntery', Color='$Color',License='$License' where id=$this->id;";
        if($this->db->query($sql) === true){
            echo "updated successfully.";
            $this->readMovie($this->id);
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
  }
  
  function deleteMovie(){
	  $sql="delete from car where id=$this->id;";
	  if($this->db->query($sql) === true){
            echo "deleted successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
	}
}
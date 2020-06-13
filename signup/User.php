<?php
require_once("Model.php");

class Movie extends Model {
	 private $id;
    private $FirstName	;
	private $LastName;
    private $DateOfBirth;
    private $Gender;
  private $Email;
    private $Password;
	private $UsetTypeID;




function __construct($id="",$FirstName="",$LastName="",$DateOfBirth="",$Gender="",$Email="",$Password="",$UsetTypeID="") {
    $this->id = $id;
	    $this->db = $this->connect();

    if(""===$FirstName){
      $this->readMovie($id);
    }else{
       $this->FirstName = $FirstName;
	  $this->LastName=$LastName;
      $this->DateOfBirth = $DateOfBirth;
      $this->Gender = $Gender;
	 $this->Email=$Email;
      $this->Password = $Password;
      $this->UsetTypeID = $UsetTypeID;
    }
  }


	function getFirstName() {
    return $this->FirstName;
  }
  function setFirstName($FirstName) {
    return $this->FirstName = $FirstName;
  }

   function getLastName() {
    return $this->LastName;}
  function setLastName($LastName) {
    return $this->LastName = $LastName;
  }

  function getDateOfBirth() {
    return $this->DateOfBirth;
  }
  function setDateOfBirth($DateOfBirth) {
    return $this->DateOfBirth = $DateOfBirth;
  }

  function getGender() {
    return $this->Gender;
  }
  function setGender($Gender) {
    return $this->Gender = $Gender;
  }


  function getEmail() {
    return $this->Email;
  }
  function setEmail($Email) {
    return $this->Email = $Email;
  }


   function getPassword() {
    return $this->Password;
  	}
  function setPassword($Password) {
    return $this->Password = $Password;
  }


   function getUsetTypeID() {
    return $this->UsetTypeID;
  	}
  function setUsetTypeID($UsetTypeID) {
    return $this->UsetTypeID = $UsetTypeID;
  }

  function getID() {
    return $this->id;
	}



	function readMovie(){
    $sql = "SELECT * FROM user ";
    $db = $this->connect();
    $result = $db->query($sql);
		if(mysqli_num_rows($result) > 0){
        $row = $db->fetchRow();
        $this->FirstName = $row["FirstName"];
		$_SESSION["FirstName"]=$row["FirstName"];
		$this->LastName=$row["LastName"];
        $this->DateOfBirth = $row["DateOfBirth"];
		$this->Gender = $row["Gender"];
		$this->Email = $row["Email"];
		$this->Password = $row["Password"];
		$this->UsetTypeID = $row["UsetTypeID"];
    }
    else {
        $this->FirstName = "";
		$this->LastName="";
        $this->DateOfBirth = "";
		$this->Gender = "";
		 $this->Email = "";
		$this->Password="";
        $this->UsetTypeID = "";

    }
  }




	function editMovie($FirstName,$LastName,$DateOfBirth,$Gender,$Email,$Password,$UsetTypeID){
      $sql = "update user set FirstName='$FirstName',LastName='$LastName', DateOfBirth='$DateOfBirth', Gender='$Gender',Email='$Email',Password='$Password', UsetTypeID='$UsetTypeID'  where id=$this->id;";
        if($this->db->query($sql) === true){
            echo "updated successfully.";
            $this->readMovie($this->id);
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
  }

  function deleteMovie(){
	  $sql="delete from user where id=$this->id;";
	  if($this->db->query($sql) === true){
            echo "deletet successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
	}
}

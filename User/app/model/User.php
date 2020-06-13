<?php
  require_once(__ROOT__ . "model/Model.php");
?>

<?php
class User extends Model {
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
      $this->readUser($id);
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
    return $this->LastName;
  }
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

  function readUser($id){
    $sql = "SELECT * FROM user where ID=".$id;
    $db = $this->connect();
    $result = $db->query($sql);
    if ($result->num_rows == 1){
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
  
  function editUser($FirstName,$LastName,$DateOfBirth,$Gender,$Email,$Password,$UsetTypeID){
      $sql = "update user set FirstName='$FirstName',LastName='$LastName', DateOfBirth='$DateOfBirth', Gender='$Gender',Email='$Email',Password='$Password', UsetTypeID='$UsetTypeID'  where id=$this->id;";
        if($this->db->query($sql) === true){
            echo "updated successfully.";
            $this->readUser($this->id);
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
  }
  
  function deleteUser(){
	  $sql="delete from user where id=$this->id;";
	  if($this->db->query($sql) === true){
            echo "deletet successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
	}
	 
}
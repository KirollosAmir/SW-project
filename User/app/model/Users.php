<?php
require_once(__ROOT__ . "model/Model.php");
require_once(__ROOT__ . "model/User.php");

class Users extends Model {
	private $users;
	function __construct() {
		$this->fillArray();
	}

	function fillArray() {
		$this->users = array();
		$this->db = $this->connect();
		$result = $this->readUsers();
		while ($row = $result->fetch_assoc()) {
		array_push($this->users, new User($row["ID"],$row["FirstName"],$row["LastName"],$row["DateOfBirth"],$row["Gender"],$row["Email"],$row["Password"],$row["UsetTypeID"]));
		}
	}

	function getUsers() {
		return $this->users;
	}

	function readUsers(){
		$sql = "SELECT * FROM user";

		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	}

	function insertUser($FirstName, $LastName, $DateOfBirth, $Gender ,$Email, $Password, $UsetTypeID){
		$sql = "INSERT INTO user (FirstName, LastName, DateOfBirth, Gender ,Email ,Password,UsetTypeID) VALUES ('$FirstName','$LastName', '$DateOfBirth', '$Gender' ,'$Email','$Password', '$UsetTypeID')";
		if($this->db->query($sql) === true){
			echo "Records inserted successfully.";
			$this->fillArray();
		} 
		else{
			echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}
	}
}
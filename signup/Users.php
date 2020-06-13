<?php
require_once("Model.php");
require_once("User.php");

class Movies extends Model {
	private $movies;
	function __construct() {
		$this->fillArray();
	}


		
		
		function fillArray() {
		$this->movies = array();
		$this->db = $this->connect();
		$result = $this->readMovies();
		while ($row = $result->fetch_assoc()) {
		array_push($this->movies, new Movie($row["ID"],$row["FirstName"],$row["LastName"],$row["DateOfBirth"],$row["Gender"],$row["Email"],$row["Password"],$row["UsetTypeID"]));
		}
	}
	
	function getMovies() {
		$this->fillArray();  
		return $this->movies;
	}

	function getMovie($movie_id) {
		foreach($this->movies as $movie) {
			if ($movie_id == $movie->getID()) {
				return $movie;
			}
		}
	}

	function readMovies(){
		
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
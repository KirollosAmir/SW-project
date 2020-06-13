<?php
require_once(__ROOT__ . "model/Model.php");
require_once(__ROOT__ . "model/Inventory.php");

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
		array_push($this->movies, new Movie($row["ID"],$row["Name"],$row["Description"],$row["Type"],$row["Item"],$row["number"],$row["cost"]));
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
		
		$sql = "SELECT * FROM inventory";

		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	}

	function insertUser($Name, $Description, $Type, $Item ,$number, $cost){
		$sql = "INSERT INTO inventory (Name, Description, Type, Item ,number ,cost) VALUES ('$Name','$Description', '$Type', '$Item' ,'$number','$cost')";
		if($this->db->query($sql) === true){
			echo "Records inserted successfully.";
			$this->fillArray();
		} 
		else{
			echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}
	}
}
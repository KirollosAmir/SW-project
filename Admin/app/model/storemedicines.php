<?php
require_once(__ROOT__ . "model/Model.php");
require_once(__ROOT__ . "model/storemedicine.php");

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
		array_push($this->movies, new Movie($row["ID"],$row["MedicineID"],$row["StoreID"]));
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
		
		$sql = "SELECT * FROM storemedicine";

		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			return $result;
		}
		else {
			return false;
		}
	}

	function insertUser($MedicineID, $StoreID){
		$sql = "INSERT INTO storemedicine (MedicineID, StoreID) VALUES ('$MedicineID','$StoreID')";
		if($this->db->query($sql) === true){
			echo "Records inserted successfully.";
			$this->fillArray();
		} 
		else{
			echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}
	}
}
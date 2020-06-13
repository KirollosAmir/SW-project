<?php

require_once(__ROOT__ . "controller/Controller.php");

class MoviesController extends Controller{
	public function insert() {
		$MedicineID = $_REQUEST['MedicineID'];
			$StoreID = $_REQUEST['StoreID'];
		$this->model->insertUser($MedicineID,$StoreID );
	}

		

	public function edit($movie_id) {
			$MedicineID = $_REQUEST['MedicineID'];
			$StoreID = $_REQUEST['StoreID'];
		$this->model->getMovie($movie_id)->editMovie($MedicineID,$StoreID );

		//$this->model->getMovie($movie_id)->editMovie($name,$year);
	}

	public function delete($movie_id){
		$this->model->getMovie($movie_id)->deleteMovie();
	}
}
?>

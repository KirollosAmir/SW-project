<?php

require_once(__ROOT__ . "controller/Controller.php");

class MoviesController extends Controller{
	public function insert() {
		$StoreID = $_REQUEST['StoreID'];
			$InventoryID = $_REQUEST['InventoryID'];
		$this->model->insertUser($StoreID,$InventoryID );
	}

		

	public function edit($movie_id) {
			$StoreID = $_REQUEST['StoreID'];
			$InventoryID = $_REQUEST['InventoryID'];
		$this->model->getMovie($movie_id)->editMovie($StoreID,$InventoryID);

		//$this->model->getMovie($movie_id)->editMovie($name,$year);
	}

	public function delete($movie_id){
		$this->model->getMovie($movie_id)->deleteMovie();
	}
}
?>

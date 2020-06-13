<?php

require_once(__ROOT__ . "controller/Controller.php");

class MoviesController extends Controller{
	public function insert() {
		$Taxes = $_REQUEST['Taxes'];
		$delivery = $_REQUEST['delivery'];
		$UserTypeID = $_REQUEST['UserTypeID'];
		
		$this->model->insertUser($Taxes,$delivery,$UserTypeID);
	}

		

	public function edit($movie_id) {
			$Taxes = $_REQUEST['Taxes'];
		$delivery = $_REQUEST['delivery'];
		$UserTypeID = $_REQUEST['UserTypeID'];
		
		$this->model->getMovie($movie_id)->editMovie($Taxes,$delivery,$UserTypeID);

		
	}

	public function delete($movie_id){
		$this->model->getMovie($movie_id)->deleteMovie();
	}
}
?>

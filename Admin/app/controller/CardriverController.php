<?php

require_once(__ROOT__ . "controller/Controller.php");

class MoviesController extends Controller{
	public function insert() {
		$UserTypeID = $_REQUEST['UserTypeID'];
		$CarID = $_REQUEST['CarID'];
		
		$this->model->insertUser($UserTypeID,$CarID);
	}

		

	public function edit($movie_id) {
			$UserTypeID = $_REQUEST['UserTypeID'];
		$CarID = $_REQUEST['CarID'];
		
		$this->model->getMovie($movie_id)->editMovie($UserTypeID,$CarID);

	
	}

	public function delete($movie_id){
		$this->model->getMovie($movie_id)->deleteMovie();
	}
}
?>

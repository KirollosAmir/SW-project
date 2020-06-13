<?php

require_once(__ROOT__ . "controller/Controller.php");

class MoviesController extends Controller{
	public function insert() {
		$Type = $_REQUEST['Type'];
			
		$this->model->insertUser($Type);
	}

		

	public function edit($movie_id) {
			$Type = $_REQUEST['Type'];
	
		$this->model->getMovie($movie_id)->editMovie($Type);

		//$this->model->getMovie($movie_id)->editMovie($name,$year);
	}

	public function delete($movie_id){
		$this->model->getMovie($movie_id)->deleteMovie();
	}
}
?>

<?php

require_once(__ROOT__ . "controller/Controller.php");

class MoviesController extends Controller{
	public function insert() {
		$UserID = $_REQUEST['UserID'];
			$LinkID = $_REQUEST['LinkID'];
		$this->model->insertUser($UserID,$LinkID );
	}

		

	public function edit($movie_id) {
			$UserID = $_REQUEST['UserID'];
			$LinkID = $_REQUEST['LinkID'];
		$this->model->getMovie($movie_id)->editMovie($UserID,$LinkID );

		//$this->model->getMovie($movie_id)->editMovie($name,$year);
	}

	public function delete($movie_id){
		$this->model->getMovie($movie_id)->deleteMovie();
	}
}
?>

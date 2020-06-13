<?php

require_once(__ROOT__ . "controller/Controller.php");

class MoviesController extends Controller{
	public function insert() {
		$Name = $_REQUEST['Name'];
		$Subject = $_REQUEST['Subject'];
		$comment = $_REQUEST['comment'];
		$UserTypeID = $_REQUEST['UserTypeID'];
    
		$this->model->insertUser($Name,$Subject,$comment,$UserTypeID);
	}

		

	public function edit($movie_id) {
			$Name = $_REQUEST['Name'];
		$Subject = $_REQUEST['Subject'];
		$comment = $_REQUEST['comment'];
		$UserTypeID = $_REQUEST['UserTypeID'];
		
		$this->model->getMovie($movie_id)->editMovie($Name,$Subject,$comment,$UserTypeID);

		//$this->model->getMovie($movie_id)->editMovie($name,$year);
	}

	public function delete($movie_id){
		$this->model->getMovie($movie_id)->deleteMovie();
	}
}
?>

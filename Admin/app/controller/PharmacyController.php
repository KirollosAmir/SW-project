<?php

require_once(__ROOT__ . "controller/Controller.php");

class MoviesController extends Controller{
	public function insert() {
		$Name = $_REQUEST['Name'];
		$Location = $_REQUEST['Location'];
		$UserTypeID = $_REQUEST['UserTypeID'];
		
		$this->model->insertUser($Name,$Location,$UserTypeID);
	}

		

	public function edit($movie_id) {
			$Name = $_REQUEST['Name'];
		$Location = $_REQUEST['Location'];
		$UserTypeID = $_REQUEST['UserTypeID'];
		
		$this->model->getMovie($movie_id)->editMovie($Name,$Location,$UserTypeID);

		
	}

	public function delete($movie_id){
		$this->model->getMovie($movie_id)->deleteMovie();
	}
}
?>

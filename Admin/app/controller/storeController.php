<?php

require_once(__ROOT__ . "controller/Controller.php");

class MoviesController extends Controller{
	public function insert() {
		$Name = $_REQUEST['Name'];
			$NumberOFproduct = $_REQUEST['NumberOFproduct'];
			
			
			$price = $_REQUEST['price'];
			$UserTypeID = $_REQUEST['UserTypeID'];
			
		$this->model->insertUser($Name,$NumberOFproduct,$price,$UserTypeID );
	}

		

	public function edit($movie_id) {
			$Name = $_REQUEST['Name'];
			$NumberOFproduct = $_REQUEST['NumberOFproduct'];
			
			
			$price = $_REQUEST['price'];
			$UserTypeID = $_REQUEST['UserTypeID'];
		$this->model->getMovie($movie_id)->editMovie($Name,$NumberOFproduct,$price,$UserTypeID );

		//$this->model->getMovie($movie_id)->editMovie($name,$year);
	}

	public function delete($movie_id){
		$this->model->getMovie($movie_id)->deleteMovie();
	}
}
?>

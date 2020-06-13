<?php

require_once(__ROOT__ . "controller/Controller.php");

class MoviesController extends Controller{
	public function insert() {
		$ReportName = $_REQUEST['ReportName'];
			$UserTypeID = $_REQUEST['UserTypeID'];
			
			

			
		$this->model->insertUser($ReportName,$UserTypeID);
	}

		

	public function edit($movie_id) {
			$ReportName = $_REQUEST['ReportName'];
			$UserTypeID = $_REQUEST['UserTypeID'];
			
		$this->model->getMovie($movie_id)->editMovie($ReportName,$UserTypeID );

		//$this->model->getMovie($movie_id)->editMovie($name,$year);
	}

	public function delete($movie_id){
		$this->model->getMovie($movie_id)->deleteMovie();
	}
}
?>

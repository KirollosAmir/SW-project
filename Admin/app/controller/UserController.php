<?php

require_once(__ROOT__ . "controller/Controller.php");

class MoviesController extends Controller{
	public function insert() {
		$FirstName = $_REQUEST['FirstName'];
		$LastName = $_REQUEST['LastName'];
		$DateOfBirth = $_REQUEST['DateOfBirth'];
		$Gender = $_REQUEST['Gender'];
        $Email = $_REQUEST['Email'];
		 $Password = $_REQUEST['Password'];
		$UsetTypeID = $_REQUEST['UsetTypeID'];	
		$this->model->insertUser($FirstName,$LastName,$DateOfBirth,$Gender,$Email,$Password,$UsetTypeID);
	}

		

	public function edit($movie_id) {
			$FirstName = $_REQUEST['FirstName'];
		$LastName = $_REQUEST['LastName'];
		$DateOfBirth = $_REQUEST['DateOfBirth'];
		$Gender = $_REQUEST['Gender'];
		$Email = $_REQUEST['Email'];
		$Password = $_REQUEST['Password'];
		$UsetTypeID = $_REQUEST['UsetTypeID'];
		$this->model->getMovie($movie_id)->editMovie($FirstName,$LastName,$DateOfBirth,$Gender,$Email,$Password,$UsetTypeID);

		//$this->model->getMovie($movie_id)->editMovie($name,$year);
	}

	public function delete($movie_id){
		$this->model->getMovie($movie_id)->deleteMovie();
	}
}
?>

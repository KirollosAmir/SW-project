<?php

require_once(__ROOT__ . "controller/Controller.php");

class MoviesController extends Controller{
	public function insert() {
		$Type = $_REQUEST['Type'];
		$Model = $_REQUEST['Model'];
		$DateOFEntery = $_REQUEST['DateOFEntery'];
		$Color = $_REQUEST['Color'];
        $License = $_REQUEST['License'];
			
		$this->model->insertUser($Type,$Model,$DateOFEntery,$Color,$License);
	}

		

	public function edit($movie_id) {
			$Type = $_REQUEST['Type'];
		$Model = $_REQUEST['Model'];
		$DateOFEntery = $_REQUEST['DateOFEntery'];
		$Color = $_REQUEST['Color'];
		$License = $_REQUEST['License'];
		
		$this->model->getMovie($movie_id)->editMovie($Type,$Model,$DateOFEntery,$Color,$License);

		
	}

	public function delete($movie_id){
		$this->model->getMovie($movie_id)->deleteMovie();
	}
}
?>

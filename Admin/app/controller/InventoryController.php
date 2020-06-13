<?php

require_once(__ROOT__ . "controller/Controller.php");

class MoviesController extends Controller{
	public function insert() {
		$Name = $_REQUEST['Name'];
		$Description = $_REQUEST['Description'];
		$Type = $_REQUEST['Type'];
		$Item = $_REQUEST['Item'];
        $number = $_REQUEST['number'];
		 $cost = $_REQUEST['cost'];
			
		$this->model->insertUser($Name,$Description,$Type,$Item,$number,$cost);
	}

		

	public function edit($movie_id) {
			$Name = $_REQUEST['Name'];
		$Description = $_REQUEST['Description'];
		$Type = $_REQUEST['Type'];
		$Item = $_REQUEST['Item'];
		$number = $_REQUEST['number'];
		$cost = $_REQUEST['cost'];
		
		$this->model->getMovie($movie_id)->editMovie($Name,$Description,$Type,$Item,$number,$cost);

		//$this->model->getMovie($movie_id)->editMovie($name,$year);
	}

	public function delete($movie_id){
		$this->model->getMovie($movie_id)->deleteMovie();
	}
}
?>

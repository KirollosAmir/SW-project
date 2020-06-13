<?php

require_once(__ROOT__ . "controller/Controller.php");

class MoviesController extends Controller{
	public function insert() {
		$PhysicalAddress = $_REQUEST['PhysicalAddress'];
			$FriendAddress = $_REQUEST['FriendAddress'];
				$Html = $_REQUEST['Html'];
			
			

			
		$this->model->insertUser($PhysicalAddress,$FriendAddress,$Html);
	}

		

	public function edit($movie_id) {
			$PhysicalAddress = $_REQUEST['PhysicalAddress'];
			$FriendAddress = $_REQUEST['FriendAddress'];
				$Html = $_REQUEST['Html'];
			
			
		$this->model->getMovie($movie_id)->editMovie($PhysicalAddress,$FriendAddress,$Html);

		//$this->model->getMovie($movie_id)->editMovie($name,$year);
	}

	public function delete($movie_id){
		$this->model->getMovie($movie_id)->deleteMovie();
	}
}
?>

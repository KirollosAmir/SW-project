<?php

require_once(__ROOT__ . "controller/Controller.php");

class MoviesController extends Controller{
	public function insert() {
		$Name = $_REQUEST['Name'];
		$Discription = $_REQUEST['Discription'];
		$Type = $_REQUEST['Type'];
		$Cost = $_REQUEST['Cost'];
        $Number = $_REQUEST['Number'];
		 $UserTypeID = $_REQUEST['UserTypeID'];
		
		$this->model->insertUser($Name,$Discription,$Type,$Cost,$Number,$UserTypeID);
	}

		

	public function edit($movie_id) {
			$Name = $_REQUEST['Name'];
		$Discription = $_REQUEST['Discription'];
		$Type = $_REQUEST['Type'];
		$Cost = $_REQUEST['Cost'];
		$Number = $_REQUEST['Number'];
		$UserTypeID = $_REQUEST['UserTypeID'];
		
		$this->model->getMovie($movie_id)->editMovie($Name,$Discription,$Type,$Cost,$Number,$UserTypeID);

	}

	public function delete($movie_id){
		$this->model->getMovie($movie_id)->deleteMovie();
	}
}
?>

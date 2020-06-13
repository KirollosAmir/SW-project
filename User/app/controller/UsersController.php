<?php

require_once(__ROOT__ . "controller/Controller.php");

class UsersController extends Controller{
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

	public function edit() {
		$FirstName = $_REQUEST['FirstName'];
		$LastName = $_REQUEST['LastName'];
		$DateOfBirth = $_REQUEST['DateOfBirth'];
		$Gender = $_REQUEST['Gender'];
		$Email = $_REQUEST['Email'];
		$Password = $_REQUEST['Password'];
		$UsetTypeID = $_REQUEST['UsetTypeID'];
		$this->model->editUser($FirstName,$LastName,$DateOfBirth,$Gender,$Email,$Password,$UsetTypeID);
	}
	
	public function delete(){
		$this->model->deleteUser();
	}
}
?>

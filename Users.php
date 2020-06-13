<html>
<head>
<style>
table {
  width: 50%;
  text-align: center;
}
</style>
</head>
<body>
<?php

define('__ROOT__', "../app/");
require_once("signup/Users.php");
require_once("signup/UserController.php");
require_once("signup/ViewUsers.php");

$model = new Movies();
$controller = new MoviesController($model);
$view = new ViewMovies($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
	switch($_GET['action']){
		case 'insert':
    $password = $_POST['Password']; 
			$controller->insert();
			echo $view->output();
			break;
		case 'edit':
			echo $view->edit($_GET['id']);
			break;
		case 'editAction':
			$controller->edit($_GET['id']);
			echo $view->output();
			break;
		case 'delete':
			$controller->delete($_GET['id']);
			echo $view->output();
			break;
	}
}
else
	echo $view->output();

?>


</body>
</html>

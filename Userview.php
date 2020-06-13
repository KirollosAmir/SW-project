<head>
  <script>
function isInputNumber(evt) {
  var ch = (evt.which) ? (evt.which) : (evt.keyCode)
  if(ch != 46 && ch > 31 && (ch < 48 || ch > 57)){
return false;
}
else {
	return true;
}
}
  
</script>

<script>
function a(event) {
  var char = event.which;
  
  if (char >31 && char !=32 && (char < 65 || char > 90 ) && (char < 97 || char > 122)) {
    
    return false;
  }  
}


</script>
<style>

input[type=text], select {
  width: 100%;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
max-height:40px;
border-radius:4px;
}
input[type=date], select {
  width: 100%;

  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  max-height:40px;
  border-radius: 4px;


}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  max-height:40px;
  font-family:Time new roman;
}
</style>

<?php
require_once 'UserModel.php';

class userView
{



		function Add(){

		$con = new mysqli("localhost", "root", "","pharmacy");

				echo"<form  onsubmit='return validation()' method='post'>";
                echo"<table>";




			echo"<tr> ";
			echo"	<td>FirstName</td>";
				echo"<td><input type='text' class='input100' name='FirstName'  style='width:120px;' type='text' maxlength='20' onkeypress='return a(event)'; required=''></td>";

			echo"</tr>";


			echo"<tr> ";
			echo"	<td>LastName</td>";
				echo"<td><input type='text' class='input100' name='LastName'  style='width:120px;' type='text' maxlength='20' onkeypress='return a(event)'; required='' ></td>";

			echo"</tr>";


			echo"<tr> ";
			echo"	<td>DateOfBirth</td>";
				echo"<td><input class='input100' type='date' name='DateOfBirth' required='' ></td>";

			echo"</tr>";


			echo"<tr> ";
			echo"	<td>Gender</td>";
				echo"<td><input type='text' class='input100' name='Gender'  style='width:120px;' type='text' maxlength='20' onkeypress='return a(event)'; required='' ></td>";

			echo"</tr>";



			echo"<tr> ";
			echo"	<td>Email</td>";
				echo"<td><input type='text' class='input100'name='Email'  style='width:120px;' type='text' maxlength='20'  required='' ></td>";

			echo"</tr>";


			echo"<tr> ";
			echo"	<td>Password</td>";
				echo"<td><input type='text' class='input100'  name='Password' required='' onkeypress='return isInputNumber(event);'></td>";

			echo"</tr>";


			echo"<tr> ";
				echo"<td>UserTypeID </td>";

	echo"<td>";

		 $con = new mysqli("localhost", "root", "","pharmacy");
		$sql="select * from usertype ";


  	$result = mysqli_query($con,$sql);


		echo"<select  name='UsetTypeID' class='input100'>";

		while($rows = mysqli_fetch_array($result))
		{
			$ID=$rows['ID'];
		$Type=$rows['Type'];
		echo"<option value='$ID'>$ID.$Type</option>";
		}

		echo"</select>";



		echo"</td>";
		echo"	</tr>";


			echo"</tr>";


			echo"<tr> ";
			echo"	<td></td>";
			echo"	<td><input type='submit' class='login100-form-btn' name='submit' value='Add'></td>";
			echo"</tr>";
	echo"</table>";
	echo"</form>";

if(isset($_POST['submit'])) {

include_once("UserModel.php");

$password =$_POST['Password'];
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$crud = new usermodel();
$pharmacyview=new usermodel();

$crud->FirstName=$_POST['FirstName'];
$crud->LastName =$_POST['LastName'];
$crud->DateOfBirth = $_POST['DateOfBirth'];
$crud->Gender=$_POST['Gender'];
$crud->Email=$_POST['Email'];
$crud->Password =$hashedPassword;
$crud->UsetTypeID = $_POST['UsetTypeID'];

$pharmacyview->Adding($crud);



}

	}
	}

?>

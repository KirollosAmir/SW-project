<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gp";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn)
{
die ('Could not connect:' . mysql_error());
}


if(isset($_POST['submit']))
{
		
	
	 $name = $_POST['name'];
	 $phone = $_POST['phone'];
	  $mail = $_POST['mail'];
	  $password  = $_POST['password'];
	 

	 
	 $sql = "INSERT INTO `user`(`name`, `phone`, `mail`, `password`) 
	 VALUES ('$name','$phone','$mail','$password')";
	 
	  if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	 mysqli_close($conn);

}
	 
?>
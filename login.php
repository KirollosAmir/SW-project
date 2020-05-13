<?php
 include("My_DB.php");
 session_start();

  $username = filter_input(INPUT_POST, 'username');
  $password = filter_input(INPUT_POST, 'pass');

  //echo($username);
  //echo($password);

  $con = new mysqli("localhost", "root", "","pharmacy");
  $sql="Select * from user where Email='".$username."'and Password='".$password."'";
  $result = mysqli_query($con,$sql);

  if($row=mysqli_fetch_array($result)){
    
    $_SESSION["ID"]=$row[0];
    $_SESSION["Name"]=$row["FirstName"];
    $_SESSION["usertype"] =$row["UsetTypeID"];
    $_SESSION["FirstName"]=$row["LastName"];

    if($_SESSION["usertype"] == 1)
      header("Location:pharmacist\pharmacisthome.php");
    if($_SESSION["usertype"] == 5)
      header("Location:customer\DBController.php");
    if($_SESSION["usertype"] == 6)
      header("Location:Admin\adminhome.php");

    }
   else
  	{
      echo"<div>";
      echo "Invalid Email or Password";
      echo "</div>";
	 }





  ?>

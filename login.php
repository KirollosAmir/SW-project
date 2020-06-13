<?php
 include("My_DB.php");
 session_start();

  $username = filter_input(INPUT_POST, 'username');
  $password = filter_input(INPUT_POST, 'pass');


  //echo($username);
  //echo($password);

  $con = new mysqli("localhost", "root", "","pharmacy");
  //$sql="Select * from user where Email='".$username."'and Password='".$password."'";
  $sql="Select * from user where Email='".$username."'";
  $result = mysqli_query($con,$sql);
  if($row=mysqli_fetch_array($result)){
    if (password_verify($password, $row["Password"])) {

    $_SESSION["ID"]=$row[0];
    $_SESSION["Name"]=$row["FirstName"];
    $_SESSION["usertype"] =$row["UsetTypeID"];
    $_SESSION["FirstName"]=$row["LastName"];

      header("Location:allhome.php");


    }
    else{
      echo"<div>";
      echo "Invalid Email or Password";
      echo "</div>";
    }
  }
   else
  	{
      echo"<div>";
      echo "Invalid Email or Password";
      echo "</div>";
	 }





  ?>

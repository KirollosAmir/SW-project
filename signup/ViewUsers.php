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

<head>
	<title>Login V8</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>



<?php
require_once("View.php");

class ViewMovies extends View{

	public function output(){
		$str = "";
	echo"	<div class='limiter'>";
	echo"	<div class='container-login100'>";
		echo"	<div class='wrap-login100'>";
		
			echo"<form class='login100-form validate-form p-l-55 p-r-55 p-t-178' onsubmit='return validateForm()' action='Users.php?action=insert' method='post'>";		
			
			echo"	<span class='login100-form-title'>Register</span>";
          
			
			 echo"<div class='wrap-input100 validate-input m-b-16' >";
			
				echo"<input  class='input100' placeholder='Enter FirstName' onkeypress='return a(event);' required=''  type='text' name='FirstName' >";
				
				echo"<span class='focus-input100'></span>";
					echo"</div>";
			

			echo"<div class='wrap-input100 validate-input m-b-16' >";
			
				echo"<input  class='input100' onkeypress='return a(event);' placeholder='Enter LastName' required='' maxlength='15' type='text' name='LastName' >";
				echo"<span class='focus-input100'></span>";
					echo"</div>";
			
			
			
			
			echo"<div class='wrap-input100 validate-input m-b-16' >";
			
			
				echo"<input  class='input100' type='date' name='DateOfBirth'  name='DateOfBirth' required='' onkeypress='return isInputNumber(event);'>";
				
		echo"<span class='focus-input100'></span>";
					echo"</div>";
			

			echo"<div class='wrap-input100 validate-input m-b-16' >";
			
				echo"<input class='input100' required='' placeholder='Enter Gender' onkeypress='return a(event);' maxlength='6' type='text' name='Gender' >";
				
				echo"<span class='focus-input100'></span>";
					echo"</div>";
			
			
	echo"<div class='wrap-input100 validate-input m-b-16' >";
		
				echo"<input class='input100' required='' placeholder='Enter Email' maxlength='30' type='email' name='Email' >";
				echo"<span class='focus-input100'></span>";
					echo"</div>";
			
			

			
			echo"<div class='wrap-input100 validate-input m-b-16' >";
				echo"<input  class='input100' type='password' required='' minlenght='6' maxlength='20' placeholder='Enter Password'  name='Password' >";
				echo"<span class='focus-input100'></span>";
					echo"</div>";
			
			   

			
			
			
	
	$con = new mysqli("localhost", "root", "","pharmacy");
		$sql="select * from usertype ";


  	$result = mysqli_query($con,$sql);	
		
		
		echo"<select  class='input100' name='UsetTypeID'>";
		
		while($rows = mysqli_fetch_array($result))
		{
		$ID=$rows['ID'];
		echo"<option value='$ID'>$ID</option>";
		}
		  
		echo"</select>";
		

		
	
	echo"	<br>";
					
					
			
		
			echo"	<input  class='login100-form-btn' type='submit' name='submit' value='Submit'>";
		
	
	

	
		
		
					echo"	<div class='container-login100-form-btn' >";
						
							
							
					echo"	<a href='index.php' class='signup-image-link'>I am already member! Sign in now</a>";

							echo"<br>";
					echo"</div>";
				
				echo"</div>";
			echo"</form>";
			echo"</div>";
		echo"</div>";
	echo"</div>";
	
		return $str;
	
}}
	
	
?>

	
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active1");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script> 
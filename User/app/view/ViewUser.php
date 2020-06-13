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

<?php

require_once(__ROOT__ . "view/View.php");

class ViewUser extends View{	
	public function output(){
		$str="";
		
	

		$str='<form style="margin-left:200px;width:70%;" action="profile.php?action=editaction" method="post">
		<h1 style="font-family:time new roman;color:black;margin-left:400px;">Welcome '.$this->model->getFirstName().'</h1>
		<div style="color:black;">FirstName:</div><div> <input onkeypress="return a(event);" type="text" class="form-control" name="FirstName" value="'.$this->model->getFirstName().'"/></div><br>
		<div style="color:black;" >LastName</div><div> <input onkeypress="return a(event);" type="text" class="form-control" name="LastName" value="'.$this->model->getLastName().'"/></div><br>
		<div style="color:black;" >DateOfBirth</div><div> <input type="date" class="form-control" name="DateOfBirth" value="'.$this->model->getDateOfBirth().'"/></div><br>
		<div style="color:black;">Gender: </div><div><input type="text" onkeypress="return a(event);" class="form-control" name="Gender" value="'.$this->model->getGender().'"/></div><br>
		<div style="color:black;" >Email:</div><div> <input type="email" class="form-control" name="Email" value="'.$this->model->getEmail().'"/></div><br>
		<div  style="color:black;">Password:</div><div class="wrap-input100 validate-input"> <input type="password"  maxlength="20" class="form-control" minlength="6" name="Password" value="'.$this->model->getPassword().'"/></div><br>
		<div style="color:black;" >UsetTypeID:</div><div> <input type="text" class="form-control" name="UsetTypeID" value="'.$this->model->getUsetTypeID().'"/></div><br>
	
		<div><input type="submit" class="btn btn-default" /></div>';
		
	
		
	
		return $str;
	}
	
	function loginForm(){
		$str='<form action="index.php" method="post">
		<div><input type="text" name="FirstName" placeholder="Enter name"/></div><br>
		<div><input type="password" name="Password" placeholder="Enter password"/></div><br>
		<div><input type="submit" name="login"/></div>
		</form>';
		return $str;
	}

	function signupForm(){
		$str='<form action="index.php?action=insert" method="post">
		<div><input type="text" name="FirstName" placeholder="Enter name"/></div><br>
		<div><input type="text" name="LastName" placeholder="Enter LastName"/></div><br>
		<div><input type="text" name="DateOfBirth" placeholder="Enter DateOfBirth"/></div><br>
		<div><input type="text" name="Gender" placeholder="Enter Gender"/></div><br>
		
		
		
		<div><input type="text" name="Email" placeholder="Enter Email"/></div><br>
		<div><input type="password" name="Password" placeholder="Enter password"/></div><br>
		<div><input type="number" name="UsetTypeID" placeholder="Enter UsetType"/></div><br>
		<div><input type="submit" /></div>
		</form>';
		return $str;
	}

	
}
?>

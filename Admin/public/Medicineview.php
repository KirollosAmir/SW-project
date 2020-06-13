
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
	padding: 20px;
  width: 200%;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
max-height:40px; 
border-radius:4px;
}
input[type=date], select {
  width: 200%;

  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  max-height:40px; 
  border-radius: 4px;
 
 
}
input[type=submit] {
  width: 200%;
  background-color: #4CAF50;
  color: white;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  
  font-family:Time new roman;
  padding: 20px;
}

#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  font-size:15px;
}

#customers tr:nth-child(even){background-color: #f2f2f2; font-size:15px;}

#customers tr:hover {background-color: #ddd;}

#customers th {
 padding: 8px;
  text-align: left;
  background-color: #000000;
  color: white;
  font-size:15px;
}

body, html {
  font-family: "Lato", sans-serif;
   height: 100%;
  margin: 0;
}

.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}
.dropdown-btn:hover {
  color: #f1f1f1;
}
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
  margin-top:9px;
}
/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
/* Add an active class to the active dropdown button */
.active1 {
  background-color: green;
  color: white;
}

.bg {
 
  background-image: url("pharmacist.jpeg");
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.container {
  position: relative;
  font-family: Arial;
  
}

.text-block {
  position: absolute;
  color: black;
  opacity:0.7;
  margin-left:-10px;
  margin-top:-400px;
font-family: Time new roman;
}
.form{
margin-left:500px;
padding:20px;
	
}
</style>
</head>


<?php
require_once 'My_DB.php';
require_once 'MedicineModel.php';
require_once ("CClass.php");
class MedicineView
{
	
	public static function SelectAll(){
  		//$con = new mysqli("localhost", "root", "","pharmacy");
		 $db = DbConnection::getInstance();
    $mysqli = $db->getConnection(); 
  		$sql="select * from medicine ";
  	  $crud = new Pharmacy();
  		$result = $crud->SelectAll($sql);
		
    echo "<div class='table-responsive' >";
      echo"	<table style='margin-left:20px;' width='80%' border=1 class='table table-bordered' id='customers'>";
      echo"<tr>";
      echo"	<th>medicine ID</th>";
      echo"<th>medicine Name</th>";
      echo"<th>medicine Discription</th>";
      echo"<th>medicine Type</th>";
      echo"<th>medicine Cost</th>";
      echo"<th>medicine Number</th>";
      echo"<th>User Type ID</th>";
       echo"</tr>";
	
		  
		
      foreach ($result as $key => $res){

  	    
       
  		  echo "<tr>";
  		  echo "<td>".$res['ID']."</td>";
  		  echo "<td>".$res['Name']."</td>";
        echo "<td>".$res['Discription']."</td>";
        echo "<td>".$res['Type']."</td>";
        echo "<td>".$res['Cost']."</td>";
        echo "<td>".$res['Number']."</td>";
        echo "<td>".$res['UserTypeID']."</td>";
		 echo "<tr>";
		
  		}
		 echo"</table>";
		  echo" </div>"; 
  }




	
function Add(){
		
		//$con = new mysqli("localhost", "root", "","pharmacy");
		$db = DbConnection::getInstance();
    $mysqli = $db->getConnection();
				echo"<form style='margin-left:50px;margin-top:-200px;' name='myForm' class='form'   onsubmit='return validateForm()'method='post'>";		
                echo"<table>";

			
			
			
			echo"<tr> ";
			echo"	<td style='color:black;font-family:time new roman; font-size:20px;' >Name:</td>";
			echo"<br>";
				echo"<td><input type='text'  onkeypress='return a(event);' maxlength='15'name='Name' required=''></td>";
				
			echo"</tr>";
			

			echo"<tr> ";
			echo"	<td style='color:black;font-family:time new roman; font-size:20px;' >Discription:</td>";
			echo"<br>";
				echo"<td><input type='text'  maxlength='100' name='Discription' required='' ></td>";
				
			echo"</tr>";
			

			echo"<tr> ";
			echo"	<td style='color:black;font-family:time new roman; font-size:20px;'>Type:</td>";
			echo"<br>";
				echo"<td><input type='text'  onkeypress='return a(event);' maxlength='15'name='Type' required='' ></td>";
				
			echo"</tr>";

				echo"<tr> ";
			echo"	<td style='color:black;font-family:time new roman; font-size:20px;'>Cost:</td>";
			echo"<br>";
				echo"<td><input type='text' name='Cost' onkeypress='return isInputNumber(event);' required='' ></td>";
				
			echo"</tr>";
			

				echo"<tr> ";
			echo"	<td style='color:black;font-family:time new roman; font-size:20px;'>Number:</td>";
			echo"<br>";
				echo"<td><input  type='text' onkeypress='return isInputNumber(event);' required=''  name='Number' required ></td>";
				
			echo"</tr>";
			
			
			
	
					
			echo"</tr>";
			
			
			
		
		
			echo"<tr> ";
			echo"	<td></td>";
			echo"	<td><input style='font-family:time new roman;background-color:black; font-size:20px;' type='submit' name='submit' value='Submit'></td>";
			echo"</tr>";
	echo"</table>";
	echo"</form>";
if(isset($_POST['submit'])) {	

include_once("MedicineModel.php");

$crud = new medicinemodel();
$inventoryview=new medicinemodel();

$crud->Name=$_POST['Name'];
$crud->Discription =$_POST['Discription'];
$crud->Type = $_POST['Type'];
$crud->Cost = $_POST['Cost'];
$crud->Number = $_POST['Number'];


$inventoryview->Adding($crud);

 
}							

	}
	}

?>




<head>
<style>
input[type=text], select {
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
  max-height:40px; 
  font-family:Time new roman;
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


</style>
</head>
<?php
require_once 'UserModel.php';
require_once 'My_DB.php';
class userView
{
	
	public static function SelectAll(){
		//$con = new mysqli("localhost", "root", "","pharmacy");
		 $db = DbConnection::getInstance();
    $mysqli = $db->getConnection(); 
		$sql="select * from user ";
		$result = mysqli_query($mysqli,$sql);

		if(mysqli_num_rows($result) > 0){

			echo"<table  id='customers'>
			<tr bgcolor='#CCCCCC'>
			<th>User ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>User Type ID</th>
			<th>Email</th>
			<th>Password</th>
			<th>Gender</th>
			<th>Date Of Birth</th>
			</tr>";

			while($row = mysqli_fetch_array($result)){

				echo "<tr>
				<td>".$row['ID']."</td>
				<td>".$row['FirstName']."</td>
				<td>".$row['LastName']."</td>
				<td>".$row['UsetTypeID']."</td>
				<td>".$row['Email']."</td>
				<td>".$row['Password']."</td>
				<td>".$row['Gender']."</td>
				<td>".$row['DateOfBirth']."</td>
				</tr>";
    	}
    	echo"</table>";
  	}
	}


public function DeleteData(){

	 //$con = new mysqli("localhost", "root", "","pharmacy");
	  $db = DbConnection::getInstance();
    $mysqli = $db->getConnection(); 
	 $sql="select * from user ";
	 $result = mysqli_query($mysqli,$sql);

	 if(mysqli_num_rows($result) > 0){


		 echo"<table  width='80%' border=1 id='customers'>
		 <tr>
		 <th>User ID</th>
		 <th>First Name</th>
		 <th>Last Name</th>
		 <th>User Type ID</th>
		 <th>Email</th>
		 <th>Password</th>
		 <th>Gender</th>
		 <th>Date Of Birth</th>
		 <th>Delete</th>
		 </tr>
		 </table>";

		 foreach ($result as $key => $res) {

			 //while($res = mysqli_fetch_array($result)) {
  	 	 echo"	<table  width='80%' border=1 id='customers'>";
			 echo "<tr>";
			 echo "<td>".$res['ID']."</td>";
			 echo "<td>".$res['FirstName']."</td>";
			 echo "<td>".$res['LastName']."</td>";
			 echo "<td>".$res['UsetTypeID']."</td>";
			 echo "<td>".$res['Email']."</td>";
			 echo "<td>".$res['Password']."</td>";
			 echo "<td>".$res['Gender']."</td>";
			 echo "<td>".$res['DateOfBirth']."</td>";
			 echo "<td><a href=\"delete_user.php?id=$res[ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
			 echo "</table>";
			}

	 }

  }
	function ViewEdit($id)
	{

//$con = new mysqli("localhost", "root", "","pharmacy");
 $db = DbConnection::getInstance();
    $mysqli = $db->getConnection(); 
$sql="select * from user  WHERE ID='$id'";
$result = mysqli_query($mysqli,$sql);	
 
  	

  	if (mysqli_num_rows($result) > 0) {
   
	
	$FirstName=" ";
	$LastName="";
    $DateOfBirth="";
	$Gender="";
	$Email="";
	$Password="";
	$UsetTypeID="";
	
   // $con = new mysqli("localhost", "root", "","pharmacy");
	$sql="select * from user  WHERE ID='$id'";
    $result = mysqli_query($mysqli,$sql);	

	while($res = mysqli_fetch_array($result))
{
    $FirstName = $res['FirstName'];
    $LastName = $res['LastName'];
	$DateOfBirth = $res['DateOfBirth'];
	$Gender = $res['Gender'];
    $Email = $res['Email'];
	$Password = $res['Password'];
	$UsetTypeID = $res['UsetTypeID'];
}
       echo "<form method='post' >";
       echo "<table border='0'>";
	   
       echo "<tr> ";
            echo "<td>FirstName</td>";
			echo "<td>";
                echo "<input type='text' name='FirstName' value='$FirstName' required=''>";
			echo "</td>";
       echo "</tr>";
	   
       echo "<tr> ";
            echo "<td>LastName</td>";
                echo "<td>";
                echo "<input type='text' name='LastName' value= '$LastName'  required=''>";
                echo"</td>";
       echo"</tr>";
         		
	   echo "<tr> ";
            echo "<td>DateOfBirth</td>";
                echo "<td>";
                echo "<input type='text' name='DateOfBirth' value= '$DateOfBirth'  required=''>";
                echo"</td>";
       echo"</tr>";
           
       echo "<tr> ";
            echo "<td>Gender</td>";
                echo "<td>";
                echo "<input type='text' name='Gender' value= '$Gender'  required=''>";
                echo"</td>";
       echo"</tr>";

	   echo "<tr> ";
            echo "<td>Email</td>";
                echo "<td>";
                echo "<input type='text' name='Email' value= '$Email'  required=''>";
                echo"</td>";
       echo"</tr>";
	   
	   echo "<tr> ";
            echo "<td>Password</td>";
                echo "<td>";
                echo "<input type='text' name='Password' value= '$Password'  required=''>";
                echo"</td>";
       echo"</tr>";
	   
	   echo "<tr> ";
            echo "<td>UsetTypeID</td>";
                echo "<td>";
                echo "<input type='text' name='UsetTypeID' value= '$UsetTypeID'  required=''>";
                echo"</td>";
       echo"</tr>";
	   
       echo" <td><input type='submit' name='update' value='Update'></td>";
       echo"  </tr>";
       echo" </table>";
       echo" </form>";

$crud= new usermodel();
$user= new usermodel();
if(isset($_POST['update'])) 
{	
$crud->ID=$id;
$crud->FirstName = $_POST['FirstName'];
$crud->LastName=$_POST['LastName'];
$crud->DateOfBirth=$_POST['DateOfBirth'];
$crud->Gender=$_POST['Gender'];
$crud->Email=$_POST['Email'];
$crud->Password=$_POST['Password'];
$crud->UsetTypeID=$_POST['UsetTypeID'];
$user->edit($crud);
}
	}
	else
	{
		 echo "Sorry... ID Not Found "; 	
  	}
}

function form()
{
	//	$con = new mysqli("localhost", "root", "","pharmacy");
	 $db = DbConnection::getInstance();
    $mysqli = $db->getConnection(); 
		$sql="select * from user ";
        $result = mysqli_query($mysqli,$sql);	

        echo"<form   onsubmit='return validation()' action='EditUser.php' method='get'>";
		echo"<table>";
		
		echo"<tr>";
		echo"<td>Enter ID</td>";
		echo"<td><input type='text'  name='ID' id='ID' required=''> </td>";
		echo"</tr>";
									
	    echo"<tr>";
	    echo"<td></td>";
	    echo"<td><button type='submit'>Enter</button></td>";
	    echo"</tr>";
		
		echo"</table>";
		echo"</form>";
}
	
	
		function Add(){
		
		 $db = DbConnection::getInstance();
    $mysqli = $db->getConnection(); 
		//$con = new mysqli("localhost", "root", "","pharmacy");
		
				echo"<form  method='post'>";		
                echo"<table>";
               
			
			
			
			echo"<tr> ";
			echo"	<td>FirstName</td>";
				echo"<td><input type='text' name='FirstName' ></td>";
				
			echo"</tr>";
			

			echo"<tr> ";
			echo"	<td>LastName</td>";
				echo"<td><input type='text' name='LastName' ></td>";
				
			echo"</tr>";
			
			
			echo"<tr> ";
			echo"	<td>DateOfBirth</td>";
				echo"<td><input type='text' name='DateOfBirth' ></td>";
				
			echo"</tr>";
			

			echo"<tr> ";
			echo"	<td>Gender</td>";
				echo"<td><input type='text' name='Gender' ></td>";
				
			echo"</tr>";
			

            
			echo"<tr> ";
			echo"	<td>Email</td>";
				echo"<td><input type='text' name='Email' ></td>";
				
			echo"</tr>";
			

			echo"<tr> ";
			echo"	<td>Password</td>";
				echo"<td><input type='text' name='Password' ></td>";
				
			echo"</tr>";
			   

			echo"<tr> ";
				echo"<td>UsetTypeID </td>";
			
	echo"<td>";
	
		// $con = new mysqli("localhost", "root", "","pharmacy");
		$sql="select * from usertype ";


  	$result = mysqli_query($mysqli,$sql);	
		
		
		echo"<select  name='UsetTypeID'>";
		
		while($rows = mysqli_fetch_array($result))
		{
		$ID=$rows['ID'];
		echo"<option value='$ID'>$ID</option>";
		}
		  
		echo"</select>";
		

		
		echo"</td>";
		echo"	</tr>";
					
					
			echo"</tr>";
			
			
			echo"<tr> ";
			echo"	<td></td>";
			echo"	<td><input type='submit' name='submit' value='Add'></td>";
			echo"</tr>";
	echo"</table>";
	echo"</form>";
	
if(isset($_POST['submit'])) {	

include_once("UserModel.php");

$crud = new usermodel();
$pharmacyview=new usermodel();

$crud->FirstName=$_POST['FirstName'];
$crud->LastName =$_POST['LastName'];
$crud->DateOfBirth = $_POST['DateOfBirth'];
$crud->Gender=$_POST['Gender'];
$crud->Email=$_POST['Email'];
$crud->Password =$_POST['Password'];
$crud->UsetTypeID = $_POST['UsetTypeID'];

$pharmacyview->Adding($crud);

 
}							

	}
	}

?>
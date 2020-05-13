<head>
<style>
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




</style>
</head>

<?php
require_once 'CarDriverModel.php';
require_once 'My_DB.php';
class CarDriverView
{
	
	public static function SelectAll()
	{
		//$con = new mysqli("localhost", "root", "","usermvc");
		 $db = DbConnection::getInstance();
    $mysqli = $db->getConnection(); 
		$sql="select * from cardriver ";
	
$result = mysqli_query($mysqli,$sql);	
if(mysqli_num_rows($result) > 0)//
{
	echo"<table  id='customers'>
	<tr bgcolor='#CCCCCC'>
	<th>UserTypeID</th>
	<th>CarID</th>
   
	</tr>";
	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>

	<td>".$row['UserTypeID']."</td> 
	<td>".$row['CarID']."</td> 
	
	</tr>";
    }
    echo"</table>";
}
}


public function DeleteData()
	{
		
		//$con = new mysqli("localhost", "root", "","pharmacy");
		 $db = DbConnection::getInstance();
    $mysqli = $db->getConnection(); 
		$sql="select * from cardriver ";
	
		$result = mysqli_query($mysqli,$sql);	
if(mysqli_num_rows($result) > 0)//
{
		
		
	echo"	<table  width='80%' border=1 id='customers'>";
						
								echo"<tr >";
								echo"<th>UserTypeID</th>";
								echo"<th >CarID</th>";
								echo"<th >Delete</th>";
								echo"</tr>";
							
	echo"</table>";
		
	
		foreach ($result as $key => $res) {
	//while($res = mysqli_fetch_array($result)) {
        echo"<table  width='80%' border=1 id='customers'>";	
		echo "<tr>";
		echo "<td>".$res['UserTypeID']."</td>";
		echo "<td>".$res['CarID']."</td>";
		
		echo "<td><a href=\"delete-cardriver.php?id=$res[ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";			
	
		echo"</table>";
		}
		
	}
	
}
	function ViewEdit($id)
	{

//$con = new mysqli("localhost", "root", "","pharmacy");
 $db = DbConnection::getInstance();
    $mysqli = $db->getConnection(); 
$sql="select * from cardriver  WHERE ID='$id'";
$result = mysqli_query($mysqli,$sql);	
 
  	

  	if (mysqli_num_rows($result) > 0) {
   
	
	$UserTypeID ="";
	$CarID="";
    
    $con = new mysqli("localhost", "root", "","pharmacy");
	$sql="select * from cardriver  WHERE ID='$id'";
    $result = mysqli_query($con,$sql);	

	while($res = mysqli_fetch_array($result))
{
    $UserTypeID  = $res['UserTypeID'];
    $CarID = $res['CarID'];
	
}
       echo "<form method='post' >";
       echo "<table border='0'>";
	   
       echo "<tr> ";
            echo "<td style='font-size:20px;'>UserTypeID </td>";
			echo "<td>";
                echo "<input type='text' name='UserTypeID' value='$UserTypeID' required=''>";
			echo "</td>";
       echo "</tr>";
	   
       echo "<tr> ";
            echo "<td style='font-size:20px;'>CarID</td>";
                echo "<td>";
                echo "<input type='text' name='CarID' value= '$CarID'  required=''>";
                echo"</td>";
       echo"</tr>";
         		
	  
	   
       echo" <td><input style='font-size:20px;' type='submit' name='update' value='Update'></td>";
       echo"  </tr>";
       echo" </table>";
       echo" </form>";

$crud= new cardrivermodel();
$cardriver= new cardrivermodel();
if(isset($_POST['update'])) 
{	
$crud->ID=$id;
$crud->UserTypeID=$_POST['UserTypeID'];
$crud->CarID=$_POST['CarID'];
$cardriver->edit($crud);
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
	
		
		//$con = new mysqli("localhost", "root", "","pharmacy");
		 $db = DbConnection::getInstance();
    $mysqli = $db->getConnection(); 
		$sql="select * from cardriver ";
        $result = mysqli_query($mysqli,$sql);	

        echo"<form   onsubmit='return validation()' action='EditCarDriver.php' method='get'>";
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
		
				echo"<form  method='post' >";		
echo"<table>";

			
					
					
			
			
				echo"<tr> ";
				echo"<td style='font-size:20px'>CarID</td>";
			
	echo"<td>";
	
		 //$con = new mysqli("localhost", "root", "","pharmacy");
		$sql="select * from car ";


  	$result = mysqli_query($mysqli,$sql);	
		
		
		echo"<select  name='CarID' >";
		
		while($rows = mysqli_fetch_array($result))
		{
		$ID=$rows['ID'];
		echo"<option value='$ID'>$ID</option>";
		}
		  
		echo"</select>";
		"</td>";
		echo"</tr>";
					
			echo"<tr> ";
			echo"	<td></td>";
			echo"	<td><input type='submit' name='submit' value='Add'></td>";
			echo"</tr>";
	echo"</table>";
	echo"</form>";
	
if(isset($_POST['submit'])) {	

include_once("CarDriverModel.php");

$crud = new cardrivermodel();
$cardriver=new cardrivermodel();


$crud->CarID =$_POST['CarID'];
	
$cardriver->Adding($crud);

 
}							

	}
	}

?>
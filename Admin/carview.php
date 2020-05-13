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
require_once 'CarModel.php';
require_once 'My_DB.php';
require_once 'CClass.php';
class CarView
{
	
	public static function SelectAll(){
		 $db = DbConnection::getInstance();
    $mysqli = $db->getConnection(); 
	
			//$con = new mysqli("localhost", "root", "","pharmacy");
			$sql="select * from car ";
			$crud = new Pharmacy();
			$result = $crud->SelectAll($sql);
	
			echo"	<table  width='80%' border=1 id='customers'>";
			echo"<tr>";
			echo"<th>Car ID</th>";
			echo"<th>Car Type</th>";
			echo"<th>Car Model</th>";
			echo"<th>Date Of Entery</th>";
			echo"<th>Car Color</th>";
			echo"	<th>Car License</th>";
			echo"</tr>";
			echo"</table>";
			foreach ($result as $key => $res){

				
				echo"	<table  width='80%' border=1 id='customers'>";
				echo "<tr>";
				echo "<td>".$res['ID']."</td>";
				echo "<td>".$res['Type']."</td>";
				echo "<td>".$res['Model']."</td>";
				echo "<td>".$res['DateOFEntery']."</td>";
				echo "<td>".$res['Color']."</td>";
				echo "<td>".$res['License']."</td>";
				echo"</table>";
			}
	}


 public function DeleteData(){
 $db = DbConnection::getInstance();
    $mysqli = $db->getConnection(); 
	
	// $con = new mysqli("localhost", "root", "","pharmacy");
	 $sql="select * from car ";
	 
	 $result = mysqli_query($mysqli,$sql);

	 if(mysqli_num_rows($result) > 0){


		 echo"<table  width='80%' border=1 id='customers'>
		 <tr>
		 <th>Car ID</th>
		 <th>Car Type</th>
		 <th>Car Model</th>
		 <th>Date Of Entery</th>
     <th>Car Color</th>
     <th>Car License</th>
		 <th>Delete</th>
		 </tr>
		 </table>";

		 foreach ($result as $key => $res) {

			 //while($res = mysqli_fetch_array($result)) {
  	 	 echo"	<table  width='80%' border=1 id='customers'>";
			 echo "<tr>";
			 echo "<td>".$res['ID']."</td>";
			 echo "<td>".$res['Type']."</td>";
			 echo "<td>".$res['Model']."</td>";
			 echo "<td>".$res['DateOFEntery']."</td>";
       echo "<td>".$res['Color']."</td>";
       echo "<td>".$res['License']."</td>";
       echo "<td><a href=\"delete_car.php?id=$res[ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
	    echo "</tr>";
			 echo "</table>";
			}

	 }

  }

	function ViewEdit($id)
	{
 $db = DbConnection::getInstance();
    $mysqli = $db->getConnection(); 
//$con = new mysqli("localhost", "root", "","pharmacy");
$sql="select * from car  WHERE ID='$id'";
$result = mysqli_query($mysqli,$sql);	
 
  	

  	if (mysqli_num_rows($result) > 0) {
   
	
	$Type=" ";
	$Model="";
    $DateOFEntery="";
	$Color="";
	$License="";
	
    $con = new mysqli("localhost", "root", "","pharmacy");
	$sql="select * from car  WHERE ID='$id'";
    $result = mysqli_query($con,$sql);	

	while($res = mysqli_fetch_array($result))
{
    $Type = $res['Type'];
    $Model = $res['Model'];
	$DateOFEntery = $res['DateOFEntery'];
	$Color = $res['Color'];
    $License = $res['License'];

}
       echo "<form method='post' >";
       echo "<table border='0'>";
	   
       echo "<tr> ";
            echo "<td>Type</td>";
			echo "<td>";
                echo "<input type='text' name='Type' value='$Type' required=''>";
			echo "</td>";
       echo "</tr>";
	   
       echo "<tr> ";
            echo "<td>Model</td>";
                echo "<td>";
                echo "<input type='text' name='Model' value= '$Model'  required=''>";
                echo"</td>";
       echo"</tr>";
         		
	   echo "<tr> ";
            echo "<td>DateOFEntery</td>";
                echo "<td>";
                echo "<input type='text' name='DateOFEntery' value= '$DateOFEntery'  required=''>";
                echo"</td>";
       echo"</tr>";
           
       echo "<tr> ";
            echo "<td>Color</td>";
                echo "<td>";
                echo "<input type='text' name='Color' value= '$Color'  required=''>";
                echo"</td>";
       echo"</tr>";

	   echo "<tr> ";
            echo "<td>License</td>";
                echo "<td>";
                echo "<input type='text' name='License' value= '$License'  required=''>";
                echo"</td>";
       echo"</tr>";
	   
       echo" <td><input type='submit' name='update' value='Update'></td>";
       echo"  </tr>";
       echo" </table>";
       echo" </form>";

$crud= new carmodel();
$car= new carmodel();
if(isset($_POST['update'])) 
{	
$crud->ID=$id;
$crud->Type = $_POST['Type'];
$crud->Model=$_POST['Model'];
$crud->DateOFEntery=$_POST['DateOFEntery'];
$crud->Color=$_POST['Color'];
$crud->License=$_POST['License'];
$car->edit($crud);
}
	}
	else
	{
		 echo "Sorry... ID Not Found "; 	
  	}
}

function form()
{
	 $db = DbConnection::getInstance();
    $mysqli = $db->getConnection(); 
		//$con = new mysqli("localhost", "root", "","pharmacy");
		$sql="select * from car ";
        $result = mysqli_query($mysqli,$sql);	

        echo"<form   onsubmit='return validation()' action='Editcar.php' method='get'>";
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
		
		//$con = new mysqli("localhost", "root", "","pharmacy");
		 $db = DbConnection::getInstance();
    $mysqli = $db->getConnection();
	
				echo"<form  method='post' >";		
                echo"<table>";
                echo"<tr> ";
				echo"<td style='font-size:20px'>Type</td>";
				echo"<td><input style='font-size:20px' type='text' maxlength='20' required='' name='Type' ></td>";
		       	echo"</tr>";
			
			
			
			
			echo"<tr> ";
			echo"	<td style='font-size:20px' >Model</td>";
				echo"<td><input style='font-size:20px' type='text' name='Model' ></td>";
				
			echo"</tr>";
			
	
			echo"<tr> ";
			echo"	<td style='font-size:20px'>DateOFEntery</td>";
				echo"<td><input style='font-size:20px' style='font-size:20px' type='date' name='DateOFEntery' ></td>";
				
			echo"</tr>";
			

			
			echo"<tr> ";
			echo"	<td style='font-size:20px'>Color</td>";
				echo"<td><input style='font-size:20px' type='text' name='Color' ></td>";
				
			echo"</tr>";
			
			
			
			echo"<tr> ";
			echo"	<td style='font-size:20px'>License</td>";
				echo"<td><input style='font-size:20px' type='text' name='License' ></td>";
				
			echo"</tr>";
			
			
		
		
			echo"<tr> ";
			echo"	<td></td>";
			echo"	<td><input type='submit' name='submit' style='font-size:20px' value='Add'></td>";
			echo"</tr>";
	echo"</table>";
	echo"</form>";
	
if(isset($_POST['submit'])) {	

include_once("CarModel.php");

$crud = new carmodel();
$carview=new carmodel();

$crud->Type=$_POST['Type'];
$crud->Model =$_POST['Model'];
$crud->DateOFEntery = $_POST['DateOFEntery'];
$crud->Color =$_POST['Color'];
$crud->License = $_POST['License'];
$carview->Adding($crud);

 
}

		
		
		
	}
	}

?>

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
  //$result = mysqli_query($con,$sql);
      echo"	<table  width='80%' border=1 id='customers'>";
      echo"<tr>";
      echo"	<th>medicine ID</th>";
      echo"<th>medicine Name</th>";
      echo"<th>medicine Discription</th>";
      echo"<th>medicine Type</th>";
      echo"<th>medicine Cost</th>";
      echo"<th>medicine Number</th>";
      echo"<th>User Type ID</th>";
      echo"</tr>";
		  echo"</table>";
      foreach ($result as $key => $res){

  	    //while($res = mysqli_fetch_array($result)) {
        echo"	<table  width='80%' border=1 id='customers'>";
  		  echo "<tr>";
  		  echo "<td>".$res['ID']."</td>";
  		  echo "<td>".$res['Name']."</td>";
        echo "<td>".$res['Discription']."</td>";
        echo "<td>".$res['Type']."</td>";
        echo "<td>".$res['Cost']."</td>";
        echo "<td>".$res['Number']."</td>";
        echo "<td>".$res['UserTypeID']."</td>";
  	    echo"</table>";
  		}
  }



public function DeleteData(){

	 //$con = new mysqli("localhost", "root", "","pharmacy");
	 $db = DbConnection::getInstance();
    $mysqli = $db->getConnection();
	 $sql="select * from medicine ";
	 $result = mysqli_query($mysqli,$sql);

	 if(mysqli_num_rows($result) > 0){


		 echo"<table  width='80%' border=1 id='customers'>
		 <tr>
		 <th>medicine ID</th>
		 <th>medicine Name</th>
     <th>medicine Discription</th>
     <th>medicine Type</th>
		 <th>medicine Cost</th>
     <th>medicine Number</th>
     <th>User Type ID</th>
		 <th>Delete</th>
		 </tr>
		 </table>";

		 foreach ($result as $key => $res) {

			 //while($res = mysqli_fetch_array($result)) {
  	 	 echo"	<table  width='80%' border=1 id='customers'>";
			 echo "<tr>";
			 echo "<td>".$res['ID']."</td>";
			 echo "<td>".$res['Name']."</td>";
			 echo "<td>".$res['Discription']."</td>";
			 echo "<td>".$res['Type']."</td>";
       echo "<td>".$res['Cost']."</td>";
       echo "<td>".$res['Number']."</td>";
       echo "<td>".$res['UserTypeID']."</td>";
       echo "<td><a href=\"delete_medicine.php?id=$res[ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
			 echo "</table>";
			}

	 }

  }
	function ViewEdit($id)
	{

//$con = new mysqli("localhost", "root", "","pharmacy");
$db = DbConnection::getInstance();
    $mysqli = $db->getConnection();
$sql="select * from medicine  WHERE ID='$id'";
$result = mysqli_query($mysqli,$sql);	
 
  	

  	if (mysqli_num_rows($result) > 0) {
   
	
	$Name=" ";
	$Discription="";
    $Type="";
	$Cost="";
	$Number="";
	$UserTypeID="";
	
	
    $con = new mysqli("localhost", "root", "","pharmacy");
	$sql="select * from medicine  WHERE ID='$id'";
    $result = mysqli_query($con,$sql);	

	while($res = mysqli_fetch_array($result))
{
    $Name = $res['Name'];
    $Discription = $res['Discription'];
	$Type = $res['Type'];
	$Cost = $res['Cost'];
    $Number = $res['Number'];
	$UserTypeID = $res['UserTypeID'];
	
}
       echo "<form method='post' >";
       echo "<table border='0'>";
	   
       echo "<tr> ";
            echo "<td>Name</td>";
			echo "<td>";
                echo "<input type='text' name='Name' value='$Name' required=''>";
			echo "</td>";
       echo "</tr>";
	   
       echo "<tr> ";
            echo "<td>Discription</td>";
                echo "<td>";
                echo "<input type='text' name='Discription' value= '$Discription'  required=''>";
                echo"</td>";
       echo"</tr>";
         		
	   echo "<tr> ";
            echo "<td>Type</td>";
                echo "<td>";
                echo "<input type='text' name='Type' value= '$Type'  required=''>";
                echo"</td>";
       echo"</tr>";
           
       echo "<tr> ";
            echo "<td>Cost</td>";
                echo "<td>";
                echo "<input type='text' name='Cost' value='$Cost'  required=''>";
                echo"</td>";
       echo"</tr>";

	   echo "<tr> ";
            echo "<td>Number</td>";
                echo "<td>";
                echo "<input type='text' name='Number' value= '$Number'  required=''>";
                echo"</td>";
       echo"</tr>";
	   
	   echo "<tr> ";
            echo "<td>UserTypeID</td>";
                echo "<td>";
                echo "<input type='text' name='UserTypeID' value= '$UserTypeID'  required=''>";
                echo"</td>";
       echo"</tr>";
	   
	   
       echo" <td><input type='submit' name='update' value='Update'></td>";
       echo"  </tr>";
       echo" </table>";
       echo" </form>";

$crud= new medicinemodel();
$medicine= new medicinemodel();
if(isset($_POST['update'])) 
{	
$crud->ID=$id;
$crud->Name = $_POST['Name'];
$crud->Discription=$_POST['Discription'];
$crud->Type=$_POST['Type'];
$crud->Cost=$_POST['Cost'];
$crud->Number=$_POST['Number'];
$crud->UserTypeID=$_POST['UserTypeID'];
$medicine->edit($crud);
}
	}
	else
	{
		 echo "Sorry... ID Not Found "; 	
  	}
}

function form()
{
		//$con = new mysqli("localhost", "root", "","pharmacy");
		$db = DbConnection::getInstance();
    $mysqli = $db->getConnection();
		$sql="select * from user ";
        $result = mysqli_query($mysqli,$sql);	

        echo"<form   onsubmit='return validation()' action='EditMedicine.php' method='get'>";
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
				echo"<form  method='post'>";		
                echo"<table>";

			
			
			
			echo"<tr> ";
			echo"	<td>Name</td>";
				echo"<td><input type='text' name='Name' ></td>";
				
			echo"</tr>";
			

			echo"<tr> ";
			echo"	<td>Discription</td>";
				echo"<td><input type='text' name='Discription' ></td>";
				
			echo"</tr>";
			

			echo"<tr> ";
			echo"	<td>Type</td>";
				echo"<td><input type='text' name='Type' ></td>";
				
			echo"</tr>";

				echo"<tr> ";
			echo"	<td>Cost</td>";
				echo"<td><input type='text' name='Cost' ></td>";
				
			echo"</tr>";
			

				echo"<tr> ";
			echo"	<td>Number</td>";
				echo"<td><input type='text' name='Number' ></td>";
				
			echo"</tr>";
			
			
			
	
					
			echo"</tr>";
			
			
			
		
		
			echo"<tr> ";
			echo"	<td></td>";
			echo"	<td><input type='submit' name='submit' value='Add'></td>";
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
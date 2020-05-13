
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
require_once 'InventoryModel.php';
require_once ("CClass.php");
require_once 'My_DB.php';
class InventoryView
{
	
	public static function SelectAll(){
  		//$con = new mysqli("localhost", "root", "","pharmacy");
		$db = DbConnection::getInstance();
    $mysqli = $db->getConnection(); 
  		$sql="select * from inventory ";
  	  $crud = new Pharmacy();
  		$result = $crud->SelectAll($sql);
  $result = mysqli_query($mysqli,$sql);
      echo"	<table  width='80%' border=1 id='customers'>";
      echo"<tr>";
      echo"	<th>Product ID</th>";
      echo"<th>Product Name</th>";
      echo"<th>Product Discription</th>";
      echo"<th>Product Type</th>";
      echo"<th>Product Item</th>";
      echo"<th>Product Number</th>";
      echo"<th>Product Cost</th>";
      echo"</tr>";
		  echo"</table>";
      foreach ($result as $key => $res){

  	    //while($res = mysqli_fetch_array($result)) {
        echo"	<table  width='80%' border=1 id='customers'>";
  		  echo "<tr>";
  		  echo "<td>".$res['ID']."</td>";
  		  echo "<td>".$res['Name']."</td>";
        echo "<td>".$res['Description']."</td>";
        echo "<td>".$res['Type']."</td>";
        echo "<td>".$res['Item']."</td>";
        echo "<td>".$res['number']."</td>";
        echo "<td>".$res['cost']."</td>";
  	    echo"</table>";
  		}
  }



 public function DeleteData(){

	// $con = new mysqli("localhost", "root", "","pharmacy");
 $sql="select * from inventory ";
	$db = DbConnection::getInstance();
    $mysqli = $db->getConnection(); 
	
	 $result = mysqli_query($mysqli,$sql);

	 if(mysqli_num_rows($result) > 0){


		 echo"<table  width='80%' border=1 id='customers'>
		 <tr>
		 <th>Product ID</th>
		 <th>Product Name</th>
     <th>Product Discription</th>
     <th>Product Type</th>
		 <th>Product Item</th>
     <th>Product Number</th>
     <th>Product Cost</th>
		 <th>Delete</th>
		 </tr>
		 </table>";

		 foreach ($result as $key => $res) {

			 //while($res = mysqli_fetch_array($result)) {
  	 	 echo"	<table  width='80%' border=1 id='customers'>";
			 echo "<tr>";
			 echo "<td>".$res['ID']."</td>";
			 echo "<td>".$res['Name']."</td>";
			 echo "<td>".$res['Description']."</td>";
			 echo "<td>".$res['Type']."</td>";
       echo "<td>".$res['Item']."</td>";
       echo "<td>".$res['number']."</td>";
       echo "<td>".$res['cost']."</td>";
       echo "<td><a href=\"delete_inventory.php?id=$res[ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
			 echo "</table>";
			}

	 }

  }
	function ViewEdit($id)
	{

//$con = new mysqli("localhost", "root", "","pharmacy");
$db = DbConnection::getInstance();
    $mysqli = $db->getConnection(); 
$sql="select * from inventory  WHERE ID='$id'";
$result = mysqli_query($mysqli,$sql);	
 
  	

  	if (mysqli_num_rows($result) > 0) {
   
	
	$Name=" ";
	$Description="";
    $Type="";
	$Item="";
	$number="";
	$cost="";
	
    $con = new mysqli("localhost", "root", "","pharmacy");
	$sql="select * from inventory  WHERE ID='$id'";
    $result = mysqli_query($con,$sql);	

	while($res = mysqli_fetch_array($result))
{
    $Name = $res['Name'];
    $Description = $res['Description'];
	$Type = $res['Type'];
	$Item = $res['Item'];
    $number = $res['number'];
	$cost = $res['cost'];
	
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
            echo "<td>Description</td>";
                echo "<td>";
                echo "<input type='text' name='Description' value= '$Description'  required=''>";
                echo"</td>";
       echo"</tr>";
         		
	   echo "<tr> ";
            echo "<td>Type</td>";
                echo "<td>";
                echo "<input type='text' name='Type' value= '$Type'  required=''>";
                echo"</td>";
       echo"</tr>";
           
       echo "<tr> ";
            echo "<td>Item</td>";
                echo "<td>";
                echo "<input type='text' name='Item' value= '$Item'  required=''>";
                echo"</td>";
       echo"</tr>";

	   echo "<tr> ";
            echo "<td>number</td>";
                echo "<td>";
                echo "<input type='text' name='number' value= '$number'  required=''>";
                echo"</td>";
       echo"</tr>";
	   
	   echo "<tr> ";
            echo "<td>cost</td>";
                echo "<td>";
                echo "<input type='text' name='cost' value= '$cost'  required=''>";
                echo"</td>";
       echo"</tr>";
	   
	   
       echo" <td><input type='submit' name='update' value='Update'></td>";
       echo"  </tr>";
       echo" </table>";
       echo" </form>";

$crud= new inventorymodel();
$inventory= new inventorymodel();
if(isset($_POST['update'])) 
{	
$crud->ID=$id;
$crud->Name = $_POST['Name'];
$crud->Description=$_POST['Description'];
$crud->Type=$_POST['Type'];
$crud->Item=$_POST['Item'];
$crud->number=$_POST['number'];
$crud->cost=$_POST['cost'];
$inventory->edit($crud);
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

        echo"<form   onsubmit='return validation()' action='EditInventory.php' method='get'>";
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
			echo"	<td>Description</td>";
				echo"<td><input type='text' name='Description' ></td>";
				
			echo"</tr>";
			

			echo"<tr> ";
			echo"	<td>Type</td>";
				echo"<td><input type='text' name='Type' ></td>";
				
			echo"</tr>";

				echo"<tr> ";
			echo"	<td>Item</td>";
				echo"<td><input type='text' name='Item' ></td>";
				
			echo"</tr>";
			

				echo"<tr> ";
			echo"	<td>number</td>";
				echo"<td><input type='text' name='number' ></td>";
				
			echo"</tr>";
			
			
				echo"<tr> ";
			echo"	<td>cost</td>";
				echo"<td><input type='text' name='cost' ></td>";
				
			echo"</tr>";
			
			
			
		
echo"<tr> ";
			echo"	<td></td>";
			echo"	<td><input type='submit' name='submit' value='Add'></td>";
			echo"</tr>";
	echo"</table>";
	echo"</form>";
	
if(isset($_POST['submit'])) {	

include_once("InventoryModel.php");

$crud = new inventorymodel();
$inventoryview=new inventorymodel();

$crud->Name=$_POST['Name'];
$crud->Description =$_POST['Description'];
$crud->Type = $_POST['Type'];
$crud->Item = $_POST['Item'];
$crud->number = $_POST['number'];
$crud->cost = $_POST['cost'];

$inventoryview->Adding($crud);

 
}							

	}
	}

?>
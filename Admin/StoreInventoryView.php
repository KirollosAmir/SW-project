

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
require_once 'StoreInventoryModel.php';
require_once ("CClass.php");
require_once 'My_DB.php';

class StoreInventoryView
{
	
	public static function SelectAll(){
  		//$con = new mysqli("localhost", "root", "","pharmacy");
		 $db = DbConnection::getInstance();
    $mysqli = $db->getConnection(); 
  		$sql="select * from storeinventory ";
  	  $crud = new Pharmacy();
	  
  		$result = $crud->SelectAll($sql);
  $result = mysqli_query($mysqli,$sql);
      echo"	<table  width='80%' border=1 id='customers'>";
      echo"<tr>";
      echo"	<th> ID</th>";
      echo"<th>Store ID</th>";
      echo"<th>Inventory ID</th>";
      echo"</tr>";
		  echo"</table>";
      foreach ($result as $key => $res){

  	    //while($res = mysqli_fetch_array($result)) {
        echo"	<table  width='80%' border=1 id='customers'>";
  		  echo "<tr>";
  		  echo "<td>".$res['ID']."</td>";
  		  echo "<td>".$res['StoreID']."</td>";
        echo "<td>".$res['InventoryID']."</td>";
        echo"</table>";
  		}
  }

public function DeleteData(){

	// $con = new mysqli("localhost", "root", "","pharmacy");
	 $db = DbConnection::getInstance();
    $mysqli = $db->getConnection(); 
	 $sql="select * from storeinventory ";
	 $result = mysqli_query($mysqli,$sql);

	 if(mysqli_num_rows($result) > 0){


		 echo"<table  width='80%' border=1 id='customers'>
		 <tr>
		 <th> ID</th>
		 <th>Store ID</th>
     <th>Inventory ID</th>
     <th>Delete</th>
		 </tr>
		 </table>";

		 foreach ($result as $key => $res) {

			 //while($res = mysqli_fetch_array($result)) {
  	 	 echo"	<table  width='80%' border=1 id='customers'>";
			 echo "<tr>";
			 echo "<td>".$res['ID']."</td>";
			 echo "<td>".$res['StoreID']."</td>";
       echo "<td>".$res['InventoryID']."</td>";
       echo "<td><a href=\"delete_storeinventory.php?id=$res[ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
			 echo "</table>";
			}

	 }

  
	
}
	function ViewEdit($id)
	{

//$con = new mysqli("localhost", "root", "","pharmacy");
 $db = DbConnection::getInstance();
    $mysqli = $db->getConnection(); 
$sql="select * from storeinventory  WHERE ID='$id'";
$result = mysqli_query($mysqli,$sql);	
 
  	

  	if (mysqli_num_rows($result) > 0) {
   
	
	$StoreID=" ";
	$InventoryID="";
    
	
   // $con = new mysqli("localhost", "root", "","pharmacy");
	$sql="select * from storeinventory  WHERE ID='$id'";
    $result = mysqli_query($mysqli,$sql);	

	while($res = mysqli_fetch_array($result))
{
    $StoreID = $res['StoreID'];
    $InventoryID = $res['InventoryID'];
	
}
       echo "<form method='post' >";
       echo "<table border='0'>";
	   
       echo "<tr> ";
            echo "<td>StoreID</td>";
			echo "<td>";
                echo "<input type='text' name='StoreID' value='$StoreID' required=''>";
			echo "</td>";
       echo "</tr>";
	   
       echo "<tr> ";
            echo "<td>InventoryID</td>";
                echo "<td>";
                echo "<input type='text' name='InventoryID' value= '$InventoryID'  required=''>";
                echo"</td>";
       echo"</tr>";
         		
	 
	   
       echo" <td><input type='submit' name='update' value='Update'></td>";
       echo"  </tr>";
       echo" </table>";
       echo" </form>";

$crud= new storeinventorymodel();
$storeinventory= new storeinventorymodel();
if(isset($_POST['update'])) 
{	
$crud->ID=$id;
$crud->StoreID = $_POST['StoreID'];
$crud->InventoryID=$_POST['InventoryID'];
$storeinventory->edit($crud);
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

        echo"<form   onsubmit='return validation()' action='EditStoreInventory.php' method='get'>";
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
				echo"<td>StoreID</td>";
			
	echo"<td>";
	
		// $con = new mysqli("localhost", "root", "","pharmacy");
		$sql="select * from store ";


  	$result = mysqli_query($mysqli,$sql);	
		
		
		echo"<select  name='StoreID' >";
		
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
				echo"<td>InventoryID</td>";
			
	echo"<td>";
	
		// $con = new mysqli("localhost", "root", "","pharmacy");
		$sql="select * from inventory ";


  	$result = mysqli_query($mysqli,$sql);	
		
		
		echo"<select  name='InventoryID' >";
		
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

include_once("StoreInventoryModel.php");

$crud = new storeinventorymodel();
$storeinventory=new storeinventorymodel();

$crud->StoreID=$_POST['StoreID'];
$crud->InventoryID =$_POST['InventoryID'];

$storeinventory->Adding($crud);

 
}							

	}
	}

?>
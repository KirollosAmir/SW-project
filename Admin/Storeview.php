
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
require_once 'StoreModel.php';
require_once ("My_DB.php");
require_once ("CClass.php");
class StoreView
{
	
	 public static function SelectAll(){
  		//$con = new mysqli("localhost", "root", "","pharmacy");
		$db = DbConnection::getInstance();
    $mysqli = $db->getConnection();
  		$sql="select * from store ";
  	  $crud = new Pharmacy();
  		$result = $crud->SelectAll($sql);
  //$result = mysqli_query($con,$sql);
      echo"	<table  width='80%' border=1 id='customers'>";
      echo"<tr>";
      echo"	<th>Store ID</th>";
      echo"<th>Store Name</th>";
      echo"<th>Number Of Products</th>";
      echo"<th>Store price</th>";
      echo"<th>User Type ID</th>";
      echo"</tr>";
		  echo"</table>";
      foreach ($result as $key => $res){

  	    //while($res = mysqli_fetch_array($result)) {
        echo"	<table  width='80%' border=1 id='customers'>";
  		  echo "<tr>";
  		  echo "<td>".$res['ID']."</td>";
  		  echo "<td>".$res['Name']."</td>";
        echo "<td>".$res['NumberOFproduct']."</td>";
        echo "<td>".$res['price']."</td>";
        echo "<td>".$res['UserTypeID']."</td>";
  	    echo"</table>";
  		}
  }

public function DeleteData(){
$db = DbConnection::getInstance();
    $mysqli = $db->getConnection();
	 //$con = new mysqli("localhost", "root", "","pharmacy");
	 $sql="select * from store ";
	 $result = mysqli_query($mysqli,$sql);

	 if(mysqli_num_rows($result) > 0){


		 echo"<table  width='80%' border=1 id='customers'>
		 <tr>
		 <th>Store ID</th>
		 <th>Store Name</th>
     <th>Number Of Products</th>
     <th>Store price</th>
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
       echo "<td>".$res['NumberOFproduct']."</td>";
       echo "<td>".$res['price']."</td>";
			 echo "<td>".$res['UserTypeID']."</td>";
       echo "<td><a href=\"delete_store.php?id=$res[ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
			 echo "</table>";
			}

	 }

  }
	function ViewEdit($id)
	{

//$con = new mysqli("localhost", "root", "","pharmacy");
$db = DbConnection::getInstance();
    $mysqli = $db->getConnection();
$sql="select * from store  WHERE ID='$id'";
$result = mysqli_query($mysqli,$sql);	
 
  	

  	if (mysqli_num_rows($result) > 0) {
   
	
	$Name =" ";
	$NumberOFproduct="";
    $price="";
	$UserTypeID="";
	
	
   // $con = new mysqli("localhost", "root", "","pharmacy");
	$sql="select * from store  WHERE ID='$id'";
    $result = mysqli_query($mysqli,$sql);	

	while($res = mysqli_fetch_array($result))
{
    $Name = $res['Name'];
    $NumberOFproduct = $res['NumberOFproduct'];
	$price = $res['price'];
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
            echo "<td>NumberOFproduct</td>";
                echo "<td>";
                echo "<input type='text' name='NumberOFproduct' value= '$NumberOFproduct'  required=''>";
                echo"</td>";
       echo"</tr>";
         		
	   echo "<tr> ";
            echo "<td>price</td>";
                echo "<td>";
                echo "<input type='text' name='price' value= '$price'  required=''>";
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

$crud= new storemodel();
$store= new storemodel();
if(isset($_POST['update'])) 
{	
$crud->ID=$id;
$crud->Name = $_POST['Name'];
$crud->NumberOFproduct=$_POST['NumberOFproduct'];
$crud->price=$_POST['price'];
$crud->UserTypeID=$_POST['UserTypeID'];
$store->edit($crud);
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
		$sql="select * from store ";
        $result = mysqli_query($mysqli,$sql);	

        echo"<form   onsubmit='return validation()' action='EditStore.php' method='get'>";
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
			echo"	<td>NumberOFproduct</td>";
				echo"<td><input type='text' name='NumberOFproduct' ></td>";
				
			echo"</tr>";
			
			
			echo"<tr> ";
			echo"	<td>price</td>";
				echo"<td><input type='text' name='price' ></td>";
				
			echo"</tr>";
			

			echo"<tr> ";
				echo"<td>UserTypeID</td>";
			
	echo"<td>";
	
		// $con = new mysqli("localhost", "root", "","pharmacy");
		$sql="select * from usertype ";


  	$result = mysqli_query($mysqli,$sql);	
		
		
		echo"<select  name='UserTypeID' >";
		
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

include_once("StoreModel.php");

$crud = new storemodel();
$storeview=new storemodel();

$crud->Name=$_POST['Name'];
$crud->NumberOFproduct =$_POST['NumberOFproduct'];
$crud->price=$_POST['price'];
$crud->UserTypeID =$_POST['UserTypeID'];


$storeview->Adding($crud);

 
}							

	}
	}

?>
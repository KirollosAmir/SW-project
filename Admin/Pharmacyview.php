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
require_once 'My_DB.php';
require_once 'PharmacyModel.php';
require_once 'CClass.php';
class pharmacyView
{
	
	public static function SelectAll(){
     // $con = new mysqli("localhost", "root", "","pharmacy");
	  $db = DbConnection::getInstance();
    $mysqli = $db->getConnection();
      $sql="select * from allpharmacy ";
      $crud = new Pharmacy();
      $result = $crud->SelectAll($sql);
$result = mysqli_query($mysqli,$sql);
      echo"	<table  width='80%' border=1 id='customers'>";
      echo"<tr>";
      echo"	<th>ID</th>";
      echo"<th>Name</th>";
      echo"<th>Pharmacy Location</th>";
      echo"<th>User Type ID</th>";
      echo"</tr>";
      echo"</table>";
      foreach ($result as $key => $res){

        //while($res = mysqli_fetch_array($result)) {
        echo"	<table  width='80%' border=1 id='customers'>";
        echo "<tr>";
        echo "<td>".$res['ID']."</td>";
        echo "<td>".$res['Name']."</td>";
        echo "<td>".$res['Location']."</td>";
        echo "<td>".$res['UserTypeID']."</td>";
        echo"</table>";
      }
  }



 public function DeleteData(){

	 //$con = new mysqli("localhost", "root", "","pharmacy");
	  $db = DbConnection::getInstance();
    $mysqli = $db->getConnection();
	 $sql="select * from allpharmacy ";
	 $result = mysqli_query($mysqli,$sql);

	 if(mysqli_num_rows($result) > 0){


		 echo"<table  width='80%' border=1 id='customers'>
		 <tr>
		 <th>Pharmacy ID</th>
		 <th>Name</th>
		 <th>Location</th>
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
			 echo "<td>".$res['Location']."</td>";
			 echo "<td>".$res['UserTypeID']."</td>";
       echo "<td><a href=\"delete_allpharmacy.php?id=$res[ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
			 echo "</table>";
			}

	 }

  }
	function ViewEdit($id)
	{

//$con = new mysqli("localhost", "root", "","pharmacy");
 $db = DbConnection::getInstance();
    $mysqli = $db->getConnection();
$sql="select * from allpharmacy  WHERE ID='$id'";
$result = mysqli_query($mysqli,$sql);	
 
  	

  	if (mysqli_num_rows($result) > 0) {
   
	
	$Name=" ";
	$Location="";
   

	
   // $con = new mysqli("localhost", "root", "","pharmacy");
	$sql="select * from allpharmacy  WHERE ID='$id'";
    $result = mysqli_query($mysqli,$sql);	

	while($res = mysqli_fetch_array($result))
{
    $Name = $res['Name'];
    $Location = $res['Location'];
	
	
}
       echo "<form method='post' >";
       echo "<table border='0'>";
	   
       echo "<tr> ";
            echo "<td style='font-size:20px;'>Name</td>";
			echo "<td>";
                echo "<input type='text' name='Name' value='$Name' required=''>";
			echo "</td>";
       echo "</tr>";
	   
       echo "<tr> ";
            echo "<td style='font-size:20px;'>Location</td>";
                echo "<td>";
                echo "<input type='text' name='Location' value= '$Location'  required=''>";
                echo"</td>";
       echo"</tr>";
         		
	 
           
       
	   
       echo" <td><input style='font-size:20px;' type='submit' name='update' value='Update'></td>";
       echo"  </tr>";
       echo" </table>";
       echo" </form>";

$crud= new pharmacymodel();
$user= new pharmacymodel();
if(isset($_POST['update'])) 
{	
$crud->ID=$id;
$crud->Name = $_POST['Name'];
$crud->Location=$_POST['Location'];

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
		//$con = new mysqli("localhost", "root", "","pharmacy");
		 $db = DbConnection::getInstance();
    $mysqli = $db->getConnection();
		$sql="select * from user ";
        $result = mysqli_query($mysqli,$sql);	

        echo"<form   onsubmit='return validation()' action='Editpharmacy.php' method='get'>";
		echo"<table>";
		
		echo"<tr>";
		echo"<td style='font-size:20px;'>Enter ID</td>";
		echo"<td><input type='text'  name='ID' id='ID' required=''> </td>";
		echo"</tr>";
									
	    echo"<tr>";
	    echo"<td></td>";
	    echo"<td><button style='font-size:20px;' type='submit'>Enter</button></td>";
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
				echo"<td style='font-size:20px'>Name</td>";
				echo"<td><input type='text' maxlength='20' required='' name='Name' ></td>";
			echo"</tr>";
			
			
			
			
			echo"<tr> ";
			echo"	<td style='font-size:20px'>Location</td>";
				echo"<td><input type='text' name='Location' ></td>";
				
			echo"</tr>";
			



						
			
			
		
		
			echo"<tr> ";
			echo"	<td></td>";
			echo"	<td><input  style='font-size:20px' type='submit' name='submit' value='Add'></td>";
			echo"</tr>";
	echo"</table>";
	echo"</form>";
	
if(isset($_POST['submit'])) {	

include_once("PharmacyModel.php");

$crud = new pharmacymodel();
$pharmacyview=new pharmacymodel();

$crud->Name=$_POST['Name'];
$crud->Location =$_POST['Location'];


$pharmacyview->Adding($crud);

 
}							

	}
	}

?>
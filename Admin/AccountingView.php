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
require_once 'AccountingMode.php';

class accountingView
{
	
	

	function ViewEdit($id)
	{

$con = new mysqli("localhost", "root", "","pharmacy");
$sql="select * from accounting  WHERE ID='$id'";
$result = mysqli_query($con,$sql);	
 
  	

  	if (mysqli_num_rows($result) > 0) {
   
	
	$Taxes=" ";
	$delivery=" ";
	$UserTypeID=" ";
	
    $con = new mysqli("localhost", "root", "","pharmacy");
	$sql="select * from accounting  WHERE ID='$id'";
    $result = mysqli_query($con,$sql);	

	while($res = mysqli_fetch_array($result))
{
    $Taxes = $res['Taxes'];
   $delivery = $res['delivery'];
    $UserTypeID = $res['UserTypeID'];
}
       echo "<form method='post' >";
       echo "<table border='0'>";
	   
       echo "<tr> ";
            echo "<td style='font-size:20px;'>Taxes</td>";
			echo "<td>";
                echo "<input type='text' name='Taxes' value='$Taxes' required=''>";
			echo "</td>";
       echo "</tr>";
	  
	   echo "<tr> ";
            echo "<td style='font-size:20px;'>delivery</td>";
			echo "<td>";
                echo "<input type='text' name='delivery' value='$delivery' required=''>";
			echo "</td>";
       echo "</tr>";
	   
	    echo "<tr> ";
            echo "<td style='font-size:20px;'>UserTypeID</td>";
			echo "<td>";
                echo "<input type='text' name='UserTypeID' value='$UserTypeID' required=''>";
			echo "</td>";
       echo "</tr>";
	   
       echo" <td><input style='font-size:20px;' type='submit' name='update' value='Update'></td>";
       echo"  </tr>";
       echo" </table>";
       echo" </form>";

$crud= new accountingmodel();
$accounting= new accountingmodel();
if(isset($_POST['update'])) 
{	
$crud->ID=$id;
$crud->Taxes = $_POST['Taxes'];
$crud->delivery = $_POST['delivery'];
$crud->UserTypeID = $_POST['UserTypeID'];
$accounting->edit($crud);
}
	}
	else
	{
		 echo "Sorry... ID Not Found "; 	
  	}
}

function form()
{
		$con = new mysqli("localhost", "root", "","pharmacy");
		$sql="select * from accounting ";
        $result = mysqli_query($con,$sql);	

        echo"<form   onsubmit='return validation()' action='Editaccounting.php' method='get'>";
		echo"<table>";
		
		echo"<tr>";
		echo"<td style='font-size:20px'>Enter ID</td>";
		echo"<td><input type='text'  name='ID' id='ID' required=''> </td>";
		echo"</tr>";
									
	    echo"<tr>";
	    echo"<td></td>";
	    echo"<td><button style='font-size:20px' type='submit'>Enter</button></td>";
	    echo"</tr>";
		
		echo"</table>";
		echo"</form>";
}
	
	
	
	}

?>
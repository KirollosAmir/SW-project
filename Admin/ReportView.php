<?php
require_once 'ReportModel.php';
require_once ("CClass.php");
class ReportView
{
	
	public static function SelectAll(){
  		$con = new mysqli("localhost", "root", "","pharmacy");
  		$sql="select * from report ";
  	  $crud = new Pharmacy();
  		$result = $crud->SelectAll($sql);
  //$result = mysqli_query($con,$sql);
      echo"	<table  width='80%' border=1 id='customers'>";
      echo"<tr>";
      echo"	<th>ID</th>";
      echo"<th>Report Name</th>";
      echo"<th>UserType ID</th>";
      echo"</tr>";
		  echo"</table>";
      foreach ($result as $key => $res){

  	    //while($res = mysqli_fetch_array($result)) {
        echo"	<table  width='80%' border=1 id='customers'>";
  		  echo "<tr>";
  		  echo "<td>".$res['ID']."</td>";
  		  echo "<td>".$res['ReportName']."</td>";
        echo "<td>".$res['UserTypeID']."</td>";
  	    echo"</table>";
  		}
  }



public function DeleteData(){

	 $con = new mysqli("localhost", "root", "","pharmacy");
	 $sql="select * from report ";
	 $result = mysqli_query($con,$sql);

	 if(mysqli_num_rows($result) > 0){


		 echo"<table  width='80%' border=1 id='customers'>
		 <tr>
		 <th>ID</th>
		 <th>Report Name</th>
     <th>UserTypeID</th>
		 <th>Delete</th>
		 </tr>
		 </table>";

		 foreach ($result as $key => $res) {

			 //while($res = mysqli_fetch_array($result)) {
  	 	 echo"	<table  width='80%' border=1 id='customers'>";
			 echo "<tr>";
			 echo "<td>".$res['ID']."</td>";
			 echo "<td>".$res['ReportName']."</td>";
			 echo "<td>".$res['UserTypeID']."</td>";
       echo "<td><a href=\"delete_report.php?id=$res[ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
			 echo "</table>";
			}

	 }

  }
	function ViewEdit($id)
	{

$con = new mysqli("localhost", "root", "","pharmacy");
$sql="select * from report  WHERE ID='$id'";
$result = mysqli_query($con,$sql);	
 
  	

  	if (mysqli_num_rows($result) > 0) {
   
	
	$ReportName=" ";
	$UserTypeID="";

	
    $con = new mysqli("localhost", "root", "","pharmacy");
	$sql="select * from report  WHERE ID='$id'";
    $result = mysqli_query($con,$sql);	

	while($res = mysqli_fetch_array($result))
{
    $ReportName = $res['ReportName'];
    $UserTypeID = $res['UserTypeID'];
	
}
       echo "<form method='post' >";
       echo "<table border='0'>";
	   
       echo "<tr> ";
            echo "<td>ReportName</td>";
			echo "<td>";
                echo "<input type='text' name='ReportName' value='$ReportName' required=''>";
			echo "</td>";
       echo "</tr>";
	   
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

$crud= new reportmodel();
$report= new reportmodel();
if(isset($_POST['update'])) 
{	
$crud->ID=$id;
$crud->ReportName = $_POST['ReportName'];
$crud->UserTypeID=$_POST['UserTypeID'];
$report->edit($crud);
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
		$sql="select * from report ";
        $result = mysqli_query($con,$sql);	

        echo"<form   onsubmit='return validation()' action='EditReport.php' method='get'>";
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
		
		$con = new mysqli("localhost", "root", "","pharmacy");
		
				echo"<form  method='post'>";		
                echo"<table>";

						
			echo"<tr> ";
			echo"	<td>ReportName</td>";
				echo"<td><input type='text' name='ReportName' ></td>";
				
			echo"</tr>";
			
			echo"<tr> ";
				echo"<td>UserTypeID</td>";
			
	echo"<td>";
	
		 $con = new mysqli("localhost", "root", "","pharmacy");
		$sql="select * from usertype ";


  	$result = mysqli_query($con,$sql);	
		
		
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

include_once("reportmodel.php");

$crud = new reportmodel();
$reporttview=new reportmodel();

$crud->ReportName=$_POST['ReportName'];
$crud->UserTypeID =$_POST['UserTypeID'];

$reporttview->Adding($crud);

 
}							

	}
	}

?>
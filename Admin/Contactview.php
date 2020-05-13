<?php
require_once 'ContactModel.php';

class ContactView
{
	
	public static function SelectAll(){
  		$con = new mysqli("localhost", "root", "","pharmacy");
  		$sql="select * from contact ";
  	  $crud = new Pharmacy();
  		$result = $crud->SelectAll($sql);
  //$result = mysqli_query($con,$sql);
      echo"	<table  width='80%' border=1 id='customers'>";
      echo"<tr>";
      echo"	<th>ID</th>";
      echo"<th>Name</th>";
      echo"<th>Subject</th>";
      echo"<th>comment</th>";
      echo"<th>User Type ID</th>";
      echo"</tr>";
		  echo"</table>";
      foreach ($result as $key => $res){

  	    //while($res = mysqli_fetch_array($result)) {
        echo"	<table  width='80%' border=1 id='customers'>";
  		  echo "<tr>";
  		  echo "<td>".$res['ID']."</td>";
  		  echo "<td>".$res['Name']."</td>";
        echo "<td>".$res['Subject']."</td>";
        echo "<td>".$res['comment']."</td>";
        echo "<td>".$res['UserTypeID']."</td>";
  	    echo"</table>";
  		}
  }


public function DeleteData(){

	 $con = new mysqli("localhost", "root", "","pharmacy");
	 $sql="select * from contact ";
	 $result = mysqli_query($con,$sql);

	 if(mysqli_num_rows($result) > 0){


		 echo"<table  width='80%' border=1 id='customers'>
		 <tr>
		 <th>Pharmacy ID</th>
		 <th>Name</th>
		 <th>Subject</th>
		 <th>comment</th>
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
			 echo "<td>".$res['Subject']."</td>";
			  echo "<td>".$res['comment']."</td>";
			 echo "<td>".$res['UserTypeID']."</td>";
       echo "<td><a href=\"delete_contact.php?id=$res[ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
			 echo "</table>";
			}

	 }

  }
	function ViewEdit($id)
	{

$con = new mysqli("localhost", "root", "","pharmacy");
$sql="select * from contact  WHERE ID='$id'";
$result = mysqli_query($con,$sql);	
 
  	

  	if (mysqli_num_rows($result) > 0) {
   
	
	$Name=" ";
	$Subject="";
    $comment="";
	$UserTypeID="";
	
	
    $con = new mysqli("localhost", "root", "","pharmacy");
	$sql="select * from contact  WHERE ID='$id'";
    $result = mysqli_query($con,$sql);	

	while($res = mysqli_fetch_array($result))
{
    $Name = $res['Name'];
    $Subject = $res['Subject'];
	$comment = $res['comment'];
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
            echo "<td>Subject</td>";
                echo "<td>";
                echo "<input type='text' name='Subject' value= '$Subject'  required=''>";
                echo"</td>";
       echo"</tr>";
         		
	   echo "<tr> ";
            echo "<td>comment</td>";
                echo "<td>";
                echo "<input type='text' name='comment' value= '$comment'  required=''>";
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

$crud= new contactmodel();
$contact= new contactmodel();
if(isset($_POST['update'])) 
{	
$crud->ID=$id;
$crud->Name = $_POST['Name'];
$crud->Subject=$_POST['Subject'];
$crud->comment=$_POST['comment'];
$crud->UserTypeID=$_POST['UserTypeID'];
$contact->edit($crud);
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
		$sql="select * from user ";
        $result = mysqli_query($con,$sql);	

        echo"<form   onsubmit='return validation()' action='EditContact.php' method='get'>";
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
				echo"<td>Name</td>";
				echo"<td><input type='text' maxlength='20' required='' name='Name' ></td>";
			echo"</tr>";
			
			
			
			
			echo"<tr> ";
			echo"	<td>Subject</td>";
				echo"<td><input type='text' name='Subject' ></td>";
				
			echo"</tr>";
			

			echo"<tr> ";
			echo"	<td>comment</td>";
				echo"<td><input type='text' name='comment' ></td>";
				
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

include_once("contactmodel.php");

$crud = new contactmodel();
$pharmacyview=new contactmodel();

$crud->Name=$_POST['Name'];
$crud->Subject =$_POST['Subject'];
$crud->comment = $_POST['comment'];
$crud->UserTypeID = $_POST['UserTypeID'];

$pharmacyview->Adding($crud);

 
}							

	}
	}

?>
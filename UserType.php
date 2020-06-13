
<?php

class usertype
{
	
    public $ID;
    PUBLIC $Name;
    PUBLIC $Isdelete;
	
			
    function scerch($id)
    {

   $con = new mysqli("localhost", "root", "","pharmacy");

   $sql = "select  LinkID from usertypelink where UserID='$id'";
     $result = mysqli_query($con,$sql);

$x=array();
$i=1;
       
		while($rows = mysqli_fetch_array($result))
		{
       $x[]=$rows['LinkID'];
     
        
    }
 
    return $x;
}
}
?>
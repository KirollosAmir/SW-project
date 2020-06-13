<?php
interface IObserverable {
    public function add();
	  public function Remove();
	   public function Notify();
	 
	
}
 
class Medicine implements IObserverable {
   

    public function construct() {
        
    }

    public function add() {
     



require_once 'MedicineModel.php';
require_once 'Medicineview.php';
$stdView=new MedicineView();

$stdView->Add();


    }
	
	
	 public function Remove() {
		 
		




	 }
	
public function Notify(){
	 
                $stdView=new UpdateMedicine();

$stdView->update();
            
	
}
    
}


interface Iobserver {
    public function update();
  
}
 
class UpdateMedicine implements Iobserver {
  

     public function __construct()
    {
        
    }

    public function update() {
      

if(isset($_POST['view'])){

// $con = mysqli_connect("localhost", "root", "", "notif");

if($_POST["view"] != '')


{
	
		$con = new mysqli("localhost", "root", "","pharmacy");
   $update_query = "UPDATE medicine SET MedcineSeen = 1 WHERE MedcineSeen=0 ";
   mysqli_query($con, $update_query);
   



   


}
	$con = new mysqli("localhost", "root", "","pharmacy");
$query = "SELECT * FROM medicine ";
$result = mysqli_query($con, $query);


$output = '';

if(mysqli_num_rows($result) > 0)
{

while($row = mysqli_fetch_array($result))

{

  $output .= '
  <li>
  <a href="#1">
  <strong>'.$row["Name"].'</strong><br />
  <small><em>'.$row["Cost"].'</em></small>

  </a>
  </li>

  ';
  
 
}
}



else{
    $output .= '<li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
}

$status_query = "SELECT * FROM medicine WHERE MedcineSeen=0";
$result_query = mysqli_query($con, $status_query);
$count = mysqli_num_rows($result_query);

$data = array(
   'notification' => $output,
   'unseen_notification'  => $count
);

echo json_encode($data);


}

    }
	
	
	
}
	
	
	
	

   



?>
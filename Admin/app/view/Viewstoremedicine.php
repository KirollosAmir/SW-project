<head>
  
<style>
td,th {
  border: 1px solid #ddd;
  padding: 8px;
  font-size:15px;
}

tr:nth-child(even){background-color: #f2f2f2; font-size:15px;}

tr:hover {background-color: #ddd;}

th {
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
body, html {
  font-family: "Lato", sans-serif;
   height: 100%;
  margin: 0;
}

.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}
.dropdown-btn:hover {
  color: #f1f1f1;
}
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
  margin-top:9px;
}
/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
/* Add an active class to the active dropdown button */
.active1 {
  background-color: green;
  color: white;
}

.bg {
 
  background-image: url("pharmacist.jpeg");
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.container {
  position: relative;
  font-family: Arial;
  
}

.text-block {
  position: absolute;
  color: black;
  opacity:0.7;
  margin-left:-10px;
  margin-top:-400px;
font-family: Time new roman;
}
</style>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet"		
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>

  <div class="site-wrap">


    <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="" class="js-logo-clone">Trio-Pharma</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                
            
              </ul>
            </nav>
          </div>
          <div class="icons">
           
          </div>
        </div>
      </div>
    </div>



<div class="sidenav">
  <button style="margin-top:60px;font-family:Time new roman;font-size:20px;" class="dropdown-btn">Medicine
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a style="font-size:18px;font-family:Time new roman;" href="medicineaddcontroller.php">Add</a>
 <a style="font-size:18px;font-family:Time new roman;" href="show_medicine_controller.php">Show</a>
 <a style="font-size:18px;font-family:Time new roman;" href="Medicines.php">Edit/Delete</a>
    <a  style="font-size:18px;font-family:Time new roman;" href="medicinesearch.php">Search  </a>
  

  </div>
  
    <button style="font-family:Time new roman;font-size:20px;"   class="dropdown-btn" >User 
  <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a style="font-size:18px;font-family:Time new roman;" href="Users.php">Crud  </a>
    <a style="font-size:18px;font-family:Time new roman;" href="UserSearch.php">Search  </a>
   
	
  </div>
  
   <button style="font-family:Time new roman;font-size:20px;"   class="dropdown-btn" >User-type
  <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a style="font-size:18px;font-family:Time new roman;" href="UserType.php">Crud  </a>
    <a style="font-size:18px;font-family:Time new roman;" href="UserTypeSearch.php">Search   </a>
   
	
  </div>
  
 <button style="font-family:Time new roman;font-size:20px;" class="dropdown-btn" >Stock 
 <i class="fa fa-caret-down"></i>
 </button>
 <div class="dropdown-container">
    <a style="font-size:18px;font-family:Time new roman;" href="store.php">Crud  </a>
    <a style="font-size:18px;font-family:Time new roman;" href="storeSearch.php">Search  </a>
   
  </div>
  <button style="font-family:Time new roman;font-size:20px;" class="dropdown-btn" >Inventory
  <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a style="font-size:18px;font-family:Time new roman;" href="Inventory.php">Crud </a>
    <a style="font-size:18px;font-family:Time new roman;" href="inventorysearch.php">Search </a>
    

  </div>
   <button style="font-family:Time new roman;font-size:20px;" class="dropdown-btn">Pharmacy 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a style="font-size:18px;font-family:Time new roman;" href="Pharmacies.php"> Crud  </a>
    <a style="font-size:18px;font-family:Time new roman;" href="allpharmacySearch.php">Search   </a>
    
  </div>


<button style="font-family:Time new roman;font-size:20px;" class="dropdown-btn"> Vehicle 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a style="font-size:18px;font-family:Time new roman;" href="Cars.php">Crud  </a>
    <a style="font-size:18px;font-family:Time new roman;" href="carSearch.php">Search  </a>
    
  </div>

<button style="font-family:Time new roman;font-size:20px;" class="dropdown-btn"> Car-Driver 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a style="font-size:18px;font-family:Time new roman;" href="Cardriver.php">Crud  </a>
    <a style="font-size:18px;font-family:Time new roman;" href="cardriverSearch.php">Search   </a>
  
  </div>

<button style="font-family:Time new roman;font-size:20px;" class="dropdown-btn"> Store-invenory 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a style="font-size:18px;font-family:Time new roman;" href="storeinventory.php">Crud   </a>
    <a style="font-size:18px;font-family:Time new roman;" href="storeinventorySearch.php">Search   </a>
   
  </div>


<button style="font-family:Time new roman;font-size:20px;" class="dropdown-btn"> Store-medicine 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a style="font-size:18px;font-family:Time new roman;" href="storemedicine.php">Crud   </a>
    <a style="font-size:18px;font-family:Time new roman;" href="StoreMedicineSearch.php">Search  </a>
   
  </div>


<button style="font-family:Time new roman;font-size:20px;" class="dropdown-btn"> Payment
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a style="font-size:18px;font-family:Time new roman;" href="payment.php">Crud </a>
    <a style="font-size:18px;font-family:Time new roman;" href="paymentSearch.php">Search </a>
   
  </div>

<button style="font-family:Time new roman;font-size:20px;" class="dropdown-btn"> Report
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a style="font-size:18px;font-family:Time new roman;" href="report.php">Crud </a>
    <a style="font-size:18px;font-family:Time new roman;" href="Reportsearch.php">Search </a>
   
  </div>



  <button style="font-family:Time new roman;font-size:20px;" class="dropdown-btn"> Accounting
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  
    <a style="font-size:18px;font-family:Time new roman;" href="Accountings.php">Crud </a>
    <a style="font-size:18px;font-family:Time new roman;" href="accountingsearch.php">Search </a>
  </div>
   <button style="font-family:Time new roman;font-size:20px;" class="dropdown-btn"> Permission
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  
    <a style="font-size:18px;font-family:Time new roman;" href="permission.php">Crud </a>
    <a style="font-size:18px;font-family:Time new roman;" href="permissionsearch.php">Search </a>
  </div>
  
   <button style="font-family:Time new roman;font-size:20px;" class="dropdown-btn"> User-type link
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  
    <a style="font-size:18px;font-family:Time new roman;" href="usertypelink.php">Crud </a>
    <a style="font-size:18px;font-family:Time new roman;" href="usertypelinkSearch">Search </a>
  </div>
   <a style="margin-top:0px;font-family:Time new roman;font-size:20px;" href="FAQ4HR.php">About us</a>
  
  
   <button style="font-family:Time new roman;font-size:20px;" class="dropdown-btn"> Contact Us
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  
    <a style="font-size:18px;font-family:Time new roman;" href="Contacts.php">Crud </a>
    <a style="font-size:18px;font-family:Time new roman;" href="Commentsearch.php">Search </a>
  </div>
</div> 
<div class="main">

  <div style="margin-left:70px;" class="container">

    <div class="form-group">




<?php
require_once(__ROOT__ . "view/View.php");

class ViewMovies extends View{

	public function output(){
		
		
        $str = "";
		
		
echo"<form   action='storemedicine.php?action=insert' method='post'>";		
                echo"<table style='margin-left:-30px;' class='table table-bordered' >";
               
			
			   

			echo"<tr> ";
				echo"<td>MedicineID </td>";
			
	echo"<td>";
	
	$con = new mysqli("localhost", "root", "","pharmacy");
		$sql="select * from medicine ";


  	$result = mysqli_query($con,$sql);	
		
		
		echo"<select  style='width:120px;' name='MedicineID'>";
		
		while($rows = mysqli_fetch_array($result))
		{
		$ID=$rows['ID'];
		echo"<option value='$ID'>$ID</option>";
		}
		  
		echo"</select>";
		

		
		echo"</td>";
		echo"	</tr>";
					
					
					echo"<tr> ";
				echo"<td>StoreID </td>";
			
	echo"<td>";
	
	$con = new mysqli("localhost", "root", "","pharmacy");
		$sql="select * from store ";


  	$result = mysqli_query($con,$sql);	
		
		
		echo"<select style='width:120px;' name='StoreID'>";
		
		while($rows = mysqli_fetch_array($result))
		{
		$ID=$rows['ID'];
		echo"<option value='$ID'>$ID</option>";
		}
		  
		echo"</select>";
		

		
		echo"</td>";
		echo"	</tr>";
			
			
			echo"<tr> ";
			echo"	<td></td>";
			echo"	<td><input type='submit' style='width:120px;' name='submit' value='Submit'></td>";
			echo"</tr>";
	echo"</table>";
	echo"</form>";
		
		
		$str.="<table  style='margin-left:-30px;' class='table table-bordered' >";
		$str.="<tr>
		<th>ID</th>
		<th>UserID</th>
		<th>LinkID</th>
		
		<th>Edit</th>
		<th>Delete</th>
		</tr>";
		foreach($this->model->getMovies() as $Movie){
			$str.="<tr>";
			$str.="<td>".$Movie->getID() ."  </td> ";
			$str.="<td>".$Movie->getMedicineID() ."  </td> ";
			$str.="<td>" . $Movie->getStoreID() ."</td> ";
			
			$str.="<td>
			<a  class='fas fa-edit' href='storemedicine.php?action=edit&id=".$Movie->getID()."'></a>
			</td>";
			$str.="<td>
			<a  style='color:red;' class='fas fa-trash-alt' href='storemedicine.php?action=delete&id=".$Movie->getID()."'></a>
			</td>";
			$str.="</tr>";
		}
	
		$str.="</table>";
		
		

		return $str;
	}
	
	public function edit($id){
		$str = "";
		$str.="<table style='margin-left:-30px;' class='table table-bordered' >";
		$str.="<tr>
		<th>ID</th>
		<th>MedicineID</th>
		<th>StoreID</th>
		
		<th>Edit</th>
		
		</tr>";
		foreach($this->model->getMovies() as $Movie){
			if($Movie->getID()===$id) 	{
				$str.="<tr>";
				$str.="<form action='storemedicine.php?action=editAction&id=".$Movie->getID()."' method='post'>";
				$str.="<td>".$Movie->getID() ."  </td> ";
				$str.="<td><input style='width:80px;' type='text' name='MedicineID' value='".$Movie->getMedicineID() ."'>  </td> ";
				$str.="<td><input style='width:80px;' type='text' name='StoreID' value='". $Movie->getStoreID() ."'></td> ";
				
				
				
				$str.="<td><input style='width:80px;' type='submit' value='Change'/></td>";
				$str.="</form>";
				$str.="</tr>";
			}
			else	{
				$str.="<tr>";
				$str.="<td>".$Movie->getID() ."  </td> ";
				$str.="<td>".$Movie->getMedicineID() ."  </td> ";
				$str.="<td>" . $Movie->getStoreID() ."</td> ";
				
				

				$str.="<td><a  class='fas fa-edit' href='storemedicine.php?action=edit&id=".$Movie->getID()."'></a></td>";
				$str.="</tr>";
			}
		}
		$str.="</table>";
	
		return $str;
	}
}
?>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active1");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script> 
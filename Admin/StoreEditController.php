<html>
<head>

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
<style>
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
              <a href="adminhome.html" class="js-logo-clone">Trio-Pharma</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a href="adminhome.php">Home</a></li>
               
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
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
    <a style="font-size:18px;font-family:Time new roman;" href="medicineaddcontroller.php">Add </a>
    <a  style="font-size:18px;font-family:Time new roman;" href="MedicineEditController.php">Edit </a>
    <a  style="font-size:16px;font-family:Time new roman;" href="delete_medicine_controller.php">Delete </a>
	<a  style="font-size:18px;font-family:Time new roman;"href="show_medicine_controller.php">View </a>

  </div>
  
    <button style="font-family:Time new roman;font-size:20px;"   class="dropdown-btn" >User 
  <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a style="font-size:18px;font-family:Time new roman;" href="useraddcontroller.php">Add </a>
    <a style="font-size:18px;font-family:Time new roman;" href="UserEditController.php">Edit </a>
    <a style="font-size:18px;font-family:Time new roman;" href="delete_user_controller.php">Delete </a>
    <a style="font-size:18px;font-family:Time new roman;" href="show_user_controller.php">View </a>
	
  </div>
  
   <button style="font-family:Time new roman;font-size:20px;"   class="dropdown-btn" >User-type
  <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a style="font-size:18px;font-family:Time new roman;" href="usertypeaddcontroller.php">Add </a>
    <a style="font-size:18px;font-family:Time new roman;" href="UsertypeEditController.php">Edit </a>
    <a style="font-size:18px;font-family:Time new roman;" href="delete_usertype_controller.php">Delete </a>
    <a style="font-size:18px;font-family:Time new roman;" href="show_usertype_controller.php">View </a>
	
  </div>
  
 <button style="font-family:Time new roman;font-size:20px;" class="dropdown-btn" >Stock 
 <i class="fa fa-caret-down"></i>
 </button>
 <div class="dropdown-container">
    <a style="font-size:18px;font-family:Time new roman;" href="storeaddcontroller.php">Add </a>
    <a style="font-size:18px;font-family:Time new roman;" href="StoreEditController.php">Edit </a>
    <a style="font-size:18px;font-family:Time new roman;" href="delete_store_controller.php">Delete </a>
	<a style="font-size:18px;font-family:Time new roman;" href="show_store_controller.php">View </a>
  </div>
  <button style="font-family:Time new roman;font-size:20px;" class="dropdown-btn" >Inventory
  <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a style="font-size:18px;font-family:Time new roman;" href="inventoryaddcontroller.php">Add </a>
    <a style="font-size:18px;font-family:Time new roman;" href="InventoryEditController.php">Edit </a>
    <a style="font-size:18px;font-family:Time new roman;" href="delete_inventory_controller.php">Delete </a>
	<a style="font-size:18px;font-family:Time new roman;" href="show_inventory_controller.php">View </a>

  </div>
   <button style="font-family:Time new roman;font-size:20px;" class="dropdown-btn">Pharmacy 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a style="font-size:18px;font-family:Time new roman;" href="PharmacyaddController.php">Add </a>
    <a style="font-size:18px;font-family:Time new roman;" href="PharmacyEditController.php">Edit </a>
    <a style="font-size:18px;font-family:Time new roman;" href="delete_allpharmacy_controller.php">Delete </a>
	<a style="font-size:18px;font-family:Time new roman;" href="show_allpharmacy_controller.php">View </a>
  </div>


<button style="font-family:Time new roman;font-size:20px;" class="dropdown-btn"> Vehicle 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a style="font-size:18px;font-family:Time new roman;" href="caraddcontroller.php">Add </a>
    <a style="font-size:18px;font-family:Time new roman;" href="CarEditController.php">Edit </a>
    <a style="font-size:18px;font-family:Time new roman;" href="delete_car_controller.php">Delete </a>
	<a style="font-size:18px;font-family:Time new roman;" href="show-car-controller.php">View </a>
  </div>

<button style="font-family:Time new roman;font-size:20px;" class="dropdown-btn"> Car-Driver 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a style="font-size:18px;font-family:Time new roman;" href="cardriveraddcontroller.php">Add </a>
    <a style="font-size:18px;font-family:Time new roman;" href="CarDriverEditController.php">Edit </a>
    <a style="font-size:18px;font-family:Time new roman;" href="delete-cardriver-controller.php">Delete </a>
	<a style="font-size:18px;font-family:Time new roman;" href="show-cardriver-controller.php">View </a>
  </div>

<button style="font-family:Time new roman;font-size:20px;" class="dropdown-btn"> Store-invenory 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a style="font-size:18px;font-family:Time new roman;" href="storeinventoryaddcontroller.php">Add </a>
    <a style="font-size:18px;font-family:Time new roman;" href="StoreInventoryEditController.php">Edit </a>
    <a style="font-size:18px;font-family:Time new roman;" href="delete_storeinventory_controller.php">Delete </a>
	<a style="font-size:18px;font-family:Time new roman;" href="show_storeinventory_controller.php">View </a>
  </div>


<button style="font-family:Time new roman;font-size:20px;" class="dropdown-btn"> Store-medicine 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a style="font-size:18px;font-family:Time new roman;" href="storemedicineaddcontroller.php">Add </a>
    <a style="font-size:18px;font-family:Time new roman;" href="StoreMedicineEditController.php">Edit </a>
    <a style="font-size:18px;font-family:Time new roman;" href="delete_storemedicine_controller.php">Delete </a>
	<a style="font-size:18px;font-family:Time new roman;" href="show_storemedicine_controller.php">View </a>
  </div>


<button style="font-family:Time new roman;font-size:20px;" class="dropdown-btn"> Payment
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a style="font-size:18px;font-family:Time new roman;" href="paymentaddcontroller.php">Add </a>
    <a style="font-size:18px;font-family:Time new roman;" href="PaymentEditController.php">Edit </a>
    <a style="font-size:18px;font-family:Time new roman;" href="delete_payment_controller.php">Delete </a>
	<a style="font-size:18px;font-family:Time new roman;" href="show_payment_controller.php">View </a>
  </div>
  <button style="font-family:Time new roman;font-size:20px;" class="dropdown-btn"> Accounting
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  
    <a style="font-size:18px;font-family:Time new roman;" href="AccountingEditController.php">Edit </a>
   
  </div>
  
</div> 

<div class="main">

  <div class="container">
 
    <div class="form-group">


<?php
//Controller
require_once ("My_DB.php");
require_once 'StoreModel.php';
require_once 'Storeview.php';

$stdView=new StoreView();
$stdView->form();


?>
</div>
	
	 

  </form>

</div>
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

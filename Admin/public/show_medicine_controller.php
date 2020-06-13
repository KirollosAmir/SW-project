<!DOCTYPE html>
<html>
<head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



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


<nav class="navbar navbar-inverse">

   <div class="container-fluid">

   

    <ul class="nav navbar-nav navbar-right">

     <li class="dropdown">

      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-bell" style="font-size:18px;">Notification</span></a>

      <ul class="dropdown-menu"></ul>
	 
     </li>

    </ul>

   </div>

  </nav>
<div class="main">

  <div class="container">

    <div class="form-group">




<script>

$(document).ready(function(){

// updating the view with notifications using ajax

function load_unseen_notification(view = '')

{

 $.ajax({

  url:"update.php",
  method:"POST",
  data:{view:view},
  dataType:"json",
  success:function(data)

  {

   $('.dropdown-menu').html(data.notification);

   if(data.unseen_notification > 0)
   {
    $('.count').html(data.unseen_notification);
   }

  }

 });

}

load_unseen_notification();

$('#comment_form').on('submit', function(event){
 event.preventDefault();

 if($('#submit').val() != '' && $('#comment').val() != '')

 {

  var form_data = $(this).serialize();

  $.ajax({

   url:"insertEvent.php",
   method:"POST",
   data:form_data,
   success:function(data)

   {

    $('#comment_form')[0].reset();
    load_unseen_notification();

   }

  });

 }

 else

 {
  alert("Both Fields are Required");
 }

});

// load new notifications

$(document).on('click', '.dropdown-toggle', function(){

 $('.count').html('');

 load_unseen_notification('yes');

});

setInterval(function(){

 load_unseen_notification();;

}, 5000);

});


</script>



<?php
//Controller
require_once 'My_DB.php';
require_once 'MedicineModel.php';
require_once 'Medicineview.php';


$stdView=new MedicineView();




$stdView->SelectAll();


?>

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

<head>
 <script>
function isInputNumber(evt) {
  var ch = (evt.which) ? (evt.which) : (evt.keyCode)
  if(ch != 46 && ch > 31 && (ch < 48 || ch > 57)){
return false;
}
else {
	return true;
}
}
  
</script>
  <script>
function a(event) {
  var char = event.which;
  
  if (char >31 && char !=32 && (char < 65 || char > 90 ) && (char < 97 || char > 122)) {
    
    return false;
  }  
}


</script>
<!DOCTYPE html>
<html lang="en">

<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

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
              <a href="HOME.php" class="js-logo-clone">TRIO-Pharma</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a href="HOME.php">Home</a></li>
                
                <li><a href="about.php">About</a></li>
                <li class="active"><a href="contact.php">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            
          </div>
        </div>
      </div>
    </div>


    
            
    
              

<?php
require_once("View.php");

class ViewMovies extends View{

	public function output(){
		
		
        $str = "";
	
		//$str.="<form action='Contacts.php?action=insert' method='post'>";
		$con = new mysqli("localhost", "root", "","pharmacy");
		   
	echo"	   <div style='' class='site-section'>";
    echo"  <div class='container'>";
        echo"<div class='row'>";
         echo" <div class='col-md-12'>";
          echo"  <h2 class='h3 mb-5 text-black'>GET THE HELP YOU NEED</h2>";
         echo" </div>";
       echo"   <div class='col-md-12'>";
    
        
		   
		   
				echo"<form onsubmit='return validation()'  action='Contacts.php?action=insert'  method='post'>";
 echo" <div class='p-3 p-lg-5 border'>";
       echo"   <div class='form-group row'>";
                echo"  <div class='col-md-12'>";			


				echo"<label  class='text-black' >Name <span class='text-danger'>*</span> </label>";
				echo"<td><input  type='text' class='form-control' id='Name' name='Name' onkeypress='return a(event);' required=''  maxlength='20'   ></td>";
			 echo"  </div>";		
			
			  
			 echo"  <div class='col-md-12'>";		
			echo"	<label class='text-black' >Subject <span class='text-danger'>*</span> </label>";
				echo"<td><input  class='form-control'  onkeypress='return a(event);' required='' type='text' name='Subject' ></td>";
				 echo"  </div>";		
			
			
			
			  
			 echo"  <div class='col-md-12'>";		
			echo"	<label class='text-black'>Message <span class='text-danger'>*</span> </label>";
				echo"<td><input   class='form-control' onkeypress='return a(event);' required='' type='text' name='comment' ></td>";
				 echo"  <div>";		
			  echo"   </div>";
			
			
			  echo"   <div class='form-group row'>";
			 echo"  <div class='col-md-12'>";		
				echo"<label class='text-black'>UserTypeID</label>";
			
	
	
		 $con = new mysqli("localhost", "root", "","pharmacy");
		$sql="select * from usertype ";


  	$result = mysqli_query($con,$sql);	
		
		
		echo"<select class='form-control'  name='UserTypeID' >";
		
		while($rows = mysqli_fetch_array($result))
		{
		$ID=$rows['ID'];
		echo"<option value='$ID'>$ID</option>";
		}
		  
		echo"</select>";
		

		
		 echo"  </div>";		
			  echo"   </div>";
			
			
		
		
			  echo"   <div class='form-group row'>";
			 echo"  <div class='col-md-12'>";	
			echo"	<td><input class='btn btn-primary btn-lg btn-block'  type='submit' name='submit' value='Submit'></td>";
			  echo"   </div>";
			 echo"  </div>";	
			  echo"  </div>";	
			 
	
	echo"</form>";
		 echo"  </div>";	
			  echo"  </div>";
			   echo"  </div>";	
			  echo"  </div>";

	
		return $str;
	}
}
?>

       
 


  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
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

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
          
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
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
input[type=text], select {
  width: 80%;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
max-height:40px; 
border-radius:4px;
}
input[type=date], select {
  width:  80%;

  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  max-height:40px; 
  border-radius: 4px;
 
 
}
input[type=submit] {
  width:  80%;
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
              <a href="index.html" class="js-logo-clone">Trio-Pharma</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a href="Table.php">Home</a></li>
               
               
              </ul>
            </nav>
          </div>
          <div class="icons">
           
          </div>
        </div>
      </div>


<div style="margin-left:280px;width:100%;margin-top:-100px;" class="site-section">
      <div class="container">
      
 <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h1 class="h3 mb-3 text-black">Billing Details</h1>
            <div class="p-3 p-lg-5 border">
              <div class="form-group">
               
              </div>
              <div class="form-group row">
                <div class="col-md-12">

<form   action="pdf.php" method="get">

<div class="col-md-6">
 <label for="c_lname" class="text-black">First Name <span class="text-danger">*</span></label> 
 <input type="text" onkeypress='return a(event);' maxlength='15' required='' id="c_fname" name="fname"> 
               </div>
			    
			   
			   <div class="col-md-6">
                  <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                  <input type="text" onkeypress='return a(event);' maxlength='15' required='' id="c_lname" name="lname"> <br>
                </div >
    
    
           <div class="col-md-6">
                  <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                  <input type="text" required='' class="form-control" id="c_address" name="add" placeholder="full address"> <br>
              </div>
    
	
	<div class="col-md-6">
                  <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                  <input type="text"  onkeypress='return isInputNumber(event);' required='' maxlength="11" class="form-control" id="c_phone" name="phone" placeholder="Phone Number"> <br>
                </div>
                  
				  
				  <div class="col-md-6">
				  <label for="c_phone" class="text-black">Payment <span class="text-danger">*</span></label>
				
		<?php
		$con = new mysqli("localhost", "root", "","pharmacy");
		$sql="SELECT * FROM `payment`";
	    $result=mysqli_query($con,$sql);
		
		?>
		<select   name="method">
		<?php 
		while($rows = mysqli_fetch_array($result))
		{
		$Type=$rows['Name'];
		$ID=$rows['ID'];
		echo"<option value='$ID'>$ID.$Type</option>";
		}
		?>
		</select>
		</br>
		</div >
		
		<div class="col-md-6">
         <label for="c_phone" class="text-black">Taxes <span class="text-danger">*</span></label>
				  
				  <?php
		$con = new mysqli("localhost", "root", "","pharmacy");
                $query = "SELECT * FROM accounting "; 
                $result = mysqli_query($con, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?> 
				
				
                  
 <input type="text" onkeypress='return isInputNumber(event);' onkeypress='return a(event);' name="Taxes" value="<?php echo $row["Taxes"]; ?>" />  
               
				
				 <?php  
                     }  
                }  
                ?>  
				
				</div>
				
				<div class="col-md-6">
				
				<?php
				
				
		$con = new mysqli("localhost", "root", "","pharmacy");
                $query = "SELECT * FROM accounting "; 
                $result = mysqli_query($con, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?> 
				<div >
				
                <label class="text-black">Delivery <span class="text-danger">*</span></label>
				  
 <input type="text" name="TransportationCost" value="<?php echo $row["delivery"]; ?>" />  
                </div>
				
				 <?php  
                     }  
                }  
                ?>  
			<div class="col-md-6">
				 <label for='c_address' class='text-black'>Price <span class='text-danger'>*</span></label>
				
				<input type="text" name="Prices" value="<?php echo $a=$_GET['Total'];?>" />  
				
				</div>
				  <div class="col-md-6">
				    <input type="submit" name='submit' style="margin-left:-140px;margin-top:100px;width:500px;height:100px;" onclick="addData(this)" class="button" value="Submit">
                  </div >
         </form>
               
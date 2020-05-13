
   <head>  
          
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
                <li><a href="adminhome.html">Home</a></li>
               
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
           
          </div>
        </div>
      </div>

<form   action="pdf.php" method="get">
 <label for="c_lname" class="text-black">First Name <span class="text-danger">*</span></label> 
 <input type="text"  id="c_fname" name="fname"> <br>
               
                  <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                  <input type="text"  id="c_lname" name="lname"> <br>
                
    
    
           
                  <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_address" name="add" placeholder="full address"> <br>
              
    
                  <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_phone" name="phone" placeholder="Phone Number"> <br>
                
                  
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
				
				
                  
 <input type="text" name="Taxes" value="<?php echo $row["Taxes"]; ?>" />  
               
				
				 <?php  
                     }  
                }  
                ?>  
				
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
			
				 <label for='c_address' class='text-black'>Price <span class='text-danger'>*</span></label>
				
				<input type="text" name="Prices" value="<?php echo $a=$_GET['Total'];?>" />  
				
				
				  
				    <input type="submit" name='submit'  onclick="addData(this)" class="button" value="Add">
                  
         </form>
               
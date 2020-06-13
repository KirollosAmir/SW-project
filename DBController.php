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

 <html>  
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

.card {

  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin-left:20px;;
  text-align: center;
  font-family: arial;
  height:450px;


.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: orange;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}


.card2 button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: orange;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card2 button:hover {
  opacity: 0.7;
}


.card3 button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: orange;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card3 button:hover {
  opacity: 0.7;
}


.card4 button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: orange;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card4 button:hover {
  opacity: 0.7;
}


.product
{
	background-color:orange;
	margin-top:90px;
}

.product1
{
	background-color:orange;
	
}



.emotcart
{ border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: red;
  text-align: center;
  cursor: pointer;
  width: auto;
  margin-left:1200px;
  font-size: 15px;
}

.

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
                <li><a href="allhome.php">Home</a></li>
               
                <li><a href="about.php">About</a></li>
                <li><a href="Contacts.php">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
           
          </div>
        </div>
      </div>

           <br />  
           <div class="container" style="width:900px;">  
               
                <?php  
				 $connect = mysqli_connect("localhost", "root", "", "pharmacy");  
                $query = "SELECT * FROM customerorder ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  
                     <form method="post" action="User/public/Table.php?action=add&id=<?php echo $row["ID"]; ?>">  
                          <div class="card"style="border:1px solid #333; background-color:white; border-radius:5px; padding:16px;" align="center">
							<h4  style="font-family:Time new roman;font-size:30px;color:black;"><?php echo $row["ProductName"]; ?></h4>  						  
                               <img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />  
                            <h4 style="font-family:Time new roman;color:black;"><?php echo $row["ProductDescription"]; ?></h4>  	
                               <h4 class="text-danger">$ <?php echo $row["ProductPrice"]; ?></h4>  
                               <input type="text" name="quantity" onkeypress='return isInputNumber(event);' class="form-control" value="1" />  
                               <input type="hidden" name="ProductName" value="<?php echo $row["ProductName"]; ?>" />  
                               <input type="hidden" name="ProductPrice" value="<?php echo $row["ProductPrice"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
            
           </div>  
           <br />  
      </body>  
 </html>
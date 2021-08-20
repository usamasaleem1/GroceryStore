<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="project.css">
	
	<title>Careers</title>
	<link rel="icon" href="trolley.png">
</head>

<body>

<!-- Nav bar -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
	<img src="trolley.png" class="navbar-brand" style="width: 40px;">
	<a class="navbar-brand" href="#">Online Grocery Shopping</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	<ul class="navbar-nav mr-auto mx-auto">
	  <li class="nav-item active">
		<a class="nav-link" href="home.php">Home <span class="sr-only"></span></a>
	  </li>
	  <li class="nav-item active">
		<a class="nav-link" href="AllProducts.php">All Products</a>
	  </li>
	  <li class="nav-item dropdown active">
		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		  Aisles
		</a>
		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		  <a class="dropdown-item" href="meataisle.php">Meat</a>
		  <a id="disabled" class="dropdown-item" href="dairy.php">Dairy</a>  
		  <a id="disabled" class="dropdown-item" href="beveragesaisle.php">Beverages</a>
		  <a id="disabled" class="dropdown-item" href="detergents.php">Detergents</a>
		<a id="disabled" class="dropdown-item" href="snacks.php">Snacks</a>
		  <a id="disabled" class="dropdown-item" href="alcohol.php">Alcohol</a>
		</div>
	  </li>
	  <li class="nav-item active">
		<a class="nav-link disabled" href="contact.php">Contact Us</a>
	  </li>
	</ul>
	<br>
	<form class="form-inline my-2 my-lg-0">
	  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="background-color: #343A40;">
	  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	  <a class="btn btn-outline-primary ml-1" href="signinpage.php">Sign in</a>
	</form>
  </div>
</nav>



<!-- go to cart
<div class="d-flex flex-column flex-md-row align-items-center p-2 px-md-4 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal" style="background-color: white;"></h5>
      <nav class="my-2 my-md-0 mr-md-3">
        
      </nav>
      <a class="btn btn-outline-primary" href="cart.php">Go To Cart <img src="trolley.png" width="30px" height="30px"> </a>
    </div> -->



<!-- Main body -->
<main>
	<div style="text-align:center; margin-top:2%;">
	<h2>Sorry, but we are not currently hiring!</h2>
	<h5>For any questions and to stay up to date with our careers, please don't hesitate to <a href="contact.php">contact us</a>.</h5>
</main>
     
  
    
   <!-- footer -->
   	<footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <p></p>
            <small class="d-block mb-3 text-muted"></small>
          </div>
          <div class="col-6 col-md">
            <h5>Contacts</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="contact.php">Manager</a></li>
              <li><a class="text-muted" href="contact.php">Supervisor</a></li>
              <li><a class="text-muted" href="contact.php">Our Team</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Careers</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="careers.php">Meat Section</a></li>
              <li><a class="text-muted" href="careers.php">Delivery</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="contact.php">Team</a></li>
              <li><a class="text-muted" href="https://www.google.com/maps/place/11011+Bd+Maurice-Duplessis,+Montr%C3%A9al,+QC+H1C+1V3/@45.6660703,-73.5345729,17z/data=!3m1!4b1!4m5!3m4!1s0x4cc8e1759aa6762d:0x80db5bbbc6e3d671!8m2!3d45.6660703!4d-73.5323842" target="_blank">Location</a></li>
              <li><a class="text-muted" href="terms.php">Privacy</a></li>
              <li><a class="text-muted" href="terms.php">Terms</a></li>
            </ul>
          </div>
        </div>
      </footer>

  
</body>
</html>
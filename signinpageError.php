<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="project.css">
	<link rel="stylesheet" type="text/css" href="signinup.css">
	
	<meta charset="utf-8">
	<title>Sign In</title>
	<link rel="icon" href="trolley.png">

</head>
<body>


<!-- Nav bar -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<img src="trolley.png" class="navbar-brand" style="width: 40px;">
	<a class="navbar-brand" href="#">Online Grocery Shopping</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	<ul class="navbar-nav mr-auto mx-auto">
	  <li class="nav-item active">
		<a class="nav-link" href="home.html">Home <span class="sr-only"></span></a>
	  </li>
	  <li class="nav-item active">
		<a class="nav-link" href="AllProducts.html">All Products</a>
	  </li>
	  <li class="nav-item dropdown active">
		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		  Aisles
		</a>
		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		  <a class="dropdown-item" href="meataisle.html">Meat</a>
		  <a id="disabled" class="dropdown-item" href="dairy.html">Dairy</a>  
		  <a id="disabled" class="dropdown-item" href="beveragesaisle.html">Beverages</a>
		  <a id="disabled" class="dropdown-item" href="detergents.html">Detergents</a>
		<a id="disabled" class="dropdown-item" href="snacks.html">Snacks</a>
		  <a id="disabled" class="dropdown-item" href="alcohol.html">Alcohol</a>
		</div>
	  </li>
	  <li class="nav-item active">
		<a class="nav-link disabled" href="contact.html">Contact Us</a>
	  </li>
	</ul>
	<br>
	<form class="form-inline my-2 my-lg-0">
	  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="background-color: #343A40;">
	  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	  <a class="btn btn-outline-primary ml-1" href="signinpage.html">Sign in</a>
	</form>
  </div>
</nav>


<!-- main section -->
<main>
		<div class="middle">
			<h1 class="topspacing">Invalid credentials: Try again!</h1>
			<img src="avatar.png" class="middle"><br>
			<form action="authenticate.php" method="post">
				<input class="spacing" type="text" name="email" placeholder="Email" required><br>
				<input class="spacing" type="password" name="password" placeholder="Password" required><br>
				<a class="spacing" href="forgotpassword.html">Forgot Password?</a><br>
				<input class="spacing" type="submit" name="submit" value="Login"> <br>
				<input type="checkbox" name="remember"> Remember me
			</form>
			<a href="signuppage.php">Don't have an account? Sign up for one now!</a><br>
		</div>



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
              <li><a class="text-muted" href="contact.html">Manager</a></li>
              <li><a class="text-muted" href="contact.html">Supervisor</a></li>
              <li><a class="text-muted" href="contact.html">Our Team</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Careers</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="careers.html">Meat Section</a></li>
              <li><a class="text-muted" href="careers.html">Delivery</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="contact.html">Team</a></li>
              <li><a class="text-muted" href="https://www.google.com/maps/place/11011+Bd+Maurice-Duplessis,+Montr%C3%A9al,+QC+H1C+1V3/@45.6660703,-73.5345729,17z/data=!3m1!4b1!4m5!3m4!1s0x4cc8e1759aa6762d:0x80db5bbbc6e3d671!8m2!3d45.6660703!4d-73.5323842" target="_blank">Location</a></li>
              <li><a class="text-muted" href="terms.html">Privacy</a></li>
              <li><a class="text-muted" href="terms.html">Terms</a></li>
            </ul>
          </div>
        </div>
      </footer>


</body>
</html>
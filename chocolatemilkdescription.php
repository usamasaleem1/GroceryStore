<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<?php 

$connect = mysqli_connect('remotemysql.com:3306', 'HTADFpjYkD', 'wfJDJmJgdL', 'HTADFpjYkD');

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="project.css">
	
	<meta charset="utf-8">
	<title>Chocolate Milk</title>
	<link rel="icon" href="milkicon.png">

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
					<a class="nav-link" href="home.php">Home <span class="sr-only"></span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="AllProducts.php>All Products</a>
				</li>
				<li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Aisles
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="aisles.php?aisle=Meat">Meat</a>
						<a id="disabled" class="dropdown-item" href="aisles.php?aisle=Dairy">Dairy</a>  
						<a id="disabled" class="dropdown-item" href="aisles.php?aisle=Beverages">Beverages</a>
						<a id="disabled" class="dropdown-item" href="aisles.php?aisle=Detergents">Detergents</a>
						<a id="disabled" class="dropdown-item" href="aisles.php?aisle=Snacks">Snacks</a>
						<a id="disabled" class="dropdown-item" href="aisles.php?aisle=Alcohol">Alcohol</a>
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
				<?php if(isset($_SESSION['loggedin'])){ ?>
					<a class="btn btn-outline-primary ml-1" href="logout.php">Log Out</a>
				<?php }else{ ?>
					<a class="btn btn-outline-primary ml-1" href="signinpage.php">Sign in</a>
				<?php } ?>
			</form>
		</div>
	</nav>


	<!-- go to cart -->
	<div class="d-flex flex-column flex-md-row align-items-center p-2 px-md-4 bg-white border-bottom box-shadow">
		<h5 class="my-0 mr-md-auto font-weight-normal" style="background-color: white;"></h5>
		<nav class="my-2 my-md-0 mr-md-3">

		</nav>
		<a class="btn btn-outline-primary" href="cart.php">Go To Cart <img src="trolley.png" width="30px" height="30px"> </a>
	</div>


	<!-- main section -->
	<main>
		<div class="row justify-content-center">
			<div class="col-sm-6 col-md-6 col-xl-3 mb-3 pr-0">

				<img class="img-thumbnail mb-3 pr-0" src="choco.png" alt="Chocolate Milk Bottle" width="960" height="600">

			</div>

			<div class="col-sm-6 col-md-6 col-xl-3 mb-3">
				<h5 class="mb-4 pl-2" style="text-align: left;">MILK 2GO Chocolate Milk</h5>
				<h5 class="mb-5 pl-2" id="price" style="text-align: left;">$2.25</h5>


				<!-- more description -->

				<div id="accordion">
					<div class="card">
						<div class="card-header" id="headingTwo">

							<h5 class="mb-0">
								<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									More Description
								</button>
							</h5>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
							<div class="card-body">
								MILK 2GO's 310mL chocolate milk bottle has a resealable cap and is made with fresh milk. Perfect size for everyone.
							</div>
						</div>
					</div>

				</div>

				<!--Add to cart  -->
				<?php

				$query = "SELECT * FROM products ORDER BY id ASC";
				$result = mysqli_query($connect, $query);


				if (mysqli_num_rows($result) > 0) {

					while( $row = mysqli_fetch_array($result) ); 
					{

						?>


						<form method="post" action="cart.php?action=add&id=6">
							<div class="form-group mt-4">
								<label for="exampleInputPassword1">Quantity</label>
								<input id="cartCount" onchange="updateCartPrice()" type="number" style="width: 100px;" class="form-control" value="1" id="cart" placeholder="Quantity" name="quantity">
							</div>

							<input type="hidden" name="hidden_name" value="Chocolate Milk" >
							<input type="hidden" name="hidden_price" value="2.25">
							<button id="addToCartButton" type="submit" class="btn btn-primary" name="add">Add To Cart</button>
						</form>
						<?php
					}
				}
				?>


			</div>
		</div>
		<script onload="updateCartPrice()" src="addtocart.js"></script>

	</main>



	<!-- special offer -->
	<main>
		<div class="jumbotron">
			<h2>Special Offer!</h2>
			<p class="lead">Free Delivery for orders over $150</p>
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
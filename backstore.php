<?php 
include ('index.php');
// include('dbcon.php'); 
// $_SESSION['email']=$row['email'];
// if ($password == "admin" && $email == "admin"){
//     header('location:backstore.php');
// } else {
//     header('location:home.html');
// }

// $session_id=$_SESSION['email'];


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
	<title>Backstore</title>
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
	  <a class="btn btn-outline-primary ml-1" href="signinpage.php">Sign in</a>
	</form>
  </div>
</nav>


<!-- section name -->
<div class="d-flex flex-column flex-md-row align-items-center p-2 px-md-4 bg-white border-bottom box-shadow">
	<h5 class="my-0 mr-md-auto font-weight-normal" style="margin:auto;">Backstore</h5>
	 <a class="btn btn-outline-primary" href="backstoreEdit.html">Add <img src="edit.png" width="30px" height="30px"> </a>
	 <a class="btn btn-outline-success" href="backstoreEdit.html">Edit <img src="edit.png" width="30px" height="30px"> </a>
	 <a class="btn btn-outline-danger" href="backstoreEdit.html">Delete Items <img src="edit.png" width="30px" height="30px"> </a>
  </div>

<!-- main section -->
<br>
<main>
		<table class="table table-hover text-center">
			<thead>
			<tr>
				<th scope="col"><input type="checkbox" aria-label="Checkbox for following text input"></th>
				<th scope="col"></th>
				<th scope="col">Product</th>
				<th scope="col">Type</th>
				<th scope="col">Inventory</th>
				<th scope="col">Price</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<th class="align-middle text-center" scope="col"><input type="checkbox" class="align-middle" aria-label="Checkbox for following text input"></th>
				<td class="align-middle text-center"><img class="img-fluid" src="leanbeef.jpg" alt="Album screenshot" width="100"></td>
				<td class="align-middle text-center">Extra Lean Beef</td>
				<td class="align-middle text-center">Meat</td>
				<td class="align-middle text-center">10 in stock</td>
				<td class="align-middle text-center">$12.20/kg</td>
			</tr>
			<tr>
				<th class="align-middle text-center" scope="col"><input type="checkbox" class="align-middle" aria-label="Checkbox for following text input"></th>
				<td class="align-middle text-center"><img class="img-fluid" src="pork.jpg" alt="Album screenshot" width="100"></td>
				<td class="align-middle text-center">Pork Ribs</td>
				<td class="align-middle text-center">Meat</td>
				<td class="align-middle text-center">12 in stock</td>
				<td class="align-middle text-center">$10.50/kg</td>
			</tr>
			<tr>
				<th class="align-middle text-center" scope="col"><input type="checkbox" class="align-middle" aria-label="Checkbox for following text input"></th>
				<td class="align-middle text-center"><img class="img-fluid" src="chicken.jpg" alt="Album screenshot" width="100"></td>
				<td class="align-middle text-center">Chicken Breast</td>
				<td class="align-middle text-center">Meat</td>
				<td class="align-middle text-center">5 in stock</td>
				<td class="align-middle text-center">$16.75/kg</td>
			</tr>
			<tr>
				<th class="align-middle text-center" scope="col"><input type="checkbox" class="align-middle" aria-label="Checkbox for following text input"></th>
				<td class="align-middle text-center"><img class="img-fluid" src="steak.jpg" alt="Album screenshot" width="100"></td>
				<td class="align-middle text-center">Steak</td>
				<td class="align-middle text-center">Meat</td>
				<td class="align-middle text-center">6 in stock</td>
				<td class="align-middle text-center">$15.00/kg</td>
			</tr>
			<tr>
				<th class="align-middle text-center" scope="col"><input type="checkbox" class="align-middle" aria-label="Checkbox for following text input"></th>
				<td class="align-middle text-center"><img class="img-fluid" src="milk.png" alt="Album screenshot" width="100"></td>
				<td class="align-middle text-center">Milk</td>
				<td class="align-middle text-center">Dairy</td>
				<td class="align-middle text-center">13 in stock</td>
				<td class="align-middle text-center">$4.40</td>
			</tr>
			<tr>
				<th class="align-middle text-center" scope="col"><input type="checkbox" class="align-middle" aria-label="Checkbox for following text input"></th>
				<td class="align-middle text-center"><img class="img-fluid" src="yogurt.png" alt="Album screenshot" width="100"></td>
				<td class="align-middle text-center">Yogurt</td>
				<td class="align-middle text-center">Dairy</td>
				<td class="align-middle text-center">12 in stock</td>
				<td class="align-middle text-center">$5.99</td>
			</tr>
			<tr>
				<th class="align-middle text-center" scope="col"><input type="checkbox" class="align-middle" aria-label="Checkbox for following text input"></th>
				<td class="align-middle text-center"><img class="img-fluid" src="choco.png" alt="Album screenshot" width="100"></td>
				<td class="align-middle text-center">Chocolate Milk</td>
				<td class="align-middle text-center">Dairy</td>
				<td class="align-middle text-center">14 in stock</td>
				<td class="align-middle text-center">$2.25</td>
			</tr>
			<tr>
				<th class="align-middle text-center" scope="col"><input type="checkbox" class="align-middle" aria-label="Checkbox for following text input"></th>
				<td class="align-middle text-center"><img class="img-fluid" src="ParmesanCheese.png" alt="Album screenshot" width="100"></td>
				<td class="align-middle text-center">Parmesan Cheese</td>
				<td class="align-middle text-center">Dairy</td>
				<td class="align-middle text-center">4 in stock</td>
				<td class="align-middle text-center">$24.50/kg</td>
			</tr>
			<tr>
				<th class="align-middle text-center" scope="col"><input type="checkbox" class="align-middle" aria-label="Checkbox for following text input"></th>
				<td class="align-middle text-center"><img class="img-fluid" src="san.png" alt="Album screenshot" width="100"></td>
				<td class="align-middle text-center">Sanpellegrino (Lemonade)</td>
				<td class="align-middle text-center">Beverages</td>
				<td class="align-middle text-center">15 in stock</td>
				<td class="align-middle text-center">$1.50</td>
			</tr>
			<tr>
				<th class="align-middle text-center" scope="col"><input type="checkbox" class="align-middle" aria-label="Checkbox for following text input"></th>
				<td class="align-middle text-center"><img class="img-fluid" src="san2.png" alt="Album screenshot" width="100"></td>
				<td class="align-middle text-center">Sanpellegrino (Pomengranate)</td>
				<td class="align-middle text-center">Beverages</td>
				<td class="align-middle text-center">21 in stock</td>
				<td class="align-middle text-center">$1.50</td>
			</tr>
			<tr>
				<th class="align-middle text-center" scope="col"><input type="checkbox" class="align-middle" aria-label="Checkbox for following text input"></th>
				<td class="align-middle text-center"><img class="img-fluid" src="mtndew.png" alt="Album screenshot" width="100"></td>
				<td class="align-middle text-center">Mountain Dew</td>
				<td class="align-middle text-center">Beverages</td>
				<td class="align-middle text-center">23 in stock</td>
				<td class="align-middle text-center">$2.00</td>
			</tr>
			<tr>
				<th class="align-middle text-center" scope="col"><input type="checkbox" class="align-middle" aria-label="Checkbox for following text input"></th>
				<td class="align-middle text-center"><img class="img-fluid" src="coke.png" alt="Album screenshot" width="100"></td>
				<td class="align-middle text-center">Coca-Cola</td>
				<td class="align-middle text-center">Beverages</td>
				<td class="align-middle text-center">24 in stock</td>
				<td class="align-middle text-center">$2.00</td>
			</tr>
			<tr>
				<th class="align-middle text-center" scope="col"><input type="checkbox" class="align-middle" aria-label="Checkbox for following text input"></th>
				<td class="align-middle text-center"><img class="img-fluid" src="gain.png" alt="Album screenshot" width="100"></td>
				<td class="align-middle text-center">Gain Wash</td>
				<td class="align-middle text-center">Detergent</td>
				<td class="align-middle text-center">11 in stock</td>
				<td class="align-middle text-center">$16.00</td>
			</tr>
			<tr>
				<th class="align-middle text-center" scope="col"><input type="checkbox" class="align-middle" aria-label="Checkbox for following text input"></th>
				<td class="align-middle text-center"><img class="img-fluid" src="tide.png" alt="Album screenshot" width="100"></td>
				<td class="align-middle text-center">Tide Ultra</td>
				<td class="align-middle text-center">Detergent</td>
				<td class="align-middle text-center">15 in stock</td>
				<td class="align-middle text-center">$12.00</td>
			</tr>
			<tr>
				<th class="align-middle text-center" scope="col"><input type="checkbox" class="align-middle" aria-label="Checkbox for following text input"></th>
				<td class="align-middle text-center"><img class="img-fluid" src="persil.png" alt="Album screenshot" width="100"></td>
				<td class="align-middle text-center">Persil Pro-Clean</td>
				<td class="align-middle text-center">Detergent</td>
				<td class="align-middle text-center">12 in stock</td>
				<td class="align-middle text-center">$12.75</td>
			</tr>
			<tr>
				<th class="align-middle text-center" scope="col"><input type="checkbox" class="align-middle" aria-label="Checkbox for following text input"></th>
				<td class="align-middle text-center"><img class="img-fluid" src="oxy.png" alt="Album screenshot" width="100"></td>
				<td class="align-middle text-center">Oxy-clean Variety Pack</td>
				<td class="align-middle text-center">Detergent</td>
				<td class="align-middle text-center">14 in stock</td>
				<td class="align-middle text-center">$16.75</td>
			</tr>
			<tr>
				<th class="align-middle text-center" scope="col"><input type="checkbox" class="align-middle" aria-label="Checkbox for following text input"></th>
				<td class="align-middle text-center"><img class="img-fluid" src="snickers.jpg" alt="Album screenshot" width="100"></td>
				<td class="align-middle text-center">Snickers Bar</td>
				<td class="align-middle text-center">Snacks</td>
				<td class="align-middle text-center">15 in stock</td>
				<td class="align-middle text-center">$1.15</td>
			</tr>
			<tr>
				<th class="align-middle text-center" scope="col"><input type="checkbox" class="align-middle" aria-label="Checkbox for following text input"></th>
				<td class="align-middle text-center"><img class="img-fluid" src="tv_bar.jpg" alt="Album screenshot" width="100"></td>
				<td class="align-middle text-center">TV Bar</td>
				<td class="align-middle text-center">Snacks</td>
				<td class="align-middle text-center">5 in stock</td>
				<td class="align-middle text-center">$1.00</td>
			</tr>
			<tr>
				<th class="align-middle text-center" scope="col"><input type="checkbox" class="align-middle" aria-label="Checkbox for following text input"></th>
				<td class="align-middle text-center"><img class="img-fluid" src="pringles.jpg" alt="Album screenshot" width="100"></td>
				<td class="align-middle text-center">Pringles</td>
				<td class="align-middle text-center">Snacks</td>
				<td class="align-middle text-center">52 in stock</td>
				<td class="align-middle text-center">$2.00</td>
			</tr>
			<tr>
				<th class="align-middle text-center" scope="col"><input type="checkbox" class="align-middle" aria-label="Checkbox for following text input"></th>
				<td class="align-middle text-center"><img class="img-fluid" src="maltesers.jpg" alt="Album screenshot" width="100"></td>
				<td class="align-middle text-center">Maltesers</td>
				<td class="align-middle text-center">Snacks</td>
				<td class="align-middle text-center">12 in stock</td>
				<td class="align-middle text-center">$2.50</td>
			</tr>
			<tr>
				<th class="align-middle text-center" scope="col"><input type="checkbox" class="align-middle" aria-label="Checkbox for following text input"></th>
				<td class="align-middle text-center"><img class="img-fluid" src="seltzer.png" alt="Album screenshot" width="100" style="object-fit: contain; height: 100px;"></td>
				<td class="align-middle text-center">Happy Dad</td>
				<td class="align-middle text-center">Alcohol</td>
				<td class="align-middle text-center">4 in stock</td>
				<td class="align-middle text-center">$2.00</td>
			</tr>
			<tr>
				<th class="align-middle text-center" scope="col"><input type="checkbox" class="align-middle" aria-label="Checkbox for following text input"></th>
				<td class="align-middle text-center"><img class="img-fluid" src="beer.png" alt="Album screenshot" width="100" style="object-fit: contain; height: 100px;"></td>
				<td class="align-middle text-center">Heineken</td>
				<td class="align-middle text-center">Alcohol</td>
				<td class="align-middle text-center">15 in stock</td>
				<td class="align-middle text-center">$4.00</td>
			</tr>
			<tr>
				<th class="align-middle text-center" scope="col"><input type="checkbox" class="align-middle" aria-label="Checkbox for following text input"></th>
				<td class="align-middle text-center"><img class="img-fluid" src="wine.png" alt="Album screenshot" width="100" style="object-fit: contain; height: 100px;"></td>
				<td class="align-middle text-center">Barefoot</td>
				<td class="align-middle text-center">Alcohol</td>
				<td class="align-middle text-center">8 in stock</td>
				<td class="align-middle text-center">$10.00</td>
			</tr>
			<tr>
				<th class="align-middle text-center" scope="col"><input type="checkbox" class="align-middle" aria-label="Checkbox for following text input"></th>
				<td class="align-middle text-center"><img class="img-fluid" src="moscato.png" alt="Album screenshot" width="100" style="object-fit: contain; height: 100px;"></td>
				<td class="align-middle text-center">Castello del Poggio Moscato</td>
				<td class="align-middle text-center">Alcohol</td>
				<td class="align-middle text-center">10 in stock</td>
				<td class="align-middle text-center">$15.00</td>
			</tr>
			</tbody>
		</table>


</body>
</html>
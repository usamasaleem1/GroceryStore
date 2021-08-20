<?php 
include ('index.php');
include('dbcon.php'); 
include('authenticate.php'); 
include('session.php'); 

// //Start session
session_start();
verifyAdmin();

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
	<h5 class="my-0 mr-md-auto font-weight-normal" style="margin:auto;">Edit User</h5>
  </div>

<!-- main section -->
<br>
<main class="m-5">
    <h1>Edit User</h1>
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="inputState" class="col-form-label">User</label>
            <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>abc12@gmail.com</option>
                <option>yu287@concordia.ca</option>
                <option>Yesssirrr@gmail.com</option>
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="colFormLabel" class="col-form-label">Gender</label>
            <input  class="form-control" id="colFormLabel" placeholder="Gender">
        </div>
        <div class="form-group col-md-2">
            <label for="colFormLabel" class="col-form-label">Age</label>
            <input class="form-control" id="colFormLabel" placeholder="Age">
        </div>
        <div class="form-group col-md-2">
            <label for="colFormLabel" class="col-form-label">Password</label>
            <input class="form-control" id="colFormLabel" placeholder="Change Password">
        </div>
    </div>
    <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Reason for edit</label>
        <div class="col-md-7">
            <textarea  class="form-control" id="colFormLabel" placeholder="Input a reason for history log"></textarea>
        </div>
    </div>

    <a href="backstoreUserList.html">
        <button type="button" class="btn btn-primary">Save</button>
    </a>

</body>
</html>
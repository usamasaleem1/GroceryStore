<?php 
session_start();
//include ('index.php');
include('dbcon.php'); 
include('authenticate.php'); 
include('session.php'); 


if($_SESSION['permission'] != 'admin')
{
header('location:home.php');
}


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
	        <?php if(isset($_SESSION['loggedin'])){ ?>
        <a class="btn btn-outline-primary ml-1" href="logout.php">Log Out</a>
    <?php }else{ ?>
        <a class="btn btn-outline-primary ml-1" href="signinpage.php">Sign in</a>
    <?php } ?>
	</form>
  </div>
</nav>


<!-- section name -->
<div class="d-flex flex-column flex-md-row align-items-center p-2 px-md-4 bg-white border-bottom box-shadow">
	<h5 class="my-0 mr-md-auto font-weight-normal" style="margin:auto;">Add Product</h5>
  </div>

<!-- main section -->
<br>
<main class="m-5">


    <h1>Edit Product</h1>

	<form action="" method="post">

	<div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label">ID</label>
        <div class="col-md-7">
          <input  class="form-control" id="colFormLabel" placeholder="ID" name="id">
        </div>
    </div>

    <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Product Name</label>
        <div class="col-md-7">
          <input  class="form-control" id="colFormLabel" placeholder="Product Name" name="name">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="colFormLabel" class="col-form-label">Type</label>
            <input  class="form-control" id="colFormLabel" placeholder="Type" name="type">
        </div> 
        <div class="form-group col-md-2">
            <label for="colFormLabel" class="col-form-label">Price</label>
            <input  class="form-control" id="colFormLabel" placeholder="Price" name="price">
        </div>
            <div class="form-group col-md-2">
            <label for="colFormLabel" class="col-form-label">Stock count</label>
            <input class="form-control" id="colFormLabel" placeholder="Stock count" name="count">
        </div>

    </div>

    <div class="custom-file col-md-2">
        <label for="customFile" class="col-form-label">Stock count</label>
        <label class="custom-file-label" for="customFile">Image file</label>
        <input type="file" class="custom-file-input" id="customFile">
    </div>

    <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Description</label>
        <div class="col-md-7">
            <textarea  class="form-control" id="colFormLabel" placeholder="Description" name="description"></textarea>
        </div>
    </div>

	

    <a href="backstore.php">
        <button type="submit" class="btn btn-primary" name="save">Save</button>
    </a>

	</form>

</body>

<?php
if(isset($_POST["save"]))
{
	mysqli_query($conn, "insert into products values(NULL,'$_POST(name)','$_POST(price)','$_POST(description)','$_POST(customFile)')")
}

?>

</html>
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
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BackstoreOrder</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="project.css">
	
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
	<h5 class="my-0 mr-md-auto font-weight-normal" style="margin:auto;">Backstore Order List Editor</h5>
   <button class="btn btn-outline-primary"> Add <img src="edit.png" width="30px" height="30px"> </button>
	 <button class="btn btn-outline-primary">Delete Items <img src="edit.png" width="30px" height="30px"> </button>
   <button class="btn btn-outline-primary">Save <img src="edit.png" width="30px" height="30px"> </button>
   <a class="btn btn-outline-primary" href="backstoreOrderEdit.php">Edit Items <img src="edit.png" width="30px" height="30px"> </a>
  </div>

<!-- Order information table -->
<table class="table">
    <thead>
      <tr>
        <th scope="col">Order ID</th>
        <th scope="col">Order Date</th>
        <th scope="col">Total</th>
        <th scope="col">Ordered by</th>
        <th scope="col">Address</th>
        <th scope="col">Order Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>
            <input type="date" id="start" name="trip-start"
            value="2020-04-20"
            min="1969-04-20" max="2169-06-09">
        </td>
        <td><input type="text" id="total" name="total" value="Placeholder"></td>
        <td><input type="text" id="orderName" name="orderName" value="Placeholder"></td>
        <td><input type="text" id="address" name="address" value="Placeholder"></td>
        <td>
          <select name="status" id="status">
            <option value="selivered">Delivered</option>
            <option value="sending">Pending</option>
            <option value="shipped">Shipped</option>
            <option value="cancelled">Cancelled</option>
          </select>
        </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>
            <input type="date" id="start" name="trip-start"
            value="2020-04-20"
            min="1969-04-20" max="2169-06-09">
        </td>
        <td><input type="text" id="total" name="total" value="Placeholder"></td>
        <td><input type="text" id="orderName" name="orderName" value="Placeholder"></td>
        <td><input type="text" id="address" name="address" value="Placeholder"></td>
        <td>
          <select name="status" id="status">
            <option value="selivered">Delivered</option>
            <option value="sending">Pending</option>
            <option value="shipped">Shipped</option>
            <option value="cancelled">Cancelled</option>
          </select>
        </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>
            <input type="date" id="start" name="trip-start"
            value="2020-04-20"
            min="1969-04-20" max="2169-06-09">
        </td>
        <td><input type="text" id="total" name="total" value="Placeholder"></td>
        <td><input type="text" id="orderName" name="orderName" value="Placeholder"></td>
        <td><input type="text" id="address" name="address" value="Placeholder"></td>
        <td>
          <select name="status" id="status">
            <option value="selivered">Delivered</option>
            <option value="sending">Pending</option>
            <option value="shipped">Shipped</option>
            <option value="cancelled">Cancelled</option>
          </select>
        </td>
      </tr>
    </tbody>
  </table>

  </body>
</html>

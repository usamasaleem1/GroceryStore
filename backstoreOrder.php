<?php 
$dbhost = 'remotemysql.com:3306';
$dbuser = 'HTADFpjYkD';
$dbpass = 'wfJDJmJgdL';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbuser);

if(! $conn ) {
   die('Could not connect: ' . mysqli_error());
}


if ($conn)
{
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
      $order_id = $_GET['order_id'];
      $product_name = $_GET['product_name'];	
      $query = "DELETE FROM orders_products WHERE order_id = '$order_id' AND product_name='$product_name'";
      $conn->query($query);
  }

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order_id = $_GET['order_id'];
    $product_name = $_POST['product_name'];	
    $product_price = $_POST['product_price'];
    $product_quantity = $_POST['product_quantity'];
    $query = "UPDATE orders_products SET product_name = '$product_name', product_price = '$product_price', 
              product_quantity = '$product_quantity' WHERE order_id = '$order_id'";
    $conn->query($query);
  }
}

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

<!-- section name -->
<div class="d-flex flex-column flex-md-row align-items-center p-2 px-md-4 bg-white border-bottom box-shadow">
	<button type='submit' style="background-color:#343A40; border-radius:30x; width:100px; height:40px; margin-right:5px;" id="borderradius" name='userlist'><a href='backstore.php' style='color:white; border-radius:30x;'>Backstore</a></button>
	<button type='submit' style="background-color:#343A40; border-radius:30x; width:100px; height:40px;" id="borderradius" name='userlist'><a href='backstoreUserList.php' style='color:white; border-radius:30x;'>User List</a></button>
	<h5 class="my-0 mr-md-auto font-weight-normal" style="margin-left:30%;">Backstore Order List</h5>
  <a class="btn btn-outline-primary" href="backstoreOrderAdd.php"> Add <img src="edit.png" width="30px" height="30px"> </a>
</div>

<!-- Order information table -->
<table class="table">
    <thead>
      <tr>
        <th scope="col">Order ID</th>
        <th scope="col">Products List</th>
        <th scope="col">Full Name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Postal</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $query = 
        "SELECT o.order_id, op.product_name, op.product_price, op.product_quantity, r.firstname, r.email, r.address, r.postal 
        FROM orders o 
        JOIN register r ON o.register_id = r.id
        JOIN orders_products op ON o.order_id = op.order_id;";
        $result = $conn->query($query);
        while ($row = $result->fetch_assoc()) {
          $last_id = $row['order_id'];
        ?>
          <tr>
            <th scope="row"><?php echo $row['order_id'] ?></th>
            <td><?php echo $row['product_name'] . ' ' . '$' . $row['product_price']  .  ' ' . $row['product_quantity'] . 'x' ?></td>
            <td><?php echo $row['firstname']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['postal']?></td>
            <td class='align-middle text-center'>
              <a class="btn btn-outline-success" href="backstoreOrderEdit.php?action=edit&order_id=<?php echo $row["order_id"]; ?>&product_name=<?php echo $row["product_name"]; ?>&product_price=<?php echo $row["product_price"]; ?>&product_quantity=<?php echo $row["product_quantity"]; ?>&firstname=<?php echo $row["firstname"]; ?>&email=<?php echo $row["email"]; ?>&address=<?php echo $row["address"]; ?>&postal=<?php echo $row["postal"]; ?>">Edit <img src='edit.png' width='30px' height='30px'> </a>
              <a class="btn btn-outline-danger" href="backstoreOrder.php?action=delete&order_id=<?php echo $row["order_id"]; ?>&product_name=<?php echo $row["product_name"]; ?>">Delete <img src='edit.png' width='30px' height='30px'> </a>
            </td>
          </tr>
        <?php 
          } 
        ?>
    </tbody>
  </table>

  </body>
</html>

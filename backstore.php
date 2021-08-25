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
<div class="d-flex flex-column flex-md-row align-items-center p-2 px-md-4 bg-white">
	<button type='submit' style="background-color:#343A40; border-radius:30x; width:100px; height:40px;" id="borderradius" name='userlist'><a href='backstoreUserList.php' style='color:white; border-radius:30x;'>To User List</a></button>
	<h5 class="my-0 mr-md-auto font-weight-normal" style="margin:auto;">Backstore</h5>
	<a class="btn btn-outline-primary" href="backstoreAdd.php">Add <img src="edit.png" width="30px" height="30px"> </a>
  </div>

<!-- main section -->
<br>
<main>
		<table class="table table-hover text-center">
			<thead>
			<tr>
				<th scope="col"></th>
				<th scope="col">Product</th>
				<th scope="col">Aisle</th>
				<th scope="col">Inventory</th>
				<th scope="col">Price</th>
				<th scope="col">Edit/Delete</th>
			</tr>
			</thead>
			<tbody>

			<?php 
				$query = mysqli_query($conn, "SELECT * FROM products");

				while($row = mysqli_fetch_array($query))
				{
					echo "
					<tr>
						<td class='align-middle text-center'><img class='img-fluid' src='" . $row['image'] . "' alt='Album screenshot' width='100'></td>
						<td class='align-middle text-center'>" . $row['name'] . "</td>
						<td class='align-middle text-center'>" . $row['aisle'] . "</td>
						<td class='align-middle text-center'>" . $row['stock'] . " in stock</td>
						<td class='align-middle text-center'>$" . $row['price'] . "</td>
						<td class='align-middle text-center'>
							<a class='btn btn-outline-success' href='backstoreEdit.php?productId=" . $row['id'] . "'>Edit <img src='edit.png' width='30px' height='30px'> </a>
							<a class='btn btn-outline-danger' href='backstoreDelete.php?productId=" . $row['id'] . "'>Delete <img src='edit.png' width='30px' height='30px'> </a>
						</td>
					</tr>
					";

				}
			?>
			
			</tbody>
		</table>


</body>
</html>


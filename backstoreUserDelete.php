<?php 
session_start();
//include ('index.php');
include('dbcon.php'); 
include('authenticate.php'); 
include('session.php'); 

$query = "DELETE FROM products WHERE id='$_GET[productId]'";

if(mysqli_query($conn,$query))
	header("refresh:1; url=backstore.php");
else
	echo "Not Deleted";

?>
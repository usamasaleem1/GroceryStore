<?php 
session_start();
//include ('index.php');
include('dbcon.php'); 
include('authenticate.php'); 
include('session.php'); 


mysqli_select_db($conn, 'HTADFpjYkD')

$query = "DELETE FROM products WHERE id='$_GET[id]'";

if(mysqli_query($conn,$query))
	header("refresh:1; url=backstore.php");
else
	echo "Not Deleted";

/*
mysqli_select_db($conn, 'HTADFpjYkD')

$sql = "SELECT * FROM products";

$records = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($records))
{
	echo "<tr>";
	echo "<td>".$row['name'].;
	echo "<td>".$row['aisle'].;
	echo "<td>".$row['description'].;
	echo "<td>".$row['price'].;
	echo "<td>".$row['count'].;
	echo "<td>".$row['image'].;
	echo "<td>"

}
*/

/*
if($query)
{
	?>
	<script>
		alert("Successful");
	</script>
	<?php
}

else
{
	?>
	<script>
		alert("Not successful");
	</script>
	<?php
}
*/

/*
if (isset($_GET['id']))
{
	$id = $_GET['id'];
	$sql = "DELETE FROM products WHERE id='$id'";
	$res = mysql_query($sql) or die("Failed" . mysql_error());
	echo "Success";
}
*/


/*
$sql = "DELETE FROM products WHERE productId='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql))
{
	echo "Record deleted successfully.";
}
else
{
	echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);

*/

?>
<!--
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



</body>
</html>
-->
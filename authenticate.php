<?php session_start(); ?>
<?php include('dbcon.php'); ?>
echo "test1";
<?php
	if (isset($_POST['submit']))
		{
			$username = mysqli_real_escape_string($conn, $_POST['user']);
			$password = mysqli_real_escape_string($conn, $_POST['pass']);
			
			$query 		= mysqli_query($conn, "SELECT * FROM register WHERE password='$password' and email='$email'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			echo "got here";
			if ($num_row > 0) 
				{			
					$_SESSION['user_id']=$row['user_id'];
					header('location:home.php');
					
				}
			else
				{
					echo 'Invalid Username and Password Combination';
				}
		}
  ?>
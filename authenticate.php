<?php

$dbhost = 'remotemysql.com:3306';
$dbuser = 'HTADFpjYkD';
$dbpass = 'Ng7fU9bD9m';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbuser);

if(! $conn ) {
   die('Could not connect: ' . mysqli_error());
}



if ($conn)
{

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // email and password sent from form 
        
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $password = mysqli_real_escape_string($db,$_POST['password']); 
        
        $sql = "SELECT id FROM register WHERE email = '$email' and passcode = '$password'";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];
        
        $count = mysqli_num_rows($result);
        
        // If result matched $email and $password, table row must be 1 row
          
        if($count == 1) {
           session_register("email");
           $_SESSION['login_user'] = $email;
           
           header("location: welcome.php");
        }else {
           $error = "Your Login Name or Password is invalid";
        }
     }


$conn->close();
			
		}
	}
else{
	echo "could not connect";
}
?>
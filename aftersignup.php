<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>user_dashboard</title>
  </head>
  <body>
    <p style="text-align: center;"><u><b>Sign up Succesfull!</b></u></p>
    <p style="text-align: center;"><u><b><br>
        </b></u></p>
    <p>




      <?php

$dbhost = 'remotemysql.com:3306';
$dbuser = 'HTADFpjYkD';
$dbpass = 'Ng7fU9bD9m';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if(! $conn ) {
   die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';
mysqli_close($conn);



// //connecting to db	  
// $host = 'remotemysql.com:3306';
// $db = 'HTADFpjYkD';
// $user = 'HTADFpjYkD';
// $pass = 'Ng7fU9bD9m'
// $charset = 'utf8mb4';

// $conn = new mysqli($host,$user,$pass,$db); 
// if ($conn-> connect_errno) { 
//     trigger_error('Database connection failed: ' . $conn->connect_error); 
//     }

if ($conn)
{
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$firstname = $_POST['firstname'];	
	$email = $_POST['email'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$postal = $_POST['postal'];
//$query = "insert into member values ('" . $_POST["name"] . "' where employee_id = ". $_POST["idz"];
$query = "

INSERT INTO 'HTADFpjYkD' 'register' ('firstname', 'email',
'password', 'address', 'postal') VALUES ('$firstname', '$email', '$password', '$address', '$postal'); ";
echo 'step3';
mysql_query($query);
echo 'step4';
echo "Thanks for getting in touch.";
			
		}
	}
else{
	echo "could not connect";
}


?>





    </p>
  </body>
</html>

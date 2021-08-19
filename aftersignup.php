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
//connecting to db	  
$host = 'remotemysql.com:3306';
$db = 'HTADFpjYkD';
$user = 'HTADFpjYkD';
$pass = 'Ng7fU9bD9m'
$charset = 'utf8mb4';

$conn = new mysqli($host,$user,$pass,$db); 
if ($conn-> connect_errno) { 
    trigger_error('Database connection failed: ' . $conn->connect_error); 
    }

if ($conn)
{
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$firstname = (int)$_POST['firstname'];	
	$email = $_POST['email'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$postal = $_POST['postal'];

//$query = "insert into member values ('" . $_POST["name"] . "' where employee_id = ". $_POST["idz"];
	$q2="INSERT INTO member(firstname,email,password,address,postal)	values ('$firstname',,'$email','$password','$address','$postal')";
	echo $q2;
	
	 $query_id = oci_parse($conn, $q2); 		
	 $r = oci_execute($query_id);
			
		}
	}
else{
	echo "could not connect";
}
?>
    </p>
  </body>
</html>

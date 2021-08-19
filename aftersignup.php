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

echo "step0";

if ($conn)
{
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$firstname = $_POST['firstname'];	
	$email = $_POST['email'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$postal = $_POST['postal'];
echo "step1";

//$query = "insert into member values ('" . $_POST["name"] . "' where employee_id = ". $_POST["idz"];
// $query = "INSERT INTO 'HTADFpjYkD' 'register' ('firstname', 'email', 'password', 'address', 'postal') VALUES ('$firstname', '$email', '$password', '$address', '$postal'); ";
// echo 'step3';
// mysql_query($query);
// echo 'step4';
// echo "Thanks for getting in touch.";

$sql = "INSERT INTO register (firstname, email, password, address, postal)
VALUES ('$firstname', '$email', '$password', '$address', '$postal')";

echo "step2";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "step3";
$conn->close();
			
		}
	}
else{
	echo "could not connect";
}

echo " step4";
?>


    </p>
  </body>
</html>
